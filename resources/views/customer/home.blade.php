@extends('layouts.customer')
@section('content')
<!-- CONTENT AREA -->
 <div class="content-area">
    <!-- PAGE -->
    <section class="page-section no-padding-bottom">
        <div class="container">
            <div class="row main-slider-row">
                <div class="col-md-9 slider">
                    <div class="main-slider">
                        <div class="owl-carousel" id="main-slider">
                            @foreach($slides as $slide)
                            <!-- Slide 1 -->
                            <div class="item slide1">
                                <img class="slide-img" src="{{asset($slide->path)}}" alt=""/>
                                <div class="caption">
                                    <div class="container">
                                        <div class="div-table">
                                            <div class="div-cell">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- /Slide 1 -->
                        </div>
                    </div>
                </div>

                <div class="col-md-3 sidebar">
                <!-- widget shop categories -->
                    <div class="widget shop-categories">
                        <h4 class="widget-title">{{__('Categories')}}</h4>
                        <div class="widget-content">
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                        <a  href="/products/{{$category->name}}" >{{$category->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                <!-- /widget shop categories -->
                </div>

            </div>

        </div>
    </section>
    <!-- /PAGE -->



    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <h2 class="section-title"><span>{{__('The Newest Products')}}</span></h2>
            <div class="tab-content">


                <!-- tab 2 -->
                <div class="tab-pane fade active in" id="tab-2">
                    <div class="row">
                       @foreach ($latestProducts as $product)


                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail no-border no-padding">
                                <div class="">
                                    <a class="media-link" href="/product/{{$product->id}}">
                                        <img src='{{asset('storage/products/' . $product->image1)}}' style="height: 258px;width: 262px;"/>
                                        <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <h4 class="caption-title"><a href="product-details.html">{{$product->name}}</a></h4>
                                    <div class="rating">
                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                    </div>
                                    <div class="price"><ins>{{$product->price}} {{__('SAR')}}</ins> <del>{{$product->sale_price}} {{__('SAR')}}</del></div>
                                    <div class="buttons">

                                            @if(Auth::guard('customer')->check())
                                            <form data-id="{{$product->id}}" name = 'wishlist' style="display:inline">
                                            @csrf
                                            <button class="btn btn-theme btn-theme-transparent btn-wish-list" type="submit"><i class="fa fa-heart"></i></button>
                                            </form>

                                            <form data-id="{{$product->id}}" data-price="{{$product->price}}" name = 'cart' style="display:inline">
                                            @csrf
                                            <button class="btn btn-theme btn-theme-dark btn-icon-left" type="submit" ><i class="fa fa-shopping-cart"></i>{{__('Add To Cart')}}</button>
                                            </form>
                                             @else
                                            <form method="GET" action="/login/customer" style="display:inline">
                                                @csrf
                                                <button class="btn btn-theme btn-theme-transparent btn-wish-list" type="submit"><i class="fa fa-heart"></i></button>
                                            </form>

                                            <form method="GET" action="/login/customer" style="display:inline">
                                                @csrf
                                                <button class="btn btn-theme btn-theme-dark btn-icon-left" type="submit" ><i class="fa fa-shopping-cart"></i>{{__('Add To Cart')}}</button>
                                            </form>
                                             @endif
                                                <br><br>
                                                <div>
                                                    <button class="btn btn-theme btn-theme-dark btn-icon-left"  onclick="document.getElementById('pro_quntity{{$product->id}}').value = parseInt(document.getElementById('pro_quntity{{$product->id}}').value) + 1;" type="submit"><i class="fa fa-plus"></i></button>
                                                    <input id="pro_quntity{{$product->id}}" class="btn btn-theme btn-theme-dark btn-icon-left" style="width:70px;text-align:center" type="number" step="1" min="1" name="quantity" value="1" title="Qty">
                                                    <button class="btn btn-theme btn-theme-dark btn-icon-left"  onclick="if ( parseInt(document.getElementById('pro_quntity{{$product->id}}').value) > 1) {document.getElementById('pro_quntity{{$product->id}}').value -=1;}" type="submit" ><i class="fa fa-minus"></i></button>

                                                </div>
                                            <!--

                                        --><a style="visibility: hidden" class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <div class="message-box">
                <div class="message-box-inner">
                    <h2>{{__('Free shipping on all orders over 400 SAR')}}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <h2 class="section-title"><span>{{__('Top Rated Products')}}</span></h2>
            <div class="top-products-carousel">
                <div class="owl-carousel" id="top-products-carousel">

                    @foreach ($products as $product)

                    <div class="thumbnail no-border no-padding">
                        <div class="">
                            <a class="media-link" href="/product/{{$product->id}}">
                                <img src="{{asset('storage/products/' . $product->image1)}}" style="height: 228px;"/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="product-details.html">{{$product->name}}</a></h4>
                            <div class="rating">
                                <span class="star"></span><!--
                                --><span class="star active"></span><!--
                                --><span class="star active"></span><!--
                                --><span class="star active"></span><!--
                                --><span class="star active"></span>
                            </div>
                            <div class="price"><ins>{{$product->price}} {{__('SAR')}}</ins> <del>{{$product->sale_price}} {{__('SAR')}}</del></div>
                            <div class="buttons">

                                    <form method="GET" action="/product/{{$product->id}}" style="display:inline">

                                        <button class="btn btn-theme btn-theme-transparent btn-wish-list" type="submit"><i class="fa fa-heart"></i></button>
                                    </form>

                                    <form method="GET" action="/product/{{$product->id}}" style="display:inline">

                                        <button class="btn btn-theme btn-theme-dark btn-icon-left" type="submit" ><i class="fa fa-shopping-cart"></i>{{__('Add To Cart')}}</button>
                                    </form>


                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section no-padding-top">
        <div class="container">
            <div class="row blocks shop-info-banners">
                <div class="col-md-4">
                </div>
{{--                <div class="col-md-4">--}}
{{--                    <div class="block">--}}
{{--                        <div class="media">--}}
{{--                            <div class="pull-right"><i class="fa fa-gift"></i></div>--}}
{{--                            <div class="media-body">--}}
{{--                                <p></p>--}}
{{--                                <h4 class="media-heading">Buy 3 Get 1</h4>--}}
{{--                                <p></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- /PAGE -->

</div>


@endsection
