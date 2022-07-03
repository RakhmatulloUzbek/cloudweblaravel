<footer>
    @php
        $recentPosts = \App\Http\Controllers\HomeController::recentpostslist();
    @endphp
    <div class="container">
        <div class="row mt-n1-9">

            <div class="col-lg-4 col-md-6 mt-1-9">

                <img style="width: 160px; height: 90px"alt="footer-logo" src="{{asset('assets')}}/home/img/logos/pengonalogo.png">
                <p class="mt-4 text-light-gray">Nemo enim enim voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                <div class="mt-4 footer-social-icons">
                    <ul class="ps-0 mb-0">
                        <li><a href="{{$settings->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{$settings->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{$settings->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="{{$settings->youtube}}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="{{$settings->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>

            </div>

            <div class="col-lg-2 col-md-6 mt-1-9">
                <h3 class="text-white">Quick Links</h3>
                <ul class="footer-list ps-0">
                    <li><a href="#!">Financial Planning</a></li>
                    <li><a href="#!">Software &amp; Research</a></li>
                    <li><a href="#!">Market Research</a></li>
                    <li><a href="#!">Sales Services</a></li>
                    <li><a href="#!">Healthcare Services</a></li>
                    <li><a href="#!">Market Analysis</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mt-1-9">
                <h3 class="text-white">Recent Posts</h3>
                @foreach($recentPosts as $post)
                    <div class="clearfix footer-recent-post mt-0">
                        <div class="footer-recent-post-thumb"><img alt="..." src="{{Storage::url($post->image)}}"></div>
                        <div class="footer-recent-post-content"><a href="{{route('data_detail',['id'=>$post->id])}}">{{$post->title}}</a><span>{{date_format($post->created_at,"d,M,Y")}}</span></div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6 mt-1-9">
                <h3 class="text-white">Newsletter</h3>
                <p class="text-light-gray mb-3">Nemo enim enim voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                <form class="quform newsletter-form1" action="https://fabrex.websitelayout.net/quform/newsletter-two.php" method="post" enctype="multipart/form-data" onclick="">

                    <div class="quform-elements text-center">

                        <div class="row">

                            <!-- Begin Text input element -->
                            <div class="col-md-12">
                                <div class="quform-element form-group mb-0">
                                    <div class="quform-input">
                                        <input class="form-control" id="email_address" type="email" name="email_address" placeholder="Subscribe with us">
                                    </div>
                                </div>
                            </div>
                            <!-- End Text input element -->
                            <div class="col-md-12 mt-1-9">
                                    <div class="clearfix footer-recent-post mt-0">
                                        <div class="row">
                                            <div style="width: 90px; height: 90px" class="mt-3"><img style="height: 35px" alt="" src="{{asset('assets')}}/home/img/logos/yerli.png"></div>
                                            <div style="width: 100px; height: 65px" class=""><img style="height: 60px" alt="" src="{{asset('assets')}}/home/img/logos/mikrorunner1.png"></div>
                                            <div style="width: 100px; height: 65px" class=""><img style="height: 60px" alt="" src="{{asset('assets')}}/home/img/logos/mikrojumper1.png"></div>
                                        </div>

                                    </div>
                            </div>
                            <!-- Begin Submit button -->
                            <div class="col-md-12">
                                <div class="quform-submit-inner">
                                    <button class="butn medium primary" type="submit"><span><i class="fas fa-paper-plane"></i></span></button>
                                </div>
                                <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                            </div>
                            <!-- End Submit button -->

                        </div>

                    </div>

                </form>
            </div>
        </div>

    </div>
    <div class="footer-bar">
        <div class="container">
            <p class="mb-0">&copy; <span class="current-year"></span> Fabrex is Powered by <a href="https://www.chitrakootweb.com/" target="_blank" class="text-light-gray">Chitrakoot Web</a></p>
        </div>
    </div>
</footer>
