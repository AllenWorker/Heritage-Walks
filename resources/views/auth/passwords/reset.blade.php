@extends('layouts.app')

@section('content')
    <br>
    <div class="container">

        <div class="callout"><h3>{{ __('Reset Password') }}</h3></div>

        <div class="callout">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group ">
                    <label for="email" >{{ __('E-Mail Address') }}</label>

                    <div>
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ $email ?? old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="alert" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group ">
                    <label for="password" >{{ __('Password') }}</label>

                    <div >
                        <input id="password" type="password"
                               class="form-control{{ $errors->has('password') ? ' alert' : '' }}" name="password"
                               required>

                        @if ($errors->has('password'))
                            <span class="alert" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group ">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                    <div>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <button type="submit" class="button success">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
