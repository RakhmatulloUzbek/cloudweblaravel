<div class="col-lg-4 mb-1-9 mb-lg-0">
    <div id="accordion0" class="accordion-style pb-3">
        <div class="card">
            <div class="card-header" id="heading0">
                <h4 class="mb-0">
                    <button class="btn btn-link" data-bs-toggle="collapse"
                            data-bs-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
                        Kategoriler
                    </button>
                </h4>
            </div>
            <div id="collapse0" class="collapse show" aria-labelledby="heading0" data-bs-parent="#accordion0"
                 style="">
                <div class="card-body pt-1 ml-3 pl-3 mr-0 pr-0">
                    <div id="accordion" class="accordion-style">
                        <div class="card">
                            <div class="card-header" id="heading1">

                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                        Control Panel
                                    </button>

                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-bs-parent="#accordion"
                                 style="">
                                <div class="card-body mr-0 pr-0">
                                    <div class="col-md-12 mb-4">
                                        <ul class="list-style-5">
                                            <li class="current"><a href="">24 - Hours Emergency Services</a></li>
                                            <li>Expert Advisors</li>
                                            <li>Quick Support</li>
                                            <li>Quick Support</li>
                                            <li>No Charges Services</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h6 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Databses
                                    </button>
                                </h6>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-bs-parent="#accordion"
                                 style="">
                                <div class="card-body">
                                    <div class="col-md-6 mb-4">
                                        <ul class="list-style-5">
                                            <li>24 - Hours Emergency Services</li>
                                            <li>Expert Advisors</li>
                                            <li>Quick Support</li>
                                            <li>Quick Support</li>
                                            <li>No Charges Services</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h6 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Devolopment
                                    </button>
                                </h6>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-bs-parent="#accordion"
                                 style="">
                                <div class="card-body">
                                    <div class="col-md-6 mb-4">
                                        <ul class="list-style-5">
                                            <li>24 - Hours Emergency Services</li>
                                            <li>Expert Advisors</li>
                                            <li>Quick Support</li>
                                            <li>Quick Support</li>
                                            <li>No Charges Services</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <h6 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Security
                                    </button>
                                </h6>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                <div class="card-body">
                                    <div class="col-md-6 mb-4">
                                        <ul class="list-style-5">
                                            <li>24 - Hours Emergency Services</li>
                                            <li>Expert Advisors</li>
                                            <li>Quick Support</li>
                                            <li>Quick Support</li>
                                            <li>No Charges Services</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading5">
                                <h6 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse5" aria-expanded="false"
                                            aria-controls="collapse5">
                                        Stacks
                                    </button>
                                </h6>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="heading5"
                                 data-bs-parent="#accordion">
                                <div class="card-body">
                                    <div class="col-md-6 mb-4">
                                        <ul class="list-style-5">
                                            <li>24 - Hours Emergency Services</li>
                                            <li>Expert Advisors</li>
                                            <li>Quick Support</li>
                                            <li>Quick Support</li>
                                            <li>No Charges Services</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

