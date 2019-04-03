@extends('layouts.login_layout')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <span class="input">
                <input id="email" class="input_field form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus>
                <label class="input_label">
                    <span class="input__label-content">{{ __('E-Mail Address') }}</span>
                </label>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </span>

            <span class="input">
                <input id="password" class="input_field form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required>
                <label class="input_label">
                    <span class="input__label-content">{{ __('Password') }}</span>
                </label>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </span>
            <span class="input">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                    </label>
                </div>
            </span>
            <small><a href="{{ route('password.request') }}">Forgot password?</a></small>

        </div>

        <button type="submit" class="btn_1 full-width add_top_60">Login to CloudClovis Admin</button>
    </form>

@endsection
