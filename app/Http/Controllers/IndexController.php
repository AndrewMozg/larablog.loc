<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;

use DB;

class IndexController extends Controller
{
    // 
    public function execute(Request $request) {



$articles = Article::with('user')->get();
dd($articles);





    return view('site.index', compact(['articles']));
}


}
