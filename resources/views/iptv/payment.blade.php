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
     <!-- 
          <script src="https://www.paypal.com/sdk/js?client-id=AdvRzlPdGjjy8BqPzTel5Hz1ivHNYw5afb-pbbqhGjdr7hOSvTNX2k79RE4eduAHxgqqd7BtszA11CNo&currency=EUR"></script>
     

        shit <script src="https://www.paypal.com/sdk/js?client-id=AZ9biz-p-nI_M77P-pXWJr_hwnBgs_Fud3sy3oji2he7KKCZDQOU029SuTPGbNwTkmbt7xORsmRrlvaP&currency=EUR"></script>
     
       <script src="https://www.paypal.com/sdk/js?client-id=AUiEqkr0c9K1XlNLsNjHRG-mAPyCfbnLOK2kWj8iMQxng9QX4Tb69HwvuDGUlQoW2mtwGsY_7VtMV38w&currency=EUR"></script>
    
   -->
   <script src="https://widget.unitpay.money/unitpay.js"></script>

    <meta name="_token" content="{!! csrf_token() !!}" />
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
  /* Media query for desktop viewport */
  @media screen and (min-width: 400px) {
            #paypal-button-container {
               padding-top: 21px;
            }
        }
    </style>


<!-- Global site tag (gtag.js) - Google Ads: 647729613 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-647729613"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-647729613');
</script>

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
            
    
</div>
 
 
<hr class="featurette-divider"></hr> 

 
<header class="text-center">
    <img src="{{  asset('iptv_update/images/logo_dark.png') }}" alt="logo" class="logo-light default">
</header>

<br><br>
<div class="container text-center" >
   
    <div class="row">
        <div class="col-sm-12" id="success" style="display: none">
        
            <div class="row text-center">
                <div class="col-sm-6 col-sm-offset-3">
                <h1 style="color:#0fad00">@lang('new.thinks_pay')</h1>
                <p>@lang('new.thinks_hd_1')</p>
                <p >@lang('new.thinks_hd_2')</p> 
                <p >@lang('new.thinks_contact')</p>
 
                    <div class="btn-group " role="group" aria-label="First group">
                        <button type="button" class="btn btn-primary" onclick="location.href = 'mailto:contact.bobres@gmail.com';">contact.bobres@gmail.com</button>
                
                        <button type="button" class="btn btn-success" onclick="location.href = 'https://api.whatsapp.com/send?phone=33753133255'">+33 7 531 332 55</button>
                        <button type="button" class="btn btn-success" onclick="location.href = 'https://api.whatsapp.com/send?phone=33751364857'">+33 7 513 648 57</button>
                    </div> 
              

            
     
                </div>
                
            </div>
      
            <br><br>
            <style>
                .cta-section {
    padding: 40px 0;
}
.bg-pink {
    background-color: rgb(102, 201, 4) !important;

    border-color: rgb(102, 201, 4) !important;
    color: #fff!important;
}
.m-t-5 {
    margin-top: 5px!important;
}
.no-margin-bottom {
    margin-bottom: 0!important;
}
.btn-wide {
    padding-left: 30px;
    padding-right: 30px;
}
.btn-default {
    color: #333;
    background-color: #fcfcfc;
    border-color: #ddd;
}
.btn-rounded, .btn-rounded.btn-labeled>b {
    border-radius: 100px !important;
}
.m-r-20 {
    margin-right: 20px!important;
}
.bg-white {
    background-color: #fff!important;
    color: #333!important;
}


