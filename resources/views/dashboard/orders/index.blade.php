@extends('dashboard.index')


@section('title')
    @lang('site.orders')
@endsection

<!--HTML-->
@section('content')

 
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{url('dashboard')}}" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.dashboard')</a>
                    <h1>@lang('site.list_orders')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item active">@lang('site.list_orders')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


  <style>
      .modal-backdrop { 
            z-index: 0; 
      }

      </style>
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools " style="margin-right: 0.475rem;">
                    
                  
                        <form action="{{ route('orders.search') }} " method="get" style="float: left;"
                                    class="form-inline">
                                {{ csrf_field() }} 
                                <div class="form-group mb-2">
                                <label for="staticEmail2" class="sr-only">Email</label>
                                <input type="text" name="order_id"   class="form-control" id="staticEmail2"  >
                                </div>
                                
                                <button type="submit" class="btn btn-primary mb-2">Search</button>
                      </form>


                      <form action="{{ route('orders.multi_send') }} " method="post"  style="float: right;"
                        class="form-inline">
                        {{ csrf_field() }} 
                        {{ method_field('post') }}
                            <div class="form-group mb-2">  
                            <div class="select2-purple">
                                <select id="state" class="select2" multiple="multiple" required
                                        name="order_ids[]" 
                                        data-dropdown-css-class="select2-purple" style="width: 100%;"
                                >
            
            
            
                                </select>
                                </div>
                                <button type="submit" class="btn btn-danger mb-2">Auto Send</button>
                        </form>
            
                     
                      
