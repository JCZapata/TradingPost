<?php
use App\Product;
$products = Product::paginate(4);
 ?>

@extends('layouts.main')

@section('content')
<section>
  <div id="carousel-1" class="carousel slide" data-ride="carousel">
     <!-- Indicadores -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-1" data-slide-to="1"></li>
      <li data-target="#carousel-1" data-slide-to="2"></li>
    </ol>
     <!-- Sliders -->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <a href="#"><img src="img/carousel-1.jpg" class="d-block img-fluid w-100" alt="..."></a>
      </div>

      <div class="carousel-item">
        <a href="#"><img src="img/carousel-2.png" class="d-block img-fluid w-100" alt="..."></a>
      </div>

      <div class="carousel-item">
        <a href="#"><img src="img/carousel-3.jpg" class="d-block img-fluid w-100" alt="..."></a>
      </div>
    </div>
     <!-- Controles -->
    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <br><br>
  <section>
    <div id='product-container' class="container-fluid p-0">
        <article class="container pt-3 pb-3">
            <section class="row">
                @forelse ($products as $product)
                <article class="col-md-3 col-sm-6">
                    <section class="product-grid mb-4">
                        <article class="product-image">
                            <img class="pic-1" src="{{Storage::url($product->image)}}">
                             <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </article>
                        <article class="product-content">
                            <h3 class="title"><a href="#">{{$product->name}}</a></h3>
                            <h4 class="category">{{$product->category['name']}}</h4>
                            <p class="price">$ {{$product->price}}</p>
                        </article>
                    </section>
                </article>
                @empty
                <div style='height:400px' class='no-results-container d-flex container-fluid mb-5 text-white text-center'>
                    <h2 class='no-results align-self-center'>No se encontraron resultados.</h2>
                </div>

                @endforelse
            </article>
        <div class='container-fluid d-flex justify-content-center'>
            {{$products->links()}}
        </div>
    </div>
  </section>
</section>
@endsection
