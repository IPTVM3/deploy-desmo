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

<div class="container"  > 
            <img src="https://geecoll.com/wp-content/uploads/2019/04/PayPal-stripe-web-opt-300x136-1-300x136.png" class="img-responsive center">
    
</div>
 
<hr class="featurette-divider"></hr>
<div class="container" >
   
    <div class="row">
        <div class="col-sm-6">
            <label class='control-label'></label><!-- spacing -->

            <div class="alert alert-info">@lang('iptv.checkou_desc')
            </div>
            <br>
            <div class="btn-group-vertical btn-block">
                <a class="btn btn-default" style="text-align: left;" href="#paypal" id="paypal_btn">PayPal</a> 
                <a class="btn btn-default disabled" style="text-align: left;" href="#stripe" id="stripe_btn">Stripe/@lang('iptv.credircard')</a>
            </div>
 
            <br><br><br>

            <div class="jumbotron jumbotron-flat">
                @if($product->band == 1)
                <div class="center"><h2><i>{{ $product->band }} @lang('iptv.day')  </i></h2></div>
                @else
                <div class="center"><h2><i>{{ $product->band }} @lang('iptv.mounth') </i></h2></div>
                    @endif
               
                <div class="paymentAmt"> ‎€ {{$product->price_after}}</div>


            </div>
        </div>
        <div class="col-sm-6" >
            <div class="tab-content">
                <div id="stripe"  style="display: none" >

                    <form accept-charset="UTF-8" action="{{ route('iptv.payments.stripe',$product->id) }}"
                          id="payment-form"
                          method="post">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <br>
                        <div class='error form-group  '>
                            @include('partials._errors')

                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class='form-group required'>

                                    <label class='control-label'>@lang('iptv.email') *</label>
                                    <input class='form-control' size='4' type='email' id="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class='form-group card required'>
                                    <label class='control-label'> @lang('iptv.name_on_card') *</label>
                                    <input autocomplete='off' class='form-control' size='20' type='text'
                                           id="name_on_card" required name="name">
                                </div>
 
                            </div>
                        </div>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class='form-group card '>
                                    <label class='control-label'> @lang('iptv.phone') </label>
                                    <input autocomplete='off' class='form-control' size='20' type='text' id="phone"
                                           name="phone">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class='form-group card '>
                                    <label class='control-label'> @lang('iptv.city') *</label>
                                    <input autocomplete='off' class='form-control' size='20' type='text' id="city"
                                           required name="city">
                                </div>
                               
                            </div>
                        </div>

                        <div class='row'>
                            <div class="col-md-6">
                                <div class='form-group card '>
                                    <label class='control-label'> @lang('iptv.address') *</label>
                                    <input autocomplete='off' class='form-control' size='20' type='text' id="address"
                                           name="address">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class='form-group card '>
                                    <label class='control-label'> @lang('iptv.country')  </label>
                                    <input autocomplete='off' class='form-control' size='20' type='text' id="country"
                                             name="country">
                                </div>
                               
                            </div>
                        </div>
 
 
                 <!--
                        <div class='form-row'>
                            <div class='form-group card required'>
                                <label class='control-label'>@lang('iptv.ch_card_num') </label>
                                <input autocomplete='off' class='form-control card-number' size='20' type='text'
                                       required name="number_card">
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group cvc required'>
                                <label class='control-label'>CVC</label>
                                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4'
                                       required name="cvc"
                                       type='text'>
                            </div>
                            <div class='form-group expiration required'>
                                <label class='control-label'>@lang('iptv.exp')</label>
                                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'
                                       required name="exp_mm">
                            </div>
                            <div class='form-group expiration required'>
                                <label class='control-label'>@lang('iptv.yr')</label>
                                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'
                                       required name="exp_yy">
                            </div>
                        </div>
                            -->

                        <div class="form-group">
                            <label for="card-element">
                                @lang('iptv.creditordb')
                            </label>
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>
                        <style>
                            /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
                            .StripeElement {
                                box-sizing: border-box;

                                height: 40px;

                                padding: 10px 12px;

                                border: 1px solid transparent;
                                border-radius: 4px;
                                background-color: white;

                                box-shadow: 0 1px 3px 0 #e6ebf1;
                                -webkit-transition: box-shadow 150ms ease;
                                transition: box-shadow 150ms ease;
                            }

                            .StripeElement--focus {
                                box-shadow: 0 1px 3px 0 #cfd7df;
                            }

                            .StripeElement--invalid {
                                border-color: #fa755a;
                            }

                            .StripeElement--webkit-autofill {
                                background-color: #fefde5 !important;
                            }
                        </style>
                        <div class='form-row'>
                            <div class='form-group'>
                                <label class='control-label'></label>

                                <button class='form-control btn btn-primary' type='submit'>@lang('iptv.continue')→
                                </button>

                            </div>
                        </div>
                    </form>

                </div>

                <div id="paypal" class="tab-pane fade in active" >

                    <form action="{{ route('iptv.payments.paypal',$product->id) }}" id="paypalForm" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <div class="paypalResult"><!-- content will load here --></div>
                        <br>
                        <input type="hidden" id="action" value="paypal"></input>
                        <input type="hidden" id="token" value="token-supersecuretoken123123123"></input>
                        <a href="#paypal"><img
                                    src="https://fleure.ma/wp-content/uploads/2017/11/Paypal-logo-20141.png"
                                    alt="paypal" width="100%"></a>
                        <br><br><br>
                        <div class='error form-group  '>
                            @include('partials._errors')

                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class='form-group required'>

                                    <label class='control-label'>@lang('iptv.email') *</label>
                                    <input class='form-control' size='4' type='email' id="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class='form-group card required'>
                                    <label class='control-label'> @lang('iptv.phone') </label>
                                    <input autocomplete='off' class='form-control' size='20' type='text' id="phone"
                                           name="phone">
                                </div>

                            </div>
                        </div>


                        <div class='form-row'>
                            <div class='form-group card required'>
                                <div class='form-group card '>
                                    <label class='control-label'> @lang('iptv.country') *</label>
                                    <input autocomplete='off' class='form-control' size='20' type='text' id="city"
                                           required name="country">
                                </div> 
                            </div>
                        </div>
                        <button id="paypal_btn_sub" class='form-control btn btn-primary submit-button'
                                type='submit'> @lang('iptv.continue') →
                        </button>

                    </form>
                    <br>
                    <p id="loading" style="display: none">@lang('iptv.wait')</p>
                </div>

            </div>


        </div>



            <!-- jQuery ----------------------------------------------------------------------------------------------------------------------------->
            <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
            <!-- Bootstrap 4 -->
            <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

            <script src="{{asset('js/app.js')}}"></script>
            <script>
                $('#paypal_btn').click(function () {
                    $('#stripe').css("display","none");
                    $('#paypal').css("display","block");
                })

                $('#stripe_btn').click(function () {
                    $('#paypal').css("display","none");
                    $('#stripe').css("display","block");
                })

                window.addEventListener('load', function () {
                    var sniiper = document.getElementById('se-pre-con');
                    sniiper.setAttribute("id", "");
                });

                $('#paypal_btn_sub').click(function () {
                    $('#loading').attr('style', 'display:block');
                })

            
                //var stripe = Stripe('pk_live_SoinymNcNvPEKFlSOmyCWfZX000CNXtGYN');
                console.log('Uploading...............')
                console.log(stripe)
                // Create an instance of Elements.
                var elements = stripe.elements();

                // Custom styling can be passed to options when creating an Element.
                // (Note that this demo uses a wider set of styles than the guide below.)
                var style = {
                    base: {
                        color: '#32325d',
                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: 'antialiased',
                        fontSize: '16px',
                        '::placeholder': {
                            color: '#aab7c4'
                        }
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a'
                    }
                };

                // Create an instance of the card Element.
                var card = elements.create('card', {style: style});

                // Add an instance of the card Element into the `card-element` <div>.
                card.mount('#card-element');

                // Handle real-time validation errors from the card Element.
                card.addEventListener('change', function (event) {
                    var displayError = document.getElementById('card-errors');
                    if (event.error) {
                        displayError.textContent = event.error.message;
                    } else {
                        displayError.textContent = '';
                    }
                });

                // Handle form submission.
                var form = document.getElementById('payment-form');
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    var options = {
                        name: document.getElementById('name_on_card').value,
                        address_line1: document.getElementById('address').value,
                        address_city: document.getElementById('city').value,
                    };
                    stripe.createToken(card, options).then(function (result) {
                        if (result.error) {
                            // Inform the user if there was an error.
                            var errorElement = document.getElementById('card-errors');
                            errorElement.textContent = result.error.message;
                        } else {
                            // Send the token to your server.
                            stripeTokenHandler(result.token);
                        }
                    });
                });

                // Submit the form with the token ID.
                function stripeTokenHandler(token) {
                    // Insert the token ID into the form so it gets submitted to the server
                    var form = document.getElementById('payment-form');
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', token.id);
                    form.appendChild(hiddenInput);

                    // Submit the form
                    form.submit();
                }

            </script>

</body>
</html>