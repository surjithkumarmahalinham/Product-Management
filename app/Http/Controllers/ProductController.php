<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use DB;
use Image;
class ProductController extends Controller
{
    public function index()
    {
        $pro=Product::leftJoin('categories','products.category_id','=','categories.id')->leftJoin('sub_categories','products.subcategory_id','=','sub_categories.id')->select('categories.category_name as cname','sub_categories.subcategory_name as sname','products.*')->get();
        return view('product.index',compact('pro'));
    }
    public function create()
    {
    	$cat=Category::all();
    	return view('product.create',compact('cat'));
    }
    public function  SubCategory(Request $request)
    {
    return SubCategory::where('category_id','=',$request->top_cat)->get();
  	}
    public function store(Request $request)
    {
	        $request->validate([
	            'category_id'=>'required',
	            'subcategory_id'=>'required',
	            'product_name'=>'required|min:2|max:100',
	            'product_code'=>'required|unique:products,product_code',
	            'amount'=>'required',
	            'discount_amount'=>'required',
	            'tax'=>'required',
	            'description'=>'required',
	            'image'=>'image|mimes:jpeg,png,jpg|max:2048',
	            'meta_title'=>'required'
	        ]);

        $pro=new Product();
        $pro->category_id=$request->category_id;
        $pro->subcategory_id=$request->subcategory_id;
        $pro->product_name=$request->product_name;
        $pro->product_code=$request->product_code;
        $pro->amount=$request->amount;
        $pro->discount_amount=$request->discount_amount;
        $pro->tax=$request->tax;
        $pro->description=$request->description;
        $pro->meta_title=$request->meta_title;
        $pro->meta_desc=$request->meta_desc;
        $pro->meta_key=$request->meta_key;

        if($request->hasFile('image')) {
		    $image       = $request->file('image');
		    $filename    = $image->getClientOriginalName();

		    $image_resize = Image::make($image->getRealPath());              
		    $image_resize->save(public_path('images/products/' .$filename));
		    $pro->image=$filename;
		}		 else{
				      $pro->image='';
		}
        $pro->save();
        return Redirect::route('product.index')->with('success','Product Added Successfully');
    }
    public function edit($id)
    {
    	$cat=Category::all();
    	$subcat=SubCategory::all();
        $pro=Product::find($id);
        return view('product.edit',compact('cat','subcat','pro'));
    }
    public function update(Request $request, $id)
    {
    	$request->validate([
	            'category_id'=>'required',
	            'subcategory_id'=>'required',
	            'product_name'=>'required|min:2|max:100',
	            'product_code'=>'required',
	            'amount'=>'required',
	            'discount_amount'=>'required',
	            'tax'=>'required',
	            'description'=>'required',
	            'image'=>'image|mimes:jpeg,png,jpg|max:2048',
	            'meta_title'=>'required'
	        ]);

        $pro=Product::find($id);
        $pro->category_id=$request->category_id;
        $pro->subcategory_id=$request->subcategory_id;
        $pro->product_name=$request->product_name;
        $pro->product_code=$request->product_code;
        $pro->amount=$request->amount;
        $pro->discount_amount=$request->discount_amount;
        $pro->tax=$request->tax;
        $pro->description=$request->description;
        $pro->meta_title=$request->meta_title;
        $pro->meta_desc=$request->meta_desc;
        $pro->meta_key=$request->meta_key;

        if($request->hasFile('image')) {
		    $image       = $request->file('image');
		    $filename    = $image->getClientOriginalName();

		    $image_resize = Image::make($image->getRealPath());              
		    $image_resize->resize(800, 400);
		    $image_resize->save(public_path('images/products/' .$filename));
		    $pro->image=$filename;
		}		 else{
				      $pro->image=$pro->image;
		}
        $pro->update();
        return Redirect::route('product.index')->with('success','Product Updated Successfully');
    }
    public function destroy($id)
    {
        $pro=Product::find($id);
        $pro->delete();
        return Redirect::route('product.index')->with('success','Product Deleted Successfully');
    }
}
