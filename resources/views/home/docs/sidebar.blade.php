<div class="col-lg-3 mb-1-9 mb-lg-0 p-2">
    <div id="accordion" class="accordion-style mb-4">
        <h2 class="text-uppercase left-title mb-3 h4">Kategoriler</h2>
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Products</button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion" style="">
                <div class="card-body">
                    <ul class="list-style-5">
                        <li><a href="#!">Casual Shirts</a></li>
                        <li><a href="#!">Formal Shirts</a></li>
                        <li><a href="#!">Longline Shirts</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Guides
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion" style="">
                <div class="card-body">
                    <ul class="list-style-5">
                        <li><a href="#!">Regular Jeans</a></li>
                        <li><a href="#!">Denim Jeans</a></li>
                        <li><a href="#!">Low Rise Jeans</a></li>
                        <li><a href="#!">Mid Rise Denims</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Api
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion" style="">
                <div class="card-body">
                    <ul class="list-style-5">
                        <li><a href="#!">Sports Shoes</a></li>
                        <li><a href="#!">Wedding Shoes</a></li>
                        <li><a href="#!">Loafers Shoes</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Marketplace
                    </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion" style="">
                <div class="card-body">
                    <ul class="list-style-5">
                        <li><a href="#!">Polo T-Shirt</a></li>
                        <li><a href="#!">V-neck T-Shirt</a></li>
                        <li><a href="#!">Striped T-Shirt</a></li>
                        <li><a href="#!">Graphic T-Shirt</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Resources
                    </button>
                </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordion" style="">
                <div class="card-body">
                    <ul class="list-style-5">
                        <li><a href="#!">Intex</a></li>
                        <li><a href="#!">Google</a></li>
                        <li><a href="#!">Samsung</a></li>
                        <li><a href="#!">Apple</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="order-2 order-lg-1 pb-3">
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
