<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

use DB;

class IndexController extends Controller
{
    // 
    public function execute(Request $request) {

    $articles = Article::all();

    return view('site.index', compact('articles'));
}

}
