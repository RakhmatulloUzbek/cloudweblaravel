@extends('layouts.adminbase')

@section('head')
@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Güncelleme</h3><br>
            <a href="{{route('admin.index')}}" role="button">Anasafya</a> >
            <a href="{{route('admin.category.index')}}" role="button">Kategoriler</a> >
            <a class="disabled" style="text-decoration-line: none">{{$data->title}}</a>
        </div>
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">
                            <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}"
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label">Parent</label>
                                        <div class="col-lg-8 col-sm-5">
                                            <select class="form-control" name="parent_id">
                                                <option value="0" selected="selected">Main catagory</option>
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}"
                                                            @if($rs->id == $data->parent_id) selected="selected" @endif>
                                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-lg-8 col-sm-5">
                                            <input type="text" class="form-control" name="title"
                                                   value="{{$data->title}}">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                                        <div class="col-lg-8 col-sm-5">
                                            <input type="text" class="form-control" name="keyword"
                                                   value="{{$data->keyword}}">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-lg-8 col-sm-5">
                                            <input type="text" class="form-control" name="description"
                                                   value="{{$data->description}}">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-lg-8 col-sm-5">
                                            <select class="form-select" name="status"
                                                    aria-label="Default select example">
                                                <option selected>{{$data->status}}</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Güncelle</button> <a href="{{route('admin.category.index')}}" class="btn btn-danger">İptal</a>
                                </div>
                            </form>
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

