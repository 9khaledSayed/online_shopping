@extends('layouts.customer')
@section('content')
            <!-- CONTENT AREA -->
            <div class="content-area">
                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs">
                    <div class="container">
                        <div class="page-header">
                            <h1>Wishlist</h1>
                        </div>
                        <ul class="breadcrumb">
                        </ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->

                <!-- PAGE -->
                <section class="page-section color no-padding-bottom">
                    <div class="container">

                        <div class="row wishlist">
                            <div class="col-md-9">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">Image</th>
                                            <th style="text-align:center">Product Name</th>
                                            <th style="text-align:center">Product Price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($customer_wishlist as $wishlist)

                                        @php
                                        $product = App\Product::find($wishlist->product_id);
                                        @endphp
                                        @if ($product != null)
                                    <tr id="{{$wishlist->id}}" >
                                        <td align="center">

                                            <div>

                                            <div style="margin-bottom:20px" >
                                                <img style="width:150px;height:170px;border-radius:10px;" src="assets/img/preview/shop/{{$product->image1}}" alt=""/>
                                            </div>

                                            <div>
                                                <form data-id="{{$product->id}}" data-deleted_id = "{{$wishlist->id}}" data-price="{{$product->price}}" name = 'cart' style="display:inline">
                                                    @csrf
                                                    <button class="btn btn-theme btn-theme-dark btn-icon-left" type="submit" ><i class="fa fa-shopping-cart"></i>Add To Cart</button>
                                                    </form>
                                            </div>

                                           </div>
                                        </td>

                                             <td align="center" class="description"> <h4><a href="#">{{$product->name}}</a></h4></td>
                                             <td align="center" class="price">{{$product->price}} EGP</td>
                                             <td align="center" class="total"><a href="#"><i ></i></a>
                                                <form data-deleted_id = "{{$wishlist->id}}" name = 'delete_wishlist' style="display:inline">
                                                 @csrf
                                                    <button type="submit" style="background-color:transparent;border:0px;margin:10px;color:darkred"><i class="fa fa-close"></i></button>
                                                </form>
                                            </td>
                                    </tr>
                                    @endif
                                        @endforeach

                                    </tbody>
                                </table>
                                <a class="btn btn-theme btn-theme-transparent btn-icon-left btn-continue-shopping" href="/"><i class="fa fa-shopping-cart"></i>Continue shopping</a>
                            </div>
                            <div class="col-md-3">
                                <h3 class="block-title"><span>Login</span></h3>
                                <form action="#" class="form-sign-in">
                                    <div class="row">
                                        <div class="col-md-12 hello-text-wrap">
                                            <span class="hello-text text-thin">Hello, welcome to your account</span>
                                        </div>
                                        <div class="col-md-12">
                                            <a class="btn btn-theme btn-block btn-icon-left facebook" href="#"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                                        </div>
                                        <div class="col-md-12">
                                            <a class="btn btn-theme btn-block btn-icon-left twitter" href="#"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group"><input class="form-control" type="text" placeholder="User name or email"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group"><input class="form-control" type="password" placeholder="Your password"></div>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <div class="checkbox">
                                                <label><input type="checkbox"> Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6 text-right-lg">
                                            <a class="forgot-password" href="#">forgot password?</a>
                                        </div>
                                        <div class="col-md-12">
                                            <a class="btn btn-theme btn-block btn-theme-dark" href="#">Login</a>
                                        </div>
                                        <div class="col-md-12">
                                            <a class="btn btn-theme btn-block btn-theme-transparent" href="#">Create account</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">
                        <div class="row blocks shop-info-banners">
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="media">
                                        <div class="pull-right"><i class="fa fa-gift"></i></div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Buy 1 Get 1</h4>
                                            Proin dictum elementum velit. Fusce euismod consequat ante.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="media">
                                        <div class="pull-right"><i class="fa fa-comments"></i></div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Call to Free</h4>
                                            Proin dictum elementum velit. Fusce euismod consequat ante.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="media">
                                        <div class="pull-right"><i class="fa fa-trophy"></i></div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Money Back!</h4>
                                            Proin dictum elementum velit. Fusce euismod consequat ante.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->

            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

@endsection
