@extends('frontend.layout._header')

@section('content')
@include('frontend/includes/header')

@php
use App\Model\Fotos;
@endphp
<div class="overlay">
</div>
<div class="page-hero" style="background-image: url({!! img_src('pages/calendar.png') !!});">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-hero-content">
          <h2 class="page-hero-title">Calendario</h2>
          <p class="page-hero-subtitle">Veja o nosso calendário e escolha aquele que melhor se adeque a sua agenda!</p>
        </div>
      </div>
    </div>
  </div>
</div>
<main class="main">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-12">
        <div class="row">
         
         
      
          <div class="col-lg-12 col-sm-6 col-12">

          
          <link rel="stylesheet" href="{{elixir('css/fullcalendar.min.css')}}">

<div id='calendar'></div>




          </div>
      
        </div>

      </div>

      <div class="col-lg-3 col-12">
        @include('frontend/includes/filtro-blog')
      </div>
    </div>
  </div>
</main>

@include('frontend/includes/footer')
<script src="{{elixir('js/jquery-1.11.3.min.js')}}"></script>
<script src="{{elixir('js/moment.min.js')}}"></script>
<script src="{{elixir('js/fullcalendar.min.js')}}"></script>
<script src="{{elixir('js/main.min.js')}}"></script>
<script src="{{elixir('js/locales-all.js')}}"></script>


<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            locale: 'pt-br',
            events : [
                {
                    title : 'teste',
                    start : '2019-06-04',
                    url : 'www.google.com.br'
                },
            ]
        })
    });
</script>

@endsection
