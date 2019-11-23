<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo','PAGIN')</title>
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
  Date Picker -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datepicker/datepicker3.css")}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker-bs3.css")}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <!-- css propio -->
    <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">
    <!--Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield("styles");
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Inicio header -->
        @include("theme/$theme/header")
        <!-- Fin header -->
        <!-- Inicio aside -->
        @include("theme/$theme/aside")
        <!-- Fin aside -->
        <!-- Content Header (Page header) -->
        <div class="content-wrapper">

            <!-- content header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Mis cuentas</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <!-- Main content -->
            <section class="content">
                @yield('contenido')
            </section>
            <!-- /.content-wrapper -->
        </div>

        <!-- Inicio footer -->
        @include("theme/$theme/footer")
        <!-- Fin footer -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
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
    -->
    <script src="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.js")}}"></script>
    <!--- datepicker -->
    <script src="{{asset("assets/$theme/plugins/datepicker/bootstrap-datepicker.js")}}"></script>
    <!-- Bootstrap WYSIHTML5 
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
    @yield("scripts");
</body>

</html>