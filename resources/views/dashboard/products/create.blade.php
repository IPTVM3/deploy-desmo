@extends('dashboard.index')



@section('title')
    @lang('site.new_product')
@endsection


@section('header_links')
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('../../plugins/summernote/summernote-bs4.css')}}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{asset('../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">

    <style>

        #msform_general,
        #msform_format,
        #msform_social {
            display: none;
        }

        /*inputs*/
        #msform_general input, #msform_general textarea, #input_select,
        #msform_format input, #msform_format textarea,
        #msform_social input, #msform_social textarea {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 13px;
        }
    </style>
@endsection

@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">

        @include('partials._errors')

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{ route('products.index') }}" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.list_products')</a>
                    <h1>@lang('site.new_product')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a
                                    href="{{ route('products.index') }}">@lang('site.list_products')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('site.new_product')</li>
                    </ol>


                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <form method="POST" action="{{ route('products.store') }}"
          enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('POST') }}
        <section class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">


                                <button type="submit" class="btn btn-success btn-block btn-sm" id="save_policy">
                                    @lang('site.create')</button>
                                <p class="text">@lang('site.desc_add_product')</p>
                                           <hr>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.title')</label>
                                            <input type="text" class="form-control" name="title"
                                                   value="{{ old('title') }}"
                                                   placeholder="@lang('site.title') ...">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.band')</label>
                                            <input type="text" class="form-control" name="band"
                                                   value="{{ old('band') }}"
                                                   placeholder="@lang('site.band') ...">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.categories')</label>
                                            <select class="form-control" name="categorie">
                                                @foreach($categories as $categorie)
                                                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.price_befor') </label>
                                            <input type="text" class="form-control" name="price_before"
                                                   value="{{ old('price_before') }}"
                                                   placeholder="@lang('site.price_befor') ...">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.price_after')</label>
                                            <input type="text" class="form-control" name="price_after"
                                                   value="{{ old('price_after') }}"
                                                   placeholder="@lang('site.price_after') ...">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

<div class="col-sm-12">

    <div class="form-group">
        <label for="exampleInputFile">@lang('site.description')</label>
        <textarea class="form-control" rows="3"   name="description">
            {{ old('description') }}
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

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                
                    <!-- /.col -->


                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </form>

@endsection


@section('header_script')
    <!-- Summernote -->
    <script src="{{asset('../../plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {
            $('.textarea').summernote()
        })
        document.getElementById('roleselect').addEventListener('change', (e) => {
            document.getElementById('formroles').submit();
        })


    </script>
@endsection