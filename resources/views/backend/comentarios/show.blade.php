@php
use App\Model\comentarioscategorias;
use App\Model\States;
use Illuminate\Support\Carbon;
@endphp

@extends('backend.layout._header')

@section('content')
<div class="container">
    <div class="box-layout">
        <div class="main-layout full-width">
            <div class="content-box mt-20 fadeInUp animated">
                <div class="row no-gutters p-20 pb-5 align-items-center">
                    <div class="col-6 box-title">Cadastrar Posts / comentarios </div>
                </div>
                <div class="px-20 pb-20">
                    @if(isset($comentarios))
                    {!! Form::model($comentarios, ['route' => ['backend-comentarios-update', $comentarios->comentarios_id], 'method' =>
                    'put', 'files' => true]) !!}
                    @else
                    {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'route' => ['backend-comentarios-create'],
                    'files' => true]) !!}
                    @endif
                  
                      

                    <div class="form-group">
                        {!!Form::label('author', 'Usuário')!!} <code>*</code>
                        {!!Form::text('author', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="subtitulo">Estrelas <code>*</code></label>
                        {!!Form::text('star_rating', null, ['class'=>'form-control']) !!}               
                    </div>
                    <div class="form-group">
                        <label for="subtitulo">Mensagem <code>*</code></label>
                        {!!Form::textarea('comment', null, ['class'=>'form-control', 'id'=>'editor2']) !!}               
                    </div>

                    <div class="form-group">
                        {!!Form::label('status', 'Status')!!}<code>*</code>
                        {!!Form::select('status', ['1' => 'Ativo', '0' => 'Inativo'], null, [ 'class' => 'custom-select
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

<script>

        ClassicEditor.create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error)
        })
        ClassicEditor.create(document.querySelector('#editor2'))
        .catch(error => {
            console.error(error)
        })
        ClassicEditor.create(document.querySelector('#editor3'))
        .catch(error => {
            console.error(error)
        })
</script> 

@endsection
