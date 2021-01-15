<nav class="main-header navbar navbar-expand navbar-light " >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('index') }}" class="nav-link">@lang('site.home')</a>
        </li>

    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="@lang('site.search')"
                   aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comment"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User Avatar"
                             class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>

                <a href="{{route('messenger')}}" class="dropdown-item dropdown-footer">@lang('messenger.go_to_messenger')</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-flag"></i>
                <span class="badge badge-warning navbar-badge">{{ auth()->user()->unreadNotifications->count() }} </span>
            </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right scrollable-menu" style="max-width: 400px; min-width: 360px;">
                <span class="dropdown-item dropdown-header">{{ auth()->user()->unreadNotifications->count() }}  Notifications</span>
                @if(auth()->user()->notifications ->count() == 0)
                    <div class="dropdown-divider"></div>
                    <p class="text-center"><b >@lang('notif.no_notification')</b></p>
                    <div class="dropdown-divider"></div>
                @else
                <div class="dropdown-divider"></div>
                @foreach(auth()->user()->unreadNotifications  as $notiy)

                    <a href="{{route($notiy->url)}}" class="dropdown-item" style="    background-color: whitesmoke;">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('img/'.$notiy->color)}}" alt="User Avatar"
                                 class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    {{$notiy->header}}
                                    <span class="float-right text-sm text-danger"><i
                                                class="fas fa-quote-left"></i></span>
                                </h3>


                                @if(strlen($notiy->data) > 25)
                                    <p id="sub_{{$notiy->id}}"  class="text-sm"  onmouseenter="get_full_notification(event);" >{{substr($notiy->data, 0, 25)}}.... <b style="color: blue;float: right"> <i class="fas fa-chevron-circle-down"></i></b>  </p>
                                    <p style="display: none" id="full_{{$notiy->id}}" onmouseleave="get_sub_notification(event);"  class="text-sm">{{$notiy->data}}  <b style="color: blue;float: right"> <i class="fas fa-chevron-circle-up"></i></b>  </p>
                                @else
                                    <p   class="text-sm">{{$notiy->data}}</p>
                                @endif



                                <p class="text-sm text-muted" style="float: right;"><i
                                            class="far fa-clock mr-1"></i> {{ $notiy->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                        <!-- Message End -->

                    </a>
                @endforeach



                @foreach(auth()->user()->readNotifications as $notiy)

                    <a href="{{route($notiy->url)}}" class="dropdown-item"  >
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('img/'.$notiy->color)}}" alt="User Avatar"
                                 class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    {{$notiy->header}}
                                    <span class="float-right text-sm text-danger"> </span>
                                </h3>


                                @if(strlen($notiy->data) > 25)
                                    <p id="sub_{{$notiy->id}}"  class="text-sm"  onmouseenter="get_full_notification(event);" >{{substr($notiy->data, 0, 25)}}.... <b style="color: blue;float: right"> <i class="fas fa-chevron-circle-down"></i></b>  </p>
                                    <p style="display: none" id="full_{{$notiy->id}}" onmouseleave="get_sub_notification(event);"  class="text-sm">{{$notiy->data}} <b style="color: blue;float: right"> <i class="fas fa-chevron-circle-up"></i></b>   </p>
                                @else
                                    <p   class="text-sm">{{$notiy->data}}</p>
                                @endif



                                <p class="text-sm text-muted" style="float: right;"><i
                                            class="far fa-clock mr-1"></i> {{ $notiy->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                        <!-- Message End -->

                    </a>
                @endforeach
                    <script !src="">

                        function get_full_notification(e) {
                            e = e || window.event;
                            var target = e.target || e.srcElement;
                            var id = target.id.replace("sub", "full");
                            document.getElementById(target.id).setAttribute('style','display:none');
                            document.getElementById(id).setAttribute('style','display:block');

                        }
                        function get_sub_notification(e) {
                            e = e || window.event;
                            var target = e.target || e.srcElement;
                            var id = target.id.replace("full", "sub");
                            document.getElementById(target.id).setAttribute('style','display:none');
                            document.getElementById(id).setAttribute('style','display:block');
                        }

                    </script>


                <div class="dropdown-divider"></div>
                <div class="row">
                    <div class="col-sm-6">
                        <form  method="POST"
                               action="{{ route('notifications.deleteall') }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" class="dropdown-item dropdown-footer" value="@lang('notif.delete_all')">

                        </form>
                    </div>
                    <div class="col-sm-6">
                        <form method="POST" action="{{ route('notifications.readall') }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <input type="submit" class="dropdown-item dropdown-footer" value="@lang('notif.make_all_read')">
                        </form>
                    </div>
                </div>
                    @endif
            </div>
        </li>
        <!-- User Dropdown Menu -->
        <li class="nav-item dropdown user-menu ">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('img/'.Auth::user()->picture)}}"   class="user-image img-circle elevation-2"
                     alt="User Image">
                <span class="d-none d-md-inline"> {{ucfirst(Auth::user()->last_name)}} {{ucfirst(strtolower(Auth::user()->first_name))}} </span><i
                        class="fas fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right scrollable"  >
                <!-- User image -->
                <li class="user-header  " style="background-color: #3c8dbc;color: white;height: 200px;">

                <img src="{{ asset('img/'.Auth::user()->picture)}}"   class="img-circle elevation-2"
                         alt="User Image">


                    <p>
                        {{ucfirst(Auth::user()->last_name)}} {{ucfirst(strtolower(Auth::user()->first_name))}} <br>
                        @if(Auth::user()->roles[0]->id == 1)
                            @lang('site.superadmin1')
                        @else
                            @lang('site.admin1')
                        @endif
                        <small>@lang('site.membersince') {{  Auth::user()->created_at->diffForHumans()   }}</small>
                        <small> <cite title="Source Title">{{'@'.ucfirst(Auth::user()->name)}}</cite></small>
                    </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                    <form id="logout-form" action="{{ route('logout') }}" method="GET">
                        {{ csrf_field() }}
                        {{ method_field('GET') }}
                        <button type="submit"
                                class="btn btn-default btn-flat float-right">@lang('auth.logout')</button>
                    </form>
                    <a href="{{ route('profile.show') }}" class="btn btn-default btn-flat">@lang(('site.profile'))</a>

                </li>
            </ul>
        </li>
        <!-- Settings Menu -->
        <li class="nav-item">
            @if(Auth::user()->hasPermission('read_settings') || Auth::user()->hasRole('superadministrator'))
                <a class="nav-link" href="{{ url('dashboard/settings') }}"><i
                            class="fas fa-cogs"></i></a>
            @else
                <a class="nav-link disabled"><i
                            class="fas fa-cogs"></i></a>
            @endif
        </li>
        <!-- Language Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                @if(App::isLocale('en'))
                    <i class="flag-icon flag-icon-us"></i>
                @else
                    <i class="flag-icon flag-icon-{{App::getLocale()}}"></i>
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right p-0">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                       hreflang="{{ $localeCode }}" class="dropdown-item ">

                        @if($properties['native'] == 'English')
                            <i class="flag-icon flag-icon-us mr-2 "></i>
                        @else
                            <i class="flag-icon flag-icon-{{App::getLocale()}} mr-2 "></i>
                        @endif
                        {{ $properties['native'] }}
                    </a>
                @endforeach
            </div>
        </li>

    </ul>
</nav>
<style>
    .scrollable-menu {
        height: auto;
        max-height: 450px;
        overflow-x: hidden;
    }
</style>