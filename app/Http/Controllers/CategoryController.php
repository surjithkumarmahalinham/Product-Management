<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Category;
use DB;
class CategoryController extends Controller
{
    public function index()
    {
        $cat=Category::all();
        return view('category.index',compact('cat'));
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required|min:2|max:100'
        ]);

        $cat=new Category();
        $cat->category_name=$request->category_name;
        $cat->save();
        return Redirect::route('category.index')->with('success','Category Added Successfully');
    }
    public function edit($id)
    {
        $cat=Category::find($id);
        return view('category.edit',compact('cat'));
    }
    public function update(Request $request, $id)
    {
    	$request->validate([
            'category_name'=>'required|min:2|max:100'
        ]);

        $cat=Category::find($id);
        //dd($prduct);
        $cat->category_name=$request->category_name;
        $cat->update();
        return Redirect::route('category.index')->with('success','Category Updated Successfully');
    }
    public function destroy($id)
    {
        $cat=Category::find($id);
        $cat->delete();
        return Redirect::route('category.index')->with('success','Category Deleted Successfully');
    }
}
