<!DOCTYPE html>
<html lang="pt-BR" itemscope itemtype="http://schema.org/WebPage">

<head>
  <!--  Start meta tags -->
  <title>{{Config::get('app.name')}}</title>
  <meta name="csrf-token" content="{!!csrf_token()!!}" />

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <base href="{{url("/")}}">
  <link rel="canonical" href="{{url()->current()}}" />
  <meta charset="UTF-8">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="{{Config::get('app.appKeywords')}}" />
  <meta name="description" content="{{Config::get('app.appDescription')}}">
  <meta name="robots" content="index,follow,noodp" />
  <meta name="language" content="portuguese" />   

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="{{Config::get('app.name')}}">
  <meta itemprop="description" content="{{Config::get('app.appDescription')}}">
  <meta itemprop="image" content="{{Config::get('app.appImage')}}">

  <!-- Twitter Card data -->
  <meta name="twitter:site" content="{{url("/")}}">
  <meta name="twitter:title" content="{{Config::get('app.name')}}">
  <meta name="twitter:description" content="{{Config::get('app.appDescription')}}">
  <meta name="twitter:image:src" content="{{Config::get('app.appImage')}}">

  <!-- Open Graph data -->
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="{{Config::get('app.name')}}" />
  <meta property="og:url" content="{{url()->current()}}" />
  <meta property="og:image" content="{{Config::get('app.appImage')}}" />
  <meta property="og:description" content="{{Config::get('app.appDescription')}}" />
  <meta property="og:site_name" content="{{url("/")}}" />
  <!-- End meta tags -->


  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,700&amp;subset=cyrillic,hebrew,latin-ext"
    rel="stylesheet">


  <!--Start loading style -->
  @if (file_exists("public/css/frontend/".Route::currentRouteName().".css"))
  <link rel="stylesheet" href="{{asset('public'.elixir('css/frontend/'.Route::currentRouteName().'.css'))}}">
  @else
  <link rel="stylesheet" href="{{asset('public'.elixir('css/default.css'))}}">
  @endif

  <link rel="stylesheet" href="{{asset('public'.elixir('css/bootstrap.min.css'))}}">
  <link rel="stylesheet" href="{{asset('public'.elixir('css/carousel.css'))}}">
  <!-- Start loading the favicon-->
  <link rel="shortcut icon" href="{{asset('public/')}}favicon.png" type="image/png">
</head>

<body>

  <div id="page">

    @yield('content')

  </div>

@php 
use App\Model\States;
@endphp
  <!-- Modal's -->
  <div id="area-cliente" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h1>Faça login</h1><br>
      {{ Form::open(array('route' => 'frontend-login', 'class'=>'searchform'))  }}
        <input type="text" name="user" placeholder="Usuário / E-mail">
        <input type="password" name="pass" placeholder="Senha">
        <label>
          <input type="checkbox" id="remember" name="remember" checked> Lembrar-me
        </label>
        <input type="submit" name="login" value="Logar">
      </form>

      <div class="login-help">
        <a href="#registrar" rel="modal">Registrar</a> - <a href="#">Esqueceu a senha?</a>
      </div>
    </div>
  </div>

  <div id="registrar" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h1>Registre-se</h1>
      <h3>Tenha acesso a promoções exclusivas para usuários cadastrados.</h3>
      {{ Form::open(array('route' => 'frontend-registro', 'class'=>'searchform'))  }}
        <input type="text" name="name" placeholder="Nome">
        
        <input type="text" name="email" placeholder="E-mail">
        
        <input type="text" name="birthday" id="datanascimento" placeholder="Data de nascimento">
        
        <div class="filter-form-group" style="margin-top: 7px;">
          <select name="sexes_id" id="filter-inline-sexo" class="chosen-select">
            <option value="" selected disabled>Sexo</option>
            <option value=1>Masculino</option>
            <option value=2>Feminino</option>
          </select>
        </div>
        <div class="filter-form-group">
        {!!Form::select('estado_id', States::pluck('name', 'states_id'), null, [ 'class' => 'chosen-select', 'id'=>'estado_id']) !!}
          
        </div>
        <div class="filter-form-group">
        <select id="filter-inline-city" name="cities_id" class="chosen-select" data-enable-search="true">
            <option value="" selected disabled>Cidade</option>
            <option value="6">Goiânia</option>
            <option value="3">Aparecida de Goiânia</option>
          </select>
        </div>
        <input type="password" name="password" placeholder="Senha" style="margin-top: 0px;">
        <input type="password" name="repassword" placeholder="Confirmar senha">
        <label>
          <input type="checkbox" id="remember" name="remember" checked> Eu declaro que li e concordo com todos os termos
          do <a href="">contrato</a>.
        </label>
        <input type="submit" name="login" value="Cadastrar">
      </form>

      <div class="login-help">
      </div>
    </div>
  </div>

  <div id="mascara"></div>

  @include('frontend.layout._footer')
