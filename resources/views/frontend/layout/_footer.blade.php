<input type="hidden" name="app_url" id="app_url" value="{!!url("/")!!}">

@if(file_exists("js/frontend/".Route::currentRouteName()."-libs.js")) 
<script src="{{elixir('js/frontend/'.Route::currentRouteName().'-libs.js')}}"></script>
@else
<script src="{{elixir('js/default-libs.js')}}"></script>
@endif

@if (file_exists("js/frontend/".Route::currentRouteName().".js"))
<script src="{{elixir('js/frontend/'.Route::currentRouteName().'.js')}}" async></script>
@else
<script src="{{elixir('js/default.js')}}" async></script>
@endif

<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$('.birth').mask('00/00/0000', {reverse: true});
	$('.cpf').mask('000.000.000-00');
	$('.zip_code').mask('00.000-000');
	var behavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	options = {
		onKeyPress: function (val, e, field, options) {
			field.mask(behavior.apply({}, arguments), options);
		}
	};
	$('.phone').mask(behavior, options);

	$('#estado_id').on('change',function(){
		var stateID = $(this).val();    
		if(stateID){
			$.ajax({
				type:"GET",
				url:"{{url('get-city-list')}}?state_id="+stateID,
				success:function(res){     
					console.log(res);           
					if(res){
						$("#filter-city").empty();
						$.each(res,function(key,value){
							$("#filter-city").append('<option value="'+key+'">'+value+'</option>');
						});

					}else{
						$("#filter-city").empty();
					}
				}
			});
		}else{
			$("#filter-city").empty();
		}

	});

</script>

</body>

</html>
