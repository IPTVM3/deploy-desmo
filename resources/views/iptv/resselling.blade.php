<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> {{config('app.name')}}  | @lang('amos.reseller')</title>
	<meta name="author" content="IPTVAMOS">
	<meta name="description" content="IPTVamos "> 

	
	
	<link href="{{ asset('iptvamos/ico/favicon.png') }}" rel="shortcut icon">

	<!-- CSS FILES -->
	<link href="{{ asset('iptvamos/revolution/css/settings.css') }}" rel="stylesheet">
	<link href="{{ asset('iptvamos/css/flaticon.css') }}" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">

	<link href="{{ asset('iptvamos/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('iptvamos/css/jquery.fancybox.css') }}" rel="stylesheet">
	<link href="{{ asset('iptvamos/css/odometer.min.css') }}" rel="stylesheet">
	<link href="{{ asset('iptvamos/css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('iptvamos/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('iptvamos/css/base.css') }}" rel="stylesheet">
	<link href="{{ asset('iptvamos/css/style.css') }}" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <!-- Facebook Pixel Code -->
      <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2511487865548827');
        fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=2511487865548827&ev=PageView&noscript=1"
      /></noscript>
      <!-- End Facebook Pixel Code -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-JY98F9S9HS"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JY98F9S9HS');
        </script>

        <!-- Global site tag (gtag.js) - Google Ads: 647729613 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-647729613"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-647729613');
        </script>

        
</head>
<body>
<div class="preloader">
  <svg class="spinner" id="pageloader_anime" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
    <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
  </svg>
</div>
 
<!-- end search-box -->
<header class="int-header">
  <nav class="navbar navbar-default navbar-fixed-top transition">
    <div class="top-bar">
      <div class="container">
        <div class="row"> <div class="col-md-6 col-sm-6 hidden-xs">
            <ul class="top-menu">
				<li><a href="/contact">@lang('amos.our_whatsapp')</a></li>
				<li><a href="{{ url('/mentions') }}">@lang('amos.legal')</a></li> 
          		<li><a href="{{ url('/conditions') }}">@lang('amos.conditions')</a></li>
				<li><a href="#faq">FAQs</a></li>
            </ul>
            <!-- end top-menu --> 
          </div>
          <!-- end col-6 -->
          <div class="col-md-6 col-sm-6 col-xs-12">
           <span class="social-text">contact.lordlyiptv@gmail.com</span> 
            <!-- end social-text --> 
        
            <!-- end social-media -->
            <div class="language">  <span>@lang('amos.capital')</span>
              <!-- end dropdown --> 
            </div>
            <!-- end language --> 
          </div>
          <!-- end col-6 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end top-bar -->
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#collapse-nav"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="/home"> 
        <img src="{{ asset('iptvamos/images/logo-light.png')}}" alt="Image" class="logo-light"> <img src="{{ asset('iptvamos/images/logo-dark.png')}}" alt="Image" class="logo-dark"><span class="since">08<br>
        <small>years</small></span> </a> 
        </div>
      <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="collapse-nav">
        <ul class="top-menu visible-xs">
				<li><a href="/contact">@lang('amos.our_whatsapp')</a></li>
				<li><a href="{{ url('/mentions') }}">@lang('amos.legal')</a></li> 
          		<li><a href="{{ url('/conditions') }}">@lang('amos.conditions')</a></li>
				<li><a href="#faq">FAQs</a></li>
            </ul>
            <!-- end top-menu --> 
        <ul class="nav navbar-nav">
		  <li><a href="/">@lang('amos.home')</a></li> 
          <li><a href="/#PLAYLIST">@lang('amos.playlist')</a></li>
          <li><a href="/#FEATURES">@lang('amos.features')</a></li>
          <li><a href="/#PRICING">@lang('amos.pricing')</a></li> 
          <li><a href="/#reseller">@lang('amos.reseller')</a></li>
          <li><a href="/#MULTIPLEDEVICE">@lang('amos.multidevice')</a></li>
		  <li><a  href="/#CONTACT"> @lang('amos.contact') </a></li>
           
        </ul> 
        <!-- end search --> 
      </div>
      <!-- end navbar-collapse --> 
    </div>
    <!-- end container --> 
  </nav>
  <!-- end navbar-default -->
  <div class="table">
    <div class="table-cell">
      <div class="container">
        <h3>@lang('amos.reseller')<span>.</span></h3>
      </div>
      <!-- end container --> 
    </div>
    <!-- end table-cell --> 
  </div>
  <!-- end table --> 
</header>
<!-- end header -->
<section class="breadcrumb-bar">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="breadcrumb">
          <li><a href="#">@lang('amos.home')</a></li> 
          <li class="active">@lang('amos.reseller')</li>
        </ul>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end breadcrumb-bar -->

