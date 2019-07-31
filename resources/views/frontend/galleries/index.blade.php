@extends('frontend.layout._header')
@php
use App\Model\Fotos;
@endphp
@section('content')
@include('frontend/includes/header')
<div class="overlay">
</div>
<div class="page-hero" style="background-image: url({!! img_src('pages/gallery.png') !!});">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-hero-content">
          <h2 class="page-hero-title">Galeria</h2>
          <p class="page-hero-subtitle">Alguns registros de eventos já realizados pela Bioplan Aventura.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<main class="main">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <article class="entry">
          <div class="entry-content">

            @foreach ($galerias as $galeria)
            <h4>{!! $galeria->title !!}</h4>
            <div class="gallery gallery-columns-6">

              @php
              $foto = Fotos::where('chave',$galeria->chave)->pluck('file');                  
              @endphp

              @foreach ($foto as $image)
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="{!!img_src($image, true)!!}">
                    <img src="{!!img_src($image, true)!!}"/>
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  {!! $galeria->title !!}
                </figcaption>
              </figure>
              @endforeach 

              
            </div>
            @endforeach

            

          </div>
        </article>
      </div>
    </div>
  </div>
</main>


@include('frontend/includes/footer')
@endsection
