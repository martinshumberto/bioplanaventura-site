@extends('frontend.layout._header')
@php
use App\Model\Fotos;
@endphp
@section('content')
@include('frontend/includes/header')
<link rel="stylesheet" href="{{asset('public/'.elixir('css/style.css'))}}"> 

<div class="page-hero" style="background-image: url({!!img_src('greece_lan.jpg') !!});">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="page-hero-content">
								<h1 class="page-hero-title">Equipe</h1>
								<p class="page-hero-subtitle">Esse time é o grande responsável pelo nosso sucesso.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<main class="main" style="padding-top: 10px;">
				<div class="container">
					<div class="row">
					
						@foreach ($equipes as $equipe)
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
								@php
									$foto = Fotos::where('chave',$equipe->chave)->pluck('file')->first();                  
								@endphp
								<img src="{!! img_src($foto, array("dynamic"=>true))!!}">
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										{!! $equipe->title !!}
									</h3>
									<h4 class="card-subtitle align-center">{!! $equipe->subtitle !!}</h4>
									<p class="card-body align-center">
									{!! $equipe->text !!}
									</p>
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>
            </main>
            
@include('frontend/includes/footer')
@endsection