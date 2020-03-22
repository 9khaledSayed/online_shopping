<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('layouts.parts.auth.head')
</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login 9 start -->
<div class="login-9">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-section">
                    <div class="logo">
                        <a href="#">
                            <img src="/img/logos/logo-2.png" alt="logo">
                        </a>
                    </div>
                    <div class="btn-section">
                        <a href="#" class="link-btn active">{{ isset($url) ? ucwords($url) : ""}}Login</a>
                        <a href="{{ route('register') }}" class="link-btn">Register</a>
                    </div>
                    <div class="login-inner-form">
                        @isset($url)
                            <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                            @else
                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @endisset
                            @csrf

                            <div class="form-group form-box">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <i class="flaticon-mail-2"></i>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-box">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <i class="flaticon-password"></i>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md btn-theme btn-block">{{ __('Login') }}</button>
                            </div>
                        </form>
                        <div class="extra-login">
                            <span>Or Login With</span>
                        </div>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="flaticon-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="flaticon-twitter-1"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="flaticon-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="flaticon-linkedin-2"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 9 end -->

@include('layouts.parts.auth.foot')

</body>

</html>
