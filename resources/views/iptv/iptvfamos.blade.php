<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> {{config('app.name')}}  | @lang('amos.title')</title>
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

	<!-- Global site tag (gtag.js) - Google Analytics -->
 

	<!-- Google Tag Manager -->
	
	<!-- Global site tag (gtag.js) - Google Ads: 398007435 -->
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
<!-- Google Tag Manager (noscript) -->

 
<div class="preloader"> <svg class="spinner" id="pageloader_anime" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
  <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
  </svg> </div>
 
<header class="header">
  <nav class="navbar navbar-default navbar-fixed-top transition">
    <div class="top-bar">
      <div class="container">
        <div class="row"> 
		<div class="col-md-6 col-sm-6 hidden-xs">
            <ul class="top-menu"> 
				<li><a href="/contact">@lang('amos.our_whatsapp')</a></li>
				<li><a href="{{ url('/mentions') }}">@lang('amos.legal')</a></li> 
          		<li><a href="{{ url('/conditions') }}">@lang('amos.conditions')</a></li> 
				<li><a href="#faq">FAQs</a></li>  
            </ul>
            <!-- end top-menu --> 
          </div>

		  <div class="col-md-6 col-sm-6 col-xs-6">
           <span class="social-text">@lang('amos.connect')</span> 
            <!-- end social-text --> 
            <ul class="social-media">
              <li><a href="#"><i style="color:blue;" class="fa fa-facebook" aria-hidden="true"></i></a></li> 
              <li><a href="#"><i style="color:red;" class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
            <!-- end social-media --> 
            <div class="language"> <span>@lang('amos.capital')</span>
            <!--<div class="dropdown"> 
			<a href="#" data-toggle="dropdown" class="dropdown-toggle">
            {{App::getLocale()}}  
            <i class="fa fa-sort-desc" aria-hidden="true"></i>
           </a>
            <ul class="dropdown-menu">
			@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
			<li><a  style="color:black;" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                       hreflang="{{ $localeCode }}" class="dropdown-item ">
                        {{ $properties['native'] }}
                    </a> </li>
			  @endforeach
            </ul>
          </div>
          end dropdown -->
            </div>
      
            </div>
      
            </div>
      
      
      
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end top-bar -->
    <div class="container" id="HOME">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#collapse-nav"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="/home"><img src="{{ asset('iptv_update/images/logo_light_up.png')}}" alt="Image" class="logo-light"> <img src="{{ asset('iptv_update/images/logo_dark_up.png')}}" alt="Image" class="logo-dark"><span class="since">08<br>
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
		  <li><a href="#rev_slider_24_1_wrapper">@lang('amos.home')</a></li> 
          <li><a href="#PLAYLIST">@lang('amos.playlist')</a></li>
          <li><a href="#FEATURES">@lang('amos.features')</a></li>
          <li><a href="#PRICING">@lang('amos.pricing')</a></li> 
          <li><a href="#reseller">@lang('amos.reseller')</a></li>
          <li><a href="#MULTIPLEDEVICE">@lang('amos.multidevice')</a></li>
		  <li><a  href="#CONTACT"> @lang('amos.contact') </a></li>
        </ul>
 
        <!-- end navbar-nav -->         
      </div>
      <!-- end navbar-collapse --> 
    </div>
    <!-- end container --> 
  </nav>
  <!-- end navbar-default -->
  <div id="rev_slider_24_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="website-intro" data-source="gallery" >
    <div id="rev_slider_24_1" class="rev_slider fullscreenbanner tiny_bullet_slider" data-version="5.4.1">
      <ul>
        <li data-index="rs-67" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="600"  data-thumb="../../assets/images/woman2-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent"> <img src="https://modvive.com/wp-content/uploads/2020/04/Top-Canadian-Netflix-Movies-to-Watch-With-the-Family.jpeg"  alt="Image"  data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-9" 
			data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']" 
			data-width="['250','250','150','150']"
			data-height="['150','150','100','100']"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 		
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"		
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-10" 
			data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']" 
			data-width="['150','150','100','100']"
			data-height="['200','150','150','150']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-29" 
			data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']" 
			data-width="['250','250','150','150']"
			data-height="['150','150','100','100']"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-12" 
			data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']" 
			data-width="['250','250','100','100']"
			data-height="150"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-34" 
			data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']" 
			data-width="['300','300','150','150']"
			data-height="['200','200','150','150']"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-11" 
			data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']" 
			data-width="150"
			data-height="['250','150','50','50']"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-27" 
			data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']" 
			data-width="['250','250','150','150']"
			data-height="['300','300','150','150']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-28" 
			data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']" 
			data-width="['300','300','150','150']"
			data-height="['250','250','100','100']"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-30" 
			data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']" 
			data-width="['300','300','150','200']"
			data-height="['250','250','150','50']"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-31" 
			data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']" 
			data-width="['300','300','150','150']"
			data-height="['250','250','100','100']"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-32" 
			data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']" 
			data-width="['300','300','150','150']"
			data-height="['200','200','150','150']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-33" 
			data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']" 
			data-width="['450','400','250','250']"
			data-height="['100','100','50','50']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-67-layer-35" 
			data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']" 
			data-width="['350','400','250','250']"
			data-height="['100','100','50','50']"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 	
			data-responsive_offset="on" 
			data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper " 
			id="slide-67-layer-1" 
			data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
			data-width="full"
			data-height="full"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-basealign="slide" 
			data-responsive_offset="off" 
			data-responsive="off"
			data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption main-title   tp-resizeme" 
			id="slide-67-layer-2" 
			data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']" 
			data-fontsize="['90','90','70','50']"
			data-lineheight="['90','90','70','50']"
			data-width="['none','none','481','360']"
			data-height="none"
			data-whitespace="['nowrap','nowrap','normal','normal']"
		 	data-type="text" 
			data-responsive_offset="on" 
			data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 19; white-space: nowrap; font-size: 90px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: -5px;">@lang('amos.header1') </div>
          <div class="tp-caption   tp-resizeme" 
			id="slide-67-layer-3" 
			data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['90','90','60','30']" 
			data-fontsize="['25','25','25','20']"
			data-lineheight="['35','35','35','30']"
			data-width="['480','480','480','360']"
			data-height="none"
			data-whitespace="normal"
			data-type="text" 
			data-responsive_offset="on" 
			data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">@lang('amos.header1_desc') </div>
          <a class="tp-caption rev-btn  tp-resizeme" 
		  href="#PRICING" 			 id="slide-67-layer-7" 
			data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']" 
			data-width="250"
			data-height="none"
			data-whitespace="nowrap"
			data-type="button" 
			data-actions=''
			data-responsive_offset="on" 
			data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[50,50,50,50]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[50,50,50,50]"
			style="z-index: 21; white-space: nowrap; cursor:pointer;text-decoration: none;">@lang('amos.header1_btn')</a> </li>
        <li data-index="rs-66" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="600"  data-thumb="../../assets/images/deskbg-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent"> <img src="data:image/jpeg;base64,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"  alt="Image"  data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-9" 
			data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']" 
			data-width="['250','250','150','150']"
			data-height="['150','150','100','100']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-10" 
			data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']" 
			data-width="['150','150','100','100']"
			data-height="['200','150','150','150']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-29" 
			data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']" 
			data-width="['250','250','150','150']"
			data-height="['150','150','100','100']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-12" 
			data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']" 
			data-width="['250','250','100','100']"
			data-height="150"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-34" 
			data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']" 
			data-width="['300','300','150','150']"
			data-height="['200','200','150','150']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-11" 
			data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']" 
			data-width="150"
			data-height="['250','150','50','50']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-27" 
			data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']" 
			data-width="['250','250','150','150']"
			data-height="['300','300','150','150']"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-28" 
			data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']" 
			data-width="['300','300','150','150']"
			data-height="['250','250','100','100']"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"	
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-30" 
			data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']" 
			data-width="['300','300','150','200']"
			data-height="['250','250','150','50']"
			data-whitespace="nowrap"
		 	data-type="shape" 		
		 	data-slicey_offset="300" 	
		 	data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'			
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-31" 
			data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']" 
			data-width="['300','300','150','150']"
			data-height="['250','250','100','100']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-32" 	
			data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']" 
			data-width="['300','300','150','150']"
			data-height="['200','200','150','150']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-33" 
			data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']" 
			data-width="['450','400','250','250']"
			data-height="['100','100','50','50']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-66-layer-35" 
			data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']" 
			data-width="['350','400','250','250']"
			data-height="['100','100','50','50']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper " 
			id="slide-66-layer-1" 
			data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
			data-width="full"
			data-height="full"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-basealign="slide" 
			data-responsive_offset="off" 
			data-responsive="off"
			data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption main-title   tp-resizeme" 
			id="slide-66-layer-2" 
			data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']" 
			data-fontsize="['90','90','70','50']"
			data-lineheight="['90','90','70','50']"
			data-width="['none','none','481','360']"
			data-height="none"
			data-whitespace="['nowrap','nowrap','normal','normal']"
			data-type="text" 
			data-responsive_offset="on" 
			data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 19; white-space: nowrap; font-size: 90px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: -5px;">@lang('amos.header2')</div>
          <div class="tp-caption   tp-resizeme" 
			id="slide-66-layer-3" 
			data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['90','90','60','30']" 
			data-fontsize="['25','25','25','20']"
			data-lineheight="['35','35','35','30']"
			data-width="['480','480','480','360']"
			data-height="none"
			data-whitespace="normal"
		 	data-type="text" 
			data-responsive_offset="on" 
			data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">@lang('amos.header2_desc')		</div>
          <a class="tp-caption rev-btn  tp-resizeme" 
		href="https://wa.me/33751250679" 	 id="slide-66-layer-7" 
			data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']" 
			data-width="250"
			data-height="none"
			data-whitespace="nowrap"
			data-type="button" 
			data-actions=''
			data-responsive_offset="on" 
			data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[50,50,50,50]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[50,50,50,50]"
			style="z-index: 21; white-space: nowrap; cursor:pointer;text-decoration: none;">@lang('amos.header2_btn')</a> </li>
        <li data-index="rs-68" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="600"  data-thumb="../../assets/images/reachout_bg-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent"> <img src="https://sm.mashable.com/mashable_pk/photo/default/926877b60613584219fc2fbb857c8599_sz46.jpg"  alt="Image"  data-bgposition="center center" data-kenburns="on" data-duration="5000" data-ease="Power2.easeInOut" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="20" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-9" 
			data-x="['center','center','center','center']" data-hoffset="['-112','-43','-81','44']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-219','-184','-185','182']" 
			data-width="['250','250','150','150']"
			data-height="['150','150','100','100']"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":300,"speed":1000,"frame":"0","from":"rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3700","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-10" 
			data-x="['center','center','center','center']" data-hoffset="['151','228','224','117']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-212','-159','71','-222']" 
			data-width="['150','150','100','100']"
			data-height="['200','150','150','150']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3650","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-29" 
			data-x="['center','center','center','center']" data-hoffset="['339','-442','104','-159']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['2','165','-172','219']" 
			data-width="['250','250','150','150']"
			data-height="['150','150','100','100']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-12" 
			data-x="['center','center','center','center']" data-hoffset="['162','216','-239','193']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['195','245','6','146']" 
			data-width="['250','250','100','100']"
			data-height="150"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3550","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-34" 
			data-x="['center','center','center','center']" data-hoffset="['-186','-119','273','-223']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['269','217','-121','69']" 
			data-width="['300','300','150','150']"
			data-height="['200','200','150','150']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3500","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-11" 
			data-x="['center','center','center','center']" data-hoffset="['-325','292','162','-34']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['3','55','-275','-174']" 
			data-width="150"
			data-height="['250','150','50','50']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":550,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3450","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-27" 
			data-x="['center','center','center','center']" data-hoffset="['-429','523','-190','-306']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-327','173','181','480']" 
			data-width="['250','250','150','150']"
			data-height="['300','300','150','150']"
			data-whitespace="nowrap"
			data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 	
			data-frames='[{"delay":320,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3680","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-28" 
			data-x="['center','center','center','center']" data-hoffset="['422','-409','208','225']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-245','-72','294','-14']" 
			data-width="['300','300','150','150']"
			data-height="['250','250','100','100']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":360,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3640","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-30" 
			data-x="['center','center','center','center']" data-hoffset="['549','-445','28','58']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['236','400','316','287']" 
			data-width="['300','300','150','200']"
			data-height="['250','250','150','50']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3600","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-31" 
			data-x="['center','center','center','center']" data-hoffset="['-522','492','-151','262']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['339','-180','330','-141']" 
			data-width="['300','300','150','150']"
			data-height="['250','250','100','100']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":440,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3560","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 14;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-32" 
			data-x="['center','center','center','center']" data-hoffset="['-588','-375','-253','-207']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['72','-328','-172','-111']" 
			data-width="['300','300','150','150']"
			data-height="['200','200','150','150']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="300" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":480,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3520","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 15;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-33" 
			data-x="['center','center','center','center']" data-hoffset="['-37','73','-76','-100']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-401','-340','-293','-246']" 
			data-width="['450','400','250','250']"
			data-height="['100','100','50','50']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":310,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3690","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 16;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme" 
			id="slide-68-layer-35" 
			data-x="['center','center','center','center']" data-hoffset="['186','38','116','17']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['363','402','190','395']" 
			data-width="['350','400','250','250']"
			data-height="['100','100','50','50']"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-slicey_offset="250" 
			data-slicey_blurstart="0" 
			data-slicey_blurend="20" 
			data-responsive_offset="on" 
			data-frames='[{"delay":340,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"+3660","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 17;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption tp-shape tp-shapewrapper " 
			id="slide-68-layer-1" 
			data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
			data-width="full"
			data-height="full"
			data-whitespace="nowrap"
		 	data-type="shape" 
			data-basealign="slide" 
			data-responsive_offset="off" 
			data-responsive="off"
			data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 18;background-color:rgba(0, 0, 0, 0.5);"> </div>
          <div class="tp-caption main-title   tp-resizeme" 
			id="slide-68-layer-2" 
			data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-70']" 
			data-fontsize="['90','90','70','50']"
			data-lineheight="['90','90','70','50']"
			data-width="['none','none','481','360']"
			data-height="none"
			data-whitespace="['nowrap','nowrap','normal','normal']"
		 	data-type="text" 
			data-responsive_offset="on" 
			data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 19; white-space: nowrap; font-size: 90px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: -5px; ">@lang('amos.header3')</div>
          <div class="tp-caption   tp-resizeme" 
			id="slide-68-layer-3" 
			data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['90','90','60','30']" 
			data-fontsize="['25','25','25','20']"
			data-lineheight="['35','35','35','30']"
			data-width="['480','480','480','360']"
			data-height="none"
			data-whitespace="normal"
		 	data-type="text" 
			data-responsive_offset="on" 
			data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"
			style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 25px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: 0px; "> @lang('amos.header3_desc')</div>
          <a class="tp-caption rev-btn  tp-resizeme" 
		  href="#FEATURES" id="slide-68-layer-7" 
			data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['200','200','160','120']" 
			data-width="250"
			data-height="none"
			data-whitespace="nowrap"
			data-type="button" 
			data-actions=''
			data-responsive_offset="on" 
			data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
			data-textAlign="['center','center','center','center']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[50,50,50,50]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[50,50,50,50]"
			style="z-index: 21; white-space: nowrap; cursor:pointer;text-decoration: none;">@lang('amos.header3_btn')</a> </li>
      </ul>
      <div class="tp-bannertimer tp-bottom" style="height: 3px; background:#8a39ee"></div>
    </div>
  </div>
  <!-- end revslider --> 
  
