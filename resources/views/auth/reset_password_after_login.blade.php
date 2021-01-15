<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Scripts -->
@include('dashboard.components.$links')
<!-- /.Scripts -->

</head>
<!-- Body ----------------------------------------------------------------------------------------------------------------------------->

<body class="hold-transition lockscreen">
@include('partials._session')
<!-- Automatic element centering -->
<div class="lockscreen-wrapper" style="margin-top: 6% !important;">
    <div class="lockscreen-logo">
        <a href="../../index2.html"><b>@lang('auth.reset') - {{ config('app.name') }}</b></a>
    </div>
    <div class="container">
        @include('partials._errors')
    </div>
    <!-- User name -->
    <div class="lockscreen-name"> {{ucfirst(Auth::user()->last_name)}} {{ucfirst(Auth::user()->first_name)}} </div>

    <!-- START LOCK SCREEN ITEM -->
    <div class="lockscreen-item" style="width: 398px;">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
            <img src="{{asset('img/'.Auth::user()->picture)}}" alt="User Image">
        </div>
        <!-- /.lockscreen-image -->


        <div class="card card-primary card-outline">
            <div class="card-body box-profile" style="    margin-top: 40px;">
                <!-- lockscreen credentials (contains the form) -->
                <form class="form-group " method="POST" action="{{route('password.reste.update') }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}


                    <label>@lang('site.current_password')</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control"
                               placeholder="@lang('site.current_password')"
                               name="current_password">
                    </div>


                    <label>@lang('auth.password')</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control"
                               placeholder="@lang('auth.password')" name="password">
                    </div>
                    <label>@lang('auth.confirmpassword')</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control"
                               placeholder="@lang('auth.confirmpassword')"
                               name="password_confirmation">
                    </div>


                    <button href="{{url('dashboard/reset')}}" type="submit"
                       class="btn btn-primary btn-block"><b>@lang('auth.reset')</b></button>

                </form>
                <!-- /.lockscreen credentials -->
            </div>
        </div>
    </div>
    <!-- /.lockscreen-item -->
    <div class="help-block text-center">
        @lang('site.description_reste_password_after_login')
    </div>
    <div class="text-center">
        <a href="{{ route('logout') }}"
           style="color: blue">@lang('site.sign_different_user_reste_password_after_login')</a>
    </div>
    <div class="lockscreen-footer text-center">
        Copyright &copy; 2020-{{ now()->year }} <b><a href="http://adminlte.io"
                                                      class="text-black">{{ config('app.name') }}</a></b><br>
        @lang('site.copierights')
    </div>
</div>
<!-- /.center -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>


<!-- Scripts -->
@include('dashboard.components.$script')
<!-- /.Scripts -->

</body>
</html>