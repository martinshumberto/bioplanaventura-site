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
          <h2 class="page-hero-title">Calendário</h2>
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

<script>

  window.onload = function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
      monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
      dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'],
      dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
      views: {
        month: {
          columnFormat: 'ddd'
        },
        week: {
          columnFormat: 'ddd d'
        },
        day: {
          columnFormat: 'dddd'
        }
      },
      axisFormat: 'H:mm',
      timeFormat: {
          '': 'H:mm',
          agenda: 'H:mm{ - H:mm}'
      },
      buttonText: {
          prev: "Anterior",
          next: "Próximo",
          prevYear: "Anterior",
          nextYear: "Próximo",
          today: "Hoje",
          month: "Mês",
          week: "Semana",
          day: "Dia"
      },
      locale: 'pt-br',
      events : [
      {
        title : 'teste',
        start : '2019-06-04',
        url : 'www.google.com.br'
      },
      ]
    })

  };
</script>

@endsection
