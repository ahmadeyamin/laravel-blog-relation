<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sys\Post;

class HomeController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->get();
    	return view('sys.home.home',compact('posts')); 
    }
}
