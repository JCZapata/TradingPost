<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
  public function index()
    {
         $product = session('cart.products');
         return view('cart')->with('product', $product);
    }
  public function add($id)
    {
           $product = collect(session('cart.products'));
           $product = Product::find($id);
           $product[$product->id]=$product;
           session()->push('cart.products', $product);
           $limit = 10;
           $product = Product::make()->paginate($limit);
           return redirect('');
    }
  public function remove($id)
    {
       session()->pull('cart.products' . $id, "default");
       return view('');
    }
  public function flush(Request $request)
   {
       $request->session()->flush();
       return redirect('');
   }
  public function checkout()
   {
       $user = User::all();
       $product = Product::all();
       return view('cart.checkout')->with('user',$user)
                                       ->with('product',$product);
   }
}
