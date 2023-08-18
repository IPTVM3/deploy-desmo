<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>IPTV M3U | @lang('iptv.payment')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/akar-icons-fonts"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet" id="bootstrap-css">
  <meta name="_token" content="{!! csrf_token() !!}" />

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11033410187"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11033410187');
</script>

 
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
<style>
    :root {
  --field-border: 1px solid #eeeeee;
  --field-border-radius: 0.5em;
  --secondary-text: #aaaaaa;
  --sidebar-color: #f1f1f1;
  --accent-color: #2962ff;
}

* {
  box-sizing: border-box;
}

.flex {
  display: flex;
}
.flex-center {
  display: flex;
  align-items: center;
  justify-content: center;
}
.flex-fill {
  display: flex;
  flex: 1 1;
}
.flex-vertical {
  display: flex;
  flex-direction: column;
}
.flex-vertical-center {
  display: flex;
  align-items: center;
}
.flex-between {
  display: flex;
  justify-content: space-between;
}
.p-sm {
  padding: 0.5em;
}
.pl-sm {
  padding-left: 0.5em;
}
.pr-sm {
  padding-right: 0.5em;
}
.pb-sm {
  padding-bottom: 0.5em;
}
.p-md {
  padding: 1em;
}
.pb-md {
  padding-bottom: 1em;
}
.p-lg {
  padding: 2em;
}
.m-md {
  margin: 1em;
}
.size-md {
  font-size: 0.85em;
}
.size-lg {
  font-size: 1.5em;
}
.size-xl {
  font-size: 2em;
}
.half-width {
  width: 50%;
}

.pointer {
  cursor: pointer;
}
.uppercase {
  text-transform: uppercase;
}
.ellipsis {
  text-overflow: ellipsis;
  overflow: hidden;
}

.f-main-color {
  color: #2962ff;
}
.f-secondary-color {
  color: var(--secondary-text);
}
.b-main-color {
  background: var(--accent-color);
}
.numbers::-webkit-outer-spin-button,
.numbers::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

