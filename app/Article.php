<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';

    public function user() {
        return $this->belongsTo('App\User', 'author_id');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }

    public function categories() {
        return $this->belongsToMany('App\Category');
    }

}
