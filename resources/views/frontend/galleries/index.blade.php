@extends('frontend.layout._header')
@php
use App\Model\Fotos;
@endphp
@section('content')
@include('frontend/includes/header')

<div class="page-hero" style="background-image: url({!! img_src('hero.jpg') !!});">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-hero-content">
          <h2 class="page-hero-title">Galeria</h2>
          <p class="page-hero-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel laoreet mi.
            Proin nec sodales dolor, id pellentesque libero.</p>
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
            <div class="gallery gallery-columns-3">
              
            @php
                $foto = Fotos::where('chave',$galeria->chave)->pluck('file');                  
            @endphp
            
            @foreach ($foto as $image)
            <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="public/storage/files/{!! $image !!}">
                  {!!img_src($image, array("dynamic"=>true))!!}
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  
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
