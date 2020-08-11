<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->model = new Category();
    }

    public function index()
    {
        $datas = $this->model->paginate(10);
        return view('admin.categories.index', compact('datas'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $this->model->create($request->all());
        return view('admin.categories.index');
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        return view('admin.categories.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->model->find($id);
        $data->name = $request->name;
        $data->save();

        return redirect('/admin/categories');
    }

    public function delete($id)
    {
        $this->model->find($id)->delete();
        return redirect('/admin/categories');
    }
}
