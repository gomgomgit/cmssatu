<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Category;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(12);
        $latests = Article::latest()->take(4)->get();

        $categories = Category::withCount('articles')->orderBy('articles_count', 'desc')->take(10)->get();

        // dd($categories);

        // $categories = Category::orderBy(function ($cate) {
        //     $cate->article->count();
        // })->take(10);

        return view('home.index', compact('articles', 'latests', 'categories'));
    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('home.article', compact('article'));
    }
}
