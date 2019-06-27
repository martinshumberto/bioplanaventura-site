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
                    <div class="col-6 box-title">Configurações do Site</div>
                </div>



                        
                
                <div class="px-20 pb-20">
                {!! Form::model($configuracoes, ['route' => ['backend-configuracoes-update', 1], 'method' =>
                    'post', 'files' => true]) !!}
                    <div class="form-group">
                        {!!Form::label('title', 'Título')!!} <code>*</code>
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('intro', 'Introdução')!!}
                        {!! Form::text('intro', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('endereco', 'Endereço')!!}
                        {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
                    </div>  
                    <div class="form-group">
                        {!!Form::label('email', 'E-mail')!!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('telefone', 'Fone1')!!}
                        {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
                    </div>  
                    <div class="form-group">
                        {!!Form::label('telefone2', 'Fone2')!!}
                        {!! Form::text('telefone2', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('facebook', 'Facebook')!!}
                        {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('instagram', 'Instagram')!!}
                        {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('twitter', 'Twitter')!!}
                        {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('youtube', 'Yoututbe')!!}
                        {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
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
