<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
     /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $categories = Category::all();
      return view('admin.products.create')->with('categories',$categories);
  }
  /**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $this->validate($request, [
        "name" => 'required|unique:products',
        "description"  => 'required',
        "category_id" => 'required',
        "price" => 'required|integer',
        "stock" => "required|integer",
        "image" => "image|required",
    ],[
      "required" => 'El campo no puede estar vacío',
      "unique"  => 'El producto ya existe',
      "image" => 'El archivo debe ser una imagen',
      "integer" => 'Este dato debe ser numérico',
    ]);

    $product = new Product([
        'name' => $request['name'],
        'description' => $request['description'],
        'category_id' => $request['category_id'],
        'price' => $request['price'],
        'stock' => $request['stock'],
        'image' => $request['image']->store('public/products'),
    ]);

    $product->save();
    //return redirect()->route('products.show',['id' => $product->id]);
    return redirect()->route('home');
  }
}
