<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ \App\Store::first()->name }} | @lang('iptv.payment')</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg=="
          crossorigin="anonymous">


    <!-- Noty -->
    <link href="{{ asset('plugins/noty/noty.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/noty/noty.js') }}" type="text/javascript"></script>

    <script src="https://js.stripe.com/v3/"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);

        .body {
        / / custom fonts, etcetera can go here
        }

        .jumbotron-flat {
            background-color: solid #4DB8FFF;
            height: 100%;
            border: 1px solid #4DB8FF;
            background: white;
            width: 100%;
            text-align: center;
            overflow: auto;
        }

        .paymentAmt {
            font-size: 80px;
        }

        .centered {
            text-align: center;
        }

        .title {
            padding-top: 15px;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }
    </style>
</head>

<body style="font-family: 'Open Sans', sans-serif;">
<!--
<div class="snipper">

    <style>
        #se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(http://smallenvelop.com/wp-content/uploads/2014/08/Preloader_3.gif) center no-repeat #fff;
        }


    </style>
</div>
-->
<!-- Session Flash -->
@include('partials._session')
<!-- /.Session Flash -->



<hr class="featurette-divider"></hr>
<div class="container" >

    <div class="row">
        <div class="col-sm-12">
            <h3>@lang('iptv.thanks')</h3>
            <p>@lang('iptv.desc_detals') </p>
            <p>@lang('iptv.pls_detals')</p>

            <div class="find-widget">
                @lang('iptv.email'): <a href="mailto:{{ \App\Store::first()->email }}">{{ \App\Store::first()->email }}</a>
            </div>

            <div class="find-widget">
                @lang('iptv.address'): <a href="#">{{ \App\Store::first()->address }}</a>
            </div>
            <div class="find-widget">
                @lang('iptv.phone'):  <a href="#">{{ \App\Store::first()->phone }}</a>, <a href="https://wa.me/33783806412">Whatsapp</a>
            </div>





        </div>

    </div>
      <div class="row">
          <div class="col-sm-12" >
              <div class="tab-content">
                  <form method="post" action="{{  route('details',$id) }}">
                      {{ csrf_field() }}
                      {{ method_field('POST') }}
                      <div id="stripe" class="tab-pane fade in active">



                          <br>
                          <div class='error form-group  '>
                              @include('partials._errors')

                          </div>
                          <div class='row'>
                              <div class="col-md-12">
                                  <div class='form-group required'>

                                      <label class='control-label'>@lang('iptv.email') *</label>
                                      <input class='form-control' size='4' type='email' id="email" name="email" required>
                                  </div>
                              </div>

                          </div>

                          <div class='row'>

                              <div class="col-md-12">
                                  <div class='form-group card required'>
                                      <label class='control-label'> @lang('iptv.device') *</label>
                                      <select  class='form-control' id="type_select" name="type" required>
                                          <option disabled="disabled" selected="selected"   >@lang('iptv.choose_your_device')</option>
                                          @foreach($type as $index => $item)
                                              <option value="{{$item['id']}}" id="type_{{$item['id']}}" >{{$item['name']}}</option>
                                          @endforeach
                                      </select>
                                  </div>

                              </div>
                          </div>

                          <div class='row' id="type_option_form" style="display: block">
                              <div class="col-md-12">
                                  <div class='form-group card '>
                                      <label class='control-label' > @lang('iptv.application') </label>
                                      <select class='form-control' id="type_option" name="app"  >
                                          <option disabled="disabled" selected="selected" >@lang('iptv.choose_your_application')</option>

                                      </select>
                                  </div>
                              </div>

                          </div>





                          <div class='form-row'>
                              <div class='form-group'>
                                  <label  class='control-label'></label>
                                  <button class='form-control btn btn-primary' type='submit'>@lang('iptv.finish')→
                                  </button>

                              </div>
                          </div>


                      </div>

                  </form>

              </div>


          </div>
      </div>
</div>


        <!-- jQuery ----------------------------------------------------------------------------------------------------------------------------->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script>
            $('#type_select').change(function () {

                let id = this.value;
                var types = {!! json_encode($type) !!};


                let options = types.filter(e => {
                    if (e.id == id) {
                        return e.options;
                    }
                });

                $('#type_option').empty();
                if(options[0]){
                    $('#type_option_form').show()
                }else{
                    $('#type_option_form').hide()
                }
                options[0].options.map(e => {
                    $('#type_option').append('<option value="' + e.name + '" >' + e.name + '</option>');
                })

            });
        </script>

</body>
</html>