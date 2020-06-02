@extends('layouts.customer')

@section('content')

            <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs">
                    <div class="container">
                        <div class="page-header">
                            <h1>Shopping Cart</h1>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Shop</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->

                <!-- PAGE -->
                <section class="page-section color">
                    <div class="container">


                        <h3 class="block-title alt"><i class="fa fa-angle-down"></i>1. Orders</h3>
                        <div class="row orders">
                            <div class="col-md-9">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">Image</th>
                                            <th style="text-align:center">Product Name</th>
                                            <th style="text-align:center">quantity</th>
                                            <th style="text-align:center">Price</th>
                                            <th style="text-align:center">Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customer_cart as $cart)

                                        @php

                                            $product = App\Product::find($cart->product_id);

                                        @endphp
                                        @if ($product != null)
                                        <tr id="{{$cart->id}}">
                                            <td align="center">

                                                    <div style="margin-bottom:20px" >
                                                        <img style="width:150px;height:170px;border-radius:10px;" src="assets/img/preview/shop/{{$product->image1}}" alt=""/>
                                                    </div>

                                            </td>
                                            <td style="text-align:center" class="description">
                                                <h4><a href="#">{{$product->name}}</a></h4>
                                            </td>
                                            <td align="center" class="total">
                                                {{$cart->quantity}}

                                            </td>
                                            <td align="center" class="total">
                                                    {{$product->price}} EGP

                                            </td>
                                            <td align="center" class="total">
                                                {{$product->price * $cart->quantity}} EGP

                                            </td>
                                            <td align="center" class="total">

                                                <form data-deleted_id = "{{$cart->id}}" data-price={{$product->price}} name='delete_cart' style="display:inline">
                                                    @csrf
                                                    <button type="submit" style="background-color:transparent;border:0px;margin:10px;color:darkred"><i class="fa fa-close"></i></button>
                                                </form>
                                            </td>
                                        </tr>

                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-3">
                                <h3 class="block-title"><span>Shopping cart</span></h3>
                                <div class="shopping-cart">
                                    <table>
                                        <tr>
                                            <td>items:</td>
                                            <td>{{$customer_cart->count()}}</td>
                                        </tr>
                                        <tr>
                                            <td>Sub-total:</td>
                                            <td>{{$sub_total}}</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping:</td>
                                            <td>30 EGP</td>
                                        </tr>
                                        <tfoot>
                                            <tr>
                                                <td>Total:</td>
                                                <td>{{$sub_total + 30}} EGP</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <h3 class="block-title alt"><i class="fa fa-angle-down"></i>3. Delivery address</h3>
                        <form action="/order" method="post" class="form-delivery">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group"><input class="form-control" type="text" placeholder="Name" name="name" value="{{Auth::guard('customer')->user()->name}}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group selectpicker-wrapper">
                                        <select
                                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="Select" name="country">
                                            <option>Egypt</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group selectpicker-wrapper">
                                        <select
                                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="Select" name="government">
                                            <option>Giza</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group selectpicker-wrapper">
                                        <select
                                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="Select" name="city">
                                            <option>el-haram</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"><input class="form-control" name="address" type="text" placeholder="Address" value="{{Auth::guard('customer')->user()->address}}"></div>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control" name="email" type="text" placeholder="Email" value="{{Auth::guard('customer')->user()->email}}"></div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control" name="phone" type="text" placeholder="Phone Number" value="{{Auth::guard('customer')->user()->phone}}"></div>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="col-md-12" style="margin-top:50px">
                                    <button class="btn btn-theme center-block" href="#">Place Order</button>
                                </div>

                            </div>



                        </form>




                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">
                        <div class="row blocks shop-info-banners">
                            <div class="col-md-4">

                            </div>
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

                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->

            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>



@endsection