</header>

<!-- PLAYLIST -->
<section class="work-process transition" id="PLAYLIST">
	<div class="container">
	  <div class="row">
	   <div class="col-xs-12 text-center">
	   		<h6>@lang('amos.our_playlist')</h6>
			<h2>@lang('amos.our_playlist_desc')</h2>
	   </div>
	   <!-- end col-12 -->
	  </div>
	  <!-- end row --> 
	  <div class="circles">
		<div class="row">
		  <div class="col-md-4 col-sm-4 col-xs-12 text-left">
			<div class="icon-border"> <i  onclick="window.location='{{ route('channels') }}'" target="_blank" class="flaticon-057-analytics-2"></i> <span>@lang('amos.channels')</span> </div>
			<!-- end icon-border -->
		  </div>
		  <!-- end col-4 -->
		  <div class="col-md-4 col-sm-4 col-xs-12 text-center">
			<div class="icon-border"> <i  onclick="window.location='{{ route('series') }}'" target="_blank" class="flaticon-029-binder"></i> <span>@lang('amos.series')</span> </div>
			<!-- end icon-border -->
		  </div>
		  <!-- end col-4 -->
		  <div class="col-md-4 col-sm-4 col-xs-12 text-right">
			<div class="icon-border"> <i onclick="window.location='{{ route('movies') }}'" target="_blank" class="flaticon-034-computer"></i> <span>@lang('amos.movies')</span> </div>
			<!-- end icon-border -->
		  </div>
		  <!-- end col-4 --> 
		</div>
		<!-- end row --> 
	  </div>
	  <!-- end circles --> 
	</div>
  </section>
  <!-- end work-process -->


  <!-- FEATURES  -->
  <section class="featured-services transition" id="FEATURES" style="background: url({{ asset('iptvamos/images/167581.jpg')}})" >
	<div class="container">
	  <div class="row">
		<div class="col-md-4 col-sm-12 col-xs-12">
		  <h6>@lang('amos.features_header_desc')</h6>
		  <h2>@lang('amos.features_header')</h2>
		</div>
		<!-- end col-4 -->
		<div class="col-md-8  col-sm-12 col-xs-12">
		  <div class="row inner">
			<div class="col-md-6 col-sm-6 col-xs-12" > <i class="flaticon-001-wallet-1" aria-hidden="true"></i>
			  <h4>@lang('amos.featured_1_header')</h4>
			  <p>@lang('amos.featured_1_header_desc')</p>
			</div>
			<!-- end col-6 -->
			<div   class="fea col-md-6 col-sm-6 col-xs-12"> <i class="flaticon-010-pie-chart" aria-hidden="true"></i>
				<h4>@lang('amos.featured_2_header')</h4>
				<p>@lang('amos.featured_2_header_desc')</p>
			</div>
			<!-- end col-6 -->
			<div  class="fea col-md-6 col-sm-6 col-xs-12"> <i class="flaticon-019-credit-card-1" aria-hidden="true"></i>
				<h4>@lang('amos.featured_3_header')</h4>
				<p>@lang('amos.featured_3_header_desc')</p>
			</div>
			<!-- end col-6 -->
			
			<div   class="fea col-md-6 col-sm-6 col-xs-12"><i class="flaticon-022-pound-sterling-1" aria-hidden="true"></i>
				<h4>@lang('amos.featured_4_header')</h4>
				<p>@lang('amos.featured_4_header_desc')</p>
			</div>
			<!-- end col-6 -->
			<div  class="fea col-md-6 col-sm-6 col-xs-12"> <i class="flaticon-038-money-3" aria-hidden="true"></i>
				<h4>@lang('amos.featured_5_header')</h4>
				<p>@lang('amos.featured_5_header_desc')</p>
			</div>
			<!-- end col-6 -->
		  </div>
		  <!-- end row inner --> 
		</div>
		<!-- end col-8 --> 
	  </div>
	  <!-- end row --> 
	</div>
	<!-- end container --> 
  </section>


  <style>

