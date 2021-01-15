<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon"   type="image/x-icon"/> 
    <meta name="google-site-verification" content="TMke9839CMeHz5lagagBuWa3qE9OaV4GMwkHsfL5q14" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ \App\Store::first()->name }} - IPTV @lang('iptv.home')</title>
    <link rel="icon" href="{{asset('img/logo.png')}}">
    <!-- Icon css link -->
    <link href="{{asset('iptv/vendors/themify-icon/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('iptv/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('iptv/vendors/linears-icon/style.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('iptv/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('iptv/vendors/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('iptv/vendors/revolution/css/navigation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('iptv/vendors/revolution/css/settings.css')}}">

    <!-- Extra plugin css -->
    <link href="{{asset('iptv/vendors/animate-css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('iptv/vendors/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{asset('iptv/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('iptv/css/responsive.css')}}" rel="stylesheet">


    <!-- Noty -->
    <link href="{{ asset('plugins/noty/noty.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/noty/noty.js') }}" type="text/javascript"></script>


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


</head>
<body>

<!--================Slider Area background-image: -webkit-linear-gradient(150deg, #a640d0 0%, #f8395d 100%);
background-image: -ms-l" =================-->
 

<!--================Slider Area =================-->
<!-- Session Flash -->
@include('partials._session')
<!-- /.Session Flash -->
<!--================ HOME -->


       
<section id="home">
    <div class="site-wrapper" id="xxx">

      <div class="site-wrapper-inner">

        <div class="container">

          <div class="masthead clearfix">
            <div class="container inner" style="color:#ff961f;"> 
              <nav>
                <ul class="nav masthead-nav" >
                  <li  ><a href="#home"  style="color:#ff961f;">@lang('iptv.home')</a></li>
                  <li  ><a href="#price"  style="color:#ff961f;">@lang('iptv.plans')</a></li>
                  <li  ><a href="#contact"  style="color:#ff961f;">@lang('iptv.contact')</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">@lang('iptv.header_title')</h1>
             <br>
            <p class="lead">
              <a href="#price" data-toggle="modal" data-target="#product_view11"     style=" background: #ff961f;"  class="btn btn-lg btn-warning">@lang('iptv.sbu_today')</a>
            </p>
          </div>

        </div>

      </div>

    </div>
    </section>
    <style>
    /*
 * Globals
 */
 /*
 * Base structure
 */

html,
body {
  height: 100%;
  background-color: #fff;
}
#home {
  color: #fff;
  text-align: center; 
}

/* Links */
#xxx a,
#xxx a:focus,
#xxx a:hover {
  color: #fff;
}

/* Custom default button */
.btn-default,
.btn-default:hover,
.btn-default:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritence from `body` */
  background-color: #fff;
  border: 1px solid #fff;
}




