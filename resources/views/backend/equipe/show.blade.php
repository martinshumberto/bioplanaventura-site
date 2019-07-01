@extends('backend.layout._header')

@section('content')
<div class="container">
    <div class="box-layout">
        <div class="main-layout full-width">
            <div class="content-box mt-20 fadeInUp animated">
                <div class="row no-gutters p-20 pb-5 align-items-center">
                    <div class="col-6 box-title">Cadastrar equipe </div>
                </div>
                <div class="px-20 pb-20">
                    @if(isset($equipe))
                    {!! Form::model($equipe, ['route' => ['backend-equipe-update', $equipe->equipe_id], 'method' =>
                    'put', 'files' => true]) !!}
                    @else
                    {!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'route' => ['backend-equipe-create'],
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
                        {!!Form::textarea('text', null, ['class'=>'form-control', 'id'=>'editor2']) !!}               
                    </div>
                    
                                  

                    @include('backend/includes/gallery', array("action"=>"equipe", "fotos"=>$fotos), array("chave"=>$chave))
                    
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
