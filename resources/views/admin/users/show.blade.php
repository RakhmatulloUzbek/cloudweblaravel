@extends('layouts.adminbase')

@section('head')
@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">{{$data->name}}</h3><br>
            <a href="{{route('admin.index')}}" role="button">Anasafya</a> >
            <a href="{{route('admin.users.index')}}" role="button">Kullanıcılar</a> >
            <a class="disabled" style="text-decoration-line: none">{{$data->name}}</a>
        </div>
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-heading clearfix">
                            <h4 class="card-title">Detail of {{$data->name}} </h4>
                        </div>
                        <div class="row">
                            <aside class="col-md-4">
                                <div class="gallery-wrap">
                                    <div class="img-big-wrap img-thumbnail d-block my-auto">
                                        <img class="img1 img-thumbnail d-block" src="{{Storage::url($data->profile_photo_path)}}" alt="">
                                    </div>
                                </div>
                            </aside>
                            <main class="col-md-8">
                                <div class="table-responsive">
                                    <table class="table table-striped">
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
                                            <th>Address</th>
                                            <td>{{$data->address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Role</th>
                                            <td>{{$data->role}}</td>
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
                            </main>
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
