<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use DB;
class SubCategoryController extends Controller
{
    public function index()
    {
        $subcat=SubCategory::leftJoin('categories','sub_categories.category_id','=','categories.id')->select('categories.category_name as cname','sub_categories.*')->get();
        return view('subcategory.index',compact('subcat'));
    }
    public function create()
    {
    	$cat=Category::all();
        return view('subcategory.create',compact('cat'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>'required',
            'subcategory_name'=>'required|min:2|max:100'
        ]);

        $subcat=new SubCategory();
        $subcat->subcategory_name=$request->subcategory_name;
        $subcat->category_id=$request->category_id;
        $subcat->save();
        return Redirect::route('subcategory.index')->with('success','SubCategory Added Successfully');
    }
    public function edit($id)
    {
    	$cat=Category::all();
        $subcat=SubCategory::find($id);
        return view('subcategory.edit',compact('cat','subcat'));
    }
    public function update(Request $request, $id)
    {
    	$request->validate([
            'category_id'=>'required',
            'subcategory_name'=>'required|min:2|max:100'
        ]);

        $subcat=SubCategory::find($id);
        $subcat->subcategory_name=$request->subcategory_name;
        $subcat->category_id=$request->category_id;
        $subcat->update();
        return Redirect::route('subcategory.index')->with('success','SubCategory Updated Successfully');
    }
    public function destroy($id)
    {
        $subcat=SubCategory::find($id);
        $subcat->delete();
        return Redirect::route('subcategory.index')->with('success','SubCategory Deleted Successfully');
    }
}
