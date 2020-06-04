@extends('layouts.customer')


@section('content')

            <!-- CONTENT AREA -->
            <div class="content-area">
                <section class="page-section">
                    <div class="wrap container">
                        <div class="row">
                            <!--start main contain of info-->
                            <div class="col-lg-9 col-md-9 col-sm-8" id="myInfo_form">
                                <div class="information-title">Your Account Information</div>
                                <div class="details-wrap">
                                    <div class="block-title alt"> <i class="fa fa-angle-down"></i> Change Your Personal Details</div>
                                    <div class="details-box">
                                        <form class="form-delivery" method="POST" action="{{url('profile/updateInfo') }}">
                                            @method("PUT")
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                <div class="form-group"><input required type="text" name="name" value="{{Auth::guard('customer')->user()->name}}" class="form-control"></div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group"><input required type="text" name="address" value="{{Auth::guard('customer')->user()->address}}" class="form-control"></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group"><input required type="text" name="email" value="{{Auth::guard('customer')->user()->email}}" class="form-control"></div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group"><input required type="text" name="phone" value="{{Auth::guard('customer')->user()->phone}}" class="form-control"></div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <button class="btn btn-theme btn-theme-dark" type="submit"> Update </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--end main contain of info-->

                            <!--start main contain of change pw-->
                            <div class="col-lg-9 col-md-9 col-sm-8" style="display:none" id="mypw_form">
                                <div class="information-title">Your Password</div>
                                <div class="details-wrap">
                                    <div class="block-title alt"> <i class="fa fa-angle-down"></i> Change your password </div>
                                    <div class="details-box">
                                        <form class="form-delivery" method="POST" action="{{url('profile/updatePw') }}">
                                            @method("PUT")
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group"><input id="password" required type="password" name="password" placeholder="Password" class="form-control">
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group"><input id="password-confirm" required type="password" name="password_confirmation" placeholder="Password Confirm" class="form-control">
                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <button class="btn btn-theme btn-theme-dark" type="submit"> Update </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           <!--start main contain of change pw-->


                            <!--start main contain of orders-->
                            <div class="col-md-9" style="display:none" id="myOrders_form" >
                                <div class="information-title">Your Order History</div>
                                <div class="details-wrap">
                                    <div class="details-box orders">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center">Order ID</th>
                                                    <th style="text-align:center">Image</th>
                                                    <th style="text-align:center">Qty</th>
                                                    <th style="text-align:center">Product Name</th>
                                                    <th style="text-align:center">Price</th>
                                                    <th style="text-align:center">Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach( $orders as $order)
                                                <tr>
                                                    <td align="center" class="order-id"> {{$order->id}} </td>
                                                    <td align="center">
                                                    <div style="margin-bottom:20px" >
                                                        <img style="width:150px;height:170px;border-radius:10px;" src="{{asset('storage/products/' . $order->product_image)}}" alt=""/>
                                                    </div>
                                                    </td>
                                                    <td align="center" class="quantity">x{{$order->quantity}}</td>
                                                    <td align="center" class="description">
                                                        <h4><a href="#">{{$order->product_name}}</a></h4>
                                                    </td>
                                                    <td align="center" class="total">{{$order->product_price}}</td>
                                                    <td align="center" class="diliver-date">{{$order->status}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <div>
                                            <a href="accountinformation.html" class="btn btn-theme"> Back To Account </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end main contain of orders-->

                            <!--start sidebar-->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="widget account-details">
                                    <h2 class="widget-title">Account</h2>
                                    <ul>
                                        <li><a onclick="show_form_1()"> Account Information </a></li>
                                        <li><a onclick="show_form_2()">Change Password</a></li>
                                        <li><a onclick="show_form_3()">Order History</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--end sidebar-->
                        </div>

                    </div>
                </section>
            </div>
            <!-- /CONTENT AREA -->

            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

@endsection


<script type="text/javascript">



    function show_form_1()
    {
        let form_1   = document.getElementById('myInfo_form');
        let form_2   = document.getElementById('mypw_form');
        let form_3   = document.getElementById('myOrders_form');

        form_1.style.display   = "block";
        form_2.style.display   = "none";
        form_3.style.display   = "none";
    }

    function show_form_2()
    {
        let form_1   = document.getElementById('myInfo_form');
        let form_2   = document.getElementById('mypw_form');
        let form_3   = document.getElementById('myOrders_form');

        form_2.style.display   = "block";
        form_1.style.display   = "none";
        form_3.style.display   = "none";

    }

    function show_form_3()
    {
        let form_1   = document.getElementById('myInfo_form');
        let form_2   = document.getElementById('mypw_form');
        let form_3   = document.getElementById('myOrders_form');

        form_3.style.display  = "block";
        form_1.style.display  = "none";
        form_2.style.display  = "none";
    }


</script>
