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
                                <a  data-gal="prettyPhoto"><img class="img-responsive" src='{{asset('storage/products/' . $product->image1)}}' alt=""/></a></div>
                            <div class="item">
                                <a class="btn btn-theme btn-theme-transparent btn-zoom" href="assets/img/preview/shop/product-1-big.jpg" data-gal="prettyPhoto"><i class="fa fa-plus"></i></a>
                                <a  data-gal="prettyPhoto"><img class="img-responsive" src='{{asset('storage/products/' . $product->image2)}}' alt=""/></a ></div>
                            <div class="item">
                                <a class="btn btn-theme btn-theme-transparent btn-zoom" href="assets/img/preview/shop/product-1-big.jpg" data-gal="prettyPhoto"><i class="fa fa-plus"></i></a>
                                <a data-gal="prettyPhoto"><img class="img-responsive" src='{{asset('storage/products/' . $product->image3)}}' alt=""/></a></div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <h2 class="product-title">{{$product->name}}</h2>
                        <div class="product-rating clearfix">
                            <div class="rating">
                                <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>

                            </div>
                            </div>
                        <div class="product-availability">Availability: <strong>In stock</strong> {{$product->quantity}} Item(s)</div>
                        <hr class="page-divider small"/>

                        <div class="product-price">{{$product->price}} EGP</div>
                        <hr class="page-divider"/>

                        <div class="product-text">
                            <p>{{$product->description}} </p>
                        </div>
                        <hr class="page-divider"/>


                        <hr class="page-divider small"/>


                        <div class="buttons">
                            <div class="quantity">
                                <button class="btn" onclick="if (document.getElementById('pro_quntity').value > 1) {document.getElementById('pro_quntity').value -=1;} "><i class="fa fa-minus"></i></button>
                                <input id="pro_quntity" class="form-control qty" style="width:70px;text-align:center" type="number" step="1" min="1" name="quantity" value="1" title="Qty">
                                <button class="btn" onclick="document.getElementById('pro_quntity').value = parseInt(document.getElementById('pro_quntity').value) + 1;"><i class="fa fa-plus"></i></button>
                            </div>

                            <form data-id="{{$product->id}}" data-price="{{$product->price}}" name = 'cart' style="display:inline">
                                @csrf
                                <button class="btn btn-theme btn-cart btn-icon-left" type="submit" ><i class="fa fa-shopping-cart"></i>Add To Cart</button>
                            </form>

                            <form data-id="{{$product->id}}" name = 'wishlist' style="display:inline">
                                @csrf
                                <button class="btn btn-theme btn-wish-list" type="submit"><i class="fa fa-heart"></i></button>
                            </form>


                        </div>

                        <hr class="page-divider small"/>

                        <table>
                            <tr>
                                <td class="title">Category:</td>
                                <td>{{App\Category::where('id',$product->category_id)->pluck('name')->first()}}</td>
                            </tr>
                        </table>
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
                        <li><a href="#reviews" data-toggle="tab">Reviews (2)</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="item-description">
                            <p>Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec. </p>
                            <p>Morbi imperdiet lacus nec ante blandit, sit amet fermentum magna faucibus. Nunc nec libero id urna vulputate venenatis. Aenean vulputate odio felis, in rhoncus sapien auctor nec. Donec non posuere sem. Ut quis egestas libero, mattis gravida nibh. Phasellus a nisi ac mi luctus tincidunt et non est. Proin ac orci rhoncus arcu bibendum molestie vel et metus. Aenean iaculis purus et velit iaculis, nec convallis ipsum ornare. Integer a orci enim.</p>
                        </div>
                        <div class="tab-pane fade" id="reviews">

                            <div class="comments">
                                <div class="media comment">
                                    <a href="#" class="pull-left comment-avatar">
                                        <img alt="" src="assets/img/preview/avatars/avatar-1.jpg" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <p class="comment-meta"><span class="comment-author"><a href="#">User Name Here</a> <span class="comment-date"> 26 days ago <i class="fa fa-flag"></i></span></span></p>
                                        <p class="comment-text">Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismd. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere.</p>
                                    </div>
                                </div>
                                <div class="media comment">
                                    <a href="#" class="pull-left comment-avatar">
                                        <img alt="" src="assets/img/preview/avatars/avatar-3.jpg" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <p class="comment-meta"><span class="comment-author"><a href="#">User Name Here</a> <span class="comment-date"> 26 days ago <i class="fa fa-flag"></i></span></span></p>
                                        <p class="comment-text">Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismd. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere.</p>
                                    </div>
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
