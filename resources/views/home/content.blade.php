<!-- SERVICES
        ================================================== -->
<section class="bg-light md">
    <div class="container">
        <div class="section-heading">
            <h2 class="title-style2"><a href="">Ürünler</a></h2>
        </div>
        <div class="row mt-n4">
            @foreach($urunler as $urun)
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="services-block-three justify-content-center">
                        <a href="{{route('data_detail',['title'=>$urun->title])}}">
                            <div class="pb-3">
                                <div class="project-grid-img"><img style="height: 250px" alt="..."
                                                                   src="{{Storage::url($urun->image)}}">
                                </div>
                            </div>

                            <h3 class="h5">{{$urun->title}}</h3>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="bg-light md pt-1">
    <div class="container">
        <div class="section-heading">
            <h2 class="title-style2"><a href="{{route('services')}}">Hizmetler</a></h2>
        </div>
        <div class="row mt-n4">
            @foreach($hizmetler as $hizmet)
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="services-block-three justify-content-center">
                        <a href="{{route('data_detail',['title'=>$hizmet->title])}}">
                            <div class="pb-3">
                                <div class="project-grid-img"><img style="height: 250px" alt="..."
                                                                   src="{{Storage::url($hizmet->image)}}">
                                </div>
                            </div>
                            <h3 class="h5">{{$hizmet->title}}</h3>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ABOUT
