<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', '去吧！皮卡丘！～') - learn_laravel</title>
    @include('layouts._head')
</head>
<body>
    @include('layouts._header')

    <div class="container">
        @yield('content')
        @include('layouts._footer')
    </div>

    @include('layouts._footer_js')
</body>
</html>