<!--
                    @if(Auth::user()->hasPermission('create_orders') or  Auth::user()->hasRole('superadministrator') )
                        <a href="{{ route('orders.create') }} " class="btn btn-default btn-sm"
                           title="@lang('site.add')">
                            <i class="fas fa-plus"></i> @lang('site.add')</a>
                    @else
                        <a class="btn btn-default btn-sm disabled"><i
                                    class="fas fa-plus"></i> @lang('site.add')</a>



                    @endif

                        -->
                </div>


            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ALL ORDERS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">UNDONE ORDERS</a>
                </li> 
              </ul>

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body p-0">
                        @if($orders->count() > 0)
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 15%">
                                        #ID
                                    </th>
                                    <th style="width: 15%">
                                        @lang('site.email')
                                    </th>
                                    <th>
                                        Total
                                    </th>
        <!--
                                    <th>
                                        @lang('site.status')
                                    </th>
                                -->
                                    <th>
                                        Support                            
                                    </th>
    
                                    <th>
                                        @lang('site.createdat')
                                    </th>
                                    <th>
                                        Panel                            
                                    </th> 
                                    <th>
                                        Type                            
                                    </th> 
                                    <th >
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $index => $order)

                                

                                @if ($order->exp_date == null)
                                    <tr style="background-color:blueviolet ;">
                                @else
                                    <tr style="    background-color: white;">
                                @endif
                                    
                                   @if (($order->mac == 'ChaKib Mayen' or $order->mac == 'Aissam Ichibi') and auth()->user()->id == '271')
                                    <!---->
                                   @else
                                 
                                        <td>
                                            <b>{{ 'OR-'.$order->id }}</b>
                                        </td>
                                        <td>
                                            {{ $order->email }}
                                        </td>
                                        <td>
                                            <h4><span class="badge badge-warning"> €<b>{{ $order->total }}</b></span></h4>
                                        </td>
    
                                        <th>
                                            Support                            
                                        </th>
        
                                        <th>
                                            @lang('site.createdat')
                                        </th>
                                    
                                    @endif
    
                                    <th >
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders_undone as $index => $order)
                                    
                                @if ($order->exp_date == null)
                                    <tr style="background-color:blueviolet ;">
                                @else
                                    <tr style="    background-color: white;">
                                @endif
                                    
                                        <td>
                                            <b>{{ 'OR-'.$order->id }}</b>
                                        </td>
                                        <td>
                                            {{ $order->email }}
                                        </td>
                                        <td>
                                            <h4><span class="badge badge-warning"> €<b>{{ $order->total }}</b></span></h4>
                                        </td>
        <!--
                                        <td>
                                            @if($order->status == 1)
                                                <span class="badge badge-success">@lang('site.paid')</span>
                                            @else
                                                <span class="badge badge-danger">@lang('site.unpaid')</span>
                                            @endif
    
                                        </td>
                                    -->
        
                                        <td>
    
                                
                                                <span class="badge badge-dark">{{ $order->mac }}</span>
                                        
                                        
                                    
                                        </td>
    
                                        <td>
                                            <b> {{ $order->created_at }}  ({{ $order->created_at->diffForHumans()  }})</b>
                                        </td>
    
    
                                        <td class="project-actions text-right">
        
    
    
                                            @if ($order->exp_date == null)
                                    
                                            @if(Auth::user()->hasPermission('read_orders') or  Auth::user()->hasRole('superadministrator') )
                                                <a class="btn btn-primary btn-sm"
                                                href="{{ route('orders.lines',$order->id) }} ">
                                                    <i class="fas fa-eye">
                                                    </i> 
                                                </a>
                                            @else
                                                <a class="btn btn-primary btn-sm disabled"> <i
                                                            class="fas fa-eye"> </i> @lang('site.products')  </a>
                                            @endif
    
                                            
                                            
                                            <form action="{{ route('orders.undone',$order->id) }} " method="post"
                                                class="form-check-inline">
                                            {{ csrf_field() }}
                                            {{ method_field('post') }}
                                            <button type="submit" class="btn btn-warning btn-sm ">
                                                <i class="fas fa-envelope">
                                                </i>
                                            </button>
                                        </form>
    
        
                                @endif
    
    
    
    
    
    
                                        <form action="{{ route('orders.expired',$order->id) }} " method="post"
                                            class="form-check-inline">
                                        {{ csrf_field() }}
                                        {{ method_field('post') }}
                                        <button type="submit" class="btn btn-default btn-sm ">
                                            <i class="fas fa-infinity">
                                            </i>
                                        </button>
                                    </form>
    
                                        
    
                                            @if(Auth::user()->hasPermission('delete_orders')  || Auth::user()->hasRole('superadministrator') )
                                                <form action="{{ route('orders.destroy',$order->id) }} " method="post"
                                                    class="form-check-inline">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <button type="submit" class="btn btn-danger btn-sm action">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                    </button>
                                                </form>
    
                                            @else
                                                <a class="btn btn-danger btn-sm disabled"> <i class="fas fa-trash"> </i> </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h1 class="text-center">@lang('site.nodatafound')</h1>
                        @endif
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                        <div class="float-right">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                @include('dashboard.components.pagination', ['paginator' => $orders_undone])
                            </div>
                        </div>
                </div>
            </div> 
              </div>
            
           
        </div>
        <!-- /.card -->

        
        <!-- Default box -->
        <div class="card">
           
            <div class="card-body p-0">
                @if($products->count() > 0)
                    <table class="table table-striped projects">
                        <thead>
                        <tr> 
                            <th  >
                                @lang('site.name')
                            </th>
                            <th >
                                Period
                            </th>
                            <th >
                                Price
                            </th>
                         
                            <th  >
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $index => $product)
                            <tr>
                             
                                <td>
                                    <a>
                                      {{ strtoupper($product->title) }}

                                    </a>
                                </td>
                                <td>

                                        <span class="badge badge-dark" style="font-size: 12px;">    {{ $product->band }} Month(s)</span>

                                </td>
                              
                                <td class="project-state">
                                    <span class="badge badge-dark" style="font-size: 12px;">   {{ $product->price_after }} Euro </span>
                                </td>
                             
                                <td class="project-actions text-right">


                                        @if(Auth::user()->hasPermission('read_products') or  Auth::user()->hasRole('superadministrator') )
                                            <a class="btn btn-primary btn-sm" href="{{ route('products.show', $product->id) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        @else
                                            <a class="btn btn-primary btn-sm disabled"> <i
                                                        class="fas fa-eye"> </i> </a>
                                        @endif



                                    @if(Auth::user()->hasPermission('update_products') or  Auth::user()->hasRole('superadministrator') )
                                        <a class="btn btn-info btn-sm" href="{{ route('products.edit', $product->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                    @else
                                        <a class="btn btn-info btn-sm disabled"> <i class="fas fa-pencil-alt"> </i> </a>
                                    @endif

                                    @if(Auth::user()->hasPermission('delete_products')  || Auth::user()->hasRole('superadministrator') )
                                        <form action="{{ route('destroy',$product->id) }}" method="post"
                                              class="form-check-inline">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger btn-sm action">
                                                <i class="fas fa-trash">
                                                </i>
                                            </button>
                                        </form>

                                    @else
                                        <a class="btn btn-danger btn-sm disabled"> <i class="fas fa-trash"> </i> </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <h1 class="text-center">@lang('site.nodatafound')</h1>
                @endif
            </div>
        
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

    

@endsection

<!--JS-->
@section('header_script')
    <script>

        
/*
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

        */

     

    </script>
@endsection

