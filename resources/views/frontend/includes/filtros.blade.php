@php
use App\Model\Configuracoes;
use App\Model\Eventos;
use App\Model\Eventoscategorias;
use App\Model\States;
use Illuminate\Support\Carbon;
$configuracoes = Configuracoes::all() 
@endphp
<div class="widget-section widget_ci-filter-form">
  <div class="filter-form-inline-wrap">
    <form action="/" class="form-boxed filter-form-inline">
      <div class="filter-form-group">
        <label for="filter-inline-destination-1">
          <i class="fas fa-globe-americas"></i>
          Selecione a região
        </label>
        <select id="filter-inline-destination-1" class="chosen-select" data-enable-search="true">
          <option value="">&nbsp;</option>
          @foreach( States::get() as $estados )
          <option value="{!! $estados -> states_id !!}">{!! $estados -> title !!}</option>
          @endforeach
        </select>
      </div>

      <div class="filter-form-group">
        <label for="filter-inline-category-1">
          <i class="fas fa-list-ul"></i>
          Selecione a categoria
        </label>
        <select id="filter-inline-category-1" class="chosen-select" data-enable-search="true">
          <option value="">&nbsp;</option>
          @foreach( Eventoscategorias::get() as $eventocategoria )
          <option value="{!! $eventocategoria -> eventoscategorias_id !!}">{!! $eventocategoria -> title !!}</option>
          @endforeach
        </select>
      </div>

      <div class="filter-form-group filter-form-range-inline">
        <label>
          <i class="fas fa-calendar-alt"></i>
          Selecione o tempo de viagem
        </label>

        <div class="range-slider-wrap">
          <span class="range-slider" data-range-start="1" data-range-end="20" data-start="1" data-end="20"
          data-step="1">
          <input type="number" title="Min" hidden class="range-min" />
          <input type="number" title="Max" hidden class="range-max" />
        </span>

        <span class="range-slider-values">
          <span class="range-slider-value">
            <span class="value"></span> Dia
          </span>

          <span class="range-slider-value">
            <span class="value"></span> Dias
          </span>
        </span>
      </div>
    </div>

    <div class="filter-form-group">
      <button type="submit" class="btn-block">buscar</button>
    </div>
  </form>
</div>
</div>