@extends('frontend.layout._header')
@php
use App\Model\Fotos;
@endphp
@section('content')
@include('frontend/includes/header')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    .tab {overflow: hidden; border: 1px solid #ccc; 
background-color: #f1f1f1;}

.tabcontent {display: none; padding: 6px 12px; border: 1px solid #ccc;
    border-top: none;}
    
.tab button {background-color: inherit; float: left; border: none;
    outline: none; cursor: pointer; padding: 14px 16px; 
    transition: 0.3s;}
    
.tab button:hover {background-color: #ddd;}

.tab .active {background-color: #ccc;}

.tabcontent {display: none; padding: 6px 12px;

border: 1px solid #ccc; border-top: none;}

table {font-family: arial, sans-serif; border-collapse: collapse;
    width: 100%;}

td, th {border: 1px solid #dddddd; padding: 8px; 
    text-align: center;}

/*Change color to gray*/
tr:nth-child(even) {
    background-color: #dddddd;}

.actived a{color:green}
.actived a:hover{ font-weight: bold}

.deactivated a{color:red}
.deactivated a:hover{ font-weight: bold}

.available {color:green; }
.disable{ color: red; font-weight: bold}
.intraining{color: blue; font-weight: bold}
.vacation{ font-weight: bold}
</style>
<script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";}
        
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");}

document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";}
</script>
<!------ Include the above in your HEAD tag ---------->
<div class="page-hero" style="background-image: url({!! img_src('pages/user.png') !!});"></div>
			<main class="main main-elevated">



            <div class='row' style='padding-top:25px; padding-bottom:25px;'>
        <div class='col-md-12'>
            <div id='mainContentWrapper'>
                <div class="col-md-8 col-md-offset-2">
                    <h2 style="text-align: center;">
                        Revise seu pedido e escolha o tipo de pagamento
                    </h2>
                    <hr/>
                    <div class="shopping_cart">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                Seu Pedido</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="items">
                                                <div class="col-md-9">
                                                    <table class="table table-striped">
                                                        <tr>
                                                            <td colspan="2">
                                                                <a class="btn btn-warning btn-sm pull-right"
                                                                   href="http://www.startajobboard.com/"
                                                                   title="Remove Item">X</a>
                                                                <b>
                                                                {!! $dados_evento->subtitle !!}</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <ul>
                                                                    <li>Quantidade: {!! session('carrinho')['quantidade_inteira'] !!}</li>
                                                                    <li>Data Evento: {!! session('carrinho')['data'] !!}</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>R$ {!! number_format(session('carrinho')['valor_inteira'], 2) !!}</b>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-3">
                                                    <div style="text-align: center;">
                                                        <h3>Valor Total</h3>
                                                        <h3><span style="color:green;">R$ {!! number_format(session('carrinho')['valor_inteira'], 2) !!}</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div style="text-align: center; width:100%;">
                                        <a style="width:100%;" href="#"  class=" btn btn-success">
                                            Informações de Pagamento</a></div>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            Informçaões de endereço e contato
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <b>Ajude-nos a manter sua conta segura e protegida. Confirme seu faturamento</b>
                                        <br/><br/>
                                       
                                        <div class="entry-content">
											<div class="row">
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="name">Nome*:</label>
														<input type="text" value="{!! $dadosuser->name !!}" name="name" placeholder="Nome">
													</div>
												</div>
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="lastname">Sobrenome*:</label>
														<input type="text" value="{!! $dadosuser->last_name !!}" name="last_name" placeholder="Sobrenome">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="cpf">CPF*:</label>
														<input type="text" value="{!! $dadosuser->cpf !!}" name="cpf" placeholder="000.000.000-00">
													</div>
												</div>
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="email">E-mail*:</label>
														<input type="text" value="{!! $dadosuser->email !!}" name="email" placeholder="E-mail">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="birth">Data de nascimento*:</label>
														<input type="text" value="{!! $dadosuser->birthday !!}" name="birthday" placeholder="00/00/0000">
													</div>
												</div>
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="sex">Sexo*:</label>
														<select class="chosen-select" data-enable-search="false">
															<option value="" selected disabled>Selecione</option>
															<option value="1">Masculino</option>
															<option value="2">Feminino</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="cep">CEP*:</label>
														<input type="text" value="{!! $dadosuser->zip_code !!}" name="zip_code" placeholder="00.000-000">
													</div>
												</div>
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="address">Endereço*:</label>
														<input type="text" value="{!! $dadosuser->address !!}" name="address" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="number">Número*:</label>
														<input type="text" value="{!! $dadosuser->number !!}" name="number" placeholder="">
													</div>
												</div>
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="complement">Complemento:</label>
														<input type="text" value="{!! $dadosuser->address_complement !!}" name="address_complement" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="neighoarhood">Bairro*:</label>
														<input type="text" value="{!! $dadosuser->district !!}" name="district" placeholder="">
													</div>
												</div>
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="city">Cidade*:</label>
														<input type="text" name="city" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="state">Estado*:</label>
														<select class="chosen-select" data-enable-search="true">
															<option value="" selected disabled>Selecione</option>
															<option value="1">Goiás</option>
															<option value="2">Mato Grosso</option>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="country">País*:</label>
														<select class="chosen-select" data-enable-search="true">
															<option value="" selected disabled>Selecione</option>
															<option value="1">Goiânia</option>
															<option value="2">Aparecida de Goiânia</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="cel">Celular*:</label>
														<input type="text" value="{!! $dadosuser->cellphone !!}" name="cellphone" placeholder="(00) 00000-0000">
													</div>
												</div>
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="emergency">Celular de emergência*:</label>
														<input type="text" value="{!! $dadosuser->cellphone_emergency !!}" name="cellphone_emergency" placeholder="(00) 00000-0000">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="cel">Equipe:</label>
														<input type="text" name="cel" placeholder="">
													</div>
												</div>
												<div class="col-lg-6 col-12">
													<div class="form-row">
														<label for="emergency">Apelido:</label>
														<input type="text" name="emergency" placeholder="">
													</div>
												</div>
											</div>
										</div>



                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                            {{ Form::open(array('route' => 'frontend-confirma-compra', 'method'=>'post', 'class'=>'form-boxed'))  }}
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            <b>Informação do Pagamento</b>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <span class='payment-errors'></span>
                                        <legend>What method would you like to pay with today?</legend>

                                        <div class="tab">
  <a class="btn btn-success btn-lg" onclick="openCity(event, 'Servers')">CARTÃO DE CRÉDITO</a>
  <a class="btn btn-success btn-lg" onclick="openCity(event, 'Fruits')">BOLETO</a>
</div>
<div id="Servers" class="tabcontent">
<fieldset>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="card-holder-name">Nome no Cartão</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" stripe-data="name"
                                                           id="name-on-card" name="name-on-card" placeholder="Card Holder's Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="card-number">Número do Cartão</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" stripe-data="number"
                                                           id="card-number" name="card-number" placeholder="Debit/Credit Card Number">
                                                    <br/>
                                                    <div><img class="pull-right"
                                                              src="https://s3.amazonaws.com/hiresnetwork/imgs/cc.png"
                                                              style="max-width: 250px; padding-bottom: 20px;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label" for="expiry-month">Data de Expiração</label>
                                                    <div class="col-sm-9">
                                                        <div class="row">
                                                            <div class="col-xs-3">
                                                                <select class="form-control col-sm-2"
                                                                        data-stripe="exp-month" id="card-exp-month" name="card-exp-month"
                                                                        style="margin-left:5px;">
                                                                    <option>Month</option>
                                                                    <option value="01">Jan (01)</option>
                                                                    <option value="02">Fev (02)</option>
                                                                    <option value="03">Mar (03)</option>
                                                                    <option value="04">Abr (04)</option>
                                                                    <option value="05">Mai (05)</option>
                                                                    <option value="06">Junho (06)</option>
                                                                    <option value="07">Julho (07)</option>
                                                                    <option value="08">Agosto (08)</option>
                                                                    <option value="09">Set (09)</option>
                                                                    <option value="10">Out (10)</option>
                                                                    <option value="11">Nov (11)</option>
                                                                    <option value="12">Dez (12)</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <select class="form-control" data-stripe="exp-year" name="ard-exp-year"
                                                                        id="card-exp-year">
                                                                    <option value="2019">2019</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label" for="cvv">Cód CVC</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" stripe-data="cvc"
                                                               id="card-cvc" name="card-cvc" placeholder="Security Code">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9">
                                                    </div>
                                                </div>
                                        </fieldset>
</div>

<div id="Fruits" class="tabcontent">
    <h4>O boleto bancário poderá ser pago em qualquer banco, lotéricas ou conveniadas, até a data do seu vencimento.</h4>
    <h5>Ao clicar em Realizar Pagamento você poderá baixar o PDF do boleto ou fazer sua impressão.</h5>
</div>

</div>



                                        <button type="submit" class="btn btn-success btn-lg" style="width:100%;">Finalziar Compra
                                        </button>
                                        <br/>
                                        <div style="text-align: left;"><br/>
                                        Ao enviar este pedido, você concorda com nosso contrato de faturamento universal e <a href="/legal/terms/">termos de serviço</a>. Se você tiver alguma dúvida sobre nossos produtos ou serviços, entre em contato conosco antes de fazer o pedido.
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
			
		</main>	


@include('frontend/includes/footer')
@endsection
