@extends('dashboard.index')



@section('title')
    @lang('site.details')
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
                    <h1>@lang('site.details')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a
                                    href="{{url('dashboard/products')}}">@lang('site.list_products')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('site.details')</li>
                    </ol>


                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">{{ $product->title  }}</h3>
                        <div class="col-12">
                            <img src="{{ asset('img/'.$product->img1) }}" class="product-image" alt="Product Image">
                        </div>
                        <div class="col-12 product-image-thumbs">
                            @if($product->img2)
                                <div class="product-image-thumb active"><img src="{{ asset('img/'.$product->img2) }}"
                                                                             alt="Product Image"></div>
                            @endif

                            @if($product->img3)
                                <div class="product-image-thumb"><img src="{{ asset('img/'.$product->img3) }}"
                                                                      alt="Product Image"></div>
                            @endif
                            @if($product->img4)
                                <div class="product-image-thumb"><img src="{{ asset('img/'.$product->img4) }}"
                                                                      alt="Product Image"></div>
                            @endif


                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">{{ $product->title  }}</h3>
                        <p>{{ $product->description  }}.</p>

                        <hr>
                        @if( $product->options()->count() != 0)
                            <h4>{{ $product->options[0]->property_name }}</h4>

                            <select id="input_select">
                                @foreach(\App\ProductOption::all() as $po)
                                    @if($po->product_id == $product->id)
                                        <option value="{{ $po->price}}" id="{{ $po->price}}">{{ $po->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        @endif
                        <style>
                            /*inputs*/
                            #input_select,#input_qty {
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

                        <h4>@lang('site.qty')</h4>
                        <input id="input_qty" name="qty" type="number" required value="1">
                        <div id="price_dev">
                            @if( $product->options()->count() != 0)

                                <div class="input-group">
                                    <h3><span id="price_option"
                                              class="badge badge-warning"> ${{ $product->options[0]->price }}</span>
                                    </h3>
                                </div>
                            @else
                                <div class="input-group">
                                    <h4><span class="badge badge-secondary" style="text-decoration: line-through; "
                                              id="price_before">${{ $product->price_before  }}</span></h4>
                                    <h3><span class="badge badge-dark  ml-1"
                                              id="price_after">${{ $product->price_after  }}</span></h3>
                                </div>
                            @endif
                        </div>

                        <div style="padding-top: 15px;">
                            <div class="card">

                                <div class="card-header">
                                    <h3 class="card-title">
                                        @lang('site.feature')                                       </h3>
                                    <!-- tools box -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                                data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad" style="display: block;">
                                    <div class="mb-3">
                                        {{ $product->feature  }}
                                    </div>

                                </div>
                            </div>
                            <div class="card">

                                <div class="card-header">
                                    <h3 class="card-title">
                                        @lang('site.details')                                     </h3>
                                    <!-- tools box -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                                data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad" style="display: block;">
                                    <div class="mb-3">
                                        {!! $product->html_details !!}
                                    </div>

                                </div>
                            </div>
                            @if( $product->reviews()->count() != 0)
                            <div class="card">

                                <div class="card-header">
                                    <h3 class="card-title">
                                        @lang('site.reviews')                                      </h3>
                                    <!-- tools box -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                                data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad" style="display: block;">
                                    <div class="mb-3">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>@lang('site.name')</th>
                                                <th>@lang('site.body')</th>
                                                <th style="width: 40px">@lang('site.create_at')</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($product->reviews as $rev)
                                                <tr>
                                                    <td>{{$rev->id}}</td>
                                                    <td>{{$rev->by}}</td>
                                                    <td>
                                                        {{$rev->body}}
                                                    </td>
                                                    <td><span class="badge bg-danger">{{$rev->created_at}}</span></td>
                                                    <td>
                                                        <form action="{{ route('products.review.destroy',[$rev->id,$product->id]) }}"
                                                              method="post"
                                                              class="form-check-inline">
                                                            {{ csrf_field() }}
                                                            {{ method_field('delete') }}
                                                            <button type="submit" class="btn btn-danger btn-sm action">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            @endif
                            <div class="card">

                                <div class="card-header">
                                    <h3 class="card-title">
                                        @lang('site.add_review')                                    </h3>
                                    <!-- tools box -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                                data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad" style="display: block;">
                                    <div class="mb-3">
                                        <form role="form" method="post"
                                              action="{{ route('products.review.store',$product->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">@lang('site.name')</label>
                                                    <input type="text" name="by" class="form-control"
                                                           id="exampleInputEmail1" required placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">@lang('site.body')</label>
                                                    <textarea class="form-control" name="body" required></textarea>
                                                </div>

                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">@lang('site.add')</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>


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
    <script>
        $('#input_select').on('change', function() {
            $('#price_option').empty();
            $('#price_option').append('$'+this.value);
        });

    </script>

@endsection