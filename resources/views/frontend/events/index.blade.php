@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')


<div class="page-hero" style="background-image: url(images/hero.jpg);">

</div>
<main class="main main-elevated">
  <div class="content-elevated">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-12">
          <div class="page-hero-content">
            <h2 class="page-hero-title">Eventos</h2>
            <p class="page-hero-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt ut
              quam vitae faucibus. </p>
          </div>

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

          <div class="row row-items">
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <span class="item-badge">Promoção</span>
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">9 dias</span>
                    <span class="item-meta-field">Valor: R$ 1,900</span>
                  </div>

                  <p class="item-title">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <!-- <span class="item-badge">Promoção</span> -->
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">9 dias</span>
                    <span class="item-meta-field">Valor: R$ 1,900</span>
                  </div>

                  <p class="item-title">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <!-- <span class="item-badge">Promoção</span> -->
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">9 dias</span>
                    <span class="item-meta-field">Valor: R$ 1,900</span>
                  </div>

                  <p class="item-title">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <!-- <span class="item-badge">Promoção</span> -->
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">9 dias</span>
                    <span class="item-meta-field">Valor: R$ 1,900</span>
                  </div>

                  <p class="item-title">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <!-- <span class="item-badge">Promoção</span> -->
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">9 dias</span>
                    <span class="item-meta-field">Valor: R$ 1,900</span>
                  </div>

                  <p class="item-title">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <!-- <span class="item-badge">Promoção</span> -->
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">9 dias</span>
                    <span class="item-meta-field">Valor: R$ 1,900</span>
                  </div>

                  <p class="item-title">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <!-- <span class="item-badge">Promoção</span> -->
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">9 dias</span>
                    <span class="item-meta-field">Valor: R$ 1,900</span>
                  </div>

                  <p class="item-title">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <!-- <span class="item-badge">Promoção</span> -->
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">9 dias</span>
                    <span class="item-meta-field">Valor: R$ 1,900</span>
                  </div>

                  <p class="item-title">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <!-- <span class="item-badge">Promoção</span> -->
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">9 dias</span>
                    <span class="item-meta-field">Valor: R$ 1,900</span>
                  </div>

                  <p class="item-title">
                    <a href="#">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>

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
