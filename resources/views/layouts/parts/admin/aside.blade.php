<nav class="navbar-aside navbar-static-side" role="navigation">
    <div class="sidebar-collapse nano">
        <div class="nano-content">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown side-profile text-left">
                        <span style="display: block;">
                            <img alt="image" class="img-circle" src="{{ asset(auth()->user()->profile_photo) }}" width="40">
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear" style="display: block;"> <span class="block m-t-xs"> <strong class="font-bold"> Hi {{auth()->user()->name}}!  <b class="caret"></b></strong>
                                </span></span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="{{route('dashboard.profile.index')}}"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i class="fa fa-key"></i>
                                 {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="active">
                    <a href="{{route('dashboard.index')}}"><i class="fa fa-th-large"></i> <span class="nav-label"> {{__('Dashboard')}} </span><span class="fa arrow"></span></a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">{{ __('Admins') }} </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{route('dashboard.admins.index')}}">{{ __('Admins List')}}</a></li>
                        <li><a href="{{route('dashboard.admins.create')}}">{{ __('Add Admin')}}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users" aria-hidden="true"></i> <span class="nav-label"> {{ __('Customers')}}</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('dashboard.customers.index') }}">{{__('Customers list')}}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cubes" aria-hidden="true"></i> <span class="nav-label"> {{ __('Categories')}}</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('dashboard.categories.index') }}">{{ __('Categories list')}}</a></li>
                        <li><a href="{{ route('dashboard.categories.create') }}">{{ __('Add Category')}}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cube" aria-hidden="true"></i> <span class="nav-label">{{ __('Products')}}</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('dashboard.products.index') }}">{{ __('Products list')}}</a></li>
                        <li><a href="{{ route('dashboard.products.create')}}">{{ __('Add Product')}}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> <span class="nav-label"> {{ __('Slides')}}</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{route('dashboard.slides.index')}}">{{ __('Slides List')}}</a></li>
                        <li><a href="{{route('dashboard.slides.create')}}">{{ __('Add Slide')}}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"> </i><span class="nav-label"> {{ __('Orders')}}</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('dashboard.orders.index') }}">{{ __('Orders list')}}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> <span class="nav-label"> {{ __('Governments')}}</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{route('dashboard.governments.index')}}">{{ __('Governments List')}}</a></li>
                        <li><a href="{{route('dashboard.governments.create')}}">{{ __('Add Government')}}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> <span class="nav-label"> {{ __('cities')}}</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{route('dashboard.cities.index')}}">{{ __('Cities List')}}</a></li>
                        <li><a href="{{route('dashboard.cities.create')}}">{{ __('Add City')}}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i class="fa fa-key"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>

        </div>
    </div>
</nav>

