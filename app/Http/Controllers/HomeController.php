<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Category;
use App\Model\Comment;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    public function __construct()
    {
        Paginator::useTailwind();
    }

    public function index()
    {
        $populars = Article::orderBy('counter')->take(5)->get();
        $latests = Article::latest()->take(4)->get();

        // dd($latests->pluck('id'));

        $articles = Article::whereNotIn('id', $latests->pluck('id'))->orderBy('created_at', 'desc')->paginate(10);

        // $article = Article::orderBy('created_at', 'desc')->get();
        // $articles = $article->filter(function ($value, $key) {
        //     return $key > 3;
        // })->all();
        // $articles = $articles->paginate(12);

        // $articles = Article::orderBy('created_at', 'desc')->except('id', $latests)->get();

        // $lastLatest = $latests->reverse()->first();

        // $articles = Article::orderBy('created_at', 'desc')->where('created_at', '<', $lastLatest->created_at)->paginate(12);

        // $articles = Article::orderBy('created_at', 'desc')->paginate(12);

        // $take = 12;
        // $skip = 4;
        // $articles = Article::orderBy('created_at', 'desc')->take($take)->skip($skip + ($page - 1) * $take);

        // $articles = Article::orderBy('created_at', 'desc')->skip(4)->take(60)->get();

        $categories = Category::withCount('articles')->orderBy('articles_count', 'desc')->take(10)->get();

        // dd($categories);

        // $categories = Category::orderBy(function ($cate) {
        //     $cate->article->count();
        // })->take(10);

        return view('home.index', compact('articles', 'populars', 'latests', 'categories'));
    }
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $comments = Comment::where('article_id', $article->id)->get();
        $article->increment('counter');
        return view('home.article', compact('article', 'comments'));
    }
}
