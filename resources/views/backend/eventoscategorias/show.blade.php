@extends('backend.layout._header')

@section('content')
<div class="container">
    <div class="box-layout">
        <div class="main-layout full-width">
            <div class="content-box mt-20 fadeInUp animated">
                <div class="row no-gutters p-20 pb-5 align-items-center">
                    <div class="col-6 box-title">Cadastrar Eventos / Categorias</div>
                </div>
                <div class="px-20 pb-20">
                    @if(isset($eventoscategorias))
                    {!! Form::model($eventoscategorias, ['route' => ['backend-eventoscategorias-update', $eventoscategorias->eventoscategorias_id], 'method' =>
                    'put', 'files' => true]) !!}
                    @else
                    {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'route' => ['backend-eventoscategorias-create'],
                    'files' => true]) !!}
                    @endif
                    <div class="form-group">
                        {!!Form::label('title', 'Título')!!} <code>*</code>
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div> 
                    <div class="form-group">
                        {!!Form::label('subtitle', 'Subtitulo')!!} <code>*</code>
                        {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                    </div> 
                    <div class="form-group">
                        {!!Form::label('file-send', 'Imagem Topo')!!}<code>*</code>

                        <div class="custom-file">
                            {!! Form::file('file-send', ['class' => 'customFile', 'id' => 'customFile']) !!}
                            {!!Form::label('customFile', 'Selecionar arquivo', array('class' => 'custom-file-label'))!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!!Form::label('status', 'Status')!!}<code>*</code>
                        {!!Form::select('status', ['1' => 'Ativo', '2' => 'Inativo'], null, [ 'class' => 'custom-select
                        mb-10']) !!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn d-block mb-5 btn-primary">Salvar</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
