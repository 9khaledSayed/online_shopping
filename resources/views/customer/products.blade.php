@extends('layouts.customer')

@section('content')
<!-- CONTENT AREA -->
<div class="content-area">
    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs">
        <div class="container">
            <div class="page-header">
                <h1>
                    {{$category}}
                </h1>
            </div>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li class="active">
                    {{$category}}
                </li>
            </ul>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE WITH SIDEBAR -->
    <section class="page-section with-sidebar">
        <div class="container">
            <div class="row">
            <!-- CONTENT AREA -->
            <div class="content-area">
                <!-- PAGE WITH SIDEBAR -->

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
                                    <h4 class="widget-title">Categories</h4>
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

                <br><br><br>

                <section class="page-section with-sidebar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 content" id="content">
                                <!-- Products grid -->
                                <div class="row products grid">


                    <!-- /widget search -->

                <!-- CONTENT -->
                <div class="col-md-12 content" id="content">

                    <!-- shop-sorting -->
                    <br> <br> <br> <hr>
                    <!-- /shop-sorting -->
                    <!-- Products grid -->
                    <div class="row products grid">

                        @foreach( $products as $product)
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="">
                                        <a class="media-link" href="/product/{{$product->id}}">

                                        <img src='{{asset('storage/products/' . $product->image1)}}' style="height: 258px;width: 262px;" alt=""/>

                                        <span class="icon-view">
                                            <strong><i class="fa fa-eye"></i></strong>
                                        </span>
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <h4 class="caption-title">{{$product->name}}</h4>
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
                        </div>
                        @endforeach
                    </div>
                    <!-- /Products grid -->
                    <!-- Pagination -->
                    <div class="pagination-wrapper" style="text-align:center">
                        <h4 style="visibility:hidden">a</h4>
                        <ul class="pagination">
                            <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i> Previous</a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next <i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- /Pagination -->
                </div>
                <!-- /CONTENT -->
            </div>
          </div>
        </div>
       </div>
    </section>
    <!-- /PAGE WITH SIDEBAR -->
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
                                <h4 class="media-heading">Buy 3 Get 1</h4>
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

@endsection
