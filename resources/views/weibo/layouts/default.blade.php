@extends('layouts.default')

@section('head')
    @include('weibo.layouts._head')
@stop

@section('header')
    @include('weibo.layouts._header')
@stop

@section('content')
    @yield('weibo_content')
@stop

@section('footer_js')
    @include('weibo.layouts._footer_js')
@stop