================================================== -->
{{--<section class="bg-light md">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-lg-5 mb-4 mb-lg-0">--}}
{{--                <img src="{{asset('assets')}}/home/img/content/feature-01.jpg" alt="..." class="border-radius-5 box-shadow-primary">--}}
{{--            </div>--}}

{{--            <div class="col-lg-7">--}}

{{--                <div class="ps-lg-1-9">--}}
{{--                    <h4 class="h3 mb-4">Febrex is the most creative template for your multipurpose use.</h4>--}}
{{--                    <p>Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudantium, totam aperiam, eaque ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>--}}

{{--                    <ul class="list-style-3">--}}
{{--                        <li>Marketing business plan</li>--}}
{{--                        <li>Advice business plan</li>--}}
{{--                        <li>Strategic business plan</li>--}}
{{--                        <li>Analize business plan</li>--}}
{{--                        <li>Consulting business plan</li>--}}
{{--                    </ul>--}}
{{--                    <a class="butn primary mt-2" href="#!"><span>Tamamını Oku</span></a>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section class="md">
    <div class="container">
        <div class="section-heading">
            <h2>Son Haberler</h2>
        </div>
        <div class="text-center">
            <div class="row">
                @foreach($postlar as $post)
                    <div class="col-lg-3 col-md-6 items">
                        <div class="project-grid">
                            <div class="project-grid-img"><img alt="..." src="{{Storage::url($post->image)}}">
                            </div>
                            <div class="project-grid-overlay">
                                <div class="w-100">
                                    <h4><a href="{{route('data_detail',['title'=>$post->title])}}">{{$post->title}}</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="project-grid">
                            <h6>{{$post->category->title}}</h6>
                            <p class="card-text">{{ Str::words($post->description, 5,'...')}}.</p>
                            <a href="{{route('data_detail',['title'=>$post->title])}}" class="butn small"><span>Tamamını oku..</span></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>


{{--@php--}}
{{--    $recentPosts = \App\Http\Controllers\HomeController::recentpostslist();--}}
{{--@endphp--}}
{{--<section class="md">--}}
{{--    <div class="container">--}}
{{--        <div class="section-heading">--}}
{{--            <h2>Son Haberlerimizi Okuyun</h2>--}}
{{--            <p class="w-95 w-md-75 w-lg-55">Business consectetur adipisicing elit eiusmod tempor incididunt ut labore et dolore magna aliqua quis nostrud exercitation consequat.</p>--}}
{{--        </div>--}}
{{--        <div class="row mt-n4">--}}
{{--            @foreach($recentPosts as $post)--}}
{{--                <div class="col-md-6 col-lg-3 mt-4">--}}
{{--                    <article class="card card-style1">--}}
{{--                        <div class="card-img"><img alt="..." src="{{Storage::url($post->image)}}">--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h3 class="display-29 mb-1"><a href="{{route('data_detail',['title'=>$post->title])}}">{{$post->title}}</a></h3>--}}
{{--                            <span><a href="{{route('categoryservices',['id'=>$post->category->id])}}">{{$post->category->title}}</a></span>--}}
{{--                            <div class="card-date">--}}
{{--                                {{date_format($post->created_at,"d/M/Y")}}--}}
{{--                            </div>--}}
{{--                            <p class="m-0 card-text">{{$post->description}}</p>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<!-- COUNTER
================================================== -->
<section class="parallax md" data-overlay-dark="8" data-background="{{asset('assets')}}/home/img/bg/bg5.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="section-heading left white">
                    <h4 class="text-white h3 mb-0">Bizi daha iyi tanıyın!</h4>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row mt-n4">
                    <div class="col-sm-4 mt-4">
                        <div class="counter-box">
                            <h4 class="countup text-white d-block">1530</h4>
                            <div class="separator-line-horrizontal-medium-light3 bg-white my-3 opacity5 mx-auto"></div>
                            <p class="lead font-weight-600 text-white m-0 text-center">Mutlu Müşteriler</p>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-4">
                        <div class="counter-box">
                            <h4 class="countup text-white d-block">1010</h4>
                            <div class="separator-line-horrizontal-medium-light3 bg-white my-3 opacity5 mx-auto"></div>
                            <p class="lead font-weight-600 text-white m-0 text-center">Biten Projeler</p>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-4">
                        <div class="counter-box">
                            <h4 class="countup text-white d-block">590</h4>
                            <div class="separator-line-horrizontal-medium-light3 bg-white my-3 opacity5 mx-auto"></div>
                            <p class="lead font-weight-600 text-white m-0 text-center">Ödül Kazanan</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM
================================================== -->
<section class="md">
    <div class="container">
        <div class="section-heading">
            <h2>Ekibimiz</h2>
        </div>
        <div class="row mt-n1-9">

            <!-- team member -->
            <div class="col-md-6 col-lg-3 mt-1-9 text-center">
                <div class="team-style1">
                    <div class="team-member-img">
                        <img class="{{asset('assets')}}/home/img-responsive"
                             src="{{asset('assets')}}/home/img/team/teammember-01.jpg" alt="...">
                    </div>
                    <div class="text-center mt-4 mb-3 pb-3 border-bottom">
                        <div class="text-extra-dark-gray font-weight-600 text-uppercase alt-font">Jamara Karle</div>
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
            <div class="col-md-6 col-lg-3 mt-1-9 text-center">
                <div class="team-style1">
                    <div class="team-member-img">
                        <img class="{{asset('assets')}}/home/img-responsive"
                             src="{{asset('assets')}}/home/img/team/teammember-02.jpg" alt="...">
                    </div>
                    <div class="text-center mt-4 mb-3 pb-3 border-bottom">
                        <div class="text-extra-dark-gray font-weight-600 text-uppercase alt-font">Keir Prestonly</div>
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
            <div class="col-md-6 col-lg-3 mt-1-9 text-center">
                <div class="team-style1">
                    <div class="team-member-img">
                        <img class="{{asset('assets')}}/home/img-responsive"
                             src="{{asset('assets')}}/home/img/team/teammember-03.jpg" alt="...">
                    </div>
                    <div class="text-center mt-4 mb-3 pb-3 border-bottom">
                        <div class="text-extra-dark-gray font-weight-600 text-uppercase alt-font">Finley Walkeror</div>
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
            <div class="col-md-6 col-lg-3 mt-1-9 text-center">
                <div class="team-style1">
                    <div class="team-member-img">
                        <img class="{{asset('assets')}}/home/img-responsive"
                             src="{{asset('assets')}}/home/img/team/teammember-04.jpg" alt="...">
                    </div>
                    <div class="text-center mt-4 mb-3 pb-3 border-bottom">
                        <div class="text-extra-dark-gray font-weight-600 text-uppercase alt-font">Niamah Hower</div>
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

{{--<!-- TESTIMONIAL--}}
{{--================================================== -->--}}
{{--<section class="bg-grey md" style="background: url(img/bg/bg6.jpg)">--}}
{{--    <div class="container">--}}
{{--        <div class="section-heading">--}}
{{--            <h2>What Our Client Say</h2>--}}
{{--        </div>--}}
{{--        <div class="owl-carousel owl-theme" id="testmonials-carousel">--}}
{{--            <div class="testmonial-single mx-auto w-95 w-lg-65">--}}
{{--                <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>--}}
{{--                <h4 class="pt-3 pt-md-4">Alivin Corondo</h4>--}}
{{--                <h6 class="mb-1-9">Networking Lead</h6>--}}
{{--            </div>--}}
{{--            <div class="testmonial-single mx-auto w-95 w-lg-65">--}}
{{--                <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>--}}
{{--                <h4 class="pt-3 pt-md-4">Stepha Kruse</h4>--}}
{{--                <h6 class="mb-1-9">Design Lead</h6>--}}
{{--            </div>--}}
{{--            <div class="testmonial-single mx-auto w-95 w-lg-65">--}}
{{--                <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>--}}
{{--                <h4 class="pt-3 pt-md-4">Dunican keithly</h4>--}}
{{--                <h6 class="mb-1-9">Networking Lead</h6>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<!-- BLOG
================================================== -->

<!-- CLIENTS
================================================== -->
<div class="section-clients bg-light">
    <div class="container">
        <div class="owl-carousel owl-theme clients" id="clients">
            <div class="item"><img alt="..." src="{{asset('assets')}}/home/img/partners/client-01.png"></div>
            <div class="item"><img alt="..." src="{{asset('assets')}}/home/img/partners/client-02.png"></div>
            <div class="item"><img alt="..." src="{{asset('assets')}}/home/img/partners/client-03.png"></div>
            <div class="item"><img alt="..." src="{{asset('assets')}}/home/img/partners/client-04.png"></div>
            <div class="item"><img alt="..." src="{{asset('assets')}}/home/img/partners/client-05.png"></div>
            <div class="item"><img alt="..." src="{{asset('assets')}}/home/img/partners/client-06.png"></div>
        </div>
    </div>
</div>
