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
        <a href="#"><img src="img/carousel-2.jpg" class="d-block img-fluid w-100" alt="..."></a>
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
    <div class="card">
      <img src="img/auto.jpg" class="card-img-top" alt="auto">
      <div class="card-body">
        <h5 class="card-title">Peugeot 308</h5>
        <p class="card-text">Peugeot 308 1.6 Sport Thp 163cv año 2013.</p>
      </div>
      <div class="card-footer">
        <a class="mas" href="#">ver más</a>
      </div>
    </div>
    <div class="card">
      <img src="img/download.jpg" class="card-img-top" alt="perfume">
      <div class="card-body">
        <h5 class="card-title">Perfume Invictus</h5>
        <p class="card-text">Perfume Hombre Paco Rabanne Invictus Intense Edt X 100ml.</p>
      </div>
      <div class="card-footer">
        <a class="mas" href="#">ver más</a>
      </div>
    </div>
    <div class="card">
      <img src="img/ps4.jpg" class="card-img-top" alt="playstation">
      <div class="card-body">
        <h5 class="card-title">Sony Ps4</h5>
        <p class="card-text">Playstation 4 Pro 1tb Marvel's Spiderman Ps4 Limited Edition.</p>
      </div>
      <div class="card-footer">
        <a class="mas" href="#">ver más</a>
      </div>
    </div>
  </div>
  </section>
  </section>
@endsection
