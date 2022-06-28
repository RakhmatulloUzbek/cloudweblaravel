@extends('layouts.adminbase')

@section('head')
    <!-- common plugins -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/icomoon/style.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/uniform/css/default.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/switchery/switchery.min.css" />

    <!-- datatables plugin -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/datatables/css/jquery.datatables.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/datatables/css/jquery.datatables_themeroller.css" />

    <!-- bootstrap-datepicker plugin -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/bootstrap-datepicker/css/datepicker.css" />

    <!-- theme core css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/styles.css" />
    @include('admin.top_scripts')
@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Detay sayfası</h3>
        </div>
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">
                            <a href="{{route('admin.category.edit',['id'=>$data->id])}}" role="button" class="btn btn-danger m-b-sm">Düzenle</a>
                            <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" role="button" class="btn btn-success m-b-sm">Sil</a>
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%;">
                                    <tr>
                                        <th>ID</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>{{$data->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Keyword</th>
                                        <td>{{$data->keyword}}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{{$data->description}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{$data->status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Created Date</th>
                                        <td>{{$data->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated Date</th>
                                        <td>{{$data->updated_at}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
        </div>
        <!-- end page main wrapper -->
        <div class="page-footer">
            <p>Copyright &copy; <span class="current-year"></span> Fabrex All rights reserved.</p>
        </div>
    </div>
    <!-- end page inner -->
@endsection
@section('foot')
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

    <!-- datatables -->
    <script src="{{asset('assets')}}/admin/plugins/datatables/js/jquery.datatables.min.js"></script>

    <!-- datepicker -->
    <script src="{{asset('assets')}}/admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- table-data -->
    <script src="{{asset('assets')}}/admin/js/pages/table-data.js"></script>

    <!-- theme core scripts -->
    <script src="{{asset('assets')}}/admin/js/main.js"></script>
@endsection
