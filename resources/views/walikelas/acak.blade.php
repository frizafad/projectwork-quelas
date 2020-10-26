<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <!-- Favicon -->
<link href="" rel="icon" type="image/png">

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
      <a class="navbar-brand pt-2" href="/">
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
            <a href="/profile" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{route('logout')}}" class="dropdown-item">
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
              <a href="/">
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
          <a class=" nav-link" href="/walikelas"> <i class="ni ni-tv-2 text-blue"></i>Dashboard
            </a>
          </li>
          <li class="p" style="background-color: #5e72e4; color: white !important;">
            <a class="nav-link" style="color: white !important; font-weight: bold;" href="/walikelas/acak">
              <i class="ni ni-bullet-list-67 text-white"></i> Acak Bangku
            </a>
          </li>
          <li class="p">
            <a class="nav-link" href="/walikelas/transaksi">
              <i class="far fa-money-bill-alt text-green"></i> Uang Kas
            </a>
          </li>
          <li class="p">
            <a class="nav-link " href="/walikelas/profile">
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
    <div class="container mt-6">
        <div class="card-shadow">
            <form action="{{ route('postAcakw') }}" method="post">
                {{csrf_field()}}
                <label for="">Masukan jumlah siswa</label>
                <input type="text" class="form-control" name="jumlahBangku" required>

                <label for="">Masukan jumlah baris</label>
                <input type="text" class="form-control" name="jumlahBaris" required>

                <button type="submit" class="btn btn-primary btn-block mt-4">Acak</button>
            </form>
        </div>

        @if(isset($jmlBangku))
        @php 
        
        $random = range(1, $jmlBangku);
        shuffle($random);
        @endphp
        <br>
        <br>
        <div class="card-shadow text-center">
            <p style="width:100%; word-spacing: 60px; font-size: 20px; font-weight:700; line-height: 50px;">
            @for($i = 1; $i <= $jmlBangku; $i++)
                {{ (strlen($random[$i-1]) == 1 ? '0'.$random[$i-1] : $random[$i-1]) }}
                @if($i % $jmlBarisHorizontal == 0)
                <br>
                @endif
            @endfor
            </p>
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
