<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">


  <script src="https://www.paypal.com/tagmanager/pptm.js?id=www.re-cod.com&amp;t=xo&amp;v=5.0.270&amp;source=payments_sdk&amp;client_id=AQ2Exy1ssF5qRpK5wt0PYptuIsyjKnmS7NClVVBOwS2quqR2G5G4-5yRGUvOw2gYs2lqd3iLeSsknO6J&amp;vault=false" id="xo-pptm" async=""></script>
  <script src="https://www.paypal.com/sdk/js?client-id=AQ2Exy1ssF5qRpK5wt0PYptuIsyjKnmS7NClVVBOwS2quqR2G5G4-5yRGUvOw2gYs2lqd3iLeSsknO6J&amp;currency=EUR" data-uid-auto="uid_mqrfqkrdjrrjdriisejljfrdcclpzf"></script>
</head>
<body>
    <style>
        .payment-form{
	padding-bottom: 50px;
	font-family: 'Montserrat', sans-serif;
}

.payment-form.dark{
	background-color: #f6f6f6;
}

.payment-form .content{
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	background-color: white;
}

.payment-form .block-heading{
    padding-top: 50px;
    margin-bottom: 40px;
    text-align: center;
}

.payment-form .block-heading p{
	text-align: center;
	max-width: 420px;
	margin: auto;
	opacity:0.7;
}

.payment-form.dark .block-heading p{
	opacity:0.8;
}

.payment-form .block-heading h1,
.payment-form .block-heading h2,
.payment-form .block-heading h3 {
	margin-bottom:1.2rem;
	color: #3b99e0;
}

.payment-form form{
	border-top: 2px solid #5ea4f3;
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	background-color: #ffffff;
	padding: 0;
	max-width: 600px;
	margin: auto;
}

.payment-form .title{
	font-size: 1em;
	border-bottom: 1px solid rgba(0,0,0,0.1);
	margin-bottom: 0.8em;
	font-weight: 600;
	padding-bottom: 8px;
}

.payment-form .products{
	background-color: #f7fbff;
    padding: 25px;
}

.payment-form .products .item{
	margin-bottom:1em;
}

.payment-form .products .item-name{
	font-weight:600;
	font-size: 0.9em;
}

.payment-form .products .item-description{
	font-size:0.8em;
	opacity:0.6;
}

.payment-form .products .item p{
	margin-bottom:0.2em;
}

.payment-form .products .price{
	float: right;
	font-weight: 600;
	font-size: 0.9em;
}

.payment-form .products .total{
	border-top: 1px solid rgba(0, 0, 0, 0.1);
	margin-top: 10px;
	padding-top: 19px;
	font-weight: 600;
	line-height: 1;
}

.payment-form .card-details{
	padding: 25px 25px 15px;
}

.payment-form .card-details label{
	font-size: 12px;
	font-weight: 600;
	margin-bottom: 15px;
	color: #79818a;
	text-transform: uppercase;
}

.payment-form .card-details button{
	margin-top: 0.6em;
	padding:12px 0;
	font-weight: 600;
}

.payment-form .date-separator{
 	margin-left: 10px;
    margin-right: 10px;
    margin-top: 5px;
}

@media (min-width: 576px) {
	.payment-form .title {
		font-size: 1.2em; 
	}

	.payment-form .products {
		padding: 40px; 
  	}

	.payment-form .products .item-name {
		font-size: 1em; 
	}

	.payment-form .products .price {
    	font-size: 1em; 
	}

  	.payment-form .card-details {
    	padding: 40px 40px 30px; 
    }

  	.payment-form .card-details button {
    	margin-top: 2em; 
    } 
}
    </style>
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Bobres Payment</h2>
          <p>Important By purchasing our product you are accepting automatically our terms and conditions
        </p>
        </div>
        <form>
          <div class="products">
            <h3 class="title">Checkout</h3>
            <div class="item">
              <span class="price">€59.98</span>
              <p class="item-name">1 Year Subscription</p>
              <p class="item-description">1 Year Premium Service Full Access</p>
            </div>
            <div class="item">
              <span class="price">€1.3</span>
              <p class="item-name">Fees</p>
              <p class="item-description">Paypal Fees Of Transaction</p>
            </div>
            <div class="total">Total<span class="price">€101.32</span></div>
          </div>
          <div class="card-details"> 
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="card ">
                            <div class="card-header">
                                <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                    <!-- Credit card form tabs -->
                                    <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                        <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Paypal & Credit Card </a> </li>
                                        <li class="nav-item" style="display: none;"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                                        <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                                    </ul>
                                </div> <!-- End -->
                                <!-- Credit card form content -->
                                <div class="tab-content">
                                    <!-- credit card info-->
                                    <div id="credit-card" class="tab-pane fade show active pt-3">
                                        <div class="form-group "> <label for="Select Your Bank">
                                            <h6>Email Address</h6>
                                        </label> 
                                        <input type="email" class="form-control" id="ccmonth" placeholder="your email address"/>
                                    </div>

                                        <div id="paypal-button-container"></div>

                                            <div class="card-footer" style="display: none;"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                                       
                                    </div>
                                </div> <!-- End -->
                                <!-- Paypal info -->
                                <div id="paypal" class="tab-pane fade pt-3" style="display: none;">
                                    <h6 class="pb-2">Select your paypal account type</h6>
                                    <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                                    <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                                    <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                                </div> <!-- End -->
                                <!-- bank transfer info -->
                                <div id="net-banking" class="tab-pane fade pt-3">
                                    <h3>Our Bank Details</h3>
                                    <div class="form-group "> 
                                        <label for="Select Your Bank">
                                            <h6>Name</h6>
                                            <input type="text" class="form-control" id="ccmonth" value="Jawad Rairo" disabled/> 
                                        </label> 


                                        <label for="Select Your Bank">
                                            <h6>RIB</h6>
                                            <input type="number" class="form-control" id="ccmonth" value="387239861803137" disabled/> 
                                        </label> 
                                    
                                    </div>
                                  
                                    <p class="text-muted">Note: After completing the payment process, Please provide us the screenshot of the transaction to our email "contact.bobres@gmail.com", After that you will recieved automatically your order number and your activation details. </p>
                                </div> <!-- End -->
                                <!-- End -->
                        
                        </div>
                    </div>
                </div>
          </div>
        </form>
      </div>
    </section>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
        paypal.Buttons().render('#paypal-button-container');

</script>
</body>
</html>
