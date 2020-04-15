<!DOCTYPE HTML>
<html>


<head>
    @include('user.parts.head')
</head>

<body>


<div class="global-wrap">


    @include('user.parts.demo_changer')


    @include('user.parts.header')


    @yield('content')


    @include('user.parts.footer')


    @include('user.parts.foot')


</div>

</body>

</html>

