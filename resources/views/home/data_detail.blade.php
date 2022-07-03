@extends('layouts.homefontbase')

@section('head')
@endsection

@section('content')
    <section class="page-title-section md bg-img cover-background" data-overlay-dark="7"
             data-background="{{asset('assets')}}/home/img/bg/bg5.jpg"
             style="background-image: url(&quot;img/bg/bg5.jpg&quot;);">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1>Detay Sayfa</h1>
                </div>
                <div class="col-md-12">
                    <ul class="ps-0">
                        @if($data)
                            <li><a href="{{route('home')}}">Ana Sayfa</a></li>
                            <li>
                                <a href="{{route('categoryservices',['id'=>$data->category->id])}}">{{$data->category->title}}</a>
                            </li>
                            <li><a class="active">{{$data->title}}</a></li>
                        @else
                            <li><a href="{{route('home')}}">Ana Sayfa</a></li>
                            <li><a class="active">Veri Bulunamadı</a></li>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="blogs">
        <div class="container">
            <div class="row">

                <!--  start blog left-->

                <div class="col-lg-9 pe-xl-1-9 mb-1-9 mb-lg-0">
                    <div class="posts">
                        <div class="post">
                            @if($data)
                                <div class="post-img">
                                    <div class="mb-1-8">
                                        <div class="owl-carousel owl-theme owl-loaded owl-drag">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage"
                                                     style="transform: translate3d(-2268px, 0px, 0px); transition: all 0.5s ease 0s; width: 5292px;">
                                                    <div class="owl-item cloned" style="width: 756px;">
                                                        <div class="item"><img src="{{Storage::url($data->image)}}"
                                                                               alt="..."></div>
                                                    </div>
                                                    @foreach($images as $image)
                                                        <div class="owl-item" style="width: 756px;">
                                                            <div class="item"><img
                                                                    src="{{Storage::url($image->image)}}" alt="">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="owl-nav disabled">
                                                <button type="button" role="presentation" class="owl-prev"><span
                                                        aria-label="Previous">‹</span></button>
                                                <button type="button" role="presentation" class="owl-next"><span
                                                        aria-label="Next">›</span></button>
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="post-meta">
                                        <div class="post-title">
                                            <h2>{{$data->title}}</h2>
                                        </div>
                                        <ul class="meta ps-0">
                                            <li>
                                                <a href="#!">
                                                    <i class="fa fa-user" aria-hidden="true"></i> Admin
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('categoryservices',['id'=>$data->category->id])}}">
                                                    <i class="fa fa-folder-open"
                                                       aria-hidden="true"></i> {{$data->category->title}}
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <i class="fas fa-calendar-alt"
                                                       aria-hidden="true"></i> {{date_format($data->created_at,"d/M/Y")}}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('posts')}}">
                                                    <i class="fa fa-tags" aria-hidden="true"></i> Blogs
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-cont">
                                        <p>{!! $data->detail !!}</p>
                                    </div>
                                    <div class="share-post">
                                        <span>Share Post</span>
                                        <ul class="ps-0 mb-0">
                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>

                <!-- end blog left -->

                <!-- blog right -->
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
                                    <li><a href="{{route('data_detail',['id'=>$post->id])}}">{{$post->title}}!</a>
                                    </li>
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
            </div>
        </div>
    </section>

@endsection
@section('foot')
@endsection

