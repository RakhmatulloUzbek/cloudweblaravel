@extends('layouts.adminbase')

@section('head')
@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Ürünler</h3><br>
            <a href="{{route('admin.index')}}" role="button">Anasafya</a> >
            <a class="disabled" style="text-decoration-line: none">Ürünler</a>
        </div>
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">
                            <a href="{{route('admin.services.create')}}" role="button" class="btn btn-primary m-b-sm">Ekle</a>
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th style="width: 25px;">id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th style="width: 32px">Status</th>
                                        <th style="width: 25px">Edit</th>
                                        <th style="width: 25px">Delete</th>
                                        <th style="width: 25px">Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                        @if($rs->category->title == 'Ürünler')
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{$rs->category->title}}</td>
                                                <td>{{$rs->title}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('admin.services.edit',['id'=>$rs->id])}}"
                                                       class="btn btn-outline-success" data-toggle="tooltip"
                                                       title="Edit"><i class="fas fa-edit"></i></a></td>
                                                <td><a href="{{route('admin.services.destroy',['id'=>$rs->id])}}"
                                                       onclick="return confirm('Deleting !! Are you sure ?')"
                                                       class="btn btn-outline-danger" data-toggle="tooltip"
                                                       title="Delete"><i class="fas fa-trash"></i></a></td>
                                                <td><a href="{{route('admin.services.show',['id'=>$rs->id])}}"
                                                       class="btn btn-outline-primary" data-toggle="tooltip"
                                                       title="Show"><i class="fas fa-eye"></i></a></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th style="width: 25px;">id</th>
                                        <th>Category</th>
                                        <th>Title</th>
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
        @include('admin.footer')
    </div>
    <!-- end page inner -->
@endsection
@section('foot')
@endsection
