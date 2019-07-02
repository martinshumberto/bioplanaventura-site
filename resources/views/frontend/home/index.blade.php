@extends('frontend.layout._header')
@php
use App\Model\Fotos;
@endphp
@section('content')
@include('frontend/includes/header')
 
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  @php 
  $i=0;
  @endphp
  @foreach($slides as $item) 
  @php $i++ @endphp
    <li data-target="#carouselExampleIndicators" data-slide-to="{!! $i-1 !!}" @if($i==1) class="active" @endif ></li>
 
  @endforeach

  </ol>
  <div class="carousel-inner">
  @php 
  $i=0;
  @endphp
  @foreach($slides as $item) 
  @php $i++ @endphp
    <div class="carousel-item @if($i==1) active @endif">
    <div class="page-hero page-hero-lg page-hero-align-center" style="background-image: url(public/storage/files/{!! $item -> file !!});">

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
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<main class="main widget-sections">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="widget-section widget_ci-filter-form">
          <div class="filter-form-inline-wrap">
            <form action="/" class="form-boxed filter-form-inline">
              <div class="filter-form-group">
                <label for="filter-inline-destination-1">
                  <i class="fas fa-globe-americas"></i>
                  Selecione a região
                </label>
                <select id="filter-inline-destination-1" class="chosen-select" data-enable-search="true">
                  <option value="">&nbsp;</option>
                  <option value="5">Região Norte</option>
                  <option value="2">Região Nordeste</option>
                  <option value="3">Região Centro-Oeste</option>
                  <option value="4">Região Sudeste</option>
                  <option value="4">Região Sul</option>
                </select>
              </div>

              <div class="filter-form-group">
                <label for="filter-inline-category-1">
                  <i class="fas fa-list-ul"></i>
                  Selecione a categoria
                </label>
                <select id="filter-inline-category-1" class="chosen-select" data-enable-search="true">
                  <option value="">&nbsp;</option>
                  <option value="6">Mountain Bike</option>
                  <option value="3">Corrida</option>
                  <option value="4">Ciclismo</option>
                  <option value="5">Cursos</option>
                  <option value="2">Palestras</option>
                </select>
              </div>

              <div class="filter-form-group filter-form-range-inline">
                <label>
                  <i class="fas fa-calendar-alt"></i>
                  Selecione o tempo de viagem
                </label>

                <div class="range-slider-wrap">
                  <span class="range-slider" data-range-start="1" data-range-end="20" data-start="1" data-end="20"
                    data-step="1">
                    <input type="number" title="Min" hidden class="range-min" />
                    <input type="number" title="Max" hidden class="range-max" />
                  </span>

                  <span class="range-slider-values">
                    <span class="range-slider-value">
                      <span class="value"></span> Dia
                    </span>

                    <span class="range-slider-value">
                      <span class="value"></span> Dias
                    </span>
                  </span>
                </div>
              </div>

              <div class="filter-form-group">
                <button type="submit" class="btn-block">buscar</button>
              </div>
            </form>
          </div>
        </div>

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
                  
                  {!! img('../../public/storage/files/'.$foto, array("width"=>"100%", "height"=>"100%"))!!}
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
                  <a href="#">
                    {!!img('blog02_sm.jpg')!!}
                  </a>
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <time class="entry-time item-meta-field" datetime="2018-08-18">
                      20 Jan, 2019
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
