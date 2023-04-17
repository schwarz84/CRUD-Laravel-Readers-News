<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class ReaderNewsController extends Controller
{
    public function getNewsWithReaders($id)
    {
        $news = News::with('readers')->findOrFail($id);
        return response()->json($news);
    }
}
