<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $categories = Category::all();
      $products = Product::orderBy('name')->get();
      return view('admin.products.index')->with('products',$products)
                                         ->with('categories',$categories);
  }
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

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $categories = Category::all();
      $product = Product::find($id);
      return view('admin.products.edit')->with('product',$product)
                                        ->with('categories',$categories);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {

      /*$this->validate($request, [
          "name" => 'required',
      ]);*/

      $product = Product::find($id);

      $product->name = $request->input("name");
      $product->description = $request->input("description");
      $product->category_id = $request->input("category_id");
      $product->price = $request->input("price");
      $product->stock = $request->input("stock");
      $path = $request->file('image');
      //dd($path);

      if (!is_null($path)) {
          $product->image = $path ->store('public/products');
      }

      $product->save();

      return redirect()->route('products.edit',['id' => $id]);
  }

  public function destroy($id)
  {
      $product = Product::find($id);
      $product->delete();

      return redirect()->route("products.index");
  }

}
