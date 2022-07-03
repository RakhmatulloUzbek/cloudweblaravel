@extends('layouts.homefontbase')

@section('head')
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-7 col-xl-6">
                    <div class="bg-white p-4 border border-width-5">
                        <div class="text-center section-heading">
                            <h2>Giriş</h2>
                        </div>
                       @include('auth.login')
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('foot')
@endsection

