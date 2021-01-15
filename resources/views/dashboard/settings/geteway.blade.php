@extends('dashboard.index')


@section('title')
    @lang('site.geteway')
@endsection



<!--HTML-->
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{url('dashboard/settings')}}" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.setting')</a>
                    <h1>@lang('site.geteway')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a href="{{url('dashboard/settings')}}">@lang('site.setting')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('site.geteway')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> @lang('site.note'):</h5>
                        @lang('site.note_gateway_description')
                    </div>


                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <div class="card">

                             <div class="card-body">
                                <div class="row">

                                    <div class="col-12 col-md-12 col-lg-4 order-2 order-md-1">
                                        <h4>  @lang('site.accept_payments')</h4>
                                        <p class="text-muted">@lang('site.accept_payments_description')</p>

                                    </div>
                                    <div class="col-12 col-md-12 col-lg-8 order-1 order-md-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card  ">
                                                    <div class="card-header p-0 border-bottom-0">
                                                        <ul class="nav nav-tabs" id="custom-tabs-three-tab"
                                                            role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                   id="custom-tabs-three-home-tab" data-toggle="pill"
                                                                   href="#custom-tabs-three-home" role="tab"
                                                                   aria-controls="custom-tabs-three-home"
                                                                   aria-selected="true">@lang('site.payments_methods')</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content" id="custom-tabs-three-tabContent">
                                                            <div class="tab-pane fade show active"
                                                                 id="custom-tabs-three-home" role="tabpanel"
                                                                 aria-labelledby="custom-tabs-three-home-tab">

                                                                @include('partials._errors')


                                                                <div class="row">
                                                                    <!-- accepted payments column -->
                                                                    <div class="card  card-outline card-primary">
                                                                        <div class="card-body">
                                                                            <div class="col-12">
                                                                                <h2 class=" text-primary">

                                                                                    <i class="fab fa-cc-paypal fa-lg"></i>
                                                                                    PayPal
                                                                                </h2>

                                                                                <p
                                                                                        style="    margin-top: 40px;">
                                                                                    @lang('site.paypal_description')
                                                                                </p>
                                                                                <div class="col-6">
                                                                                    <img src="{{asset('../../dist/img/credit/paypal2.png')}}"
                                                                                         alt="Paypal">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-12">
                                                                                @if($store->PayPal_isActive() == false)
                                                                                    <div class="row"
                                                                                         style="padding-top: 10px;">
                                                                                        <div class="col-md-4">
                                                                                            <hr>
                                                                                            <hr>
                                                                                            <ul class="list-group"
                                                                                                style="list-style: none">
                                                                                                <li>
                                                                                                    <i class="fas fa-credit-card"> @lang('site.credit_card_rate')
                                                                                                </li>
                                                                                                <li>
                                                                                                    <i class="fas fa-transgender"> @lang('site.transaction_free')
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="col-md-8">
                                                                                            <hr>
                                                                                            @lang('site.setup_instructions')

                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                            <form method="POST" id="form_active_paypal"
                                                                                  action="{{ route('payment.paypal.active') }}">
                                                                                {{ csrf_field() }}
                                                                                {{ method_field('POST') }}
                                                                                <div class="col-md-12"
                                                                                     style="display: none"
                                                                                     id="paypal_setup">
                                                                                    <hr>
                                                                                    <hr>
                                                                                    <h3>@lang('site.conf_paypal_live')</h3>


                                                                                    <div class="row">
                                                                                        <div class="col-sm-12">
                                                                                            <!-- text input -->
                                                                                            <div class="form-group">
                                                                                                <label>@lang('site.client_account')</label>
                                                                                                <input type="email"
                                                                                                       class="form-control"
                                                                                                       placeholder="emah-facilitator@gmail.com"
                                                                                                       name="client_account"
                                                                                                       required>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <!-- text input -->
                                                                                            <div class="form-group">
                                                                                                <label>@lang('site.client_id')</label>
                                                                                                <input type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="AZBizmS0RPfuDYAlm6mQCO..."
                                                                                                       name="api_key"
                                                                                                       required>
                                                                                            </div>
                                                                                        </div>

                                                                                        <input hidden value="Live"
                                                                                               name="mode" required>
                                                                                        <input hidden value="PayPal"
                                                                                               name="type" required>

                                                                                        <div class="col-sm-6">
                                                                                            <div class="form-group">
                                                                                                <label>@lang('site.secret_key')</label>
                                                                                                <input type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="EH7RK7X7PWW8O6Nt8-Im ..."
                                                                                                       name="secret_key"
                                                                                                       required>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="card-footer">
                                                                            <div class="row no-print">
                                                                                <div class="col-md-12">

                                                                                    @if($store->PayPal_isActive() == false)

                                                                                        <button id="paypal_btn_active"
                                                                                                type="button"
                                                                                                class="btn btn-primary float-right">
                                                                                            <i class="far fa-credit-card"></i>
                                                                                            @lang('site.paypal_active_btn')
                                                                                        </button>

                                                                                        <button style="display: none"
                                                                                                id="paypal_btn_submit"
                                                                                                type="button"
                                                                                                class="btn btn-primary float-right">
                                                                                            <i class="far fa-credit-card"></i>
                                                                                            @lang('site.paypal_submit_btn')
                                                                                        </button>



                                                                                    @else

                                                                                        <button id="paypal_btn_desactive"
                                                                                                type="button"
                                                                                                style="margin-right: 5px;"
                                                                                                class="btn btn-danger float-right">
                                                                                            @lang('site.paypal_btn_desactive')

                                                                                        </button>

                                                                                    @endif
                                                                                    <button type="button"
                                                                                            class="btn btn-warning float-right"
                                                                                            id="paypal_btn_cancel"
                                                                                            style="margin-right: 5px;display: none">
                                                                                        <i class="fas fa-cancel"></i> @lang('site.cancel')
                                                                                    </button>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <form method="POST"
                                                                      id="form_delete_paypal"
                                                                      action="{{ route('payment.paypal.disable') }}">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}

                                                                    <input type="hidden">
                                                                </form>


                                                                <div class="row">
                                                                    <!-- accepted payments column -->
                                                                    <div class="card  card-outline card-success">
                                                                        <div class="card-body">
                                                                            <div class="col-12">
                                                                                <h2 class="text-success">

                                                                                    <i class="fab fa-cc-stripe fa-lg"></i>
                                                                                    Stripe
                                                                                </h2>

                                                                                <p
                                                                                        style="    margin-top: 40px;">
                                                                                    @lang('site.stripe_description')

                                                                                </p>
                                                                                <div class="col-6">
                                                                                    <img src="{{asset('../../dist/img/credit/visa.png')}}"
                                                                                         alt="Visa">
                                                                                    <img src="{{asset('../../dist/img/credit/mastercard.png')}}"
                                                                                         alt="Mastercard">
                                                                                    <img src="{{asset('../../dist/img/credit/american-express.png')}}"
                                                                                         alt="American Express">
                                                                                    <img src="{{asset('../../dist/img/credit/mestro.png')}}"
                                                                                         alt="mestro">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                @if($store->Stripe_isActive() == false)
                                                                                    <div class="row"
                                                                                         style="padding-top: 10px;">
                                                                                        <div class="col-md-4">
                                                                                            <hr>
                                                                                            <hr>
                                                                                            <ul class="list-group"
                                                                                                style="list-style: none">
                                                                                                <li>
                                                                                                    <i class="fas fa-credit-card"> @lang('site.credit_card_rate_stripe')</i>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <i class="fas fa-transgender"> @lang('site.transaction_stripe')</i>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>

                                                                                        <div class="col-md-8">
                                                                                            <hr>
                                                                                            @lang('site.setup_instructions_stripe')

                                                                                        </div>

                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                            @if($store->Stripe_isActive() == false)
                                                                                <div class="col-md-12"
                                                                                     style="display: none"
                                                                                     id="stripe_setup">
                                                                                    <hr>
                                                                                    <hr>
                                                                                    <h3>@lang('site.conf_stripe_live')</h3>


                                                                                    <div class="row">
                                                                                        <form method="POST"
                                                                                              id="form_active_stripe"
                                                                                              action="{{ route('payment.stripe.active') }}">
                                                                                            {{ csrf_field() }}
                                                                                            {{ method_field('POST') }}

                                                                                            <input hidden
                                                                                                   value="Live"
                                                                                                   name="mode"
                                                                                                   required>
                                                                                            <input hidden
                                                                                                   value="Stripe"
                                                                                                   name="type"
                                                                                                   required>

                                                                                            <div class="col-sm-12">

                                                                                                <label>@lang('site.api_key')</label>
                                                                                                <input type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="pk_live_LWTHIYcnFs...."
                                                                                                       name="api_key"
                                                                                                       required>

                                                                                                <!-- text input -->

                                                                                                <label>@lang('site.secret_key')</label>
                                                                                                <input type="text"
                                                                                                       class="form-control"
                                                                                                       placeholder="sk_live_LWTHIYcnF...."
                                                                                                       name="secret_key"
                                                                                                       required>


                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        </div>

                                                                        <div class="card-footer">
                                                                            <div class="row no-print">
                                                                                <div class="col-md-12">


                                                                                    @if($store->Stripe_isActive())


                                                                                        <button id="stripe_btn_desactive"
                                                                                                type="button"
                                                                                                style="margin-right: 5px;"
                                                                                                class="btn btn-danger float-right">
                                                                                            @lang('site.stripe_btn_desactive')
                                                                                        </button>


                                                                                    @else



                                                                                        <button id="stripe_btn_active"
                                                                                                type="button"
                                                                                                class="btn btn-success float-right">
                                                                                            <i class="far fa-credit-card"></i>
                                                                                            @lang('site.stripe_active_btn')
                                                                                        </button>

                                                                                        <button style="display: none"
                                                                                                id="stripe_btn_submit"
                                                                                                type="button"
                                                                                                class="btn btn-success float-right">
                                                                                            <i class="far fa-credit-card"></i>
                                                                                            @lang('site.stripe_submit_btn')
                                                                                        </button>
                                                                                    @endif


                                                                                    <button type="button"
                                                                                            class="btn btn-warning float-right"
                                                                                            id="stripe_btn_cancel"
                                                                                            style="margin-right: 5px;display: none">
                                                                                        <i class="fas fa-cancel"></i> @lang('site.cancel')
                                                                                    </button>


                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>


                                                                <form method="POST" id="stripe_delete_form"
                                                                      action="{{ route('payment.stripe.disable') }}">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}

                                                                </form>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- /.card -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>



