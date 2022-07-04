@extends('layouts.homefontbase')

@section('title',$title)

@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection

@section('content')
    <section class="page-title-section md bg-img cover-background" data-overlay-dark="7"
             data-background="{{asset('assets')}}/home/img/bg/bg5.jpg"
             style="background-image: url(&quot;{{asset('assets')}}/home/img/bg/bg5.jpg&quot;);">
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
            <div class="row">
                <div class="col-lg-9 pe-xl-1-9 mb-1-9 mb-lg-0">
                    <input class="form-control mb-2" id="myInput" type="text" placeholder="Search..">
                    @foreach($posts as $post)
                        <article class="blog-list-simple">
                            <div  class="row">
                                <div class="col-md-5 mb-4 mb-lg-0">
                                    <div class="blog-list-simple-img"><img alt="..."
                                                                           src="{{Storage::url($post->image)}}">
                                    </div>
                                </div>
                                <div id="myDIV" class="col-md-7">
                                    <div class="blog-list-simple-text"><span>{{$post->category->title}}</span>
                                        <h4><a href="blog-post.html">{{$post->title}}</a></h4>
                                        <ul class="meta ps-0">
                                            <li>
                                                <a href="#!">
                                                    <i aria-hidden="true" class="fa fa-user"></i> Admin
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('categoryservices',['id'=>$post->category->id])}}">
                                                    <i aria-hidden="true"
                                                       class="fa fa-folder-open"></i> {{$post->category->title}}
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <i aria-hidden="true"
                                                       class="fas fa-calendar-alt"></i> {{date_format($post->created_at,"d,M,Y")}}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('posts')}}">
                                                    <i aria-hidden="true" class="fa fa-tags"></i> Blogs
                                                </a>
                                            </li>
                                        </ul>
                                        <p>{{$post->description}}</p>
                                        <div class="text-start mt-2"><a
                                                href="{{route('data_detail',['title'=>$post->title])}}"
                                                class="butn small"><span>Read More</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                <script>
                    $(document).ready(function(){
                        $("#myInput").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                            $("#myDIV *").filter(function() {
                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                        });
                    });
                </script>
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
                                        <li class="{{$rs->title == $title ? 'active' : ''}}">
                                            <a role="button">{{$rs->title}}
                                                <i class="bi bi-caret-right-fill"></i></a>
                                            <ul class="sub-menu">
                                                @include('home.categorytree3',['children'=>$rs->children])
                                            </ul>
                                        </li>
                                    @else
                                        <li class="{{$rs->title == $title ? 'active' : ''}}">
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

                    <!-- download -->
                    <h6 class="font-weight-700 text-uppercase left-title mb-3">Downloads</h6>
                    <ul class="downloads mb-0 ps-0 list-unstyled">
                        <li class="mb-2 display-30"><a href="{{asset('assets')}}/home/img/content/profile.pdf"><i
                                    class="far fa-file-pdf display-23"></i><span class="label font-weight-600">Company Profile</span></a>
                        </li>
                        <li><a href="{{asset('assets')}}/home/img/content/profile.pdf"><i
                                    class="far fa-file-pdf display-23"></i><span class="label font-weight-600">Our Case Study</span></a>
                        </li>
                    </ul>
                    <!-- end download -->

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="section-heading">
                <h2>Hizmetler ve Ürünler</h2>
                <hr>
            </div>
            @php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
            @endphp
            <div class="row">
                <div class="col-lg-9 pe-xl-1-9 mb-1-9 mb-lg-0">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- links -->
                            <div class="filtering col-sm-12 text-center">
                                <span data-filter="*" class="active">All</span>
                                @foreach($mainCategories as $rs)
                                    @if($rs->title!='Hizmetler' and $rs->title!='Ürünler')
                                        @if(count($rs->children))
                                            @include('home.categorytree4',['children'=>$rs->children])
                                        @else
                                            <span data-filter=".{{$rs->title}}">{{$rs->title}}</span>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                            <!-- end links -->
                        </div>
                        <div class="text-center">
                            <div class="row portfolio-gallery-isotope">
                                @foreach($posts as $post)
                                    <div class="col-lg-12 col-md-6 items {{$post->category->title}}">
                                        <article class="blog-list-simple">
                                            <div class="row">
                                                <div class="col-md-5 mb-4 mb-lg-0">
                                                    <div class="blog-list-simple-img"><img alt="..."
                                                                                           src="{{Storage::url($post->image)}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="blog-list-simple-text"><span>{{$post->category->title}}</span>
                                                        <h4><a href="blog-post.html">{{$post->title}}</a></h4>
                                                        <ul class="meta ps-0">
                                                            <li>
                                                                <a href="#!">
                                                                    <i aria-hidden="true" class="fa fa-user"></i> Admin
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('categoryservices',['id'=>$post->category->id])}}">
                                                                    <i aria-hidden="true"
                                                                       class="fa fa-folder-open"></i> {{$post->category->title}}
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a>
                                                                    <i aria-hidden="true"
                                                                       class="fas fa-calendar-alt"></i> {{date_format($post->created_at,"d,M,Y")}}
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('posts')}}">
                                                                    <i aria-hidden="true" class="fa fa-tags"></i> Blogs
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <p>{{$post->description}}</p>
                                                        <div class="text-start mt-2"><a
                                                                href="{{route('data_detail',['title'=>$post->title])}}"
                                                                class="butn small"><span>Read More</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

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

                    <!-- download -->
                    <h6 class="font-weight-700 text-uppercase left-title mb-3">Downloads</h6>
                    <ul class="downloads mb-0 ps-0 list-unstyled">
                        <li class="mb-2 display-30"><a href="{{asset('assets')}}/home/img/content/profile.pdf"><i
                                    class="far fa-file-pdf display-23"></i><span class="label font-weight-600">Company Profile</span></a>
                        </li>
                        <li><a href="{{asset('assets')}}/home/img/content/profile.pdf"><i
                                    class="far fa-file-pdf display-23"></i><span class="label font-weight-600">Our Case Study</span></a>
                        </li>
                    </ul>
                    <!-- end download -->

                </div>

            </div>
        </div>
    </section>
@endsection

@section('foot')

@endsection

