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
            <a href="{!!route('frontend-home')!!}">
              {!!img('logo.svg')!!}
            </a>
          </h1>
          <!-- <p class="site-tagline">Theme tagline</p> -->
        </div>

        <div class="col-lg-9 col-md-6 col-4">
          <nav class="nav">
            <ul class="navigation-main navigation-main-right">
              <li class="menu-item-home {{ Route::currentRouteNamed( 'frontend-home' ) ?  'active' : '' }}">
                <a href="{!!route('frontend-home')!!}">Home</a>
              </li>
              <li class="{{ (strpos(Route::currentRouteName(), 'frontend-abouts') == 0) ? 'active' : '' }}">
                <a href="{!!route('frontend-abouts')!!}">Sobre Nós</a>
              </li>
              <li class="{{ (strpos(Route::currentRouteName(), 'frontend-equipe') == 0) ? 'active' : '' }}">
                <a href="{!!route('frontend-equipe')!!}">Equipe</a>
              </li>
              <li class="{{ (strpos(Route::currentRouteName(), 'frontend-calendario') == 0) ? 'active' : '' }}">
                <a href="{!!route('frontend-calendario')!!}">Calendário</a>
              </li>
              <li class="current-menu-ancestor menu-item-has-children {{ (strpos(Route::currentRouteName(), 'frontend-events') == 0) ? 'active' : '' }}">
                <a href="{!!route('frontend-events', 'todos')!!}">Eventos</a>
                <ul class="sub-menu">
                  <li>
                    <a href="{!!route('frontend-events-promocoes')!!}">Promoções</a>
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
              <li class="{{ (strpos(Route::currentRouteName(), 'frontend-galleries') == 0) ? 'active' : '' }}">
                <a href="{!!route('frontend-galleries')!!}">Galeria</a>
              </li>
              <li class="{{ (strpos(Route::currentRouteName(), 'frontend-blogs') == 0) ? 'active' : '' }}">
                <a href="{!!route('frontend-blogs')!!}">Blog</a>
              </li>
              @if (session('usuario'))
              <li class="logged current-menu-ancestor">
										<a href="{!!route('frontend-my-account')!!}">
                      <img src="{!! img_src(session('usuario')->team, true) !!}" class="avatar img-circle">
											<span class="header-username"><b>
                        @php 
                          $usuarioMin = explode(" ", session('usuario')->name)
                        @endphp
                      {!! $usuarioMin[0] !!}
                      </b></span>
											<i class="fa fa-sort-down header-icon"></i>
										</a>
										<ul class="sub-menu">
                        <li><a href="{!!route('frontend-historico')!!}">Histórico</a></li>  
                        <li><a href="{!!route('frontend-faturamento')!!}">Meus Pedidos</a></li>
                        <li><a href="{!!route('frontend-my-account')!!}">Meus Dados</a></li>	
                        <li class="divider"></li>
                        <li>
                          <a href="{!!route('frontend-areacliente-sair')!!}">Sair</a>
                        </li>
										</ul>
                  </li>
              @else    
              <li class="nav-button">
                <a href="#area-cliente" rel="modal">Área do Cliente</a>
              </li>
              @endif
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


