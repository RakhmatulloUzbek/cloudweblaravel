<header class="header-style8 fixedHeader">
    <div id="top-bar" class="top-bar-style2">
        <div class="justify-center mx-4">
            <div class="row ">
                <div class="col-md-6">
                    <div class="top-bar-info">
                        <ul class="ps-0">
                            <li><i class="fas fa-mobile-alt"></i>(+123) 456 7890</li>
                            <li><i class="fas fa-envelope"></i>addyour@emailhere</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block responsive" style=" border-right: 3px solid #c5c0c0; height: 30px;">
                    <ul class="top-social-icon ps-0">
                        <li><a href="{{route('maintenance')}}">Partners</a></li>
                        <li><a href="{{route('maintenance')}}">Docs</a></li>
                        <li><a href="{{route('maintenance')}}">Support</a></li>
                        <li><a href="{{route('maintenance')}}">Sales</a></li>
                        <li><a href="{{route('maintenance')}}">Careers</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-default">

        <!-- top search -->
        <div class="top-search" style="background-color: red">
            <div class="container">
                <form class="search-form" action="{{route('getservices')}}" method="post" accept-charset="utf-8">
                    @csrf
                    @livewire('search')
                </form>
                @livewireScripts
            </div>
        </div>
        <!-- end top search -->
        @php
            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
        @endphp
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12">
                    <div class="menu_area alt-font">
                        <nav class="navbar navbar-expand-lg navbar-light p-0 current">

                            <div class="navbar-header navbar-header-custom">
                                <!-- logo -->
                                <a href="{{route('home')}}" class="navbar-brand1 logodefault"><img style="width: 145px; height: 60px"alt="footer-logo" src="{{asset('assets')}}/home/img/logos/pengona.png"></a>
                                <!-- end logo -->
                            </div>

                            <div class="navbar-toggler"></div>

                            <!-- menu area -->
                            <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                <li class="{{ (request()->is('/')) ? 'current' : '' }}"><a href="{{route('home')}}">Anasayfa</a></li>
                                <li class="{{ (request()->is('categoryservices*')) ? 'current' : '' }}"><a role="button">Kategoriler</a>
                                    <ul class="sub-menu">
                                        @foreach($mainCategories as $rs)
                                            @if(count($rs->children))
                                                <li>
                                                    <a role="button">{{$rs->title}}
                                                        <i class="bi bi-caret-right-fill"></i></a>
                                                    <ul class="sub-menu">
                                                        @include('home.categorytree',['children'=>$rs->children])
                                                    </ul>
                                                </li>
                                            @else
                                                <li class="{{ (request()->is('categoryservices/'.$rs->id.'')) ? 'current' : '' }}">
                                                    <a href="{{route('categoryservices',['id'=>$rs->id])}}">{{$rs->title}}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="{{ (request()->is('services')) ? 'current' : '' }}"><a href="{{route('services')}}">Ürünler ve Hizmetler</a></li>
                                <li class="{{ (request()->is('posts')) ? 'current' : '' }}"><a href="{{route('posts')}}">Haberler</a></li>
                                <li class="{{ (request()->is('aboutus')) ? 'current' : '' }}"><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                                <li class="{{ (request()->is('contactus')) ? 'current' : '' }}"><a href="{{route('contactus')}}">İletişim</a></li>
                                @auth
                                    <li class="mt-2"><a class="butn primary"><span class="">{{strtok(Auth::user()->name,' ')}}</span></a>
                                        <ul class="">
                                            <li><a href="{{route('user.index')}}">Profile</a></li>
                                            <li><a href="{{route('logoutuser')}}">Logout</a></li>
                                        </ul>
                                    </li>
                                @endauth
                                @guest
                                    <li class="mt-2"><a class="butn primary" href="{{route('loginuser')}}"><span class="submenu-button">Giriş</span></a></li>
                                @endguest
                            </ul>
                            <!-- end menu area -->

                            <!-- atribute navigation -->
                            <div class="attr-nav">
                                <ul>
                                    <li class="search"><a href="#!"><i class="fas fa-search"></i></a></li>
                                </ul>
                            </div>
                            <!-- end atribute navigation -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
