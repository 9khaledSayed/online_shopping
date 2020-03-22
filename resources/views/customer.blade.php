@extends('layouts.user')

@section('content')

    <!-- //////////////////////////////////
//////////////PAGE CONTENT/////////////
////////////////////////////////////-->

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <aside class="sidebar-left">
                    <h3 class="mb20 text-center">I am looking for</h3>
                    <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                        <li><a href="#"><i class="fa fa-cutlery"></i>Food & Drink</a>
                        </li>
                        <li><a href="#"><i class="fa fa-calendar"></i>Events</a>
                        </li>
                        <li><a href="#"><i class="fa fa-female"></i>Beauty</a>
                        </li>
                        <li><a href="#"><i class="fa fa-bolt"></i>Fitness</a>
                        </li>
                        <li><a href="#"><i class="fa fa-headphones"></i>Electronics</a>
                        </li>
                        <li><a href="#"><i class="fa fa-image"></i>Furniture</a>
                        </li>
                        <li><a href="#"><i class="fa fa-umbrella"></i>Fashion</a>
                        </li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping</a>
                        </li>
                        <li><a href="#"><i class="fa fa-home"></i>Home & Graden</a>
                        </li>
                        <li><a href="#"><i class="fa fa-plane"></i>Travel</a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-9">
                <h1 class="mb20 text-center">Weekly Featured <small><a href="#">View All</a></small></h1>
                <div class="row row-wrap">
                    <div class="col-md-4">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/green_furniture_800x600.jpg" alt="Image Alternative text" title="Green Furniture" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.7/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Green Furniture Pack</h5>
                                <p class="product-desciption">Senectus ut luctus rhoncus proin mattis aenean cubilia</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$177</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/hot_mixer_800x600.jpg" alt="Image Alternative text" title="Hot mixer" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Modern DJ Set</h5>
                                <p class="product-desciption">Senectus ut luctus rhoncus proin mattis aenean cubilia</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$190</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/waipio_valley_800x600.jpg" alt="Image Alternative text" title="waipio valley" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="4.1/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Awesome Vacation</h5>
                                <p class="product-desciption">Senectus ut luctus rhoncus proin mattis aenean cubilia</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$135</span>
                                        </li>
                                    </ul>
                                    <ul class="product-actions-list">
                                        <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                        </li>
                                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap gap-small"></div>
        <div class="row row-wrap">
            <div class="col-md-4">
                <div class="product-banner">
                    <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                    <div class="product-banner-inner">
                        <h5>Playstation Accsories</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-banner">
                    <img src="img/urbex_esch_lux_with_laney_and_laaaaag_800x600.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                    <div class="product-banner-inner">
                        <h5>Canon Cameras</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-banner">
                    <img src="img/amaze_800x600.jpg" alt="Image Alternative text" title="AMaze" />
                    <div class="product-banner-inner">
                        <h5>New Glass Collections</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap gap-small"></div>
        <h1 class="mb20 text-center">New Arrivals <small><a href="#">View all</a></small></h1>
        <div class="row row-wrap">
            <div class="col-md-3">
                <div class="product-thumb">
                    <header class="product-header">
                        <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                    </header>
                    <div class="product-inner">
                        <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <h5 class="product-title">Playstation Accessories</h5>
                        <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                        <div class="product-meta">
                            <ul class="product-price-list">
                                <li><span class="product-price">$119</span>
                                </li>
                            </ul>
                            <p class="product-category"><i class="fa fa-headphones"></i>electronics</p>
                            <ul class="product-actions-list">
                                <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                </li>
                                <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-thumb">
                    <header class="product-header"><span class="product-label label label-success">New</span>
                        <img src="img/food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride" />
                    </header>
                    <div class="product-inner">
                        <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <h5 class="product-title">Best Pasta</h5>
                        <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                        <div class="product-meta">
                            <ul class="product-price-list">
                                <li><span class="product-price">$264</span>
                                </li>
                            </ul>
                            <p class="product-category"><i class="fa fa-cutlery"></i>food & drink</p>
                            <ul class="product-actions-list">
                                <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                </li>
                                <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-thumb">
                    <header class="product-header">
                        <img src="img/the_violin_800x600.jpg" alt="Image Alternative text" title="The Violin" />
                    </header>
                    <div class="product-inner">
                        <ul class="icon-group icon-list-rating" title="3.9/5 rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <h5 class="product-title">Violin Lessons</h5>
                        <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                        <div class="product-meta">
                            <ul class="product-price-list">
                                <li><span class="product-price">$167</span>
                                </li>
                            </ul>
                            <p class="product-category"><i class="fa fa-calendar"></i>events</p>
                            <ul class="product-actions-list">
                                <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                </li>
                                <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-thumb">
                    <header class="product-header">
                        <img src="img/waipio_valley_800x600.jpg" alt="Image Alternative text" title="waipio valley" />
                    </header>
                    <div class="product-inner">
                        <ul class="icon-group icon-list-rating" title="4.8/5 rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <h5 class="product-title">Awesome Vacation</h5>
                        <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                        <div class="product-meta">
                            <ul class="product-price-list">
                                <li><span class="product-price">$166</span>
                                </li>
                            </ul>
                            <p class="product-category"><i class="fa fa-plane"></i>travel</p>
                            <ul class="product-actions-list">
                                <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                </li>
                                <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-thumb">
                    <header class="product-header"><span class="product-label label label-warning">Best Seller</span>
                        <img src="img/ana_29_800x600.jpg" alt="Image Alternative text" title="Ana 29" />
                    </header>
                    <div class="product-inner">
                        <ul class="icon-group icon-list-rating" title="4.3/5 rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-half-empty"></i>
                            </li>
                        </ul>
                        <h5 class="product-title">Hot Summer Collection</h5>
                        <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                        <div class="product-meta">
                            <ul class="product-price-list">
                                <li><span class="product-price">$281</span>
                                </li>
                            </ul>
                            <p class="product-category"><i class="fa fa-calendar"></i>events</p>
                            <ul class="product-actions-list">
                                <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                </li>
                                <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-thumb">
                    <header class="product-header">
                        <img src="img/the_hidden_power_of_the_heart_800x600.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                    </header>
                    <div class="product-inner">
                        <ul class="icon-group icon-list-rating" title="4.2/5 rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-half-empty"></i>
                            </li>
                        </ul>
                        <h5 class="product-title">Beach Holidays</h5>
                        <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                        <div class="product-meta">
                            <ul class="product-price-list">
                                <li><span class="product-price">$210</span>
                                </li>
                            </ul>
                            <p class="product-category"><i class="fa fa-plane"></i>travel</p>
                            <ul class="product-actions-list">
                                <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                </li>
                                <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-thumb">
                    <header class="product-header"><span class="product-label label label-danger">Hot</span>
                        <img src="img/a_turn_800x600.jpg" alt="Image Alternative text" title="a turn" />
                    </header>
                    <div class="product-inner">
                        <ul class="icon-group icon-list-rating" title="3/5 rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <h5 class="product-title">Diving with Sharks</h5>
                        <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                        <div class="product-meta">
                            <ul class="product-price-list">
                                <li><span class="product-price">$138</span>
                                </li>
                            </ul>
                            <p class="product-category"><i class="fa fa-calendar"></i>events</p>
                            <ul class="product-actions-list">
                                <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                </li>
                                <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-thumb">
                    <header class="product-header"><span class="product-label label label-info">Featured</span>
                        <img src="img/hot_mixer_800x600.jpg" alt="Image Alternative text" title="Hot mixer" />
                    </header>
                    <div class="product-inner">
                        <ul class="icon-group icon-list-rating" title="4.5/5 rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-half-empty"></i>
                            </li>
                        </ul>
                        <h5 class="product-title">Modern DJ Set</h5>
                        <p class="product-desciption">Purus fames consectetur mi per quam volutpat erat</p>
                        <div class="product-meta">
                            <ul class="product-price-list">
                                <li><span class="product-price">$257</span>
                                </li>
                            </ul>
                            <p class="product-category"><i class="fa fa-headphones"></i>electronics</p>
                            <ul class="product-actions-list">
                                <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                </li>
                                <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
        <div class="row row-wrap">
            <div class="col-md-4">
                <div class="sale-point"><i class="fa fa-truck sale-point-icon"></i>
                    <h5 class="sale-point-title">Fast & Free Shipping</h5>
                    <p class="sale-point-description">Sapien quis fames congue ultricies himenaeos metus maecenas nam conubia suscipit lacinia facilisis pulvinar orci</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sale-point"><i class="fa fa-tags sale-point-icon"></i>
                    <h5 class="sale-point-title">Best Discounts</h5>
                    <p class="sale-point-description">In eget lacinia pulvinar habitasse vehicula turpis luctus sagittis montes interdum posuere parturient nostra odio</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sale-point"><i class="fa fa-money sale-point-icon"></i>
                    <h5 class="sale-point-title">Guaranteed Refund</h5>
                    <p class="sale-point-description">Ridiculus lacinia erat semper mattis auctor arcu per etiam aptent consequat interdum tristique habitasse aenean</p>
                </div>
            </div>
        </div>
        <div class="gap gap-small"></div>
    </div>


    <!-- //////////////////////////////////
//////////////END PAGE CONTENT/////////
////////////////////////////////////-->

@endsection
