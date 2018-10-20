<?php

namespace App\Sys;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title','body','slug','author_id'];

    public function author()
    {
    	return $this->belongsTo('App\Sys\Author');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Sys\Category');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Sys\Tag');
    }

    public function comments()
    {
        return $this->hasMany('App\Sys\Comment');
    }

}
