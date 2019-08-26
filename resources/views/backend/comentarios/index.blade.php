@extends('backend.layout._header')

@section('content')

<div class="container">
    <div class="box-layout">
        <div class="main-layout full-width">
            <div class="content-box mt-20 fadeInUp animated">
                <div class="row no-gutters p-20 pb-5 align-items-center">
                    <div class="col-6 box-title">comentarios</div>
                    <div class="col-3 box-title text-right">
                        
                    </div>
                    <div class="col-3 box-title text-right pl-20">
                    {{ html()->form('GET', route('backend-comentarios'))->open() }}
                        <div class="input-group mr-sm-10">
                            {{ html()->input('text')->name('search')->placeholder('Digite o termo')->class('form-control') }}
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
                            </div>
                        </div>
                    {{ html()->form()->close() }}
                    </div>
                </div>

                @include('backend.layout._alerts')
                <div class="px-20 pb-20">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" width="10px">#</th>
                                <th scope="col">Usuário</th>
                                <th scope="col">Evento</th>
                                <th scope="col">Estrelas</th>
                                <th scope="col">Mensagem</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comentarios as $item)
                            <tr>
                                <th scope="row">{!!$item->comentarios_id!!}</th>
                                <td>{!!$item->author!!} <Br> {!!$item->email!!}</td>
                                <td>{!!$item->evento_id!!}</td>
                                <td>{!!$item->star_rating!!}</td>
                                <td>{!!$item->comment!!}</td>
                                <td>{!!extractDate($item->created_at)!!} às {!!extrateHour($item->created_at)!!}</td>
                                
                                <td>
                                    {!!$item->status()!!}<i class="icon mdi {!!$item->statusIcon()!!} {!!$item->statusColor()!!}"></i>
                                    <a href="{!!route('backend-comentarios-destroy', [$item->comentarios_id])!!}">
                                        <i class="icon mdi mdi-trash-can"></i>
                                    </a>
                                    <a href="{!!route('backend-comentarios-show', [$item->comentarios_id])!!}">
                                            <i class="icon mdi mdi-pencil"></i>
                                    </a>
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
@endsection

