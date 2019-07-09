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

                    <div>
                        <label for="name">{{ __('Username') }}</label>

                        <div>
                            <input id="name" type="text"
                                   class="form-control{{ $errors->has('name') ? ' alert' : '' }}" name="name"
                                   value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="alert" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div>
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

                    <div>
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

                    <div class="grid-x">
                        <div class="large-1 medium-1">
                            <button type="submit" class="button success  small-offset-1 large-offset-0">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="large-6 medium-6 small-offset-1  large-offset-0">
                            @if (Route::has('password.request'))
                                <a class="button alert" href="{{ route('password.request') }}">
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
