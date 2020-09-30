<!DOCTYPE html>
<html lang="en" @if( App::getLocale() == 'ar' )dir="rtl"@endif>

<head>
    @include('layouts.parts.admin.head')

</head>
<style>
    @font-face {
        font-family: Myriad Pro Regular;
        src: url('{{ asset('fonts/MyriadPro-Regular.otf') }}');
    }
    @font-face {
        font-family: DroidKufi Regular;
        src: url('{{ asset('fonts/Droid.Arabic.Kufi_DownloadSoftware.iR_.ttf') }}');
    }
    *:not(i, fa arrow){
        font-family: 'DroidKufi Regular', "Myriad Pro Regular", serif !important;
    }
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: 'DroidKufi Regular', "Myriad Pro Regular", serif !important;
    }

    /* The grid: Four equal columns that floats next to each other */
    .column {
        float: left;
        width: 25%;
        padding: 10px;
    }

    /* Style the images inside the grid */
    .content {
        position: relative;
        bottom: 0;
        background: transparent;
        color: #f1f1f1;
        width: 100%;
        padding: 20px;]
    }


    .navbar-top-drops img {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        margin-top: 3px;
    }
    @media (min-width: 768px){
        .col-sm-3 {
            width: 19%;
        }
    }
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
        text-align: center;
    }

    .navbar-aside .nav > li > a ,  .nav-header span, h1, h2, h3, h4, h5, h6 , .navbar-brand{
        font-family: 'DroidKufi Regular', "Myriad Pro Regular", serif !important;
        font-weight: 600;
    }
</style>
<body>
@include('layouts.parts.admin.header')
<section class="page">
    @include('layouts.parts.admin.aside')
    <div id="wrapper">
            @yield('content')
    </div>
</section>

@include('layouts.parts.admin.foot')
@stack('scripts')
</body>

</html>
