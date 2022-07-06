@extends('layouts.homefontbase')
@section('title','Hakkımızda | Pengona Yazılım')

@section('head')
@endsection

@section('content')
    <section class="page-title-section md bg-img cover-background" data-overlay-dark="7" data-background="{{asset('assets')}}/home/img/bg/bg5.jpg" style="background-image: url(&quot;img/bg/bg5.jpg&quot;);">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1>Hakkımızda</h1>
                </div>
                <div class="col-md-12">
                    <ul class="ps-0">
                        <li><a href="{{route('home')}}">Anasayfa</a></li>
                        <li><a class="active">Hakkımızda</a></li>
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
            <div class="row">
                <div class="col-lg-9 pe-xl-1-9 mb-1-9 mb-lg-0">
                    <div class="section-heading">
                        <h1>PENGONA YAZILIM </h1>
                    </div>
                        <article class="blog-list-simple">
                            {!! $settings->aboutus !!}
                        </article>
                </div>
                <div class="col-lg-3 order-2 order-lg-1">
                    @php
                        $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
                    @endphp
                    <div class="services-single-left-box">
                        <h2 class="text-uppercase left-title mb-3 h4">Kategoriler</h2>
                        <div class="services-single-menu bg-light mb-1-9">
                            <ul class="mb-0 ps-0 list-unstyled">
                                @foreach($mainCategories as $rs)
                                    @if(count($rs->children))
                                        <li>
                                            <a role="button">{{$rs->title}}
                                                <i class="bi bi-caret-right-fill"></i></a>
                                            <ul class="sub-menu">
                                                @include('home.categorytree3',['children'=>$rs->children])
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
                    </div>
                    @php
                        $recentPosts = \App\Http\Controllers\HomeController::recentpostslist();
                    @endphp
                    <div class="services-single-left-box">
                        <h2 class="text-uppercase left-title mb-3 h4">Son Haberler</h2>
                        <div class="services-single-menu bg-light mb-1-9">
                            <ul class="mb-0 ps-0 list-unstyled">
                                @foreach($recentPosts as $rs)
                                    <li><a href="#!">{{$rs->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- end services -->

                    <!-- help -->
                    <div class="bg-img cover-background theme-overlay border-radius-5 mb-1-9" data-overlay-dark="8"
                         data-background="{{asset('assets')}}/home/img/bg/bg2.jpg"
                         style="background-image: url(&quot;img/bg/bg2.jpg&quot;);">
                        <div class="position-relative z-index-9 text-center px-1-9 py-1-9 py-lg-6">
                            <i class="fas fa-headset display-20 dispaly-md-16 display-lg-10 text-white mb-3"></i>
                            <h5 class="text-white font-weight-600 mb-1 h4">How can we help?</h5>
                            <p class="text-white font-weight-500 display-30">Let’s get in touch!!</p>
                            <div class="bg-white separator-line-horrizontal-full opacity3 mb-3"></div>
                            <ul class="text-center p-0 m-0 list-unstyled">
                                <li class="text-white mb-1"><i class="fa fa-phone text-white me-2"></i><a
                                        href="tel:123456789" class="text-white">(+44) 123 456 789</a></li>
                                <li class="text-white"><i class="fa fa-envelope-open text-white me-2"></i><a
                                        href="mailto:mail@example.com" class="text-white">mail@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end help -->

                </div>

            </div>
            <div class="row">
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

