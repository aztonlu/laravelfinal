<!DOCTYPE html>
<html lang="fr">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title', 'Terandes') | Peru Reisebüro</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="{{url('')}}/css/min/bootstrap.min.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/css/min/jqueryui.min.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/vendor/animate-css/animate.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/font/iconfont/iconstyle.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/font/font-awesome/css/font-awesome.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/css/main.css" media="all">
    <script type="text/javascript" src="{{url('')}}/vendor/js-cookie/src/js.cookie.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBePR4dRrkGcJp5Nm1N09g3kTeJr_6mPB4"></script>   

</head>
<body>
<div class="pre-loader">
    <div class="loading-img"></div>
</div>

<header class="nav-menu fixed-top">
@yield('translate')

@include('website.partials.de.nav')

</header>

@include('website.partials.de.slider')
@yield('content')
<!--@include('website.partials.footer')-->

<script type="text/javascript" src="{{url('')}}/vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="{{url('')}}/vendor/jqueryui/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript" src="{{url('')}}/vendor/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="{{url('')}}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{url('')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{url('')}}/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="{{url('')}}/vendor/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{url('')}}/vendor/retina.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/responsivetable.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/countnumbers.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/main.min.js"></script>
    <script>
      google.maps.event.addDomListener(window, 'load', initialize);
      function initialize() {
        //Declarar coordenas de los mapas Cusco - Lima
        var latLng = new google.maps.LatLng(-13.5313136, -71.9525267);
        var latLng1 = new google.maps.LatLng(-12.125797, -77.0282776);

        //Declarar elemento declarado en la vista
        var map = new google.maps.Map(document.getElementById('google-map'), {
          zoom: 15,
          center: latLng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var map1 = new google.maps.Map(document.getElementById('google-map1'), {
          zoom: 15,
          center: latLng1,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        //Indicar que información ira al hacer click en el marker

        var contentString = '<div id="content">'+'Cusco'+'</div>';
            var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var contentString1 = '<div id="content">'+'Lima'+'</div>';
            var infowindow1 = new google.maps.InfoWindow({
            content: contentString1
        });

        //declaramos nuestros markers
        var marker = new google.maps.Marker({
          position: latLng,
          title: 'title',
          map: map,
          draggable: false
        });
        var marker1 = new google.maps.Marker({
          position: latLng1,
          title: 'title',
          map: map1,
          draggable: false
        });


        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
        marker1.addListener('click', function() {
          infowindow1.open(map1, marker1);
        });
        
      }
      
    </script>
    
<script type="text/javascript" src="{{url('')}}/js/min/map.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/tripdetailpage.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/home.min.js"></script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
</body>
</html>
