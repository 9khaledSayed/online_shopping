<!DOCTYPE HTML>
<html>


<head>
    @include('layouts.parts.user.head')
</head>

<body>


<div class="global-wrap">


    @include('layouts.parts.user.demo_changer')


    @include('layouts.parts.user.header')


    @yield('content')


    @include('layouts.parts.user.footer')


    @include('layouts.parts.user.foot')


</div>

</body>

</html>

