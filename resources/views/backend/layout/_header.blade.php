<!DOCTYPE html>
<html lang="pt-BR" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!--  Start meta tags -->
    <title>{{Config::get('app.appTitle')}}</title>
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
    <meta itemprop="name" content="{{Config::get('app.appTitle')}}">
    <meta itemprop="description" content="{{Config::get('app.appDescription')}}">
    <meta itemprop="image" content="{{Config::get('app.appImage')}}">

    <!-- Twitter Card data -->
    <meta name="twitter:site" content="{{url("/")}}">
    <meta name="twitter:title" content="{{Config::get('app.appTitle')}}">
    <meta name="twitter:description" content="{{Config::get('app.appDescription')}}">
    <meta name="twitter:image:src" content="{{Config::get('app.appImage')}}">

    <!-- Open Graph data -->
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{Config::get('app.appTitle')}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:image" content="{{Config::get('app.appImage')}}" />
    <meta property="og:description" content="{{Config::get('app.appDescription')}}" />
    <meta property="og:site_name" content="{{url("/")}}" />
    <!-- End meta tags -->

    <script src="{{asset(''.elixir('js/backend/backend-app.js'))}}"></script>
    @if (file_exists("public/js/backend/".Route::currentRouteName()."-libs.js"))
    <script src="{{asset(''.elixir('js/backend/'. Route::currentRouteName() .'-libs.js'))}}" async></script>
    @endif

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,700&amp;subset=cyrillic,hebrew,latin-ext"
        rel="stylesheet">


    <!--Start loading style -->
    @if (file_exists("public/css/backend/".Route::currentRouteName().".css"))
    <link rel="stylesheet" href="{{asset(''.elixir('css/backend/'.Route::currentRouteName().'.css'))}}">
    @else
    <link rel="stylesheet" href="{{asset(''.elixir('css/backend/default.css'))}}">
    @endif
    <!-- DATEPICKER / MASKs-->
    <link rel="stylesheet" href="{{asset(''.elixir('css/datepicker.min.css'))}}">
    <script src="{{asset(''.elixir('js/datepicker.min.js'))}}"></script>
    <script src="{{asset(''.elixir('js/i18n/datepicker.pt-BR.js'))}}"></script>
    <script src="{{asset(''.elixir('js/jquery.mask.min.js'))}}"></script>
 
    <!-- Start loading the favicon-->
    <link rel="shortcut icon" href="{{asset('')}}/favicon.png" type="image/png">
</head>

<body>


    @include('backend.includes.aside')
    @include('backend.includes.top-bar')

    <div class="content-wrapper">
        @yield('content')
    </div>


    @include('backend.layout._footer')
