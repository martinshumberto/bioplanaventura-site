<input type="hidden" name="app_url" id="app_url" value="{!!url("/")!!}">
 
<script src="{{asset('public/'.elixir('js/bootstrap.min.js'))}}" async></script>
  @if(file_exists("public/js/frontend/".Route::currentRouteName()."-libs.js")) <script
  src="{{asset('public/'.elixir('js/frontend/'.Route::currentRouteName().'-libs.js'))}}"></script>
@else
<script src="{{asset('public/'.elixir('js/default-libs.js'))}}"></script>
@endif

@if (file_exists("public/js/frontend/".Route::currentRouteName().".js"))
<script src="{{asset('public/'.elixir('js/frontend/'.Route::currentRouteName().'.js'))}}" async></script>
@else
<script src="{{asset(''.elixir('js/default.js'))}}" async></script>
@endif
<script src="{{asset('public'.elixir('js/jquery.mask.min.js'))}}"></script>

 <script type="text/javascript">
$('#datanascimento').mask('00/00/0000', {reverse: true});

$('#estado_id').on('change',function(){
var stateID = $(this).val();    
if(stateID){
    $.ajax({
       type:"GET",
       url:"{{url('get-city-list')}}?state_id="+stateID,
       success:function(res){               
        if(res){
            $("#filter-inline-city").empty();
            $.each(res,function(key,value){
                $("#filter-inline-city").append('<option value="'+key+'">'+value+'</option>');
            });
       
        }else{
           $("#filter-inline-city").empty();
        }
       }
    });
}else{
    $("#filter-inline-city").empty();
}
    
});
</script>

</body>

</html>