.pricingTable {
    text-align: left;
    background: #fff;
    margin: 0 -15px;
	padding: 15px 15px;
    box-shadow: 0 0 10px #ababab;
    padding-bottom: 40px;
    border-radius: 10px;
    color: #cad0de;
    transform: scale(1);
    transition: all .5s ease 0s
}

.pricingTable:hover {
    transform: scale(1.05);
    z-index: 1
}

.pricingTable .pricingTable-header {
    padding: 40px 0;
    background: #f5f6f9;
    border-radius: 10px 10px 50% 50%;
    transition: all .5s ease 0s
}

.pricingTable:hover .pricingTable-header {
    background: #ff9624
}

.pricingTable .pricingTable-header i {
    font-size: 50px;
    color: #858c9a;
    margin-bottom: 10px;
    transition: all .5s ease 0s
}

.pricingTable .price-value {
    font-size: 35px;
    color: #ff9624;
    transition: all .5s ease 0s;
	text-align: center
}

.pricingTable .month {
    display: block;
    font-size: 20px;
    color: #2c4d9c; 
}

.pricingTable:hover .month,
.pricingTable:hover .price-value,
.pricingTable:hover .pricingTable-header i {
    color: #fff
}

.pricingTable .heading {
    font-size: 24px;
    color: #ff9624;
    margin-bottom: 20px;
    text-transform: uppercase
}