<section class="services">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
        <h6>@lang('amos.reseller_header')</h6>
        <h2>@lang('amos.reseller_headerdescription')</h2>
			</div>
			<!-- end col-12 -->
			<div class="col-md-4 col-sm-6 col-xs-12"> <i class="flaticon-001-wallet-1" aria-hidden="true"></i>
            <h4>Reseller Panel</h4>
            <p>On reseller panel you can have your own IPTV clients, with all options, 
                fully guaranteed privacy in your business.
</p>
            </div>
          <!-- end col-4 -->
          <div class="col-md-4 col-sm-6 col-xs-12"> <i class="flaticon-010-pie-chart" aria-hidden="true"></i>
            <h4>Sub-Reseller Service</h4>
            <p>After making the payment,your credits will be automatically deducted from your balance. 
                You can offer your sub-resellers different prices.</p>
          </div>
          <!-- end col-4 -->
          <div class="col-md-4 col-sm-6 col-xs-12"> <i class="flaticon-019-credit-card-1" aria-hidden="true"></i>
            <h4>Privacy & Continuity </h4>
            <p>WITH reseller panel your business will be safe with fully guaranteed.
            your panel will not expire and will not be lost if you do not use it for a long time.
            </p>
          </div>
          <!-- end col-4 -->
          <div class="col-md-4 col-sm-6 col-xs-12"><i class="flaticon-022-pound-sterling-1" aria-hidden="true"></i>
            <h4>@lang('amos.featured_2_header')</h4>
				<p>@lang('amos.featured_2_header_desc')</p>
          </div>
          <!-- end col-4 -->
          <div class="col-md-4 col-sm-6 col-xs-12"> <i class="flaticon-038-money-3" aria-hidden="true"></i>
          <h4>Full Options</h4>
		  <p> Customize/categories your channels and 
              you can easily edit the user line each time the customer requests you 
              to delete or add categories.</p>
          </div>
          <!-- end col-4 -->
          <div class="col-md-4 col-sm-6 col-xs-12"> <i class="flaticon-092-atm" aria-hidden="true"></i>
          <h4>Demo Reseller IPTV Panel</h4>
		  <p> To test the proprietary iptvamos panel much better and select and buy with a much better mindset.
               You can test the it with by contacting us 

</hp2>
          </div>
          <!-- end col-6 -->
          <div class="col-md-4 col-sm-6 col-xs-12"><i class="flaticon-095-money-bag-1" aria-hidden="true"></i>
          <h4>@lang('amos.featured_5_header')</h4>
				<p>@lang('amos.featured_5_header_desc')</p>
          </div>
          <!-- end col-4 -->
          <div class="col-md-4 col-sm-6 col-xs-12"> <i class="flaticon-090-credit-card" aria-hidden="true"></i>
          <h4>@lang('amos.featured_4_header')</h4>
		  <p>@lang('amos.featured_4_header_desc')</p>
          </div>
          <!-- end col-4 -->
          <div class="col-md-4 col-sm-6 col-xs-12"> <i class="flaticon-020-smartphone" aria-hidden="true"></i>
          <h4>@lang('amos.featured_1_header')</h4>
				<p>@lang('amos.featured_1_header_desc')</p>
          </div>
          <!-- end col-6 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
 

 



<section class="pricing" id="MULTIPLEDEVICE">
	<div class="container">
		<div class="row">
		<div class="col-xs-12 text-center">
        <h6>@lang('amos.reseling_header')</h6>
        <h2>@lang('amos.reseling_desc')  </h2>

	

      </div>
		<!-- end col-12 -->


 

			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="price-box">
				<div class="price-header">
					<h3>{{ $product->band }} @lang('amos.credits')</h3>
					<h5>@lang('amos.prop_3')</h5>
				</div>
				<!-- end price-header --> 
				<span class="price"><span>€</span>{{ $product->price_after }} <small>.99</small></span> 
				
					<i class="glyph-icon flaticon-072-bank-1"></i>
				<ul>
					<li>24 @lang('amos.free_test') = 0 credit</li> 
					<li>1 @lang('amos.months') = 0.1 credit</li> 
					<li>3 @lang('amos.months')  = 0.3 credit</li> 
					<li>6 @lang('amos.months')  = 0.5 credit</li> 
					<li>12 @lang('amos.months')  = 1 credit</li> 
					<li>24 @lang('amos.months')  = 1.8 credit</li> 
				</ul>
				
				<a href="/contact" target="_blank"  >@lang('amos.PreOrder')</a>
				</div>
				<!-- end price-box --> 
      		</div> 

										
 
    
      <!-- end col-4 --> 
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>



