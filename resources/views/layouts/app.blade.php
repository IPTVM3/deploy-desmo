<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.css') }}">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
    <!--===============================================================================================-->
    <!-- pace -->
    <link href="{{asset('../../plugins/pace-progress/themes/blue/pace-theme-flat-top.css')}}" rel="stylesheet"/>
    <!-- Noty -->
    <link href="{{ asset('plugins/noty/noty.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/noty/noty.js') }}" type="text/javascript"></script>


</head>
<body>
<div class="snipper">
    <div id="se-pre-con"></div>
    <style>
        #se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(http://smallenvelop.com/wp-content/uploads/2014/08/Preloader_8.gif) center no-repeat #fff;
        }
    </style>
</div>

<div class="limiter">
<!--
    <nav class="navbar navbar-expand-sm fixed-top navbar-light">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbar1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/home') }}">{{ config('app.name', 'Laravel') }}</a>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li>
                </ul>

                    <ul class="navbar-nav ml-auto">

                        @guest
                            <li><a class="nav-link active" href="{{ route('login') }}"> @lang('auth.login')</a></li>
                            <li><a class="nav-link active" href="{{ route('register') }}"> @lang('auth.register')</a>
                            </li>
                        @endguest
                        <li class="nav-item active dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-globe-asia"></i> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                @endforeach

                            </div>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>
        -->
    <div class="container-login100" style="background-image: url('{{asset('login/images/bg-01.jpg')}}');">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">

            @yield('content')
        </div>
        <style>
            .validationlogin {
                color: #fc00ff !important;
            }

            .btn-open {
                padding: 0 5px 10px 0;
            }

            .btn-open:hover {
                padding: 0 5px 10px 0;
                color: black;
                border-bottom: #000b16 solid 3px;
            }

            .nav-link {
                font-size: 18px;
            }
        </style>
    </div>
</div>
<!-- Session Flash -->
@include('partials._session')
<!-- /.Session Flash -->

<!--   Core JS Files   -->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Scripts -->
<script !src="">
    //ON LOAD PAGE
    window.addEventListener('load', function () {
        var sniiper = document.getElementById('se-pre-con');
        sniiper.setAttribute("id", "");
    });

</script>

<!--APP JS-->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>