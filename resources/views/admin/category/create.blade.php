@extends('layouts.adminbase')
@section('head')
@endsection
@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Yeni Kategori</h3><br>
            <a href="{{route('admin.index')}}" role="button">Anasafya</a> >
            <a href="{{route('admin.category.index')}}" role="button">Kategoriler</a> >
            <a class="disabled" style="text-decoration-line: none">Yeni kategori</a>
        </div>
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">
                            <form role="form" action="{{route('admin.category.store')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-4">
                                    <label class="col-sm-2 col-form-label">Parent Category</label>
                                    <div class="col-sm-5">
                                        <select class="form-control select2" name="parent_id" id="">
                                            <option value="0" selected="selected">Main catagory</option>
                                            @foreach($data as $rs)
                                                <option value="{{$rs->id}}">
                                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="title" placeholder="Title">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="keyword" placeholder="Keyword">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="description"
                                               placeholder="Description">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-5">
                                        <select class="form-select" name="status" aria-label="Default select example">
                                            <option></option>
                                            <option value="True">True</option>
                                            <option value="False">False</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Kaydet</button> <a href="{{route('admin.category.index')}}" class="btn btn-danger">İptal</a>
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
