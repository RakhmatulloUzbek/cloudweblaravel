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
        #new1 {
            text-align: center;
            background-color: yellow;
            width: 35px;
            box-shadow: 1px 1px 2px yellow, 0 0 15px yellow, 0 0 15px yellow, 0 0 5px yellow;
        }
        #new2 {
            text-align: center;
            background-color: springgreen;
            width: 35px;
            box-shadow: 1px 1px 2px springgreen, 0 0 15px springgreen, 0 0 15px springgreen, 0 0 5px springgreen;
        }
    </style>
@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Messages</h3>
        </div>
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th style="width: 25px;">id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th style="width: 35px">Status</th>
                                        <th style="width: 30px">Delete</th>
                                        <th style="width: 30px">Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->name}}</td>
                                            <td>{{$rs->phone}}</td>
                                            <td>{{$rs->email}}</td>
                                            <td>{{$rs->subject}}</td>
                                            <td>
                                                @if($rs->status=='New')<div id="new1">{{$rs->status}}</div>
                                                @else<div id="new2">{{$rs->status}}</div>
                                                @endif
                                            </td>
                                            <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></a></td>
                                            <td>
                                                <a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-outline-primary" onclick="return !window.open(this.href,'','top=50 left=100 width=730 height=900')" data-toggle="tooltip" title="Show"><i class="fas fa-eye"></i></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th style="width: 25px;">id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Status</th>
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
