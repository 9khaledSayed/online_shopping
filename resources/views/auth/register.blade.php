@extends('layouts.customer')
@section('content')

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 align-items-lg-center" >
                        <h3 class="block-title"><span>Sign Up</span></h3>
                        <form method="POST" action="/register/customer" class="form-login">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 hello-text-wrap">
                                    <span class="hello-text text-thin">Hello, welcome to Herbal Pharma </span>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control  @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}" required placeholder="Your Name"></div>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>


                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control  @error('email') is-invalid @enderror" type="email" name="email"  value="{{old('email')}}" required placeholder="Your email"></div>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control  @error('address') is-invalid @enderror" type="text" name="address" required  value="{{old('address')}}" placeholder="Your address"></div>

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control  @error('phone') is-invalid @enderror" type="text" name="phone" required value="{{old('phone')}}" placeholder="Your phone"></div>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control  @error('password') is-invalid @enderror" type="password" name="password" required placeholder="Your password"></div>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control  @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" required placeholder="Confirm Password"></div>

                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-theme btn-block btn-theme-dark" type="submit">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </section>
        <!-- /PAGE -->
    </div>
    <!-- /CONTENT AREA -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

@endsection
