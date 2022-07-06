@extends('layouts.adminbase')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')

    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Güncelleme</h3><br>
            <a href="{{route('admin.index')}}" role="button">Anasafya</a> >
            <a href="{{route('admin.post.index')}}" role="button">Postlar</a> >
            <a class="disabled" style="text-decoration-line: none">{{$data->title}}</a>
        </div>
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">
                            <form role="form" action="{{route('admin.post.update',['id'=>$data->id])}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-form-label">Parent</label>
                                        <div class="col-lg-8 col-sm-5">
                                            <select class="form-control" name="category_id">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}"
                                                            @if($rs->id == $data->category_id) selected="selected" @endif>
                                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-lg-8 col-lg-8 col-sm-5">
                                            <input type="text" class="form-control" name="title"
                                                   value="{{$data->title}}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                                        <div class="col-lg-8 col-sm-5">
                                            <input type="text" class="form-control" name="keyword"
                                                   value="{{$data->keyword}}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-lg-8 col-sm-5">
                                            <input type="text" class="form-control" name="description"
                                                   value="{{$data->description}}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-4">
                                            <input type="file" class="form-control" name="image">
                                            @if($data->image)
                                                <img class="img-thumbnail" src="{{Storage::url($data->image)}}" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="detail" class="col-sm-2 col-form-label">Detail</label>
                                        <div class="col-sm-8">
                                                <textarea name="detail" id="detail" class="form-control">

                                                    {{ $data->detail }}

                                                </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create(document.querySelector('#detail'))
                                                    .then(editor => {
                                                        console.log(editor);
                                                    })
                                                    .catch(error => {
                                                        console.error(error);
                                                    });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
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
                                    <button type="submit" class="btn btn-primary">Güncelle</button> <a href="{{route('admin.post.index')}}" class="btn btn-danger">İptal</a>
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function () {
            $('.textarea').summernote()
        })
    </script>

@endsection