.pricingTable .pricingTable-header {
	text-align: center;
}

.pricingTable .pricing-content ul {
    list-style: none;
    padding: 0;
    margin-bottom: 30px
}

.pricingTable .pricing-content ul li {
    line-height: 30px;
    color: #a7a8aa
}

.pricingTable.blue .pricing-content ul li i {
    color: #4b64ff
}

.pricingTable.red .pricing-content ul li i {
    color: #ff4b4b
}

.pricingTable.green .pricing-content ul li i {
    color: #40c952
}

.pricingTable .pricing-content ul li i {
    color: #ff9624
}

.pricingTable .pricingTable-signup {
	text-align: center
}

.pricingTable .pricingTable-signup a {
    display: inline-block;
    font-size: 15px;
    color: #fff;
    padding: 10px 35px;
    border-radius: 20px;
    background: #ffa442;
    text-transform: uppercase;
    transition: all .3s ease 0s;
}

.pricingTable .pricingTable-signup a:hover {
    box-shadow: 0 0 10px #ffa442
}

.pricingTable.blue .heading,
.pricingTable.blue .price-value {
    color: #4b64ff
}

.pricingTable.blue .pricingTable-signup a,
.pricingTable.blue:hover .pricingTable-header {
    background: #4b64ff
}

.pricingTable.blue .pricingTable-signup a:hover {
    box-shadow: 0 0 10px #4b64ff
}

