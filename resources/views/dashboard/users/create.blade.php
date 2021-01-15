@extends('dashboard.index')



@section('title')
    @lang('site.new_user')
@endsection



@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{url('dashboard/users')}}" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.list_admin')</a>
                    <h1>@lang('site.new_user')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a href="{{url('dashboard/users')}}">@lang('site.list_admin')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('site.new_user')</li>
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
                        <form role="form" method="POST" action="{{ route('users.store') }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.lastname')</label>
                                            <input type="text" class="form-control" name="last_name"
                                                   value="{{ old('last_name') }}"
                                                   placeholder="@lang('site.lastname') ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>@lang('site.firstname')</label>
                                            <input type="text" class="form-control" name="first_name"
                                                   value="{{ old('first_name') }}"
                                                   placeholder="@lang('site.firstname') ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.username')</label>
                                            <input type="text" class="form-control" name="name"
                                                   value="{{ old('name') }}"
                                                   placeholder="@lang('site.username') ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.email')</label>
                                            <input type="email" class="form-control" name="email"
                                                   value="{{ old('email') }}"
                                                   placeholder="@lang('site.email') ...">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
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
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('auth.password')</label>
                                            <input type="password" class="form-control" name="password"
                                                   placeholder="@lang('auth.password') ...">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 ">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('auth.confirmpassword')</label>
                                            <input type="password" class="form-control" name="password_confirmation"
                                                   placeholder="@lang('auth.confirmpassword') ...">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>@lang('site.role')</label>

                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-danger d-inline">
                                                <input type="radio" id="radioPrimary1" name="role"
                                                       value="superadministrator" checked="">
                                                <label for="radioPrimary1"> @lang('site.superadmin')
                                                </label>
                                            </div>
                                            <div class="icheck-warning d-inline">
                                                <input type="radio" id="radioPrimary2" name="role"
                                                       value="administrator">
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
                                                                    <label><input type="checkbox" name="permissions[]"
                                                                                  value="{{$map.'_'.$model}}"/> @lang('site.'.$map)
                                                                    </label>
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


                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit"
                                           class="btn btn-outline-primary btn-block "
                                           value="@lang('site.add') "/>


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
@endsection

<!--JS-->
@section('header_script')
    <script >

        document.getElementById('roleselect').addEventListener('change', (e) => {
            document.getElementById('formroles').submit();
        })


    </script>
@endsection