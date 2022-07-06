@extends('layouts.adminbase')

@section('head')
@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">{{$data->title}}</h3><br>
            <a href="{{route('admin.index')}}" role="button">Anasafya</a> >
            <a href="{{route('admin.post.index')}}" role="button">Postlar</a> >
            <a class="disabled" style="text-decoration-line: none">{{$data->title}}</a>
        </div>
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-heading clearfix">
                            <h4 class="card-title">Detail of {{$data->title}} </h4>
                        </div>
                        <div class="card-body">
                            <a href="{{route('admin.post.edit',['id'=>$data->id])}}" role="button" class="btn btn-primary m-b-sm">Düzenle</a>
                            <a href="{{route('admin.post.destroy',['id'=>$data->id])}}" role="button" class="btn btn-danger m-b-sm">Sil</a>
                        </div>
                        <div class="row">
                            <aside class="col-md-4">
                                <div class="gallery-wrap">
                                    <div class="img-big-wrap img-thumbnail d-block my-auto">
                                        <img class="img1 img-thumbnail d-block" src="{{Storage::url($data->image)}}" alt="">
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
                                            <th>Category</th>
                                            <td>
                                                {{$data->category->title}}
                                            </td>
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
                            </main>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th>
                                                <hr>
                                                <h2>Detail</h2>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{!! $data->detail !!}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
