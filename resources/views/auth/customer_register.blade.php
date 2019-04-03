@extends('layouts.login_layout')

@section('content')
    <form method="POST" action="{{ url('/register') }}">
        @csrf

        <div class="form-group">
            <span class="input">
                <input id="name" class="input_field form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                <label class="input_label">
                    <span class="input__label-content">{{ __('Name') }}</span>
                </label>
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </span>

            <span class="input">
                <input id="email" class="input_field form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" autocomplete="off" name="email" value="{{ old('email') }}" required>
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
                <input id="password-confirm" class="input_field form-control" type="password" name="password_confirmation" required>
                <label class="input_label">
                    <span class="input__label-content">{{ __('Confirm Password') }}</span>
                </label>
            </span>

        <button type="submit" class="btn_1 full-width add_top_60">{{ __('Register to CloudClovis') }}</button>
        <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{ url('/login') }}">Sign In</a></strong></div>
    </form>
@endsection
