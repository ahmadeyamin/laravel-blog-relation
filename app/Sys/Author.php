<?php

namespace App\Sys;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name','location','is_admin','description'];

    public function posts()
    {
    	return $this->hasMany('App\Sys\Post');
    }

    public function comments()
    {
    	return $this->hasMany('App\Sys\Comment');
    }


}
