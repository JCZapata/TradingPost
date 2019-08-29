@extends('layouts.main')

@section('content')
  <div class= "container-fluid bg-light transparente">

    <h2>Preguntas frecuentes</h2>
    <section class="row">
      <article class="col-xs-12 offset-0">
          <form class="px-4 py-3">
            @forelse ($faqs as $faq)
              <details>
                <summary><strong>{{$faq->pregunta}}</strong></summary>
                <br>
                <p>{{$faq->respuesta}}</p>
              </details>
            @empty
            <div style='height:400px' class='no-results-container d-flex container-fluid mb-5 text-white text-center'>
                <h2 class='no-results align-self-center'>No se encontraron resultados.</h2>
            </div>
            @endforelse
            </form>
            </article>
          </section>
        </div>
@endsection
