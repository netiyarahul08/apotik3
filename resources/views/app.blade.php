<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{$setting->app_name}} | @yield('title')</title>
  <link rel="shortcut icon" href="{{$setting->favicon}}" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition @if(Auth::user()->jenis == 'Admin') skin-red @else skin-blue @endif sidebar-mini fixed">
  <audio id="audio" src="/notif.mp3" preload="auto"></audio>
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="./" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{$setting->app_name}}</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="/#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="/#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{Auth::user()->avatar}}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{Auth::user()->nama}}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{Auth::user()->avatar}}" class="img-circle" alt="User Image">

                  <p>
                    {{Auth::user()->nama}}
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="{{ route('auth.logout') }}" class="btn btn-default btn-flat">Logout</a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{Auth::user()->avatar}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->nama }}</p>
            <a href="/#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        @include('layouts.menu')
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; {{ date('Y') }} <a href="/">{{$setting->app_name}}</a>.</strong> All rights
      reserved.
    </footer>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="/bower_components/raphael/raphael.min.js"></script>
  <script src="/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="/bower_components/moment/min/moment.min.js"></script>
  <script src="/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="/bower_components/fastclick/lib/fastclick.js"></script>
  <script src="/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
  <!-- AdminLTE for demo purposes -->

  <!-- inputmask -->
  <script src="/bower_components/inputmask/dist/jquery.inputmask.bundle.js"></script>
  <script>
    $(document).ready(function(){
        setTimeout(function(){
            $('body .alert').slideUp();
        }, 4000);
        
        setTimeout(function(){
            $('body .alert').slideUp();
          }, 4000)
          $('.datatable').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
          });
          $('.wysihtml5').wysihtml5();
    });
        let pembayaranNotifications = [];
        let transaksiNotifications = [];
        let lastPembayaran = 0;
        let lastTransaksi = 0;
        let recursive = 0
        loadNotif();
        function loadNotif(){
            $.ajax({
                url : '/notification',
                global : false,
                data : {
                    lastPembayaran : lastPembayaran,
                    lastTransaksi : lastTransaksi
                },
                beforeSend: function(){
                    
                },
                complete: function(){
                    
                },
                success : (response) => {
                    newpembayaranNotifications = response.pembayaran;
                    newtransaksiNotifications = response.transaksi;
                    if(lastPembayaran != response.lastPembayaran){
                        lastPembayaran = response.lastPembayaran;
                        pembayaranNotifications = [...pembayaranNotifications, ...newpembayaranNotifications];
                        showPembayaran();
                    }
                    if(lastTransaksi != response.lastTransaksi){
                        lastTransaksi = response.lastTransaksi;
                        transaksiNotifications = [...transaksiNotifications, ...newtransaksiNotifications];
                        showTransaksi();
                    }
                    recursive++;
                    setTimeout(() => {
                        loadNotif();
                    }, 3000);
                }
            });
        }
        function showPembayaran(){
            let pembayaranHtml = pembayaranNotifications.map(pembayaran => {
                return $('<li/>').append(`
                <a style=" height : 40px !important" href="/laundry/`+pembayaran.transaksi.id+`">Pembayaran Baru #`+pembayaran.transaksi.id+`
                </a>
                `);
            });
            $('#pembayaran-notification .menu').html(pembayaranHtml);
            $('#count-pembayaran').html(pembayaranHtml.length);
            if(recursive > 0){
                audio.play();
            }
        }
        function showTransaksi(){
            let transaksiHtml = transaksiNotifications.map(transaksi => {
                return $('<li/>').append(`
                <a style=" height : 40px !important" href="/laundry/`+transaksi.id+`">Transaksi Baru #`+transaksi.id+`
                </a>
                `);
            });
            $('#transaksi-notification .menu').html(transaksiHtml);
            $('#count-transaksi').html(transaksiHtml.length);
            if(recursive > 0){
                audio.play();
            }
        }
  </script>
  @yield('script')
</body>

</html>