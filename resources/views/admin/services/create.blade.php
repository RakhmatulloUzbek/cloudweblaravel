@extends('layouts.adminbase')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">
                            <div class="table-responsive">
                                <form role="form" action="{{route('admin.services.store')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label class="col-sm-2 col-form-label">Category</label>
                                        <div class="col-sm-5">
                                            <select class="form-control select" name="category_id">
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
                                            <input type="text" class="form-control" name="keyword"
                                                   placeholder="Keyword">
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
                                        <label for="detail" class="col-sm-2 col-form-label">Detail</label>
                                        <div class="col-sm-8">
                                            <textarea name="detail" id="detail" class="form-control">

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
                                    <div class="row mb-4">
                                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control" name="image">
                                            <div class="invalid-feedback">
                                                Please enter a message in the textarea.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-5">
                                            <select class="form-select" name="status"
                                                    aria-label="Default select example">
                                                <option value="True" selected>True</option>
                                                <option value="False">False</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kaydet</button> <a href="{{redirect()->back()->getTargetUrl()}}" class="btn btn-danger">İptal</a>
                                </form>
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function () {
            $('.textarea').summernote()
        })
    </script>
@endsection
