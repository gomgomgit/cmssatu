<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $datas = Category::all();
        return view($this->view . 'create', compact('datas'));
    }

    public function store(Request $request)
    {
        if ($request->image_file) {
            $request = $this->uploadImage($request);
        }

        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ]);

        $request->merge(['user_id' => Auth::user()->id]);

        $this->model->create($request->all());
        return redirect($this->redirect);
    }

    public function edit($id)
    {
        $model = $this->model->find($id);
        $this->authorize('update', $model);

        $datas = Category::all();
        $data = $model;

        return view($this->view . 'edit', compact('datas', 'data'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->model->find($id);

        if ($request->image_file) {
            $this->removeImage($data->image);
            $request = $this->uploadImage($request);
        }

        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ]);

        $data->update($request->all());

        return redirect($this->redirect);
    }

    public function delete($id)
    {
        $model = $this->model->find($id);

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
}
