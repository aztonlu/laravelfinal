<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title', 'Decouverte') | Terandes</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="stylesheet" href="{{url('')}}/css/min/bootstrap.mn.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/css/min/jqueryui.min.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/vendor/animate-css/animate.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/font/iconfont/iconstyle.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/font/font-awesome/css/font-awesome.css" media="all" >
    <link rel="stylesheet" href="{{url('')}}/css/main-carousel.css" media="all">
    <script type="text/javascript" src="{{url('')}}/vendor/js-cookie/src/js.cookie.js"></script>

</head>
<body>
<div class="pre-loader">
    <div class="loading-img"></div>
</div>

<header class="nav-menu fixed-top">

    @yield('translate')

    @include('website.partials.en.nav')

</header>

@yield('content')
@include('website.partials.en.footer')

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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

<!-- Current Page JS -->
<script type="text/javascript" src="{{url('')}}/js/min/tripdetailpage.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/home.min.js"></script>
<script type="text/javascript" src="{{url('')}}/js/min/priceslider.min.js"></script>

</body>
</html>
