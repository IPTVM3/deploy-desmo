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
        <div class="card-header">
            <h3 class="card-title"></h3>

            <div class="card-tools " style="margin-right: 0.475rem;">



                    <a href="{{ route('categories.create') }} " class="btn btn-default btn-sm " data-toggle="modal" data-target="#exampleModal"
                       title="@lang('site.add')">
                        <i class="fas fa-plus"></i> @lang('site.add')</a>


            </div>



        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">


                    <!-- Main content -->
                    <div class="invoice">
                        <div class="card">

                             <div class="card-body">
                                <div class="row">


                                    <div class="col-12">

                                    
                            

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                    <th scope="col">(Name) Email</th>
                                                    <th scope="col">API KEY</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($geteways as $index => $pay)


                                                <tr class="@if($pay->id == $store->unit_system) table-primary @endif">
                                                
                                                <th scope="row">{{$pay->id}}</th>
                                                    <td>{{$pay->client_account}}</td>
                                                    <td>{{$pay->api_key}}</td>

                                                <td>
                                                
                                                <form role="form" method="POST" action="{{ route('settings.paypal.change') }}"
                                                   >
                                                    {{ csrf_field() }}
                                                    {{ method_field('POST') }}

                                                    <input type="hidden" id="client_id" name="client_id" value="{{$pay->id}}">
                                                    <input type="hidden" id="operation_delete" name="operation_delete" value="operation_delete">


                                                    <button type="submit" class="btn btn-danger">Remove</button>

                                                    </form>
                                                
                                                </td> 

                                                </tr>
                                                
                                             @endforeach
                                               
                                            </tbody>
                                            </table>

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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add PayPal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ route('settings.paypal.change')  }}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" id="operation_delete" name="operation_create" value="operation_create">

                                <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>(Name) Email	</label>
                                        <input type="text" class="form-control" name="name"
                                               value="{{ old('name') }}"
                                               placeholder="@lang('site.name') ...">
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <label for="exampleInputFile">API KEY</label>
                                        <select class="form-control" name="api_key">
                                            @foreach($paypal as $pp)
                                                <option value="{{$pp[1]}}">{{ $pp[0].'-'. $pp[1] }}</option>
                                            @endforeach
                                        </select>



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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .modal-backdrop{
            z-index: 0 !important;
        }
    </style>
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