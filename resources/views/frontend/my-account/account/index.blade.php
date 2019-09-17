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
		@if (Session::has('alert'))
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="alert alert-{!!session('alert.code')!!}">
					{!! session('alert.text') !!}
				</div>
			</div>
		</div>
		@endif



		{!! Form::open(['method' => 'post', 'autocomplete' => 'off', 'route' => ['frontend-perfil-editar'],
		'files' => true]) !!}
		<div class="row">
			<div class="col-lg-9 col-12">

				<div class="content-elevated section-margin">
					<div class="row">
						<div class="col-lg-4 col-md-3 col-12 text-center">
							<div class="entry-thumb">

								<img src="{!! img_src($dadosuser[0]->team, true) !!}">
								{!! Form::file('file-send', ['class' => 'customFile', 'id' => 'customFile']) !!}
							</div>
						</div>

						<div class="col-lg-8 col-md-9 col-12">
							<div class="page-hero-content">
								<h2 class="page-hero-title"><b>{!! $dadosuser[0]->name !!}</b></h2>
								<p class="page-hero-subtitle">
									@if($dadosuser[0]->status == 1) 
									PERFIL: <b>Aventureiro</b>
									@else
									PERFIL: <b>Visitante</b>
									@endif
								</p>
							</div>
							<input type="hidden" name="users_id" value="{!! $dadosuser[0]->users_id !!}">
							<div class="entry-content entry-content-collapsible">
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="name">Nome*:</label>
										<input type="text" value="{!! $dadosuser[0]->name !!}" id="name" name="name" placeholder="Nome" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="lastname">Sobrenome*:</label>
										<input type="text" value="{!! $dadosuser[0]->last_name !!}" id="lastname" name="last_name" placeholder="Sobrenome" required>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="cpf">CPF*:</label>
										<input type="text" value="{!! $dadosuser[0]->cpf !!}" id="cpf" class="cpf" name="cpf" placeholder="000.000.000-00" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="email">E-mail*:</label>
										<input type="text" value="{!! $dadosuser[0]->email !!}" id="email" name="email" placeholder="E-mail" required>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="birth">Data de nascimento*:</label>
										<input type="text" value="{!! date('d/m/Y', strtotime($dadosuser[0]->birthday)) !!}" id="birth" class="birth" name="birthday" placeholder="00/00/0000" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="sexes_id">Sexo*:</label>
										{!!Form::select('sexes_id', ['1' => 'Masculino', '2' => 'Feminino'], $dadosuser[0]->sexes_id, [ 'class' => 'mb-10 chosen-select', 'id' => 'sexes_id', 'required']) !!}
									</div>
								</div>

								<div class="row">
									<div class="col-md-4 mb-3">
										<label for="zip_code">CEP*:</label>
										<input type="text" value="{!! $dadosuser[0]->zip_code !!}" id="zip_code" class="zip_code" name="zip_code" placeholder="00.000-000" required>
									</div>

									<div class="col-md-8 mb-3">
										<label for="address">Endereço*:</label>
										<input type="text" value="{!! $dadosuser[0]->address !!}" id="address" name="address" placeholder="" required>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4 mb-3">
										<label for="number">Número*:</label>
										<input type="text" value="{!! $dadosuser[0]->number !!}" id="number" name="number" placeholder="" required>
									</div>
									<div class="col-md-8 mb-3">
										<label for="address_complement">Complemento:</label>
										<input type="text" value="{!! $dadosuser[0]->address_complement !!}" id="address_complement" name="address_complement" placeholder="">
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="district">Bairro*:</label>
										<input type="text" value="{!! $dadosuser[0]->district !!}" id="district" name="district" placeholder="" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="estado_id">Estado*:</label>
										{!!Form::select('estado_id', States::pluck('name', 'states_id'), $dadosuser[0]->states_id, [ 'class' => 'chosen-select states_id', 'id'=>'estado_id', 'required', 'placeholder'=>'Selecione seu estado']) !!}
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="filter-city">Cidade*:</label>
										{!!Form::select('cities_id', [], null, [ 'class' => 'form-control mb-10 filter-city', 'id'=>'filter-city', 'required', 'placeholder'=>'Selecione seu estado primeiro']) !!}
									</div>
									<div class="col-md-6 mb-3">
										<label for="countries_id">País*:</label>
										<select id="countries_id" name="countries_id" class="chosen-select" data-enable-search="false">
											<option value="" disabled>Selecione</option>
											<option value="1" selected disabled>Brasil</option>
										</select>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="cellphone">Celular*:</label>
										<input type="text" value="{!! $dadosuser[0]->cellphone !!}" id="cellphone" class="phone" name="cellphone" placeholder="(00) 00000-0000" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="cellphone_emergency">Celular de emergência*:</label>
										<input type="text" value="{!! $dadosuser[0]->cellphone_emergency !!}" id="cellphone_emergency" class="phone" name="cellphone_emergency" placeholder="(00) 00000-0000" required>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="team">Equipe:</label>
										<input type="text" id="team" name="team" placeholder="">
									</div>
									<div class="col-md-6 mb-3">
										<label for="emergency">Apelido:</label>
										<input type="text" id="emergency" name="emergency" placeholder="">
									</div>
								</div>
							</div>

							<a href="#" class="btn btn-sm btn-content-expand" data-more-text="Expandir" data-less-text="Ocultar">
								<span class="btn-text">Expandir</span>
								<i class="fas fa-angle-down"></i>
							</a>
							<button type="submit" class="btn btn-sm"><span class="btn-text">Salvar</span></button>
							
							{!! Form::close() !!}
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
								<a href="{!!route('frontend-historico')!!}">
									<i class="fa fa-user"></i>
									Histórico
								</a>
							</li>
							<li class="ci-contact-widget-item">
								<a href="{!!route('frontend-cart')!!}">
									<i class="fa fa-user"></i>
									Carrinho
								</a>
							</li>
							<li class="ci-contact-widget-item">
								<a href="{!!route('frontend-my-account')!!}">
									<i class="fa fa-history"></i> 
									Meus Dados
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