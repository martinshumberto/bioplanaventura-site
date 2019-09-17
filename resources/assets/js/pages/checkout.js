  $(function() {


  	$('#card-brand').on('change', function() {

  		$.blockUI({ message: 'Aguarde, estamos comunicando com o gateway de pagamento.</h1>', css: {padding: '20px'} });

  		$.ajax({
  			type: 'post',
  			url: '/installments',
  			dataType: 'json',
  			data: {
  				brand: $('#card-brand').val(),
  			},
  			success: function(response){
  				console.log(response);

  				if(response.data.installments){
  					$("#card-installments").empty();
  					$.each(response.data.installments,function(key, value){
  						$("#card-installments").append('<option value="'+value.installment+'">'+value.installment+' (R$ '+value.currency+') </option>');
  					});

  				}else{
  					$("#card-installments").empty();
  				}
  				$.unblockUI();
  			},
  			error: function(jqXHR, textStatus, errorThrown) {
  				console.log(JSON.stringify(jqXHR));
  				console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
  				$.unblockUI();
  			},
  			beforeSend: function() {
  			}
  		});
  	});


  	$("#form-method").validate({
  		rules: {
  			phone: {
  				required: true,
  				minlength: 8,
  				maxlength: 15,
  				number: true
  			}
  		},
  		errorPlacement: function(error, element) {
  			$( element )
  			.closest( "form" )
  			.find( "label[for='" + element.attr( "id" ) + "']" )
  			.append( error );
  		},
  		errorElement: "span",
  		submitHandler: function(form) {

  			var metodo = $('.method:checked').val();

			console.log(metodo);

  			if (metodo == "boleto"){

  				form.submit();

  			} else {

  				$.blockUI({ message: 'Aguarde, estamos finalizando sua compra.</h1>', css: {padding: '20px'} });

  				var s=document.createElement('script');s.type='text/javascript';var v=parseInt(Math.random()*1000000);s.src='https://sandbox.gerencianet.com.br/v1/cdn/988b077145388de377f4ecfd3d0ad74f/'+v;s.async=false;s.id='988b077145388de377f4ecfd3d0ad74f';if(!document.getElementById('988b077145388de377f4ecfd3d0ad74f')){document.getElementsByTagName('head')[0].appendChild(s);};$gn={validForm:true,processed:false,done:{},ready:function(fn){$gn.done=fn;}};

  				$gn.ready(function(checkout) {
  					var callback = function(error, response) {
  						if(error) {

  							alert("Houve algum problema. O pagamento não foi realizado, tente novamente.");
  							console.error(error);
  							$.unblockUI();
  						} else {
  							$("#payment_token").val(response['data']['payment_token']);
  							$("#card-number").val(response['data']['card_mask']);

  							console.log(response);
  							$.unblockUI();
  							form.submit();
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
  			}
  		}
  	});
  });