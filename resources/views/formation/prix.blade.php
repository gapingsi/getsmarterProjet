@extends('layout.default')

@section('content')

<div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid">
              <h2>Paiement formation</h2>
              <div class="row">
                  <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="card bg-white">
                      <div class="card-body">
                        <div class="card-block pt-2 pb-0">
                          <div class="media">
                            <div class="media-body white text-left">
                              <a href="{{url('prix')}}" class="grey darken-1">Tranch 1</a>
                              <h4 class="font-medium-5 card-title mb-0">Prix : 10 000fcfa</h4>
                            </div>
                            <div class="media-right text-right">
                              <i class="icon-cup font-large-1 primary"></i>
                            </div>
                          </div>
                        </div>
                        <div
                          id="Widget-line-chart"
                          class="height-150 lineChartWidget WidgetlineChart mb-2"
                        ></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="card bg-white">
                      <div class="card-body">
                        <div class="card-block pt-2 pb-0">
                          <div class="media">
                            <div class="media-body white text-left">
                              <a href="{{url('prix')}}" class="grey darken-1">Tranch 2</a>
                              <h4 class="font-medium-5 card-title mb-0">Prix : 10 000fcfa</h4>
                            </div>
                            <div class="media-right text-right">
                              <i class="icon-cup font-large-1 primary"></i>
                            </div>
                          </div>
                        </div>
                        <div
                          id="Widget-line-chart2"
                          class="height-150 lineChartWidget WidgetlineChart mb-2"
                        ></div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer footer-static footer-light">
          <p class="clearfix text-muted text-center px-2">
            <span
              >Copyright &copy; 2018
              <a
                href="https://1.envato.market/pixinvent_portfolio"
                id="pixinventLink"
                target="_blank"
                class="text-bold-800 primary darken-2"
                >PIXINVENT </a
              >, All rights reserved.
            </span>
          </p>
        </footer>
      </div>

@endsection