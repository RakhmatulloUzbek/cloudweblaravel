@extends('layouts.homefontbase')

@section('title','Anasayfa')

@section('head')
@endsection

@section('content')
    <section class="p-3">
        <div class="container">
            <div class="row">
                @include('home.docs.sidebar')
                <div class="col-lg-9 pe-xl-1-9 mb-1-9 mb-lg-0 pt-5">
                    <section class="page-title-section3 md text-center" style="background-color: red">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-12">
                                    <h1 style="color: white">Pengona Yazılım Dokümanlar</h1>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('foot')
@endsection
