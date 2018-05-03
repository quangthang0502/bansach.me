<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('node_modules/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    @yield('head')
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="{{route('home')}}">Bansach</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Danh mục
                    </a>
                    <div class="dropdown-menu">
                        @foreach($categories as $categoy)
                            <a class="dropdown-item" href="#">{{$categoy['name']}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Đăng ký</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Đăng nhập</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

@yield('content')

<footer style="margin-top: 1000px">
    <h1>quang thang</h1>
</footer>
<script src="{{url('node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{url('node_modules/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>
</body>
</html>