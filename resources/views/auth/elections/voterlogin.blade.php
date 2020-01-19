<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="login-page">
    <div>
        <main class="py-4">
                <div class="container login">
                        <div class="row">
                            <div class="col s12 ">
                                <div class="card">
                                    <div class="card-action blue white-text">{{ __('Login') }}</div>

                                    <div class="card-content">
                                        <div class="row">
                                                <form class="col s12" method="POST" action="{{ route('elections.post.login') }}">
                                                        @csrf
                                                        <input type="text" name="role" value="VOTER" hidden>
                                                        <div class="row">
                                                            <div class="input-field col s12 m6 push-m3">
                                                                <label for="email">{{ __('E-Mail Address') }}</label>
                                                                <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="input-field col s12 m6 push-m3">
                                                                <label for="password">{{ __('Password') }}</label>
                                                                <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col s12 m6 push-m3">
                                                                <label class="form-check-label" for="remember">
                                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                    <span>{{ __('Remember Me') }}</span>
                                                                </label>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="input-field col s12 m6 push-m3">
                                                                <button type="submit" class="btn blue">
                                                                    {{ __('Login') }}
                                                                </button>

                                                                @if(Route::has('password.request'))
                                                                    <a class="" href="{{ route('password.request') }}">
                                                                        {{ __('Forgot Your Password?') }}
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        {{-- <div class="row">
                                                            <div class="col s12 m6 push-m3 center">
                                                                <a href="{{ route('user.register')}}">{{ __('Register') }}</a>
                                                            </div>
                                                        </div> --}}
                                                    </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </main>
    </div>
</body>
</html>
