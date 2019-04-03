@extends('layouts.login_layout')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <span class="input">
                <input id="email" class="input_field form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required>
                <label class="input_label">
                    <span class="input__label-content">{{ __('E-Mail Address') }}</span>
                </label>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </span>

        </div>

        <button type="submit" class="btn_1 full-width add_top_60">{{ __('Send Password Reset Link') }}</button>
    </form>
@endsection
