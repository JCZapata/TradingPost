@extends('layouts.main')

@section('content')
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
@endsection
