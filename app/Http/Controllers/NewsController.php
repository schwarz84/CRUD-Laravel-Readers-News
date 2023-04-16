<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Reader;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function showReaders(News $news)
    {
        return view('news.readers', compact('news'));
    }
}
