@extends('dashboard.index')



@section('title')
Customers Messgaes
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
                    <h1>MAIL LIST </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">@lang('site.home')</a></li>
                        <li class="breadcrumb-item active">MAIL LIST</li>
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
                              <th style="width: 10px">Email</th>
                              <th>Subject - Message</th>
                              <th>Created At</th>

                            </tr>
                          </thead>
                          <tbody>
                           @foreach ($messgaes as $email)
                           @if((time()-(60*60*24)) < strtotime($email->created_at))
                                <tr style="background-color: rgba(208, 200, 202, 0.6);">
                            @else
                                <tr style="    background-color: white;">
                            @endif


                                <td>{{ $email->by }}</td>
                                    <td>{{ $email->body }}</td>
                                    <td>{{ $email->created_at }}</td>

                                
                            </tr>
                           @endforeach
                          </tbody>
                        </table>

                        <div class="card-footer">
                            <div class="text-center">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    @include('dashboard.components.pagination', ['paginator' => $messgaes])
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

 