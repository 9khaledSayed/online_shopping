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
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">Image</th>
                                            <th style="text-align:center">Product Name</th>
                                            <th style="text-align:center">Price</th>
                                            <th style="text-align:center">Total</th>
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
                                                <img style="width:150px;height:170px;border-radius:10px;" src="{{asset('storage/products/' . $product->image1)}}" alt=""/>
                                            </div>

                                            <div>
                                                <form data-id="{{$product->id}}" data-deleted_id = "{{$wishlist->id}}" data-price="{{$product->price}}" name = 'cart' style="display:inline">
                                                    @csrf
                                                    <button class="btn btn-theme btn-theme-dark btn-icon-left" type="submit" ><i class="fa fa-shopping-cart"></i>Add To Cart</button>
                                                </form>
                                                <br><br>
                                                <div>
                                                    <button class="btn btn-theme btn-theme-dark btn-icon-left"  onclick="document.getElementById('pro_quntity{{$wishlist->id}}').value = parseInt(document.getElementById('pro_quntity{{$wishlist->id}}').value) + 1;" type="submit"><i class="fa fa-plus"></i></button>
                                                    <input id="pro_quntity{{$wishlist->id}}" class="btn btn-theme btn-theme-dark btn-icon-left" style="width:70px;text-align:center" type="number" step="1" min="1" name="quantity" value="{{$wishlist->quantity}}" title="Qty">
                                                    <button class="btn btn-theme btn-theme-dark btn-icon-left"  onclick="if ( parseInt(document.getElementById('pro_quntity{{$wishlist->id}}').value) > 1) {document.getElementById('pro_quntity{{$wishlist->id}}').value -=1;}" type="submit" ><i class="fa fa-minus"></i></button>
                                                </div>
                                            </div>

                                           </div>
                                        </td>

                                             <td align="center" class="description"> <h4><a href="#">{{$product->name}}</a></h4></td>
                                             <td align="center" class="price">{{$product->price}} EGP</td>
                                             <td align="center" class="price">{{$product->price * $wishlist->quantity}} EGP</td>
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
                        </div>
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
                                            <p></p>
                                            <h4 class="media-heading">Buy 3 Get 1</h4>
                                            <p></p>
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
