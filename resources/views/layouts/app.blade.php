<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(App::getLocale() == 'ar')dir="rtl"@endif>

<head>
    @include('layouts.parts.admin.head')
</head>
    <body class="account">
        <nav class="navbar navbar-default yamm navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="font-size: 20px;font-weight: 800;">{{__('Online Shopping')}}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="{{route('login')}}" class="dropdown-toggle button-wave" aria-expanded="true">{{__('Login')}}</a>
                </li>
                <li class="dropdown">
                    <a href="{{route('register')}}" class="dropdown-toggle button-wave" role="button" aria-haspopup="true" aria-expanded="false">{{__('Register')}}</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right navbar-top-drops">
                <li class="dropdown">
                    <a
                        href="@if(App::getLocale() == 'en') {{ route('change_language', 'ar')}}@else {{ route('change_language', 'en') }}@endif">
                        @if(App::getLocale() == 'en')العربية@else English @endif <i class="fa fa-globe" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
        @include('layouts.parts.admin.foot')
    </body>

</html>






