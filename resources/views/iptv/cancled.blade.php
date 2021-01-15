<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>{{ \App\Store::first()->name }} | @lang('iptv.oops')</title>
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
   
    <!-- Google font -->

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('iptv/messager/css/style.css')}}" />

    <link href="{{ asset('dist/font/google_fonts.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>


<body>

<div class="error-content" style="padding-top: 17%;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="error-text">
                    <h1  >@lang('iptv.oops')</h1>
                    
                    <h4>@lang('iptv.oops_header')</h4>
                    <p>@lang('iptv.oops_description').</p>
                    <a  href="{{ route('home') }}" class="btn btn-primary btn-round">@lang('iptv.go_home')</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery ----------------------------------------------------------------------------------------------------------------------------->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