/* Extra markup and styles for table-esque vertical and horizontal centering */
.site-wrapper {
  display: table;
  width: 100%;
  height: 660px;
   min-height:100%;
    background: linear-gradient(0deg, rgba(214, 174, 81, 0.3), #000000), url(https://www.journaldugeek.com/content/uploads/2019/07/netflix-1.jpeg) center center;
  background-size:cover; 
  /*height: 100%; */
  /*min-height: 100%;*/
}
.site-wrapper-inner {
  display: table-cell;
  vertical-align: top;
}
.cover-container {
  margin-right: auto;
  margin-left: auto;
}

/* Padding for spacing */
.inner {
  padding: 30px;
}


/*
 * Header
 */

 

.masthead-brand {
  margin-top: 10px;
  margin-bottom: 10px;
}

.masthead-nav > li {
  display: inline-block;
}
.masthead-nav > li + li {
  margin-left: 20px;
}
.masthead-nav > li > a {
  padding-right: 0;
  padding-left: 0;
  font-size: 16px;
  font-weight: bold;
  color: #fff; /* IE8 proofing */
  color: rgba(255,255,255,.75);
  border-bottom: 2px solid transparent;
}
.masthead-nav > li > a:hover,
.masthead-nav > li > a:focus {
  background-color: transparent;
  border-bottom-color: #a9a9a9;
  border-bottom-color: rgba(255,255,255,.25);
}
.masthead-nav > .active > a,
.masthead-nav > .active > a:hover,
.masthead-nav > .active > a:focus {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 768px) {
  
  .masthead-brand {
    float: left;
  }
  .masthead-nav {
    float: right;
  }
}


/*
 * Cover
 */

.cover {
  padding: 15% 21px !important;
}
.cover .btn-lg {
  padding: 10px 20px;
  font-weight: bold;
}

/*
 * Affix and center
 */
 @media screen and (max-width: 2000px) and (min-width: 890px)  {
    .cover {
        padding: 11% 21px !important;
        }
 }

@media (min-width: 768px) { 
  /* Pull out the header and footer */
  .masthead {
    margin-top: -115px;
  }
  /* Start the vertical centering */
  .site-wrapper-inner {
    vertical-align: middle;
  }

}

</style>

       
 
 <!-- END HOME =================-->
 


 
<section class="feature_area" id="feature" style="padding-top: 2px;">
    <div class="container">
        <div class="main_title" style="padding-top: 126px;">
            <h2>@lang('iptv.features_amz') </h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="left_side_feature">
                    <div class="media">
                        <div class="media-body">
                            <a href="#"><h4>@lang('iptv.compatability')</h4></a>
                            <p>@lang('iptv.compatability_description')</p>
                        </div>
                        <div class="media-right">
                            <i class="lnr lnr-screen"></i>
                        </div>
                    </div>
                </div>
                <div class="left_side_feature">
                    <div class="media">
                        <div class="media-body">
                            <a href="#"><h4>@lang('iptv.high_qu') </h4></a>
                            <p>@lang('iptv.high_qu_desc')  </p>
                        </div>
                        <div class="media-right">
                            <i class="lnr lnr-laptop-phone"></i>
                        </div>
                    </div>
                </div>
                <div class="left_side_feature">
                    <div class="media">
                        <div class="media-body">
                            <a href="#"><h4>@lang('iptv.fast_zapping') </h4></a>
                            <p>@lang('iptv.fast_zapping_desc')  </p>
                        </div>
                        <div class="media-right">
                            <i class="lnr lnr-film-play"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature_mobile">
                    <img  src="{{asset('img/produit.png')}}" alt="">

                </div>
            </div>
            <div class="col-md-4">
                <div class="right_side_feature">
                    <div class="media">
                        <div class="media-left">
                            <i class="lnr lnr-dice"></i>
                        </div>
                        <div class="media-body">
                            <a href="#"><h4>@lang('iptv.power_serve')</h4></a>
                            <p>@lang('iptv.power_serve_desc') </p>
                        </div>
                    </div>
                </div>
                <div class="right_side_feature">
                    <div class="media">
                        <div class="media-left">
                            <i class="lnr lnr-select"></i>
                        </div>
                        <div class="media-body">
                            <a href="#"><h4>@lang('iptv.video_fi')</h4></a>
                            <p>@lang('iptv.video_fi_desc') </p>
                        </div>
                    </div>
                </div>
                <div class="right_side_feature">
                    <div class="media">
                        <div class="media-left">
                            <i class="lnr lnr-phone"></i>
                        </div>
                        <div class="media-body">
                            <a href="#"><h4> @lang('iptv.sport_clie')  </h4></a>
                            <p>@lang('iptv.sport_clie_desc'). </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Feature Area =================-->


<!--================Pricing Area =================-->
<section class="pricing_area" id="price">
    <div class="container">
        <div class="main_white_title">
            <h2>@lang('iptv.pricing_plan')</h2>
        </div>
        <div class="row">

        @foreach($products->take(3) as $product)
                <div class="col-md-4">
                    <div class="pricing_item">
                        <h3>{{ $product->title }}</h3>
                        <h2>€{{ $product->price_after }}</h2>

                        @if($product->band == 1)
                            <h4 class="color:#f8395d ">@lang('iptv.day') </h4>
                        @else
                        <h4 class="color:#f8395d">{{ $product->band }} @lang('iptv.mounth') </h4>
                        @endif
                        
                        <ul>
                            <li><a href="#">@lang('iptv.pr1')</a></li>
                            <li><a href="#">@lang('iptv.pr2')</a></li>
                            <li><a href="#">@lang('iptv.pr3')</a></li>
                            <li><a href="#">@lang('iptv.pr4')</a></li>
                            <li><a href="#">@lang('iptv.pr5')</a></li>
                        </ul>
                      
                            
                            <a  class="purchase_btn" data-toggle="modal" data-target="#product_view{{ $product->id }}" style="background-color: red;color: white;">@lang('iptv.view')</a>
                            
                      
                    </div>
                </div>
               
                 <div  class="modal fade " id="product_view{{ $product->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                <h3 class="modal-title">{{ $product->title }} - 
                                    @if($product->band == 1)
                                    @lang('iptv.day')  
                                @else
                                 {{ $product->band }} @lang('iptv.mounth')  
                                @endif</h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 product_img">
                                        <img src="{{ asset('img/produit.png') }}" class="img-responsive">
                                    </div>
                                    <div class="col-md-6 product_content"> 
                                        <div class="rating">
                                            <span class="glyphicon glyphicon-star" style="    color: gold;"></span>
                                            <span class="glyphicon glyphicon-star" style="    color: gold;"></span>
                                            <span class="glyphicon glyphicon-star" style="    color: gold;"></span>
                                            <span class="glyphicon glyphicon-star" style="    color: gold;"></span>
                                            <span class="glyphicon glyphicon-star" style="    color: gold;"></span>
                                            ({{ $product->notice }} reviews)
                                        </div>
                                        <p>@lang('iptv.descripton_product').</p>
                                        <h3 class="cost"><span style="color:green;" class="glyphicon glyphicon-eur"></span> <span style="color:green;">{{ $product->price_after }}</span> <small class="pre-cost"><span class="glyphicon glyphicon-eur"></span> {{ $product->price_before }}</small></h3>
                                         
                                        <div class="space-ten"></div>
                                        <div class="btn-ground text-center">
                                            
                                          
                                        @if($product->band == 1)
                                                <a href="https://www.bobres.info/{{ app()->getLocale() }}/payments/{{$product->id}}" class="btn btn-warning  btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span> @lang('iptv.try_now')</a>
                                          @else
                                            <a href="https://www.bobres.info/{{ app()->getLocale() }}/payments/{{$product->id}}" class="btn btn-warning  btn-lg "><span class="glyphicon glyphicon-shopping-cart"></span> @lang('iptv.purchase_now')</a>
                                            @endif
                 
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          

            @endforeach
        </div>
    </div>
</section>


 

<style>
        .product_view .modal-dialog{max-width: 800px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}
        </style>
<!--================Subscribe to our newsletter =================-->

<style>
    .modal-newsletter {
        color: #999;
        font-size: 15px;
    }
    .modal-newsletter .modal-content {
        padding: 40px;
        border-radius: 0;
        border: none;
    }
    .modal-newsletter .modal-header {
        border-bottom: none;
        position: relative;
        text-align: center;
        border-radius: 5px 5px 0 0;
    }
    .modal-newsletter h4 {
        color: #000;
        text-align: center;
        font-size: 30px;
        margin: 0 0 25px;
        font-weight: bold;
        text-transform: capitalize;
    }
    .modal-newsletter .close {
        background: #c0c3c8;
        position: absolute;
        top: -15px;
        right: -15px;
        color: #fff;
        text-shadow: none;
        opacity: 0.5;
        width: 22px;
        height: 22px;
        border-radius: 20px;
        font-size: 16px;
    }
    .modal-newsletter .close span {
        position: relative;
        top: -1px;
    }
    .modal-newsletter .close:hover {
        opacity: 0.8;
    }
    .modal-newsletter .icon-box {
        color: #a640d0;
        display: inline-block;
        z-index: 9;
        text-align: center;
        position: relative;
        margin-bottom: 10px;
    }
    .modal-newsletter .icon-box i {
        font-size: 110px;
    }
    .modal-newsletter .form-control, .modal-newsletter .btn {
        min-height: 46px;
        border-radius: 3px;
    }
    .modal-newsletter .form-control {
        box-shadow: none;
        border-color: #dbdbdb;
    }
    .modal-newsletter .form-control:focus {
        border-color: ;
        box-shadow: 0 0 8px rgba(114, 101, 234, 0.5);
    }
    .modal-newsletter .btn {
        color: #fff;
        border-radius: 4px;
        background: #a640d0;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        padding: 6px 20px;
        min-width: 150px;
        border: none;
    }
    .modal-newsletter .btn:hover, .modal-newsletter .btn:focus {
         background-image: -webkit-linear-gradient(150deg, #a640d0 0%, #f8395d 100%); 
        outline: none;
    }
    .modal-newsletter .input-group {
        margin: 30px 0 15px;
    }
    .hint-text {
        margin: 100px auto;
        text-align: center;
    }
    .heading-box h2{ width:100%; color: red; }
.text-box {
	position: absolute;
	top: 50%;
	left: 15%;
	right: 15%;
	color: #fff;
	text-align: center;
	transform: translateY(-50%);
}

</style>
<!--================Service Area =================-->
<section class="our_service_area" id="services">
    <div class="container">
        <div class="main_title">
            <h2>@lang('iptv.our_services')</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service_item">
                    <i class="lnr lnr-cloud-check"></i>
                    <a href="#"><h3>@lang('iptv.free_trail')</h3></a>
                    <p>@lang('iptv.free_trail_desc').</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service_item">
                    <i class="lnr lnr-phone"></i>
                    <a href="#"><h3>@lang('iptv.sport_clie')</h3></a>
                    <p>@lang('iptv.sport_clie_desc_s').</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service_item">
                    <i class="lnr lnr-laptop"></i>
                    <a href="#"><h3>@lang('iptv.everypou')</h3></a>
                    <p>@lang('iptv.everypou_desc').</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Service Area =================-->


<!--================Works Area =================-->
<section class="works_area" id="works" style="    background-image: -webkit-linear-gradient(150deg, #a640d0 0%, #f8395d 100%);
background-image: -ms-l">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="works_left_img">
                    <img src="{{asset('img/pk.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="works_right_content">
                    <div class="content_title">
                        <h2>@lang('iptv.our')</h2>
                    </div>
                    <p style="color:white;">@lang('iptv.desc')</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Works Area =================-->


@yield('content_store') 


<!--================Subscrib Area =================-->

<div id="myModalemail" class="modal fade">
	<div class="modal-dialog modal-newsletter">
		<div class="modal-content">
			<form role="form" method="POST" action="{{ route('maillist.store') }}"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
				<div class="modal-header">
					<div class="icon-box">						
						<i class="fa fa-envelope-open-o"></i>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
				</div>
				<div class="modal-body text-center">
					<h4>@lang('iptv.sbu_today')</h4>	 
				 
                        <input type="email" name="email" required  class="form-control" placeholder="@lang('iptv.entre_em')..."  >
                  
                    <div class="input-group">
						<span class="input-group-btn">
							<input type="submit" class="btn btn-primary" value="@lang('iptv.sub')">
						</span>
					</div>
				</div>
			</form>			
		</div>
	</div>
</div>

<!--================Subscrib Area =================-->
<form role="form" method="POST" action="{{ route('maillist.store') }}"
      enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('POST') }}
