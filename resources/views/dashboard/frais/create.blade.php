@extends('dashboard.index')



@section('title')
    @lang('site.new_frais')
@endsection



@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{url('dashboard/users')}}" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.frais')</a>
                    <h1>@lang('site.new_frais')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('frais.index')}}">@lang('site.frais')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('site.new_frais')</li>
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
                        <form role="form" method="POST" action="{{ route('frais.store') }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}

                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>@lang('site.title')</label>
                                            <input type="text" class="form-control" name="title"
                                                   value="{{ old('title') }}"
                                                   placeholder="@lang('site.title') ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select name="type" class="custom-select">
                                                <option value="facebook">Facebook Ads</option>
                                                <option value="google">Google Ads</option>
                                                <option value="materials">Raw materials</option>
                                                <option value="other">Other</option>
                                            </select>
                                                    
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.description')</label>
                                            <textarea  class="form-control" name="description"></textarea>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.price')</label>
                                            <input type="text" class="form-control" name="price"
                                                   placeholder="@lang('site.price') ...">
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