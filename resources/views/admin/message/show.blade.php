@extends('layouts.windowadminbase')

@section('head')
@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <!-- start page main wrapper -->
        <div class="page-title">
            <h3 class="breadcrumb-header">{{$data->subject}}</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%;">
                                    <tr>
                                        <th>ID</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{$data->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{$data->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$data->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th>
                                        <td>{{$data->subject}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subcribe</th>
                                        <td>{{$data->subcribe}}</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th>
                                        <td>
                                            {{$data->message}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Ip Adress</th>
                                        <td>{{$data->ip}}</td>
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
                                    <tr>
                                        <th>Admin Note</th>
                                        <td>
                                            <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}"
                                                  method="post">
                                                @csrf
                                                <textarea id="note" name="note" cols="70" rows="5">
                                                         {{$data->note}}
                                                </textarea>
                                                <div class="row nb-3  ml-3 responsive">
                                                    <div class="col-sm-4 m-2">
                                                        <button type="submit" class="btn btn-primary">Notu güncelle</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
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