.pricingTable.red .heading,
.pricingTable.red .price-value {
    color: #ff4b4b
}

.pricingTable.red .pricingTable-signup a,
.pricingTable.red:hover .pricingTable-header {
    background: #ff4b4b
}

.pricingTable.red .pricingTable-signup a:hover {
    box-shadow: 0 0 10px #ff4b4b
}

.pricingTable.green .heading,
.pricingTable.green .price-value {
    color: #40c952
}

.pricingTable.green .pricingTable-signup a,
.pricingTable.green:hover .pricingTable-header {
    background: #40c952;
}

.pricingTable.green .pricingTable-signup a:hover {
    box-shadow: 0 0 10px #40c952
}

.pricingTable.blue:hover .price-value,
.pricingTable.green:hover .price-value,
.pricingTable.red:hover .price-value {
    color: #fff;
}

@media screen and (max-width:990px) {
    .pricingTable {
        margin: 0 0 20px
    }
}
.flaticon-001-wallet-1:hover,
.flaticon-038-money-3:hover,
.flaticon-022-pound-sterling-1:hover, 
.flaticon-019-credit-card-1:hover,
.flaticon-010-pie-chart:hover{
	background-color: #f5f6f9 !important;
}
</style>
                           

 
  <!-- end header -->
  

<!-- Premium -->

<!-- end header -->
<section class="highlights" id="PRICING">
	<div class="container">
	  <div class="row">
		<div class="col-xs-12">
			<h6 style="padding-bottom: 9px;">@lang('amos.pricing_header_desc')</h6> 
			<h2 style="margin-bottom: 8px;">@lang('amos.pricing_headerp')<a style="background:#ff3f58;color:white;margin-left:2px;font-size: 10px; border:1px solid #ff3f58;padding:3px;border-radius: 25px;" class="tp-caption rev-btn  tp-resizeme rs-hover-ready" >@lang('amos.more_offers')</a></h2>
		
			<div class="pricing-switcher">
			<p class="fieldset">
				<input type="radio" name="duration-1" value="monthly" id="radio1" checked>
				<label for="radio1">@lang('amos.onedevice')</label>
				<input type="radio" name="duration-1" value="yearly" id="radio2">
				<label for="radio2">@lang('amos.twodevices')</label>
				<span class="switch"></span>
			</p>
		</div>

		
		<style>
		.pricing-switcher {
			text-align: center;
		}

		.pricing-switcher .fieldset {
			display: inline-block;
			position: relative;
			padding: 2px;
			border-radius: 50em;
			border: 2px solid #2d3e50;
			background:#ff3f58;
		}

		.pricing-switcher input[type="radio"] {
			position: absolute;
			opacity: 0;
			color:black ;
		}

		.pricing-switcher label {
			position: relative;
			z-index: 1;
			display: inline-block;
			float: left;
			width: 90px;
			height: 36px;
			line-height: 40px;
			cursor: pointer;
			font-size: 1.4rem;
			color: #ffffff;
		}

		.pricing-switcher .switch {
			position: absolute;
			top: 2px;
			left: 2px;
			height: 40px;
			width: 90px;
			background-color: #2d3e50;
			border-radius: 50em;
			-webkit-transition: -webkit-transform 0.5s;
			-moz-transition: -moz-transform 0.5s;
			transition: transform 0.5s;
		}

		.pricing-switcher input[type="radio"]:checked + label + .switch,
		.pricing-switcher input[type="radio"]:checked + label:nth-of-type(n) + .switch {
			-webkit-transform: translateX(90px);
			-moz-transform: translateX(90px);
			-ms-transform: translateX(90px);
			-o-transform: translateX(90px);
			transform: translateX(90px);
		}

		.no-js .pricing-switcher {
			display: none;
		}

		</style>

		  </div>
		  </div> 
		  

				<div class="demo"> 
					<div class="row text-center" id="onedevice">

					@foreach($products as $product)
						@if($product->Categorie->id == 1)
						<div class="col-md-3 col-sm-6 ">
							<div class="pricingTable {{ $product->description }} ">
								<div class="pricingTable-header">
									<b>{{ $product->html_details }} </b>
									<div class="price-value">  ‎€{{ $product->price_after }} <span class="month">{{ $product->band }} @lang('amos.month')</span> </div>
								</div>
								<div class="pricing-content text-center">
								<ul>
										<li><i class="fa fa-check"></i>  @lang('amos.prop_1')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.prop_2')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.prop_3')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.pprop_3')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.pprop_4')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.prop_4')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.prop_5')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.prop_6')</li>
									</ul>
								</div>
								<div class="pricingTable-signup">
									<a href="{{ url('payments/'.$product->id) }}">@lang('amos.buy_now')</a>
								</div>
							</div>
						</div> 
						@endif
					 @endforeach


					</div>

				 
					<div class="row text-center" id="multidevice" >

					@foreach($products as $product)
						@if($product->Categorie->id == 31)
						<div class="col-md-4 col-sm-6 "  >
							<div class="pricingTable {{ $product->description }}">
								<div class="pricingTable-header">
									<b>{{ $product->html_details }} </b>
									<div class="price-value">  ‎€{{ $product->price_after }} <span class="month">{{ $product->band }} @lang('amos.month')</span> </div>
								</div>
								<div class="pricing-content text-center">
								<ul>
										<li><i class="fa fa-check"></i>  @lang('amos.prop_1')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.prop_2')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.prop_3')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.pprop_3')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.pprop_4')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.prop_4')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.prop_5')</li> 
										<li><i class="fa fa-check"></i>  @lang('amos.prop_6')</li>
									</ul>
								</div>
								<div class="pricingTable-signup">
									<a href="{{ url('payments/'.$product->id) }}">@lang('amos.buy_now')</a>
								</div>
							</div>
						</div> 
						@endif
					 @endforeach


					</div>
				 



				</div>

			 
		  </div> 


	 </div>
