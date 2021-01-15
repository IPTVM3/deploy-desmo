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
                                    
                            

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Domain</th> 
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($paypal as $index => $pay)
                                                <tr>
                                                
                                                <th scope="row">{{$index}}</th>
                                                <td>{{$pay[0]}}</td>  
                                                <td>
                                                
                                                <form role="form" method="POST" action="{{ route('settings.paypal.change') }}"
                                                   >
                                                    {{ csrf_field() }}
                                                    {{ method_field('POST') }}

                                                    <input type="hidden" id="client_id" name="client_id" value="{{$pay[1]}}"> 

                                                    @if($pay[1] != $store->unit_system) 
                                                    <button type="submit" class="btn btn-danger">Activate</button>
                                                    @endif
                                                    </form>
                                                
                                                </td> 

                                                </tr>
                                                
                                             @endforeach
                                               
                                            </tbody>
                                            </table>
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