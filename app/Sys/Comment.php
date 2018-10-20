<?php

namespace App\Sys;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['author_id','body','post_id'];

    public function author()
    {
    	return $this->belongsTo('App\Sys\Author');
    }

    public function post()
    {
    	return $this->belongsTo('App\Sys\Post');
    }
}
