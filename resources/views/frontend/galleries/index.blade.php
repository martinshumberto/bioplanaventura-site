@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')

<div class="page-hero" style="background-image: url(images/hero.jpg);">
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
            <h4>Galeria #1</h4>
            <div class="gallery gallery-columns-3">
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog01_sm.jpg">
                    <img src="images/blog01_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  This is a nice gallery caption
                </figcaption>
              </figure>
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog02_sm.jpg">
                    <img src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  This is a nice gallery caption
                </figcaption>
              </figure>
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog03_sm.jpg">
                    <img src="images/blog03_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  This is a nice gallery caption
                </figcaption>
              </figure>
              <figure class="gallery-item display-none">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog04_sm.jpg">
                    <img src="images/blog04_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  This is a nice gallery caption
                </figcaption>
              </figure>
              <figure class="gallery-item display-none">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog05_sm.jpg">
                    <img src="images/blog05_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  This is a nice gallery caption
                </figcaption>
              </figure>
              <figure class="gallery-item display-none">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog06_sm.jpg">
                    <img src="images/blog06_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  This is a nice gallery caption
                </figcaption>
              </figure>
            </div>
            <h4>Galeria #2</h4>
            <div class="gallery gallery-columns-3">
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog01_sm.jpg">
                    <img src="images/blog01_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  This is a nice gallery caption
                </figcaption>
              </figure>
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog02_sm.jpg">
                    <img src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  This is a nice gallery caption
                </figcaption>
              </figure>
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog03_sm.jpg">
                    <img src="images/blog03_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  This is a nice gallery caption
                </figcaption>
              </figure>
              <figure class="gallery-item display-none">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog04_sm.jpg">
                    <img src="images/blog04_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  This is a nice gallery caption
                </figcaption>
              </figure>
              <figure class="gallery-item display-none">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog05_sm.jpg">
                    <img src="images/blog05_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  This is a nice gallery caption
                </figcaption>
              </figure>
              <figure class="gallery-item display-none">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog06_sm.jpg">
                    <img src="images/blog06_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  This is a nice gallery caption
                </figcaption>
              </figure>
            </div>

          </div>
        </article>
      </div>
    </div>
  </div>
</main>


@include('frontend/includes/footer')
@endsection
