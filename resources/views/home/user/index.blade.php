@extends('layouts.homefontbase')

@section('head')
@endsection

@section('content')
    <section class="page-title-section md bg-img cover-background" data-overlay-dark="7" data-background="{{asset('assets')}}/home/img/bg/bg5.jpg" style="background-image: url(&quot;img/bg/bg5.jpg&quot;);">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1>User Panel</h1>
                </div>
                <div class="col-md-12">
                    <ul class="ps-0">
                        <li><a href="{{route('home')}}">Ana Sayfa</a></li>
                        <li><a class="active">User Panel</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="section-title mb-2">
                    <div class="widget-title">
                        <h6>Profile Information</h6><hr>
                    </div>
                </div>

                <!-- blog left -->
                <div class="col-lg-3 order-lg-1 order-md-2 pe-xl-1-9 mt-1-9 mt-lg-0">
                    <div class="side-bar">
                        <div class="widget">
                            <ul class="list-unstyled ps-0">
                                <li><a href="{{route('user.index')}}">My-Profile</a></li>
                                <li><a href="#!">My-Orders</a></li>
                                <li><a href="#!">My-Messages</a></li>
                                <li><a href="#!">Investment - 09</a></li>
                                <li><a href="#!">Development - 21</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Follow Us</h6>
                            </div>
                            <ul class="social-listing ps-0">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- end blog left -->

                <!-- blog right -->
                <div class="col-lg-9 order-lg-2 order-md-1">
                    @include('profile.show')
                </div>
                <!-- end blog right -->

            </div>
        </div>
    </section>

@endsection

@section('foot')
@endsection

