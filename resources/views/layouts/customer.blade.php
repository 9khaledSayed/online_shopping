<!DOCTYPE html>
<html lang="en">
    <head>
       @include('layouts.parts.customer.head')
    </head>
    <style>
        @font-face {
            font-family: Myriad Pro Regular;
            src: url('{{ asset('fonts/MyriadPro-Regular.otf') }}');
        }
        @font-face {
            font-family: DroidKufi Regular;
            src: url('{{ asset('fonts/Droid.Arabic.Kufi_DownloadSoftware.iR_.ttf') }}');
        }
        *:not(i, .star active){
            font-family: 'DroidKufi Regular', "Myriad Pro Regular", serif !important;
        }
        body{
            font-family: 'DroidKufi Regular', "Myriad Pro Regular", serif !important
        }
    </style>
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
                <div id="preloader-title">{{__('Loading')}}</div>
            </div>
        </div>
        <!-- /PRELOADER -->
        <!-- WRAPPER -->
        <div class="wrapper">
            @php
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
                                    <a class="pull-left" href="#"><img class="media-object item-image" src='{{asset('storage/products/' . $product->image1)}}' alt=""></a>
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
                                <li class="icon-user" ><a href="/login/customer"><img src="{{ asset('assets/img/icon-1.png')}}" alt=""/>{{__('Login')}}</a></li>

                                <li class="icon-form"><a href="/register/customer"><img src="{{ asset('assets/img/icon-2.png')}}" alt=""/> <span>{{__('Not a Member?')}} <span class="colored">{{__('Sign Up')}}</span></span></a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="list-inline">
                        @if (Auth::guard('customer')->check()) <li class="hidden-xs"><a href="{{url('profile')}}">{{__('My Account')}}</a></li>
                        <li class="hidden-xs"><a href="/wishlist">{{__("My Wishlist")}}</a></li> @endif
{{--                        <li class="hidden-xs"><a href="{{url('about')}}">{{__('About US')}}</a></li>--}}
                            <li class="dropdown flags">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img style="margin-top:3px" src="@if(App::getLocale() == 'en') {{ asset('assets/img/Egypt.png')}}@else {{ asset('assets/img/flag.gif')}}@endif" alt=""/></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="{{ route('change_language', 'en')}}"><img src="{{ asset('assets/img/flag.gif')}}" alt=""/> English</a></li>
                                    <li><a href="{{ route('change_language', 'ar')}}"><img src="{{ asset('assets/img/Egypt.png')}}" alt=""/> Arabic</a></li>
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
            <div class="navigation-wrapper" >
                <div class="container">
                    <!-- Navigation -->
                    <nav class="navigation closed clearfix" >
                        <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                        <ul class="nav sf-menu" >
                            <li class="{{Request::path() == '/' ? 'active' : ''}}" ><a href="/">{{__('Home')}}</a></li>
                            @foreach($categories as $category)
                            <li class="{{Request::path() == $category->name ? 'active' : ''}}"><a href="/products/{{$category->name}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                    <!-- /Navigation -->
                </div>
            </div>
        </header>
        <!-- /HEADER -->
          @yield('content')
          <!-- FOOTER -->
          <footer class="footer" >
              <div class="footer-widgets" >
                  <div class="container" >
                      <div class="row">

                          <div class="col-md-3">
                              <div class="widget">
                                  <h4 class="widget-title">About Us</h4>
                                  <p>Herbal Pharma our company is an Egyptian company started production of cosmetics and cosmoceutical products for local market and export since 2014 .</p>
                                  <ul class="social-icons">
                                      <li><a href="https://www.facebook.com/anemon.herbalpharma/" target="_blank"  class="facebook"><i class="fa fa-facebook"></i></a></li>
                                      <li><a href="https://www.instagram.com/herbalpharma2014/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-md-3">
                            <div class="widget widget-categories">
                                <h4 class="widget-title">Information</h4>
                                <ul>
                                    <li><a href="/about">About Us</a></li>
{{--                                    <li><a href="#">Delivery Information</a></li>--}}
{{--                                    <li><a href="/contact">Contact Us</a></li>--}}
                                </ul>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <h1 style="color:#FFF">a</h1>
                            <img src="{{ asset('assets/img/logo_2.jpg')}}" style="border-radius:20px;;border:solid 2px #1fa721;padding:5px"/>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="footer-meta">
                  <div class="container">
                      <div class="row">

                          <div class="col-sm-6">
                              <div class="copyright">Copyright 2020 Herbal Pharma   | Developed By <a style="color:#1fa721"target="_blank" > 01007949946</a></div>
                          </div>


                      </div>
                  </div>
              </div>
          </footer>
          <!-- /FOOTER -->
        </div>
        @include('layouts.parts.customer.foot')
    </body>
</html>
