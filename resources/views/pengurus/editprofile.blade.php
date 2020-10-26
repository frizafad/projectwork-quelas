<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Edit Profile</title>


<!-- Favicon -->
<link href="{{asset('assets/img/brand/favicon.png')}}" rel="icon" type="image/png">

<!-- Fonts -->
<link href="" rel="stylesheet">

<!-- Icons -->
<link href="{{asset('assets/js/plugins/nucleo/css/nucleo.css')}}../" rel="stylesheet">
<link href="{{asset('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

<!--  CSS -->
<link type="text/css" href="{{asset('assets/css/argon-dashboard.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" >

    </head>

    <body>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-2" href="/pengurus">
        <img src="{{asset('assets/img/brand/logo.png')}}" class="navbar-brand-img" alt="..." style="height: 100%;">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{asset('assets/img/theme/team-1-800x800.jpg')}}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="/pengurus/profile" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="/logout" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="/pengurus">
                <img src="{{asset('assets/img/brand/logo.png')}}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="p">
            <a class=" nav-link" href="/pengurus"> <i class="ni ni-tv-2 text-blue"></i> Dashboard
            </a>
          </li>
          <li class="p">
            <a class="nav-link " href="/pengurus/acak">
              <i class="ni ni-bullet-list-67 text-red"></i> Acak Bangku
            </a>
          </li>
          <li class="p">
            <a class="nav-link" href="/pengurus/transaksi">
              <i class="far fa-money-bill-alt text-green"></i> Uang Kas
            </a>
          </li>
          <li class="p" style="background-color: #5e72e4; color: white !important;">
            <a class="nav-link" style="color: white !important; font-weight:" href="/pengurus/profile">
              <i class="ni ni-single-02 text-white"></i> User profile
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="./examples/register.html">
              <i class="ni ni-circle-08 text-pink"></i> Register
            </a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
  <!-- Navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-uppercase d-none text-white d-lg-inline-block" href="/pengurus/profile">User Profil</a>
      </div>
    </nav>
    <!-- End Navbar -->


    <!-- Header -->
    <div class="header" style="min-height: 200px; background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="{{asset('assets/img/theme/team-1-800x800.jpg')}}" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h2>
                    {{Auth::user()->nama}}
                </h2>
                <div class="h4 mt-3 text-uppercase ">
                  <i class="ni business_briefcase-24 mr-2">{{Auth::user()->role}}</i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow mb-5">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <form action="{{ route('postEditp') }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Data Pribadi</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Nama Lengkap</label>
                        <input id="input-address" name="nama" class="form-control form-control-regular" value="{{ Auth::user()->nama }}" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Absen</label>
                        <input id="input-address" class="form-control form-control-regular" name="absen" value="{{ Auth::user()->absen }}" type="text" required>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Nama Kelas</label>
                      <input id="input-address" class="form-control form-control-regular" name="nama_kelas" value="{{ $kelas->nama_kelas }}" type="text" required>
                      </div>
                    </div>
                  </div> --}}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Pengumuman</label>
                      <input id="input-address" class="form-control form-control-regular" name="pengumuman" value="{{ $kelas->pengumuman }}" type="text" required>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Password</label>
                        <input id="input-address" class="form-control form-control-regular" name="password" value="{{ Auth::user()->password }}" type="password">
                      </div>
                    </div>
                  </div> --}}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group pt-3 mb-0">
                        <input class="btn btn-icon btn-3 btn-primary" type="submit" value="Edit Profile">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Core -->
<script src="{{asset('assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!--  JS -->
<script src="{{asset('assets/js/argon-dashboard.min.js')}}"></script>

    </body>

</html>
