<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <!-- Favicon -->
    <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">

    <!-- Fonts -->
    <link href="" rel="stylesheet">

    <!-- Icons -->
    <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!--  CSS -->
    <link type="text/css" href="../assets/css/argon-dashboard.css" rel="stylesheet">
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
      <a class="navbar-brand pt-2" href="/anggota">
        <img src="./assets/img/brand/logo.png" class="navbar-brand-img" alt="..." style="height: 100%;">
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
            <a href="/anggota/profile" class="dropdown-item">
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
              <a href="/anggota">
                <img src="./assets/img/brand/logo.png">
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
            <li class="p" style="background-color: #5e72e4; color: white !important;">
          <a class=" nav-link" style="color: white !important; font-weight: bold;" href="/anggota"> <i class="ni ni-tv-2 text-white"></i>Dashboard
            </a>
          </li>
          <li class="p">
            <a class="nav-link " href="/anggota/acak">
              <i class="ni ni-bullet-list-67 text-red"></i> Acak Bangku
            </a>
          </li>
          <li class="p">
            <a class="nav-link" href="/anggota/transaksi">
              <i class="far fa-money-bill-alt text-green"></i> Uang Kas
            </a>
          </li>
          <li class="p">
            <a class="nav-link " href="/anggota/profile">
              <i class="ni ni-single-02 text-yellow"></i> User profile
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
        <a class="h4 mb-0 text-uppercase d-none d-lg-inline-block" href="/dashboard">        
        <h1>
        {{$kelas->nama_kelas}}        
        </h1>            
        </a>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{asset('assets/img/theme/team-1-800x800.jpg')}}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm font-weight-bold" style="color:#525f7f;">{{Auth::user()->nama}}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="/anggota/profile" class="dropdown-item">
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

      </div>
    </nav>
    <!-- End Navbar -->


    <!-- Header -->
    <div class="header pb-6" style="background-color: #EDF4F8;">
      <div class="container-fluid" style="margin-top: 10px;">
        <div class="header-body" style="background-color:#92A1F3; border-radius:4px; box-shadow: 0 20px 30px -20px rgba(94,114,228, .2);">
          <!-- Card stats -->
            <p class="gretting text-secondary" style="font-weight:600; margin:0 0 8px 0; letter-spacing: 0.02em; line-height: 150%;">Hallo, {{Auth::user()->nama}}</p>
            <p class="des text-secondary" style="margin-top:15px; line-height:150%; letter-spacing: 0.03em;" >{{ $kelas->pengumuman }}</p>
            <img class="ilus-notif" src="./assets/img/brand/notif.png" style="max-height:180px; float:right;">
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7 pb-4" style="background-color: white;">
      <div class="row mt-5">
        <div class="col">
          <div class="card shadow" style="max-height: 370px;">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Anggota Kelas</h3>
                </div>
                
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Absen</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                  </tr>
                </thead>
                <tbody class="text-uppercase">
                @foreach($user2 as $u)
                  <tr>
                    <th scope="row">
                    {{ $u->user->absen}}
                    </th>
                    <td>
                    {{ $u->user->nama}}
                    </td>
                    <td>
                    {{ $u->user->role }}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col">
              <div class="card card-stats mb-4 bg-default">
                <div class="card-body " style="margin: 20px 0;">
                  <div class="row" >
                    <div class="col">
                      @php
                          $totalkas= 0;
                          $totalpemasukan= 0;
                          $totalpengeluaran= 0;
                      @endphp
                      <h4 class="card-title text-uppercase text-muted text-white mb-0">Total Kas</h4>
                      @foreach ( $kas as $k)
                      @php
                        $totalkas +=  $k->transaksi->pemasukan - $k->transaksi->pengeluaran;
                        $totalpemasukan +=  $k->transaksi->pemasukan;
                        $totalpengeluaran +=  $k->transaksi->pengeluaran;
                      @endphp
                     @endforeach
                     <span class="h1 font-weight-bold text-secondary mb-0"> Rp {{ $totalkas }} </span>                          
                      
                    </div>
                    <div class="col-auto" style="padding-top: 10px;">
                      <div class="icon icon-shape b bg-secondary rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
              
    <div class="col">
    <div class="card card-stats mb-3 bg-warning" >
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-white mb-0">Pengeluaran</h5>
                      <span class="h3 font-weight-bold text-white mb-0">Rp {{ $totalpengeluaran }} </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape text-white rounded-circle shadow" style="background-color: #E04521">
                        <i class="fas fa-arrow-down"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>
    <div class="col">
    <div class="card card-stats mb-4 bg-success">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-white mb-0">Pemasukan</h5>
                      <span class="h3 font-weight-bold text-white mb-0">Rp {{ $totalpemasukan }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape text-white rounded-circle shadow" style="background-color: #259D6A;">
                        <i class="fas fa-arrow-up"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>
    </div>
              <a href="/anggota/transaksi">
              <div class="card card-stats m-0" style="border: 1px solid rgba(23,43,77, .2)">
                <div class="card-body m-0">
                  <div class="row">
                    <div class="col">
                      <span class="h2 font-weight-bold mb-0" style="line-height: 48px;">Riwayat KAS</span>
                    </div>
                    <div class="col-auto" style="display: inline-block; vertical-align: middle;">
                      <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                        <i class="fas fa-arrow-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </a>           
        </div>
      </div>
      @if (session('alert-fail'))
      <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">×</button> 
        {{ session('alert-fail') }}
      </div>
      @endif  
    </div>
  </div>

<!-- Core -->
<script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
<script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!--  JS -->
<script src="../assets/js/argon-dashboard.min.js"></script>
</body>
</html>
