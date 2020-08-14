<?php

namespace App\Http\Controllers;

use App\Model\Article;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(12);
        $latests = Article::latest()->take(4)->get();
        return view('home.index', compact('articles', 'latests'));
    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('home.article', compact('article'));
    }
}
