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

                            <!-- Slide 1 -->
                            <div class="item slide1">
                                <img class="slide-img" src="#" alt=""/>
                                <div class="caption">
                                    <div class="container">
                                        <div class="div-table">
                                            <div class="div-cell">
                                                <div class="caption-content">
                                                    <h2 class="caption-title">The Biggest</h2>
                                                    <h3 class="caption-subtitle">Sale</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Slide 1 -->

                            <!-- Slide 2 -->
                            <div class="item slide2 alt">
                                <img class="slide-img" src="#" alt=""/>
                                <div class="caption">
                                    <div class="container">
                                        <div class="div-table">
                                            <div class="div-cell">
                                                <div class="caption-content">
                                                    <h2 class="caption-title">New Arrivals On Sale</h2>
                                                    <h3 class="caption-subtitle"><span>Summer Collection</span></h3>
                                                    <div class="price">
                                                        <span>$</span><ins>49</ins>
                                                        <span>$</span><del>86</del>
                                                    </div>
                                                    <p class="caption-text">
                                                        <a class="btn btn-theme" href="#">Shop this item Now</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Slide 2 -->

                            <!-- Slide 3 -->
                            <div class="item slide3 dark">
                                <img class="slide-img" src="#" alt=""/>
                                <div class="caption">
                                    <div class="container">
                                        <div class="div-table">
                                            <div class="div-cell">
                                                <div class="caption-content">
                                                    <h2 class="caption-title">New Arrivals On Sale</h2>
                                                    <h3 class="caption-subtitle"><span>Summer Collection</span></h3>
                                                    <p class="caption-text">
                                                        <a class="btn btn-theme" href="#">Shop this item Now</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Slide 3 -->

                        </div>
                    </div>
                </div>

                <div class="col-md-3 sidebar">
                <!-- widget shop categories -->
                    <div class="widget shop-categories">
                        <h4 class="widget-title">Categories</h4>
                        <div class="widget-content">
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                        <a  href="/product/{{$category->name}}" >{{$category->name}}</a>
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
            <h2 class="section-title"><span>The Newest Products</span></h2>
            <div class="tab-content">


                <!-- tab 2 -->
                <div class="tab-pane fade active in" id="tab-2">
                    <div class="row">
                       @foreach ($latestProducts as $product)


                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail no-border no-padding">
                                <div class="media">
                                    <a class="media-link" data-gal="prettyPhoto" href='{{asset('storage/products/' . $product->image1)}}'>
                                        <img src='{{asset('storage/products/' . $product->image1)}}' alt=""/>
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
                                    <div class="price"><ins>{{$product->price}} EGP</ins> <del>{{$product->sale_price}} EGP</del></div>
                                    <div class="buttons">

                                            <form data-id="{{$product->id}}" name = 'wishlist' style="display:inline">
                                            @csrf
                                            <button class="btn btn-theme btn-theme-transparent btn-wish-list" type="submit"><i class="fa fa-heart"></i></button>
                                            </form>

                                            <form data-id="{{$product->id}}" data-price="{{$product->price}}" name = 'cart' style="display:inline">
                                            @csrf
                                            <button class="btn btn-theme btn-theme-dark btn-icon-left" type="submit" ><i class="fa fa-shopping-cart"></i>Add To Cart</button>
                                            </form><!--

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
                    <h2>Free shipping on all orders over $45</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <h2 class="section-title"><span>Top Rated Products</span></h2>
            <div class="top-products-carousel">
                <div class="owl-carousel" id="top-products-carousel">

                    @foreach ($products as $product)

                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="{{asset('storage/products/' . $product->image1)}}">
                                <img src="{{asset('storage/products/' . $product->image1)}}" alt=""/>
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
                            <div class="price"><ins>{{$product->price}}</ins> <del>{{$product->sale_price}}</del></div>
                            <div class="buttons">

                                <form data-id="{{$product->id}}" name = 'wishlist' style="display:inline">
                                    @csrf
                                    <button class="btn btn-theme btn-theme-transparent btn-wish-list" type="submit"><i class="fa fa-heart"></i></button>
                                    </form>

                                    <form data-id="{{$product->id}}" data-price="{{$product->price}}" name = 'cart' style="display:inline">
                                    @csrf
                                    <button class="btn btn-theme btn-theme-dark btn-icon-left" type="submit" ><i class="fa fa-shopping-cart"></i>Add To Cart</button>
                                    </form><!--

                                --><a style="visibility: hidden" class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
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
            </div>
        </div>
    </section>
    <!-- /PAGE -->

</div>


<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

@endsection
