@extends('layouts.homefontbase')
@section('title','Ürünler')

@section('head')
@endsection

@section('content')
    <section class="page-title-section md bg-img cover-background" data-overlay-dark="7"
             data-background="{{asset('assets')}}/home/img/bg/bg5.jpg"
             style="background-image: url(&quot;img/bg/bg5.jpg&quot;);">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1>Blank Page</h1>
                </div>
                <div class="col-md-12">
                    <ul class="ps-0">
                        <li><a href="{{route('home')}}">Ana Sayfa</a></li>
                        <li><a class="active">Blank</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section class="md">
        <div class="container">
            <div class="section-heading">
                <h2>What We Offer</h2>
                <p class="w-95 w-md-75 w-lg-55 mx-auto">Business consulting excepteur sint occaecat cupidatat consulting
                    non proident, sunt in culpa qui officia deserunt laborum Market.</p>
            </div>
            <div class="owl-carousel owl-theme owl-loaded owl-drag" id="services-carousel">


                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transform: translate3d(-1296px, 0px, 0px); transition: all 0s ease 0s; width: 4320px;">
                        <div class="owl-item cloned" style="width: 432px;">
                            <div class="service-box">
                                <div class="{{asset('assets')}}/home/img-holder"><img alt="..."
                                                                                      src="{{asset('assets')}}/home/img/content/services/service-2b.jpg">
                                </div>
                                <div class="clearfix service-inner-box">
                                    <div class="service-icon-box"><i class="ti-image"></i></div>
                                    <div class="service-content-box">
                                        <h3><a href="#!">Finance Consultancy</a></h3>
                                        <p>We provide best and solid solution for your impressive international business
                                            consultant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 432px;">
                            <div class="service-box">
                                <div class="{{asset('assets')}}/home/img-holder"><img alt="..."
                                                                                      src="{{asset('assets')}}/home/img/content/services/service-3b.jpg">
                                </div>
                                <div class="clearfix service-inner-box">
                                    <div class="service-icon-box"><i class="ti-panel"></i></div>
                                    <div class="service-content-box">
                                        <h3><a href="#!">Investment Plan</a></h3>
                                        <p>We provide best and solid solution for your impressive international business
                                            consultant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 432px;">
                            <div class="service-box">
                                <div class="{{asset('assets')}}/home/img-holder"><img alt="..."
                                                                                      src="{{asset('assets')}}/home/img/content/services/service-4b.jpg">
                                </div>
                                <div class="clearfix service-inner-box">
                                    <div class="service-icon-box"><i class="ti-world"></i></div>
                                    <div class="service-content-box">
                                        <h3><a href="#!">Finance Advisor</a></h3>
                                        <p>We provide best and solid solution for your impressive international business
                                            consultant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 432px;">
                            <div class="service-box">
                                <div class="{{asset('assets')}}/home/img-holder"><img alt="..."
                                                                                      src="{{asset('assets')}}/home/img/content/services/service-1b.jpg">
                                </div>
                                <div class="clearfix service-inner-box">
                                    <div class="service-icon-box"><i class="ti-blackboard"></i></div>
                                    <div class="service-content-box">
                                        <h3><a href="#!">Business Solutions</a></h3>
                                        <p>We provide best and solid solution for your impressive international business
                                            consultant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 432px;">
                            <div class="service-box">
                                <div class="{{asset('assets')}}/home/img-holder"><img alt="..."
                                                                                      src="{{asset('assets')}}/home/img/content/services/service-2b.jpg">
                                </div>
                                <div class="clearfix service-inner-box">
                                    <div class="service-icon-box"><i class="ti-image"></i></div>
                                    <div class="service-content-box">
                                        <h3><a href="#!">Finance Consultancy</a></h3>
                                        <p>We provide best and solid solution for your impressive international business
                                            consultant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 432px;">
                            <div class="service-box">
                                <div class="{{asset('assets')}}/home/img-holder"><img alt="..."
                                                                                      src="{{asset('assets')}}/home/img/content/services/service-3b.jpg">
                                </div>
                                <div class="clearfix service-inner-box">
                                    <div class="service-icon-box"><i class="ti-panel"></i></div>
                                    <div class="service-content-box">
                                        <h3><a href="#!">Investment Plan</a></h3>
                                        <p>We provide best and solid solution for your impressive international business
                                            consultant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 432px;">
                            <div class="service-box">
                                <div class="{{asset('assets')}}/home/img-holder"><img alt="..."
                                                                                      src="{{asset('assets')}}/home/img/content/services/service-4b.jpg">
                                </div>
                                <div class="clearfix service-inner-box">
                                    <div class="service-icon-box"><i class="ti-world"></i></div>
                                    <div class="service-content-box">
                                        <h3><a href="#!">Finance Advisor</a></h3>
                                        <p>We provide best and solid solution for your impressive international business
                                            consultant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 432px;">
                            <div class="service-box">
                                <div class="{{asset('assets')}}/home/img-holder"><img alt="..."
                                                                                      src="{{asset('assets')}}/home/img/content/services/service-1b.jpg">
                                </div>
                                <div class="clearfix service-inner-box">
                                    <div class="service-icon-box"><i class="ti-blackboard"></i></div>
                                    <div class="service-content-box">
                                        <h3><a href="#!">Business Solutions</a></h3>
                                        <p>We provide best and solid solution for your impressive international business
                                            consultant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 432px;">
                            <div class="service-box">
                                <div class="{{asset('assets')}}/home/img-holder"><img alt="..."
                                                                                      src="{{asset('assets')}}/home/img/content/services/service-2b.jpg">
                                </div>
                                <div class="clearfix service-inner-box">
                                    <div class="service-icon-box"><i class="ti-image"></i></div>
                                    <div class="service-content-box">
                                        <h3><a href="#!">Finance Consultancy</a></h3>
                                        <p>We provide best and solid solution for your impressive international business
                                            consultant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 432px;">
                            <div class="service-box">
                                <div class="{{asset('assets')}}/home/img-holder"><img alt="..."
                                                                                      src="{{asset('assets')}}/home/img/content/services/service-3b.jpg">
                                </div>
                                <div class="clearfix service-inner-box">
                                    <div class="service-icon-box"><i class="ti-panel"></i></div>
                                    <div class="service-content-box">
                                        <h3><a href="#!">Investment Plan</a></h3>
                                        <p>We provide best and solid solution for your impressive international business
                                            consultant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </section>
    <section class="parallax md" data-overlay-dark="8" data-background="{{asset('assets')}}/home/img/bg/bg5.jpg"
             style="background-image: url(&quot;img/bg/bg5.jpg&quot;);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-heading left white">
                        <h4 class="text-white h3 mb-0">Get to know us better !</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row mt-n1-9">
                        <div class="col-sm-4 mt-1-9">
                            <div class="counter-box">
                                <h4 class="countup text-white d-block">1530</h4>
                                <div
                                    class="separator-line-horrizontal-medium-light3 bg-white my-3 opacity5 mx-auto"></div>
                                <p class="lead font-weight-600 text-white m-0 text-center">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-1-9">
                            <div class="counter-box">
                                <h4 class="countup text-white d-block">1010</h4>
                                <div
                                    class="separator-line-horrizontal-medium-light3 bg-white my-3 opacity5 mx-auto"></div>
                                <p class="lead font-weight-600 text-white m-0 text-center">Projects Finished</p>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-1-9">
                            <div class="counter-box">
                                <h4 class="countup text-white d-block">590</h4>
                                <div
                                    class="separator-line-horrizontal-medium-light3 bg-white my-3 opacity5 mx-auto"></div>
                                <p class="lead font-weight-600 text-white m-0 text-center">Award Winner</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-grey md" style="background: url({{asset('assets')}}/home/img/bg/bg6.jpg)">
        <div class="container">
            <div class="section-heading">
                <h2>What Our Client Say</h2>
            </div>
            <div class="owl-carousel owl-theme owl-loaded owl-drag" id="testmonials-carousel">


                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3888px;">
                        <div class="owl-item active" style="width: 1296px;">
                            <div class="testmonial-single mx-auto w-95 w-lg-65">
                                <p class="display-30 mb-3">Exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa.</p>
                                <img src="{{asset('assets')}}/home/img/testmonials/t-1.jpg" class="rounded-circle"
                                     alt="...">
                                <h4 class="pt-1">Alivin Corondo</h4>
                                <h6 class="mb-1-9">Networking Lead</h6>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1296px;">
                            <div class="testmonial-single mx-auto w-95 w-lg-65">
                                <p class="display-30 mb-3">Exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa.</p>
                                <img src="{{asset('assets')}}/home/img/testmonials/t-2.jpg" class="rounded-circle"
                                     alt="...">
                                <h4 class="pt-1">Stepha Kruse</h4>
                                <h6 class="mb-1-9">Design Lead</h6>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 1296px;">
                            <div class="testmonial-single mx-auto w-95 w-lg-65">
                                <p class="display-30 mb-3">Exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa.</p>
                                <img src="{{asset('assets')}}/home/img/testmonials/t-3.jpg" class="rounded-circle"
                                     alt="...">
                                <h4 class="pt-1">Dunican keithly</h4>
                                <h6 class="mb-1-9">Networking Lead</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </section>

@endsection

@section('foot')
@endsection

