@extends('layouts.homefontbase')

@section('head')
@endsection

@section('content')
    <section class="full-screen cover-background p-0 bg-img" data-overlay-dark="0" data-background="{{asset('assets')}}/home/img/bg/bg2.jpg" style="background-image: url(&quot;img/bg/bg2.jpg&quot;); min-height: 273px;">
        <div class="opacity-full-dark bg-extra-dark-gray"></div>
        <div class="container d-flex flex-column">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6 mx-auto coming-soon z-index-1">
                    <div class="row">
                        <div class="col-12 mb-1-9 mb-lg-2-3">
                            <div class="border-top border-color-light-white"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alt-font display-6 display-sm-5 display-md-4 display-lg-2 text-center font-weight-700 text-uppercase d-block text-primary mb-2">Sayfa bakımda!</div>
                            <div class="border-top border-color-light-white mb-1-9 mb-lg-2-3"></div>
                            <ul class="social-icon-style6 text-center m-0 p-0">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('foot')
@endsection

