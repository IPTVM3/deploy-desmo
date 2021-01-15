@extends('dashboard.index')


@section('title')
    @lang('site.administrators')
@endsection

<!--HTML-->
@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{url('dashboard')}}" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.dashboard')</a>
                    <h1>@lang('site.list_admin')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item active">@lang('site.list_admin')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools " style="margin-right: 0.475rem;">



                        @if(Auth::user()->hasPermission('create_users') or  Auth::user()->hasRole('superadministrator') )
                            <a href="{{ url('dashboard/users/create') }}" class="btn btn-default btn-sm"
                               title="@lang('site.add')">
                                <i class="fas fa-plus"></i> @lang('site.add')</a>
                        @else
                            <a class="btn btn-default btn-sm disabled"><i
                                        class="fas fa-plus"></i> @lang('site.add')</a>



                        @endif


                </div>

                <div class="card-tools float-left ">
                    <form method="get" action="{{ route('users.index') }}"  id="formroles" >
                        <select class="form-control-sm select2  " style="width: 100%;" name="role" id="roleselect"
                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="3"
                                    value="">@lang('site.all')</option>
                            <option data-select2-id="71" disabled>@lang('site.role')</option>
                            <option data-select2-id="71" value="administrator">@lang('site.users_menu_admin')</option>
                            <option data-select2-id="71" value="superadministrator">@lang('site.superadmin')</option>
                        </select>
                    </form>
                </div>

                <div class="card-tools float-left " style="margin-left: 15px;">
                    <form method="get"  action="{{ route('users.index') }}"  id="formroles_status" >
                        <select class="form-control-sm select2  " style="width: 100%;" name="status" id="statusselect"
                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="3" value="0"
                                    >@lang('site.all')</option>
                            <option data-select2-id="71" disabled>@lang('site.account')</option>
                            <option data-select2-id="71" value="0">@lang('site.all')</option>
                            <option data-select2-id="71" value="1">@lang('site.accountfalse')</option>
                        </select>
                    </form>
                </div>


            </div>
            <div class="card-body p-0">
                @if($users->count() > 0)
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                @lang('site.name')
                            </th>
                            <th style="width: 30%">
                                @lang('site.email')
                            </th>
                            <th>
                                @lang('site.role')
                            </th>
                            <th style="width: 8%" class="text-center">
                                @lang('site.account')
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $index => $user)
                            <tr>
                                <td>
                                    <img alt="Avatar" class="table-avatar" src="{{asset('img/'.$user->picture)}}">
                                </td>
                                <td>
                                    <a>
                                        <b>{{ strtoupper($user->first_name) }}</b> {{ ucfirst(strtolower($user->last_name)) }}
                                        @if($user->email_verified_at)
                                            <i class="fas fa-check" style="color: green"> </i>
                                        @endif
                                    </a>
                                    <br>
                                    <small>
                                        @lang('site.createdat') : {{ $user->created_at }}
                                    </small>
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td class="project_progress">
                                    @foreach($user->roles as $role)
                                        @if($role->id == 1)
                                            <span class="badge badge-danger">{{$role->display_name}}</span>
                                        @elseif($role->id == 2)
                                            <span class="badge badge-warning">{{$role->name}}</span>
                                        @else
                                            <span class="badge badge-info">{{$role->name}}</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td class="project-state">
                                    @if(Auth::user()->hasPermission('update_users') or  Auth::user()->hasRole('superadministrator') )
                                        @if($user->activeAccount == 0)
                                            <form action="{{ route('users.changestatus',$user->id) }}" method="post"
                                                  class="form-check-inline">
                                                {{ csrf_field() }}
                                                {{ method_field('put') }}

                                                <button
                                                        class="btn btn-success btn-xs action"
                                                        type="submit"
                                                        title="@lang('site.accountfalse') @lang('site.account')"
                                                >
                                                    @lang('site.accounttrue')
                                                </button>
                                            </form>
                                        @else
                                            <form action="{{ route('users.changestatus',$user->id) }}"
                                                  method="post" class="form-check-inline">
                                                {{ csrf_field() }}
                                                {{ method_field('put') }}
                                                <button
                                                        class="btn btn-danger btn-xs action"
                                                        type="submit"
                                                        title="@lang('site.accounttrue') @lang('site.account')"
                                                >
                                                    @lang('site.accountfalse')
                                                </button>
                                            </form>
                                        @endif
                                    @else
                                        @if($user->activeAccount == 0)
                                            <button
                                                    class="btn btn-success btn-xs  "
                                            >
                                                @lang('site.accounttrue')
                                            </button>
                                        @else
                                            <button
                                                    class="btn btn-danger btn-xs "
                                            >
                                                @lang('site.accountfalse')
                                            </button>
                                        @endif
                                    @endif
                                </td>
                                <td class="project-actions text-right">

                                    @if(Auth::user()->hasPermission('read_users') or  Auth::user()->hasRole('superadministrator') )
                                        <a class="btn btn-primary btn-sm" href="{{ route('users.show', $user->id) }}">
                                            <i class="fas fa-eye">
                                            </i> @lang('site.profile')
                                        </a>
                                    @else
                                        <a class="btn btn-primary btn-sm disabled"> <i
                                                    class="fas fa-eye"> </i> @lang('site.profile')  </a>
                                    @endif

                                    @if(Auth::user()->hasPermission('update_users') or  Auth::user()->hasRole('superadministrator') )
                                        <a class="btn btn-info btn-sm" href="{{ route('users.edit', $user->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                    @else
                                        <a class="btn btn-info btn-sm disabled"> <i class="fas fa-pencil-alt"> </i> </a>
                                    @endif

                                    @if(Auth::user()->hasPermission('delete_users')  || Auth::user()->hasRole('superadministrator') )
                                        <form action="{{ route('users.destroy',$user->id) }}" method="post"
                                              class="form-check-inline">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger btn-sm action">
                                                <i class="fas fa-trash">
                                                </i>
                                            </button>
                                        </form>

                                    @else
                                        <a class="btn btn-danger btn-sm disabled"> <i class="fas fa-trash"> </i> </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <h1 class="text-center">@lang('site.nodatafound')</h1>
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="float-right">
                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                        @include('dashboard.components.pagination', ['paginator' => $users])
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->


@endsection

<!--JS-->
@section('header_script')
    <script>
        $(function () {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });


        document.getElementById('roleselect').addEventListener('change',(e)=>{
            document.getElementById('formroles').submit();
        })

        document.getElementById('statusselect').addEventListener('change',(e)=>{
            document.getElementById('formroles_status').submit();
        })

    </script>
@endsection

