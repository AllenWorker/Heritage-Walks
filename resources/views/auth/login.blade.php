@extends('layouts.app')

@section ('title' , 'Heritage Walks - Login')

@section('content')
    <br>
    <div class="container">
        <div class="small-12 medium-12 large-12 callout text-center">
            <h3>{{ __('Login') }}</h3>
        </div>
        <div class="callout">
            <div class="">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                        <label for="email">{{ __('E-Mail Address') }}</label>

                        <div>
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' alert' : '' }}" name="email"
                                   value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="alert" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                        <label for="password">{{ __('Password') }}</label>

                        <div>
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' alert' : '' }}"
                                   name="password" required>

                            @if ($errors->has('password'))
                                <span class="alert" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                        <div>
                            <div>
                                <input type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="large-10 large-offset-1 medium-10 medium-offset-1 small-12">
                        <div>
                            <button type="submit" class="button success">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a  href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
