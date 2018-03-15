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

//table articles join with table users and out 5 pages
$articles = DB::table('articles')
            ->join('users', 'articles.author_id', '=', 'users.id')
            ->select('title', 'published_start', 'name', 'text')->paginate(5);



    return view('site.index', compact(['articles']));
}


}
