<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('blog', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('detail-blog', compact('article'));
    }
}
