<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('layouts.authentication.parts.head')
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
                        <a href="{{ route('login')}}" class="link-btn">Login</a>
                        <a href="#" class="link-btn active">Register</a>
                    </div>
                    <div class="login-inner-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group form-box">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <i class="flaticon-user"></i>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-box">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email">
                                <i class="flaticon-mail-2"></i>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-box">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                                <i class="flaticon-password"></i>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-box">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                <i class="flaticon-password"></i>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md btn-theme btn-block">{{ __('Register') }}</button>
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

@include('layouts.authentication.parts.foot')



</body>

</html>
