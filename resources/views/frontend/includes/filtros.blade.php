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
                  <option value="5">Região Norte</option>
                  <option value="2">Região Nordeste</option>
                  <option value="3">Região Centro-Oeste</option>
                  <option value="4">Região Sudeste</option>
                  <option value="4">Região Sul</option>
                </select>
              </div>

              <div class="filter-form-group">
                <label for="filter-inline-category-1">
                  <i class="fas fa-list-ul"></i>
                  Selecione a categoria
                </label>
                <select id="filter-inline-category-1" class="chosen-select" data-enable-search="true">
                  <option value="">&nbsp;</option>
                  <option value="6">Mountain Bike</option>
                  <option value="3">Corrida</option>
                  <option value="4">Ciclismo</option>
                  <option value="5">Cursos</option>
                  <option value="2">Palestras</option>
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