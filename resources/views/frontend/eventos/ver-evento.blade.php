@php
use Illuminate\Support\Carbon;
use App\Model\Fotos;
$foto = Fotos::where('chave',$evento[0]->chave)->pluck('file');  
$fotoDestaque = Fotos::where('chave',$evento[0]->chave)->pluck('file')->first();       
@endphp
@extends('frontend.layout._header')
@section('content')
@include('frontend/includes/header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<div class="overlay">
</div>
<div class="page-hero" style="background-image: url({!! img_src($fotoDestaque, array("dynamic"=>true)) !!});">

</div>
<main class="main main-elevated">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12 hidden-sm-down">
                <div class="content-elevated content-sticky-parent">
                    <div class="widget-tour-info content-sticky">
                        <figure class="entry-thumb">
                            <a href="{!! img_src($fotoDestaque, array("dynamic"=>true)) !!}" class="ci-theme-lightbox">
                                <img src="{!! img_src($fotoDestaque, array("dynamic"=>true)) !!}" alt="">
                            </a>
                            <!-- badge custom -->
                            @if($evento[0] -> promocao) 
                            <span class="item-badge">Promoção</span>
                            @endif
                            @if($evento[0] -> esgotado) 
                            <span class="item-badge" style="background-color:#ff0000;">Esgotado</span>
                            @endif
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
                            @foreach(explode('*', $evento[0] -> subtitle) as $info)
                            <span class="entry-meta-item">{{ $info }}</span>
                            @endforeach                            

                            <div class="star-rating">
                                <div class="star-rating-inner" style="width: 86%;"></div>
                            </div>
                        </div>

                        <h1 class="entry-title">
                            {!! $evento[0] -> title !!}
                        </h1>
                    </header>

                    <figure class="entry-thumb hidden-md-up">

                        <a href="{!! img_src($fotoDestaque, array("dynamic"=>true)) !!}" class="ci-theme-lightbox">
                            <img src="{!! img_src($fotoDestaque, array("dynamic"=>true)) !!}">
                        </a>
                        <!-- badge custom -->
                        @if ($evento[0] -> promocao)
                        <span class="item-badge">Promoção</span>
                        @endif 
                    </figure>

                    <div id="entry-content" class="entry-content">

                        <h2 class="anchor-title">
                            Descrição do evento
                        </h2>

                        {!! $evento[0] -> descricao !!}

                        <h2 class="anchor-title">Galeria de fotos</h2>
                        <div class="gallery gallery-columns-3">

                            @foreach ($foto as $imgs)
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a class="ci-theme-lightbox" href="{{!! img_src($imgs, array("dynamic"=>true)) !!}">
                                        <img src="{!! img_src($imgs, array("dynamic"=>true)) !!}">
                                    </a>
                                </div>
                                <figcaption class="wp-caption-text gallery-caption">
                                   {!! $evento[0] -> title !!}
                               </figcaption>
                           </figure>
                           @endforeach 




                       </div>

                       <h2 class="anchor-title">Vídeo</h2>
                       <iframe src="{!! $evento[0] -> video !!}" allowfullscreen></iframe>

                       <h2 class="anchor-title">Outras informações</h2>

                       <div class="box-styled">
                        {!! $evento[0] -> outrasinfos !!}   
                    </div>
                </div>
            </article>

            <!-- AQUI VAI COMENTÁRIOS -->

        </div>

        <div class="col-lg-3 col-12">
            <div id="entry-ticket" class="sidebar">
                <div class="widget">
                    <div class="ci-quote-form-widget elevation-candidate">
                        {{ Form::open(array('route' => 'frontend-checkin', 'class'=>'form-boxed'))  }}
                        <input type="hidden" name="eventos_id" value="{!! $evento[0] -> eventos_id !!}">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <i class="fas fa-shopping-cart"></i> R$ <span id="valor-inteira">0,00</span>
                            </div>
                        </div>
                        <ul class="rows-ticket">	
                            @if($evento[0] -> esgotado) 
                            <p class="text-center" style="padding-top: 20px;">Que pena! O evento já se esgostou. <br> Acompanhe nossas próximas saídas.</p>
                            @else
                            <li class="row">
                                <div class="col-md-12">
                                    <label class="ticket-label" for="ticket-quantity-full">
                                        Ingresso 
                                    </label>
                                </div>
                                <div class="col-md-8">                                            
                                    <span class="ticket-price">R$ {!! number_format($evento[0] -> ingressointeiro, 2) !!}</span>
                                    <small class="ticket-period-sale"> Vendas até <b>{!! Carbon::parse($evento[0] -> datavendas)->format('d/m/Y') !!}</b> </small>
                                </div>

                                <div class="col-md-4 no-padding text-center ticket-quantity">
                                    <a class="ticket-decrement" onclick="inteira('menos');"><i class="fa fa-minus"></i></a>
                                    <input type="text" id="quantidade-inteira" name="quantidade_inteira" value="0" maxlength="2" required>
                                    <a class="ticket-increment" onclick="inteira('mais');"><i class="fa fa-plus"></i></a>
                                </div>
                            </li>

                            <aside class="widget widget_search group discount-coupon" style="padding-top: 20px;">
                                <div>
                                    <label for="coupondiscount" class="screen-reader-text">Cupom de desconto:</label>
                                    <input type="text" id="coupon" name="coupon" value="" placeholder="Digite seu cupom">
                                    <button class="couponsubmit" type="submit">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </div>
                            </aside>

                            @endif

                            
                        </li>
                    </ul>

                    <p class="ticket-info text-sm">

                    </p>
                    @if (session('usuario'))
                    <button type="submit" class="btn-block">comprar ingressos</button>

                    @else
                    <a href="#area-cliente" rel="modal" class="btn-block">Registre-se para comprar</a>
                    @endif
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

            @foreach ($eventosTodos as $eventosLista)
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="item item-vertical">
                    <div class="item-thumb">
                        <a href="{!! url('/evento', $eventosLista->slug); !!}">
                            @php
                            $fotox = Fotos::where('chave',$eventosLista->chave)->pluck('file')->first();                  
                            @endphp
                            <img src="{!!img_src($fotox, array("dynamic"=>true))!!}">
                        </a>
                        @if($eventosLista -> promocao) 
                        <span class="item-badge">{!! $eventosLista -> promocao !!}</span>
                        @endif
                    </div>

                    <div class="item-content">
                        <div class="item-meta">
                            @foreach(explode('*', $eventosLista -> subtitle) as $info)
                            <span class="item-meta-field">{{ $info }}</span>
                            @endforeach
                        </div>

                        <p class="item-title">
                            <a href="{!! url('/evento', $eventosLista->slug); !!}">
                                {!! $eventosLista -> title !!}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
</div>
</div>
</main>

<script type="text/javascript">
    function formataDinheiro(n) {
        return n.toFixed(2).replace('.', ',').replace(/(\d)(?=(\d{3})+\,)/g, "$1.");
    }

    function inteira(operacao)
    {
     var valor = "{!! $evento[0] -> ingressointeiro !!}";

     if (operacao == "menos"){
         var soma = parseInt($("#quantidade-inteira").val(), 10);
         if (soma < 1){
            $("#quantidade-inteira").val(soma);
        } else {
            var result = soma-1;
            $("#quantidade-inteira").val(result);
        }        
    } else {
        var soma = parseInt($("#quantidade-inteira").val(), 10);        
        var result = soma+1;
        $("#quantidade-inteira").val(result);          
    }  

    var qtd = parseInt($("#quantidade-inteira").val(), 10);
    var valorResult = qtd * valor;
    $("#valor-inteira").html(formataDinheiro(valorResult));

}

function meia(operacao)
{
 if (operacao == "menos"){
     var soma = parseInt($("#quantidade-meia").val(), 10);
     if (soma < 1){
        $("#quantidade-meia").val(soma);
    } else {
        var result = soma-1;
        $("#quantidade-meia").val(result);
    }        
} else {
    var soma = parseInt($("#quantidade-meia").val(), 10);        
    var result = soma+1;
    $("#quantidade-meia").val(result);          
}  
}
</script>

@include('frontend/includes/footer')
@endsection
