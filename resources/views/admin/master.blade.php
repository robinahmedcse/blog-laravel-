<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Blog </title>

    <!-- Bootstrap -->
    <link href="{{asset('public/assetBackEnd/')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/assetBackEnd/')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/assetBackEnd/')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('public/assetBackEnd/')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('public/assetBackEnd/')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('public/assetBackEnd/')}}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('public/assetBackEnd/')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('public/assetBackEnd/')}}/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Blog!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
               @include('admin.includes.profile-quick')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
                   @include('admin.includes.sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
              @include('admin.includes.menu-footer')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
     @include('admin.includes.top-nav')
        <!-- /top navigation -->

        <!-- page content -->
    @yield('mainContaint')
        <!-- /page content -->

        <!-- footer content -->
       @include('admin.includes.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{asset('public/assetBackEnd/')}}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('public/assetBackEnd/')}}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{asset('public/assetBackEnd/')}}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{asset('public/assetBackEnd/')}}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{asset('public/assetBackEnd/')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{asset('public/assetBackEnd/')}}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{asset('public/assetBackEnd/')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{asset('public/assetBackEnd/')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('public/assetBackEnd/')}}/vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('public/assetBackEnd/')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('public/assetBackEnd/')}}/build/js/custom.min.js"></script>
	
  </body>
</html>