<section class="subscrib_area">
    <div class="container">
        <div class="content_title">
            <h2>@lang('iptv.sbu_today')</h2>
        </div>
        <div class="input-group subscrib_form">

            <input type="email" class="form-control"  name="email" required placeholder="@lang('iptv.entre_em')...">
            <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"> @lang('iptv.sub')</button>
                    </span>

        </div>
    </div>
</section>
</form>
<style>
    .modal-newsletter {	
		color: #999;
		font-size: 15px;
	}
	.modal-newsletter .modal-content {
		padding: 40px;
		border-radius: 0;		
		border: none;
	}
	.modal-newsletter .modal-header {
		border-bottom: none;   
        position: relative;
		text-align: center;
		border-radius: 5px 5px 0 0;
	}
	.modal-newsletter h4 {
		color: #000;
		text-align: center;
		font-size: 30px;
		margin: 0 0 25px;
		font-weight: bold;
		text-transform: capitalize;
	}
	.modal-newsletter .close {
		background: #c0c3c8;
		position: absolute;
		top: -15px;
		right: -15px;
		color: #fff;
		text-shadow: none;
		opacity: 0.5;
		width: 22px;
		height: 22px;
		border-radius: 20px;
		font-size: 16px;
	}
	.modal-newsletter .close span {
		position: relative;
		top: -1px;
	}
	.modal-newsletter .close:hover {
		opacity: 0.8;
	}
	.modal-newsletter .icon-box {
		color: #a640d0 ;		
		display: inline-block;
		z-index: 9;
		text-align: center;
		position: relative;
		margin-bottom: 10px;
	}
	.modal-newsletter .icon-box i {
		font-size: 110px;
	}
	.modal-newsletter .form-control, .modal-newsletter .btn {
		min-height: 46px;
		border-radius: 3px; 
	}
	.modal-newsletter .form-control {
		box-shadow: none;
		border-color: #dbdbdb;
	}
	.modal-newsletter .form-control:focus {
		border-color: #a640d0 ;
		box-shadow: 0 0 8px rgba(114, 101, 234, 0.5);
	}
    .modal-newsletter .btn {
        color: #fff;
        border-radius: 4px;
		background: #a640d0 ;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
		padding: 6px 20px;
		min-width: 150px;
        border: none;
    }
	.modal-newsletter .btn:hover, .modal-newsletter .btn:focus {
		background: #4e3de4;
		outline: none;
	}
	.modal-newsletter .input-group {
		margin: 30px 0 15px;
	}
	.hint-text {
		margin: 100px auto;
		text-align: center;
	}
    </style>
