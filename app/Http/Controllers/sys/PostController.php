<?php

namespace App\Http\Controllers\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sys\Tag;
use App\Sys\Category;
use App\Sys\Author;
use App\Sys\Post;
use App\Sys\Comment;

class PostController extends Controller
{
    public function index()
    {

    	return view('sys.post.index',['posts' => Post::latest()->get()]);
    }

    public function show($slug)
    {
        $post = Post::where('slug',$slug)->first();
        $comments = Comment::where('post_id',$post->id)->latest()->get();
        return view('sys.home.show',compact('post','comments'));
    }

    public function create()
    {
    	$tags = Tag::all();
    	$categoris = Category::all();
    	$Authors = Author::all();
    	return view('sys.post.create',compact('tags','categoris','Authors'));
    }

    public function store(Request $r)
    {
    	$this->validate($r,[
            'title' => 'required|unique:posts',
            'author' => 'required',
            'category' => 'required',
            'tag' => 'required',
            'body' => 'required',
        ]);

        $post = Post::create([
            'author_id' => $r->author,
            'title' => $r->title,
            'slug' => str_slug($r->title),
            'body' => $r->body,
        ]);

        $post->tags()->attach($r->tag);
        $post->categories()->attach($r->category);

        return redirect(route('post.index'))->with('success','Post Submited Successfully');
    }

    public function destroy ($id)
    {
        Post::find($id)->tags()->detach();
        Post::find($id)->categories()->detach();
        Post::find($id)->delete();

        return redirect(route('post.index'))->with('success','Post Deleted Successfully');
    }
}
