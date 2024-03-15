@extends('index')

@section('header')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Si Warung Makan | RPL - B03">
  <meta name="author" content="">

  <title>
    Admin | Sinar Surya
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

    <!-- Topbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white topbar h-auto container shadow-sm fixed-top">
		  <div class="">
		    <a class="navbar-brand d-flex mr-auto text-primary" href="{{ route('home') }}">
		      <span class="font-weight-bold mx-1">
		        <img src="https://lh3.googleusercontent.com/pw/ABLVV84r9kRUJbqWa5HYxXGhlT9nkX5whn4L4aq2HaeWkzyPmp25-OAwJX0kPKZ8uSITfOJ8YwREN3uvnOynLMgh-n5lHcnx1HRONU9px0WBOmz0rwH9677m7lOuXIrCSKXdwoi8v0ppYg4tdNFs7uIame-X3WXLctgNtxmWEJnRF-XHp-dJIiIRrhWaUaejmW_oPQTxfmCZ09JmISSjvkU5-m1GU8ZrDzmJEbCUtcHOb-56Ub_n79gadK3FA5H89EkIQC60s_zAC3iXRqDl3rsl-cM9A3D_icm9SbZUiZWKyuGRBv-oi5fY8zjPJqPMfSRmMkX_3K4ysFAs_1--P1-wYdxXAFw4ngA07LxlnZ1LchVLy7sJQeCQuwX7Akq_zmIUKzk4oXWV8h3B4iLmGfecs6U7qSIfNN4CfPHyGlrHjs7fi78OzAQ7wssxvXhHozqd-w6yLEnadOYe6iooBrPAlH-xl7J6OzNsaTYrones1Joq9yttuAGePtOTJx849dnZGmpZyg9HBvoF_f6uNo8FBk6J6ZLdjQ4X4mAlYDgz4JiCFzoL4unOM6p4Vfq-_y2NoqZz9k9oBlgzuGKpe7ca_Gb3oiVkbSvklARuAVut3849-lNi6xq7sR7g4XA6iZpyrurN4pgRqPxbOmEVe2_WWZTgcwoxQIS5wlU-w5FXBh_e-z2ctGi3AgKR-rsqNIpnX2UJ6TsmmgzWUlJn2xsH1X3vDZ0eHaM7kM0HyNzSZf34vTRBH9B8ddT6H8shz7zoH7O1D_pLcKzLCUmWCYdY3_e7WnQ6S-D3Rfc2sOlzr3fowWrX_bPCMnDkAGRYAAfVwgAYSIQPvAeLublg1bNK1GEuB4E81grjlzIFcuz4sSGlMoJJ3Ed5NHlIFKqWS92VB0QyRBx2wUFDGVvlkMnQv-QlgBaSdJl8Q95BNSl9=w150-h38-s-no-gm?authuser=0" alt=""><!-- <i class="fas fa-fire"></i> Sinar Surya -->
		      </span>
		    </a>
		  </div>

		  <div class="topbar-divider d-none d-lg-block"></div>

		  <div class="navbar-text">
		    <a href="{{ route('backend.login') }}" class="font-weight-bold text-info">
          {{ $user->level == 0 ? 'OWNER' : 'STAFF' }}
        </a>

		    <button class="btn btn-link btn-sm d-lg-none rounded-circle" type="button" data-toggle="collapse" data-target="#navToggler1" aria-controls="navToggler1" aria-expanded="false" aria-label="Toggle navigation">
		      <i class="fa fa-bars"></i>
		    </button>
      </div>

		  <div class="collapse navbar-collapse" id="navToggler1">
		    <hr class="d-lg-none m-0">
		    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          @if ($user->level == 0)
            <li class="nav-item p-1 p-lg-0 dropdown">
              <a class="btn btn-link text-decoration-none mr-1 btn-sm dropdown-toggle" href="#" id="menu_about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-sliders-h"></i> Manajemen Data
              </a>
              <div class="dropdown-menu keep-open dropdown-menu-right animated--grow-in shadow-sm ml-2 ml-lg-0" aria-labelledby="menu_about">
                <h6 class="dropdown-header">Manajemen User</h6>
                <a class="dropdown-item" href="{{ route('backend.superadmin.user') }}"><i class="fas fa-users"></i> Data User</a>

                <div class="dropdown-divider"></div>

                <h6 class="dropdown-header">Manajemen Barang</h6>
                <a class="dropdown-item" href="{{ route('backend.superadmin.menu') }}"><i class="fas fa-hamburger"></i> Data Barang</a>
                <a class="dropdown-item" href="{{ route('backend.superadmin.kategori') }}"><i class="fas fa-folder-open"></i> Data Kategori</a>

                <div class="dropdown-divider"></div>

                <h6 class="dropdown-header">Manajemen Pesanan</h6>
                <a class="dropdown-item" href="{{ route('backend.superadmin.status') }}"><i class="fas fa-list-alt"></i> Data Status List</a>
                <a class="dropdown-item" href="{{ route('backend.superadmin.pemesanan') }}"><i class="fas fa-book"></i> Data Pemesanan</a>
                <a class="dropdown-item" href="{{ route('backend.superadmin.detail') }}"><i class="fas fa-book-medical"></i> Data Detail Pemesanan</a>
                <a class="dropdown-item" href="{{ route('backend.superadmin.pembayaran') }}"><i class="fas fa-money-check-alt"></i> Data Pembayaran</a>

                <div class="dropdown-divider"></div>
                
                <h6 class="dropdown-header">Manajemen Pelanggan</h6>
                <a class="dropdown-item" href="{{ route('backend.superadmin.pelanggan') }}"><i class="fas fa-user"></i> Data Pelanggan</a>

                <div class="dropdown-divider"></div>
                
                <h6 class="dropdown-header">Generate Laporan</h6>
                <a class="dropdown-item" href="{{ route('backend.superadmin.laporan') }}"><i class="fas fa-clipboard-list"></i> Laporan</a>
              </div>
            </li>
          @endif
		      <li class="nav-item p-1 p-lg-0">
		        <a href="admin_login.html" class="">
		          <a href="{{ route('backend.logout') }}" class="btn btn-link text-decoration-none mr-1 btn-sm">
		            <i class="fas fa-sign-out-alt"></i> Logout
		          </a>
		        </a>
		      </li>
		    </ul>
		  </div>

		</nav>
    <!-- End of Topbar -->
    
    <div id="place_load" class="container pt-3">
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