@extends('frontend.layout._header')
@php
use App\Model\Fotos;
use App\Model\Eventoscategorias;
@endphp
@section('content')
@include('frontend/includes/header')

<div class="overlay">
</div>
@if($categorias=="todos")
<div class="page-hero" style="background-image: url({!! img_src('pages/event.png') !!});">
</div>
@else
<div class="page-hero" style="background-image: url({!! img_src('pages/event.png') !!});">
</div>
@endif

<main class="main main-elevated">
  <div class="content-elevated">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-12">
          <div class="page-hero-content">
            
            @if($categorias=="todos")
            <h2 class="page-hero-title">Eventos</h2>
            <p class="page-hero-subtitle">Todos os eventos </p>
            @else
            <h2 class="page-hero-title">{!! $categorias[0]->title !!}</h2>
            <p class="page-hero-subtitle">{!! $categorias[0]->subtitle !!} </p>
            @endif
          </div>
<!--
          <div class="listing-controls">
            <div class="listing-view-controls">
              <span class="listing-view-control">
                <input type="radio" id="listing-grid-view" name="listing-view" value="grid" checked>
                <label for="listing-grid-view">
                  <i class="fas fa-th"></i>
                </label>
              </span>

              <span class="listing-view-control">
                <input type="radio" id="listing-list-view" name="listing-view" value="list">
                <label for="listing-list-view">
                  <i class="fas fa-list"></i>
                </label>
              </span>
            </div>

            <div class="listing-content-controls">
              <div class="listing-order-select">
                <label for="order-select" class="sr-only">Ordenar por</label>
                <select id="order-select" class="input-sm chosen-select">
                  <option value="">Ordenar por</option>
                  <option value="0">Nome</option>
                  <option value="1">Data</option>
                </select>
              </div>
            </div>
          </div>
-->

<div class="row">
@if(empty($eventos))
<div class="col-lg-4 col-sm-6 col-12">
  <h3> AINDA NÃO TEMOS EVENTOS NESTA CATEGORIA </h3>
</div>
@endif
</div>
          <div class="row row-items">
        @if(!$eventos)
        @else
        @foreach ($eventos as $evento)
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="{!! url('/evento', $evento->slug); !!}">
                  @php
                  $foto = Fotos::where('chave',$evento->chave)->pluck('file')->first();                  
                  @endphp
                  <img src="{!!img_src ($foto, array("dynamic"=>true))!!}">
                  </a>
                  @if($evento -> promocao) 
                  <span class="item-badge">Promoção</span>
                  @endif
                  @if($evento -> esgotado) 
                  <span class="item-badge" style="background-color:#ff0000;">Esgotado</span>
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
        @endif

           
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

                {!! Form::model(null, ['route' => ['backend-eventos-pesquisa'], 'method' =>
                    'post', 'class'=>'form-boxed filter-form-vertical']) !!}
                  
                  <div class="filter-form-group">
                    <label for="filter-vertical-category">
                      <i class="fas fa-list-ul"></i>
                      Selecione a categoria
                    </label>
                    <select id="filter-vertical-category" class="input-sm chosen-select" data-enable-search="true">
                    <option value="">&nbsp;</option>
                    <option value="todos">TODOS</option>
                    @foreach( Eventoscategorias::get() as $eventocategoria )
                    <option value="{!! $eventocategoria -> eventoscategorias_id !!}">{!! $eventocategoria -> title !!}</option>
                    @endforeach
                    </select>
                  </div>

                  <div class="filter-form-group">
                    <label for="filter-vertical-category">
                      <i class="fas fa-exclamation"></i>
                      Nível de dificuldade
                    </label>
                    <select id="filter-vertical-category" name="dificuldade" class="input-sm chosen-select" data-enable-search="true">
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
                      <input type="number" title="Min" name="valor-min" hidden class="range-min" />
                      <input type="number" title="Max" name="valor-max" hidden class="range-max" />
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
                      <input type="number" title="Min" name="range-min" hidden class="range-min" />
                      <input type="number" title="Max" name="range-max" hidden class="range-max" />
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
