@extends('dashboard.index')



@section('title')
    @lang('site.setting')
@endsection



@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a  href="{{url('dashboard')}}" class="btn btn-default btn-sm" style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i class="fas fa-chevron-left"></i> @lang('site.dashboard')</a>
                    <h1>@lang('site.setting')</h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item active">@lang('site.setting')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    @php
    $models = [
                    'general'=> array('general','','fas fa-cog','info'),
                    'store'=> array('store','dashboard/settings/store','fas fa-store','warning'),
                    'checkout'=> array('geteway','dashboard/settings/gateway','fas fa-credit-card','danger')
                ]
    @endphp
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header">
                            <p  class="text-muted"> @lang('site.settingsdescription')</p>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row pl-5">

                                <!-- START CARD -->
                                @foreach($models as $index => $model)
                                <div class="col-12 col-sm-6 col-md-6 p-3">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-{{$model[3]}} elevation-1"><a  href="{{ url($model[1]) }}"><i class="{{$model[2]}}"></i></a></span>

                                            <div class="info-box-content">
                                                <span class="info-box-number" >@lang('site.'.$model[0])</span>
                                                <span class="info-box-text">
                                              @lang('site.'.$model[0].'_description')
                                              <small></small>
                                            </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                </div>
                                @endforeach
                                <!-- END -->




                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection