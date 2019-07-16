<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1, maximum-scale=1, user-scalable=no">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Loop') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{'assets/js/jquery.min.js'}}"></script>


    <script src="{{'assets/js/Panel-Element-1.js'}}"></script>
    <script src={{'assets/js/Panel-Element.js'}}></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/Navigation-with-Button.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Navigation-with-Search.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/Panel-Element-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Panel-Element-2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Panel-Element-3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Panel-Element.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Projects-Horizontal.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body style="background-size: auto;background-position: 100%10%;background-repeat: no-repeat;background-image: url({{$bodyClass}});">
<div id="app">
    @if(Auth::user())
        <div class="override  fixed navbar-expand-md navbar-light bg-light">

        <div class="social">
            <br>
            <br>
            <br>
            <ul>
                <li class="list"><a href="{{ route('programing', ['python']) }}">Python<i class="fab fa-python"></i></a></li>
                <li class="list"><a href="{{ route('programing', ['c-language']) }}">C# Langauge<i class="fab fa-cuttlefish"></i></i></a></li>
                <li class="list"><a href="{{ route('programing', ['html']) }}">C Langauge<i class="devicon-c-plain"></i></a></li>
                <li class="list"><a href="{{ route('programing', ['c#']) }}">Java<i class="devicon-html5-plain"></i></a></li>
                <li class="list"><a href="{{ route('programing', ['java']) }}">PHP<i class="fa fa-paperclip fa"></i></a></li>
                <li class="list"><a href="{{ route('programing', ['java']) }}">Css<i class="fa fa-cog fa"></i></a></li>

            </ul>
        </div>
    </div>
@endif
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            @if(Auth::user())
                <div>
                    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
                        <div class="container"><a class="navbar-brand" href="#">Logo</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse"
                                 id="navcol-1">
                                <ul class="nav navbar-nav mr-auto">
                                    <li class="nav-item" role="presentation"><a class="nav-link " href="{{route('welcome')}}">Home</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">&nbsp;Notification</a></li>
                                    <li clas
                                        s="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
        @endif




        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else

                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('profile')}}">&nbsp;{{ Auth::user()->name }} <span class="caret"></span></a></li>


                    <div class="" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                @endguest
            </ul>
        </div>

</nav>

<main class="py-4">
    @yield('content')
</main>
</div>
</body>
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
</html>
