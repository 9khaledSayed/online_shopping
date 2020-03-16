@extends('layouts.admin')
<!-- //////////////////////////////////
//////////////PAGE CONTENT/////////////
////////////////////////////////////-->

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <aside class="sidebar-left">
                    <ul class="nav nav-tabs nav-stacked nav-coupon-category">
                        <li class="active"><a href="#"><i class="fa fa-ticket"></i>All</a>
                        </li>
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
                        <li><a href="#"><i class="fa fa-home"></i>Home & Garden</a>
                        </li>
                        <li><a href="#"><i class="fa fa-plane"></i>Travel</a>
                        </li>
                    </ul>
                    <div class="sidebar-box">
                        <h5>Filter By Price</h5>
                        <input type="text" id="price-slider">
                    </div>
                    <div class="sidebar-box">
                        <h5>Product Feature</h5>
                        <ul class="checkbox-list">
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">On Sale</label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">New</label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">Ending Soon</label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">High Rating</label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">Free Shipping</label>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <h5>Recent Viewed</h5>
                        <ul class="thumb-list">
                            <li>
                                <a href="#">
                                    <img src="img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                </a>
                                <div class="thumb-list-item-caption">
                                    <h5 class="thumb-list-item-title"><a href="#">Best Camera Lenthes</a></h5>
                                    <p class="thumb-list-item-price">$343</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                </a>
                                <div class="thumb-list-item-caption">
                                    <h5 class="thumb-list-item-title"><a href="#">New Glass Collection</a></h5>
                                    <p class="thumb-list-item-price">$402</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/waipio_valley_70x70.jpg" alt="Image Alternative text" title="waipio valley" />
                                </a>
                                <div class="thumb-list-item-caption">
                                    <h5 class="thumb-list-item-title"><a href="#">Awesome Vacation</a></h5>
                                    <p class="thumb-list-item-price">$387</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <h5>Popular</h5>
                        <ul class="thumb-list">
                            <li>
                                <a href="#">
                                    <img src="img/food_is_pride_70x70.jpg" alt="Image Alternative text" title="Food is Pride" />
                                </a>
                                <div class="thumb-list-item-caption">
                                    <h5 class="thumb-list-item-title"><a href="#">Best Pasta</a></h5>
                                    <p class="thumb-list-item-price">$472</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/old_no7_70x70.jpg" alt="Image Alternative text" title="Old No7" />
                                </a>
                                <div class="thumb-list-item-caption">
                                    <h5 class="thumb-list-item-title"><a href="#">Fancy Coffe Cup</a></h5>
                                    <p class="thumb-list-item-price">$243</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/the_hidden_power_of_the_heart_70x70.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                                </a>
                                <div class="thumb-list-item-caption">
                                    <h5 class="thumb-list-item-title"><a href="#">Beach Holidays</a></h5>
                                    <p class="thumb-list-item-price">$408</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-sort">
                            <span class="product-sort-selected">sort by <b>Price</b></span>
                            <a href="#" class="product-sort-order fa fa-angle-down"></a>
                            <ul>
                                <li><a href="#">sort by Name</a>
                                </li>
                                <li><a href="#">sort by Date</a>
                                </li>
                                <li><a href="#">sort by Popularity</a>
                                </li>
                                <li><a href="#">sort by Rating</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-7">
                        <div class="product-view pull-right">
                            <a class="fa fa-th-large active" href="#"></a>
                            <a class="fa fa-list" href="category-page-thumbnails-shop-horizontal.html"></a>
                        </div>
                    </div>
                </div>
                <div class="row row-wrap">
                    <div class="col-md-4">
                        <div class="product-thumb">
                            <header class="product-header">
                                <img src="img/the_hidden_power_of_the_heart_800x600.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
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
                                <h5 class="product-title">Beach Holidays</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$161</span>
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
                                <img src="img/our_coffee_miss_u_800x600.jpg" alt="Image Alternative text" title="Our Coffee miss u" />
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
                                <h5 class="product-title">Coffe Shop Discount</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$143</span>
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
                                <img src="img/nikon_prime_love_800x600.jpg" alt="Image Alternative text" title="Nikon Prime love" />
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
                                <h5 class="product-title">Best Camera Lenthes</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$157</span>
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
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$122</span>
                                        </li>
                                        <li><span class="product-old-price">$272</span>
                                        </li>
                                        <li><span class="product-save">Save 45%</span>
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
                                <img src="img/my_ice_cream_and_your_ice_cream_spoons_800x600.jpg" alt="Image Alternative text" title="My Ice Cream and Your Ice Cream Spoons" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.5/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Lovely Ice Cream Spoons</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$61</span>
                                        </li>
                                        <li><span class="product-old-price">$124</span>
                                        </li>
                                        <li><span class="product-save">Save 49%</span>
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
                                <h5 class="product-title">Awesome Vacation</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$101</span>
                                        </li>
                                        <li><span class="product-old-price">$195</span>
                                        </li>
                                        <li><span class="product-save">Save 52%</span>
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
                                <img src="img/the_best_mode_of_transport_here_in_maldives_800x600.jpg" alt="Image Alternative text" title="the best mode of transport here in maldives" />
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
                                <h5 class="product-title">Finshing in Maldives</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$240</span>
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
                                <img src="img/the_violin_800x600.jpg" alt="Image Alternative text" title="The Violin" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.1/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Violin Lessons</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$66</span>
                                        </li>
                                        <li><span class="product-old-price">$195</span>
                                        </li>
                                        <li><span class="product-save">Save 34%</span>
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
                                <img src="img/aspen_lounge_chair_800x600.jpg" alt="Image Alternative text" title="Aspen Lounge Chair" />
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
                                <h5 class="product-title">Aspen Lounge Chair</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$234</span>
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
                                <img src="img/amaze_800x600.jpg" alt="Image Alternative text" title="AMaze" />
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
                                <h5 class="product-title">New Glass Collection</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$195</span>
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
                                <img src="img/food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="4.6/5 rating">
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
                                <h5 class="product-title">Best Pasta</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
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
                                <img src="img/cup_on_red_800x600.jpg" alt="Image Alternative text" title="Cup on red" />
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
                                <h5 class="product-title">Fancy Coffe Cup</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$255</span>
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
                                <img src="img/cascada_800x600.jpg" alt="Image Alternative text" title="cascada" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.6/5 rating">
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
                                <h5 class="product-title">Adventure in Woods</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$220</span>
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
                                <img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.4/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half-empty"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="product-title">Playstation Accessories</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$215</span>
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
                                <img src="img/ana_29_800x600.jpg" alt="Image Alternative text" title="Ana 29" />
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
                                <h5 class="product-title">Hot Summer Collection</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$148</span>
                                        </li>
                                        <li><span class="product-old-price">$269</span>
                                        </li>
                                        <li><span class="product-save">Save 55%</span>
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
                                <img src="img/iphone_5_ipad_mini_ipad_3_800x600.jpg" alt="Image Alternative text" title="iPhone 5 iPad mini iPad 3" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="4/5 rating">
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
                                <h5 class="product-title">Electronics Big Deal</h5>
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$153</span>
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
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$65</span>
                                        </li>
                                        <li><span class="product-old-price">$125</span>
                                        </li>
                                        <li><span class="product-save">Save 52%</span>
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
                                <img src="img/green_furniture_800x600.jpg" alt="Image Alternative text" title="Green Furniture" />
                            </header>
                            <div class="product-inner">
                                <ul class="icon-group icon-list-rating" title="3.8/5 rating">
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
                                <p class="product-desciption">Volutpat torquent orci luctus pharetra volutpat nisl dis</p>
                                <div class="product-meta">
                                    <ul class="product-price-list">
                                        <li><span class="product-price">$282</span>
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
                <ul class="pagination">
                    <li class="prev disabled">
                        <a href="#"></a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li class="next">
                        <a href="#"></a>
                    </li>
                </ul>
                <div class="gap"></div>
            </div>
        </div>
    </div>
    <!-- //////////////////////////////////
    //////////////END PAGE CONTENT/////////
    ////////////////////////////////////-->
@endsection
