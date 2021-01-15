@extends('dashboard.index')



@section('title')
TRIALS TEST
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
                    <h1>TRIALS TEST LIST</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">@lang('site.home')</a></li>
                        <li class="breadcrumb-item active">TRIALS LIST</li>
                    </ol>


                </div>
            </div>
        </div><!-- /.container-fluid -->

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) --> 
                <div class="row">
                    <div class="card-body">
                        <table class="table table-bordered">
                          <thead>                  
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>@lang('site.email')</th>
                              <th>Support</th> 
                              <th> </th> 
                            
                            </tr>
                          </thead>
                          <tbody>
                           @foreach ($trials as $try)
                           @if($try->status == 0)
                                <tr style="background-color: rgba(208, 200, 202, 0.6);">
                            @else
                                <tr style="    background-color: white;">
                            @endif

                                <td>{{ $try->id }}</td> 
                                <td>{{ $try->email }}</td> 
                                <td><span class="badge badge-warrning">{{ $try->support }}</span></td> 
                             

                                <td>
                                    @if ( Auth::user()->name == $try->support && $try->status == 0)
                                         <a class="btn btn-success" href="{{ route('trials.done',$try->id) }}">Completed</a>
                                    @endif
                                   
                                </td>
                           
                                
                            </tr>
                           @endforeach
                          </tbody>
                        </table>

                        <div class="card-footer">
                            <div class="text-center">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    @include('dashboard.components.pagination', ['paginator' => $trials])
                                </div>
                            </div>
                        </div>

                      </div>
                
                      

                    </div>
                <!-- /.row -->


            </div><!-- /.container-fluid -->
        </section>
    </section>

@endsection

 