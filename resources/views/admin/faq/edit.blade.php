@extends('layouts.adminbase')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
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
                            <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="subject"
                                               value="{{$data->subject}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="question" class="col-sm-2 col-form-label">Question</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="question"
                                               value="{{$data->question}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="answer" class="col-sm-2 col-form-label">Answer</label>
                                    <div class="col-sm-8">
                                        <textarea name="answer" id="answer" class="form-control">

                                            {{ $data->answer }}

                                        </textarea>
                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#answer'))
                                                .then(editor => {
                                                    console.log(editor);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-5">
                                        <select class="form-select" name="status" aria-label="Default select example">
                                            <option selected>{{$data->status}}</option>
                                            <option value="True">True</option>
                                            <option value="False">False</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Kaydet</button> <a href="{{route('admin.faq.index')}}" role="button" class="btn btn-danger">İptal</a>
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

