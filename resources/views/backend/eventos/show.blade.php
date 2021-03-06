@php
use App\Model\Eventoscategorias;
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
                    <div class="col-6 box-title">Cadastrar Eventos </div>
                </div>
                <div class="px-20 pb-20">
                    @if(isset($eventos))
                    {!! Form::model($eventos, ['route' => ['backend-eventos-update', $eventos->eventos_id], 'method' =>
                    'put', 'files' => true]) !!}
                    @else
                    {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'route' => ['backend-eventos-create'],
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
                        {!!Form::label('eventoscategorias_id', 'Categoria')!!}<code>*</code>
                        {!!Form::select('eventoscategorias_id', Eventoscategorias::pluck('title', 'eventoscategorias_id'), null, [ 'class' => 'custom-select
                        mb-10']) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('video', 'Vídeo')!!} <code>*</code>
                        {!!Form::text('video', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="subtitulo">Outras Informações <code>*</code></label>
                        {!! Form::textarea('outrasinfos', null, ['class'=>'form-control', 'id'=>'editor3']) !!}               
                    </div>

                    <h5>INFORMAÇÕES ADICIONAIS</h5>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                {!!Form::label('estado_id', 'Estado')!!}<code>*</code>
                                {!!Form::select('estado_id', States::pluck('name', 'states_id'), null, [ 'class' => 'form-control
                                mb-10']) !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                {!!Form::label('city', 'Cidade')!!}<code>*</code>
                                {!!Form::select('city_id', [], null, [ 'class' => 'form-control mb-10', 'id'=>'city']) !!}
                            </div>
                        </div>
                    </div>    
                    <div class="form-group">
                                {!!Form::label('dificuldade', 'Dificuldade')!!}<code>*</code>
                                {!!Form::select('dificuldade', ['Muito Fácil', 'Fácil', 'Moderado', 'Difícil', 'Experts'], null, [ 'class' => 'form-control mb-10', 'id'=>'city']) !!}            
                    </div>
                    <div class="form-group">
                        <label for="subtitulo">Flags <code>*</code></label><br>
                        {!! Form::checkbox('promocao', 'promocao', false); !!}  PROMOÇÃO    &nbsp &nbsp
                        {!! Form::checkbox('saidas', 'saidas', false); !!}  INGRESSO ESGOTADO            
                    </div>
                    <hr size="1">
                    <h5>INFORMAÇÕES FINANCEIRAS </h5>
                    <hr size="1">
                    <div class="row">
                        <div class="col-2 px-20">
                            <div class="form-group">
                                {!!Form::label('dataevento', 'Data do Evento')!!} <code>*</code>
                                {!!Form::text('dataevento', null, ['class' => 'form-control datepicker-here', 'data-language'=>'pt-BR']) !!}
                            </div>
                        </div>
                        <div class="col-2 px-20">
                            <div class="form-group">
                                {!!Form::label('datavendas', 'Término das vendas')!!} <code>*</code>
                                {!!Form::text('datavendas', null, ['class' => 'form-control datepicker-here', 'data-language'=>'pt-BR']) !!}
                            </div>
                        </div>
                        <div class="col-2 px-20">
                            <div class="form-group">
                                {!!Form::label('datatermino', 'Término do Evento')!!} 
                                {!!Form::text('datatermino', null, ['class' => 'form-control datepicker-here', 'data-language'=>'pt-BR']) !!}
                                <code>Item relevante para filtro PRÓXIMAS SAÍDAS</code>
                            </div>
                        </div>
                        <div class="col-3 px-20">
                            <div class="form-group">
                                {!!Form::label('ingressomeia', 'Valor ingresso MEIA')!!} <code>*</code>
                                {!!Form::text('ingressomeia', null, ['class' => 'form-control money']) !!}
                            </div>
                        </div>
                        <div class="col-3 px-20">
                            <div class="form-group">
                                {!!Form::label('ingressointeiro', 'Valor ingresso INTEIRA')!!} <code>*</code>
                                {!!Form::text('ingressointeiro', null, ['class' => 'form-control money']) !!}
                            </div>
                        </div>
                    </div>                    

                    @include('backend/includes/gallery', array("action"=>"eventos", "fotos"=>$fotos), array("chave"=>$chave))
                    
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
    $('.money').mask('000.000.000.000.000,00', {reverse: true});

    $( function() {
        $( "#datepicker" ).datepicker();
    } );

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
<script type="text/javascript">

    $('#estado_id').on('change',function(){
    var stateID = $(this).val();    
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('get-city-list')}}?state_id="+stateID,
           success:function(res){               
            if(res){
                $("#city").empty();
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
    }
        
   });
</script>
@endsection
