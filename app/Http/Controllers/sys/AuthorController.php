<?php

namespace App\Http\Controllers\Sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sys\Author;


class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::latest()->get();
    	return view('sys.author.index',['authors'=>$authors]);
    }

    public function create()
    {
    	return view('sys.author.create');
    }


    public function store(Request $r)
    {
        $this->validate($r,[
            'name' => 'required|unique:authors',
        ]);

    	Author::create([
    		'name' => $r->name,
    		'location' => $r->location,
    		'description' => $r->desc,
    	]);

        return redirect(route('author.index'))->with('success','author Created Successfully');
    }

    function destroy($id){
        Author::find($id)->delete();
        return redirect(route('author.index'))->with('success','author Deleted Successfully');
    }
}
