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



$articles = Article::with('user')->paginate(5);
$interesting_articles = Article::where('interesting','=', 'yes')->paginate(2);




    return view('site.index', compact(['articles', 'interesting_articles']));
}


}
