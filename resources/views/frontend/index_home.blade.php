@extends('index')

@section('header')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Si Warung Makan | RPL - B03">
  <meta name="author" content="">

  <title>
    Sinar Surya
  </title>

  <link rel="icon" href="{{ asset('assets/frontend/img/favicon/sisurlogo-02.png') }}">
@endsection

@section('top-assets')
  <!-- Progress bar loading -->
  <script src="{{ asset('assets/frontend/vendor/pace/pace.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/pace/pace.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">

  <!-- Custom fonts -->
  <link href="{{ asset('assets/frontend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Bootstrap styles -->
  <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- NOTE: ALL SCRIPT MOVE HERE FROM BOTTOM -->
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('assets/frontend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom styles for ALL page-->
  <link href="{{ asset('assets/frontend/css/index.css') }}" rel="stylesheet">

  <!-- Custom styles for THIS page-->
  <link href="{{ asset('assets/frontend/css/pages/main_page.css') }}" rel="stylesheet">
@endsection

@section('main-content')
  <!-- Main Content -->
  <div id="content">

    <div class="fixed-top">
      <!-- Topbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white topbar h-auto container shadow-sm">
        <div class="">
          <a class="navbar-brand d-flex mr-auto text-primary" href="{{ route('home') }}">
            <span class="font-weight-bold mx-1">
             <img src="https://lh3.googleusercontent.com/pw/ABLVV84r9kRUJbqWa5HYxXGhlT9nkX5whn4L4aq2HaeWkzyPmp25-OAwJX0kPKZ8uSITfOJ8YwREN3uvnOynLMgh-n5lHcnx1HRONU9px0WBOmz0rwH9677m7lOuXIrCSKXdwoi8v0ppYg4tdNFs7uIame-X3WXLctgNtxmWEJnRF-XHp-dJIiIRrhWaUaejmW_oPQTxfmCZ09JmISSjvkU5-m1GU8ZrDzmJEbCUtcHOb-56Ub_n79gadK3FA5H89EkIQC60s_zAC3iXRqDl3rsl-cM9A3D_icm9SbZUiZWKyuGRBv-oi5fY8zjPJqPMfSRmMkX_3K4ysFAs_1--P1-wYdxXAFw4ngA07LxlnZ1LchVLy7sJQeCQuwX7Akq_zmIUKzk4oXWV8h3B4iLmGfecs6U7qSIfNN4CfPHyGlrHjs7fi78OzAQ7wssxvXhHozqd-w6yLEnadOYe6iooBrPAlH-xl7J6OzNsaTYrones1Joq9yttuAGePtOTJx849dnZGmpZyg9HBvoF_f6uNo8FBk6J6ZLdjQ4X4mAlYDgz4JiCFzoL4unOM6p4Vfq-_y2NoqZz9k9oBlgzuGKpe7ca_Gb3oiVkbSvklARuAVut3849-lNi6xq7sR7g4XA6iZpyrurN4pgRqPxbOmEVe2_WWZTgcwoxQIS5wlU-w5FXBh_e-z2ctGi3AgKR-rsqNIpnX2UJ6TsmmgzWUlJn2xsH1X3vDZ0eHaM7kM0HyNzSZf34vTRBH9B8ddT6H8shz7zoH7O1D_pLcKzLCUmWCYdY3_e7WnQ6S-D3Rfc2sOlzr3fowWrX_bPCMnDkAGRYAAfVwgAYSIQPvAeLublg1bNK1GEuB4E81grjlzIFcuz4sSGlMoJJ3Ed5NHlIFKqWS92VB0QyRBx2wUFDGVvlkMnQv-QlgBaSdJl8Q95BNSl9=w150-h38-s-no-gm?authuser=0" alt="">
            </span>
          </a>
        </div>

        <div class="topbar-divider d-none d-lg-block"></div>

        <div class="navbar-text">
          @if (Session::get('pelanggans'))
            <a href="{{ route('home.pelanggan') }}" class="btn btn-primary btn-sm text-white">
              <i class="fas fa-home"></i>
              <div class="d-none d-sm-inline">Home</div>
            </a>
          @else
            <a href="{{ route('home.login') }}" class="btn btn-primary btn-sm text-white">
              <i class="fas fa-sign-in-alt"></i>
              <div class="d-none d-sm-inline">Login</div>
            </a>
          @endif

          <button class="btn btn-link btn-sm d-lg-none rounded-circle" type="button" data-toggle="collapse" data-target="#navToggler1" aria-controls="navToggler1" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button></div>

        <div class="collapse navbar-collapse" id="navToggler1">
          <hr class="d-lg-none m-0">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item p-1 p-lg-0">
              <a href="{{ route('home.status') }}" class="">
                <button class="btn btn-link text-decoration-none mr-1 btn-sm" type="button">
                  <i class="fas fa-info-circle"></i> Status Pesanan
                </button>
              </a>
            </li>
            <li class="nav-item p-1 p-lg-0">
              <a href="{{ route('home.register') }}" class="">
                <button class="btn btn-link text-decoration-none mr-1 btn-sm" type="button">
                  <i class="fas fa-address-book"></i> Daftar Pelanggan
                </button>
              </a>
            </li>
            <li class="nav-item p-1 p-lg-0">
              <a href="{{ route('backend.login') }}" class="">
                <button class="btn btn-link text-decoration-none mr-1 btn-sm" type="button">
                  <i class="fas fa-sign-in-alt"></i> Login Admin
                </button>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End of Topbar -->
      <div class="bg-primary text-white rounded-bottom container py-2 px-3 shadow-lg">
        <div class="text-center">
          <a href="{{ route('home.pelanggan.pesanan') }}" class="text-white font-weight-bold">
            <span class="font-weight-bold">Total Pesanan ({{ $count['pesanan'] }}) = @rupiah($count['harga'])</span>
            <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div>

    <div id="place_load" class="container pt-5">
      <div class="row">
          <div class="col-12 col-md-6">
            <div class="ph-item rounded-lg border-0 shadow-0">
              <div class="ph-col-12">
                <div class="ph-row">
                  <div class="ph-col-6 big"></div>
                  <div class="ph-col-6 big empty"></div>
                  <div class="ph-col-4 big"></div>
                  <div class="ph-col-8 big empty"></div>
                </div>
                <div class="ph-picture"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="ph-item rounded-lg border-0 shadow-0">
              <div class="ph-col-12">
                <div class="ph-row d-none d-md-block">
                  <div class="ph-col-12 big empty"></div>
                  <div class="ph-col-12 big empty"></div>
                </div>
                <div class="ph-picture"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row d-none d-md-flex">
          <div class="col-12 col-md-4">
            <div class="ph-item rounded-lg border-0 shadow-0">
              <div class="ph-col-12">
                <div class="ph-picture"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="ph-item rounded-lg border-0 shadow-0">
              <div class="ph-col-12">
                <div class="ph-picture"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="ph-item rounded-lg border-0 shadow-0">
              <div class="ph-col-12">
                <div class="ph-picture"></div>
              </div>
            </div>
          </div>
        </div>
    </div>

    @yield('main-content-page')

  </div>
  <!-- End of Main Content -->
@endsection

@section('bottom-assets')
  <!-- NOTE: BOTTOM SCRIPT -->
  <script src="{{ asset('assets/frontend/js/pages/main_page.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/index.js') }}"></script>
@endsection