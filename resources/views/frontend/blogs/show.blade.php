@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')

<div class="page-hero" style="background-image: url(images/greece_lan.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-hero-content">
          <h1 class="page-hero-title">Lorem ipsum dolor sit amet</h1>
          <p class="page-hero-subtitle">Lorem ipsum dolor sit amet, consectetur.</p>
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
          <figure class="entry-thumb">
            <a class="ci-theme-lightbox" href="images/blog_single.jpg">
              <img src="images/blog_single.jpg" alt="">
            </a>
          </figure>

          <header class="entry-header">
            <div class="entry-meta">
              <span class="entry-meta-item">
                <time datetime="2017-06-08">8 de Abril de 2019</time>
              </span>
              <span class="entry-meta-item entry-categories">
                <a href="">Categoria 1</a>,
                <a href="">Categoria 2</a>
              </span>
              <span class="entry-meta-item entry-author">
                por
                <a href="">Humberto Martins</a>
              </span>
              <span class="entry-meta-item entry-comments-link">
                <a href="#comments">Deixe um comentário</a>
              </span>
            </div>

            <h1 class="entry-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h1>
          </header>

          <div class="entry-content">
            <div class="entry-content-intro">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab, accusantium ad aut, consequatur
                <a href="">consequuntur dolor incidunt</a> nam officiis, tempore temporibus voluptatem. Doloremque
                dolorum, facere id molestias nemo neque veritatis voluptas. Ab obcaecati odio officia pariatur quae
                quasi reiciendis ut!</p>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam asperiores atque aut autem cumque
              debitis dicta distinctio dolore doloremque est exercitationem fuga inventore iste labore libero nemo nihil
              nobis officiis quam quia, suscipit
              totam ut? A aliquid animi architecto, commodi cupiditate dolorem doloremque excepturi illo illum iure
              minus nam optio totam voluptas voluptatibus. Commodi molestiae quod recusandae ullam unde.</p>

            <h3>H3 Lorem ipsum dolor sit amet, consectetur</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque commodi consequuntur delectus
              dolore error facere illum nam nisi, numquam perspiciatis quisquam tempora vero! Ad consequatur corporis,
              dolores excepturi in ipsam iure perferendis
              quae quam quisquam recusandae saepe sit suscipit tempore unde, vel voluptates! Ab dolore in magni nemo
              rerum?</p>

            <div class="entry-content-column-split">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam at corporis culpa deleniti deserunt
                dolores doloribus eligendi ex exercitationem impedit in ipsa itaque laborum maiores minus molestias
                mollitia neque nihil, numquam officia,
                placeat quam quo quod sunt tenetur, vel voluptas? Cupiditate dignissimos inventore maiores molestias
                natus nobis optio repellat similique, sint. Commodi deserunt dolore, id in inventore minima voluptatum.
                Alias assumenda atque labore magni
                numquam odio placeat, possimus quae quam qui quibusdam repellat rerum sed sunt ullam. Aliquam at atque
                cumque dignissimos esse fugiat impedit, iusto labore nesciunt non odit, reprehenderit similique sint sit
                tenetur vero vitae? Expedita libero
                sed tenetur. A aliquam animi blanditiis delectus dignissimos distinctio doloribus, eaque esse et, facere
                fugiat fugit in ipsa itaque laborum odit perspiciatis porro quia quo repellendus sint temporibus
                voluptate voluptatum? Aspernatur est exercitationem
                illum nam pariatur praesentium quae rem totam voluptatem!</p>
            </div>

            <div class="gallery gallery-columns-3">
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
                    <img src="images/blog02_sm.jpg" alt="">
                  </a>
                </div>
              </figure>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias architecto delectus deleniti deserunt
              ducimus eius eum, fugiat harum incidunt labore, laudantium minima nesciunt praesentium quam quasi quia
              repellat voluptatibus.</p>

            <iframe src="https://www.youtube.com/embed/WHnOTKUX_X0" allowfullscreen></iframe>

            <h4>H4 Lorem ipsum dolor sit amet, consectetur adipisicing</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aliquam aperiam aut blanditiis
              doloremque dolores exercitationem id itaque labore laboriosam officiis omnis pariatur perspiciatis quae
              quas quis quos recusandae reiciendis repudiandae
              saepe tempora, unde voluptas. Amet aspernatur provident voluptas.</p>

            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias eos fugit iusto maxime
                natus quaerat repudiandae sapiente voluptates voluptatum.</p>
            </blockquote>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet blanditiis corporis cum et libero
              perferendis! A accusantium aliquam, consectetur cumque debitis delectus enim eveniet id illum itaque iusto
              labore nostrum odit officia omnis quidem
              quos sunt veniam? Ad blanditiis commodi consequatur cumque, distinctio ea earum eius fugit ipsam ipsum
              iure libero molestiae officiis quasi quos recusandae, reiciendis sed, soluta vel vero? Aspernatur
              consequuntur cumque, eos illum ipsa iure
              magnam magni nihil quia quidem quisquam ratione rerum soluta tempore veniam.</p>
          </div>

          <div class="entry-tags">
            <a href="">tag 1</a>
            <a href="">tag 2</a>
            <a href="">tag 3</a>
            <a href="">tag 4</a>
          </div>
        </article>

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

        <div id="comments" class="comments-area">
          <h3 class="comments-title">5 Comentários</h3>

          <ol class="comment-list">
            <li class="comment even thread-even depth-1 parent bypostauthor">
              <article class="comment-body">
                <footer class="comment-meta">
                  <div class="comment-author vcard">
                    <img alt="" src="images/avatar03.jpg" class="avatar avatar-64 photo" height="64" width="64">
                    <b class="fn">Nome do autor</b>
                    <span class="says">diz:</span>
                  </div>

                  <div class="comment-metadata">
                    <a href="#">
                      <time datetime="2007-09-04T10:49:03+00:00">
                        10 de Abril de 2019 às 10h32
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

                <div class="reply">
                  <a rel="nofollow" class="comment-reply-link" href="#">Responder</a>
                </div>
              </article>

              <ol class="children">
                <li class="comment even thread-even depth-1">
                  <article class="comment-body">
                    <footer class="comment-meta">
                      <div class="comment-author vcard">
                        <img alt="" src="images/avatar03.jpg" class="avatar avatar-64 photo" height="64" width="64">
                        <b class="fn">Nome do autor</b>
                        <span class="says">diz:</span>
                      </div>

                      <div class="comment-metadata">
                        <a href="#">
                          <time datetime="2007-09-04T10:49:03+00:00">
                            10 de Abril de 2019 às 10h32
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
                        necessitatibus odit placeat, repellat repellendus
                        tempore!</p>
                    </div>

                    <div class="reply">
                      <a rel="nofollow" class="comment-reply-link" href="#">Responder</a>
                    </div>
                  </article>

                  <ol class="children">
                    <li class="comment even thread-even depth-1">
                      <article class="comment-body">
                        <footer class="comment-meta">
                          <div class="comment-author vcard">
                            <img alt="" src="images/avatar03.jpg" class="avatar avatar-64 photo" height="64" width="64">
                            <b class="fn">Nome do autor</b>
                            <span class="says">diz:</span>
                          </div>

                          <div class="comment-metadata">
                            <a href="#">
                              <time datetime="2007-09-04T10:49:03+00:00">
                                10 de Abril de 2019 às 10h32
                              </time>
                            </a>
                            <span class="edit-link">
                              <a class="comment-edit-link" href="#">Editar</a>
                            </span>
                          </div>
                        </footer>

                        <div class="comment-content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, iure quam. Adipisci
                            asperiores aspernatur consectetur consequuntur culpa cumque dignissimos eos impedit, ipsam
                            magnam magni necessitatibus odit placeat, repellat repellendus
                            tempore!</p>
                        </div>

                        <div class="reply">
                          <a rel="nofollow" class="comment-reply-link" href="#">Responder</a>
                        </div>
                      </article>
                    </li>
                  </ol>
                </li>
              </ol>
            </li>
            <li class="comment even thread-even depth-1">
              <article class="comment-body">
                <footer class="comment-meta">
                  <div class="comment-author vcard">
                    <img alt="" src="images/avatar03.jpg" class="avatar avatar-64 photo" height="64" width="64">
                    <b class="fn">Nome do autor</b>
                    <span class="says">diz:</span>
                  </div>

                  <div class="comment-metadata">
                    <a href="#">
                      <time datetime="2007-09-04T10:49:03+00:00">
                        10 de Abril de 2019 às 10h32
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

                <div class="reply">
                  <a rel="nofollow" class="comment-reply-link" href="#">Responder</a>
                </div>
              </article>
            </li>
            <li class="comment even thread-even depth-1">
              <article class="comment-body">
                <footer class="comment-meta">
                  <div class="comment-author vcard">
                    <img alt="" src="images/avatar03.jpg" class="avatar avatar-64 photo" height="64" width="64">
                    <b class="fn">Nome do autor</b>
                    <span class="says">diz:</span>
                  </div>

                  <div class="comment-metadata">
                    <a href="#">
                      <time datetime="2007-09-04T10:49:03+00:00">
                        10 de Abril de 2019 às 10h32
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

                <div class="reply">
                  <a rel="nofollow" class="comment-reply-link" href="#">Responder</a>
                </div>
              </article>
            </li>
          </ol>

          <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title">
              Deixe um comentário
              <small>
                <a rel="nofollow" id="cancel-comment-reply-link" href="#">Cancelar comentário</a>
              </small>
            </h3>

            <form action="/" method="post" id="commentform" class="comment-form">
              <p class="comment-notes">
                <span id="email-notes">Seu endereço de e-mail não será publicado.</span>
                Campos obrigatórios são marcados
                <span class="required">*</span>
              </p>

              <p class="comment-form-comment">
                <label for="comment">Comentário
                  <span class="required">*</span>
                </label>
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
          <aside class="widget widget_categories group">
            <h3 class="widget-title">Categorias</h3>
            <ul>
              <li>
                <a href="#">Categoria 1</a>
                <span class="ci-count">15</span>
              </li>
              <li>
                <a href="#">Categoria 2</a>
                <span class="count">200</span>
                <ul class="children">
                  <li>
                    <a href="">Sub-categoria 1</a>
                    <span class="count">124</span>
                  </li>
                  <li>
                    <a href="">Sub-categoria 2</a>
                    <span class="count">30</span>
                  </li>

                </ul>
              </li>
              <li>
                <a href="#">Categoria 3</a>
                <span class="count">0</span>
              </li>
            </ul>
          </aside>
          <!-- /widget -->

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
                  <img src="images/travel1_01.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_01.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_01.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_01.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_01.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_01.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_01.jpg" alt="">
                </a>
              </li>
              <li>
                <a href="">
                  <img src="images/travel1_01.jpg" alt="">
                </a>
              </li>
            </ul>
          </aside>
        </div>
      </div>

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
    </div>
  </div>
</main>

@include('frontend/includes/footer')
@endsection
