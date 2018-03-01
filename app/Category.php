<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function articles() {
        return $this->belongsToMany('App\Aricle', 'categories_articles', 'articles_id', 'categories_id');
    }
}
