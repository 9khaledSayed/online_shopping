<!DOCTYPE HTML>
<html>


<head>
    @include('layouts.parts.admin.head')
</head>

<body>


<div class="global-wrap">


    @include('layouts.parts.admin.demo_changer')


    @include('layouts.parts.admin.header')


    @yield('content')


    @include('layouts.parts.admin.footer')


    @include('layouts.parts.admin.foot')


</div>

</body>

</html>

