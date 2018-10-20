<?php

namespace App\Http\Controllers\sys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sys\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $cat = Category::latest()->get();
    	return view('sys.Category.index',['cats'=>$cat]);
    }

    public function create()
    {
    	return view('sys.Category.create');
    }

    public function store(Request $r)
    {
        $this->validate($r,[
            'name' => 'required|unique:categories',
            'slug' => 'unique:categories',
        ]);

    	Category::create([
    		'name' => $r->name,
    		'slug' => str_slug($r->name),
    		'desc' => $r->desc,
    	]);

        return redirect(route('category.index'))->with('success','Category Submited Successfully');
    }

    function destroy($id){
        Category::find($id)->delete();
        return redirect(route('category.index'))->with('success','Category Deleted Successfully');
    }
}
