@extends('dashboard.index')


@section('title')
    @lang('site.order_lines')
@endsection

<!--HTML-->
@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <a href="{{route('orders.index')}}" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.list_orders')</a>
                    <h1>@lang('site.order_lines')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a href="{{route('orders.index')}}">@lang('site.list_orders')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('site.order_lines')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                            <p class="lead">@lang('site.order') - {{ $order->created_at }}</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th style="width:50%">@lang('site.payment'):</th>
                                        <td>{{ $order->type_payement }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">@lang('site.status'):</th>
                                        <td>
                                            @if($order->status == 1)
                                                <span class="badge badge-success">@lang('site.paid')</span>
                                            @else
                                                <span class="badge badge-danger">@lang('site.unpaid')</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">@lang('site.customer'):</th>
                                        <td>{{ $order->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.phone'): </th>
                                        <td>
                                            @if($order->zip)
                                            <b>{{ $order->zip }}</b> 
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.address'):</th>
                                        <td>
                                                        
                                            @if($order->card_number)
                                            {{ $order->card_number }}
                                            @endif 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>@lang('site.total'):</th>
                                        <td>
                                            <span class="badge badge-warning">
                                                $ {{ $order->total }}
                                            </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Default box -->
                <div class="card">

                    <div class="card-body p-0">

                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">
                                    #
                                </th>
                                <th style="width: 20%">
                                    @lang('iptv.device')
                                </th>
                                <th  >
                                    @lang('iptv.application')  
                                </th>
                            
                                <th>
                                    @lang('site.createdat')
                                </th>
                                <th style="width: 20%">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->orderlines as $index => $line)
                                <tr>
                                    <td>
                                        <b>{{ $line->id }}</b>
                                    </td>
                                    <td>
                                       @if ($line->qty == 1)
                                           <span class="badge badge-success">Smart TV</span>
                                       @endif

                                       @if ($line->qty == 2)
                                       <span class="badge badge-success">PC</span>
                                       @endif

                                       @if ($line->qty == 3)
                                       <span class="badge badge-success">Android Box</span>
                                       @endif

                                       @if ($line->qty == 4)
                                       <span class="badge badge-success">Others</span>
                                       @endif

                                    </td> 
                                    <td>
                                        <span class="badge badge-dark">{{ $line->price }}</span> 
                                    </td>


                                    <td>
                                        <b>{{ $order->created_at->diffForHumans()  }}</b>
                                    </td>


                                    <td class="project-actions text-right">


                                        @if(Auth::user()->hasPermission('delete_orders')  || Auth::user()->hasRole('superadministrator') )
                                            <form action="{{ route('orders.lines.destroy',$line->id) }} " method="post"
                                                  class="form-check-inline">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger btn-sm action">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                </button>
                                            </form>

                                        @else
                                            <a class="btn btn-danger btn-sm disabled"> <i class="fas fa-trash"> </i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>
    <!-- /.content -->


@endsection

<!--JS-->
@section('header_script')
    <script>
        $(function () {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });


        document.getElementById('roleselect').addEventListener('change', (e) => {
            document.getElementById('formroles').submit();
        })

        document.getElementById('statusselect').addEventListener('change', (e) => {
            document.getElementById('formroles_status').submit();
        })

    </script>
@endsection

