<?php

namespace App\Http\Controllers;

// use App\Model\Article;
// use App\Model\Category;
// use App\Model\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $datas = [
        //     'User' => User::count(),
        //     'Article' => Article::count(),
        //     'Category' => Category::count(),
        // ];

        return view('admin.dashboard.index');
    }
}
