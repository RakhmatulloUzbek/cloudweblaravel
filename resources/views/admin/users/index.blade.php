@extends('layouts.adminbase')

@section('head')
@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Kullanıcılar</h3><br>
            <a href="{{route('admin.index')}}" role="button">Anasafya</a> >
            <a class="disabled" style="text-decoration-line: none">Kullanıcılar</a>
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
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th style="width: 25px">Delete</th>
                                        <th style="width: 25px">Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->name}}</td>
                                            <td>{{$rs->email}}</td>
                                            <td>{{$rs->role}}</td>
                                            <td><a href="{{route('admin.users.destroy',['id'=>$rs->id])}}"
                                                   onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-outline-danger"
                                                   data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></a></td>
                                            <td>
                                                <a href="{{route('admin.users.show',['id'=>$rs->id])}}"
                                                   class="btn btn-outline-primary" data-toggle="tooltip" title="Show"><i class="fas fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th style="width: 25px;">id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
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
       @include('admin.footer')
    </div>
    <!-- end page inner -->
@endsection
@section('foot')
@endsection