@endsection

<!--JS-->
@section('header_script')
    <script>

        @if($store->PayPal_isActive() == false)
        //GATEWAYS PAYMENTSN
        var paypal_setup = document.getElementById('paypal_setup');
        var paypal_btn_active = document.getElementById('paypal_btn_active');
        var paypal_btn_submit = document.getElementById('paypal_btn_submit');
        var paypal_btn_cancel = document.getElementById('paypal_btn_cancel');


        paypal_btn_active.addEventListener('click', () => {
            paypal_btn_active.setAttribute('style', 'display:none;');
            paypal_setup.setAttribute('style', 'display:block;');
            paypal_btn_submit.setAttribute('style', 'display:block;');
            paypal_btn_cancel.setAttribute('style', 'margin-right: 5px;display:block;');
        });

        paypal_btn_cancel.addEventListener('click', () => {
            paypal_btn_active.setAttribute('style', 'display:block;');
            paypal_setup.setAttribute('style', 'display:none;');
            paypal_btn_submit.setAttribute('style', 'display:none;');
            paypal_btn_cancel.setAttribute('style', 'margin-right: 5px;display:none;');
        });

        $("#paypal_btn_submit").click(function () {
            $("#form_active_paypal").submit();
        });

        @else

        $("#paypal_btn_desactive").click(function () {
            $("#form_delete_paypal").submit();
        });
                @endif
                @if($store->Stripe_isActive() == false)

        var stripe_setup = document.getElementById('stripe_setup');
        var stripe_btn_active = document.getElementById('stripe_btn_active');
        var stripe_btn_submit = document.getElementById('stripe_btn_submit');
        var stripe_btn_cancel = document.getElementById('stripe_btn_cancel');

        stripe_btn_active.addEventListener('click', () => {
            stripe_setup.setAttribute('style', 'display:block;');
            stripe_btn_submit.setAttribute('style', 'display:block;');
            stripe_btn_cancel.setAttribute('style', 'margin-right: 5px;display:block;');
            stripe_btn_active.setAttribute('style', 'display:none;');
        });

        stripe_btn_cancel.addEventListener('click', () => {
            stripe_btn_active.setAttribute('style', 'display:block;');
            stripe_setup.setAttribute('style', 'display:none;');
            stripe_btn_submit.setAttribute('style', 'display:none;');
            stripe_btn_cancel.setAttribute('style', 'margin-right: 5px;display:none;');
        });
        $("#stripe_btn_submit").click(function () {
            $("#form_active_stripe").submit();
        });


        @else

        $("#stripe_btn_desactive").click(function () {
            $("#stripe_delete_form").submit();
        });
        @endif

    </script>
@endsection