.bg-amber {
    background-color: #FFC107!important;
    border-color: #FFC107!important;
    color: #fff!important;
}
.text-black {
    color: #222 !important;
}
</style>
    </div>

        <div class="col-sm-12 text-center" id="pay_con"  >
            <label class='control-label'></label><!-- spacing -->


            
            <div class="alert alert-info" style="    font: caption;            "> 
              @lang('new.terms_d')  <a href="{{ route('terms') }}"  >terms and conditions</a>
            </div>
            <br>
            <div class="btn-group-vertical btn-block" style="display: none">
                <a class="btn btn-primary" style="text-align: left;" href="#paypal" id="paypal_btn">PayPal</a> 
                <a class="btn btn-success" style="text-align: left;" href="#stripe" id="stripe_btn"> @lang('iptv.credircard')</a>
            </div>

            <!--
            <div   id="pay_con">
                <div id="paypal-button-container"></div>
           </div> 
           -->
           <!--
           <div   id="pay_con">
            <form action="https://unitpay.money/pay/368521-e4d9d">
                <input type="text" name="account" value="demo">
                <input type="text" name="sum" value="{{$product->price_after}}">
                <input type="hidden" name="desc" value="Payment description">
                <input type="hidden" name="signature" value="23f107d5aefc756154963e943f541dd0">
                <input class="btn paypal-button paypal-button-number-0 paypal-button-layout-vertical paypal-button-shape-rect paypal-button-number-multiple paypal-button-env-production paypal-button-color-gold paypal-button-text-color-black paypal-logo-color-blue " type="submit" value="PayNow">
                </form>
                

           </div> 

        <form action="https://unitpay.money/pay/368521-e4d9d">
        <input type="hidden" name="account" value="demo">
        <input type="hidden" name="sum" value="{{$product->price_after}}">
        <input type="hidden" name="desc" value="Payment description">
        <input type="hidden" name="signature" value="{{$signature}}">
        <input type="hidden" name="locale" value="en">
        <input class="btn btn-primary btn-block" type="submit" value="Pay">
        </form>

          -->
        
          <div  class="tab-pane fade in active">
                
                <div class='row'>
                    <div class="col-md-6">
                        <div class='form-group required'>

                            <label class='control-label'>@lang('iptv.email') *</label>
                            <input class='form-control' size='4' type='email' id="email" name="email" required>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class='form-group card required'>
                            <label class='control-label'> @lang('iptv.ch_card_name') </label>
                            <input autocomplete='off' class='form-control' size='20' type='text' id="name"
                                name="name">
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
                <button id="paynow" class='form-control btn btn-success submit-button' 
                        type='button'> @lang('iptv.continue') →
                </button>

 
         
                </div>
 
                       
                    
          
           <br>

            <div class="jumbotron jumbotron-flat">
                   
                @lang('iptv.balance')
               
               
                <div class="paymentAmt">  ‎€ {{$product->price_after}}</div>
         

            </div>
        </div>

 

        
  

        
      
        <div class="col-sm-6"  style="display: none;">
            <div class="tab-content">
                <!--
                <div id="stripe" style="display: none;">

                    <form accept-charset="UTF-8"  
                          id="payment-form"
                          method="post">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <br>
                        <div class='error form-group  '>
                            @include('partials._errors')

                        </div>

                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        
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
                          
                        <div class="form-group">
                            <label for="card-element">
                                @lang('iptv.creditordb')
                            </label>
                            <div id="card-element">
                              
                            </div>

                         
                            <div id="card-errors" role="alert"></div>
                        </div>
                        <style>
 
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
             -->
             <div id="stripe" > 

                <!-- Set up a container element for the button -->
             </div>
                <div id="paypal" style="display: none" class="tab-pane fade in active">

                    <form  id="paypalForm" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <div class="paypalResult"><!-- content will load here --></div>
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
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

              <!-- Modal -->
              <div class="modal fade" id="exampleModalpayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Payment Proccess</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body"> 
                       Please Try Again . If You Have Any Problem With Payment Proccess Please Try To Contact Us, And We Will Fix It Immediately
                       <br>  <br>
                       Email :<b> Contact.bobres@gmail.com</b><br>
                       Whatsapp :<b>  +33 7 53 13 32 55 </b>/<b>  +33 7 51 36 48 57</b><br>
                    </div> 
                  </div>
                </div>
              </div>
    


            <!-- jQuery ----------------------------------------------------------------------------------------------------------------------------->
            <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
            <!-- Bootstrap 4 -->
            
            
            <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
           
    

            <script src="{{asset('js/app.js')}}"></script>
            <script>
                 /*
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

               
                var stripe = Stripe('pk_live_SoinymNcNvPEKFlSOmyCWfZX000CNXtGYN');
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
                    */
            </script>


            <script>

