@extends('layouts.homefontbase')
@section('title',$title)

@section('head')
@endsection

@section('content')
    <section class="page-title-section md bg-img cover-background" data-overlay-dark="7"
             data-background="{{asset('assets')}}/home/img/bg/bg5.jpg"
             style="background-image: url(&quot;img/bg/bg5.jpg&quot;);">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1>{{$title}}</h1>
                </div>
                <div class="col-md-12">
                    <ul class="ps-0">
                        <li><a href="{{route('home')}}">Ana Sayfa</a></li>
                        <li><a class="active">{{$title}}</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="container">

            @php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
            @endphp
            <div class="row">
                <div class="col-lg-9 pe-xl-1-9 mb-1-9 mb-lg-0">
                    <section class="bg-light md pt-1">
                        <div class="container">
                            <div class="section-heading">
                                <h2 class="title-style2"><a href="{{route('services')}}">Ürünler</a></h2>
                            </div>
                            <div class="row mt-n4">
                                @foreach($services as $rs)
                                    @if($rs->category->title === 'Ürünler')
                                    <div class="col-lg-4 col-md-6 mt-4">
                                        <div class="services-block-three justify-content-center">
                                            <a href="{{route('data_detail',['title'=>$rs->title])}}">
                                                <div class="pb-3">
                                                    <div class="project-grid-img" ><img  style="height: 200px" alt="..."
                                                                                         src="{{Storage::url($rs->image)}}">
                                                    </div>
                                                </div>
                                                <h3 class="h5">{{$rs->title}}</h3>
                                            </a>
                                        </div>
                                    </div>
                                    @endif
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
                                @foreach($services as $rs)
                                    @if($rs->category->title === 'Hizmetler')
                                        <div class="col-lg-4 col-md-6 mt-4">
                                            <div class="services-block-three justify-content-center">
                                                <a href="{{route('data_detail',['title'=>$rs->title])}}">
                                                    <div class="pb-3">
                                                        <div class="project-grid-img" ><img  style="height: 200px" alt="..."
                                                                                             src="{{Storage::url($rs->image)}}">
                                                        </div>
                                                    </div>
                                                    <h3 class="h5">{{$rs->title}}</h3>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
{{--                <div class="bd-example mb-2">--}}
{{--                </div>--}}
                <div class="col-lg-3 order-2 order-lg-1">
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
                            <h5 class="text-white font-weight-600 mb-1 h4">Nasıl yardımcı olabiliriz?</h5>
                            <p class="text-white font-weight-500 display-30">İletişime geçin!!</p>
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
        </div>
    </section>

@endsection

@section('foot')
@endsection

