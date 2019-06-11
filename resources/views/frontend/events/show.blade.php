@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')


<div class="page-hero" style="background-image: url(images/pico-pirineus.png);"></div>
<main class="main main-elevated">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-12 hidden-sm-down">
        <div class="content-elevated content-sticky-parent">
          <div class="widget-tour-info content-sticky">
            <figure class="entry-thumb">
              <a href="images/piri-1.png" class="ci-theme-lightbox">
                <img src="images/piri-1.png" alt="">
              </a>
              <!-- badge custom -->
              <span class="item-badge">Promoção</span>
            </figure>

            <div class="entry-title-navigation">
              <a href="#entry-ticket" class="entry-title-navigation-link">
                <i class="fas fa-angle-right"></i>
                <span class="entry-title-navigation-link-label">
                  Ingressos
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-8 col-12">
        <article class="entry">
          <header class="entry-header">
            <div class="entry-meta">
              <span class="entry-meta-item">
                2 dias
              </span>
              <span class="entry-meta-item">
                Pirenópolis
              </span>
              <span class="entry-meta-item">
                R$ 150,00
              </span>

              <div class="star-rating">
                <div class="star-rating-inner" style="width: 86%;"></div>
              </div>
            </div>

            <h1 class="entry-title">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit
            </h1>
          </header>

          <figure class="entry-thumb hidden-md-up">
            <a href="images/piri-1.png" class="ci-theme-lightbox">
              <img src="images/piri-1.png" alt="">
            </a>
            <!-- badge custom -->
            <span class="item-badge">Promoção</span>
          </figure>

          <div id="entry-content" class="entry-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec turpis at est luctus blandit ac quis
              ligula. Cras sollicitudin dictum tristique. Cras laoreet arcu ut nisl dignissim viverra. Aenean cursus
              eget tortor at blandit. Aenean vel justo vitae dui feugiat imperdiet ac sit amet sem.</p>

            <h2 class="anchor-title">
              Descrição do evento
            </h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec turpis at est luctus blandit ac quis
              ligula. Cras sollicitudin dictum tristique. </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec turpis at est luctus blandit ac quis
              ligula. Cras sollicitudin dictum tristique. Cras laoreet arcu ut nisl dignissim viverra. Aenean cursus
              eget tortor at blandit. Aenean vel justo vitae dui feugiat imperdiet ac sit amet sem. </p>


            <h2 class="anchor-title">Galeria de fotos</h2>
            <div class="gallery gallery-columns-3">
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog02_sm.jpg">
                    <img src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>
                <figcaption class="wp-caption-text gallery-caption">
                  Caption da galeria
                </figcaption>
              </figure>
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog02_sm.jpg">
                    <img src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>
              </figure>
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog02_sm.jpg">
                    <img src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>
              </figure>
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog02_sm.jpg">
                    <img src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>
              </figure>
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog02_sm.jpg">
                    <img src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>
              </figure>
              <figure class="gallery-item">
                <div class="gallery-icon landscape">
                  <a class="ci-theme-lightbox" href="images/blog02_sm.jpg">
                    <img class="ci-theme-lightbox" src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>
              </figure>
            </div>

            <h2 class="anchor-title">Vídeo</h2>
            <iframe src="https://www.youtube.com/embed/v0f3aID65do" allowfullscreen></iframe>

            <h2 class="anchor-title">Outras informações</h2>

            <div class="box-styled">
              <p>
                <strong>List</strong>
              </p>

              <ul>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
              </ul>

              <p>
                <strong>List</strong>
              </p>

              <ul>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
              </ul>

              <p>
                <strong>Termos e Condições</strong>
              </p>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec turpis at est luctus blandit ac
                quis ligula. Cras sollicitudin dictum tristique.</p>
            </div>
          </div>
        </article>

        <div id="comments" class="comments-area">
          <h3 class="comments-title">27 Comentários</h3>

          <div class="ratings-board">
            <div class="ratings-board-rows">
              <div class="ratings-board-row">
                <span class="star-rating star-rating-5">
                  <span class="star-rating-inner"></span>
                </span>
                <span class="star-count">(12)</span>
                <div class="ratings-bar">
                  <div class="ratings-bar-inner" style="width: 44.44%;"></div>
                </div>
              </div>

              <div class="ratings-board-row">
                <span class="star-rating star-rating-4">
                  <span class="star-rating-inner"></span>
                </span>
                <span class="star-count">(9)</span>
                <div class="ratings-bar">
                  <div class="ratings-bar-inner" style="width: 33.33%;"></div>
                </div>
              </div>

              <div class="ratings-board-row">
                <span class="star-rating star-rating-3">
                  <span class="star-rating-inner"></span>
                </span>
                <span class="star-count">(6)</span>
                <div class="ratings-bar">
                  <div class="ratings-bar-inner" style="width: 22.22%;"></div>
                </div>
              </div>

              <div class="ratings-board-row">
                <span class="star-rating star-rating-2">
                  <span class="star-rating-inner"></span>
                </span>
                <span class="star-count">(0)</span>
                <div class="ratings-bar">
                  <div class="ratings-bar-inner" style="width: 0;"></div>
                </div>
              </div>

              <div class="ratings-board-row">
                <span class="star-rating star-rating-1">
                  <span class="star-rating-inner"></span>
                </span>
                <span class="star-count">(0)</span>
                <div class="ratings-bar">
                  <div class="ratings-bar-inner" style="width: 0;"></div>
                </div>
              </div>
            </div>

            <div class="ratings-board-score">
              <span class="star-rating">
                <span class="star-rating-inner" style="width: 86%;"></span>
              </span>
              <span class="ratings-score">4.3</span>
              <span class="ratings-score-label">Excelente</span>
            </div>
          </div>

          <ol class="comment-list">
            <li class="comment even thread-even depth-1 parent bypostauthor">
              <article class="comment-body">
                <footer class="comment-meta">
                  <div class="comment-author vcard">
                    <img alt="" src="images/avatar03.jpg" class="avatar avatar-64 photo" height="64" width="64">
                    <b class="fn">Nome autor</b>
                    <span class="says">diz:</span>
                  </div>

                  <div class="comment-metadata">
                    <span class="star-rating star-rating-5">
                      <span class="star-rating-inner"></span>
                    </span>
                    <a href="#">
                      <time datetime="2007-09-04T10:49:03+00:00">
                        10 de Abril de 2019 às 10h30
                      </time>
                    </a>
                    <span class="edit-link">
                      <a class="comment-edit-link" href="#">Editar</a>
                    </span>
                  </div>
                </footer>

                <div class="comment-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, iure quam. Adipisci asperiores
                    aspernatur consectetur consequuntur culpa cumque dignissimos eos impedit, ipsam magnam magni
                    necessitatibus odit placeat, repellat repellendus tempore!</p>
                </div>
              </article>
            </li>
            <li class="comment even thread-even depth-1">
              <article class="comment-body">
                <footer class="comment-meta">
                  <div class="comment-author vcard">
                    <img alt="" src="images/avatar03.jpg" class="avatar avatar-64 photo" height="64" width="64">
                    <b class="fn">Nome autor</b>
                    <span class="says">diz:</span>
                  </div>

                  <div class="comment-metadata">
                    <span class="star-rating star-rating-4">
                      <span class="star-rating-inner"></span>
                    </span>
                    <a href="#">
                      <time datetime="2007-09-04T10:49:03+00:00">
                        10 de Abril de 2019 às 10h30
                      </time>
                    </a>
                    <span class="edit-link">
                      <a class="comment-edit-link" href="#">Editar</a>
                    </span>
                  </div>
                </footer>

                <div class="comment-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, iure quam. Adipisci asperiores
                    aspernatur consectetur consequuntur culpa cumque dignissimos eos impedit, ipsam magnam magni
                    necessitatibus odit placeat, repellat repellendus tempore!</p>
                </div>
              </article>
            </li>
          </ol>

          <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title">
              Seu comentário
            </h3>

            <form action="/" method="post" id="commentform" class="comment-form">
              <p class="comment-notes">
                <span id="email-notes">Seu endereço de e-mail não será publicado.</span>
                Campos obrigatórios são marcados
                <span class="required">*</span>
              </p>

              <p class="comment-form-star-rating">
                <span class="label">Avalie esse evento clicando nas estrelas abaixo *</span>
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
              </p>

              <p class="comment-form-comment">
                <label for="comment">Conte-nos sobre sua experiência</label>
                <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
              </p>

              <p class="comment-form-author">
                <label for="author">Nome
                  <span class="required">*</span>
                </label>
                <input id="author" name="author" type="text" required>
              </p>

              <p class="comment-form-email">
                <label for="email">E-mail
                  <span class="required">*</span>
                </label>
                <input id="email" name="email" type="email" required>
              </p>

              <p class="form-submit">
                <button type="submit" class="submit">Comentar</button>
              </p>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-12">
        <div id="entry-ticket" class="sidebar">
          <div class="widget">
            <div class="ci-quote-form-widget elevation-candidate">
              <form action="/" class="form-boxed">
                <div class="row">
                  <div class="col-md-12 text-right">
                    <i class="fas fa-shopping-cart"></i> R$ 228,00
                  </div>
                </div>
                <ul class="rows-ticket">

                  <li class="row">
                    <div class="col-md-8">
                      <label class="ticket-label" for="ticket-quantity-full">
                        Ingresso Inteira
                      </label>
                      <span class="ticket-price">R$ 150,00 <small>+ R$ 1,50</small></span>
                      <small class="ticket-period-sale"> Vendas até 20/06/2019 </small>
                    </div>

                    <div class="col-md-4 no-padding text-center ticket-quantity">
                      <a href="#" class="ticket-decrement"><i class="fa fa-minus"></i></a>
                      <input type="text" name="ticket-quantity-full" maxlength="2" required>
                      <a href="#" class="ticket-increment"><i class="fa fa-plus"></i></a>
                    </div>
                  </li>

                  <li class="row">
                    <div class="col-md-8">
                      <label class="ticket-label" for="ticket-quantity-half">
                        Ingresso Meia
                      </label>
                      <span class="ticket-price">R$ 75,00 <small>+ R$ 1,50</small></span>
                      <small class="ticket-period-sale"> Vendas até 20/06/2019 </small>
                    </div>

                    <div class="col-md-4 no-padding text-center ticket-quantity">
                      <a href="#" class="ticket-decrement"><i class="fa fa-minus"></i></a>
                      <input type="text" name="ticket-quantity-half" maxlength="2" required>
                      <a href="#" class="ticket-increment"><i class="fa fa-plus"></i></a>
                    </div>
                  </li>

                  <li>
                    <aside class="widget widget_search group discount-coupon">
                      <div>
                        <label for="coupondiscount" class="screen-reader-text">Cupom de desconto:</label>
                        <input type="text" id="coupon" name="coupon" value="" placeholder="Digite seu cupom">
                        <button class="couponsubmit" type="submit">
                          <i class="fas fa-check"></i>
                        </button>
                      </div>
                    </aside>
                  </li>
                </ul>

                <p class="ticket-info text-sm">

                </p>

                <button type="submit" class="btn-block">comprar ingressos</button>
              </form>
            </div>
          </div>
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
        </div>
      </div>

      <div class="col-12">
        <div class="section-related">
          <div class="section-heading">
            <p class="section-subtitle">Continue navegando em nossos eventos</p>
            <h2 class="section-title">Talvez você goste</h2>
          </div>

          <div class="row row-items">
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="item item-vertical">
                <div class="item-thumb">
                  <a href="#">
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <span class="item-badge">Promoção</span>
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">2 dias</span>
                    <span class="item-meta-field">Por: R$ 300,00</span>
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
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <!-- <span class="item-badge">Promoção</span> -->
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">2 dias</span>
                    <span class="item-meta-field">Por: R$ 300,00</span>
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
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <!-- <span class="item-badge">Promoção</span> -->
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">2 dias</span>
                    <span class="item-meta-field">Por: R$ 300,00</span>
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
                    <img src="images/piri-1.png" alt="">
                  </a>
                  <!-- <span class="item-badge">Promoção</span> -->
                </div>

                <div class="item-content">
                  <div class="item-meta">
                    <span class="item-meta-field">2 dias</span>
                    <span class="item-meta-field">Por: R$ 300,00</span>
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
        </div>
      </div>
    </div>
  </div>
</main>

@include('frontend/includes/footer')
@endsection
