<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>milonsarkar</title>
  <link rel="icon" type="image/x-icon" href="{{asset('frontend/images//favicon.png')}}" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('asset/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('asset/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- <style>
    .bg{
      
      background-image: url("/assets/img/logo.jpg")
      background-size:cover;
    }
</style> -->
<!-- <body class="hold-transition login-page" style="background-image: url('{{asset('assets/dist/img/banner.jpg')}}'); background-repeat:no-repeat; background-size:cover"> -->


</head>
<body class="hold-transition login-page">
<!-- style="background-image: url('{{asset('asset/img/m2.jpg')}}'); background-repeat:no-repeat; background-size:cover" -->
  <!-- /.login-logo -->
  <div class="card">
    <div class="login-box" style="background-color:#F1B7A4;">
    <div class="text-center">
      <img class="profile-user-img img-fluid img-circle" src="{{asset('asset/img/logo.png')}}" alt="User profile picture">
      <h4><i>master management System</i></h4>
    </div>
    </div>
    <div class="card-body login-card-body" style="background-color:#3A3B3C;">
    <!-- style="background-image: url('{{asset('asset/img/m1.jpg')}}'); background-repeat:no-repeat; background-size:cover" -->
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{url('/admin/login')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="txtusername" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pwdpassword" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember" style="color:white;">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
