@extends('frontend.layout._header')
@php
use App\Model\Fotos;
@endphp
@section('content')
@include('frontend/includes/header')

<div class="page-hero" style="background-image: url({!! img_src('hero.jpg') !!});"></div>
			<main class="main main-elevated">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-12">
							<div class="content-elevated section-margin">
								<div class="row">
									<div class="col-lg-4 col-md-3 col-12 text-center">
										<div class="entry-thumb">
                                            @php
                                                $foto = Fotos::where('chave',$dadosuser->remember_token)->pluck('file')->first();                  
                                            @endphp
												{!! img($foto) !!}
											<a class="text-center" href="#">
												Alterar foto
											</a>
										</div>
									</div>

									<div class="col-lg-8 col-md-9 col-12">
										<div class="page-hero-content">
											<h2 class="page-hero-title"><b>{!! $dadosuser->name !!}</b></h2>
											<p class="page-hero-subtitle">
                                                @if($dadosuser->status == 1) 
                                                PERFIL: <b>AVENTUREIRO</b>
                                                @else
                                                PERFIL: <b>VISITANTE OU INCOMPLETO</b>
                                                @endif
                                            </p>
										</div>

										<div class="entry-content entry-content-collapsible">
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

										<a href="#" class="btn btn-sm btn-content-expand" data-more-text="Expandir" data-less-text="Ocultar">
											<span class="btn-text">Expandir</span>
											<i class="fas fa-angle-down"></i>
										</a>
										<a href="#" class="btn btn-sm">
											<span class="btn-text">Salvar</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-12 mb-sm">
							<div class="sidebar">
								<aside class="widget widget_ci-contact">
									<h3 class="widget-title">Navegação</h3>

									<ul class="ci-contact-widget-items">
										<li class="ci-contact-widget-item">
											<a href="">
												<i class="fa fa-user"></i>
												Meus Dados
											</a>
										</li>
										<li class="ci-contact-widget-item">
											<a href="">
												<i class="fa fa-history"></i> 
												Meus Pedidos
											</a>
										</li>
									</ul>
								</aside>
							</div>
						</div>
					</div>
				</div>
			
		</main>
	
	</div>

@include('frontend/includes/footer')
@endsection
