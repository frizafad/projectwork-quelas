<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}" >
</head>
<body>
<div class="login-page" style="padding-top: 100px; padding-bottom: -30px;">
  <div class="form"  style="padding-top: 20px; margin-bottom: 0;">
    <form class="login-form" action="{{ route('checkLogin') }}" method="POST">
    {{csrf_field()}}
      <h1 style="margin: 0;">Login</h1>
      <br>
      <input type="email" placeholder="email" name="email" required/>
      <input type="password" placeholder="password"name="password" required/>
      <a href="/login"><button>login</button></a>
    </form>
  </div>
</div>
</body>
</html>
