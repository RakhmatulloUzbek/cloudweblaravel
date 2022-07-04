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
                        <li><a class="active">Blank</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-light">
        <div class="container">
            <div class="section-heading">
                <h2 class="text-extra-dark-gray">Stay informed</h2>
                <p class="w-95 w-md-75 w-lg-55">Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <div class="horizontaltab tab-style8" style="display: block; width: 100%; margin: 0px;">
                        <div class="resp-tabs-container hor_1 p-0">
                            <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none;"><span class="resp-arrow"></span>Preview</h2><div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                                <div class="row">
                                    <div class="col-md-10 col-lg-8 mx-auto">
                                        <div class="text-center">
                                            <form class="newsletter-form2 w-sm-95 w-md-85 w-lg-80 mx-auto" action="" method="post" enctype="multipart/form-data" onclick="">

                                                <div class="quform-elements text-center">

                                                    <div class="row">

                                                        <!-- Begin Text input element -->
                                                        <div class="col-md-12">
                                                            <div class="quform-element form-group mb-0">
                                                                <div class="quform-input">
                                                                    <input class="form-control" id="email" type="text" name="email" placeholder="Enter Your Email Address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Text input element -->

                                                        <!-- Begin Submit button -->
                                                        <div class="col-md-12">
                                                            <div class="quform-submit-inner">
                                                                <button class="butn primary" type="submit"><span>Subscribe</span></button>
                                                            </div>
                                                            <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                        </div>
                                                        <!-- End Submit button -->

                                                    </div>

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('foot')
@endsection

