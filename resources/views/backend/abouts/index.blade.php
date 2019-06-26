@extends('backend.layout._header')

@section('content')
<div class="container">
    <div class="box-layout">
        <div class="main-layout full-width">

        @if (session('alert'))
                <div>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Muito bem!</strong> {!! session('alert.text') !!}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="icon mdi mdi-close" aria-hidden="true"></i></span>
                </button>
                </div>
                </div>
                @endif
                
            <div class="content-box mt-20 fadeInUp animated">
                <div class="row no-gutters p-20 pb-5 align-items-center">
                    <div class="col-6 box-title">Sobre Nós</div>
                </div>



                        
                
                <div class="px-20 pb-20">
                {!! Form::model($abouts, ['route' => ['backend-abouts-update', 1], 'method' =>
                    'post', 'files' => true]) !!}
                    <div class="form-group">
                        {!!Form::label('title', 'Título')!!} <code>*</code>
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('subtitle', 'Sub-Título')!!}
                        {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                    </div>
                        <div class="form-group">
                        <label for="subtitulo">Conteúdo <code>*</code></label>
                        {!! Form::textarea('text', null, ['class'=>'form-control', 'id'=>'editor']) !!}
                            
                        </div>
                        <div class="form-group">
                        {!!Form::label('file-send', 'Imagem')!!}<code>*</code>

                        <div class="custom-file">
                            {!! Form::file('file-send', ['class' => 'customFile', 'id' => 'customFile']) !!}
                            {!!Form::label('customFile', 'Selecionar arquivo', array('class' => 'custom-file-label'))!!}
                        </div>
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
