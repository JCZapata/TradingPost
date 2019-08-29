<?php
use App\Product;
$products = Product::paginate(5);
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
    <div class="card-deck">
                @forelse ($products as $product)
                  <div class="card" style="max-width:280px; max-height:480px">
                    <img src="{{Storage::url($product->image)}}" style="max-width:280px; max-height:200px" alt="">
                      <div class="card-body">
                        <h4 class="card-title">{{$product->name}}</h4>
                        <h5 class="card-title">{{$product->category['name']}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                      </div>
                      <div class="card-footer">
                        <a class="mas" href="{{route('more',['id' => $product->id])}}">ver más</a>
                        <a href={{route('cart.add', $product->id)}} class="add-to-cart btn btn-default" type="button"><i class="fas fa-shopping-cart"></i></a>

                      </div>
                  </div>
                @empty
                <div style='height:400px' class='no-results-container d-flex container-fluid mb-5 text-white text-center'>
                    <h2 class='no-results align-self-center'>No se encontraron resultados.</h2>
                </div>
                @endforelse
    </div>
    <br><br>
        <div class='container-fluid d-flex justify-content-center'>
            {{$products->links()}}
        </div>
    </div>
  </section>
</section>
@endsection
