@extends('layouts.app')

@section('content')
    <br>
    <div class="container">

        <div class="callout"><h3>{{ __('Reset Password') }}</h3></div>

        <div class="callout">
            @if (session('status'))
                <div class="alert" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group ">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <div>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' alert' : '' }}"
                               name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="button success">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
