@extends('layouts.homefontbase')
@section('title','Hakkımızda | Mikro Yazılım')

@section('head')
@endsection

@section('content')
    <section class="page-title-section md bg-img cover-background" data-overlay-dark="7" data-background="{{asset('assets')}}/home/img/bg/bg5.jpg" style="background-image: url(&quot;img/bg/bg5.jpg&quot;);">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                </div>
                <div class="col-md-12">
                    <ul class="ps-0">
                        <li><a href="home-default.html">Home</a></li>
                        <li><a href="#!">About Us</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT US
    ================================================== -->
    <section class="md pb-5">

        <div class="container">
            @php
                $settings = \App\Http\Controllers\HomeController::getsettings();
            @endphp
            <div class="section-heading">
                <h2>Hakkımızda</h2>
            </div>

            <div class="row">
                <div class="col-lg-9 pe-xl-1-9 mb-1-9 mb-lg-0">
                    <div class="section-heading">
                        <h1>MİKRO YAZILIM </h1>
                    </div>
                        <article class="blog-list-simple">
                            {!! $settings->aboutus !!}
                        </article>
                </div>
                <div class="col-lg-3">
                    <div class="side-bar">
                        @php
                            $recentPosts = \App\Http\Controllers\HomeController::recentpostslist();
                        @endphp
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Recent Posts</h6>
                            </div>
                            <ul class="list-unstyled ps-0">
                                @foreach($recentPosts as $post)
                                    <li><a href="{{route('post_detail',['id'=>$post->id])}}">{{$post->title}}!</a></li>
                                @endforeach
                            </ul>
                        </div>
                        @php
                            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
                        @endphp
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Categories</h6>
                            </div>
                            <ul class="list-unstyled ps-0">
                                @foreach($mainCategories as $rs)
                                    @if(count($rs->children))
                                        <li>
                                            <a href="{{route('categoryservices',['id'=>$rs->id])}}">{{$rs->title}}</a>
                                            <ul class="list-unstyled ps-0">
                                                @include('home.categorytree2',['children'=>$rs->children])
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{route('categoryservices',['id'=>$rs->id])}}">{{$rs->title}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <hr>
                    </div>
                </div>

                <!-- item-->
                <div class="col-md-4">
                    <div class="feature-box-07">
                        <div class="{{asset('assets')}}/home/img-box"><img
                                src="{{asset('assets')}}/home/img/content/services/service-2b.jpg" alt="..."></div>
                        <div class="feature-textbox p-2-2 text-center bg-light-gray">
                            <h4 class="title mb-2">Who We Are</h4>
                            <p class="feature-desc">We help you to grow up your best business and solution for your
                                impressive projects.</p>
                            <a class="read-more" href="#!"><i class="fa fa-play-circle"></i> read more</a>

                        </div>
                    </div>
                </div>
                <!--end item-->

                <!-- item-->
                <div class="col-md-4">
                    <div class="feature-box-07">
                        <div class="{{asset('assets')}}/home/img-box"><img
                                src="{{asset('assets')}}/home/img/content/services/service-4b.jpg" alt="..."></div>
                        <div class="feature-textbox p-2-2 text-center bg-light-gray">
                            <h4 class="title mb-2">What We Do</h4>
                            <p class="feature-desc">We help you to grow up your best business and solution for your
                                impressive projects.</p>
                            <a class="read-more" href="#!"><i class="fa fa-play-circle"></i> read more</a>

                        </div>
                    </div>
                </div>
                <!--end item-->

                <!-- item-->
                <div class="col-md-4">
                    <div class="feature-box-07">
                        <div class="{{asset('assets')}}/home/img-box"><img
                                src="{{asset('assets')}}/home/img/content/services/service-3b.jpg" alt="..."></div>
                        <div class="feature-textbox p-2-2 text-center bg-light-gray">
                            <h4 class="title mb-2">Our Success</h4>
                            <p class="feature-desc">We help you to grow up your best business and solution for your
                                impressive projects.</p>
                            <a class="read-more" href="#!"><i class="fa fa-play-circle"></i> read more</a>

                        </div>
                    </div>
                </div>
                <!--end item-->

            </div>

        </div>
    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="parallax about-area p-0" data-overlay-dark="8"
             data-background="{{asset('assets')}}/home/img/bg/bg3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-heading left white">
                            <h4>Welcome To Our Consulting</h4>
                        </div>
                        <div class="inner-content">
                            <h2><span>“ Pride of the Business For Over a Hundred Years." </span>
                                for public &amp; private clients.</h2>
                            <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore eritatis architecto
                                beatae sunt explicabo</p>
                            <div class="bottom">
                                <p class="thm-clr">Founder: Keir Prestonly</p>
                                <div class="signature">
                                    <img alt="Signature" src="{{asset('assets')}}/home/img/content/signature.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right-box">
                        <ul class="ps-0">
                            <li>
                                <div class="left-content float-start">
                                    <div class="icon"><span class="ti-cloud-up"></span></div>
                                    <div class="title">
                                        <h3>Projects</h3>
                                        <span>By Our Experienced Team</span>
                                    </div>
                                </div>
                                <div class="right-content float-end">
                                    <div class="title">
                                        <h4 class="countup">326</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-content float-start">
                                    <div class="icon"><span class="ti-user"></span></div>
                                    <div class="title">
                                        <h3>Happy Clients</h3>
                                        <span>Smart and Hard Workers</span>
                                    </div>
                                </div>
                                <div class="right-content float-end">
                                    <div class="title">
                                        <h4 class="countup">89</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-content float-start">
                                    <div class="icon"><span class="ti-vector"></span></div>
                                    <div class="title">
                                        <h3>Projects Finished</h3>
                                        <span>We Provides All Industry Services</span>
                                    </div>
                                </div>
                                <div class="right-content float-end">
                                    <div class="title">
                                        <h4 class="countup">15</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-content float-start">
                                    <div class="icon"><span class="ti-cup"></span></div>
                                    <div class="title">
                                        <h3>Business Solutions</h3>
                                        <span>Most Trusted Company By Experts</span>
                                    </div>
                                </div>
                                <div class="right-content float-end">
                                    <div class="title">
                                        <h4 class="countup">574</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT OUR MISSION
    ================================================== -->
    <section class="md">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="pe-lg-1-9">
                        <h3 class="font-weight-600 mb-1-9">Our mission is to deliver growth to your business</h3>
                        <h5 class="font-weight-700 h6">Planning Strategies</h5>
                        <p class="w-95">Excepteur integration aute irure design in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.</p>
                        <h5 class="font-weight-700 h6">Successful Marketing</h5>
                        <p class="w-95 m-0">Duis Integration aute irure design in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <canvas id="chBar" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM
    ================================================== -->
    <section class="bg-light md">
        <div class="container">
            <div class="section-heading">
                <h2>Our Team</h2>
            </div>
            <div class="row mt-n1-9">

                <!-- team member -->
                <div class="col-lg-3 col-md-6 mt-1-9 text-center">
                    <div class="team-style1">
                        <div class="team-member-img">
                            <img class="{{asset('assets')}}/home/img-responsive"
                                 src="{{asset('assets')}}/home/img/team/teammember-01.jpg" alt="...">
                        </div>
                        <div class="text-center mt-4 mb-3 pb-3 border-bottom">
                            <div class="font-weight-600 text-uppercase alt-font">Jamara Karle</div>
                            <div class="text-uppercase">Founder</div>
                        </div>
                        <ul class="social-icon-style3 ps-0">
                            <li>
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end team member -->

                <!-- team member -->
                <div class="col-lg-3 col-md-6 mt-1-9 text-center">
                    <div class="team-style1">
                        <div class="team-member-img">
                            <img class="{{asset('assets')}}/home/img-responsive"
                                 src="{{asset('assets')}}/home/img/team/teammember-02.jpg" alt="...">
                        </div>
                        <div class="text-center mt-4 mb-3 pb-3 border-bottom">
                            <div class="font-weight-600 text-uppercase alt-font">Keir Prestonly</div>
                            <div class="text-uppercase">Co-Founder</div>
                        </div>
                        <ul class="social-icon-style3 ps-0">
                            <li>
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end team member -->

                <!-- team member -->
                <div class="col-lg-3 col-md-6 mt-1-9 text-center">
                    <div class="team-style1">
                        <div class="team-member-img">
                            <img class="{{asset('assets')}}/home/img-responsive"
                                 src="{{asset('assets')}}/home/img/team/teammember-03.jpg" alt="...">
                        </div>
                        <div class="text-center mt-4 mb-3 pb-3 border-bottom">
                            <div class="font-weight-600 text-uppercase alt-font">Finley Walkeror</div>
                            <div class="text-uppercase">Developer</div>
                        </div>
                        <ul class="social-icon-style3 ps-0">
                            <li>
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end team member -->

                <!-- team member -->
                <div class="col-lg-3 col-md-6 mt-1-9 text-center">
                    <div class="team-style1">
                        <div class="team-member-img">
                            <img class="{{asset('assets')}}/home/img-responsive"
                                 src="{{asset('assets')}}/home/img/team/teammember-04.jpg" alt="...">
                        </div>
                        <div class="text-center mt-4 mb-3 pb-3 border-bottom">
                            <div class="font-weight-600 text-uppercase alt-font">Niamah Hower</div>
                            <div class="text-uppercase">Designer</div>
                        </div>
                        <ul class="social-icon-style3 ps-0">
                            <li>
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end team member -->

            </div>
        </div>
    </section>

@endsection

@section('foot')
@endsection

