<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@lang('amos.conditions')...</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="{{ asset('iptvamos/ico/favicon.png') }}" rel="shortcut icon">

<!-- CSS FILES -->
      <link href="{{ asset('iptvamos/revolution/css/settings.css') }}" rel="stylesheet">
      <link href="{{ asset('iptvamos/css/flaticon.css') }}" rel="stylesheet">
      <link href="{{ asset('iptvamos/css/font-awesome.min.css') }}" rel="stylesheet">
      <link href="{{ asset('iptvamos/css/jquery.fancybox.css') }}" rel="stylesheet">
      <link href="{{ asset('iptvamos/css/odometer.min.css') }}" rel="stylesheet">
      <link href="{{ asset('iptvamos/css/owl.carousel.min.css') }}" rel="stylesheet">
      <link href="{{ asset('iptvamos/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('iptvamos/css/base.css') }}" rel="stylesheet">
<link href="{{ asset('iptvamos/css/style.css') }}" rel="stylesheet"> 


<!-- Global site tag (gtag.js) - Google Ads: 647729613 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-647729613"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-647729613');
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->

<!-- Google Tag Manager --> 
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Ads: 398007435 -->
 
</head>
<body>
<!-- Google Tag Manager (noscript) -->
 

<header class="header">
<div class="flotte">
        <a  href="/"><img id="image" src="{{ asset('iptvamos/images/logo-dark.png')}}"></a>
      </div>
  <nav class="navbar navbar-default navbar-fixed-top tranition">

  <div class="container" id="HOME">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#collapse-nav" style="
    background-color: black;"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="collapse-nav">
        <ul class="top-menu visible-xs"> 
				<li><a href="/contact">@lang('amos.our_whatsapp')</a></li>
				<li><a href="{{ url('/mentions') }}">@lang('amos.legal')</a></li> 
          		<li><a href="{{ url('/conditions') }}">@lang('amos.conditions')</a></li>
				<li><a href="/#faq">FAQs</a></li>
        </ul>
        <ul class="nav navbar-nav">
		  <li><a href="/">@lang('amos.home')</a></li> 
          <li><a href="/#PLAYLIST">@lang('amos.playlist')</a></li>
          <li><a href="/#FEATURES">@lang('amos.features')</a></li>
          <li><a href="/#PRICING">@lang('amos.pricing')</a></li> 
          <li><a href="/#reseller">@lang('amos.reseller')</a></li>
          <li><a href="/#MULTIPLEDEVICE">@lang('amos.multidevice')</a></li>
		  <li><a  href="/#CONTACT"> @lang('amos.contact') </a></li>
        </ul>
      </div>
    </div>
  </nav>
  </header>


<main style="padding-top:5%;">
<div id="wrapper"> 
    <div class="container">
		<div class="row">
			<div id="content-wrapper" class="col-xs-12">
                <section id="main">
                    <header class="page-header" id="header">
                      <h1>@lang('amos.conditions')</h1>
                    </header>
                </section>
                <section id="content" class="page-content page-cms page-cms-2">
                    <h4>@lang('amos.objet')</h4>
                        <p>@lang('amos.objCon')</p>
                    <h4>@lang('amos.prix')</h4>
                        <p>@lang('amos.prixDet')</p>
                    <h4>@lang('amos.livraison')</h4>
                        <p>@lang('amos.livrDet')</p>
                    <h4 style="margin: 20px 0 10px 0;">@lang('amos.paySec')</h4>
                        <p>@lang('amos.payDet')</p>
                        <p>@lang('amos.payp')</p>
                        <p>@lang('amos.refusCom')</p>
                        <p>@lang('amos.1refusCom')</p>
                        <p>@lang('amos.2refusCom')</p>
                        <p>@lang('amos.3refusCom')</p>
                    <h4 style="margin: 20px 0 10px 0;">@lang('amos.politiqueCon') & @lang('amos.remb')</h4>
                        <p>@lang('amos.politiqueConDet')</p>
                        @lang('amos.refundpolyc') 
                    <h4>@lang('amos.nosGarant')</h4>
                        <p style="margin-bottom: 10px;">@lang('amos.1gar')</p>
                        <p style="margin-bottom: 10px;">@lang('amos.2gar')</p>
                        <p style="margin-bottom: 10px;">@lang('amos.3gar')</p>
                        <p style="margin-bottom: 20px;">@lang('amos.4gar')</p>
                    <h4>@lang('amos.dispo')</h4>
                        <p>@lang('amos.dispoDet')</p>

                   @lang('amos.prb')
                </section>
            </div>
        </div>
	</div>
</div>
</main>
<style>
.header {
    background: none;
    height: auto !important;
    }

  #image {
    max-width: 40% !important;
    vertical-align: baseline !important;
  }

  .flotte {
    float:left !important;
    margin-left: 5% !important;
    margin-top: 2.5% !important;
  }

  li a {
    color: black !important;
  }
</style>

<br>

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


<footer class="footer transition">
  <div class="footer-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
		<ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li> 
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


<script type='text/javascript' src=''></script>
			 <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
			 <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
			 <script type='text/javascript'></script> 
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