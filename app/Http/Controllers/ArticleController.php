<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Category;
use App\Model\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new Article();
        $this->view = 'admin.articles.';
        $this->redirect = '/admin/articles';
        $this->imgPath = public_path('img');
    }

    public function index()
    {
        $this->authorize('viewAny', $this->model);

        // $this->authorize('view', $this->model->find(Auth::user()->id));

        if (Auth::user()->role == 'author') {
            $datas = $this->model->where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $datas = $this->model->orderBy('created_at', 'desc')->paginate(10);
        }

        return view($this->view . 'index', compact('datas'));
    }

    public function create()
    {
        $this->authorize('create', $this->model);

        $categories = Category::all();
        $tags = Tag::all();
        return view($this->view . 'create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $this->authorize('create', $this->model);

        if ($request->image_file) {
            $request = $this->uploadImage($request);
        }

        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ]);

        $request->merge([
            'user_id' => Auth::user()->id,
            'slug' => Str::of($request->title)->slug('-'),
        ]);

        $lastArticle = $this->model->create($request->all());

        $tagCollect = collect([]);

        foreach ($request->tags as $tag) {
            if ($findTag = Tag::where('name', '=', $tag)->first()) {
                $targetTag = $findTag->id;
            } else {

                $targetTag = Tag::create([
                    'name' => $tag,
                ])->id;
            }
            $tagCollect->push($targetTag);

        }
        // dd($tagCollect);
        $lastArticle->tags()->sync($tagCollect);

        // $this->storeTags($request->tags, $last);

        return redirect($this->redirect);
    }

    public function edit($id)
    {
        $model = $this->model->find($id);
        $this->authorize('update', $model);

        $categories = Category::all();
        $tags = Tag::all();
        $data = $model;

        return view($this->view . 'edit', compact('data', 'categories', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->model->find($id);
        $this->authorize('update', $data);

        if ($request->image_file) {
            $this->removeImage($data->image);
            $request = $this->uploadImage($request);
        }

        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ]);

        $request->merge([
            'slug' => Str::of($request->title)->slug('-'),
        ]);

        $data->update($request->all());

        $tagCollect = collect([]);

        foreach ($request->tags as $tag) {
            if ($findTag = Tag::where('name', '=', $tag)->first()) {
                $targetTag = $findTag->id;
            } else {

                $targetTag = Tag::create([
                    'name' => $tag,
                ])->id;
            }

            $tagCollect->push($targetTag);

        }

        $data->tags()->sync($tagCollect);

        return redirect($this->redirect);
    }

    public function delete($id)
    {
        $model = $this->model->find($id);

        $this->authorize('delete', $model);

        $this->removeImage($model->image);

        $model->delete();
        return redirect($this->redirect);
    }

    public function uploadImage($request)
    {
        $img = $request->file('image_file');
        $newName = time() . '.' . $img->getClientOriginalExtension();

        $img->move($this->imgPath, $newName);

        $request->merge([
            'image' => $newName,
            // 'user_id' => Auth::user()->id,
        ]);

        return $request;
    }

    public function removeImage($img)
    {
        $fullPath = $this->imgPath . '/' . $img;

        if ($img && file_exists($fullPath)) {
            unlink($fullPath);
        }
    }

    public function storeTags($tags, $lastArticle)
    {
        // foreach ($tags as $tag) {
        //     $lastTag = Tag::create([
        //         'name' => $tag,
        //     ]);

        // }
    }
}
