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
                <h2 class="page-hero-title"><b>Meus Pedidos</b></h2>
                <p class="page-hero-subtitle">Humberto Martins</p>
              </div>

              <div class="entry-content">
                <span><a href="#"><i class="fa fa-share fa-flip-horizontal fa-flip-vertical"></i></a> Voltar à página
                  "Meus Dados".</span>

                <table class="table-responsive">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Evento</th>
                      <th>Inscrito</th>
                      <th>Método de pagamento</th>
                      <th>Valor</th>
                      <th>Status</th>
                      <th>Data do pedido</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#1</td>
                      <td>Item</td>
                      <td>Item</td>
                      <td>Boleto</td>
                      <td>R$ 0,00</td>
                      <td>Cancelada</td>
                      <td>16/04/2019 às 12h30</td>
                      <td>
                        <div class="filter-form-group">
                          <button type="button" class="btn btn-block">Refazer inscrição</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>#1</td>
                      <td>Item</td>
                      <td>Item</td>
                      <td>Boleto</td>
                      <td>R$ 0,00</td>
                      <td>Cancelada</td>
                      <td>16/04/2019 às 12h30</td>
                      <td>
                        <div class="filter-form-group">
                          <button type="button" class="btn btn-block">Refazer inscrição</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>#1</td>
                      <td>Item</td>
                      <td>Item</td>
                      <td>Boleto</td>
                      <td>R$ 0,00</td>
                      <td>Cancelada</td>
                      <td>16/04/2019 às 12h30</td>
                      <td>
                        <div class="filter-form-group">
                          <button type="button" class="btn btn-block">Refazer inscrição</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>#1</td>
                      <td>Item</td>
                      <td>Item</td>
                      <td>Boleto</td>
                      <td>R$ 0,00</td>
                      <td>Cancelada</td>
                      <td>16/04/2019 às 12h30</td>
                      <td>
                        <div class="filter-form-group">
                          <button type="button" class="btn btn-block">Refazer inscrição</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>
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
