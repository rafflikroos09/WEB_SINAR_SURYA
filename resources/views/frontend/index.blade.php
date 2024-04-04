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

		<!-- Topbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-white topbar h-auto container shadow-sm fixed-top">
		  <div class="">
		    <a class="navbar-brand d-flex mr-auto text-primary" href="{{ route('home') }}">
		      <span class="font-weight-bold mx-1">
           <img src="https://lh3.googleusercontent.com/pw/AP1GczOuM6atMAcgFsmsNq6XQVpFnRdOE6xguUiiYZb2UCBOQd-QQWNt7EtIfHyBJ4IGn411Qw9DUCnwBNcH5rFDPd7K49BA_vfODlaJ5RDZbg9Bjse4vh0mH3nU-6WKbHX60ZKSJhMqkYCxq8-MbSY928Vv_4C5CJPsQrY2XFzCvDPIcpBcaNETjrlfsQR-BrmapAsh_otiTYKW5zyu5dgEeHPy_e4PwDhkKK8sXbOKEjBz-iTlppNqa4RUMMdhKzrGIxdyCE9Cf4G_988NOnCS7hEN9dd65Ihl2UehHbiFF9JUJMpbxfnVgXSBFUOePS4Od2593QpT4dZCp7jLDIyt1kSEOvPGroOf3tdgrHt8PooE-j6dWOQsNg5ql5QpPe_zRQUUyp1HrwIdcLZsvK5N99kVUH49Q4AWmuThLXQ71CYvGLzD097YNjoiKSaTJo4Th--JPtAs4QZN2nrIwuSwHjBR--Hv6sZUaVxVpZW56no8fFLimG3Zi1EY-orboPropZEItsmb0UleFR_F7S3lexPZ88NYcBpzWQkw61EOpWWh59nMSTg8rBXb-SCIvgwcOYDAR6HLu8WX27qv4lwt0AB1HJzSGGU_g029yfWYX8WwkRctpWuTMJA-hEHva_IoUIzwscYrUTHlimFnY-eU78LVCAYOltyDDGr00UVzIJ-JYeqFoTe5I7cbLPQVSmS0JMLLLYkJnQd2yxtwQ3emmPMSKtC1v8PXzI_S46O3B_9wk0JiW_4nbZ9WQp9o9e93cdABk5_m1PrRfuk3pnZ2deIKO1DBwkWXNSI-6C5qGpH1Ve2jvw3FvYQM4aaX_-RcGXkE5UYjfO6-KzrVKBH4BWMLQYmVHYv7vLzlInYMr4J0xpchTNIpNR6vDm1kq3ljpShKZL5yBSMBpCf3tP2VP_S3-mkxe5dVkhUXwGoPOKX7py9SoMXDRd6Nzcoo=w150-h38-s-no-gm?authuser=0" alt="">
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
		    </button>
      </div>

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