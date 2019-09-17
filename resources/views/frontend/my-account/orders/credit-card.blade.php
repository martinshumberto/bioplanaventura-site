<script>
    $gn.ready(function(checkout) {
 
 var callback = function(error, response) {
   if(error) {
     // Trata o erro ocorrido
     console.error(error);
   } else {
     // Trata a resposta
     console.log(response);
   }
 };

 checkout.getPaymentToken({
   brand: 'visa', // bandeira do cartão
   number: '4012001038443335', // número do cartão
   cvv: '123', // código de segurança
   expiration_month: '05', // mês de vencimento
   expiration_year: '2018' // ano de vencimento
 }, callback);

});

$gn.ready(function(checkout){
 
 checkout.getInstallments(50000,'visa', function(error, response){
   if(error) {
     // Trata o erro ocorrido
     console.log(error);
   } else {
     // Insere o parcelamento no site
   }
 });

});


</script>