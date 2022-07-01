@extends('layouts.homefontbase')

@section('title','Postlar')

@section('head')
@endsection

@section('content')
    <section class="page-title-section md bg-img cover-background" data-overlay-dark="7"
             data-background="{{asset('assets')}}/home/img/bg/bg5.jpg"
             style="background-image: url(&quot;{{asset('assets')}}/home/img/bg/bg5.jpg&quot;);">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1>Postlar</h1>
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
                    @foreach($posts as $post)
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
                                                href="{{route('post_detail',['id'=>$post->id])}}"
                                                class="butn small"><span>Read More</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
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
            </div>
        </div>
    </section>
@endsection

@section('foot')
@endsection

