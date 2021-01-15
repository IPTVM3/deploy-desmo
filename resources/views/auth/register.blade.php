@extends('layouts.app')

@section('content')
    <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <span class="login100-form-title p-b-53">
						 @lang('auth.register') - {{ config('app.name', 'Laravel') }}
					</span>



        <div class="p-t-31 p-b-9">
						<span class="txt1">
							@lang('site.firstname')
						</span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="first name is required">
            <input class="input100" id="name" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus>
            <span class="focus-input100"></span>
        </div>
        @if ($errors->has('first_name'))
            <span class="validationlogin"> {{ $errors->first('first_name') }}</span>
        @endif


        <div class="p-t-31 p-b-9">
						<span class="txt1">
							@lang('site.lastname')
						</span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="last name is required">
            <input class="input100" id="name" type="text" name="last_name" value="{{ old('last_name') }}" required autofocus>
            <span class="focus-input100"></span>
        </div>
        @if ($errors->has('last_name'))
            <span class="validationlogin"> {{ $errors->first('last_name') }}</span>
        @endif

        <div class="p-t-31 p-b-9">
						<span class="txt1">
							@lang('auth.email')
						</span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Username is required">
            <input class="input100" id="email" type="email" name="email" value="{{ old('email') }}" required>
            <span class="focus-input100"></span>
        </div>
        @if ($errors->has('email'))
            <span class="validationlogin"> {{ $errors->first('email') }}</span>
        @endif

        <div class="p-t-13 p-b-9">
						<span class="txt1">
							@lang('auth.password')
						</span>

        </div>
        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" id="password" type="password" name="password" required>
            <span class="focus-input100"></span>
        </div>
        @if ($errors->has('password'))
            <span class="validationlogin"> {{ $errors->first('password') }}</span>
        @endif

        <div class="p-t-13 p-b-9">
						<span class="txt1">
							@lang('auth.confirmpassword')
						</span>

        </div>
        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" id="password-confirm" type="password" name="password_confirmation" required>
            <span class="focus-input100"></span>
        </div>


        <div class="container-login100-form-btn m-t-17">
            <button class="login100-form-btn" type="submit">
                @lang('auth.register')
            </button>
        </div>

        <div class="container-login100-form-btn m-t-17">
            <a class="login100-form-btn" href="{{ url('/') }}">
                @lang('auth.cancel')
            </a>
        </div>

        <div class="w-full text-center p-t-55">
						<span class="txt2">
							 @lang('auth.haveanaccount')
						</span>

            <a href="{{ route('login') }}" class="txt2 bo1">
                @lang('auth.login')
            </a>
        </div>
    </form>
@endsection

