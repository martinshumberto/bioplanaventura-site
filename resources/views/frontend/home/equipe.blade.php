@extends('frontend.layout._header')
@php
use App\Model\Fotos;
@endphp
@section('content')
@include('frontend/includes/header')

<div class="page-hero" style="background-image: url(public/images/greece_lan.jpg);">
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
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
									<img alt="Alessandro Abreu" src="images/team/alessandro.png"/>
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										Alessandro Abreu
									</h3>
									<h4 class="card-subtitle align-center">Diretor Geral</h4>
									<p class="card-body align-center">
										Bacharel em Ciências Ambientais pela UFG, Especialista em Recuperação de Áreas Degradas. Gestor de Turismo formado pelo M-Tur. Tem Curso de Competências Mínimas para Condução em Turismo de Aventura e Ecoturismo, com vasta experiência em ciclo expedições, escaladas e Trilhas.
										Atualmente é Coordenador de Manejo, Sinalização e Segurança da Associação do Caminho de Cora Coralina. 

									</p>
								</div>
							</div>
						</div>
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
									<img alt="Alessandro Abreu Lemos" src="images/team/eucalis.png"/>
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										Eucalis José da Silva
									</h3>
									<h4 class="card-subtitle align-center">Instrutor de MTB <br> Mecânico</h4>
									<p class="card-body align-center">
										Experiente em Ciclo Expedições, Atleta de MTB Master – B. Especialista em longas distâncias 24 horas.
									</p>
								</div>
							</div>
						</div>
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
									<img alt="Alessandro Abreu Lemos" src="images/team/gustavo.png"/>
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										Gustavo Mendonça
									</h3>
									<h4 class="card-subtitle align-center">Educação Ambiental <br> Chef de Cozinha</h4>
									<p class="card-body align-center">
										Curso de Panificação de Pães e Massas - SENAC; Técnico em Gestão Ambiental - Faculdade Montes Belos - FMB; Bacharel em Ciências Ambientais - Universidade Federal de Goiás - UFG; Curso de Guia Nacional de Turístico – SENAC -  em andamento.

									</p>
								</div>
							</div>
						</div>
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
									<img alt="Alessandro Abreu Lemos" src="images/team/jhonatan.png"/>
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										Jhonatan Soares
									</h3>
									<h4 class="card-subtitle align-center">Consultor e Guia</h4>
									<p class="card-body align-center">
										Graduado em Turismo. Guia de Turismo nacional e regional Goiás. Experiência na condução de grupos em áreas naturais, logística e marketing.
									</p>
								</div>
							</div>
						</div>
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
									<img alt="Alessandro Abreu Lemos" src="images/team/diego.png"/>
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										Diego Abreu Lemos
									</h3>
									<h4 class="card-subtitle align-center">Diretor de Projetos <br> Apoio Logístico</h4>
									<p class="card-body align-center">
										Formado em Engenharia Ambiental, especialista em Gestão de Resíduos Sólidos e Líquidos. Vai garantir as melhores práticas em meio a natureza.

									</p>
								</div>
							</div>
						</div>
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
									<img alt="Alessandro Abreu Lemos" src="images/team/diegomendonca.png"/>
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										Diego Mendonça
									</h3>
									<h4 class="card-subtitle align-center">Consultor e Guia</h4>
									<p class="card-body align-center">
										Graduado em Turismo, especialista em turismo e meio ambiente, guia de turismo nacional e regional Goiás. Experiência em ciclo expedições, escalada e trilhas criador do Projeto Pedalar é Preciso. Atualmente é Coordenador de parceria inovação e pesquisa da Associação do Caminho de Cora Coralina. 
									</p>
								</div>
							</div>
						</div>
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
									<img alt="Alessandro Abreu Lemos" src="images/team/anacarolina.png"/>
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										Ana Carolina do Couto Andrade
									</h3>
									<h4 class="card-subtitle align-center">Analista de Dados</h4>
									<p class="card-body align-center">
										Graduada em Estatística, Doutoranda USP/UFSCAR em Estatística, tem experiência em amostragem e pesquisas de satisfação.
									</p>
								</div>
							</div>
						</div>
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
									<img alt="Alessandro Abreu Lemos" src="images/team/victor.png"/>
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										Victor Rodrigues
									</h3>
									<h4 class="card-subtitle align-center">Fotógrafo</h4>
									<p class="card-body align-center">
										Montanhista renomado, com fotos publicadas em revistas internacionais, possui experiência em ciclo turismo, escalada e trilhas, dentre os destinos fotografados se destacam o monte Roraima do lado Venezuelano e o Fim do Mundo na Argentina.

									</p>
								</div>
							</div>
						</div>
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
									<img alt="Alessandro Abreu Lemos" src="images/team/matheus.png"/>
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										Matheus Barros
									</h3>
									<h4 class="card-subtitle align-center">Instrutor de Atividades em Altura <br> Instrutor de MTB</h4>
									<p class="card-body align-center">
										Atleta de Slack Line, escalada, além de montanhista conquistador de vários feitos, destaque para o High line no Monte Roraima, acostumado com grandes expedições tem a resistência como principal característica.
									</p>
								</div>
							</div>
						</div>
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
									<img alt="Alessandro Abreu Lemos" src="images/team/gabrielle.png"/>
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										Gabrielle Carvalho
									</h3>
									<h4 class="card-subtitle align-center">Relações Públicas <br> Comercial</h4>
									<p class="card-body align-center">
										Turismóloga, especialista em Turismo de Aventura. Fundou a Fluir Experiências, que tem como foco o planejamento, execução e monitoramento de projetos e atividades ao ar livre. Foi Coordenadora Executiva do Programa Experiências na Natureza, realizando Ciclo Expedições nos Parques de Goiás. Foi coordenadora executiva da implementação do Caminho de Cora Coralina. 
									</p>
								</div>
							</div>
						</div>
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
									<img alt="Alessandro Abreu Lemos" src="images/team/gabrielle.png"/>
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										Joel Soares
									</h3>
									<h4 class="card-subtitle align-center">Instrutor de Atividades em Altura <br> Apoio Logístico</h4>
									<p class="card-body align-center">
										Mais conhecido como o Máquina, Recordista Mundial de Walterline 760 m e Latino Americano de Highline 750 m, Joel é perfeccionista na metodologia de segurança em altura, o que lhe proporcionou viagens internacionais para execução de grandes projetos sem nenhum acidente.
									</p>
								</div>
							</div>
						</div>
						<div class="card col-xl-3 col-md-6 mb-4">
							<div class="card-wrapper">
								<div class="card-img">
									<img alt="Alessandro Abreu Lemos" src="images/team/joel.png"/>
								</div>
								<div class="card-box">
									<h3 class="card-title align-center">
										Joel Soares
									</h3>
									<h4 class="card-subtitle align-center">Instrutor de Atividades em Altura <br> Apoio Logístico</h4>
									<p class="card-body align-center">
										Mais conhecido como o Máquina, Recordista Mundial de Walterline 760m e Latino Americano de Highline 750m, Joel é perfeccionista na metodologia de segurança em altura, o que lhe proporcionou viagens internacionais para execução de grandes projetos sem nenhum acidente.
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
            </main>
            
@include('frontend/includes/footer')
@endsection