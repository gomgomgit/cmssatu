<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new Category();
        $this->view = 'admin.categories.';
        $this->redirect = '/admin/categories';
    }

    public function index()
    {
        $this->authorize('viewAny', $this->model);

        $datas = $this->model->paginate(10);
        return view($this->view . 'index', compact('datas'));
    }

    public function create()
    {
        $this->authorize('create', $this->model);

        return view($this->view . 'create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', $this->model);

        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);
        $this->model->create($request->all());
        return redirect($this->redirect . '/index');
    }

    public function edit($id)
    {
        $this->authorize('update', $this->model);

        $data = $this->model->find($id);

        return view($this->view . 'edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('update', $this->model);

        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
        ]);
        $data = $this->model->find($id);
        $data->name = $request->name;
        $data->save();

        return redirect($this->redirect);
    }

    public function delete($id)
    {
        $model = $this->model->find($id);

        $this->authorize('delete', $model);

        Article::where('category_id', $id)->update([
            'category_id' => 1,
        ]);

        $model->delete();
        return redirect($this->redirect);
    }
}
