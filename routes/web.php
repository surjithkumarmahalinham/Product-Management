<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

	//product category start
     Route::get('/category', ['as' => 'category.index', 'uses' => 'CategoryController@index']);
     Route::get('/category/create', ['as' => 'category.create', 'uses' => 'CategoryController@create']);
     Route::post('/category/store', ['as' => 'category.store', 'uses' => 'CategoryController@store']);
     Route::get('/category/edit/{id}', ['as' => 'category.edit', 'uses' => 'CategoryController@edit']);
     Route::put('/category/update/{id}', ['as' => 'category.update', 'uses' => 'CategoryController@update']);
     Route::get('/category/delete/{id}', ['as' => 'category.delete', 'uses' => 'CategoryController@destroy']);
     //product category end

     //product subcategory start
     Route::get('/subcategory', ['as' => 'subcategory.index', 'uses' => 'SubCategoryController@index']);
     Route::get('/subcategory/create', ['as' => 'subcategory.create', 'uses' => 'SubCategoryController@create']);
     Route::post('/subcategory/store', ['as' => 'subcategory.store', 'uses' => 'SubCategoryController@store']);
     Route::get('/subcategory/edit/{id}', ['as' => 'subcategory.edit', 'uses' => 'SubCategoryController@edit']);
     Route::put('/subcategory/update/{id}', ['as' => 'subcategory.update', 'uses' => 'SubCategoryController@update']);
     Route::get('/subcategory/delete/{id}', ['as' => 'subcategory.delete', 'uses' => 'SubCategoryController@destroy']);
     //product subcategory end

     //product start
     Route::get('/product', ['as' => 'product.index', 'uses' => 'ProductController@index']);
     Route::get('/product/create', ['as' => 'product.create', 'uses' => 'ProductController@create']);
     Route::post('/product/store', ['as' => 'product.store', 'uses' => 'ProductController@store']);
     Route::get('/product/edit/{id}', ['as' => 'product.edit', 'uses' => 'ProductController@edit']);
     Route::put('/product/update/{id}', ['as' => 'product.update', 'uses' => 'ProductController@update']);
     Route::get('/product/delete/{id}', ['as' => 'product.delete', 'uses' => 'ProductController@destroy']);
     Route::get('product/subcategory', ['as' => 'product.subcat', 'uses' => 'ProductController@SubCategory']);
     //product end