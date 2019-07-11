@php
use App\Model\Configuracoes;
use App\Model\Eventos;
use App\Model\Eventoscategorias;
$configuracoes = Configuracoes::all() 
@endphp
<header class="header">
  <div class="head-intro">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="head-intro-inner">
            <div class="head-intro-info">
              <span><b><i class="fab fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5562981418804">Chat Via WhatsApp</a></span></b>
              <span>
                <a href="mailto:{!! $configuracoes[0]->email !!}">{!! $configuracoes[0]->email !!}</a>
              </span>
            </div>

            <div class="head-intro-addons">
              <div class="head-intro-addon">
                <ul class="list-social-icons">
                  <li>
                    <a class="social-icon" href="{!! $configuracoes[0]-> facebook !!}">
                      <i class="fab fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a class="social-icon" href="{!! $configuracoes[0]-> twitter !!}">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a class="social-icon" href="{!! $configuracoes[0]-> instagram !!}">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>

                  <li>
                    <a class="social-icon" href="{!! $configuracoes[0]-> youtube !!}">
                      <i class="fab fa-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="head-intro-addon">
                <div class="head-search">
                {{ Form::open(array('route' => 'frontend-pesquisa', 'class'=>'head-search-form'))  }}
                    <label for="head-search-input" class="sr-only">Buscar:</label>
                    <input type="text" name="termo" id="head-search-input" class="head-search-input" placeholder="Faça sua busca">
                  </form>
                  <a href="#" class="head-search-trigger">
                    <i class="fas fa-search"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="head-mast head-sticky">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-6 col-8">
          <h1 class="site-logo">
            <a href="/">
              {!!img('logo.svg')!!}
            </a>
          </h1>
          <!-- <p class="site-tagline">Theme tagline</p> -->
        </div>

        <div class="col-lg-9 col-md-6 col-4">
          <nav class="nav">
            <ul class="navigation-main navigation-main-right">
              <li class="menu-item-home">
                <a href="{!!route('frontend-abouts')!!}">Sobre Nós</a>
              </li>
              <li class="menu-item-home">
                <a href="{!!route('frontend-equipe')!!}">Equipe</a>
              </li>
              <li>
                <a href="{!!route('frontend-calendario')!!}">Calendário</a>
              </li>
              <li class="current-menu-ancestor menu-item-has-children">
                <a href="{!!route('frontend-events', 'todos')!!}">Eventos</a>
                <ul class="sub-menu">
                  <li>
                    <a href="/">Promoções</a>
                  </li>
                  <li>
                    <a href="/">Próximas Saídas</a>
                  </li>
                  <li class="menu-item-has-children">
                    <!-- hover/active class::current-menu-parent -->
                    <a href="#">Categorias</a>
                    <ul class="sub-menu">
                    @foreach( Eventoscategorias::get() as $eventocategoria )
                      <li>
                        <!-- hover/active class::current-menu-item -->
                        <a href="{!! url('/eventos', $eventocategoria->slug); !!}">{!! $eventocategoria -> title !!}</a>
                      </li>
                    @endforeach
                    </ul>
                  </li>
                </ul>
              </li>

              <li>
                <a href="{!!route('frontend-galleries')!!}">Galeria</a>
              </li>
              <li>
                <a href="{!!route('frontend-blogs')!!}">Blog</a>
              </li>

              <li class="nav-button">
                <a href="#area-cliente" rel="modal">Área do Cliente</a>
              </li>
            </ul>
          </nav>
          <a href="#mobilemenu" class="mobile-nav-trigger">
            <i class="fas fa-bars"></i> Menu</a>
        </div>
      </div>
    </div>
  </div>
</header>
<div id="mobilemenu">
  <ul></ul>
</div>
