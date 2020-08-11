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
        $datas['datas'] = $this->model->all();
        return view('admin.categories.index', $datas);
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
}
