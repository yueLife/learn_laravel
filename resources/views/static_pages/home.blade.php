@extends('layouts.default')
@section('title', '主页')

@section('content')
<h1>主页</h1>
<a href="{{ route('weibo') }}">微博</a>
@stop
