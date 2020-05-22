<!-- Static navbar -->

<nav class="navbar navbar-default yamm navbar-fixed-top">
            <div class="container-fluid">
                <button type="button" class="navbar-minimalize minimalize-styl-2  pull-left "><i class="fa fa-bars"></i></button>
                <span class="search-icon"><i class="fa fa-search"></i></span>
                <div class="search" style="display: none;">
                    <form role="form">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
                        <span class="search-close"><i class="fa fa-times"></i></span>
                    </form>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Herbal-Phama</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown" aria-expanded="true">{{__('Menu')}}<span class="caret"></span></a>
                            <ul class="dropdown-menu mega-dropdown-menu" style="width: 900px;">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row ">
                                            <div class="col-sm-3 ">
                                                <h3 class="yamm-category">{{__('Slides')}}</h3>
                                                <ul class="list-unstyled ">
                                                    <li><a href="{{route('dashboard.slides.index')}}">{{__('Slides List')}}</a></li>
                                                    <li><a href="{{route('dashboard.slides.create')}}">{{__('Add Slide')}}</a></li>  
                                                </ul>
                                            </div>
                                            
                                            <div class="col-sm-3 ">
                                                <h3 class="yamm-category">{{__('Customers')}}</h3>
                                                <ul class="list-unstyled ">
                                                    <li><a href="{{route('dashboard.customers.index')}}">{{__('Customers List')}}</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <h3 class="yamm-category">{{__('Orders')}}</h3>
                                                <ul class="list-unstyled ">
                                                    <li><a href="{{route('dashboard.orders.index')}}">{{__('Orders List')}}</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <h3 class="yamm-category">{{__('Categories')}}</h3>
                                                <ul class="list-unstyled ">
                                                    <li><a href="{{route('dashboard.categories.index')}}">{{__('Categories List')}}</a></li>
                                                    <li><a href="{{route('dashboard.categories.create')}}">{{__('Add Category')}}</a></li>  
                                                </ul>
                                            </div>
                                            <div class="col-sm-3 ">
                                                <h3 class="yamm-category">{{__('Products')}}</h3>
                                                <ul class="list-unstyled ">
                                                    <li><a href="{{route('dashboard.products.index')}}">{{__('Products List')}}</a></li>
                                                    <li><a href="{{route('dashboard.products.create')}}">{{__('Add Product')}}</a></li>  
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right navbar-top-drops">
                        <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-envelope"></i> <span class="badge badge-xs badge-info">6</span></a>

                            <ul class="dropdown-menu dropdown-lg">
                                <li class="notify-title">
                                    3 New messages 
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <img src="{{ asset('admin_assets/light_blue/'. App::getLocale() .'/images/avtar-1.jpg') }}" alt="" class="img-circle" width="30">
                                        </span>
                                        <span class="block">
                                            John Doe
                                        </span>
                                        <span class="media-body">
                                            Lorem ipsum dolor sit amet
                                            <em>28 minutes ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                        <img src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/images/avtar-2.jpg') }}" alt="" class="img-circle" width="30">
                                        </span>
                                        <span class="block">
                                            John Doe
                                        </span>
                                        <span class="media-body">
                                            Lorem ipsum dolor sit amet
                                            <em>28 minutes ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                        <img src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/images/avtar-3.jpg') }}" alt="" class="img-circle" width="30">
                                        </span>
                                        <span class="block">
                                            John Doe
                                        </span>
                                        <span class="media-body">
                                            Lorem ipsum dolor sit amet
                                            <em>28 minutes ago</em>
                                        </span>
                                    </a>
                                </li>
                                <li class="read-more"><a href="#">View All Messages <i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="badge badge-xs badge-warning">6</span></a>

                            <ul class="dropdown-menu dropdown-lg">
                                <li class="notify-title">
                                    3 New messages 
                                </li>
                                <li class="clearfix">
                                    <a href="#">
                                        <span class="pull-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>

                                        <span class="media-body">
                                            15 New Messages
                                            <em>20 Minutes ago</em>
                                        </span>
                                    </a>
                                </li>  
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><img src="{{ asset('assets/img/flags/' . App::getLocale() . '.svg')}}" alt=""/><i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="dropdown-menu dropdown-lg">
                                @foreach (Config::get('app.languages') as $language)
                                @if ($language != App::getLocale())
                                <li>
                                    <a href="{{ route('langroute', $language) }}">
                                        <img src="{{ asset('assets/img/flags/' . $language . '.svg')}}"/>
                                    {{($language === 'ar') ? __('Arabic'):__('English')}}</a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>