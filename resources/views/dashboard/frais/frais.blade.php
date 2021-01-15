@extends('dashboard.index')



@section('title')
    @lang('site.frais')
@endsection


@section('header_links')
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">

        @include('partials._errors')

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="#" class="btn btn-default btn-sm"
                       style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i
                                class="fas fa-chevron-left"></i> @lang('site.home')</a>
                    <h1>@lang('site.frais')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">@lang('site.home')</a></li>
                        <li class="breadcrumb-item"><a href="#">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item active">@lang('site.frais')</li>
                    </ol>


                </div>
            </div>
        </div><!-- /.container-fluid -->

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) --> 
              
                    <div class="card-header">
                        <div class="card-tools " style="margin-right: 0.475rem;">


 
                            <a href="{{ route('frais.create')}}" class="btn btn-default btn-sm"
                               title="@lang('site.add')">
                                <i class="fas fa-plus"></i> @lang('site.add')</a>
                  
    
    
                </div>
               
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                          <thead>                  
                            <tr>
                              <th style="width: 10px">#</th> 
                              <th>@lang('site.user') </th> 
                              <th>Type </th> 
                              <th>@lang('site.title') </th> 
                              <th>@lang('site.description') </th> 
                              <th>@lang('site.price') </th> 
                              <th>@lang('site.createdat') </th> 
                            </tr>
                          </thead>
                          <tbody>
                              @if ($frais->count()>0)  
                           
                                    @foreach ($frais as $item)
                                    <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user_id }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->value }}</td>
                                    <td>{{ $item->created_at }}</td>
                                </tr>
                                    @endforeach
                             
                             @endif
                          </tbody>
                        </table>

                        <div class="card-footer">
                            <div class="text-center">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    @include('dashboard.components.pagination', ['paginator' => $frais])
                                </div>
                            </div>
                        </div>

                      </div>
                
                      
 
                <!-- /.row -->


            </div><!-- /.container-fluid -->
        </section>
    </section>

@endsection


@section('header_script')
    <!-- ChartJS -->
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>

    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>

@endsection