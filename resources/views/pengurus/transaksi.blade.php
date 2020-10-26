<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uang Kas</title>

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
          <a class=" nav-link"href="/pengurus"> <i class="ni ni-tv-2 text-blue"></i> Dashboard
            </a>
          </li>
          <li class="p">
            <a class="nav-link " href="/pengurus/acak">
              <i class="ni ni-bullet-list-67 text-red"></i> Acak Bangku
            </a>
          </li>
          <li class="p"  style="background-color: #5e72e4; color: white !important;">
            <a class="nav-link"  style="color: white !important; font-weight: bold;"  href="/pengurus/transaksi">
              <i class="far fa-money-bill-alt text-white"></i> Uang Kas
            </a>
          </li>
          <li class="p">
            <a class="nav-link " href="/pengurus/profile">
              <i class="ni ni-single-02 text-yellow"></i> User profile
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-uppercase d-none d-lg-inline-block" href="/dashboard"> <h2>Uang Kas</h2> </a>
        @if (session('alert-fail'))
        <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          {{ session('alert-fail') }}
        </div>
        @endif  
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
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    @php
        $totalpemasukan = 0;
        $totalpengeluaran = 0;
        $totalkas = 0;
    @endphp
    @foreach ($transaksi as $t)
      @php
      $totalkas +=  $t->transaksi->pemasukan - $t->transaksi->pengeluaran;
      $totalpemasukan +=  $t->transaksi->pemasukan;
      $totalpengeluaran +=  $t->transaksi->pengeluaran;                  
      @endphp
    @endforeach
    <div class="header pb-9" style="background-color: #EDF4F8;">
      <div class="container-fluid">
        <div class="header-kas">
          <!-- Card stats -->
          <div class="row">
            <div class="col-sm">
              <div class="card card-stats mb-4 mb-xl-0 bg-default">
                <div class="card-body" style="margin: 20px 0;">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted text-white mb-0">Total KAS</h5>
                      <span class="h2 font-weight-bold text-secondary mb-0">Rp {{ $totalkas }} </span>
                    </div>
                    <div class="col-auto">
                    <div class="icon icon-shape b bg-secondary rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0 bg-warning">
                <div class="card-body"  style="margin: 20px 0;">
                  <div class="row">
                    <div class="col">
                    <h5 class="card-title text-uppercase text-white mb-0">Pengeluaran</h5>
                      <span class="h2 font-weight-bold text-white mb-0">Rp {{ $totalpengeluaran }}</span>
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
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0 bg-success">
                <div class="card-body"  style="margin: 20px 0;">
                  <div class="row">
                    <div class="col">
                    <h5 class="card-title text-uppercase text-white mb-0">Pemasukan</h5>
                    <span class="h2 font-weight-bold text-white mb-0">Rp {{ $totalpemasukan }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape text-white rounded-circle shadow" style="background-color: #259D6A">
                        <i class="fas fa-arrow-up"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--9 pb-4" style="background-color: white;">
      <div class="row mt-5">
        <div class="col">
        <div class="card bg-default shadow" id="riwayat" style="max-height: 310px;">
            <div class="card-header bg-transparent border-0">
            <div class="row align-items-center">
                <div class="col">
                  <h3 class="text-white mb-0">Riwayat Transaksi</h3>
                </div>
                <div class="col text-right">
                  <a href="/pengurus/transaksi/pemasukan" class="btn btn-sm btn-primary">Pemasukan</a>
                  <a href="/pengurus/transaksi/pengeluaran" class="btn btn-sm btn-primary">Pengeluaran</a>
                </div>
              </div>
            </div>
            
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jumlah Uang</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                  @foreach ($transaksi as $t)
                  <tr>
                    <th scope="row">
                    {{ $no }}
                    </th>
                    <td>
                      {{ $t->transaksi->pemasukan + $t->transaksi->pengeluaran }} 
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        @php
                            if($t->transaksi->pengeluaran == 0){
                              echo "<i class='bg-success  '></i>Pemasukan";
                            }
                            else
                            {
                              echo "<i class='bg-danger'></i>Pengeluaran";
                            } 
                        @endphp
                      </span>
                    </td>
                    <td>
                      {{ $t->transaksi->created_at }}
                    </td>
                    <?php $no++; ?>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>


<!-- Core -->
<script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
<script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!--  JS -->
<script src="../assets/js/argon-dashboard.min.js"></script>
</body>
</html>
