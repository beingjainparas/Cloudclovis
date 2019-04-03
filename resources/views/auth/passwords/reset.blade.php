@extends('layouts.login_layout')

@section('content')
    <form method="POST" action="{{ route('password.request') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

            <span class="input">
                <input id="email" class="input_field form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" autocomplete="off" name="email" value="{{ $email ?? old('email') }}" required autofocus>
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
                @if ($errors->has('password_confirmation'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </span>

            <button type="submit" class="btn_1 full-width add_top_60">{{ __('Reset Password') }}</button>
    </form>
@endsection
