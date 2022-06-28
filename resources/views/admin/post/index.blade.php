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
    <style>
        .img1:hover {
            transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>
@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Postlar</h3>
        </div>
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">
                            <a href="{{route('admin.post.create')}}" role="button" class="btn btn-primary m-b-sm">Post Ekle</a>
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th style="width: 25px;">id</th>
                                        <th>Parent</th>
                                        <th style="width: 100px">Title</th>
                                        <th>Keywords</th>
                                        <th>Description</th>
                                        <th style="width: 25px;">Gallery</th>
                                        <th style="width: 32px">Status</th>
                                        <th style="width: 25px">Edit</th>
                                        <th style="width: 25px">Delete</th>
                                        <th style="width: 25px">Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{\App\Http\Controllers\admin\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->keyword}}</td>
                                            <td>{{$rs->description}}</td>
                                            <td style="width: 25px;"><a href="{{route('admin.image.index',['pid'=>$rs->id])}}" class="btn btn-outline-primary"
                                                   onclick="return !window.open(this.href,'','top=100 left=200 width=800 height=650')">
                                                    <i class="fas fa-images"></i>
                                                </a></td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin.post.edit',['id'=>$rs->id])}}" class="btn btn-outline-success" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i></a></td>
                                            <td><a href="{{route('admin.post.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></a></td>
                                            <td><a href="{{route('admin.post.show',['id'=>$rs->id])}}" class="btn btn-outline-primary" data-toggle="tooltip" title="Show"><i class="fas fa-eye"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th style="width: 25px;">id</th>
                                        <th>Parent</th>
                                        <th style="width: 100px">Title</th>
                                        <th>Keywords</th>
                                        <th>Description</th>
                                        <th style="width: 80px;">Gallery</th>
                                        <th style="width: 32px">Status</th>
                                        <th style="width: 25px">Edit</th>
                                        <th style="width: 25px">Delete</th>
                                        <th style="width: 25px">Show</th>
                                    </tr>
                                    </tfoot>
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
