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
                    <a href="{{ route('orders.index') }}" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.list_orders')</a>
                    <h1>@lang('site.new_order')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a
                                    href="{{ route('orders.index')   }}">@lang('site.list_orders')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('site.new_order')</li>
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
                        <!-- Default box -->
                        <form role="form" method="POST" action="{{ route('orders.store') }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                        <article class="card">

                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>@lang('site.email')</label>
                                            <input type="email" class="form-control" name="email" required
                                                   value="{{ old('email') }}"
                                                   placeholder="@lang('site.email') ...">
                                        </div>
                                    </div>

                                </div>

                                <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                                            <i class="fa fa-credit-card"></i> Credit Card</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                                            <i class="fab fa-paypal"></i> Paypal</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                                            <i class="fa fa-university"></i> Bank Transfer</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="nav-tab-card">


                                        <div class="form-group">
                                            <label for="username">@lang('site.name')</label>
                                            <input type="text" class="form-control" name="name" placeholder=""
                                                  >
                                        </div> <!-- form-group.// -->

                                        <div class="form-group">
                                            <label for="cardNumber">@lang('site.card_number')</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="card_number"
                                                       placeholder="">
                                                <div class="input-group-append">
				                                <span class="input-group-text text-muted">
				                            	<i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>  
                                                    <i class="fab fa-cc-mastercard"></i>
                                                </span>
                                                </div>
                                            </div>
                                        </div> <!-- form-group.// -->

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label><span class="hidden-xs">@lang('site.expiration')</span>
                                                    </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                               name="exp_date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label><span class="hidden-xs">@lang('site.zip')</span> </label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                               name="zip">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label data-toggle="tooltip" title=""
                                                           data-original-title="3 digits code on back side of the card">CVV
                                                        <i class="fa fa-question-circle"></i></label>
                                                    <input type="number" name="cv_code" class="form-control"
                                                            >
                                                </div> <!-- form-group.// -->
                                            </div>
                                        </div> <!-- row.// -->
                                        <button class="subscribe btn btn-primary btn-block"
                                                type="submit">@lang('site.next')
                                        </button>

                                    </div> <!-- tab-pane.// -->
                                    <div class="tab-pane fade" id="nav-tab-paypal">
                                        <p>Paypal is easiest way to pay online</p>
                                        <p>
                                            <button type="button" class="btn btn-primary"><i class="fab fa-paypal"></i>
                                                Log in my Paypal
                                            </button>
                                        </p>
                                        <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. </p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-tab-bank">
                                        <p>Bank accaunt details</p>
                                        <dl class="param">
                                            <dt>BANK:</dt>
                                            <dd> THE WORLD BANK</dd>
                                        </dl>
                                        <dl class="param">
                                            <dt>Accaunt number:</dt>
                                            <dd> 12345678912345</dd>
                                        </dl>
                                        <dl class="param">
                                            <dt>IBAN:</dt>
                                            <dd> 123456789</dd>
                                        </dl>
                                        <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. </p>
                                    </div> <!-- tab-pane.// -->
                                </div> <!-- tab-content .// -->

                            </div> <!-- card-body.// -->
                        </article> <!-- card.// -->
                        <!-- /.card -->
                        </form>

                    </div>
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
    <script>
        $('#prodct_select').change(function () {

            let id = this.value;
            var products_options = {!! \App\ProductOption::all()->toJson() !!};

             let options = products_options.filter( e => {
                    if(e.product_id == id) {
                        return e;
                    }
            });
            $('#product_poperty').empty();
            options.map(e=>{
                $('#product_poperty').append('<option value="'+e.id+'" >'+e.name+'</option>');
            })


        });
    </script>
@endsection