<section class="left-side-content transition">
 <div class="side-image"> <img src="images/side-image3.jpg" alt="Image" class="bg-image"> 
   </div>
    <!-- end side-image -->
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h6>@lang('amos.header2_btn')</h6>
        <h2>@lang('amos.iptvdemopanel')</h2>
        <p>@lang('amos.iptvdemopanel_desc') <br><br>
        <b>@lang('amos.req1')</b>  <br>
        <b>@lang('amos.req2')</b>  
    </p>
<br>
        <p> username: myiptvpanel
            <br>
            password: 123456789
</p>
        <a target="_blank"  href="https://mytvpanel.net/index">@lang('amos.iptvdemopanel_btn')</a> </div>
    
   
   
      <!-- end col-6 -->
      <div class="col-md-6 col-md-offset-2">
        <div class="content-image"><img src="https://iptvtree.com/img/bg-img/demopanel.png" alt="Image"> </div>
        <!-- end content-image --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>






<section class="support-bar transition">
  <div class="container">
    <div class="row">
      <div class="col-xs-12"> <a href="#">@lang('amos.get_intouch')  </a> <img src="{{ asset('iptvamos/images/icon-support.png') }}" alt="Image">
        <h4>@lang('amos.anyquestion')</h4>
        <h6>@lang('amos.anyquestion_desc') </h6>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>



<!-- end featured-projects -->
<!-- end support-bar -->
<footer class="footer transition">
  <div class="footer-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
		<ul class="social-media">
            <li><a href="#">contact.lordlyiptv@gmail.com</li> 
          </ul>
          <!-- end social-media --> 
        </div>
        <!-- end col-6 -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <address>
          <i class="fa fa-phone" aria-hidden="true"></i> @lang('amos.get_intouch') <small>@lang('amos.contact_any_question')
          </address>
        </div>
        <!-- end col-3 -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <address>
          <i class="fa fa-map-marker" aria-hidden="true"></i>2 Rue victor hugo
		   <small>Paris, FRANCE</small>
          </address>
        </div>
        <!-- end col-3 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </div>
  <!-- end footer-bar -->
  <div class="container" id="CONTACT">
    <div class="row">
      <div class="col-md-7 col-sm-12 col-xs-12">
        <h4 class="footer-title">@lang('amos.conatct_newsletter')</h4>
		<form class="newsletter" role="form" method="POST" action="{{ route('maillist.store') }}"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
        
          <input type="text" placeholder="@lang('iptv.entre_em')..." name="email">
          <button type="submit">@lang('amos.submit')</button>
          <small>@lang('amos.submit_desc')</small>
        </form>
        <h4 class="footer-title">{{config('app.name')}} </h4>
        <p>@lang('amos.iptvamos_desc')</p>
      </div>
      <!-- end col-4 -->
      <div class="col-md-3 col-sm-12 col-xs-12">
        <h4 class="footer-title">@lang('amos.promo_video')</h4>
        <div class="video"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Black_Screen.jpg" alt="Image"> <a href="https://www.youtube.com/embed/CvkyKS5Jjyo?controls=0" class="play-btn fancybox" data-type="iframe" ><i class="fa fa-play" aria-hidden="true"></i></a> </div>
        <!-- end video --> </div>
     
      <!-- end col-4 --> 
    </div>
    <!-- end row --> 
  </div>

  <!-- end container -->
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">Copyright © 2013 - @php echo date('Y'); @endphp </div>
        <!-- end col-6 -->
        <div class="col-md-6 col-sm-6 col-xs-12 text-right">Site Created with <span>♥</span> by <a href="#">Recod</a></div>
        <!-- end col-6 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </div>
  <!-- end sub-footer --> 
</footer>

<!-- end footer --> 
<a href="#" class="scrollup"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a> 

<!-- JS FILES --> 
<script src="{{ asset('iptvamos/js/jquery.min.js') }}"></script> 
<script type="text/javascript">
$(window).load(function() {
	$(".preloader").fadeOut("fast");
})
</script> 
<script src="{{ asset('iptvamos/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('iptvamos/js/jPushMenu.js') }}"></script> 
<script src="{{ asset('iptvamos/js/odometer.min.js') }}"></script> 
<script src="{{ asset('iptvamos/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('iptvamos/js/jquery.fancybox.js') }}"></script> 
<script src="{{ asset('iptvamos/js/wow.min.js') }}"></script> 
<script src="{{ asset('iptvamos/js/masonry.pkgd.min.js') }}"></script> 
<script src="{{ asset('iptvamos/js/scripts.js') }}"></script> 

<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="{{ asset('iptvamos/revolution/js/jquery.themepunch.tools.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('iptvamos/revolution/js/jquery.themepunch.revolution.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('iptvamos/revolution/js/revolution.addon.slicey.min.js?ver=1.0.0') }}"></script> 
<script type="text/javascript" src="{{ asset('iptvamos/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('iptvamos/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('iptvamos/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('iptvamos/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('iptvamos/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('iptvamos/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('iptvamos/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('iptvamos/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>  
</body>
</html>