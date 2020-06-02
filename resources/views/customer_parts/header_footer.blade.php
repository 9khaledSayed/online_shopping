<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eazzy.me/html/bella-women/index-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Mar 2020 20:27:44 GMT -->
<head>

       <script src="https://kit.fontawesome.com/44aea146b3.js" crossorigin="anonymous"></script>

        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Herbal Pharma</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.ico')}}">


        <!-- CSS Global -->
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/owl-carousel2/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/owl-carousel2/assets/owl.theme.default.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/animate/animate.min.css')}}" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="{{ asset('assets/css/theme.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/theme-pink.css')}}" rel="stylesheet" id="theme-config-link">

        <!-- Head Libs -->
        <script src="{{ asset('assets/plugins/modernizr.custom.js')}}"></script>

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="home" class="wide">
        <!-- PRELOADER -->
        <div id="preloader">
            <div id="preloader-status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
                <div id="preloader-title">Loading</div>
            </div>
        </div>
        <!-- /PRELOADER -->

        <!-- WRAPPER -->
        <div class="wrapper">

            @php
            $categories = App\Category::all();
            $myCarts = App\Cart::where('customer_id',1)->get();
            $products = array();
            $total_price = 0 ;
            foreach ($myCarts as $myCart)
            {
                $product = App\Product::find($myCart->product_id)->first();

                array_push($products,$product);

                $total_price += $product->price;
            }
            @endphp
            <!-- Popup: Shopping cart items -->
            <div class="modal fade popup-cart" id="popup-cart" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="container">
                        <div class="cart-items">
                            <div class="cart-items-inner">

                                @foreach ($products as $product)



                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object item-image" src="{{ asset('assets/img/preview/shop/order-1s.jpg')}}" alt=""></a>
                                    <p class="pull-right item-price">{{ $product->price }} EGP</p>
                                    <div class="media-body">
                                        <h4 class="media-heading item-title"><a href="#">{{ $product->name}}</a></h4>
                                        <p class="item-desc"></p>
                                    </div>
                                </div>

                                @endforeach

                                <div class="media">
                                    <p class="pull-right item-price">{{$total_price}} EGP</p>
                                    <div class="media-body">
                                        <h4 class="media-heading item-title summary">total</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <div>
                                            <a href="#" class="btn btn-theme btn-theme-dark" data-dismiss="modal">Close</a><!--
                                            --><a href="/shopping_cart" class="btn btn-theme btn-theme-transparent btn-call-checkout">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Popup: Shopping cart items -->

            <!-- Header top bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="top-bar-left">
                        <ul class="list-inline">
                            @if (Auth::guard('customer')->check())
                            <li>
                                <div style="display:inline">
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-rotate-180" ></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>


                            <li class="icon-user" ><a href="/profile"><img src="{{ asset('assets/img/icon-1.png')}}" alt=""/>Hi, {{  Auth::guard('customer')->user()->name}}</a></li>


                                <li><a href=""><i class="fa fa-envelope"></i> <span>{{Auth::guard('customer')->user()->email}}</span></a></li>




                                @else
                                <li class="icon-user" ><a href="/login/customer"><img src="{{ asset('assets/img/icon-1.png')}}" alt=""/>Login</a></li>

                                <li class="icon-form"><a href="/register/customer"><img src="{{ asset('assets/img/icon-2.png')}}" alt=""/> <span>Not a Member? <span class="colored">Sign Up</span></span></a></li>

                            @endif



                        </ul>
                        <ul class="list-inline">

                    </div>
                    <div class="top-bar-right">
                        <ul class="list-inline">
                        @if (Auth::guard('customer')->check()) <li class="hidden-xs"><a href="{{url('profile')}}">My Account</a></li>
                        <li class="hidden-xs"><a href="/wishlist">My Wishlist</a></li> @endif
                        <li class="hidden-xs"><a href="{{url('about')}}">About</a></li>
                            <li class="dropdown flags">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('assets/img/flag.gif')}}" alt=""/> Eng<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#"><img src="{{ asset('assets/img/flag.gif')}}" alt=""/> English</a></li>
                                    <li><a href="#"><img src="{{ asset('assets/img/Egypt.png')}}" alt=""/> Arabic</a></li>
                                </ul>
                            </li>
                        </ul>




                    </div>
                </div>
            </div>
            <!-- /Header top bar -->

            <!-- HEADER -->
            <header class="header fixed">
                <div class="header-wrapper">
                    <div class="container">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="/"><img src="{{ asset('assets/img/logo.jpg')}}" alt="Herbal Pharma"/></a>
                        </div>
                        <!-- /Logo -->

                        <!-- Header search -->
                        <div class="header-search">
                            <input class="form-control" type="text" placeholder="What are you looking?"/>
                            <button><i class="fa fa-search"></i></button>
                        </div>
                        <!-- /Header search -->

                        @if (Auth::guard('customer')->check())

                        <!-- Header shopping cart -->
                        <div class="header-cart">
                            <div class="cart-wrapper">
                                <a href="/wishlist" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-heart"></i></a>
                                <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> <span style="visibility:hidden">a</span> <span id="mycart_number">{{$myCarts->count()}}</span>  item (s) - <span id="total_price">{{$total_price}}  EGP</span> </span> <i class="fa fa-angle-down"></i></a>
                                <!-- Mobile menu toggle button -->
                                <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                                <!-- /Mobile menu toggle button -->
                            </div>
                        </div>
                        <!-- Header shopping cart -->
                        @endif

                    </div>
                </div>
                <div class="navigation-wrapper">
                    <div class="container">
                        <!-- Navigation -->
                        <nav class="navigation closed clearfix">
                            <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                            <ul class="nav sf-menu">
                                <li class="{{Request::path() == 'home' ? 'active' : ''}}" ><a href="/">Home</a></li>
                                @foreach($categories as $category)
                                    <li class="{{Request::path() == $category->name ? 'active' : ''}}"><a href="/product/{{$category->name}}">{{$category->name}} Products</a></li>
                                @endforeach
{{--                                <li class="{{Request::path() == 'home' ? 'active' : ''}}" ><a href="/">Home</a></li>--}}
{{--                                <li class="{{Request::path() == '1' ? 'active' : ''}}"><a href="/product/1">Hair Products</a></li>--}}
{{--                                <li class="{{Request::path() == '2' ? 'active' : ''}}"><a href="/product/2">Skin Products </a></li>--}}
{{--                                <li class="{{Request::path() == '3' ? 'active' : ''}}"><a href="/product/3">Cosmoceutics Products</a></li>--}}
{{--                                <li class="{{Request::path() == '4' ? 'active' : ''}}"><a href="/product/4">Others Products</a></li>--}}
                            </ul>
                        </nav>
                        <!-- /Navigation -->
                    </div>
                </div>
            </header>
            <!-- /HEADER -->

          @yield('content')



          <!-- FOOTER -->
          <footer class="footer">
              <div class="footer-widgets">
                  <div class="container">
                      <div class="row">

                          <div class="col-md-3">
                              <div class="widget">
                                  <h4 class="widget-title">About Us</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin ultrices suscipit. Sed commodo vel mauris vel dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                  <ul class="social-icons">
                                      <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                      <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                      <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-md-3">
                            <div class="widget widget-categories">
                                <h4 class="widget-title">Information</h4>
                                <ul>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <h1 style="color:#FFF">a</h1>
                            <img src="{{ asset('assets/img/logo_2.jpg')}}" style="border-radius:20px;;border:solid 2px #EC005F;padding:5px"/>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="footer-meta">
                  <div class="container">
                      <div class="row">

                          <div class="col-sm-6">
                              <div class="copyright">Copyright 2020 Herbal Pharma   |   Designed & Developed By <a style="color:#DF0101"target="_blank" title="call us 01007949946"> Ahmed, Hossam, Khaled, Hedaya, Hussen, Ali</a></div>
                          </div>
                          <div class="col-sm-6">
                              <div class="payments">
                                  <ul>
                                      <li><img src="{{ asset('assets/img/preview/payments/visa.jpg')}}" alt=""/></li>
                                      <li><img src="{{ asset('assets/img/preview/payments/mastercard.jpg')}}" alt=""/></li>
                                      <li><img src="{{ asset('assets/img/preview/payments/paypal.jpg')}}" alt=""/></li>
                                      <li><img src="{{ asset('assets/img/preview/payments/american-express.jpg')}}" alt=""/></li>
                                      <li><img src="{{ asset('assets/img/preview/payments/visa-electron.jpg')}}" alt=""/></li>
                                      <li><img src="{{ asset('assets/img/preview/payments/maestro.jpg')}}" alt=""/></li>
                                  </ul>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </footer>
          <!-- /FOOTER -->



        <!-- JS Global -->
        <script src="{{ asset('assets/plugins/jquery/jquery-1.11.1.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/superfish/js/superfish.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{ asset('assets/plugins/owl-carousel2/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/jquery.sticky.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/jquery.easing.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/jquery.smoothscroll.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/smooth-scrollbar.min.js')}}"></script>

        <!-- JS Page Level -->
        <script src="{{ asset('assets/js/theme.js')}}"></script>

        <!--[if (gte IE 9)|!(IE)]><!-->
        <script src="{{ asset('assets/plugins/jquery.cookie.js')}}"></script>
        <!-- <script src="assets/js/theme-config.js"></script> -->
        <!--<![endif]-->

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


        <script type="text/javascript">

                    $.ajaxSetup({
                         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
                    });


                    $(document).ready(function () {

                    $(document).on('submit', 'form[data-id]', function (e) {

                            e.preventDefault();

                            var product_id = $(this).attr('data-id');
                            var product_price = $(this).attr('data-price');
                            var Formtype = $(this).attr('name');
                            var myCartNo = document.getElementById('mycart_number');
                            var myCart_total_price = document.getElementById('total_price');
                            var URL;

                            if ( Formtype == 'cart')
                             {

                                URL = "/myCart";
                                myCartNo.innerHTML           = parseInt(myCartNo.innerHTML) + 1;
                                myCart_total_price.innerHTML = parseInt(myCart_total_price.innerHTML) + parseInt(product_price) + " EGP";
                             }else { URL = "/wishlist"; }


                            $.ajax({
                            type:"POST",
                            url:URL,
                            data:{
                            "_token": "{{ csrf_token() }}",
                            product_id:product_id,
                            },
                            success: function(response)
                            {
                                swal("Done !", "Added To Your " + Formtype + " Successfully !", "success");
                            },
                            error: function(error)
                            {
                                console.log(error);
                                swal("Error ", "Please try Again Later !", "error");
                            }

                            });
                    });


                    $(document).on('submit', 'form[data-deleted_id]', function (e) {

                            e.preventDefault();

                            var id = $(this).attr('data-deleted_id');
                            var product_price = $(this).attr('data-price');
                            var Formtype = $(this).attr('name');
                            var myCartNo = document.getElementById('mycart_number');
                            var myCart_total_price = document.getElementById('total_price');
                            var row = document.getElementById(id);
                            var URL;

                            if ( Formtype == 'delete_cart')
                             {
                                URL = "/myCart/";
                                myCartNo.innerHTML           = parseInt(myCartNo.innerHTML) - 1;
                                myCart_total_price.innerHTML = parseInt(myCart_total_price.innerHTML) - parseInt(product_price) + " EGP";

                            }else { URL = "/wishlist/"; }

                            $.ajax({
                                type:"DELETE",
                                url:URL + id,
                                data:{
                                "_token": "{{ csrf_token() }}",
                                id:id,
                                },
                                success: function(response)
                                {
                                    if ( Formtype != 'cart')
                                    {
                                        swal("Deleted !", "", "success");
                                    }

                                      row.style.display = 'none';
                                },
                                 error: function(error)
                                   {
                                     console.log(error);
                                     swal("Error ", "Please try Again Later !", "error");
                                   }

                                });

                     });



                });

        </script>

    </body>

<!-- Mirrored from eazzy.me/html/bella-women/index-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Mar 2020 20:27:47 GMT -->
</html>
