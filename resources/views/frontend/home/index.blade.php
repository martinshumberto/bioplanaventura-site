@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')

<div class="page-hero page-hero-lg page-hero-align-center" style="background-image: url(images/slide01.png);">
  <div class="ci-theme-video-wrap">
    <div class="ci-theme-video-background" data-video-id="326181338" data-video-type="vimeo">
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-hero-content">
          <div class="hero-badge-meta">
            <span class="hero-badge-meta-item">
              1 Dia
            </span>

            <span class="hero-badge-meta-item">
              A partir de R$ 150,00
            </span>
          </div>

          <h2 class="page-hero-title">Cachoeiras</h2>
          <p class="page-hero-subtitle">Conheça as mais belas cachoeiras em nossos eventos</p>

          <a href="" class="btn">Saber Mais</a>
        </div>
      </div>
    </div>
  </div>
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
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    {!!img('piri-1.png')!!}
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
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    {!!img('piri-1.png')!!}
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
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    {!!img('piri-1.png')!!}
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
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    {!!img('piri-1.png')!!}
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
                <a href="#" class="btn btn-lg">Assinar</a>
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
                    <a href="#">Lorem ipsum dolor sit amet</a>
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
                    <a href="#">Lorem ipsum dolor sit amet</a>
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
                    <a href="#">Lorem ipsum dolor sit amet</a>
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
                    <a href="#">Lorem ipsum dolor sit amet</a>
                  </h3>

                  <div class="item-excerpt">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores aspernatur at,
                      deserunt dolores eos esse eum&hellip;</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </section>


      </div>
    </div>
  </div>
</main>



@include('frontend/includes/footer')
@endsection
