<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/font-awesome/css/font-awesome.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
  <!-- iCheck 
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/iCheck/flat/blue.css")}}">
 Morris chart 
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/morris/morris.css")}}">
 jvectormap 
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/jvectormap/jquery-jvectormap-1.2.2.css")}}">
 Date Picker 
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/datepicker/datepicker3.css")}}">
 Daterange picker 
<link rel="stylesheet" href="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker-bs3.css")}}">
 bootstrap wysihtml5 - text editor -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

  <!-- css propio -->
  <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
  <!--Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="{{route('inicio')}}">Ingrese al sistema </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Ingreso al sistema</p>
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <div class="alert-text">
            @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
            @endforeach
          </div>
        </div>
        @endif

        <form action="{{route('login_post')}}" method="POST" autocomplete="off">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="usuario" class="form-control" value="{{old('usuario')}}" placeholder="Usuario">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fa fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Contraseña">
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
                <label for="remember">
                  Recordar contraseña
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!--    <div class="social-auth-links text-center mb-3">
              <p>- OR -</p>
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
              </a>
            </div>
            /.social-auth-links -->

        <p class="mb-1">
          <a href="#">Olvide mi contraseña?</a>
        </p>
        <p class="mb-0">
          <a href="#" class="text-center">Registrarme</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->


  <!-- jQuery -->
  <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <!-- Morris.js charts -
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset("assets/$theme/plugins/morris/morris.min.js")}}"></script>
 Sparkline 
<script src="{{asset("assets/$theme/plugins/sparkline/jquery.sparkline.min.js")}}"></script>
 jvectormap 
<script src="{{asset("assets/$theme/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>
<script src="{{asset("assets/$theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
 jQuery Knob Chart 
<script src="{{asset("assets/$theme/plugins/knob/jquery.knob.js")}}"></script>
 daterangepicker 
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.js")}}"></script>
 datepicker
<script src="{{asset("assets/$theme/plugins/datepicker/bootstrap-datepicker.js")}}"></script>
 Bootstrap WYSIHTML5 
<script src="{{asset("assets/$theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>
 Slimscroll 
<script src="{{asset("assets/$theme/plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
 FastClick 
<script src="{{asset("assets/$theme/plugins/fastclick/fastclick.js")}}"></script>
 AdminLTE App -->
  <script src="{{asset("assets/$theme/dist/js/adminlte.js")}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset("assets/$theme/dist/js/pages/dashboard.js")}}"></script>
  <!-- AdminLTE for demo purposes 
<script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script> -->
  @yield("scriptsPlugins")
  <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
  <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="{{asset("assets/js/scripts.js")}}"></script>
  <script src="{{asset("assets/js/funciones.js")}}"></script>
</body>

</html>