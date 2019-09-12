<input type="hidden" name="app_url" id="app_url" value="{!!url("/")!!}">

<script src="{{elixir('js/bootstrap.min.js')}}" async></script>

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

  $(function() {

    $('#form-method').submit(function(e) {
      e.preventDefault();

      $.blockUI({ message: 'Aguarde, estamos finalizando sua compra.</h1>', css: {padding: '20px'} });

      var form = this;

      var inputs = document.getElementsByClassName('required');
      var len = inputs.length;
      var valid = true;
      for(var i=0; i < len; i++){
        if (!inputs[i].value){ valid = false; }
      }
      if (!valid){
        /* response valid inputs */
        alert('Por favor preencha todos os campos.');
        return false;
      } else {

        var s=document.createElement('script');s.type='text/javascript';var v=parseInt(Math.random()*1000000);s.src='https://sandbox.gerencianet.com.br/v1/cdn/988b077145388de377f4ecfd3d0ad74f/'+v;s.async=false;s.id='988b077145388de377f4ecfd3d0ad74f';if(!document.getElementById('988b077145388de377f4ecfd3d0ad74f')){document.getElementsByTagName('head')[0].appendChild(s);};$gn={validForm:true,processed:false,done:{},ready:function(fn){$gn.done=fn;}};

        $gn.ready(function(checkout) {

          var callback = function(error, response) {
            if(error) {

              console.error(error);
            } else {
              $("#payment_token").val(response['data']['payment_token']);
              $("#card-number").val(response['data']['card_mask']);
              form.submit();
              $.unblockUI();
              console.log(response);
            }
          };

          checkout.getPaymentToken({
            brand: $('#card-brand').val(),
            number: $('#card-number').val(),
            cvv: $('#card-cvv').val(),
            expiration_month: $('#card-exp-month').val(),
            expiration_year: $('#card-exp-year').val()
          }, callback);
        });
        return true;
      }
    });
  });
</script>

</body>

</html>
