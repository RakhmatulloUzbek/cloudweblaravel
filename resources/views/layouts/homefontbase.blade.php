<!DOCTYPE html>
<html lang="en">

<head>
    @php
        $settings = \App\Http\Controllers\HomeController::getsettings();
    @endphp
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="{{$settings->keywords}}" />
    <meta name="description" content="{{$settings->description}}" />
    <!-- title  -->
    <title>@yield('title')</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{Storage::url($settings->icon)}}">
    <link rel="apple-touch-icon" href="{{asset('assets')}}/home/img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets')}}/home/img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets')}}/home/img/logos/apple-touch-icon-114x114.png">

    <!-- plugins -->
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/plugins.css">

    <!-- revolution slider css -->
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/rev_slider/settings.css">
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/rev_slider/layers.css">
    <link rel="stylesheet" href="{{asset('assets')}}/home/css/rev_slider/navigation.css">

    <!-- quform css -->
    <link rel="stylesheet" href="{{asset('assets')}}/home/quform/css/base.css">

    <!-- search css -->
    <link rel="stylesheet" href="{{asset('assets')}}/home/search/search.css">

    <!-- theme core css -->
    <link href="{{asset('assets')}}/home/css/styles.css" rel="stylesheet">

</head>

<body>

<!-- PAGE LOADING
    ================================================== -->
<div id="preloader"></div>

<!-- MAIN WRAPPER
================================================== -->
<div class="main-wrapper">
    @include('home.header')

    @yield('slider')
    @yield('content')


    @include('home.footer')

</div>


<!-- SCROLL TO TOP
================================================== -->
<a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

<!-- all js include start -->

<!-- jQuery -->
<script src="{{asset('assets')}}/home/js/jquery.min.js"></script>

<!-- popper js -->
<script src="{{asset('assets')}}/home/js/popper.min.js"></script>

<!-- bootstrap -->
<script src="{{asset('assets')}}/home/js/bootstrap.min.js"></script>

<!-- core.min.js -->
<script src="{{asset('assets')}}/home/js/core.min.js"></script>

<!-- search -->
<script src="{{asset('assets')}}/home/search/search.js"></script>

<!-- revolution slider js files start -->
<script src="{{asset('assets')}}/home/js/rev_slider/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('assets')}}/home/js/rev_slider/jquery.themepunch.revolution.min.js"></script>
<script src="{{asset('assets')}}/home/js/rev_slider/extensions/revolution.extension.actions.min.js"></script>
<script src="{{asset('assets')}}/home/js/rev_slider/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{asset('assets')}}/home/js/rev_slider/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{asset('assets')}}/home/js/rev_slider/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('assets')}}/home/js/rev_slider/extensions/revolution.extension.migration.min.js"></script>
<script src="{{asset('assets')}}/home/js/rev_slider/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{asset('assets')}}/home/js/rev_slider/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{asset('assets')}}/home/js/rev_slider/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('assets')}}/home/js/rev_slider/extensions/revolution.extension.video.min.js"></script>

<!-- theme core scripts -->
<script src="{{asset('assets')}}/home/js/main.js"></script>

<!-- quform plugins js -->
<script src="{{asset('assets')}}/home/quform/js/plugins.js"></script>

<!-- quform scripts js -->
<script src="{{asset('assets')}}/home/quform/js/scripts.js"></script>

<!-- all js include end -->

</body>

</html>
