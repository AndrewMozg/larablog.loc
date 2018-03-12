<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }

    public function categories() {
        return $this->belongsToMany('App\Category');
    }

    protected $fillable = ['title','subtitle', 'url', 'keywords', 'description', 'annotation', 'text', 'images', 'docs', ' author_id', 'published_start', 'published_end', 'deleted_at'];
}
