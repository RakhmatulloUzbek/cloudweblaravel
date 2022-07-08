@extends('layouts.adminbase')

@section('head')

@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Kategoriler</h3>
        </div>
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">
                            <a href="{{route('admin.faq.create')}}" role="button" class="btn btn-primary m-b-sm">Ekle</a>
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th style="width: 25px;">id</th>
                                        <th>Subject</th>
                                        <th>Question</th>
                                        <th>Answer</th>
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
                                            <td>{{$rs->subject}}</td>
                                            <td>{{$rs->question}}</td>
                                            <td>{!! Str::limit($rs->answer, 50,'...') !!}</td>
                                            <td>{{$rs->status}}</td>
                                            <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}"
                                                   class="btn btn-outline-success" data-toggle="tooltip" title="Edit"><i
                                                            class="fas fa-edit"></i></a></td>
                                            <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}"
                                                   onclick="return confirm('Deleting !! Are you sure ?')"
                                                   class="btn btn-outline-danger" data-toggle="tooltip"
                                                   title="Delete"><i class="fas fa-trash"></i></a></td>
                                            <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}"
                                                   class="btn btn-outline-primary" data-toggle="tooltip" title="Show"><i
                                                            class="fas fa-eye"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th style="width: 25px;">id</th>
                                        <th>Subject</th>
                                        <th>Question</th>
                                        <th>Answer</th>
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
