<!DOCTYPE html>
<html lang="en">
<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Pengona" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Pengona Yazılım" />

    <!-- title  -->
    <title>Pengona Admin</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/home/img/logos/favicon.png">

    <!-- common plugins -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/icomoon/style.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/uniform/css/default.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/switchery/switchery.min.css" />
    <!-- nvd3 plugin -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/nvd3/nv.d3.min.css" />
    <!-- datatables plugin -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/datatables/css/jquery.datatables.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/datatables/css/jquery.datatables_themeroller.css" />
    <!-- bootstrap-datepicker plugin -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/bootstrap-datepicker/css/datepicker.css" />
    <!-- theme core css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/styles.css" />
    @yield('head')

</head>

<body>

<!-- PAGE LOADING
================================================== -->
<div id="preloader"></div>

<!-- PAGE CONTAINER
================================================== -->
<div class="page-container">
    <!-- PAGE CONTENT
        ================================================== -->
    <div class="page-content">
        @yield('content')

    </div>
</div>


@yield('foot')
<!-- jQuery -->
<script src="{{asset('assets')}}/admin/plugins/jquery/jquery-3.1.0.min.js"></script>
<!-- bootstrap -->
<script src="{{asset('assets')}}/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscroll -->
<script src="{{asset('assets')}}/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- uniform -->
<script src="{{asset('assets')}}/admin/plugins/uniform/js/jquery.uniform.standalone.js"></script>
<!-- switchery -->
<script src="{{asset('assets')}}/admin/plugins/switchery/switchery.min.js"></script>
<!-- chartjs -->
<script src="{{asset('assets')}}/admin/plugins/chartjs/chart.min.js"></script>
<!-- d3.min -->
<script src="{{asset('assets')}}/admin/plugins/d3/d3.min.js"></script>
<!-- nv.d3.min -->
<script src="{{asset('assets')}}/admin/plugins/nvd3/nv.d3.min.js"></script>
<!-- float chart -->
<script src="{{asset('assets')}}/admin/plugins/flot/jquery.flot.min.js"></script>
<!-- float time -->
<script src="{{asset('assets')}}/admin/plugins/flot/jquery.flot.time.min.js"></script>
<!-- float symbol -->
<script src="{{asset('assets')}}/admin/plugins/flot/jquery.flot.symbol.min.js"></script>
<!-- float resize -->
<script src="{{asset('assets')}}/admin/plugins/flot/jquery.flot.resize.min.js"></script>
<!-- float tooltip -->
<script src="{{asset('assets')}}/admin/plugins/flot/jquery.flot.tooltip.min.js"></script>
<!-- float pie -->
<script src="{{asset('assets')}}/admin/plugins/flot/jquery.flot.pie.min.js"></script>
<!-- datatables -->
<script src="{{asset('assets')}}/admin/plugins/datatables/js/jquery.datatables.min.js"></script>
<!-- datepicker -->
<script src="{{asset('assets')}}/admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<!-- table-data -->
<script src="{{asset('assets')}}/admin/js/pages/table-data.js"></script>
<!-- theme core scripts -->
<script src="{{asset('assets')}}/admin/js/main.js"></script>
</body>
</html>
