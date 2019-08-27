@extends('layouts.main')

@section('content')
  <section>

----------------------------------------------------
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/PK5_10_Int.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>LG PK</h5>
          <p><a class="mas" href="#">ver más</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
----------------------------------------------------

    <div class="card mb-3">
    <img src="img/PK5_10_Int.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">LG PK5</h5>
      <p class="card-text">LG trae una serie de bocinas portátiles pensadas para reuniones y fiestas con los amigos. El modelo PK5 es el menor de toda la familia. Destaca por ser la más pequeña en tamaño y peso, aunque eso signifique ser la menos potente.</p>
      <a class="mas" href="#">ver más</a>
    </div>
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
