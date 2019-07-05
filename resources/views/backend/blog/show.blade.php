@php
use App\Model\Blogcategorias;
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
                    <div class="col-6 box-title">Cadastrar Posts / BLOG </div>
                </div>
                <div class="px-20 pb-20">
                    @if(isset($blog))
                    {!! Form::model($blog, ['route' => ['backend-blog-update', $blog->blog_id], 'method' =>
                    'put', 'files' => true]) !!}
                    @else
                    {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'route' => ['backend-blog-create'],
                    'files' => true]) !!}
                    @endif
                    {!! Form::hidden('chave', $chave) !!}

                      

                    <div class="form-group">
                        {!!Form::label('title', 'Título')!!} <code>*</code>
                        {!!Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="subtitulo">Subtitulo <code>*</code></label>
                        {!!Form::text('subtitle', null, ['class'=>'form-control']) !!}               
                    </div>
                    <div class="form-group">
                        <label for="subtitulo">Descrição <code>*</code></label>
                        {!!Form::textarea('descricao', null, ['class'=>'form-control', 'id'=>'editor2']) !!}               
                    </div>
                    <div class="form-group">
                        {!!Form::label('blogcategorias_id', 'Categoria')!!}<code>*</code>
                        {!!Form::select('blogcategorias_id', Blogcategorias::pluck('title', 'blogcategorias_id'), null, [ 'class' => 'custom-select
                        mb-10']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('video', 'Vídeo')!!} 
                        {!!Form::text('video', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('tags', 'Tags')!!} 
                        {!!Form::text('tags', null, ['class' => 'form-control']) !!}
                        <code>tags separadas por "vírgula" EX: Aventuras, Trilhas, Acampamento</code>
                    </div>
                    
                    @include('backend/includes/gallery', array("action"=>"blog", "fotos"=>$fotos), array("chave"=>$chave))
                     
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
