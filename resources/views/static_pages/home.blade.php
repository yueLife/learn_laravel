@extends('layouts.default')
@section('title', '主页')

@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            你现在所看到的是学习 laravel 的示例项目主页。
        </p>
        <p>
            一切，将从这里开始。
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('register') }}" role="button">现在注册</a>
        </p>
        <p>
            下面是各个 laravel 示例项目
        </p>
        <p>
            <a href="{{ route('weibo.home') }}">微博</a>
        </p>
    </div>
@stop
