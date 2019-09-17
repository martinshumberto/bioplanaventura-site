@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')


@if($dados['method'] =='boleto')

<div class="page-hero" style="background-image: url({!! img_src('pages/user.png') !!});"></div>
<main class="main main-elevated">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-12">
				<div class="content-elevated section-margin">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="page-hero-content">
								<h2 class="page-hero-title"><b>Obrigado {!! $dados['name'] !!}!</b></h2>
								<p class="page-hero-subtitle">Seu pedido de inscrição foi realizado com sucesso.</p>
							</div>

							<div class="container">
								<div class="row">
									<div class="col-md-6 mb-4">
										<h5 class="mb-4">Dados de cobrança</h5>
										<div class="card p-4">
											<span><b>Nome:</b> {!! $dados['name']; $dados['last_name'] !!}</span>
											<span><b>CPF:</b> {!! $dados['cpf'] !!}</span>
											<span><b>Data de nascimento:</b> {!! $dados['birthday'] !!}</span>
											<span><b>E-mail:</b> {!! $dados['email'] !!}</span>
											<span><b>Celular:</b> {!! $dados['cellphone'] !!}</span>
										</div>
									</div>

									<div class="col-md-6 mb-4">
										<h5 class="mb-4">Informações do pedido</h5>
										<div class="card p-4">
											<span><b>ID Evento:</b> {!! $dados['eventos_id'] !!}</span>
											<span><b>Número do pedido:</b> #{!! $dadospagamento['data']['charge_id'] !!}</span>
											<span><b>Vencimento do boleto:</b> {!! date('d/m/Y', strtotime($dadospagamento['data']['expire_at'])) !!}</span>
											<span><b>Status do pagamento:</b> {!! $dadospagamento['data']['status'] !!}</span>
										</div>
									</div>
								</div>

								<div class="row mt-2">
									<div class="col-md-12">
										<h4 class="mb-4">Efetue o pagamento do boleto abaixo:</h4>
										<iframe src="{!! $dadospagamento['data']['pdf']['charge'] !!}" width="100%" height="600"></iframe>
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

@else

<div class="page-hero" style="background-image: url({!! img_src('pages/user.png') !!});"></div>
<main class="main main-elevated">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-12">
				<div class="content-elevated section-margin">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="page-hero-content">
								<h2 class="page-hero-title"><b>Obrigado {!! $dados['name'] !!}!</b></h2>
								<p class="page-hero-subtitle">Seu pedido de inscrição foi realizado com sucesso.</p>
							</div>

							<div class="container">
								<div class="row">
									<div class="col-md-6 mb-4">
										<h5 class="mb-4">Dados de cobrança</h5>
										<div class="card p-4">
											<span><b>Nome:</b> {!! $dados['name']; $dados['last_name'] !!}</span>
											<span><b>CPF:</b> {!! $dados['cpf'] !!}</span>
											<span><b>Data de nascimento:</b> {!! $dados['birthday'] !!}</span>
											<span><b>E-mail:</b> {!! $dados['email'] !!}</span>
											<span><b>Celular:</b> {!! $dados['cellphone'] !!}</span>
										</div>
									</div>

									<div class="col-md-6 mb-4">
										<h5 class="mb-4">Informações do pedido</h5>
										<div class="card p-4">
											<span><b>ID Evento:</b> {!! $dados['eventos_id'] !!}</span>
											<span><b>Número do pedido:</b> #{!! $dadospagamento['data']['charge_id'] !!}</span>
											<span><b>Status do pagamento:</b> {!! $dadospagamento['data']['status'] !!}</span>
										</div>
									</div>
								</div>

								<div class="row mt-5">
									<div class="col-md-12">
										<h3 class="mb-4 text-center">Seu pagamento está sendo processado pela operadora do cartão, você será avisado através do e-mail assim que obtivermos resposta.</h3>
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

@endif


@include('frontend/includes/footer')
@endsection
