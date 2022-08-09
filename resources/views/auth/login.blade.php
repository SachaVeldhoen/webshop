@extends('layouts.app')

@section('content')
    <div class="login-page">
        <div class="login-side">
            <div class="login-form">
                <h2 class="uk-h1">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form__group field">
                        <input type="email" class="form__field @error('email') is-invalid @enderror" placeholder="Email"
                               name="email" value="{{ old('email') }}" autocomplete="email" id='email' required/>
                        <label for="email" class="form__label">{{ __('Email Address') }}</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>Wrong e-mail/password</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form__group field">
                        <input type="password" class="form__field @error('password') is-invalid @enderror"
                               placeholder="Password"
                               name="password" value="{{ old('email') }}" autocomplete="current-password" id='password'
                               required/>
                        <label for="password" class="form__label">{{ __('Password') }}</label>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>Wrong e-mail/password</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="login-button">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link forgot-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>
            </div>
        </div>
        <div class="design-side">

        </div>
    </div>
@endsection
