@extends('frontend.layout._header')
@php
use App\Model\Fotos;
@endphp
@section('title', 'BioPlan - Seja Bem Vindo')
@section('content')
@include('frontend/includes/header')
 
<div id="sliderHome" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  @php 
  $i=0;
  @endphp
  @foreach($slides as $item) 
  @php $i++ @endphp
    <li data-target="#sliderHome" data-slide-to="{!! $i-1 !!}" @if($i==1) class="active" @endif ></li>
 
  @endforeach

  </ol>
  <div class="carousel-inner">
  @php 
  $i=0;
  @endphp
  @foreach($slides as $item) 
  @php $i++ @endphp
    <div class="carousel-item @if($i==1) active @endif">
    <div class="page-hero page-hero-lg page-hero-align-center" style="background-image: url({!! img_src($item -> file, true) !!});">


@if(!$item->file)
  <div class="ci-theme-video-wrap">
    <div class="ci-theme-video-background" data-video-id="326181338" data-video-type="vimeo">
    </div>
  </div>
@endif

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-hero-content">
          <div class="hero-badge-meta">
              @foreach(explode('*', $item -> bagdes) as $info)
              <span class="hero-badge-meta-item">{{ $info }}</span>
              @endforeach
          </div>

          <h2 class="page-hero-title">{!! $item -> title !!} </h2>
          <p class="page-hero-subtitle">{!! $item -> subtitle !!} </p>

          <a href="{!!route('backend-slider-show', [$item->slider_id])!!}" class="btn">{!! $item -> button !!}</a>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
  @endforeach
     

  </div>
  <a class="carousel-control-prev" href="#sliderHome" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#sliderHome" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>


<main class="main widget-sections">
  <div class="container">
    <div class="row">
      <div class="col-12">
       @include('frontend/includes/filtros')

        <section class="widget-section">
          <div class="section-heading">
            <p class="section-subtitle">Saiba dos eventos que estão em promoção</p>
            <h2 class="section-title">Promoções</h2>
          </div>

          <div class="row row-items">
           
            @foreach ($promocao as $evento)
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="{!! url('/evento', $evento->slug); !!}">
                  @php
                  $foto = Fotos::where('chave',$evento->chave)->pluck('file')->first();                  
                  @endphp
                  
                  <img src="{!! img_src($foto, array("dynamic"=>true))!!}">
                  </a>
                  @if($evento -> promocao) 
                  <span class="item-badge">{!! $evento -> promocao !!}</span>
                  @endif
                </div>

                <div class="item-content">
                  <div class="item-meta">
                  @php $i=0; @endphp
                  @foreach(explode('*', $evento -> subtitle) as $info)
                    @php $i++; @endphp
                    @if ($i <= 2)
                    <span class="item-meta-field">{{ $info }}</span>
                    @endif
                  @endforeach
                  </div>

                  <p class="item-title">
                    <a href="{!! url('/evento', $evento->slug); !!}">
                    {!! $evento -> title !!}
                    </a>
                  </p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </section>

        <section class="widget-section">
          <!-- Left aligned: add .text-left Right aligned: add .text-right -->
          <div class="widget-hero text-right" style="background-image: url({!!img_src('hero-2.jpg')!!});">
            <div class="row">
              <!-- Left aligned: .col-lg-8 offset-lg-1 col-12 Right aligned: .col-lg-8 offset-lg-1 col-12 -->
              <div class="col-lg-8 offset-lg-2 col-12">
                <h2 class="widget-hero-title">Assine as novidades</h2>
                <p class="widget-hero-subtitle">Prometemos não utilizar suas informações de contato para enviar qualquer
                  tipo de SPAM.</p>
                  <div class="row">
                    <div class="col-lg-10">
                  @if (session('alert'))
                  {!! session('alert.text') !!}
                  </div>
                  @else
                    {!! Form::open(['method' => 'post',  'route' => ['frontend-newsletter'],
                    'files' => true]) !!}
                    {!!Form::text('email', null, ['width'=>'80px']) !!}
                    </div>
                    <div class="col-lg-2">
                    <button type="submit" class="btn btn-lg">Assinar</button>
                    {!! Form::close() !!}
                    </div>
                  @endif 
                   
                  </div>
                  
                    
                  
                  
              </div>
            </div>
          </div>
        </section>

        <section class="widget-section">
          <div class="section-heading">
            <p class="section-subtitle">Acompanhe nosso blog</p>
            <h2 class="section-title">Nossas últimas novidades</h2>
          </div>

          <div class="row row-items">
          
          @foreach ($blog as $posts)
            <div class="col-lg-3 col-sm-6 col-12">
              <article class="item item-entry">
                <div class="item-thumb">
                <a href="{!! url('/blog', $posts->slug); !!}">
                  @php
                  $fotox = Fotos::where('chave',$posts->chave)->pluck('file')->first();                  
                  @endphp
                  
                  <img src="{!! img_src($fotox, true) !!}"> 
                  </a>
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <time class="entry-time item-meta-field" datetime="{!! $posts->created_at !!}">
                    {!!extractDate($posts->created_at)!!} às {!!extrateHour($posts->created_at)!!}
                    </time>
                  </div>

                  <h3 class="item-title">
                    <a href="#">{!! $posts->title !!}</a>
                  </h3>

                  <div class="item-excerpt">
                    <p>{!! $posts->subtitle !!}&hellip;</p>
                  </div>
                </div>
              </article>
            </div>
          @endforeach
          </div>
        </section>


      </div>
    </div>
  </div>
</main>



@include('frontend/includes/footer')
@endsection
