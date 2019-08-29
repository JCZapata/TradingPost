<?php

namespace App\Http\Controllers;

//use App\category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 public function show($id)
  {
      $products = Product::where('category_id','=',$id)->paginate(8);
      return view('products.show')->with("products", $products);
  }

  public function more($id)
   {
       $product = Product::find($id);
       return view('products.more')->with("product", $product);
   }

  public function search(Request $request)
  {
      $input = $request->input('busqueda');
      $products = Product::where('name','LIKE','%'.$input.'%')->paginate(8);
      return view('products.show')->with("products", $products);
  }
}