<!--================End Subscrib Area =================-->




<!--================Map Area =================-->
<section   id="contact" >
    
    <div class="contact_info">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6">
                    <div class="contact_details">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="media-body">
                                <h4>@lang('iptv.our_local')</h4>
                                <h5>{{\App\Store::first()->street}}  {{\App\Store::first()->address}}, {{\App\Store::first()->city}}, {{\App\Store::first()->country}}</h5>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h4>@lang('iptv.call_us') </h4>
                                <h5>{{\App\Store::first()->phone}} </h5> 
                            </div>
                        </div>
                    
                  
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact_details">
                         
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <h4>@lang('iptv.send_mess') </h4>
                                <h5>{{\App\Store::first()->email}} </h5> 
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="media-body">
                                <h4>@lang('iptv.working')</h4>
                                <h5>@lang('iptv.sport_clie_desc_s')</h5>
                            </div>
                        </div>
                        <ul>
                            @foreach(\App\Store::first()->socialmedias as $m)
                            <li><a href="{{$m->address}}"><i class="fa fa-{{$m->type}}"></i></a></li>
                                @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Map Area =================-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('iptv.chooe_yr_ln')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="text-center">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                       hreflang="{{ $localeCode }}" class="dropdown-item ">
 
                            <span class="badge badge-dark">{{$properties['native']}}</span>
                     
                    </a>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="container">
        <div class="pull-left">
            <h4><p>Copyright @2018-2020 All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                                       aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Recod</a></p></h4>
        </div>
        <div class="pull-right">
            <ul>
                <li><a href="#home">@lang('iptv.home')</a></li>
                <li><a href="#price">@lang('iptv.plans')</a></li>
                
                 <li><a href="https://www.bobres.com/en/iptv"><span class="title"></span></a></li>
                <li><a href="https://www.bobres.com/pt/iptv"><span class="title"> </span></a></li>
                <li><a href="https://www.bobres.com/de/iptv"><span class="title"> </span></a></li>
                <li><a href="https://www.bobres.com/es/iptv"><span class="title"> </span></a></li>
                <li><a href="https://www.bobres.com/fr/iptv"><span class="title"> </span></a></li>
                

                <li style="color: black !important; cursor: pointer" >
                    <a data-toggle="modal" data-target="#exampleModal">
                        @lang('iptv.lanhuage') ({{App::getLocale()}})
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('iptv/js/jquery-2.1.4.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="{{asset('iptv/js/bootstrap.min.js')}}"></script>

<script src="{{asset('iptv/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('iptv/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!--RS5.0 Extensions-->
<script src="{{asset('iptv/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('iptv/vendors/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('iptv/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('iptv/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript"
        src="{{asset('iptv/vendors/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('iptv/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('iptv/vendors/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('iptv/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('iptv/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- Extra plugin js -->
<script src="{{asset('iptv/vendors/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('iptv/vendors/flipster/jquery.flipster.min.js')}}"></script>
<!-- contact js -->
<script src="{{asset('iptv/js/jquery.form.js')}}"></script>
<script src="{{asset('iptv/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('iptv/js/contact.js')}}"></script>

<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{asset('iptv/js/gmaps.min.js')}}"></script>

<script src="{{asset('iptv/js/video_player.js')}}"></script>
<script src="{{asset('iptv/js/theme.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
    var isshow = localStorage.getItem('isshow');
    if (isshow== null) {
        localStorage.setItem('isshow', 1); 
        // Show popup here
        $("#myModalemail").modal('show');
    }
    });
    
</script>

</body>
</html>