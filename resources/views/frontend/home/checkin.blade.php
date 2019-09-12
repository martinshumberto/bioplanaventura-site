@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')

<div class="page-hero" style="background-image: url({!! img_src('greece_lan.jpg') !!});">

</div>
<main class="main main-elevated">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="content-elevated section-margin">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="page-hero-content">
                                <h2 class="page-hero-title"><b>Resumo do pedido</b></h2>
                                <p class="page-hero-subtitle">{!! session('usuario')->name !!}</p>
                            </div>

                            <div class="entry-content">
                                <span><a href="#"><i class="fa fa-share fa-flip-horizontal fa-flip-vertical"></i></a> Voltar à página "Meus Dados".</span>

                                <table class="table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Evento</th>
                                            <th>Inscrito</th>
                                            <th>Valor Ingresso</th>
                                            <th>Quantidade</th>
                                            <th>Total</th>
                                            <th>Data do pedido</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td><a href="{!! url('/evento', $dados_evento->slug); !!}">{!! $dados_evento->title !!}</a></td>
                                            <td>{!! $dados_evento->subtitle !!}</td>
                                            <td>R$ {!! number_format(session('carrinho')['valor_inteira'], 2) !!}</td>
                                            <td>{!! session('carrinho')['quantidade_inteira'] !!}</td>
                                            <td>R$ {!! number_format(session('carrinho')['valor'], 2) !!}</td>
                                            <td>{!! session('carrinho')['data'] !!}</td>

                                        </tr>

                                    </tbody>
                                </table>

                                <div class="filter-form-group">
                                    <a href="{!!route('frontend-checkout')!!}" class="btn btn-block">
                                        CONFIRMAR COMPRA 
                                    </a>
                                </div>

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
