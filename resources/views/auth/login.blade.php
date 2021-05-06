<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} | Login</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/fave-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/images/fave-icon.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('assets/images/fave-icon.png')}}" sizes="16x16">
    <link rel="stylesheet" href="{{asset('frontend/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="bgLogin">
    <div>
        <div>
            <div class="col-md-6 col-md-offset-6 loginStyle">
                <form method="POST" action="{{ route('login') }}" style="width:300px;">
                    <img src="{{asset("frontend/image/logo-color.svg")}}" style="width: 150px;display: block;margin: 0 auto;margin-bottom: 30px;">
                    @csrf
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-block">
                                {{ __('Login') }}
                            </button>

                            {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>