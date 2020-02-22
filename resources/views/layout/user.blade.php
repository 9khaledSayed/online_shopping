<!DOCTYPE HTML>
<html>


<head>
    @include('layout.parts.user.head')
</head>

<body>


<div class="global-wrap">


    @include('layout.parts.user.demo_changer')


    @include('layout.parts.user.header')


    @yield('content')


    @include('layout.parts.user.footer')


    @include('layout.parts.user.foot')
</div>
</body>

</html>

