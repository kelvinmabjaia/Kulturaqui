<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kulturaqui</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  {{ asset('assets/dashboard/js/jquery-3.4.1.min.js') }}

  <!-- Favicons -->
  <link href="{{ asset('assets/dashboard/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/dashboard/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com') }}" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/dashboard/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/dashboard/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/dashboard/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/dashboard/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/dashboard/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/dashboard/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/dashboard/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/dashboard/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/logo_dark.png') }}"/>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2">
                {{Auth::user()->name}}
            </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::user()->email}}</h6>
              <span>{{Auth::user()->roles->designac}}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Perfil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Conta</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>           

              <form method="POST" action="{{ route('logout') }}">
                @csrf
                
                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>{{ __('Sair') }}</span>
                </a>
              </form>

            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->