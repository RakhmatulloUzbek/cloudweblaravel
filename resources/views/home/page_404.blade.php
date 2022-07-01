@extends('layouts.homefontbase')

@section('head')
@endsection

@section('content')
    <section class="error-box bg-img" data-overlay-dark="0" data-background="img/bg/bg4.jpg" style="background-image: url(&quot;img/bg/bg4.jpg&quot;);">
        <div class="container">
            <div class="error-box-text">
                <h1>404</h1>
                <h3>Page not Found</h3>
                <h4>We're sorry, Please try one of the following Pages.</h4>
                <div class="mt-1-9"><a href="{{route('home')}}" class="butn"><span>Back Home</span></a></div>
            </div>
        </div>
    </section>
@endsection

@section('foot')
@endsection

