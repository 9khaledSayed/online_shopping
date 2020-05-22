<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Horizon-Admin - Admin</title>

<!-- Bootstrap -->
@if(App::getLocale() == 'ar')
<link href="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/bootstrap/dist/css/bootstrap-rtl.min.css') }}" rel="stylesheet">
@else
<link href="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
@endif

<link href="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/css/waves.min.css') }}" type="text/css" rel="stylesheet">

<link href="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/css/select.css') }}" type="text/css" rel="stylesheet">

<link href="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/css/bootstrap-slider.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/css/nanoscroller.css') }}" rel="stylesheet" >
<link href="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/css/jquery.fileupload.css') }}" rel="stylesheet">
<link href="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/css/morris-0.4.3.min.css')}}" rel="stylesheet">
<link href="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/css/menu-light.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/css/style.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->