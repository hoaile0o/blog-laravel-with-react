<?php

namespace App;

use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Taggable;
    protected $table = "posts";
    protected $fillable = ['user_id', 'title', 'contents', 'description', 'picture'];

    public function comments()
    {
        return $this->hasMany('App\Comments');
    }

    public function category()
    {
       return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}

