@extends('dashboard.index')


@section('title')
    @lang('site.products')
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
                    <h1>@lang('site.list_products')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item active">@lang('site.list_products')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools " style="margin-right: 0.475rem;">



                    @if(Auth::user()->hasPermission('create_products') or  Auth::user()->hasRole('superadministrator') )
                        <a href="{{ route('create') }}" class="btn btn-default btn-sm"
                           title="@lang('site.add')">
                            <i class="fas fa-plus"></i> @lang('site.add')</a>
                    @else
                        <a class="btn btn-default btn-sm disabled"><i
                                    class="fas fa-plus"></i> @lang('site.add')</a>



                    @endif


                </div>




            </div>
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
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="float-right">
                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                        @include('dashboard.components.pagination', ['paginator' => $products])
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->

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


        document.getElementById('roleselect').addEventListener('change',(e)=>{
            document.getElementById('formroles').submit();
        })

        document.getElementById('statusselect').addEventListener('change',(e)=>{
            document.getElementById('formroles_status').submit();
        })

    </script>
@endsection