</section>




<section class="quote transition" id="reseller">
 <div class="video-bg">
 	<video src="videos/video.mp4" muted="" loop="" autoplay=""></video>
 </div>
 <!-- end video-bg -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h6>@lang('amos.reseller_header')</h6>
        <h2>@lang('amos.reseller_dsc')</h2>
        <a href="/resseling">@lang('amos.header1_btn')</a> </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>


<section class="pricing" id="MULTIPLEDEVICE">
	<div class="container">
		<div class="row">
		<div class="col-xs-12 text-center">
        <h6>@lang('amos.multidevice_desc')</h6>
        <h2>@lang('amos.multidevice_header')  </h2>

	

      </div>
		<!-- end col-12 -->



		@foreach($products as $product)
			@if($product->Categorie->id == 11)

			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="price-box">
				<div class="price-header">
					<h3>{{ $product->band }}x @lang('amos.devices')</h3>
					<h5>@lang('amos.devices_separated')</h5>
				</div>
				<!-- end price-header --> 
				<span class="price"><span>€</span>{{ $product->price_after }} <small>1 @lang('amos.year')</small></span> 
				
					<i class="glyph-icon flaticon-072-bank-1"></i>
				<ul>
					<li>@lang('amos.prop_2')</li> 
					<li>@lang('amos.prop_3')</li> 
					<li>@lang('amos.pprop_3')</li> 
					<li>@lang('amos.pprop_4')</li> 
					<li>@lang('amos.prop_5')</li> 
					<li>@lang('amos.prop_4')</li> 
					<li>@lang('amos.prop_6')</li> 
					<li>@lang('amos.prop_1')</li> 
				</ul>
				
				<a href="{{ url('payments/'.$product->id) }}">@lang('amos.buy_now')</a>
				</div>
				<!-- end price-box --> 
      		</div> 

										

	  			@endif
			@endforeach
    
      <!-- end col-4 --> 
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>



<section class="support-bar transition">
  <div class="container">
    <div class="row">
      <div class="col-xs-12"> <a target="_blank"  href="/contact">@lang('amos.get_intouch')  </a> <img src="{{ asset('iptvamos/images/icon-support.png') }}" alt="Image">
        <h4>@lang('amos.anyquestion')</h4>
        <h6>@lang('amos.anyquestion_desc') </h6>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>



<section class="pricing" style="margin-bottom: -130px;" id="products">
	<div class="container">
		<div class="row text-center" >
		<div class="col-xs-12">
        <h6>@lang('amos.boxs_desc')</h6>
        <h2>@lang('amos.boxs_header')  </h2>

	

      </div>
		<!-- end col-12 -->



		@foreach($products as $product)
			@if($product->Categorie->id == 21)

		 
			<div class="col-md-4 col-sm-4 col-xs-12" >
		 
      <div class="card price-box">
        <img class="card-img" src="{{ asset('img/'.$product->img1) }}" alt="Vans">
       
		<span class="card-notify-year">@lang('amos.plus_one')</span>

        <div class="card-body">
          <h4 class="card-title">   {{$product->title}}     </h4>
		  <div class="ratings">
                  <p>
				  <i class="glyphicon glyphicon-star"></i>
				  <i class="glyphicon glyphicon-star"></i>
				  <i class="glyphicon glyphicon-star"></i>
				  <i class="glyphicon glyphicon-star"></i>
				  <i class="glyphicon glyphicon-star"></i>
                     ( {{$product->order}}  @lang('amos.reviews'))
                  </p>
                </div>
				<h3 class="cost">    <span style="color:#ff3f58;">€  {{$product->price_after}} </span>  <small class="pre-cost"> €   {{$product->price_before}}   </small></h3>
                        
          <p class="card-text">
            {{$product->description}}           </p>
          
          <div class="buy d-flex justify-content-between align-items-center">
		 
		  <a class="pur_button" href="{{ url('payments/'.$product->id) }}">@lang('amos.buy_now')</a> 
						 
          </div>
        </div>
      </div>
    </div>
										

	  			@endif
			@endforeach
    
      <!-- end col-4 --> 
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>

