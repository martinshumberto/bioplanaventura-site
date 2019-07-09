@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')

<div class="page-hero" style="background-image: url({!! img_src('greece_lan.jpg') !!});">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-hero-content">
          <h1 class="page-hero-title">{!! $quemsomos[0]->title !!}</h1>
          <p class="page-hero-subtitle">{!! $quemsomos[0]->subtitle !!}</p>
        </div>
      </div>
    </div>
  </div>
</div>
<main class="main">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-12">
      <article class="entry">
      {!! $quemsomos[0]->text !!} 
      </article>
      </div>

      <div class="col-lg-4 col-12">
        <div class="sidebar">

          <aside class="widget widget_search group">
            <h3 class="widget-title">Buscar</h3>
            <form action="/" method="get" class="searchform">
              <div>
                <label for="s" class="screen-reader-text">Buscar por:</label>
                <input type="search" id="s" name="s" value="" placeholder="Buscar">
                <button class="searchsubmit" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
          </aside>

          <aside class="widget widget_ci-contact">
            <h3 class="widget-title">Entre em contato</h3>

            <ul class="ci-contact-widget-items">

              <li class="ci-contact-widget-item">
                <i class="fas fa-envelope-square"></i> contato@bioplanaventura.com.br
              </li>
              <li class="ci-contact-widget-item">
                <i class="fab fa-instagram"></i> @bioplanaventura
              </li>
            </ul>
          </aside>

          <!-- For a list of all supported social icons please see: http://fontawesome.io/icons/#brand -->
          <aside class="widget widget_ci_social_widget ci-socials group">
            <h3 class="widget-title">Nós siga</h3>

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
              <li>
                <a class="social-icon" href="#">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
          </aside>
          <aside class="widget null-instagram-feed">
            <h3 class="widget-title">Instagram</h3>

            <ul class="instagram-pics instagram-size-large">
              <li>
                <a href="">
                  <img src="images/travel1_01.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_02.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_03.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_04.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_05.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_06.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_07.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_08.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_09.jpg" alt="">
                </a>
              </li>
            </ul>
            <p class="clear">
              <a href="" rel="me" target="_self">
                Seguir agora!
              </a>
            </p>
          </aside>
        </div>
      </div>
    </div>
  </div>
</main>
@include('frontend/includes/footer')
@endsection
