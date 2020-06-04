<!-- Static navbar -->
<nav class="navbar navbar-default yamm navbar-fixed-top">
    <div class="container-fluid">
        <button type="button" class="navbar-minimalize minimalize-styl-2  pull-left "><i class="fa fa-bars"></i></button>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('dashboard.index')}}" style="font-size: 20px;font-weight: 800;">{{__('Online Shopping')}}</a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right navbar-top-drops">
{{--                <li class="dropdown">--}}
{{--                    <a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown">--}}
{{--                    <i class="fa fa-envelope"></i>--}}
{{--                    @if(auth()->user()->unreadNotifications()->count() > 0)--}}
{{--                        <span class="badge badge-xs badge-info">{{auth()->user()->unreadNotifications()->groupBy('notifiable_type')->count()}}</span>--}}
{{--                    @endif--}}
{{--                    </a>--}}

{{--                    <ul class="dropdown-menu dropdown-lg">--}}
{{--                        @if(auth()->user()->unreadNotifications()->count() > 0)--}}
{{--                            <li class="notify-title">--}}
{{--                                {{auth()->user()->unreadNotifications()->count()}} New messages--}}
{{--                            </li>--}}

{{--                            @if(auth()->user()->unreadNotifications->where('type', 'App\Notifications\CounsellingSession')->count() > 0)--}}
{{--                                <li class="clearfix">--}}
{{--                                    <a href="{{route("dashboard.counselling_sessions.index")}}">--}}
{{--                                        <span class="pull-left">--}}
{{--                                            <i class="fa fa-commenting"></i>--}}
{{--                                        </span>--}}

{{--                                        <span class="media-body">--}}
{{--                                            {{auth()->user()->unreadNotifications->where('type', 'App\Notifications\CounsellingSession')->count()}} New Counselling Sessions--}}
{{--                                        </span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @else--}}
{{--                                <li class="clearfix">--}}
{{--                                    <a href="{{route("dashboard.telephone_consultations.index")}}">--}}
{{--                                        <span class="pull-left">--}}
{{--                                            <i class="fa fa-volume-control-phone"></i>--}}
{{--                                        </span>--}}

{{--                                        <span class="media-body">--}}
{{--                                            {{auth()->user()->unreadNotifications->where('type', 'App\Notifications\TelephoneConsultation')->count()}} New Telephone Consultations--}}
{{--                                        </span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="read-more"><a href="#">There is no messages</a></li>--}}
{{--                        @endif--}}
{{--                    </ul>--}}
{{--                </li>--}}
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
                        <li class="clearfix">
                            <a href="#">
                                <span class="pull-left">
                                    <i class="fa fa-twitter"></i>
                                </span>

                                <span class="media-body">
                                    13 New Followers
                                    <em>2 hours ago</em>
                                </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="#">
                                <span class="pull-left">
                                    <i class="fa fa-download"></i>
                                </span>

                                <span class="media-body">
                                    Download complete
                                    <em>2 hours ago</em>
                                </span>
                            </a>
                        </li>
                        <li class="read-more"><a href="#">View All Alerts <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </li>

                <ul class="nav navbar-nav navbar-right navbar-top-drops">
                    <li class="dropdown">
                        <a
                            href="@if(App::getLocale() == 'en') {{ route('change_language', 'ar')}}@else {{ route('change_language', 'en') }}@endif">
                            @if(App::getLocale() == 'en')العربية@else English @endif <i class="fa fa-globe" aria-hidden="true"></i></a>
                    </li>
                </ul>

            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
