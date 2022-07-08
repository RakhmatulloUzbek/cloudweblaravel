@extends('layouts.adminbase')

@section('head')
    <style>
        #new1 {
            text-align: center;
            background-color: yellow;
            width: 60px;
            box-shadow: 1px 1px 2px yellow, 0 0 15px yellow, 0 0 15px yellow, 0 0 5px yellow;
        }
        #new2 {
            text-align: center;
            background-color: springgreen;
            width: 60px;
            box-shadow: 1px 1px 2px springgreen, 0 0 15px springgreen, 0 0 15px springgreen, 0 0 5px springgreen;
        }
    </style>
@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Mesajlar</h3><br>
            <a href="{{route('admin.index')}}" role="button">Anasafya</a> >
            <a class="disabled" style="text-decoration-line: none">Mesajlar</a>
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
                                        <th style="width: 35px">Subcribe</th>
                                        <th style="width: 60px">Status</th>
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
                                            <td>{{$rs->subcribe}}</td>
                                            <td>
                                                @if($rs->status=='Yeni')<div id="new1">{{$rs->status}}</div>
                                                @else<div id="new2">{{$rs->status}}</div>
                                                @endif
                                            </td>
                                            <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></a></td>
                                            <td>
                                                <a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-outline-primary" onclick="return !window.open(this.href,'','top=50 left=100 width=950 height=730')" data-toggle="tooltip" title="Show"><i class="fas fa-eye"></i></i>
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
                                        <th>Subcribe</th>
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
@endsection
