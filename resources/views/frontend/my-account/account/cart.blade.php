@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')
@php
use App\Model\Eventos; 
use Illuminate\Support\Carbon;
@endphp

<div class="page-hero" style="background-image: url({!! img_src('pages/user.png') !!});">

</div>
<main class="main main-elevated">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="content-elevated section-margin">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="page-hero-content">
                                <h2 class="page-hero-title"><b>Carrinho</b></h2>
                                <p class="page-hero-subtitle">Acompanhe seu carrinho aqui.</p>
                            </div>

                            <div class="entry-content">
                                <span><a href="#"><i class="fa fa-share fa-flip-horizontal fa-flip-vertical"></i></a> Voltar à "Home".</span>
                                <table class="table-responsive" style="display: inline-table;">
                                    <thead>
                                        <tr>
                                            <th>Evento</th> 
                                            <th>Quantidade</th>
                                            <th>Valor Ingresso</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if (!session('carrinho'))
                                        <tr><td colspan="6"> Você ainda não tem nenhum evento no carrinho. </td></tr>
                                        @else
                                        <tr>
                                            <td>{{ Eventos::where('eventos_id', '=', session('carrinho')['eventos_id'])->first()->title }} </td>
                                            <td>{{ session('carrinho')['quantidade_inteira'] }}</td>
                                            <td>R$ {{ number_format(Eventos::where('eventos_id', '=', session('carrinho')['eventos_id'])->first()->ingressointeiro, 2) }}</td>
                                            <td>{{ number_format(session('carrinho')['valor'], 2) }}</td>
                                        </tr> 
                                        @endif
                                    </tbody>
                                </table>
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
