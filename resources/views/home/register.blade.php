@extends('layouts.homefontbase')

@section('head')
@endsection

@section('content')
    <section class="page-title-section md bg-img cover-background" data-overlay-dark="7" data-background="{{asset('assets')}}/home/img/bg/bg5.jpg" style="background-image: url(&quot;img/bg/bg5.jpg&quot;);">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1>Blank Page</h1>
                </div>
                <div class="col-md-12">
                    <ul class="ps-0">
                        <li><a href="{{route('home')}}">Ana Sayfa</a></li>
                        <li><a class="active">Yeni Hesap Oluşturma</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-8 col-xl-7">
                    <div class="bg-white p-4 border border-width-5">
                        <div class="section-heading">
                            <h2>Yeni Hesap Oluştur</h2>

                        </div>

                        @include('auth.register')

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

@section('foot')
@endsection

