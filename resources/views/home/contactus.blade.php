@extends('layouts.homefontbase')
@section('title','İletişim | Pengona Yazılım')

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
                        <h4>Bizi Arayın</h4><span>(+44) 123 456 789</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="contact-box"><i class="fas fa-map-marker-alt"></i>
                        <h4>Bizi Ziyaret Edin</h4><span>Regina ST, London, SK 8GH.</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="contact-box"><i class="far fa-envelope"></i>
                        <h4>Bize Mail Gönderin</h4><span>email@youradress.com</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-1-9">
                    <div class="contact-box"><i class="far fa-comments"></i>
                        <h4>Canlı Destek</h4><span>Destek Al 24/7</span>
                    </div>
                </div>
            </div>
            <!-- end contact detail -->
            <div class="row">

                <!-- contact form -->
                <div class="col-lg-6 mb-1-9 mb-lg-0">
                    <form role="form" action="{{route('storemessage')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0 pb-4">
                            <h2 class="font-weight-bold">İLetişim Formu </h2>
                        </div>
                        @include('home.message_info')
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control mb-2" placeholder="Ad & Soyad"
                                       required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control mb-2" placeholder="Mail"
                                       required>
                            </div>
                            <div class="col-sm-6">
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Tel"
                                       required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Başlık"
                                       required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5"
                                              class="form-control message" placeholder="Mesajiniz" required></textarea>
                            </div>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" value="True" type="checkbox" id="subcribe" name="subcribe">
                            <label class="form-check-label" for="subcribe">Tarafıma Pengona Yazılım ve grup şirketleri tarafından reklam, pazarlama, tanıtım ve bilgilendirme amaçlı SMS, e-posta ve telefon yoluyla elektronik ileti gönderilmesi amacıyla Aydınlatma ve Açık Rıza Metni kapsamında onay/açık rıza verdiğimi beyan ediyorum.</label>
                        </div>
                        <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="kvkk" name="kvkk" required>
                                <label class="form-check-label" for="kvkk"><a target="_blank" style="text-decoration-line: underline" href="{{route('policy.show')}}">6698 sayılı Kişisel Verilerin Korunması</a> Kanununa ait bilgilendirmeyi okudum.</label>
                        </div>
{{--                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                            <div class="mt-4">--}}
{{--                                <x-jet-label for="terms">--}}
{{--                                    <div class="flex items-center">--}}
{{--                                        <div class="my-2">--}}
{{--                                            <x-jet-checkbox name="terms" id="terms"/>--}}
{{--                                            {!! __(':6698_sayılı_Kişisel_Verilerin_Korunması Kanununa ait bilgilendirmeyi okudum.', [--}}
{{--                                                    '6698_sayılı_Kişisel_Verilerin_Korunması' => '<a style="text-decoration-line: underline" target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('6698 sayılı Kişisel Verilerin Korunması').'</a>',--}}
{{--                                            ]) !!}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </x-jet-label>--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button class="butn" type="submit"><span>Gönder</span></button>
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

