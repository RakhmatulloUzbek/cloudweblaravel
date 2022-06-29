@extends('layouts.adminbase')

@section('head')
    @include('admin.top_scripts')
@endsection

@section('content')
    @include('profile.show')
@endsection
@section('foot')
    @include('admin.foot_scripts')
@endsection
