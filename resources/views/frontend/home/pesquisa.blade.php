@extends('frontend.layout._header')
@php
use App\Model\Fotos;
@endphp
@section('content')
@include('frontend/includes/header')

@if($categorias=="todos")
<div class="page-hero" style="background-image: url(public/img/lefkada_lan.jpg);">
</div>
@else
<div class="page-hero" style="background-image: url(public/storage/files/{!! $categorias[0]->file !!});">
</div>
@endif

<main class="main main-elevated">
  <div class="content-elevated">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-12">
          <div class="page-hero-content">
            
        
            <h2 class="page-hero-title">Pesuisa</h2>
            <p class="page-hero-subtitle">Abaixo os resultados Eventos / Blog </p>
          
          </div>


<div class="row">
@if(empty($eventos))
<div class="col-lg-4 col-sm-6 col-12">
  <h3> AINDA NÃO TEMOS EVENTOS NESTA CATEGORIA </h3>
</div>
@endif
</div>
          <div class="row row-items">

        @foreach ($eventos as $evento)
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="{!! url('/evento', $evento->slug); !!}">
                  @php
                  $foto = Fotos::where('chave',$evento->chave)->pluck('file')->first();                  
                  @endphp
                  {!!img('../storage/files/'.$foto, array("width"=>"100%", "height"=>"100%"))!!}
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
           

        @foreach ($blogs as $posts)
          <div class="col-lg-4 col-sm-6 col-12">
            <article class="item item-entry">
              <div class="item-thumb">
                <a href="{!! route('frontend-blog', [$posts->blog_id]) !!}">
                @php
                $foto = Fotos::where('chave',$posts->chave)->pluck('file')->first();                  
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
            <h2 class="screen-reader-text">Navegação da página</h2>
            <div class="nav-links">
              <a class="prev page-numbers" href="">Anterior</a>
              <a class="page-numbers" href="">1</a>
              <span class="page-numbers current">2</span>
              <a class="page-numbers" href="">3</a>
              <a class="page-numbers" href="">4</a>
              <a class="next page-numbers" href="">Próximo</a>
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
          <div class="sidebar">
            <div class="widget">
              <div class="elevation-candidate">
                <form action="/" class="form-boxed filter-form-vertical">
                  <div class="filter-form-group">
                    <label for="filter-vertical-destination">
                      <i class="fas fa-globe-americas"></i>
                      Seleciona a região
                    </label>
                    <select id="filter-vertical-destination" class="input-sm chosen-select" data-enable-search="true">
                      <option value="">&nbsp;</option>
                      <option value="5">Região Norte</option>
                      <option value="2">Região Nordeste</option>
                      <option value="3">Região Centro-Oeste</option>
                      <option value="4">Região Sudoeste</option>
                      <option value="1">Região Sul</option>
                    </select>
                  </div>

                  <div class="filter-form-group">
                    <label for="filter-vertical-category">
                      <i class="fas fa-list-ul"></i>
                      Selecione a categoria
                    </label>
                    <select id="filter-vertical-category" class="input-sm chosen-select" data-enable-search="true">
                      <option value="">&nbsp;</option>
                      <option value="6">Montain Bike</option>
                      <option value="3">Corrida</option>
                      <option value="4">Ciclismo</option>
                      <option value="5">Cursos</option>
                      <option value="2">Palestras</option>
                    </select>
                  </div>

                  <div class="filter-form-group">
                    <label for="filter-vertical-category">
                      <i class="fas fa-exclamation"></i>
                      Nível de dificuldade
                    </label>
                    <select id="filter-vertical-category" class="input-sm chosen-select" data-enable-search="true">
                      <option value="">&nbsp;</option>
                      <option value="6">Muito fácil</option>
                      <option value="3">Fácil</option>
                      <option value="4">Moderado</option>
                      <option value="5">Difícil</option>
                      <option value="2">Experts</option>
                    </select>
                  </div>

                  <div class="filter-form-group">
                    <label for="filter-vertical-category">
                      <i class="fas fa-star-half-alt"></i>
                      Recomendações
                    </label>
                    <span class="star-rating-input">
                      <input type="radio" class="star-rating-input" value="5" name="star-rating" id="star-rating-5">
                      <label for="star-rating-5">
                        <span>5 estrelas</span>
                      </label>
                      <input type="radio" class="star-rating-input" value="4" name="star-rating" id="star-rating-4">
                      <label for="star-rating-4">
                        <span>4 estrelas</span>
                      </label>
                      <input type="radio" class="star-rating-input" value="3" name="star-rating" id="star-rating-3">
                      <label for="star-rating-3">
                        <span>3 estrelas</span>
                      </label>
                      <input type="radio" class="star-rating-input" value="2" name="star-rating" id="star-rating-2">
                      <label for="star-rating-2">
                        <span>2 estrelas</span>
                      </label>
                      <input type="radio" class="star-rating-input" value="1" name="star-rating" id="star-rating-1">
                      <label for="star-rating-1">
                        <span>1 estrelas</span>
                      </label>
                    </span>
                  </div>

                  <div class="filter-form-group">
                    <label>
                      <i class="fas fa-money-bill-alt"></i>
                      Valor
                    </label>

                    <span class="range-slider" data-range-start="0" data-range-end="5000" data-start="0" data-end="2000"
                      data-step="50">
                      <input type="number" title="Min" hidden class="range-min" />
                      <input type="number" title="Max" hidden class="range-max" />
                    </span>

                    <span class="range-slider-values">
                      <span class="range-slider-value">
                        R$
                        <span class="value"></span>
                      </span>

                      <span class="range-slider-value">
                        R$
                        <span class="value"></span>
                      </span>
                    </span>
                  </div>

                  <div class="filter-form-group">
                    <label>
                      <i class="fas fa-calendar-alt"></i>
                      Selecione o tempo de viagem
                    </label>

                    <span class="range-slider" data-range-start="1" data-range-end="30" data-start="1" data-end="20"
                      data-step="1">
                      <input type="number" title="Min" hidden class="range-min" />
                      <input type="number" title="Max" hidden class="range-max" />
                    </span>

                    <span class="range-slider-values">
                      <span class="range-slider-value">
                        <span class="value"></span> Dias
                      </span>

                      <span class="range-slider-value">
                        <span class="value"></span> Dias
                      </span>
                    </span>
                  </div>

                  <div class="filter-form-group">
                    <button type="submit" class="btn-block">Buscar</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /widget -->
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


@include('frontend/includes/footer')
@endsection
