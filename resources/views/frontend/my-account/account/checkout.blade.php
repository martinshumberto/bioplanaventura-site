@extends('frontend.layout._header')
@php
use App\Model\Fotos;
use App\Model\States;
@endphp
@section('content')
@include('frontend/includes/header')

<div class="page-hero" style="background-image: url({!! img_src('pages/user.png') !!});"></div>

<main class="main main-elevated">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-12">
				<div class="content-elevated section-margin">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="page-hero-content">
								<h2 class="page-hero-title"><b>Checkout</b></h2>
								<p class="page-hero-subtitle">Revise seu pedido e selecione um método de pagamento da sua preferência</p>
							</div>

							<div class="container">
								<div class="row py-5">
									<div class="col-md-4 order-md-2 mb-4">
										<h4 class="d-flex justify-content-between align-items-center mb-3">
											<span>Carrinho</span>
											<span class="badge badge-secondary badge-pill">
												1
											</span>
										</h4>
										<ul class="list-group mb-3">
											<li class="list-group-item d-flex justify-content-between lh-condensed">
												<div>
													<h5 class="my-0">{{ str_limit($dados_evento->title, $limit = 25, $end = '...') }}</h5>
													<h6 class="my-0">{!! $dados_evento->subtitle !!}</h6>
													<small class="text-muted">Qnt.: {!! session('carrinho')['quantidade_inteira'] !!}</small> •
													<small class="text-muted">Data do evento: {!! date('d/m/Y', strtotime(session('carrinho')['data'])) !!}</small>
												</div>
												<span class="text-muted">R$ {!! number_format(session('carrinho')['valor_inteira'], 2) !!}</span>
											</li>
					                            <!--
					                            <li class="list-group-item d-flex justify-content-between bg-light">
					                                <div class="text-success">
					                                    <h6 class="my-0">Promo code</h6>
					                                    <small>Código de exemplo</small>
					                                </div>
					                                <span class="text-success">-$5</span>
					                            </li>
					                        -->
					                        <li class="list-group-item d-flex justify-content-between">
					                        	<span>Total (R$)</span>
					                        	<strong>R$ {!! number_format(session('carrinho')['valor_inteira'], 2) !!}</strong>
					                        </li>
					                    </ul>
					                    <h4 class="d-flex justify-content-between align-items-center mb-3">
					                    	<span>Cupom de desconto</span>
					                    </h4>
					                    <form class="card p-2 mb-4">
					                    	<div class="input-group">
					                    		<input type="text" class="form-control" placeholder="Código do cupom">
					                    		<div class="input-group-append" style="height: 45px;">
					                    			<button type="submit" class="btn btn-secondary">Aplicar</button>
					                    		</div>
					                    	</div>
					                    </form>
					                    <h4 class="d-flex justify-content-between align-items-center mb-3">
					                    	<span>Métodos de pagamento</span>
					                    </h4>
					                    <div>
					                    	{{ Form::open(array('route' => 'frontend-confirma-compra', 'method'=>'post', 'class'=>'form-boxed', 'id' => 'form-method'))  }}
					                    	<div class="panel panel-default" id="collapse-methods">
					                    		<div class="panel-body">
					                    			<span class="payment-errors"></span>
					                    			<h6>Com que método você gostaria de pagar hoje?</h6>
					                    			<a class="btn btn-success btn-sm" data-toggle="collapse" data-target="#cartao-de-credito" aria-expanded="true" data-parent="#collapse-methods" data-toggle="true" href="">CARTÃO DE CRÉDITO</a>
					                    			<a class="btn btn-success btn-sm" data-toggle="collapse" data-target="#boleto-bancario" aria-expanded="false" data-parent="#collapse-methods" data-toggle="true" href="">BOLETO</a>

					                    			<input type="hidden" id="payment_token" name="payment_token" value="">

					                    			<div id="cartao-de-credito" class="collapse in mt-3 mb-3">
					                    				<div class="row">
					                    					<div class="col-md-12 mb-3">
					                    						<label for="card-name">Nome*:</label>
					                    						<input type="text" class="input-sm required" stripe-data="name" id="card-name" name="card-name" placeholder="Nome impresso no cartão">
					                    					</div>
					                    				</div>
					                    				<div class="row">
					                    					<div class="col-md-12 mb-3">
					                    						<label for="card-number">Número do cartão*:</label>
					                    						<input type="text" class="input-sm" stripe-data="number" id="card-number" name="card-number" placeholder="Número do cartão de crédito">
					                    					</div>
					                    				</div>
					                    				<div class="row">
					                    					<div class="col-md-12 mb-3">
					                    						<label for="card-brand">Bandeira do cartão*:</label>
					                    						<select class="input-sm" data-stripe="brand" id="card-brand" name="card-brand">
					                    							<option selected disabled>Bandeira</option>
					                    							<option value="visa">Visa</option>
					                    							<option value="mastercard">MasterCard</option>
					                    							<option value="diners">Diners</option>
					                    							<option value="amex">AmercianExpress</option>
					                    							<option value="elo">Elo</option>
					                    							<option value="hipercard">Hipercard</option>
					                    						</select>
					                    					</div>
					                    				</div>
					                    				<div class="row">
					                    					<div class="col-md-8 mb-3">
					                    						<label for="exp">Data de expiração*:</label>
					                    						<div class="row">
					                    							<div class="col-md-6">
					                    								<select class="input-sm" data-stripe="exp-month" id="card-exp-month" name="card-exp-month">
					                    									<option selected disabled>Mês</option>
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
					                    							<div class="col-md-6">
					                    								<select class="input-sm" data-stripe="exp-year" name="ard-exp-year" id="card-exp-year">
					                    									<option selected disabled>Ano</option>
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
					                    					<div class="col-md-4 mb-3">
					                    						<label for="card-cvc">Código CVV*:</label>
					                    						<input type="text" class="input-sm" stripe-data="cvv" id="card-cvv" name="card-cvv" placeholder="Código">
					                    					</div>
								                                <!--
								                                <div class="row">
									                                <div class="col-md-12 mb-3">
									                                    <label for="installments">Número de parcelas*:</label>
																		<input type="text" class="input-sm" stripe-data="installments" id="installments" name="installments" placeholder="Nome impresso no cartão">
									                                </div>
									                            </div>
									                        -->
									                    </div>

									                </div>

									                <div id="boleto-bancario" class="collapse mt-3 mb-3">
									                	<p>
									                		O boleto bancário poderá ser pago em qualquer banco, lotéricas ou conveniadas, até a data do seu vencimento.
									                		<br>
									                		Ao clicar em Realizar Pagamento você poderá baixar o PDF do boleto ou fazer sua impressão.
									                	</p>
									                </div>

									            </div>
									        </div>

									        <hr class="mb-4">
									        <input class="btn btn-primary btn-lg btn-block mb-4" type="submit" value="FINALIZAR COMPRA" />
									        <small>
									        	Ao enviar este pedido, você concorda com nosso contrato de faturamento universal e <a href="/legal/terms/">termos de serviço</a>. Se você tiver alguma dúvida sobre nossos produtos ou serviços, entre em contato conosco antes de fazer o pedido.
									        </small>
									        {{ Form::close() }}
									    </div>
									</div>
									<div class="col-md-8 order-md-1">
										<h4 class="mb-3">Dados para cobrança</h4>
										<form class="needs-validation" novalidate>
											<div class="row">
												<div class="col-md-6 mb-3">
													<label for="name">Nome*:</label>
													<input type="text" value="{!! $dadosuser->name !!}" name="name" placeholder="Nome" required>
												</div>
												<div class="col-md-6 mb-3">
													<label for="lastname">Sobrenome*:</label>
													<input type="text" value="{!! $dadosuser->last_name !!}" name="last_name" placeholder="Sobrenome">
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-3">
													<label for="cpf">CPF*:</label>
													<input type="text" value="{!! $dadosuser->cpf !!}" class="cpf" name="cpf" placeholder="000.000.000-00">
												</div>
												<div class="col-md-6 mb-3">
													<label for="email">E-mail*:</label>
													<input type="text" value="{!! $dadosuser->email !!}" name="email" placeholder="E-mail">
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-3">
													<label for="birth">Data de nascimento*:</label>
													<input type="text" value="{!! date('d/m/Y', strtotime($dadosuser->birthday)) !!}" class="birth" name="birthday" placeholder="00/00/0000">
												</div>
												<div class="col-md-6 mb-3">
													<label for="sex">Sexo*:</label>
													{!!Form::select('sexes_id', ['1' => 'Masculino', '2' => 'Feminino'], $dadosuser->sexes_id, [ 'class' => 'form-control mb-10','class' => 'chosen-select']) !!}
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-3">
													<label for="country">País*:</label>
													<select name="countries_id" class="chosen-select" data-enable-search="false">
														<option value="" disabled>Selecione</option>
														<option value="1" selected disabled>Brasil</option>
													</select>
												</div>
												<div class="col-md-6 mb-3">
													<label for="cep">CEP*:</label>
													<input type="text" value="{!! $dadosuser->zip_code !!}" class="zip_code" name="zip_code" placeholder="00.000-000">
												</div>
											</div>

											<div class="row">
												<div class="col-md-12 mb-3">
													<label for="address">Endereço*:</label>
													<input type="text" value="{!! $dadosuser->address !!}" name="address" placeholder="">
												</div>
											</div>

											<div class="row">
												<div class="col-md-3 mb-3">
													<label for="number">Número*:</label>
													<input type="text" value="{!! $dadosuser->number !!}" name="number" placeholder="">
												</div>
												<div class="col-md-9 mb-3">
													<label for="complement">Complemento:</label>
													<input type="text" value="{!! $dadosuser->address_complement !!}" name="address_complement" placeholder="">
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-3">
													<label for="neighoarhood">Bairro*:</label>
													<input type="text" value="{!! $dadosuser->district !!}" name="district" placeholder="">
												</div>
												<div class="col-md-6 mb-3">
													<label for="state">Estado*:</label>
													{!!Form::select('estado_id', States::pluck('name', 'states_id'), $dadosuser->states_id, [ 'class' => 'chosen-select states_id', 'id'=>'estado_id']) !!}
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-3">
													<label for="city">Cidade*:</label>
													{!!Form::select('cities_id', [], null, [ 'class' => 'form-control mb-10 filter-city', 'id'=>'filter-city']) !!}
												</div>
												<div class="col-md-6 mb-3">
													<label for="country">País*:</label>
													<select name="countries_id" class="chosen-select" data-enable-search="false">
														<option value="" disabled>Selecione</option>
														<option value="1" selected disabled>Brasil</option>
													</select>
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-3">
													<label for="cel">Celular*:</label>
													<input type="text" value="{!! $dadosuser->cellphone !!}" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" class="phone" name="cellphone" placeholder="(00) 00000-0000">
												</div>
												<div class="col-md-6 mb-3">
													<label for="emergency">Celular de emergência*:</label>
													<input type="text" value="{!! $dadosuser->cellphone_emergency !!}" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" class="phone" name="cellphone_emergency" placeholder="(00) 00000-0000">
												</div>
											</div>

											<div class="row">
												<div class="col-md-6 mb-3">
													<label for="team">Equipe:</label>
													<input type="text" name="team" placeholder="">
												</div>
												<div class="col-md-6 mb-3">
													<label for="emergency">Apelido:</label>
													<input type="text" name="emergency" placeholder="">
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>


@include('frontend/includes/footer')
@endsection
