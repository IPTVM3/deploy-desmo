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
                    <a href="{{ route('categories.index') }}" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.list_categories')</a>
                    <h1>@lang('site.new_categorie')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a
                                    href="{{ route('categories.index')   }}">@lang('site.list_categories')</a>
                        </li>
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
                        <form role="form" method="POST" action="{{ route('categories.update',$categorie->id) }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.name')</label>
                                            <input type="text" class="form-control" name="name"
                                                   value="{{ $categorie->name }}"
                                                   placeholder="@lang('site.name') ...">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-sm-12">

                                        <div class="form-group">
                                            <label for="exampleInputFile">@lang('site.description')</label>
                                            <textarea class="form-control" rows="3"   name="description">
                                              {{  $categorie->description }}
                                            </textarea>



                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-12">

                                        <div class="form-group">
                                            <label for="exampleInputFile">@lang('site.image')</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input "
                                                           id="input_image"
                                                           name="img">
                                                    <label class="custom-file-label"
                                                           for="exampleInputFile">@lang('site.choose') @lang('site.image')
                                                    </label>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">


                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit"
                                           class="btn btn-outline-primary btn-block "
                                           value="@lang('site.edit') "/>


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
    <script>

        document.getElementById('roleselect').addEventListener('change', (e) => {
            document.getElementById('formroles').submit();
        })


    </script>
@endsection