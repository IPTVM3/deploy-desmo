@extends('dashboard.index')



@section('title')
    @lang('site.edit')
@endsection



@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a  href="{{url('dashboard/users')}}" class="btn btn-default btn-sm" style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i class="fas fa-chevron-left"></i> @lang('site.list_admin')</a>
                    <h1>@lang('site.edit') @lang('site.users_menu_admin')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a href="{{url('dashboard/users')}}">@lang('site.list_admin')</a></li>
                        <li class="breadcrumb-item active">@lang('site.edit')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @include('partials._errors')
            <div class="row">

                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="card card-primary  card-outline">
                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <form role="form" method="POST" action="{{ route('users.update', $user->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.lastname')</label>
                                            <input type="text" class="form-control" name="last_name"
                                                   value="{{ $user->last_name }}"
                                                   placeholder="@lang('site.lastname') ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>@lang('site.firstname')</label>
                                            <input type="text" class="form-control" name="first_name"
                                                   value="{{ $user->first_name  }}"
                                                   placeholder="@lang('site.firstname') ...">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.email')</label>
                                            <input type="email" class="form-control" name="email"
                                                   value="{{ $user->email  }}"
                                                   placeholder="@lang('site.email') ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.username')</label>
                                            <input type="text" class="form-control" name="name"
                                                   value="{{ $user->name  }}"
                                                   placeholder="@lang('site.username') ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>@lang('site.role')</label>

                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-danger d-inline">
                                                <input type="radio" id="radioPrimary1" name="role"  value="superadministrator" {{ $user->hasRole('superadministrator') ? 'checked' : '' }}>
                                                <label for="radioPrimary1"> @lang('site.superadmin')
                                                </label>
                                            </div>
                                            <div class="icheck-warning d-inline">
                                                <input type="radio" id="radioPrimary2" name="role" value="administrator" {{ $user->hasRole('administrator') ? 'checked' : '' }}>
                                                <label for="radioPrimary2"> @lang('site.admin')
                                                </label>
                                            </div>
                                        </div>
                                        <style>
                                            .permission {
                                                display: none;
                                            }
                                        </style>
                                    </div>

                                    <div class="col-md-6">

                                        @php
                                            $models = ['users','settings'];
                                            $maps = ['create','read','update','delete'];
                                        @endphp

                                        <label>@lang('site.permissions')</label>
                                        <div class="input-group">
                                            <p id="superadmin_permission">@lang('site.superadmindescription')</p>

                                            <div class="card card-primary card-outline card-outline-tabs permission"
                                                 id="permission">
                                                <div class="card-header p-0 border-bottom-0">
                                                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                                        @foreach($models as $index => $model)
                                                            <li class="nav-item">
                                                                <a class="nav-link {{$index == 0 ? 'active' : ''}}"
                                                                   href="#custom-tabs-three-{{$model}}"
                                                                   id="custom-tabs-three-home-tab"
                                                                   data-toggle="pill" role="tab"
                                                                   aria-controls="custom-tabs-three-{{$model}}"
                                                                   aria-selected="false">@lang('site.'.$model)</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="custom-tabs-three-tabContent">
                                                        @foreach($models as $index => $model)
                                                            <div class="tab-pane fade show {{$index == 0 ? 'active' : ''}}"
                                                                 id="custom-tabs-three-{{$model}}" role="tabpanel"
                                                                 aria-labelledby="custom-tabs-three-{{$model}}-tab">
                                                                @foreach($maps as $map)
                                                                    <label><input type="checkbox" name="permissions[]" {{ $user->hasPermission($map.'_'.$model) ? 'checked' : '' }} value="{{$map.'_'.$model}}"/> @lang('site.'.$map)</label>
                                                                @endforeach
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit"
                                                   class="btn btn-block btn-outline-primary  "
                                                   value="@lang('site.edit') "/>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <script>
        window.addEventListener('load', function () {
            //var sniiper = document.getElementById('se-pre-con');
            //sniiper.setAttribute("id", "");
            @if($user->hasRole('administrator'))
            ckecked_administrator();
            @endif
        })
    </script>
@endsection