@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="login100-form validate-form flex-sb flex-w">
        {{ csrf_field() }}

        <span class="login100-form-title p-b-53">
						 @lang('auth.login') - {{ config('app.name', 'Laravel') }}
					</span>

        <a href="{{ url('auth/facebook') }}" class="btn-face m-b-20">
            <i class="fa fa-facebook-official"></i>
            Facebook
        </a>

        <a  href="{{ url('auth/google') }}" class="btn-google m-b-20">
            <img src="{{asset('login/images/icons/icon-google.png')}}" alt="GOOGLE">
            Google
        </a>

        <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
          <span style="font-size: 20px; background-color: #F3F5F6; padding: 0 10px;">
            @lang('auth.or') <!--Padding is optional-->
          </span>
        </div>


        <div class="p-t-31 p-b-9">
						<span class="txt1">
							@lang('auth.email')
						</span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Username is required">
            <input class="input100" id="email" type="email"
                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                   value="{{ old('email') }}" required autofocus>
            <span class="focus-input100"></span>

        </div>
        @if ($errors->has('email'))
            <span class="validationlogin"> {{ $errors->first('email') }}</span>
        @endif
        <div class="p-t-13 p-b-9">
						<span class="txt1">
							@lang('auth.password')
						</span>

            <a href="{{ route('password.request') }}" class="txt2 bo1 m-l-5">
                @lang('auth.forget')
            </a>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" id="password" type="password"
                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            <span class="focus-input100"></span>

        </div>
        @if ($errors->has('password'))
            <span class="validationlogin">{{ $errors->first('password') }}</span>
        @endif
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="txt2">
							 @lang('auth.rememberme')
						</span>
            </label>
        </div>
        <div class="container-login100-form-btn m-t-17">
            <button class="login100-form-btn" type="submit">
                @lang('auth.login')
            </button>
        </div>
        <div class="container-login100-form-btn m-t-17">
            <a class="login100-form-btn" href="{{ url('/') }}">
                @lang('auth.cancel')
            </a>
        </div>

        <div class="w-full text-center p-t-55">
						<span class="txt2">
							 @lang('auth.notamember')
						</span>

            <a href="{{ route('register') }}" class="txt2 bo1">
                @lang('auth.register')
            </a>
        </div>
    </form>
@endsection
