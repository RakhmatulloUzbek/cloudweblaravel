@extends('layouts.homefontbase')

@section('title','Anasayfa')

@section('head')
{{--    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/bootstrap/css/bootstrap.min.css" />--}}
{{--    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/font-awesome/css/font-awesome.min.css" />--}}
{{--    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/icomoon/style.css" />--}}
{{--    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/uniform/css/default.css" />--}}
{{--    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/switchery/switchery.min.css" />--}}
{{--    <!-- nvd3 plugin -->--}}
{{--    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/nvd3/nv.d3.min.css" />--}}
{{--    <!-- bootstrap-datepicker plugin -->--}}
{{--    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/bootstrap-datepicker/css/datepicker.css" />--}}
    <!-- theme core css -->
    <link rel="stylesheet" href="{{asset('assets')}}/docs/css/styles.css" />
@endsection

@section('content')
    <section class="m-0 p-0 pt-3">
        <div class="container m-1 p-1">
            <div class="row m-0">
                <div class="page-container">
                    @include('home.docs.sidebar')
                    <div class="page-content">
                        @include('home.docs.header')
                    </div>
                </div>
{{--               @include('home.docs.content')--}}
            </div>
        </div>
    </section>
@endsection

@section('foot')
    <!-- jQuery -->
{{--    <script src="{{asset('assets')}}/admin/plugins/jquery/jquery-3.1.0.min.js"></script>--}}
    <!-- bootstrap -->
{{--    <script src="{{asset('assets')}}/admin/plugins/bootstrap/js/bootstrap.min.js"></script>--}}
{{--    <!-- slimscroll -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>--}}
{{--    <!-- uniform -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/uniform/js/jquery.uniform.standalone.js"></script>--}}
{{--    <!-- switchery -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/switchery/switchery.min.js"></script>--}}
{{--    <!-- chartjs -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/chartjs/chart.min.js"></script>--}}
{{--    <!-- d3.min -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/d3/d3.min.js"></script>--}}
{{--    <!-- nv.d3.min -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/nvd3/nv.d3.min.js"></script>--}}
{{--    <!-- float chart -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/flot/jquery.flot.min.js"></script>--}}
{{--    <!-- float time -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/flot/jquery.flot.time.min.js"></script>--}}
{{--    <!-- float symbol -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/flot/jquery.flot.symbol.min.js"></script>--}}
{{--    <!-- float resize -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/flot/jquery.flot.resize.min.js"></script>--}}
{{--    <!-- float tooltip -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/flot/jquery.flot.tooltip.min.js"></script>--}}
{{--    <!-- float pie -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/flot/jquery.flot.pie.min.js"></script>--}}
{{--    <!-- datatables -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/datatables/js/jquery.datatables.min.js"></script>--}}
{{--    <!-- datepicker -->--}}
{{--    <script src="{{asset('assets')}}/admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>--}}
{{--    <!-- table-data -->--}}
{{--    <script src="{{asset('assets')}}/admin/js/pages/table-data.js"></script>--}}
    <!-- theme core scripts -->
    <script src="{{asset('assets')}}/docs/js/main.js"></script>
@endsection
