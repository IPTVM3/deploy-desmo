@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('password.request') }}" class="login100-form validate-form flex-sb flex-w">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <span class="login100-form-title p-b-53">
						 @lang('auth.reset') - {{ config('app.name', 'Laravel') }}
					</span>


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
        </div>
        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" id="password" type="password"
                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            <span class="focus-input100"></span>

        </div>
        @if ($errors->has('password'))
            <span class="validationlogin">{{ $errors->first('password') }}</span>
        @endif

        <div class="p-t-31 p-b-9">
						<span class="txt1">
							@lang('auth.confirmpassword')
						</span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" id="password-confirm" type="password"   name="password_confirmation" required>
            <span class="focus-input100"></span>

        </div>
        @if ($errors->has('password_confirmation'))
            <span class="validationlogin">{{ $errors->first('password_confirmation') }}</span>
        @endif


        <div class="container-login100-form-btn m-t-17">
            <button class="login100-form-btn" type="submit">
                @lang('auth.reset')
            </button>
        </div>
        <div class="container-login100-form-btn m-t-17">
            <a class="login100-form-btn" href="{{ route('home') }}">
                @lang('auth.cancel')
            </a>
        </div>

    </form>
@endsection
