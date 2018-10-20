<?php

namespace App\Sys;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug','desc'];

    public function posts()
    {
    	return $this->belongsToMany('App\Sys\Post');
    }
}
