@extends('layouts.homefontbase')
@section('title','Bize Ulaşın')

@section('head')
@endsection

@section('content')
    <section class="page-title-section md bg-img cover-background" data-overlay-dark="7" data-background="{{asset('assets')}}/home/img/bg/bg5.jpg" style="background-image: url(&quot;img/bg/bg5.jpg&quot;);">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1>Bize Ulaşın</h1>
                </div>
                <div class="col-md-12">
                    <ul class="ps-0">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="#!">Bize Ulaşın</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <div class="text-center section-heading">
                <h2>Let's talk about your business</h2>
            </div>
            <!-- contact detail -->
            <div class="row mb-1-9 mb-lg-6 mt-n1-9">
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="contact-box"><i class="fas fa-phone"></i>
                        <h4>Call Us</h4><span>(+44) 123 456 789</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="contact-box"><i class="fas fa-map-marker-alt"></i>
                        <h4>Visit Us</h4><span>Regina ST, London, SK 8GH.</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="contact-box"><i class="far fa-envelope"></i>
                        <h4>Mail Us</h4><span>email@youradress.com</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="contact-box"><i class="far fa-comments"></i>
                        <h4>Live Chat</h4><span>Chat with Us 24/7</span>
                    </div>
                </div>
            </div>
            <!-- end contact detail -->
            <div class="row">

                <!-- contact form -->
                <div class="col-lg-6 mb-1-9 mb-lg-0">
                    <form class="contact quform" action="https://fabrex.websitelayout.net/quform/contact.php" method="POST" enctype="multipart/form-data" onclick="" encoding="multipart/form-data">
                        <div class="quform-elements">
                            <div class="row">

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group quform-has-error">
                                        <div class="quform-input">
                                            <input class="form-control" id="name" type="text" name="name" placeholder="Your name here">
                                            <div class="quform-errors-wrap"><div class="quform-errors quform-cf" style="display: block;"><div class="quform-error">This field is required</div></div></div></div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group quform-has-error">
                                        <div class="quform-input">
                                            <input class="form-control" id="email" type="text" name="email" placeholder="Your email here">
                                            <div class="quform-errors-wrap"><div class="quform-errors quform-cf" style="display: block;"><div class="quform-error">This field is required</div></div></div></div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group quform-select-replaced quform-has-error">
                                        <div class="quform-input">
                                            <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here">
                                            <div class="quform-errors-wrap"><div class="quform-errors quform-cf" style="display: block;"><div class="quform-error">This field is required</div></div></div></div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Textarea element -->
                                <div class="col-md-12">
                                    <div class="quform-element form-group quform-has-error">
                                        <div class="quform-input">
                                            <textarea class="form-control h-100" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                            <div class="quform-errors-wrap"><div class="quform-errors quform-cf" style="display: block;"><div class="quform-error">This field is required</div></div></div></div>
                                    </div>
                                </div>
                                <!-- End Textarea element -->

                                <!-- Begin Captcha element -->
                                <div class="col-md-12">
                                    <div class="quform-element quform-has-error">
                                        <div class="form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word">
                                                <div class="quform-errors-wrap"><div class="quform-errors quform-cf" style="display: block;"><div class="quform-error">This field is required</div></div></div></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="quform-captcha">
                                                <div class="quform-captcha-inner">
                                                    <img src="{{asset('assets')}}/home/quform/images/captcha/courier-new-light.png" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Captcha element -->

                                <!-- Begin Submit button -->
                                <div class="col-md-12">
                                    <div class="quform-submit-inner">
                                        <button class="butn" type="submit"><span>Sumbit comment</span></button>
                                    </div>
                                    <div class="quform-loading-wrap text-start" style="display: none;"><span class="quform-loading"></span></div>
                                </div>
                                <!-- End Submit button -->

                            </div>
                        </div>
                    </form>
                </div>
                <!-- end contact form  -->

                <!-- map section -->
                <div class="col-lg-6">
                    <iframe class="map" src="https://maps.google.com/maps?q=london&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
                <!-- end map section -->

            </div>
        </div>
    </section>

@endsection

@section('foot')
@endsection

