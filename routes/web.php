<?php

use App\Http\Controllers\ProductController;
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

 Route::get('/',function(){
    return view("welcome");
 });
 
//   Route for add Product view 
 Route::get('addProductView',[ProductController::class,"addProductView"])->name("addProductView");

//  Route for addProduct 

Route::post("addproduct",[ProductController::class,"addproduct"])->name("addproduct");

 //Route For DataShow

 Route::get("ProductView",[ProductController::class,"ProductView"])->name("ProductView");

 //Route For Delete Product

 Route::get("deleteProduct/{id}",[ProductController::class,"deleteProduct"])->name('deleteProduct');


