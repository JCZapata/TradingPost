@extends('layouts.main')

@section('content')
<div id='product-container' class="container-fluid p-0">
    <section class="container pt-3 pb-3 bg-light">
        <form class='form-group' method="POST" action="{{route('products.update',['id' => $product->id])}}" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <article class="row">
                <section class="col-md-3 col-sm-6">
                    <article class="product-grid mb-4 mt-4">
                        <div class="product-image">
                            <img class="pic-1" src="{{Storage::url($product->image)}}" style="max-width:280px; max-height:200px">
                        </div>
                    </article>
                    <article class='container-fluid p-0 mb-4'>
                      <br><br><br><br><br><br><br><br><br>
                        <label for="image">Cambiar imagen</label>
                        <input type="file" value="image" class='form-control-file' name="image" id="image">
                    </article>
                </section>
                <section class="col-md-9 col-sm-6">
                    <article class="card-body p-2 pl-4">
                        <h3 class="title mb-3"><input type="text" style="width: 100%;" name="name" id="name" value="{{$product->name}}"></h3>
                        <hr>
                        <dl class="item-property">
                            <dt>Descripción</dt>
                            <dd><input type="text" class='form-control' name="description" id="description" value="{{$product->description}}"></dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Categoría</dt>
                            <dd>
                                <select name="category_id" id="category_id">
                                    <option value="{{$product->category['id']}}" selected>{{$product->category['name']}}</option>
                                    @foreach ($categories as $category)
                                        @if ($category->name != $product->category['name'])
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </dd>
                        </dl>
                        <dl class="item-property">
                            <dt>Precio $</dt>
                            <dd><input type="number" class='form-control' name="price" id="price" value="{{$product->price}}"></dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="item-property">
                            <dt>Cantidad</dt>
                            <dd><input type="number" class='form-control' name="stock" id="price" value="{{$product->stock}}"></dd>
                        </dl>
                        <hr>
                        <dl class="item-property">
                            <dt>Creado el</dt>
                            <dd>{{$product->created_at}}</dd>
                        </dl>
                        <dl class="item-property">
                            <dt>Modificado el</dt>
                            <dd>{{$product->updated_at}}</dd>
                        </dl>
                        <div class='container-fluid p-0'>
                            <a href="{{ route('products.index') }}" class="btn btn-info btn-md">Volver</a>
                            <button class="btn btn-info btn-md">Actualizar</button>
                        </div>
                    </article>
                </section>

            </article>
        </form>
      <!--   @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
    </section>
</div>
@endsection
