<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   function addProductView(){
    return view("frontend.addProduct");
   }

   //Function for add data into DB
   function addproduct(Request $request){
    
      $data=new Product;
      $data->pname=$request->pname;
      $data->pcategory=$request->pcategory;
      $data->pdesc=$request->pdesc;
      $data->price=$request->price;
      $data->status=$request->status;
      $data->save();
      return redirect()->route("ProductView");


   }

   function ProductView(){

      $data=Product::all();
      return view("frontend.ProductView",compact('data'));
   }

   function deleteProduct($id){

      $data=Product::find($id);
      $data->delete();
      return redirect()->route("ProductView")->with("message","Delete Successfully");

   }

   function updateProductView($id){

      $item=Product::find($id);
      return view("frontend.updateProduct",compact('item'));


   }
   function updateProduct(Request $request, $id){

       
      $data=Product::find($id);
      $data->pname=$request->pname;
      $data->pcategory=$request->pcategory;
      $data->pdesc=$request->pdesc;
      $data->price=$request->price;
      // $data->status=$request->status;
      $data->update();
      return redirect()->route("ProductView")->with("message","Update Product Successfully"); 


   }

   function updatestatus($id){

      $data=Product::find($id);

      if($data->status==1){
         $data->status=2;
         
      }
      else{
         $data->status=1;
         
      }
      $data->update();
      if($data->status==1){

         return redirect()->route("ProductView")->with("message","active");
      }
      else{
         return redirect()->route("ProductView")->with("message","Inactive");
      }
     

   }
}
