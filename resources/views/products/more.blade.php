@extends('layouts.main')

@section('content')
<div id='product-container' class="container-fluid p-0">
    <section class="container pt-3 pb-3 bg-light transparente">
            <article class="row">
                <section class="col-md-3 col-sm-6">
                    <article class="product-grid mb-4 mt-4">
                        <div class="product-image">
                            <img class="pic-1" src="{{Storage::url($product->image)}}" style="max-width:280px; max-height:200px">
                        </div>
                </section>
                <section class="col-md-9 col-sm-6">
                    <article class="card-body p-2 pl-4">
                        <h3 class="title mb-3" style="width: 100%">{{$product->name}}</h3>
                        <hr>
                        <dl class="item-property">
                            <dt>Descripción</dt>
                            <dd><p>{{$product->description}}</p></dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Categoría</dt>
                            <dd><p>{{$product->category['name']}}</p></dd>
                        </dl>
                        <dl class="item-property">
                            <dt>Precio</dt>
                            <dd><p>$ {{$product->price}}</p></dd>
                        </dl>  <!-- item-property-hor .// -->
                        <dl class="item-property">
                            <dt>Cantidad</dt>
                            <dd><p>{{$product->stock}}</p></dd>
                        </dl>
                        <hr>
                    </article>
                </section>

            </article>
    </section>
</div>
@endsection
