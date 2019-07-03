@php
use App\Model\Blogcategorias;
use App\Model\Blog;
@endphp

<div class="sidebar">
    <aside class="widget widget_search group">
      <h3 class="widget-title">Buscar</h3>
      {{ Form::open(array('route' => 'frontend-pesquisa', 'class'=>'searchform'))  }}
        <div>
          <label for="s" class="screen-reader-text">Buscar por:</label>
          <input type="search" id="s" name="termo" value="" placeholder="Buscar">
          <button class="searchsubmit" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
    </aside>
    <aside class="widget widget_categories group">
      <h3 class="widget-title">Categorias</h3>
      <ul>
        @foreach (Blogcategorias::all() as $categorias)
        <li>
          <a href="{!! route('frontend-pesquisablog', $categorias->slug) !!}">{!! $categorias->title !!}</a>
           <span class="ci-count">{!! Blog::where('blogcategorias_id',$categorias->blogcategorias_id)->count() !!}</span>
        </li> 
        @endforeach
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