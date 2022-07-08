@extends('layouts.adminbase')

@section('head')

@endsection

@section('content')
    <!-- start page inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Detay sayfası</h3>
        </div>
        <!-- start page main wrapper -->
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white">
                        <div class="card-body">
                            <a href="{{route('admin.faq.edit',['id'=>$data->id])}}" role="button" class="btn btn-primary m-b-sm">Düzenle</a>
                            <a href="{{route('admin.faq.destroy',['id'=>$data->id])}}" role="button" class="btn btn-danger m-b-sm">Sil</a>
                            <a href="{{redirect()->back()->getTargetUrl()}}" role="button" class="btn btn-success m-b-sm">Geri</a>
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%;">
                                    <tr>
                                        <th>ID</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th>
                                        <td>{{$data->subject}}</td>
                                    </tr>
                                    <tr>
                                        <th>Question</th>
                                        <td>{{$data->question}}</td>
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
                                    <tr>
                                        <th>Answer</th>
                                        <td>{!! $data->answer !!}</td>
                                    </tr>
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
