@extends('dashboard.index')



@section('title')
    @lang('site.new_order')
@endsection



@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{ route('categories.index') }}" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.list_orders')</a>
                    <h1>@lang('site.new_order')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a
                                    href="{{ route('categories.index')   }}">@lang('site.list_orders')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('site.new_order')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form role="form" method="POST" action="{{ route('orders.line.store',$order->id) }}"
          enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('POST') }}
        <section class="content">
            <div class="container-fluid">

                @include('partials._errors')


                <div class="row">
                    <div class="col-md-12">


                        <div class="card">
                            <div class="card-body">
                                <div class="col-12">


                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>

                                            <div id="orderlines">

                                                <tr>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <!-- text input -->
                                                            <div class="form-group">
                                                                <label>@lang('site.name')</label>
                                                                <select name="product" class="form-control" required
                                                                        id="prodct_select">
                                                                    @foreach($products as $p)
                                                                        <option value="{{ $p->id }}">{{ $p->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </tr>

                                                <tr>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <!-- text input -->
                                                            <div class="form-group">
                                                                <label>@lang('site.property_name')</label>
                                                                <select name="product_poperty" class="form-control" required
                                                                        id="product_poperty">

                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </tr>

                                                <tr>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <!-- text input -->
                                                            <div class="form-group">
                                                                <label>@lang('site.qty')</label>
                                                                <input name="qty" type="number" class="form-control" required
                                                                       id="qty">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </tr>

                                            </div>
                                            <div>
                                                <div class="row">
                                                    <div class="col">
                                                        <button class="btn btn-success btn-block btn-sm" type="submit"
                                                                id="add_new_order_line">@lang('site.other_line')</button>
                                                    </div>

                                                    @if($order->orderlines()->count() != 0)
                                                        <div class="col-md-4">
                                                            <button class="btn btn-warning btn-block btn-sm"
                                                                    type="button"
                                                            >@lang('site.finish')</button>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </form>
@endsection

<!--JS-->
@section('header_script')
    <script>

        document.getElementById('roleselect').addEventListener('change', (e) => {
            document.getElementById('formroles').submit();
        })


    </script>
    <script>
        $('#prodct_select').change(function () {

            let id = this.value;
            var products_options = {!! \App\ProductOption::all()->toJson() !!};

            let options = products_options.filter(e => {
                if (e.product_id == id) {
                    return e;
                }
            });
            $('#product_poperty').empty();
            options.map(e => {
                $('#product_poperty').append('<option value="' + e.id + '" >' + e.name + '</option>');
            })


        });
    </script>
@endsection