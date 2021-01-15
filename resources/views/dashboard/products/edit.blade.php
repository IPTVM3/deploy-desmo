@extends('dashboard.index')



@section('title')
    @lang('site.edit')
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
                    <a href="{{url('dashboard/products')}}" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.list_products')</a>
                    <h1>@lang('site.edit')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a
                                    href="{{url('dashboard/products')}}">@lang('site.list_products')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('site.edit')</li>
                    </ol>


                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <form method="POST" action="{{ route('products.update', $product->id) }}"
          enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <section class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">


                                <button type="submit" class="btn btn-success btn-block btn-sm" id="save_policy">
                                    @lang('site.edit')</button>
                                <p class="text">@lang('site.desc_add_product')</p>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.title')</label>
                                            <input type="text" class="form-control" name="title"
                                                   value="{{ $product->title }}"
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
                                                   value="{{ $product->band    }}"
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
                                                   value="{{ $product->price_before    }}"
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
                                                   value="{{ $product->price_after }}"
                                                   placeholder="@lang('site.price_after') ...">
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">

                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity"
                                                            data-toggle="tab">@lang('site.description')</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#settings"
                                                            data-toggle="tab"> @lang('site.options') @lang('site.details')</a>
                                    </li>

                                </ul>

                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>@lang('site.description')</label>
                                                    <textarea class="form-control" name="description" rows="3" required
                                                              placeholder="@lang('site.description') ...">
                                                                        {{  $product->description  }}
                                                            </textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>@lang('site.feature')</label>
                                                    <textarea class="form-control" name="feature" rows="3" required
                                                              placeholder="@lang('site.feature') ...">
                                                        {{  $product->feature  }}
                                                            </textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <label>@lang('site.details')</label>
                                                    <textarea name="html_details" class="textarea"
                                                              placeholder="Place some text here"
                                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;">   {{  $product->html_details  }} </textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->

                                    <div class="tab-pane" id="settings">

                                        <div class="row" id="poprtyname" style="display: none">
                                            <div class="col-sm-12">
                                                <label>@lang('site.property_name')</label>
                                                <input type="text" class="form-control" name="property_name"

                                                       placeholder="@lang('site.property_name') ...">
                                            </div>
                                        </div>
                                        <div id="to_add_other_option">

                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <button class="btn btn-success btn-block btn-sm" type="button"
                                                        id="add_other_option">@lang('site.other_option')</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-warning btn-block btn-sm" type="button"
                                                        id="reset_option">@lang('site.reset_option')</button>
                                            </div>
                                        </div>

                                        <script>
                                            var btn_add = document.getElementById('add_other_option');
                                            var btn_reset = document.getElementById('reset_option');
                                            var i = 0;
                                            btn_add.addEventListener('click', (e) => {
                                                $("#poprtyname").css("display","block");
                                                i++;
                                                $("#to_add_other_option").append($(" <div class=\"row\"   id='row" + i + "' >\n" +
                                                    "                                        <div class=\"col-sm-6\">\n" +
                                                    "                                            <!-- text input -->\n" +
                                                    "                                            <div class=\"form-group\">\n" +
                                                    "                                                <label>@lang('site.option')</label>\n" +
                                                    "                                                <input type=\"text\" class=\"form-control\" required name=\"name_option[]\"\n" +
                                                    "\n" +
                                                    "                                                       placeholder=\"@lang('site.orders') ...\">\n" +
                                                    "                                            </div>\n" +
                                                    "                                        </div>\n" +
                                                    "                                        <div class=\"col-sm-6\">\n" +
                                                    "                                            <!-- text input -->\n" +
                                                    "                                            <div class=\"form-group\">\n" +
                                                    "                                                <label>@lang('site.price')</label>\n" +
                                                    "                                                <input type=\"text\" class=\"form-control\" required name=\"price_option[]\"\n" +
                                                    "                                                       placeholder=\"@lang('site.price') ...\">\n" +
                                                    "                                            </div>\n" +
                                                    "                                        </div>\n" +
                                                    "                                    </div>"));
                                            })
                                            btn_reset.addEventListener('click', (e) => {

                                                $("#poprtyname").css("display","none");

                                                let id = "row" + i;
                                                console.log(id)
                                                document.getElementById(id).remove();
                                                i--;
                                            })
                                        </script>

                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>@lang('site.orders')</label>
                                                    <input type="number" class="form-control" name="order" required
                                                           value="{{   $product->order }}"
                                                           placeholder="@lang('site.orders') ...">
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>@lang('site.notice')</label>
                                                    <input type="number" class="form-control" name="notice" required
                                                           value="{{$product->notice   }}"
                                                           placeholder="@lang('site.notice') ...">
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>@lang('site.rate')</label>
                                                    <input type="text" class="form-control" name="rate" required
                                                           value="{{ $product->rate  }}"
                                                           placeholder="@lang('site.rate') ...">
                                                </div>
                                            </div>

                                        </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label for="exampleInputFile"> @lang('site.principle')  @lang('site.image') </label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input "
                                                                   id="input_image"
                                                                   name="img1">
                                                            <label class="custom-file-label"
                                                                   for="exampleInputFile">@lang('site.choose') @lang('site.principle') @lang('site.image')
                                                            </label>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label for="exampleInputFile">@lang('site.image') 1</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input "
                                                                   id="input_image"
                                                                   name="img2">
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

                                                <div class="form-group">
                                                    <label for="exampleInputFile">@lang('site.image') 2</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input "
                                                                   id="input_image"
                                                                   name="img3">
                                                            <label class="custom-file-label"
                                                                   for="exampleInputFile">@lang('site.choose') @lang('site.image')
                                                            </label>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label for="exampleInputFile">@lang('site.image') 3</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input "
                                                                   id="input_image"
                                                                   name="img4">
                                                            <label class="custom-file-label"
                                                                   for="exampleInputFile">@lang('site.choose') @lang('site.image')
                                                            </label>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.tab-pane -->


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