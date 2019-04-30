<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top password"> <!-- header -->

    <a class="navbar-brand mr-1" href="index.html">
      <img src="/image/logo.png" alt="" class="logo">
      <h6 class="nameweb"> Learning English</h6>
    </a>
  </nav> <!-- heets header  -->
  <div class="container">
   
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
          @if(count($errors) > 0)
            @foreach($errors->all() as $err)
            <div class="alert alert-danger">
                {{ $err }}<br>
            </div>
            @endforeach
          @endif
          @if (session('notice'))
            <div class="alert alert-danger">
                {{ session('notice') }}
            </div>
          @endif
        <form action="auth/login" method="post">
        

          <div class="form-group">
            <div class="form-label-group">
              
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Login">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