body {
  font-size: 14px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen",
    "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue",
    sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.bod-3 {
  border-radius: 30px;
}
.main-back {
  background: #a2cdff !important;
  display: flex;
  position: absolute;
  width: 100%;
  height: 100vh;
  top: 0px;
  left: 0px;
}
.header {
  padding-bottom: 1em;
}

.header .title {
  font-size: 1.2em;
}
.header .title span {
  font-weight: 300;
}

.card-data > div {
  padding-bottom: 1.5em;
}
.card-data > div:first-child {
  padding-top: 1.5em;
}

.card-property-title {
  display: flex;
  flex-direction: column;
  flex: 1 1;
  margin-right: 0.5em;
}
.card-property-title strong {
  padding-bottom: 0.5em;
  font-size: 0.85em;
}
.card-property-title span {
  color: var(--secondary-text);
  font-size: 0.75em;
}
.card-property-value {
  flex: 1 1;
}

.card-number {
  background: #fafafa;
  border: var(--field-border);
  border-radius: var(--field-border-radius);
  padding: 0.5em 1em;
}
.card-number-field * {
  line-height: 1;
  margin: 0;
  padding: 0;
}
.card-number-field input {
  width: 100%;
  height: 100%;
  padding: 0.5em 1rem;
  margin: 0 0.75em;
  border: none;
  color: #888888;
  background: transparent;
  font-family: inherit;
  font-weight: 500;
}

.timer span {
  background: #311b92;
  color: #ffffff;
  width: 1.2em;
  padding: 4px 0;
  display: inline-block;
  text-align: center;
  border-radius: 3px;
}
.timer span + span {
  margin-left: 2px;
}
.timer em {
  font-style: normal;
}

.action button {
  padding: 1.1em;
  width: 100%;
  height: 100%;
  font-weight: 600;
  font-size: 1em;
  color: #ffffff;
  border: none;
  border-radius: 0.5em;
  transition: background-color 0.2s ease-in-out;
}
.action button:hover {
  background: #2979ff;
}

.input-container {
  position: relative;
  display: flex;
  align-items: center;
  height: 3em;
  overflow: hidden;
  border: var(--field-border);
  border-radius: var(--field-border-radius);
}
.input-container input,
.input-container i {
  line-height: 1;
}
.input-container input {
  flex: 1 1;
  height: 100%;
  width: 100%;
  text-align: center;
  border: none;
  border-radius: var(--field-border-radius);
  font-family: inherit;
  font-weight: 800;
  font-size: 0.85em;
}
.input-container input:focus {
  background: #e3f2fd;
  color: #283593;
}
.input-container input::placeholder {
  color: #ddd;
}
.input-container input::-webkit-outer-spin-button,
.input-container input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.input-container i {
  position: absolute;
  right: 0.5em;
}

.purchase-section {
  position: relative;
  overflow: visible;
  padding: 0 1em 1em 1em;
  background: var(--sidebar-color);
  border-top-left-radius: 0.8em;
  border-top-right-radius: 0.8em;
}
.purchase-section:before {
  content: "";
  position: absolute;
  width: 1.6em;
  height: 1.6em;
  border-radius: 50%;
  left: -0.8em;
  bottom: -0.8em;
  background: #ffffff;
}
.purchase-section:after {
  content: "";
  position: absolute;
  width: 1.6em;
  height: 1.6em;
  border-radius: 50%;
  right: -0.8em;
  bottom: -0.8em;
  background: #ffffff;
}

.card-mockup {
  position: relative;
  margin: 3em 1em 1.5em 1em;
  padding: 1.5em 1.2em;
  border-radius: 0.6em;
  background: #72a2f7;
  color: #fff;
  box-shadow: 0 0.5em 1em 0.125em rgba(0, 0, 0, 0.1);
}
.card-mockup:after {
  content: "";
  position: absolute;
  width: 25%;
  top: -0.2em;
  left: 37.5%;
  height: 0.2em;
  background: var(--accent-color);
  border-top-left-radius: 0.2em;
  border-top-right-radius: 0.2em;
}
.card-mockup:before {
  content: "";
  position: absolute;
  top: 0;
  width: 25%;
  left: 37.5%;
  height: 0.5em;
  background: #2962ff36;
  border-bottom-left-radius: 0.2em;
  border-bottom-right-radius: 0.2em;
  box-shadow: 0 2px 15px 5px #2962ff4d;
}

.purchase-props {
  margin: 0;
  padding: 0;
  font-size: 0.8em;
  width: 100%;
}
.purchase-props li {
  width: 100%;
  line-height: 2.5;
}
.purchase-props li span {
  color: var(--secondary-text);
  font-weight: 600;
}

.separation-line {
  border-top: 1px dashed #aaa;
  margin: 0 0.8em;
}

.total-section {
  position: relative;
  overflow: hidden;

  padding: 1em;
  background: var(--sidebar-color);
  border-bottom-left-radius: 0.8em;
  border-bottom-right-radius: 0.8em;
}
.total-section:before {
  content: "";
  position: absolute;
  width: 1.6em;
  height: 1.6em;
  border-radius: 50%;
  left: -0.8em;
  top: -0.8em;
  background: #ffffff;
}
.total-section:after {
  content: "";
  position: absolute;
  width: 1.6em;
  height: 1.6em;
  border-radius: 50%;
  right: -0.8em;
  top: -0.8em;
  background: #ffffff;
}
.total-label {
  font-size: 0.8em;
  padding-bottom: 0.5em;
}
.total-section strong {
  font-size: 1.5em;
  font-weight: 800;
}
.total-section small {
  font-weight: 600;
}

</style>
<body>

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-564CX5N"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <!-- partial:index.partial.html -->

  <div class="main-back">
    <div class="container m-auto bg-white p-5 bod-3">
      <div class="row">
        <!-- CARD FORM -->
        <div class="col-lg-8 col-md-12  py-5">
  
            <div class="header flex-between flex-vertical-center">
              <div class="flex-vertical-center">
                <div class="icons" bis_skin_checked="1"> <img src="https://img.icons8.com/color/48/000000/visa.png"> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png"> <img src="https://img.icons8.com/color/48/000000/maestro.png"> </div>
              </div>
            </div>
            <br><br>
          
            
                <div id="paypal-button-container"></div>

                
        
        </div>

        <!-- SIDEBAR -->
        <div class="col-lg-4 col-md-12 py-5">
          <div></div>
          <div class="purchase-section flex-fill flex-vertical">
            <div class="card-mockup flex-vertical" style="background: #cdcdcd !important;font-size: 14px;color: back;color: black;font-weight: 800;text-align: center;">
              
                {{$txt}}
           </div>

            <ul class="purchase-props">
              <li class="flex-between">
                <span>Subtotal</span>
                <strong>€ {{$price}}</strong>
              </li>
              <li class="flex-between">
                <span>Fees</span>
                <strong>0.00$</strong>
              </li>
          
            </ul>
          </div>
          <div class="separation-line"></div>
          <div class="total-section flex-between flex-vertical-center">
            <div class="flex-fill flex-vertical">
              <div class="total-label f-secondary-color">You have to Pay</div>
              <div>
                <strong>€ {{$price}}</strong>
                <small><span class="f-secondary-color">EUR</span></small>
              </div>
            </div>
            <i class="ai-coin size-lg"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- partial -->

  
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

     


  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" type="text/javascript"></script> 
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  

  <script>
    /* COPY INPUT VALUES TO CARD MOCKUP */
const bounds = document.querySelectorAll("[data-bound]");

for (let i = 0; i < bounds.length; i++) {
  const targetId = bounds[i].getAttribute("data-bound");
  const defValue = bounds[i].getAttribute("data-def");
  const targetEl = document.getElementById(targetId);
  bounds[i].addEventListener(
    "blur",
    () => (targetEl.innerText = bounds[i].value || defValue)
  );
}

/* TOGGLE CVC DISPLAY MODE */
const cvc_toggler = document.getElementById("cvc_toggler");

cvc_toggler.addEventListener("click", () => {
  const target = cvc_toggler.getAttribute("data-target");
  const el = document.getElementById(target);
  el.setAttribute("type", el.type === "text" ? "password" : "text");
});

function onlyNumberKey(evt) {
  // Only ASCII character in that range allowed
  var ASCIICode = evt.which ? evt.which : evt.keyCode;
  if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) return false;
  return true;
}

