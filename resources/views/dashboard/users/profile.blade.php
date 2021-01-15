@extends('dashboard.index')



@section('title')
    @lang('site.profile')
@endsection


@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{url('dashboard')}}" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.dashboard')</a>
                    <h1>@lang('site.profile') </h1>
                    <p><span>{{'@'.ucfirst(Auth::user()->name)}}</span>
                        <br class="text-muted"> @lang('site.membersince') {{  Auth::user()->created_at->diffForHumans()   }}
                    </p>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item active">@lang('site.profile')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center" id="upimageprofile">
                                <img class="profile-user-img img-fluid img-circle "
                                     src="{{asset('img/'.Auth::user()->picture)}}" alt="User profile picture">

                            </div>

                            <h3 class="profile-username text-center">{{ucfirst(Auth::user()->last_name)}} {{ucfirst(Auth::user()->first_name)}}</h3>

                            <p class="text-muted text-center">
                                @if(Auth::user()->roles[0]->id == 1)
                                    @lang('site.superadmin1')
                                @else
                                    @lang('site.admin1')
                                @endif
                            </p>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">@lang('site.aboutme')</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item active">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-address-card"></i> {{ucfirst(Auth::user()->last_name)}}  {{ucfirst(Auth::user()->first_name)}}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a @if(Auth::user()->email_verified_at == null) href="{{url('verfied')}}"
                                       @endif class="nav-link">
                                        <i class="far fa-envelope"></i> {{Auth::user()->email}}
                                        @if(Auth::user()->email_verified_at == null)
                                            <span class="badge bg-warning float-right">@lang('site.unverified')</span>
                                        @else
                                            <span class="badge bg-success float-right">@lang('site.verified')</span>
                                        @endif
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-phone"></i> {{Auth::user()->phone}}
                                        @if(Auth::user()->phone == null)
                                            <span class="badge bg-warning float-right">@lang('site.empty')</span>
                                        @endif
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-venus-mars"></i>
                                        @if(Auth::user()->gender == null)
                                            <span class="badge bg-warning float-right">@lang('site.empty')</span>

                                        @else
                                            @if(Auth::user()->gender == 'm') @lang('site.man')
                                            @else @lang('site.woman')
                                            @endif
                                        @endif
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    @include('partials._errors')
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity"
                                                        data-toggle="tab">@lang('site.activity')</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#timeline"
                                                        data-toggle="tab">@lang('site.timeline')</a>
                                </li>
                                <li class="nav-item"><a class="nav-link " href="#settings"
                                                        data-toggle="tab">@lang('site.setting')</a>
                                </li>
                                <li class="nav-item"><a class="nav-link " href="#password"
                                                        data-toggle="tab">@lang('site.change_reset_password')</a>
                                </li> 

                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm"
                                                 src="{{asset('img/'.Auth::user()->picture)}}" alt="user image">
                                            <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                                            <span class="description">Shared publicly - 7:30 PM today</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            Lorem ipsum represents a long-held tradition for designers,
                                            typographers and the like. Some people hate it and argue for
                                            its demise, but others ignore the hate as they create awesome
                                            tools to help create filler text for everyone from bacon lovers
                                            to Charlie Sheen fans.
                                        </p>

                                        <p>
                                            <a href="#" class="link-black text-sm mr-2"><i
                                                        class="fas fa-share mr-1"></i> Share</a>
                                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>
                                                Like</a>
                                            <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                                        </p>

                                        <input class="form-control form-control-sm" type="text"
                                               placeholder="Type a comment">
                                    </div>
                                    <!-- /.post -->
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">
                                        <!-- timeline time label -->
                                        <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-envelope bg-primary"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an
                                                    email</h3>

                                                <div class="timeline-body">
                                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                    quora plaxo ideeli hulu weebly balihoo...
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-user bg-info"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                                <h3 class="timeline-header border-0"><a href="#">Sarah Young</a>
                                                    accepted your friend request
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-comments bg-warning"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your
                                                    post</h3>

                                                <div class="timeline-body">
                                                    Take me to your leader!
                                                    Switzerland is small and neutral!
                                                    We are more like Germany, ambitious and misunderstood!
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                                <span class="bg-success">
                                                  3 Jan. 2014
                                                </span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-camera bg-purple"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos
                                                </h3>

                                                <div class="timeline-body">
                                                    <img src="http://placehold.it/150x100" alt="...">
                                                    <img src="http://placehold.it/150x100" alt="...">
                                                    <img src="http://placehold.it/150x100" alt="...">
                                                    <img src="http://placehold.it/150x100" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <div>
                                            <i class="far fa-clock bg-gray"></i>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane " id="settings">

                                    <div class="login-logo">
                                        <a href="{{ url('dashboard') }}"><b>{{ config('app.name', 'Laravel') }}</b></a>
                                    </div>
                                    <p class="login-box-msg">@lang('site.description_change_your_informations')</p>

                                    <form role="form" class="form-horizontal" method="POST"
                                          action="{{ route('profile.edit') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}

                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label>@lang('site.current_password')</label>
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" required
                                                           placeholder="@lang('site.current_password')"
                                                           name="current_password">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fas fa-lock"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label>@lang('site.firstname')</label>
                                                <input type="text" class="form-control" name="first_name" required
                                                       value="{{ Auth::user()->first_name  }}"
                                                       placeholder="@lang('site.firstname') ...">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>@lang('site.lastname')</label>
                                                <input type="text" class="form-control" name="last_name" required
                                                       value="{{ Auth::user()->last_name  }}"
                                                       placeholder="@lang('site.lastname') ...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <label>@lang('site.username')</label>
                                                <input type="text" class="form-control " disabled
                                                       value="{{ Auth::user()->name }}"
                                                       placeholder="@lang('site.username') ...">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>@lang('site.email')</label>
                                                <input type="text" class="form-control " disabled
                                                       value="{{ Auth::user()->email  }}"
                                                       placeholder="@lang('site.email') ...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <label>@lang('site.phone')</label>
                                                <input type="text" class="form-control" name="phone" required
                                                       data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;"
                                                       value="{{ Auth::user()->phone }}" data-mask="" im-insert="true">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="exampleInputFile">@lang('site.image')</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input "
                                                               id="input_image"
                                                               name="picture">
                                                        <label class="custom-file-label"
                                                               for="exampleInputFile">@lang('site.choose') @lang('site.image')
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label>@lang('site.gender')</label>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-danger d-inline">
                                                        <input type="radio" id="radioPrimary1" name="gender" required
                                                               value="m" {{ Auth::user()->gender == 'm' ? 'checked' : '' }}>
                                                        <label for="radioPrimary1"> @lang('site.man')
                                                        </label>
                                                    </div>
                                                    <div class="icheck-success d-inline">
                                                        <input type="radio" id="radioPrimary2" name="gender" required
                                                               value="f" {{ Auth::user()->gender == 'f' ? 'checked' : '' }}>
                                                        <label for="radioPrimary2"> @lang('site.woman')
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn btn-primary btn-block">@lang('site.edit')</button>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane " id="password">

                                    <div class="card-body login-card-body">
                                        <div class="login-logo">
                                            <a href="{{ url('dashboard') }}"><b>{{ config('app.name', 'Laravel') }}</b></a>
                                        </div>
                                        <p class="login-box-msg">@lang('site.description_change_password')</p>

                                        <form role="form" class="form-horizontal" method="POST"
                                              action="{{ route('profile.edit') }}">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}

                                            <label>@lang('site.current_password')</label>
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control" required
                                                       placeholder="@lang('site.current_password')"
                                                       name="current_password">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                            </div>


                                            <label>@lang('auth.password')</label>
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control" required
                                                       placeholder="@lang('auth.password')" name="password">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <label>@lang('auth.confirmpassword')</label>
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control" required
                                                       placeholder="@lang('auth.confirmpassword')"
                                                       name="password_confirmation">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-8">
                                                    <button type="submit"
                                                            class="btn btn-primary btn-block">@lang('site.changepassword')</button>
                                                </div>
                                                <div class="col-4">
                                                    <a href="{{url('password/reset_password')}}"
                                                       class="btn btn-warning btn-block">@lang('auth.reset')</a>
                                                </div>
                                                <!-- /.col -->
                                            </div>

                                        </form>

                                    </div>
                                    <!-- /.login-card-body -->

                                </div>

                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
@endsection