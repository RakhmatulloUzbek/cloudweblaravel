@extends('layouts.homefontbase')

@section('title','Anasayfa')

@section('head')
@endsection

@section('content')
    <section class="m-0 p-0 pt-3">
        <div class="container m-1 p-1">
            <div class="row m-0">
                @include('home.docs.sidebar')
                @include('home.docs.content')
            </div>
        </div>
    </section>
@endsection

@section('foot')
@endsection
