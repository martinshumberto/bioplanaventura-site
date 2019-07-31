@extends('frontend.layout._header')
@php
use App\Model\Admins;
use Illuminate\Support\Carbon;
use App\Model\Fotos;
$foto = Fotos::where('chave',$postagens[0]->chave)->pluck('file')->first();  
@endphp
@section('content')
@include('frontend/includes/header')
<div class="overlay">
</div>
<div class="page-hero" style="background-image: url({!! url('public/storage/files/'.$foto) !!});">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-hero-content">
          <h1 class="page-hero-title">{!! $postagens[0]->title !!}</h1>
          <p class="page-hero-subtitle">{!! $postagens[0]->subtitle !!}</p>
        </div>
      </div>
    </div>
  </div>
</div>
<main class="main">
  <div class="container">
    <div class="row">
      <div class="col-lg-1 col-12">
        <div class="entry-social-share">
          <p class="entry-social-share-title">Compartilhar</p>

          <ul class="list-social-icons">
            <li>
              <a class="social-icon" href="#">
                <i class="fas fa-rss"></i>
              </a>
            </li>
            <li>
              <a class="social-icon" href="#">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li>
              <a class="social-icon" href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a class="social-icon" href="#">
                <i class="fab fa-pinterest-p"></i>
              </a>
            </li>
            <li>
              <a class="social-icon" href="#">
                <i class="fab fa-vimeo"></i>
              </a>
            </li>
            <li>
              <a class="social-icon" href="#">
                <i class="fab fa-medium"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-8 col-12">
        <article class="entry">
          

          <header class="entry-header">
            <div class="entry-meta">
              <span class="entry-meta-item">
                <time datetime="2017-06-08">{!! Carbon::parse($postagens[0] -> created_at)->format('d/m/Y') !!}</time>
              </span>
              <span class="entry-meta-item entry-categories">
              @foreach(explode(',', $postagens[0]-> tags) as $info)
                <a href="">{!! $info !!}</a>
              @endforeach
              </span>
              <span class="entry-meta-item entry-author">
                por
                @php
                $usuario = Admins::where('admins_id',$postagens[0]->users_id)->pluck('name')->first();
                @endphp
                <a href="">{!! $usuario !!}</a>
              </span>
              <!--
              <span class="entry-meta-item entry-comments-link">
                <a href="#comments">Deixe um comentário</a>
              </span>
              -->
            </div>

            <h1 class="entry-title">{!! $postagens[0]->title !!}</h1>
          </header>

          <div class="entry-content">
      
           

            <div class="gallery gallery-columns-1">
            @foreach (Fotos::where('chave',$postagens[0]->chave)->pluck('file') as $fotox)  
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href=" {!! img_src($fotox, array("dynamic"=>true)) !!}">
                   <img style="height: 350px;" src="{!! img_src($fotox, array("dynamic"=>true)) !!}">
                  </a>
                </div>
              </figure>
            @endforeach
              
              
            </div>

            {!! $postagens[0]->descricao !!}

@if (!$postagens[0]->video) 
@else
            <iframe src="https://www.youtube.com/embed/WHnOTKUX_X0" allowfullscreen></iframe>
@endif

           
          <div class="entry-tags">
          @foreach(explode(',', $postagens[0]-> tags) as $info)
            <a href="">{!! $info !!}</a>
          @endforeach
          </div>
        </article>

        <!-- 
        <div class="entry-author-box">
          <figure class="entry-author-thumbnail">
            <img src="images/avatar03.jpg" alt="">
          </figure>

          <div class="entry-author-desc">
            <h4 class="entry-author-title">Humberto Martins</h4>
            <p class="entry-author-subtitle">Resumo bio</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis doloribus explicabo facilis laborum
              placeat saepe sunt. Ad amet aspernatur aut culpa dicta enim eos excepturi id illo labore quidem ullam
              vitae, voluptates! At consequatur distinctio
              dolorem dolores est harum ipsa ipsum natus nisi, rerum tempora ut vitae voluptate. Maiores, totam!</p>

            <div class="entry-author-socials">
              <ul class="list-social-icons">
                <li>
                  <a class="social-icon" href="#">
                    <i class="fas fa-rss"></i>
                  </a>
                </li>
                <li>
                  <a class="social-icon" href="#">
                    <i class="fab fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a class="social-icon" href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        -->

        <!-- COMENTÁRIOS -->

      </div>

      <div class="col-lg-3 col-12">
         @include('frontend.includes.filtro-blog')
      </div>
      <!--
      <div class="col-12">
        <div class="section-related">
          <div class="section-heading">
            <p class="section-subtitle">Continue navegando em nosso blog</p>
            <h2 class="section-title">Talvez você goste</h2>
          </div>

          <div class="row row-items">
            <div class="col-lg-3 col-sm-6 col-12">
              <article class="item item-entry">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <time class="entry-time item-meta-field" datetime="2018-08-18">
                      10 de Abril de 2019
                    </time>
                  </div>

                  <h3 class="item-title">
                    <a href="#">Jungles, Beaches, and Ruins: The Appeal of Central America Tours</a>
                  </h3>

                  <div class="item-excerpt">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores aspernatur at,
                      deserunt dolores eos esse eum&hellip;</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">

              <article class="item item-entry">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <time class="entry-time item-meta-field" datetime="2018-08-18">
                      10 de Abril de 2019
                    </time>
                  </div>

                  <h3 class="item-title">
                    <a href="#">Jungles, Beaches, and Ruins: The Appeal of Central America Tours</a>
                  </h3>

                  <div class="item-excerpt">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores aspernatur at,
                      deserunt dolores eos esse eum&hellip;</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <article class="item item-entry">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <time class="entry-time item-meta-field" datetime="2018-08-18">
                      10 de Abril de 2019
                    </time>
                  </div>

                  <h3 class="item-title">
                    <a href="#">Jungles, Beaches, and Ruins: The Appeal of Central America Tours</a>
                  </h3>

                  <div class="item-excerpt">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores aspernatur at,
                      deserunt dolores eos esse eum&hellip;</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <article class="item item-entry">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <time class="entry-time item-meta-field" datetime="2018-08-18">
                      10 de Abril de 2019
                    </time>
                  </div>

                  <h3 class="item-title">
                    <a href="#">Jungles, Beaches, and Ruins: The Appeal of Central America Tours</a>
                  </h3>

                  <div class="item-excerpt">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores aspernatur at,
                      deserunt dolores eos esse eum&hellip;</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      -->
    </div>
  </div>
</main>

@include('frontend/includes/footer')
@endsection
