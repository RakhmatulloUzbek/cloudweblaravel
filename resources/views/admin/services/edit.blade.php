@extends('layouts.adminbase')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <!-- common plugins -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/icomoon/style.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/uniform/css/default.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/switchery/switchery.min.css"/>

    <!-- datatables plugin -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/datatables/css/jquery.datatables.min.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/datatables/css/jquery.datatables_themeroller.css"/>

    <!-- bootstrap-datepicker plugin -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/bootstrap-datepicker/css/datepicker.css"/>

    <!-- theme core css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/styles.css"/>
    @include('admin.top_scripts')
@endsection
@section('content')

    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Güncelleme</h3>
        </div>
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">
                            <form role="form" action="{{route('admin.services.update',['id'=>$data->id])}}"
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <label class="col-sm-2 col-form-label">Category</label>
                                        <div class="col-sm-5">
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
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="title"
                                                   value="{{$data->title}}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="keyword"
                                                   value="{{$data->keyword}}">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-5">
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
                                        <div class="col-sm-5">
                                            <select class="form-select" name="status"
                                                    aria-label="Default select example">
                                                <option selected>{{$data->status}}</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function () {
            $('.textarea').summernote()
        })
    </script>
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

