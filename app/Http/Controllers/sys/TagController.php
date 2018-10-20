<?php

namespace App\Http\Controllers\sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sys\Tag;

class TagController extends Controller
{
    public function index()
    {
    	$tags = Tag::latest()->get();
    	return view('sys.tag.index',['tags'=>$tags]);
    }

    public function create()
    {
    	return view('sys.tag.create');
    }

    public function store(Request $r)
    {
    	Tag::create([
    		'name' => $r->name,
    		'slug' => str_slug($r->name),
    	]);

    	return redirect(route('tag.index'))->with('success','Tag Submited Successfully');
    }

    public function destroy($id)
    {
    	Tag::find($id)->delete();

    	return redirect(route('tag.index'))->with('success','Tag Deleted Successfully');
    }
}
