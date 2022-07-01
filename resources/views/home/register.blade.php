@extends('layouts.homefontbase')

@section('head')
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-8 col-xl-7">
                    <div class="bg-white p-4 border border-width-5">
                        <div class="section-heading">
                            <h2>Yeni Hesap Oluştur</h2>
                        </div>
                        @include('home.message_info')
                        @include('auth.register')
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

@section('foot')
@endsection

