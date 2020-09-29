@extends('layouts.customer')

@section('content')

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <div class="row product-single">
                    <div class="col-md-6">
                        <div class="badges">
                            <div class="new">new</div>
                        </div>
                        <div class="owl-carousel img-carousel">
                            <div class="item">
                                <a class="btn btn-theme btn-theme-transparent btn-zoom" href="assets/img/preview/shop/product-1-big.jpg" data-gal="prettyPhoto"><i class="fa fa-plus"></i></a>
                                <a  data-gal="prettyPhoto"><img class="img-responsive"  src="{{asset('storage/products/' . $product->image1)}}" alt=""/></a></div>
                            <div class="item">
                                <a class="btn btn-theme btn-theme-transparent btn-zoom" href="assets/img/preview/shop/product-1-big.jpg" data-gal="prettyPhoto"><i class="fa fa-plus"></i></a>
                                <a  data-gal="prettyPhoto"><img class="img-responsive"src="{{asset('storage/products/' . $product->image2)}}" alt=""/></a ></div>
                            <div class="item">
                                <a class="btn btn-theme btn-theme-transparent btn-zoom" href="assets/img/preview/shop/product-1-big.jpg" data-gal="prettyPhoto"><i class="fa fa-plus"></i></a>
                                <a data-gal="prettyPhoto"><img class="img-responsive" src="{{asset('storage/products/' . $product->image3)}}" alt=""/></a></div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <h2 class="product-title">{{$product->name}}</h2>
                        <div class="product-rating clearfix">
                            <div class="rating">
                                        <!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>

                            </div>
                            </div>
                        <div class="product-availability">Availabile : <strong> In stock</strong>  {{$product->quantity}} Item(s)</div>
                        <hr class="page-divider small"/>

                        <div class="product-price">{{$product->price}} EGP</div>
                        <hr class="page-divider"/>

                        <div class="product-text">
                            <p><h4>{{App\Category::where('id',$product->category_id)->pluck('name')->first()}}</h4></p>
                        </div>
                        <hr class="page-divider"/>


                        <hr class="page-divider small"/>


                        <div class="buttons">
                            <div class="quantity">
                                <button class="btn" onclick="if (document.getElementById('pro_quntity{{$product->id}}').value > 1) {document.getElementById('pro_quntity{{$product->id}}').value -=1;} "><i class="fa fa-minus"></i></button>
                                <input id="pro_quntity{{$product->id}}" class="form-control qty" style="width:70px;text-align:center" type="number" step="1" min="1" name="quantity" value="1" title="Qty">
                                <button class="btn" onclick="document.getElementById('pro_quntity{{$product->id}}').value = parseInt(document.getElementById('pro_quntity{{$product->id}}').value) + 1;"><i class="fa fa-plus"></i></button>
                            </div>

                            @if(Auth::guard('customer')->check())
                            <form data-id="{{$product->id}}" data-price="{{$product->price}}" name = 'cart' style="display:inline">
                                @csrf
                                <button class="btn btn-theme btn-cart btn-icon-left" type="submit" ><i class="fa fa-shopping-cart"></i>Add To Cart</button>
                            </form>

                            <form data-id="{{$product->id}}" name = 'wishlist' style="display:inline">
                                @csrf
                                <button class="btn btn-theme btn-wish-list" type="submit"><i class="fa fa-heart"></i></button>
                            </form>
                            @else
                            <form  action="/login/customer"  style="display:inline">
                                @csrf
                                <button class="btn btn-theme btn-cart btn-icon-left" type="submit" ><i class="fa fa-shopping-cart"></i>Add To Cart</button>
                            </form>

                            <form method="GET" action="/login/customer" style="display:inline">
                                @csrf
                                <button class="btn btn-theme btn-wish-list" type="submit"><i class="fa fa-heart"></i></button>
                            </form>
                            @endif
                        </div>

                        <hr class="page-divider small"/>

                        <hr class="page-divider small"/>

                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->


        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <div class="tabs-wrapper content-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#item-description" data-toggle="tab">Item Description</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="item-description">
                            <p>{{$product->description}} </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->



    </div>
    <!-- /CONTENT AREA -->

@endsection
