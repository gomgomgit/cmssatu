<?php

namespace App\Http\Controllers;

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
        $datas = $this->model->paginate(10);
        return view($this->view . 'index', compact('datas'));
    }

    public function create()
    {
        return view($this->view . 'create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);
        $this->model->create($request->all());
        return redirect($this->redirect . '/index');
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        return view($this->view . 'edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
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
        $this->model->find($id)->delete();
        return redirect($this->redirect);
    }
}
