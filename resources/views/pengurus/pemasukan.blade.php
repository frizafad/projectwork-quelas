<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemasukan</title>
<!-- Favicon -->
<link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">

<!-- Fonts -->
<link href="" rel="stylesheet">

<!-- Icons -->
<link href="{{asset('assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet">
<link href="{{asset('assets/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

<!--  CSS -->
<link type="text/css" href="{{asset('assets/css/argon-dashboard.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/login.css')}}" >

</head>
<body>
<div class="login-page" style="padding-top: 50px; padding-bottom: -80px;">
  <div class="form" style="padding-top: 20px; margin-bottom: 0;">
    <form class="login-form" action="{{ route('addpemasukan') }}" method="POST">
    {{csrf_field()}}
        <h1 style="margin: 0;">Pemasukan</h1>
        <br>
      <input type="text" placeholder="Catatan" name="catatan" required/>
      <input type="number" placeholder="total" name="pemasukan"required/>
      <div class="row">
        <div class="col-8"><input type="text" id="output" placeholder="Click Play" name="id" required/></div>
        <div class="col-4" id="create" style="padding-left: 0;"><button type="button">Play</button></div>
      </div>     
      <button type="submit">NEXT</button>
    </form>
  </div>
</div>
<script>
    function createRandomString( length ) {
    
    var str = "";
    for ( ; str.length < length; str += Math.random().toString( 36 ).substr( 2 ) );
    return str.substr( 0, length );
}

document.addEventListener( "DOMContentLoaded", function() {
    var button = document.querySelector( "#create" ),
        output = document.querySelector( "#output" );
    button.addEventListener( "click", function() {
        var str = createRandomString( 6 );
        output.value = str;
    }, false)
  
});
</script>

<!-- Core -->
<script src="{{asset('assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!--  JS -->
<script src="{{asset('assets/js/argon-dashboard.min.js')}}"></script>
</body>
</html>
