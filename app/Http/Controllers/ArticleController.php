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
    }

    public function index()
    {
        $datas = $this->model->orderBy('created_at', 'desc')->paginate(10);
        return view($this->view . 'index', compact('datas'));
    }

    public function create()
    {
        $datas = Category::all();
        return view($this->view . 'create', compact('datas'));
    }

    public function store(Request $request)
    {
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
        $datas = Category::all();
        $data = $this->model->find($id);

        return view($this->view . 'edit', compact('datas', 'data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ]);

        $data = $this->model->find($id);
        $data->name = $request->name;
        $data->save();

        return redirect($this->redirect);
    }

    public function delete($id)
    {
        $this->model->find($id)->delete();
        return redirect($this->redirect);
    }
}
