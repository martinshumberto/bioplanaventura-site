@php
use App\Model\Configuracoes;
use App\Model\Eventos;
use App\Model\Eventoscategorias;
use Illuminate\Support\Carbon;
$configuracoes = Configuracoes::all() 
@endphp
<div class="footer-widget-sections">
  <div class="container">
    <div class="row">
      <div class="col-12">
        @include('frontend/includes/filtros')
      </div>
    </div>
  </div>
</div>
</div>

<!-- Add class .footer-fullwidth for max-width 1600px -->
<footer class="footer"
style="background-image: url( {!!img_src('footer_bg.jpg')!!}); background-position: bottom center; background-repeat: no-repeat;">
<div class="footer-widgets">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6 col-12">
        <aside class="widget widget_ci-schedule">
          <h3 class="widget-title">Bioplan Aventura</h3>

          <p class="ci-schedule-widget-intro">
            {!! $configuracoes[0] ->intro !!}
          </p>

        </aside>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <aside class="widget">
          <h3 class="widget-title">Categorias</h3>


          <div class="widget-list-wrap">
            <ul>
              @foreach( Eventoscategorias::get() as $eventocategoria )
              <li>
                <a href="{!! url('/eventos', $eventocategoria->slug); !!}">{!! $eventocategoria -> title !!}</a>
                <div class="ci-count">{!! $eventocategoria -> count(); !!}</div>
              </li>
              @endforeach
            </ul>
          </div>

        </aside>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <aside class="widget">
          <h3 class="widget-title">Próximas Saídas</h3>

          @foreach (Eventos::all()->take(2) as $eventos)
          @php 
          $data1 = new DateTime( $eventos -> dataevento );
          $data2 = new DateTime( $eventos -> datavendas );
          $intervalo = $data1->diff( $data2 );
          @endphp
          <div class="item-list-xs">
            <div class="item-meta">
              <span class="item-meta-field">{!! $intervalo -> days !!} dias</span>
              <span class="item-meta-field">Valor: R$ {!! number_format($eventos -> ingressointeiro, 2) !!}</span>
            </div>

            <p class="item-title item-title-blog">
              <a href="{!! url('/evento', $eventos->slug); !!}">
                {!! $eventos->title !!}
              </a>
            </p>
          </div>                    
          @endforeach

          

        </aside>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <aside class="widget widget_ci-contact">
          <h3 class="widget-title">Vamos conversar</h3>

          <ul class="ci-contact-widget-items">
            <li class="ci-contact-widget-item">
              <i class="fas fa-map-marker-alt"></i>
              {!! $configuracoes[0]->endereco !!}
            </li>
            <li class="ci-contact-widget-item">
              <i class="fas fa-envelope-square"></i> <a href="mailto:{!! $configuracoes[0]->email !!}">{!! $configuracoes[0]->email !!}</a>
            </li>
            <li class="ci-contact-widget-item">
              <i class="fa fa-phone"></i> {!! $configuracoes[0]->telefone !!}
            </li>
          </ul>
        </aside>
      </div>
    </div>
  </div>
</div>

<div class="footer-info">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="footer-info-inner on-background">
          <div class="row align-items-center">
            <div class="col-lg-6 col-12">
              <p class="footer-copy text-lg-left text-center">Bioplan Aventura &ndash; um produto <a
                href="http://bioplan.eco.br" target="_new">Bioplan Consultoria</a></p>
              </div>

              <div class="col-lg-6 col-12">
                <div class="footer-info-addons text-lg-right text-center">
                  <ul class="list-social-icons">
                    <li>
                      <a class="social-icon" href="{!! $configuracoes[0]-> facebook !!}">
                        <i class="fab fa-facebook"></i>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>