/*
               

                paypal.Buttons({
                    createOrder: function(data, actions) {
                    // This function sets up the details of the transaction, including the amount and line item details.
                        var local = {!! json_encode(App::isLocale('en')) !!} 
                        var value = {!! json_encode($product->price_after) !!} 
                        if(local)  value = {!! json_encode($product->price_after) !!} 
                    return actions.order.create({
                        application_context: {
                            brand_name :  {!! json_encode($product->title) !!} ,
                            user_action : 'PAY_NOW',
                        },
                        purchase_units: [{
                            amount: {
                                value:  value ,
                            }
                        }],
                    });
                    },

                onApprove: function(data, actions) {
 

                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                    if(details.status == 'COMPLETED'){ 
                        var local = {!! json_encode(App::isLocale('en')) !!} 
                        var value = {!! json_encode($product->price_after) !!} 
                        if(local)  value = {!! json_encode($product->price_after) !!} 
                        $('#success').show(); 
                        $('#pay_con').hide();  
                        $('#paypal-button-container').remove();
                        return fetch('https://www.bobres.info/api/checkout/paypal/order/completed', {
                                method: 'post',
                                headers: {
                                    'content-type': 'application/json', 
                                    "X-Requested-With": "XMLHttpRequest", 
                                },
                                body: JSON.stringify({ 
                                    id : details.id,
                                    status: details.status,
                                    payerEmail: details.payer.email_address,
                                    country: details.payer.address.country_code,
                                    price: value
                                })
                            })
                            .then(status)
                            .then(function(response){
                                // redirect to the completed page if paid
                                $('#success').show(); 
                                $('#pay_con').hide();  
                                $('#paypal-button-container').remove();

                                gtag('event', 'conversion',{
                                    'send_to': 'AW-647729613/GZiICIesmNkBEM2j7rQC',
                                    'transaction_id': ''
                                });

                            })
                            .catch(function(error) {
                                $('#exampleModalpayment').modal('show');

                             
                            });
                    }else{
                        $('#exampleModalpayment').modal('show');
                    }
                });
                },

                onCancel: function (data) {
                    $('#exampleModalpayment').modal('show');
                      
                }



                }).render('#paypal-button-container');
                // This function displays Smart Payment Buttons on your web page.

                function status(res) {
                if (!res.ok) {
                    throw new Error(res.statusText);
                } 
                return res;
                } 

 */


            </script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/sjcl/1.0.0/sjcl.min.js"></script>
<script type="text/javascript">
 


 function getSignature(account,currency,desc,sum,secretkey){
        
        var hash_base = account+'{up}'+currency+'{up}'+desc+'{up}'+sum+'{up}'+secretkey;
        var bitArray = sjcl.hash.sha256.hash(hash_base);
        return sjcl.codec.hex.fromBits(bitArray); 
    
 }
$('#paynow').click(function(){
    

    if(typeof sjcl === 'undefined') {
        alert("Please wait for library to load...");
    } else {
  
        var email = $('#email').val();
        var currency = 'EUR';
        var desc = 'Product description';
        var sum = {!! json_encode($product->price_after) !!};
        var signature_ =  getSignature(email,currency,desc,sum,'23f107d5aefc756154963e943f541dd0');
     
      
        var payment = new UnitPay();
        payment.createWidget({
            publicKey: "368521-e4d9d",
            sum: sum ,
            account: email,
            domainName: "unitpay.money",
            signature: signature_,
            desc: desc,
            locale: "en",
            currency: currency
        });
    
        payment.success(function (params) {
                console.log(params);
                var email = $('#email').val(); 
                document.location.href = 'https://www.bobres.com/en/payments/paypal/completed/'+email+'/'+{!! json_encode($product->price_after) !!} +'/US/COMPLETED';

        });
        payment.error(function (message, params) {
            $('#exampleModalpayment').modal('show');
        });
        return false;
 
        } 
    });
</script>

</body>
</html>