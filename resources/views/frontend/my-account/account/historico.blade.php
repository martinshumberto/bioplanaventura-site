@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')
@php
use App\Model\Eventos; 
use Illuminate\Support\Carbon;
@endphp

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
                                                    <h2 class="page-hero-title"><b>Meus Pedidos</b></h2>
                                                    <p class="page-hero-subtitle">Histórico</p>
                                                </div>

                                                <div class="entry-content">
                                                    <span><a href="#"><i class="fa fa-share fa-flip-horizontal fa-flip-vertical"></i></a> Voltar à página "Meus Dados".</span>

                                                    <table class="table-responsive">
                                                        <thead>
                                                            <tr>
                                                                <th>Evento</th> 
                                                                <th>Quantidade</th>
                                                                <th>Valor Ingresso</th>
                                                                <th>Total</th>
                                                                <th>Data do pedido</th> 
                                                                <th>ESTATUS</th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($carrinho as $carrinhos)
                                                            <tr>
                                                                    <td>{{ Eventos::where('eventos_id', '=', $carrinhos->eventos_id)->first()->title }} </td>
                                                                    <td>{{ $carrinhos->quantidade_inteira }}</td>
                                                                    <td>{{ number_format(Eventos::where('eventos_id', '=', $carrinhos->eventos_id)->first()->ingressointeiro, 2) }}</td>
                                                                    <td>{{ number_format($carrinhos->valor, 2) }}</td>
                                                                    <td>{!!extractDate($carrinhos->created_at)!!} às {!!extrateHour($carrinhos->created_at)!!}</td> 
                                                                    <td>
                                                                        @if ($carrinhos->status == 0) PENDENTE @endif
                                                                    </td> 
                                                            </tr>
                                                            @endforeach
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