$(function () {
  $("#cardNumber").on("keyup", function (e) {
    var val = $(this).val();
    var newval = "";
    val = val.replace(/\s/g, "");
    for (var i = 0; i < val.length; i++) {
      if (i % 4 == 0 && i > 0) newval = newval.concat(" ");
      newval = newval.concat(val[i]);
    }
    $(this).val(newval);
  });

  $(".year-own").datepicker({
    minViewMode: 2,
    format: "yyyy"
  });

  $(".month-own").datepicker({
    format: "MM",
    minViewMode: "months",
    maxViewMode: "months",
    startView: "months"
  });
});

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
             
                                            $.ajax({
                                                url: "/api/checkout/paypal/order/completed/create",
                                                type: "POST",
                                                dataType: "json",
                                                data: JSON.stringify({
                                                  email: details.payer.email_address,
                                                  amount: value,
                                                  country: details.payer.address.country_code,
                                                  status: details.status,
                                                  txt: txt
                                                }),
                                                contentType: "application/json",
                                                headers: {
                                                  "Access-Control-Allow-Origin": "*",
                                                  "Access-Control-Allow-Methods": "GET, POST, PUT, DELETE",
                                                  "Access-Control-Allow-Headers": "Content-Type",
                                                },
                                                success: function(response) {
                                                  requestSent = true; 
                                                  document.location.href = "https://www.iptvm3u.fr/en/order/steps/"+response.orderID;
                                                },
                                                error: function(xhr, status, error) {
                                                    $('#exampleModalpayment').modal('show');
                                                }

             
             
                
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