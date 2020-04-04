@extends('layouts.default')
@section('title', '微博')

@section('head')
    @include('weibo._head')
@stop

{{-- header --}}
@section('header_index', route('weibo.home'))
@section('header_title', '微博首页')

@section('content')
    @yield('weibo_content')
@stop

@section('footer_js')
    @include('weibo._footer_js')
@stop
