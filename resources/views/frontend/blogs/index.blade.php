@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')

@php
use App\Model\Fotos;
@endphp

<div class="page-hero" style="background-image: url(../public/img/hero.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-hero-content">
          <h2 class="page-hero-title">Blog</h2>
          <p class="page-hero-subtitle">Acompanhe as novidades, notícias e tudo que está acontecendo no mundo do
            ecoturismo em nosso blog.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<main class="main">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-12">
        <div class="row">
         
         
        @foreach ($postagens as $posts)
          <div class="col-lg-4 col-sm-6 col-12">
            <article class="item item-entry">
              <div class="item-thumb">
                <a href="{!! route('frontend-blog', [$posts->blog_id]) !!}">
                @php
                $foto = Fotos::where('chave',$posts->chave)->pluck('file');                  
                @endphp
                {!!img('../storage/files/'.$foto, array("width"=>"100%", "height"=>"100%"))!!}
               
                </a>
              </div>

              <div class="item-content">
                <div class="item-meta">
                  <time class="entry-time item-meta-field" datetime="{!! $posts->created_at !!}">
                  {!!extractDate($posts->created_at)!!} às {!!extrateHour($posts->created_at)!!}
                  </time>
                </div>

                <h3 class="item-title">
                  <a href="{!! route('frontend-blog', [$posts->blog_id]) !!}">{!! $posts->title !!}</a>
                </h3>

                <div class="item-excerpt">
                  <p>{!! $posts->subtitle !!} &hellip;</p>
                </div>
              </div>
            </article>
          </div>
        @endforeach
        </div>

        <!--
        <nav class="navigation pagination" role="navigation">
          <h2 class="screen-reader-text">Navegação do Blog</h2>
          <div class="nav-links">
            <a class="prev page-numbers" href="">Anterior</a>
            <a class="page-numbers" href="">1</a>
            <span class="page-numbers current">2</span>
            <a class="page-numbers" href="">3</a>
            <a class="page-numbers" href="">4</a>
            <a class="next page-numbers" href="">Próxima</a>
          </div>
        </nav>
        -->

        <!--
          <nav class="navigation posts-navigation" role="navigation">
            <h2 class="screen-reader-text">Posts navigation</h2>
            <div class="nav-links">
              <div class="nav-previous">
                <a href="">Previous</a>
              </div>
              <div class="nav-next">
                <a href="">Next</a>
              </div>
            </div>
          </nav>

          <nav class="navigation post-navigation" role="navigation">
            <h2 class="screen-reader-text">Post navigation</h2>
            <div class="nav-links">
              <div class="nav-previous">
                <a href="">Previous Post</a>
              </div>
              <div class="nav-next">
                <a href="">Next Post</a>
              </div>
            </div>
          </nav>
          -->
      </div>

      <div class="col-lg-3 col-12">
        @include('frontend/includes/filtro-blog')
      </div>
    </div>
  </div>
</main>


@include('frontend/includes/footer')
@endsection
