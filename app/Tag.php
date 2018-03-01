<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function articles() {
        return $this->belongsToMany('App\Aricle', 'tags_articles', 'articles_id', 'tags_id');
    }
}
