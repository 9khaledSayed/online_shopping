@extends('layouts.customer')
@section('content')
<!-- CONTENT AREA -->
<div class="content-area">
    <!-- PAGE -->
    <section class="page-section color">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 align-items-lg-center" >
                    <h3 class="block-title"><span>Login</span></h3>
                    <form method="POST" action="/login/customer" class="form-login">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 hello-text-wrap">
                                <span class="hello-text text-thin">Hello, welcome to Herbal Pharma </span>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"><input class="form-control  @error('email') is-invalid @enderror" type="text" name="email" required placeholder="Your email"></div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"><input class="form-control  @error('password') is-invalid @enderror" type="password" name="password" required placeholder="Your password"></div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="checkbox">
                                    <label></label>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <button class="btn btn-theme btn-block btn-theme-dark" type="submit">Login</button>
                            </div>

                            <div class="col-md-12" style="text-align:center" >
                                <a href="/register/customer" >Not a Member? Sign Up</a>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-sm-6 align-items-lg-center" >
                    <h1 style="text-align:center;font-family:SansSerif;margin-top:20%">we care about you</h1>
                </div>

            </div>
        </div>
    </section>
    <!-- /PAGE -->
</div>
<!-- /CONTENT AREA -->

<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

@endsection
