<!DOCTYPE html>
<html lang="en">
<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="admin,dashboard" />
    <meta name="description" content="Fabrex - Responsive Admin Dashboard Template" />

    <!-- title  -->
    <title>Fabrex - Responsive Admin Dashboard Template</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/img/logos/favicon.png">
    <link rel="apple-touch-icon" href="{{asset('assets')}}/admin/img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets')}}/admin/img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets')}}/admin/img/logos/apple-touch-icon-114x114.png">
    @yield('head')

</head>

<body>

<!-- PAGE LOADING
================================================== -->
<div id="preloader"></div>

<!-- PAGE CONTAINER
================================================== -->
<div class="page-container">
    @include('admin.sidebar')
    <!-- PAGE CONTENT
        ================================================== -->
    <div class="page-content">
        @include('admin.header')
        @yield('content')
        @include('admin.right_sidebar')

    </div>
</div>


@yield('foot')

</body>
</html>
