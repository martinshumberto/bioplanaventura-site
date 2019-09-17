@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')


<div class="page-hero" style="background-image: url(images/hero.jpg);"></div>
<main class="main main-elevated">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-12">
				<div class="content-elevated section-margin">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="page-hero-content">
								<h2 class="page-hero-title"><b>Obrigado pela compra</b></h2>
								<p class="page-hero-subtitle">Segue abaixo detalhes do seu pedido realizado.</p>
							</div>

							<div class="entry-content">
								<span><a href="{!!route('frontend-home')!!}"><i class="fa fa-share fa-flip-horizontal fa-flip-vertical"></i></a> Voltar à página "Home".</span>
							</div>

							<div class="container">
								<iframe src="{{URL::to('/')}}/your file path here" width="100%" height="600"></iframe>
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