<style>
.like {
  font-size: 1.5rem;
}

  

.pur_button{
	height: 56px;
    line-height: 52px;
    padding: 0 40px;
    display: inline-block;
    color: #fff;
    background: #ff3f58;
    font-weight: 500;
    border-radius: 56px;
    box-shadow: 0 20px 30px rgb(0 0 0 / 5%);
    border: 2px solid transparent;
}
 

 .card-notify-year {
	 
        position: absolute;
        left: -10px;
        top: -20px;
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px; 
        color: #000;
        padding: 5px 10px;
        font-size: 14px;
}

.glyphicon {
    font-size: 13px !important;
    display: contents !important;
    color: #8a39ee;
}


</style>

<!-- HAPPYCLIENTS -->
<section class="testimonials" id="HAPPYCLIENTS">
		<div class="container">
		  <div class="row">
	  
		   <div class="col-xs-12 text-center">
			   <h6>@lang('amos.clients_desc')</h6>
			   <h2>@lang('amos.clients_header')</h2>
		   </div>
		   <!-- end col-12 -->
			<div class="col-xs-12">
			 <div class="owl-slider">
			 <div><div class="testimonial-box">
				<figure class="head"> <img src="{{ asset('iptvamos/images/depositphotos_12196477-stock-photo-smiling-men-isolated-on-the.jpg')}}" alt="Image"> </figure>
				<h5>Andrew Cusik</h5>
			    <span class="rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
				<p>Muy bien vendedor. respondí a todas mis preguntas y me ayudó cuando tuve problemas con los canales en los últimos años. la segunda vez que compro suscripciones nuevas y caja nueva. vendedor recomendado.
					</p>
				</div>
			  <!-- end testimonial-box --> </div>
			  <!-- end div -->
			 <div><div class="testimonial-box">
				<figure class="head"> <img src="{{ asset('iptvamos/images/h0YoGOnC.jpeg')}}" alt="Image"> </figure>
				<h5>Jane Anderson</h5>
			  <span class="rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
				<p>
				very Good seller. answear on all my questions and helped me when problem with channels the past years. the second time i buy New subscriptions and New box. recommend seller
			</p></div>
			  <!-- end testimonial-box --> </div>
			  <!-- end div -->
			  <div><div class="testimonial-box">
				<figure class="head"> <img src="{{ asset('iptvamos/images/images.jpg')}}" alt="Image"> </figure>
				<h5>محمد علي</h5>
			  <span class="rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
				<p>
					بائع ممتاز. خدمة عظيمة! مريح للغاية وأعطاني العديد من الفرص للاختبار قبل أن أشتري. موصى بة بشدة 
					</p>
				</div>
			  <!-- end testimonial-box --> </div>
			  <!-- end div -->
			  <div><div class="testimonial-box">
				<figure class="head"> <img src="{{ asset('iptvamos/images/3661213s2955926.bowMk.jpg')}}" alt="Image"> </figure>
				<h5> Elise Niveau</h5>
			  <span class="rates"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
				<p>
					 Meilleure abonnement IPTV et une inscroyable assistance 24/7, j'ai partagé votre site à mes amis.Merci
					</p>
				</div>
			  <!-- end testimonial-box --> </div>
			  <!-- end div -->
			 </div>
			  <!-- end owl-slider -->
			</div>
			<!-- end col-12 --> 
		  </div>
		  <!-- end row --> 
		</div>
		<!-- end container --> 
	  </section>

	  <!-- TUTO -->




 

 

   <!-- stats -->
   <section class="fun-facts" id="counter" style="background-color: #ff3f58 !important;color:black;">
	<div class="row">
	  <div class="col-md-4 col-sm-4 col-xs-12">
		<div class="feature-box"> <i style="color:black;" class="flaticon-014-smartphone-3" aria-hidden="true"></i>
		  <h4 class="feature-title" style="color:black;">@lang('amos.stat1')</h4>
		  <span class="odometer odometer-auto-theme" id="1"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span></div></span><span class="symbol">%</span> </div>
		<!-- end feature-box --> 
	  </div>
	  <!-- end col-4 -->
	  <div class="col-md-4 col-sm-4 col-xs-12">
		<div class="feature-box"> <i style="color:black;" class="flaticon-015-smartphone-2" aria-hidden="true"></i>
		  <h4 class="feature-title" style="color:black;">@lang('amos.stat2')</h4>
		  <span class="odometer odometer-auto-theme" id="2"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></span><span class="symbol">K</span> </div>
		<!-- end feature-box --> 
	  </div>
	  <!-- end col-4 -->
	  <div class="col-md-4 col-sm-4 col-xs-12">
		<div class="feature-box"> <i style="color:black;" class="flaticon-016-smartphone-1" aria-hidden="true"></i>
		  <h4 class="feature-title" style="color:black;">@lang('amos.stat3')</h4>
		  <span class="odometer odometer-auto-theme" id="3"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span></div></span><span class="symbol">+</span> </div>
		<!-- end feature-box --> 
	  </div>
	  <!-- end col-4 -->
	</div>
	<!-- end row --> 
  </section>

