<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="@yield('header_index', route('home'))">@yield('header_title', '首页')</a>
        <span class="navbar-brand"></span>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
            <li class="nav-item"><a class="nav-link" href="#">登录</a></li>
        </ul>
    </div>
</nav>
