<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
 
    <title>IPTV M3U | @lang('iptv.payment')</title>
 
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="icon" href="//cdn.shopify.com/s/files/1/0269/0056/2053/files/103847834_1337631189764615_5454143490239517351_n_f24f3220-9d8f-4e8b-96fe-b933c0f213b9_260x.png?v=1592339453" type="image/x-icon">
     
     
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg=="
          crossorigin="anonymous"> 
  

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

.button-container {
    margin: auto !important;
}
  /* Media query for desktop viewport */
  @media screen and (min-width: 400px) {
            #paypal-button-container {
               padding-top: 21px;
               
            } 
            
        }
        </style> 
        </style> 
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11123631465"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11123631465'); 
</script>
<!-- Google Tag Manager (noscript) -->

<!-- Global site tag (gtag.js) - Google Ads: 472459539 
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-472459539"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-472459539');
</script>


-->



 
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-564CX5N');</script>
<!-- End Google Tag Manager -->

 
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-564CX5N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
 


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J001CWVQY2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J001CWVQY2');
</script>

</head>

<body style="font-family: 'Open Sans', sans-serif;">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-564CX5N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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

 
 
 
<br><br>
<div class="container text-center" >
   
    <div class="row">
        <div class="col-sm-12" id="success" style="display: none">
        
            <div class="row text-center">
                <div class="col-sm-6 col-sm-offset-3">
                <h1 style="color:#0fad00">@lang('new.thinks_pay')</h1>
                <p>@lang('new.thinks_hd_1')</p>
                <p >@lang('new.thinks_hd_2') <b><span id="payemremail"></span></b> @lang('new.thinks_hd_3')</p> 
                <p >@lang('new.thinks_contact')</p>
 
               

              
                   
                    <div class="btn-group " role="group" aria-label="First group"> 
                        <button type="button" class="btn btn-primary" onclick="location.href = 'mailto:iptv21m3u@gmail.com';">iptv21m3u@gmail.com</button>
                
                        <button type="button" class="btn btn-success" onclick="location.href = 'https://api.whatsapp.com/send?phone=33745641235'">+33 745641235</button> 
 
                    </div> 
              

 
            
     
                </div>
                
            </div>
            <hr>
           <!-- <div class="cta-section bg-pink text-center" >
                <div class="container">
                  <div class="row text-center">
                    <div class="col-sm-12 " style="visibility: visible; animation-name: fadeInUp;">
                        <h1 >@lang('new.gift_hd')</h1>
                        <p>@lang('new.gift_desc')</p> 
                        <p >@lang('new.descount_code'):jjj <span style=" font-weight:  ld;    font-size: 19px;  color: black;"> IPTV20 </span></p>
                            
                            <a class="btn btn-lg btn-default btn-rounded btn-wide bg-amber " href="https://relaxinos.info"  >@lang('new.gift_btn_1')</a> 
                        
                    </div> 
                  </div>
                </div>
            </div>
        -->
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
              @lang('new.terms_d')  <a href="{{ url('/conditions') }}" target="_blank"  >terms and conditions</a>
            </div>
            <br> 
          
           <br>
            <div id="paypal-button-container">

                <!-- <button type="button" class="btn btn-primary    data-toggle="modal" data-target="#exampleModal"">Bank Transfer</button>
 -->
            </div>


            <div class="jumbotron jumbotron-flat">
                   
                 {{$txt}}
               
                <div class="paymentAmt">  ‎€ {{$price}}</div>
 

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
                       Email :<b> iptv21m3u@gmail.com</b><br>
                       Whatsapp :<b>  +33 745 641 235</b><br>
                    </div> 
                  </div>
 
                </div>
                <div class="modal-body"> 
                   Please Try Again . If You Have Any Problem With Payment Proccess Please Try To Contact Us, And We Will Fix It Immediately
                   <br>  <br>
                   Email :<b> iptv21m3u@gmail.com</b><br>
                   Whatsapp :<b> +33745641235 </b><br>
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


            <script src="https://www.paypal.com/sdk/js?client-id={{$client_id}}&currency=EUR"></script>
            <script> 

               

                paypal.Buttons({
                    createOrder: function(data, actions) {
                    // This function sets up the details of the transaction, including the amount and line item details.
                     var value = {!! json_encode($price) !!} 
 
                    return actions.order.create({
                        application_context: {
                            brand_name :  'Dev App',
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
                            var value = {!! json_encode($price) !!}
                            var txt = {!! json_encode($txt) !!}
                         
                        alert("Payment is under process do not refresh or close this window");
                        gtag('event', 'conversion', { 'send_to': 'AW-11123631465/FpQHCPWnw-EYEOnKlLgp', 'value': 49.0, 'currency': 'EUR', 'transaction_id': '' });
                                document.location.href = 'https://www.iptvm3u.fr/en/payments/paypal/completed/'+details.payer.email_address+'/'+value+'/'+details.payer.address.country_code+'/'+details.status+'/'+txt+'/0';
 
                         
                         
                            
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
 


            </script>
            
</body>
</html>