<!-- end right-side-content -->



<section class="faq transition" id="faq">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 text-center">
                   <h6>FAQs</h6>
                   <h2>@lang('amos.Quest')</h2>
                </div>
                <div class="col-xs-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">@lang('amos.accessDevice')</a> </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <br>
                                    <p style="color:black;">
                                    @lang('amos.accessDetails')
                                    </p>
                                </div> 
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">@lang('amos.servicePro')</a> </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                  <br>
                                  <p style="color:black;">
                                  @lang('amos.serviceDetails')
                                  </p>   
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">@lang('amos.macAddr')</a> </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body"> 
                                  <br>
                                  <p style="color:black;">
                                    @lang('amos.macDetails')
                                  </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">@lang('amos.stbug')</a> </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">   
                                  <br>
                                  <p style="color:black;">
                                  @lang('amos.stbugDetails')
                                  </p>
                                  <p style="color:black;">
                                  @lang('amos.stbugDetails2')
                                  </p>         
                                </div>
                            </div>
                        </div> 
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">@lang('amos.multiData')</a> </h4>
                            </div>                              
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body"> 
                                  <br>
                                  <p style="color:black;">
                                  @lang('amos.multiDetails')
                                  </p>  
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
  </section>

 
<!-- end featured-projects -->
<!-- end support-bar -->
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

<script type="text/javascript">
		
			var tpj=jQuery;
			var revapi24;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_24_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_24_1");
				}else{
					revapi24 = tpj("#rev_slider_24_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"revolution/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
							onHoverStop:"off",
							bullets: {
								enable:true,
								hide_onmobile:false,
								style:"bullet-bar",
								hide_onleave:false,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:50,
								space:5,
								tmp:''
							}
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[868,768,960,720],
						lazyType:"none",
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "0",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}

                if(revapi24) revapi24.revSliderSlicey();
			});	/*ready*/
		</script>
			 <script src="//rum-static.pingdom.net/pa-606e4396539100001100016f.js" async></script>
			 <script>





		jQuery(document).ready(function($){



			    $( "#multidevice" ).hide();
				 $( "#onedevice" ).show(); 

	//hide the subtle gradient layer (.pricing-list > li::after) when pricing table has been scrolled to the end (mobile version only)
	checkScrolling($('.pricing-body'));
	$(window).on('resize', function(){
		window.requestAnimationFrame(function(){checkScrolling($('.pricing-body'))});
	});
	$('.pricing-body').on('scroll', function(){ 
		var selected = $(this);
		window.requestAnimationFrame(function(){checkScrolling(selected)});
	});

	function checkScrolling(tables){
		tables.each(function(){
			var table= $(this),
				totalTableWidth = parseInt(table.children('.pricing-features').width()),
		 		tableViewport = parseInt(table.width());
			if( table.scrollLeft() >= totalTableWidth - tableViewport -1 ) {
				table.parent('li').addClass('is-ended');
			} else {
				table.parent('li').removeClass('is-ended');
			}
		});
	}

	//switch from monthly to annual pricing tables
	bouncy_filter($('.pricing-container'));

	function bouncy_filter(container) {
		container.each(function(){
			var pricing_table = $(this);
			var filter_list_container = pricing_table.children('.pricing-switcher'),
				filter_radios = filter_list_container.find('input[type="radio"]'),
				pricing_table_wrapper = pricing_table.find('.pricing-wrapper');

			//store pricing table items
			var table_elements = {};
			filter_radios.each(function(){
				var filter_type = $(this).val();
				table_elements[filter_type] = pricing_table_wrapper.find('li[data-type="'+filter_type+'"]');
			});

			//detect input change event
			filter_radios.on('change', function(event){
				event.preventDefault();
				//detect which radio input item was checked
				var selected_filter = $(event.target).val();

				//give higher z-index to the pricing table items selected by the radio input
				show_selected_items(table_elements[selected_filter]);

				//rotate each pricing-wrapper 
				//at the end of the animation hide the not-selected pricing tables and rotate back the .pricing-wrapper
				
				if( !Modernizr.cssanimations ) {
					hide_not_selected_items(table_elements, selected_filter);
					pricing_table_wrapper.removeClass('is-switched');
				} else {
					pricing_table_wrapper.addClass('is-switched').eq(0).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function() {		
						hide_not_selected_items(table_elements, selected_filter);
						pricing_table_wrapper.removeClass('is-switched');
						//change rotation direction if .pricing-list has the .bounce-invert class
						if(pricing_table.find('.pricing-list').hasClass('bounce-invert')) pricing_table_wrapper.toggleClass('reverse-animation');
					});
				}
			});
		});
	}
	function show_selected_items(selected_elements) {
		selected_elements.addClass('is-selected');
	}

	function hide_not_selected_items(table_containers, filter) {
		$.each(table_containers, function(key, value){
	  		if ( key != filter ) {	
				$(this).removeClass('is-visible is-selected').addClass('is-hidden');

			} else {
				$(this).addClass('is-visible').removeClass('is-hidden is-selected');
			}
		});
	}
});


         	$( "#radio1" ).click(function() {
				$( "#onedevice" ).show();
				 $( "#multidevice" ).hide();
			});

			$( "#radio2" ).click(function() {  
				 $( "#multidevice" ).show();
				 $( "#onedevice" ).hide();
			});

		</script>
</body>
</html>