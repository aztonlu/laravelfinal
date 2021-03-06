<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'ADMIN') | Admin Rutas</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{url('')}}/panel/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('')}}/panel/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('')}}/panel/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('')}}/panel/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('')}}/panel/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{url('')}}/panel/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('')}}/panel/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{url('')}}/panel/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('')}}/panel/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url('')}}/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBePR4dRrkGcJp5Nm1N09g3kTeJr_6mPB4"></script>
</head>
<body class="hold-transition skin-green fixed sidebar-mini">

@include('admin.partials.header')
@include('admin.partials.nav')

@yield('content')

@include('admin.partials.footer')

<!-- jQuery 2.2.3 -->
<script src="{{url('')}}/panel/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('')}}/panel/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{url('')}}/panel/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{url('')}}/panel/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{url('')}}/panel/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{url('')}}/panel/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('')}}/panel/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{url('')}}/panel/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{url('')}}/panel/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('')}}/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{url('')}}/panel/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{url('')}}/panel/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{url('')}}/panel/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('')}}/panel/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('')}}/panel/dist/js/demo.js"></script>
</body>
</html>
