@extends('iptv.main')


@section('content')


<!--End Header Section-->
<header>

    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-top-default navbar-default center-logo navbar-fixed-top nav-padding20 nav-icon white-bg box-shadow" style="top: 4px !important;">
        <div class="container">
            <a href="{{ route('home') }}" title="Logo" class="logo scroll"><img src="{{  asset('iptv_update/images/logo_dark_up.png') }}" class="logo-dark" alt="logo">
                <img src="{{  asset('iptv_update/images/logo_light_up.png') }}" alt="logo" class="logo-light default">
            </a>

            <div class="side-nav-btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="bizwa">
                <ul class="navbar-nav nav-color nav-white">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#home">@lang('new.home')</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link scroll" href="#price">@lang('new.Pricing') </a>
                    </li>  




                    <li class="nav-item">
                        <a class="nav-link scroll"  onclick="window.open('https://www.lordly-iptv.com/en/resseling')" > @lang('iptv.resselers')</a>
                    </li>
                 
 <!--
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#trial" data-toggle="modal" data-target="#testmoremodel">@lang('new.Test_Trial') </a>
                    </li> 
-->
                </ul>


                <ul class="navbar-nav ml-auto nav-color nav-white">

                
                


                    <li class="nav-item">
                        <a class="nav-link scroll" href="#about">@lang('new.About') </a>
                    </li>


                    <li class="nav-item"   >
                        <a class="nav-link scroll" href="#contact">@lang('new.contact_us')</a>
                    </li>
                </ul>

                </div>
            </div>

        </div><!--end container-->
    </nav>

    <!-- side menu -->
    <div class="side-menu">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#home">@lang('new.home')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link scroll" href="#price">@lang('new.Pricing')</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link scroll"  onclick="window.open('https://www.lordly-iptv.com/en/resseling')" > @lang('iptv.resselers')</a>
                    </li>

                    <!--
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#trial" data-toggle="modal" data-target="#testmoremodel">@lang('new.Test_Trial')</a>
                    </li> 
                    -->
               
                  
                    
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#about">@lang('new.About')</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link scroll" href="#contact">@lang('new.Office')</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li><a href="#." class="facebook-text-hvr"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="twitter-text-hvr"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="linkedin-text-hvr"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="instagram-text-hvr"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                </ul>
                <p class="whitecolor">&copy; 2020 Bobres. @lang('new.made_by') ReCod</p>
            </div>
        </div>
    </div>
    <!-- End side menu -->

</header>
 

<section id="home" class="p-0">
    <h2 class="d-none">hidden</h2>
        <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
            <div id="banner-main" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul> 


                    <!-- SLIDE  -->
                    <li   data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img   src="{{  asset('iptv_update/images/b1.jpg') }}" title="Best IPTV Subscription Service Provider 2021"  alt="Best IPTV Subscription Service Provider 2021" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10"  data-no-retina>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="['left','center','center','center']" data-hoffset="['10','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-140','-140']"
                             data-fontsize="['60','60','60','50']"
                             data-whitespace="nowrap" data-responsive_offset="on"
                             data-width="['none','none','none','none']" data-type="text"
                             data-textalign="['center','center','center','center']"
                             data-transform_idle="o:1;"
                             data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                             data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1000" data-splitin="none" data-splitout="none"
                             style="z-index:1; font-weight: 200; color: white;font-family: 'Roboto', sans-serif;text-transform:capitalize"> <!--@lang('new.3free') --> @lang('new.header_zero_header')
                        </div> 
                        <div class="tp-caption tp-resizeme"
                             data-x="['left','center','center','center']" data-hoffset="['10','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-70','-70']"
                             data-fontsize="['60','60','60','50']"
                             data-whitespace="nowrap" data-responsive_offset="on"
                             data-width="['none','none','none','none']" data-type="text"
                             data-textalign="['center','center','center','center']"
                             data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1200" data-splitin="none" data-splitout="none"
                             style="z-index:2; font-weight: 700; letter-spacing: 1px; color: #24c1dd;font-family: 'Roboto', sans-serif;text-transform:capitalize"><!--@lang('new.premium')--> @lang('new.live_and_vods')  
                        </div>
                        <div class="tp-caption tp-resizeme"
                             data-x="['left','center','center','center']" data-hoffset="['10','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['40','40','0','0']"
                             data-fontsize="['60','60','60','50']"
                             data-whitespace="nowrap" data-responsive_offset="on"
                             data-width="['none','none','none','none']" data-type="text"
                             data-textalign="['center','center','center','center']"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-start="1000" data-splitin="none" data-splitout="none"                         
                             style="z-index:1; font-weight: 200; color: white;font-family: 'Roboto', sans-serif;text-transform:capitalize">  <!-- @lang('new.premium_desc') -->  
                             <span style="color:white;font-size: 30px !important;"> @lang('new.new_exp') </span>
                        </div>
                        <div class="tp-caption"
                             data-x="['left','center','center','center']" data-hoffset="['15','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['140','140','110','110']"
                             data-textalign="['center','center','center','center']"
                             data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;"
                             data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;"}]'>

                            <a href="#price" class="custom-btn green hvr-shutter-out-horizontal-blk btn btn-large btn btn-medium btn-rounded green-background">@lang('new.shop_now')   </a>
                        </div>
                        <!-- SLIDE 2  -->
                    <li data-index="rs-02" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="{{  asset('iptv_update/images/b 2.jpg') }}" title="the lowest cost. for resellers"  alt="the lowest cost. for resellers"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-50']"
                             data-fontsize="['40','40','40','30']"
                             data-whitespace="nowrap" data-responsive_offset="on"
                             data-width="['none','none','none','none']" data-type="text"
                             data-textalign="['right','right','right','center']"
                             data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1200" data-splitin="none" data-splitout="none"
                             style="z-index:5; font-weight: 100; letter-spacing: 1px; color: #222d38;font-family: 'Roboto', sans-serif;text-transform:capitalize"> 
                             <span style="color:white"> @lang('new.Instant_Activation') </span>
                        </div>
                        <div class="tp-caption tp-resizeme"
                             data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','15','15']"
                             data-fontsize="['60','60','60','50']"
                             data-whitespace="nowrap" data-responsive_offset="on"
                             data-width="['none','none','none','none']" data-type="text"
                             data-textalign="['right','right','right','center']"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-start="1000" data-splitin="none" data-splitout="none"
                             style="z-index:6; font-weight: 700; color: #24c1dd; font-family: 'Roboto', sans-serif;text-transform:capitalize">@lang('new.suppo')
                        </div>
                        <div class="tp-caption tp-resizeme"
                             data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['70','70','80','80']"
                             data-fontsize="['60','60','60','50']"
                             data-whitespace="nowrap" data-responsive_offset="on"
                             data-width="['none','none','none','none']" data-type="text"
                             data-textalign="['right','right','right','center']"
                             data-transform_idle="o:1;"
                             data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                             data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1500" data-splitin="none" data-splitout="none"
                             style="z-index:7; font-weight: 400; color: black; line-height:30px; font-family: 'Roboto', sans-serif;text-transform:capitalize">@lang('new.fast_support')
                        </div>

                        <div class="tp-caption"
                             data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['160','160','170','170']"
                             data-textalign="['center','center','center','center']"
                             data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;"
                             data-type="button" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <a href="#price" class="custom-btn green hvr-shutter-out-horizontal-blk btn btn-large btn btn-medium btn-rounded green-background">@lang('new.shop_now') </a>
                            <a href="https://wa.me/33753133255"  class="custom-btn blue hvr-shutter-out-horizontal-blk btn btn-large btn btn-medium btn-rounded green-background">@lang('new.contact_us') </a>
                        </div>
                    </li>
                    <!-- SLIDE 3  -->
                    <li data-index="rs-03" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="{{  asset('iptv_update/images/b3.jpg') }}" title="Most IPTV services provide thousands of live TV channels"  alt="Most IPTV services provide thousands of live TV channels"   data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-140','-140']"
                             data-fontsize="['60','60','60','50']"
                             data-whitespace="nowrap" data-responsive_offset="on"
                             data-width="['none','none','none','none']" data-type="text"
                             data-textalign="['center','center','center','center']"
                             data-transform_idle="o:1;"
                             data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                             data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                             data-start="1000" data-splitin="none" data-splitout="none"
                             style="z-index:8; font-weight: 200; color: #222d38;font-family: 'Roboto', sans-serif;text-transform:capitalize"> @lang('new.get_in_touch') 
                        </div>
                        <div class="tp-caption tp-resizeme"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-70','-70']"
                             data-fontsize="['60','60','60','50']"
                             data-whitespace="nowrap" data-responsive_offset="on"
                             data-width="['none','none','none','none']" data-type="text"
                             data-textalign="['center','center','center','center']"
                             data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1200" data-splitin="none" data-splitout="none"
                             style="z-index:9; font-weight: 500; letter-spacing: 1px; color: #24c1dd;font-family: 'Roboto', sans-serif;text-transform:capitalize">Champions League
                        </div>
                        <div class="tp-caption tp-resizeme"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['40','40','0','0']"
                             data-fontsize="['60','60','60','50']"
                             data-whitespace="nowrap" data-responsive_offset="on"
                             data-width="['none','none','none','none']" data-type="text"
                             data-textalign="['center','center','center','center']"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-start="1000" data-splitin="none" data-splitout="none"
                             style="z-index:10; font-weight: 500; color: #24c1dd;font-family: 'Roboto', sans-serif;text-transform:capitalize">Europa League
                        </div>
                        <div class="tp-caption"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['140','140','110','110']"
                             data-textalign="['center','center','center','center']"
                             data-whitespace="nowrap" data-type="button" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;"
                             data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <a href="#price" class="custom-btn green hvr-shutter-out-horizontal-blk btn btn-large btn btn-medium btn-rounded green-background">@lang('new.shop_now') </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>
<!--rev slider end-->

<!--about section-->

<section class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr-5 wow fadeInLeft">
                <div style="background:white;" class="rare-box"></div>
                <img src="{{ asset('iptv_update/images/pk.png') }}" class="image-about position-relative w-100" style="margin-left: 16px;top: -180px;"  title="Over 150000 TV channels list and also 100000 to 240000 VODs"  alt="Over 150000 TV channels list and also 100000 to 240000 VODs"  >
            </div>
            <div class="col-lg-6 pl-6 center-about">
                <h2 class="wow fadeInUp" data-wow-delay="400ms">  <span class="green" style="text-transform: uppercase;">@lang('new.slider_one_header') </span>  </h2> 
                <p class="pt-3 wow fadeInUp" data-wow-delay="500ms">@lang('new.slider_one_header_desc')  </p> 

                <br>
                   
                <a href="{{ route('channels') }}"  class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">Channels</a>
                <a   href="{{ route('movies') }}"   style="background:rgb(36, 193, 221) !important" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">Movies</a>
                <a href="{{ route('series') }}"  style="background:green !important" class="custom-btn   hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">Series</a>
                
            
            
           
             </div>

        </div>
    </div>
</section>

<!--about section end-->

 <!-- 
<div class="modal" id="exampleModalnormalss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
            <h3 class="modal-title"> 
                @lang('iptv.prim')  
            
        
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style="    top: -6px; left: -4px; ">&times;</span></button>
        </h3>
        </div>
        <div class="modal-body"> 
            <p class="text-center">
                @lang('new.pack_normal')
            </p>
        
        </div> 
        <div class="modal-footer">
            <div class="btn-group-vertical" style="    width: 100%;">
                <a href="{{ url('channels.txt') }}" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">Channels</a>
                <a   href="{{ url('movies.txt') }}" style="background:rgb(36, 193, 221) !important" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">Movies</a>
                <a href="{{ url('series.txt') }}" style="background:green !important" class="custom-btn   hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">Series</a>
              
           
         
              </div>
            
          </div> 
      </div>
    </div>
  </div>


 
 <div class="modal" id="exampleModalsportdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
            <h3 class="modal-title"> 
                @lang('iptv.basic') 
            
        
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style="    top: -6px; left: -4px; ">&times;</span></button>
        </h3>
        </div>
        <div class="modal-body"> 
             <p class="text-center">
                @lang('new.pack_sport')
             </p>
        
        </div> 
        <div class="modal-footer">
            <div class="btn-group-vertical" style="    width: 100%;">

                <a href="{{ url('channels_king.txt') }}" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">Channels</a>
                <a   href="{{ url('movies_king.txt') }}" style="background:rgb(36, 193, 221) !important" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">Movies</a>
                <a href="{{ url('series_king.txt') }}" style="background:green !important" class="custom-btn   hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">Series</a>
              

           
         
              </div>
            
          </div> 
      </div>
    </div>
  </div>

   -->
  <!-- 
<section id="trial" class="parallex-section parallax parallaxie img-size" style="background-image: url(https://images.unsplash.com/photo-1551101674-b7fe1fe084ee?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80); background-size: cover; background-repeat: no-repeat; ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
 
               
                <h2 class="parallex-heading text-center font-weight-bold text-white pb-20 pt-3">@lang('new.test_des') </h2>
            
                
                <p class="parallex-para text-center text-white">@lang('new.test_why')   

              
                  <a href="#" data-toggle="modal" data-target="#testmoremodel" style="color: #47a2ae;">@lang('new.test_more')</a> </p>
           
                <br>
  
       
               <h2 class="parallex-heading text-center font-weight-bold text-white pb-20 pt-3">@lang('iptv.get_ur_trial') </h2>
                <a  data-toggle="modal" data-target="#whatsapp_model" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">@lang('new.just_click')</a>
             
             <p class="parallex-para text-center text-white">@lang('new.try_befor') </p>
              
                <a href="https://www.bobres.com/{{ app()->getLocale() }}/payments/161" style="background:rgb(36, 193, 221) !important" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated animated" style="visibility: visible; animation-name: fadeInUp;color:black;">1 @lang('new.MONTH') Test - {{ $month[0]->price_after}} euro</a>
     
 
       <h2 class="parallex-heading text-center font-weight-bold text-white pb-20 pt-3">@lang('new.few_hours_trial_test_header') </h2>
       <p class="parallex-para text-center text-white">@lang('new.test_des')   <br>
        
  
         </p> 
          
            <br>     
       <a href="https://www.bobres.co/{{ app()->getLocale() }}/payments/161" style="background:rgb(36, 193, 221) !important" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated animated" style="visibility: visible; animation-name: fadeInUp;color:black;">@lang('new.few_hours_trial_test_btn1') {{ $month[0]->price_after}} euro</a>  
        <a href="{{route('whatsapp.contact')}}" style="background:rgb(36, 193, 221) !important" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated animated" style="visibility: visible; animation-name: fadeInUp;color:black;">@lang('new.few_hours_trial_test_btn')</a> 
       



        <h2 class="parallex-heading text-center font-weight-bold text-white pb-20 pt-3">@lang('new.test_one_month')   </h2>
              
        <p class="parallex-para text-center text-white">@lang('new.test_why')   

              <a href="#" data-toggle="modal" data-target="#testmoremodel" style="color: #47a2ae;">@lang('new.test_more')</a></a> 
        </p>

       <br>
       <a href="https://www.bobres.co/{{ app()->getLocale() }}/payments/161" style="background:rgb(36, 193, 221) !important" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated animated" style="visibility: visible; animation-name: fadeInUp;color:black;">@lang('new.few_hours_trial_test_btn1') {{ $month[0]->price_after}} euro</a>  
     
              
        
         </div>
        </div>
    </div> 
    -->
    <!-- end container-->
    <!-- Modal -->
<div class="modal fade" id="testmoremodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header"> 
            <h5 class="modal-title">@lang('new.test_why')</h5>
        
        </div>
        <div class="modal-body"> 
            @lang('new.test_body') <br> 
   
        </div> 
        <div class="modal-footer">
            <button style="width: 100%;   margin-top: 3px;  border-radius: 50px 20px;"  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          </div>
    </div>
  </div>
</section>

<!--End Parallax Section--> 

<!--quote section-->
 
<section class="services-section" id="about" style="background:white;">
    <div class="container">
    
        <div class="row sm-box-setting">

            <div class="col-md-4 wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                <div class="icon-hover-effect">
                    <div class="padding">
                        <div class="text-center">
                            <i class="fa fa-laptop laptop-icon"></i>
                            <h3 class="creative-heading font-weight-600">@lang('new.live_and_vods') </h3>
                            <p class="creative-para">@lang('new.get_full_access')</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp animated" data-wow-delay="550ms" style="visibility: visible; animation-delay: 550ms; animation-name: fadeInUp;">
                <div class="icon-hover-effect">
                    <div class="padding-1">
                        <div class="text-center" >
                            <i style="color: black;" class="fa fa-bar-chart chart-icon"></i>
                            <h3 style="color: black;" class="creative-heading font-weight-600">@lang('new.fast_support')</h3>
                            <p style="color: black;" class="creative-para">@lang('new.different')</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp animated" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                <div class="icon-hover-effect">
                    <div class="padding">
                        <div class="text-center">
                            <i class="fa fa-pencil-square-o pencil-icon"></i>
                            <h3 class="creative-heading font-weight-600">@lang('new.Instant_Activation') </h3>
                            <p class="creative-para">@lang('new.Instant_Activation_desc') </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section>
 
 
<!--Pricing Start-->
<section id="price" class="bg-dark">
    <div class="container">
        <!--Heading-->
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn">
                <div class="title d-inline-block"> 
                    <h2 class="gradient-text1 mb-3 mb-20 text-capitalize" style="color:white;">@lang('new.Pricing')</h2>
                    <p class="margin-30 text-width">
                        </p>
                      </div>
            </div>
        </div>

          <!--Team-->
          <div class="row">
            <div id="price-slider" class="owl-carousel owl-item wow fadeInUp">
         
                @foreach($products as $product)
                
                <!--price item-->
                <div class="price-item text-left">

                    @if($product->band == 1)
                         <h4 style="margin-top: -25px;    margin-bottom: -1.5rem!important; margin-top: -5.5rem!important;" class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4 "> <span style="text-transform:uppercase">@lang('new.Test_Trial') </h4>
                    @elseif($product->band == 12)
                         <h4  style="margin-top: -25px;    margin-bottom: -1.5rem!important; margin-top: -5.5rem!important;" class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4  "  style="color:gold;">{{ $product->band  }} @lang('new.MONTH')</h4> 
                    @else
                         <h4  style="margin-top: -25px;    margin-bottom: -1.5rem!important; margin-top: -5.5rem!important;" class="alt-font d-inline-block font-weight-500 mb-4">{{ $product->band  }} @lang('new.MONTH')</h4>
                    @endif
                    
 
                    <div class="price-tag d-flex align-items-center" style="padding: -1px 0;">
                        <div class="price alt-font text-dark-gray"> 
                            @if($product->band == 12)
                                    <h3 class="currency"><span class="sign">€</span><span style="color:gold;">{{ $product->price_after }}</span></h3>
                            @else
                                    <h3 class="currency"><span class="sign">€</span>{{ $product->price_after }}</h3> 
                            @endif
                             
                        </div>
                        <p class="price-text no-margin">@lang('new.slider_one_header_2')</p>
                    </div>
                    <ul class="packages">

                        <li><i class="fa fa-check" aria-hidden="true"></i>@lang('new.Instant_Activation')</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>@lang('new.all_format') </li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>@lang('new.online') </li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>Smart TV & Smartphone & PC</li>

                        @if($product->band == 12)
                            <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>@lang('new.Uptime') </li>
                            <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>@lang('new.server_zipping') </li> 
                            <li style="color: #f2c900;"><i class="fa fa-check text-capitalize" aria-hidden="true"></i>@lang('new.auto_up') </li>
                            <li  style="color: #f2c900;"><i class="fa fa-check text-capitalize" aria-hidden="true"></i>@lang('new.suppot_anti')</li>
                        @elseif($product->band == 6)
                            <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>@lang('new.Uptime') </li>
                            <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>@lang('new.server_zipping') </li>
                        @endif

 
                    </ul>
                        @if($product->band == 12)      
                             <a data-toggle="modal" data-target="#product_view{{ $product->id }}" class="custom-btn grrenn-white hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 green-background" style="    border-color: #f2c900;background:gold;">@lang('iptv.purchase_now')</a>
                        @elseif($product->band == 1) 
                        
                        <a  href="https://wa.me/33783806412" class="custom-btn blue-white hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 blue-background">@lang('new.just_click')</a>
                      
                        @else
                            <a data-toggle="modal" data-target="#product_view{{ $product->id }}" class="custom-btn blue-white hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 blue-background">@lang('iptv.purchase_now')</a>
                        @endif
                </div>


        
                @endforeach 
                
            </div>
        </div>

        
    </div>
</section>
<!--Pricing End Start-->

<!--Model Product-->
@foreach($products as $product)
<div  class="modal fade " id="product_view{{ $product->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"> 
                    @if($product->band == 1)
                    @lang('new.Test_Trial')
                @else
                 {{ $product->band }} @lang('iptv.mounth')  
                @endif
            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style="    top: -6px; left: -4px; ">&times;</span></button>
            </h3>
            </div>
            <div class="modal-body">
                <div class="row"> 
                    <div class="col-md-12 product_content" style="margin-bottom: -19px;"> 
       
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Features</th>
                                <th scope="col" style="color:#24c1dd;" style="text-center">@lang('iptv.basic') </th>
                                <th scope="col" style="color:#ffc107;" style="text-center">@lang('iptv.prim') </th> 
                              </tr>
                            </thead>
                            <tbody>
                              <tr  >
                                <th scope="row">Auto update </th>
                                <td class="text-center"><i style="color:#24c1dd;" class="fa fa-check"></i></td>
                                <td class="text-center"><i style="color:#ffc107;" class="fa fa-check text-capitalize" aria-hidden="true"></i></td> 
                              </tr>
                              <tr  >
                                <th scope="row">@lang('new.Instant_Activation')</th>
                                <td class="text-center"><i style="color:#24c1dd;" class="fa fa-check"></i></td>
                                <td class="text-center"><i style="color:#ffc107;" class="fa fa-check text-capitalize" aria-hidden="true"></i></td> 
                              </tr>

                              <tr  >
                                <th scope="row">@lang('iptv.Refound')</th>
                                <td class="text-center"></td>
                                <td class="text-center"><i style="color:#ffc107;" class="fa fa-check text-capitalize" aria-hidden="true"></i></td> 
                              </tr>
 
                              <tr  >
                                <th scope="row">HD | FHD</th>
                                <td class="text-center"> </td>
                                <td class="text-center"> <i style="color:#ffc107;" class="fa fa-check text-capitalize" aria-hidden="true"></i></td> 
                              </tr>

                              <tr  >
                                <th scope="row">@lang('new.suppot_anti')</th>
                                <td class="text-center"> </td>
                                <td class="text-center"><i style="color:#ffc107;" class="fa fa-check text-capitalize" aria-hidden="true"></i></td> 
                              </tr>
                            </tbody>
                          </table>
                      
               
                       
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-group-vertical" style="    width: 100%;">

                    
                    @if($product->band == 3)
                    <a style="width: 100%;    border-radius: 50px 20px;" href="{{ url('payments/'.$seelected_product[2]->id) }}" class="btn btn-warning  btn-lg "><span class="glyphicon glyphicon-shopping-cart"></span> @lang('iptv.prim') - € {{$seelected_product[2]->price_after}}</a>
             
                    @elseif($product->band == 6)
                    <a style="width: 100%;    border-radius: 50px 20px;" href="{{ url('payments/'.$seelected_product[1]->id) }}" class="btn btn-warning  btn-lg "><span class="glyphicon glyphicon-shopping-cart"></span> @lang('iptv.prim') - € {{$seelected_product[1]->price_after}}</a>
             
                    @else
                    <a style="width: 100%;    border-radius: 50px 20px;" href="{{ url('payments/'.$seelected_product[0]->id) }}" class="btn btn-warning  btn-lg "><span class="glyphicon glyphicon-shopping-cart"></span> @lang('iptv.prim') - € {{$seelected_product[0]->price_after}}</a>
             
                    @endif
                    <a style="width: 100%;   margin-top: 3px; background:#24c1dd; color:black;  border-radius: 50px 20px;" href="https://www.bobres.co/{{ app()->getLocale() }}/payments/{{$product->id}}" class="btn  btn-lg "><span class="glyphicon glyphicon-shopping-cart"></span> @lang('iptv.basic') - € {{$product->price_after}}</a>
           
                   




                    


               
             
                  </div>
                
              </div> 
        </div>
    </div>
</div>
@endforeach

<style>
    .product_view .modal-dialog{max-width: 800px; width: 100%;}
    .pre-cost{text-decoration: line-through; color: #a5a5a5;}
    .space-ten{padding: 10px 0;}
</style>

<div id="whatsapp_model_yy" class="modal fade">
	<div class="modal-dialog modal-newsletter">
		<div class="modal-content text-center">
		 
				<div class="modal-header" >
					<div class="icon-box" style="display:none">						
						<i class="fa fa-envelope-open-o"></i>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="background: chartreuse;"><span style="    top: -6px; left: -4px; ">&times;</span></button>
				</div>
				<div class="modal-body text-center">
                    <h4 style="font-size: 23px; margin: -17px 0 11px 0;">@lang('new.pack_sport_header')  €69 </h4>	

                    <p style="    color: black !important;"  class="parallex-para text-center text-white">@lang('new.pack_sport')  </p>
                    <br>
 
              
   
           
                      <div style="margin-bottom: -24px;" class="input-group text-center">
						 
                        <input style="background:#007bff;" type="button" onclick="location.href = '/payments/211';"  class="btn btn-primary btn-block" value="@lang('iptv.purchase_now') -  €69">
                 
                </div>
                   
				</div>
		 		
		</div>
	</div>
</div>


<div id="whatsapp_model_ress" class="modal fade">
	<div class="modal-dialog modal-newsletter">
		<div class="modal-content text-center">
			<form role="form" method="POST" action="{{ route('whatsapp.save') }}"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
				<div class="modal-header" >
					<div class="icon-box" style="display:none">						
						<i class="fa fa-envelope-open-o"></i>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="background: chartreuse;"><span style="    top: -6px; left: -4px; ">&times;</span></button>
				</div>
				<div class="modal-body text-center">
                    <h4 style="font-size: 23px; margin: -17px 0 11px 0;">@lang('new.whatsapp_model_ress')</h4>	
 
                    <div class="input-group text-center">
						 
                        <input type="button"  onclick="location.href = '{{ route('whatsapp.contact') }}';"  class="btn btn-primary btn-block" value="Whatsapp">
                 
                     </div>
						 
                    
                     <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                        <span style="font-size: 20px; background-color: white; padding: 0 10px;">
                          @lang('new.or') <!--Padding is optional-->
                        </span>
                      </div>
  
                  
                    <div style="margin-bottom: -24px;" class="input-group text-center">
						 
                            <input style="background:#007bff;" type="button" onclick="location.href = 'https://www.messenger.com/t/Bobresshop';"  class="btn btn-primary btn-block" value="Facebook">
					 
                    </div>
                   
				</div>
			</form>			
		</div>
	</div>
</div>
<!--EMAIL POPUP-->
<div id="myModalemail" class="modal fade">
	<div class="modal-dialog modal-newsletter">
		<div class="modal-content text-center">
			<form role="form" method="POST" action="{{ route('maillist.store') }}"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
				<div class="modal-header" >
					<div class="icon-box" style="display:none">						
						<i class="fa fa-envelope-open-o"></i>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="background: gold;    opacity: 5.5;"><span style="    top: -6px; left: -4px; ">&times;</span></button>
				</div>
				<div class="modal-body text-center">
					<h4>@lang('iptv.sbu_today')</h4>	 
				 
                        <input type="email" name="email" requigold  class="form-control" placeholder="@lang('iptv.entre_em')..."  >
                  
                    <div class="input-group text-center">
						 
							<input type="submit" class="btn btn-primary btn-block" value="@lang('iptv.sub')">
					 
                    </div>
                   
				</div>
			</form>			
		</div>
	</div>
</div>

<style>
    .modal-header {
        display: block;
    }
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
		color: gold  ;		
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
		background: gold  ;
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
<!--blog section-->

<!--
<section id="trial" class="parallex-section parallax parallaxie img-size" style="background:white;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 style="    color: black !important;" class="parallex-heading text-center font-weight-bold text-white pb-20 pt-3">@lang('new.pack_sport_header') €69 </h2>
                <p style="    color: black !important;"  class="parallex-para text-center text-white">@lang('new.pack_sport_body')  </p>
                <br>
                <a data-toggle="modal" data-target="#whatsapp_model_yy"    style="background:rgb(36, 193, 221) !important" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">@lang('new.view')</a>
            </div>
        </div>
    </div>
    
</section>
 
 
<section id="trial" class="parallex-section parallax parallaxie img-size"  style="background-image: url(https://images.unsplash.com/photo-1551101674-b7fe1fe084ee?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80); background-size: cover; background-repeat: no-repeat; ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <p class="parallex-para text-center text-white" style="color: black !important" ><span style="font: caption;"  >@lang('new.new_store_desc')</span> </p>
                <h2 class="parallex-heading text-center font-weight-bold text-white pb-20 pt-3 "  >@lang('new.new_store_header')  </h2>
                <a href="https://www.bobres.co/{{ app()->getLocale() }}/payments/181" style="background:rgb(36, 193, 221) !important" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">@lang('iptv.purchase_now') - €99</a>
         
            </div>
        </div>
    </div>
 
</section>
 -->
 
 

<!-- SPECIAL OFFERS -->

<section id="trial" class="parallex-section parallax parallaxie img-size" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 style="    color: black !important;font-size: 35px;" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated font-weight-bold" >🔥 @lang('new.3free') 🔥</h2>
            </div>
        </div>
    </div>

</section>

<!-- SPORT PACKAGE -->
<section id="trial" class="parallex-section parallax parallaxie img-size cover-img"style="margin-top: 1px;margin-bottom: 1px;" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 style="    color: gold !important;" class="parallex-heading text-center font-weight-bold text-white pb-20 pt-3">@lang('new.sport_new_package')</h2>
                <p style="    color: white !important;font-size:19px !important;font-weight: bold;"  class="parallex-para text-center text-white">@lang('new.sport_new_package_desc')</p>
                <br>

                <a href="https://www.bobres.co/{{ app()->getLocale() }}/payments/211"   style="background:gold !important;FONT:caption;font-weight: bold;;color:black;" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;">@lang('new.sport_package_button') - 79 euros</a>
            </div>
        </div>
    </div>

</section>


<!-- MULTI DEVICE -->

<section id="trial" class="parallex-section parallax parallaxie img-size cover-img-sport"  style="margin-top: 1px;margin-bottom: 1px;" >
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-lg-12 text-center text-white">
                <h2 class="parallex-heading text-center font-weight-bold text-white pb-20 pt-3 " style="color: gold !important;"  >@lang('new.multidevice')</h2>
                <p class="parallex-para text-center text-white" ><span style="font: caption;color: white !important;font-size:19px !important;font-weight: bold;" >@lang('new.multidevice_desc')</span> </p>
                <br>
                <div class="form-row" style="width:60%;margin-left: 20%;">
                    <div class="col-md-6" style="display: none;">
                        <select id="package" class="form-control" name="package" style="font-weight: bold">
                            <option disabled>@lang('new.multidevice_option1')</option>
                            <option selected value="59">@lang('iptv.prim')</option>
                            <option value="69">Sport</option>
                            <option value="49">@lang('iptv.basic')</option>
                        </select>
                    </div>
                
                    <div class="col-md-6">
                        <select id="multidevice" class="form-control" name="multidevice" style="font-weight: bold">
                            <option disabled>@lang('new.multidevice_option2')</option>
                            <option selected value="2">2 @lang('new.device')</option>
                            <option value="3">3 @lang('new.device')</option>
                            <option value="4">4 @lang('new.device')</option>
                            <option value="5">5 @lang('new.device')</option>
                            <option value="6">6 @lang('new.device')</option>
                        </select>
                    </div>
                    <div class="col">
                        <select id="periods" class="form-control" name="periods" style="font-weight: bold">
                            <option disabled>@lang('new.multidevice_option3')</option>
                            <option value="3">3 @lang('iptv.mounth')</option>
                            <option value="6">6 @lang('iptv.mounth')</option>
                            <option selected value="12">1 @lang('iptv.yr')</option>
                        </select>
                    </div>

                </div>
                <br>
                <a  style="background:gold !important;FONT:caption;" id="pricevalueMM" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated" style="visibility: visible; animation-name: fadeInUp;font-weight: bold;color:black;">@lang('new.multidevice_desc_button') - <span id="pricevalue" style="color:red;"></span></a>

            </div>
        </div>
    </div>

</section>


<!-- TRIAL TEST -->

<section id="trial" class="parallex-section parallax parallaxie img-size cover-img-trial"  style="margin-top: 1px;margin-bottom: 1px;" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="parallex-heading text-center font-weight-bold text-white pb-20 pt-3 " style="color: gold !important"  >30-day package ! </h2>
                <p class="parallex-para text-center text-white" style="color: white !important;font-size:19px !important;font-weight: bold;" >
                        @lang('new.test_trial')
                    </p>
                <br>
                <a href="https://www.bobres.co/{{ app()->getLocale() }}/payments/161" style="background:gold !important;FONT:caption;font-weight: bold;;color:black;" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated animated" style="visibility: visible; animation-name: fadeInUp;color:black;">@lang('new.few_hours_trial_test_btn1') {{ $month[0]->price_after}} euro</a>

            </div>
        </div>
    </div>

</section>


<!-- RESELLING TEST -->

<section id="trial" class="parallex-section parallax parallaxie img-size cover-img-reselling" style="margin-top: 1px;margin-bottom: 1px;"  >
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="parallex-heading text-center font-weight-bold text-white pb-20 pt-3 " style="color: gold !important"  >BECOME AN IPTV RESELLER</h2>
                <p class="parallex-para text-center text-white" style="color: white !important;font-size:19px !important;font-weight: bold;" >
                Our IPTV reseller program helps you to live up to the expectations of your customers. Join the ship and enjoy dozens of perks with our program now.
                    </p>
                <br>
                <a href="https://www.bobres.co/en/support" style="background:gold !important;FONT:caption;font-weight: bold;;color:black;" class="custom-btn green hvr-shutter-out-horizontal-blk wow fadeInUp btn btn-large btn btn-medium btn-rounded animated animated" style="visibility: visible; animation-name: fadeInUp;color:black;">Contact Us</a>

            </div>
        </div>
    </div>

</section>


<style>
    .cover-img::before {
        content: "";
        background-image: url({{ asset('iptv_update/images/sport.jpg') }});
        background-size: cover;
        background-repeat: no-repeat;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px; 
    }

    .cover-img-sport::before {
        content: "";
        background-image: url({{ asset('iptv_update/images/new.jpg') }});
        background-size: cover;
        background-repeat: no-repeat;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px; 
    }
    .cover-img-trial::before {
        content: "";
        background-image: url({{ asset('iptv_update/images/lll.jpg') }});
        background-size: cover;
        background-repeat: no-repeat;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px; 
    }
    .cover-img-reselling::before {
        content: "";
        background-image: url(https://www.oec.oil.gov.iq/uploads/files/planning.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px; 
    }
</style>



<!-- BOXs Section -->





<section class="pricing"   id="products">
    <div class="container">
        <div class="row text-center" >
            <div class="col-xs-12" style="margin-bottom: 50px;">
                
                <h2>@lang('amos.boxs_header')  </h2>



            </div>
            <!-- end col-12 -->



            @foreach($products_boxs as $product)



                    <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:30px;" >

                        <div class="card price-box">
                            <img class="card-img" src="{{ asset('img/'.$product->img1) }}"  title="The Best IPTV Boxes Available" alt="The Best IPTV Boxes Available">

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

                                <p class="card-text" style="margin-bottom: 20px;">
                                    {{$product->description}}           </p>


                               <a class="pur_button"  href="https://www.bobres.co/{{ app()->getLocale() }}/payments/{{$product->id}}" >@lang('amos.buy_now')</a>



                            </div>
                        </div>
                    </div>


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
        height: 50px;
        line-height: 52px;
        padding: 0 40px;
        display: inline-block;
        color: black;
        background: rgb(36, 193, 221) !important;
        font-weight: 500;
        border-radius: 56px; 
        border: 2px solid transparent;
    }

    .pur_button:hover{
        height: 50px;
        line-height: 52px;
        padding: 0 40px;
        display: inline-block;
        color: black;
        background: rgb(36, 193, 221) !important;
        font-weight: 500;
        border-radius: 56px; 
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



<!-- FAQs -->




<section class="faq transition text-center" id="faq">
    <div class="container">



            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow zoomIn">
                        <h1>Frequently Asked Questions</h1>
                        <span></span>
                        <p>@lang('amos.Quest')</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        @lang('amos.accessDevice')
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p> @lang('amos.accessDetails')</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        @lang('new.test_why')                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
            <p>                                  @lang('new.test_body')
            </p>
                                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        @lang('amos.servicePro')                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>                                  @lang('amos.serviceDetails')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        @lang('amos.macAddr')                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>                                    @lang('amos.macDetails')
                                    </p>
                                    </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        @lang('amos.stbug')                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <p>                                  @lang('amos.stbugDetails')
                                    </p>
                                    <p>
                                        @lang('amos.stbugDetails2')

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSex">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSex" aria-expanded="false" aria-controls="collapseSex">
                                        @lang('amos.multiData')                                  </a>
                                </h4>
                            </div>
                            <div id="collapseSex" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSex">
                                <div class="panel-body">
                                    <p>                                                                  @lang('amos.multiDetails')

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->


    </div>
</section>
<style>
    .template_faq {
        background: #edf3fe none repeat scroll 0 0;
    }
    .panel-group {
        background: #fff none repeat scroll 0 0;
        border-radius: 3px;
        box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
        margin-bottom: 0;
        padding: 30px;
    }
    #accordion .panel {
        border: medium none;
        border-radius: 0;
        box-shadow: none;
        margin: 0 0 15px 10px;
    }
    #accordion .panel-heading {
        border-radius: 30px;
        padding: 0;
    }
    #accordion .panel-title a {
        background: #ffb900 none repeat scroll 0 0;
        border: 1px solid transparent;
        border-radius: 30px;
        color: #fff;
        display: block;
        font-size: 18px;
        font-weight: 600;
        padding: 12px 20px 12px 50px;
        position: relative;
        transition: all 0.3s ease 0s;
    }
    #accordion .panel-title a.collapsed {
        background: #fff none repeat scroll 0 0;
        border: 1px solid #ddd;
        color: #333;
    }
    #accordion .panel-title a::after, #accordion .panel-title a.collapsed::after {
        background: #ffb900 none repeat scroll 0 0;
        border: 1px solid transparent;
        border-radius: 50%;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);
        color: #fff;
        content: "";
        font-family: fontawesome;
        font-size: 25px;
        height: 55px;
        left: -20px;
        line-height: 55px;
        position: absolute;
        text-align: center;
        top: -5px;
        transition: all 0.3s ease 0s;
        width: 55px;
    }
    #accordion .panel-title a.collapsed::after {
        background: #fff none repeat scroll 0 0;
        border: 1px solid #ddd;
        box-shadow: none;
        color: #333;
        content: "";
    }
    #accordion .panel-body {
        background: transparent none repeat scroll 0 0;
        border-top: medium none;
        padding: 20px 25px 10px 9px;
        position: relative;
    }
    #accordion .panel-body p {
        border-left: 1px dashed #8c8c8c;
        padding-left: 25px;
    }
</style>



<!-- Client start -->
<section id="Clients" class="bg-light-gray" style="background:white;color:black;">
    <div class="container testimonial-container">
        <div class="row">
            <div class="col-md-12">
                <div class="title text-center"> 
                    <h2 class="gradient-text1 mb-3 mb-20 text-capitalize" style="color: black">@lang('new.happy_client')</h2>
                 </div>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-sm-12 align-items-center">
                <div class="owl-testimonial owl-carousel owl-theme">
                    <div class="testimonial-item item text-center">
                        <div class="testimonial-box">
                            <div class="testimonial-text position-relative mb-4" style="background: gold;">
                                <p style="color: black;">Perfecto, recomiendo a este vendedor que responde y encuentra soluciones. </p>
                                <span class="testimonial-date">March 06, 2019</span>
                                <span class="testimonial-arrow position-absolute" ></span>
                            </div>
                        </div>
                        <div class="testimonial-photo"><img alt="" src="https://pbs.twimg.com/profile_images/446726159347113984/h0YoGOnC.jpeg"></div>
                        <h5 class="text-capitalize color-black mt-3 mb-1">Andrew Cusik</h5>
                        <p class="color-pink blue">@lang('new.clients')</p>
                    </div>
                    <div class="testimonial-item item text-center">
                        <div class="testimonial-text position-relative mb-4" style="background: gold;">
                            <p style="color: black;">Muy bien vendedor. respondí a todas mis preguntas y me ayudó cuando tuve problemas con los canales en los últimos años. la segunda vez que compro suscripciones nuevas y caja nueva. vendedor recomendado. </p>
                            <span class="testimonial-date">March 20, 2018</span>
                            <span class="testimonial-arrow position-absolute"  ></span>
                        </div>

                        <div class="testimonial-photo"><img alt="" src="data:image/jpeg;base64,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"></div>
                        <h5 class="text-capitalize color-black mt-3 mb-1">Sara Jennifer</h5>
                        <p class="color-pink blue">@lang('new.clients')</p>
                    </div>
                    <div class="testimonial-item item text-center">
                        <div class="testimonial-text position-relative mb-4" style="background: gold;">
                            <p style="color: black;">very Good seller. answear on all my questions and helped me when problem with channels the past years. the second time i buy New subscriptions and New box. recommend seller. </p>
                            <span class="testimonial-date">April 18, 2019</span>
                            <span class="testimonial-arrow position-absolute"  ></span>
                        </div>


                        <div class="testimonial-photo"><img alt="" src="https://pbs.twimg.com/profile_images/378800000054677091/304c16d26b06e606de4666e8cfeef6f7_400x400.jpeg"></div>
                        <h5 class="text-capitalize color-black mt-3 mb-1">Robin willson</h5>
                        <p class="color-pink blue text-capitalize">@lang('new.clients')</p>
                    </div>
                    <div class="testimonial-item  item text-center">
                        <div class="testimonial-text position-relative mb-4" style="background: gold;">
                            <p style="color: black;">Vendedor excelente. ¡Gran servicio! Muy complaciente y me dio varias oportunidades para probar antes de comprar. Altamente recomendado.. </p>
                            <span class="testimonial-date">Feb 10, 2019</span>
                            <span class="testimonial-arrow position-absolute"  ></span>
                        </div>
                        <div class="testimonial-photo"><img alt="" src="https://cdn-otf-cas.prfct.cc/dfs1/eyJkIjo3MiwidyI6MzgwLCJoIjozODAsInVybCI6Imh0dHA6XC9cL2FkYXMtb3JlZ29uLWNhcy1vYml0cy5zMy5hbWF6b25hd3MuY29tXC9waG90b3NcL2NyZWF0ZV9zdG9yeVwvNWM0Nzc3MzFhZTQ0OFwvMDUzNTY3MDAyODE1NDg5NTAyNTEyZDkxMTY3MS5qcGciLCJtIjoiSlBHIn0="></div>
                        <h5 class="text-capitalize color-black mt-3 mb-1">Jane Anderson</h5>
                        <p class="color-pink blue text-capitalize">@lang('new.clients')</p>
                    </div>


                    <div class="testimonial-item item text-center">
                        <div class="testimonial-text position-relative mb-4" style="background: gold;">
                            <p style="color: black;">بائع ممتاز. خدمة عظيمة! مريح للغاية وأعطاني العديد من الفرص للاختبار قبل أن أشتري. موصى بة بشدة </p>
                            <span class="testimonial-date">April 18, 2020</span>
                            <span class="testimonial-arrow position-absolute"  ></span>
                        </div>


                        <div class="testimonial-photo"><img alt="" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUTEhIVFRUVFRcVFRcXFRUVFRUVFRUXFxUVFRUYHSggGBolHRUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGi0dHx0tLS0tLS0tLS0rLS0tLS0tLS0tLS0tLS0tKystKy0tLS0tLS03LS03LSsrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAABAAIDBAUGBwj/xABDEAACAQIDBQMIBwYEBwAAAAAAAQIDEQQhMQUSQVFhBnGBBxMiMpGhscEjQlJictHwFDOCkuHxg6KywhUkNENTc9L/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQMCBAX/xAAgEQEBAAIDAAMBAQEAAAAAAAAAAQIRAyExEkFRMhMi/9oADAMBAAIRAxEAPwD01sSYggmQrCCACwhJBsAAFhwgBohxm7a2xSwsFOq3m7Ris5SeuS+b0ANA5nbXbXC0G4xbqzXCnZpc05vK/Q4Xb3ajEYl7u84U/sRbSa++/rP3ZaGXg8E5cLrXLkmll45A1I6HG+UXEtvzVOnTXDeUpyS77pX14GXPtfj2/wB+1/DBLxVg/wDCmst13zektFdt87mfVwc1rBrK+a4aLPwDo9NTDdu8dF5yhUXKUEuusbHUbF8oVCpaNePmZt633qT5XlrHxVup5xKlYhlHgHQse+wmmk0001dNO6afJ8QdWeK7A7R18JJeblvQzbpyb3HfVr7Muq9jPU+z3aCli6e9B2nG2/B5Si2r6cVrmv6JFGqxkhzGyEDZDGPZGANYz+/tE1l3v+gpPP8AXADNaGsLA38vmAAjJE9SMAFhBsIA6QKAJGmDhACAIQhABAC4UAVto42FGnKpN5RWi1k36sYri28keT7WqVMRUdSvLN+rBPKnHhFdMzZ7Tbe89Ue6/ooNxp/eek6r58Yx6X5nPRrXZDk5LOo6uHi33U+E2fHlkv1qdHsylCK0X64PxzMenVskWIYprMnM1bhHV1McnxzfJvPLj7DH2hWi1ms7ZO17a8tdXl1KEsZzbv3lDGY3Jvv5+83c+mJgpbShHP8AXiYtWkixi67b1KsqhiZWKZYyxWqQaJNnY6pRqRq0nuzjbuay9GXNNKzQHIr1ZWff8e4vx576rnzw129z2LtaGJoxq09JZSjxhJaxfd79S3c8p8n+3PM1/NSf0dZqOvq1L2jLx09nI9WZTSKOQxvlroh7GSYgDWnT5DBzZHIDCTGhkBsRmgHNfruGsCAQriAOlEggNMCESEAIQgsABz3bjaLpYZxi7TrPzS5pNPfl4Rv4tHQnBeUWr9NSjwjTlPxnPdT9lNiyuo3hN1xeKqfVWiVkuiBh5orTu2WsPRzOLJ6GC9SqMmTGUqZLuEvkppDUqMzcVN8zWlSuU6+H4IcyKxhVLkTZp1sKZ9anYtLtKxXnMgrSHTkVq8yuHqWfZ0MQ1+vee67Axzr4WjVfrTpxb/Espe9M+f2z2XyX1t7AQT1jOpHuW+5L/UdDmrqmNkG4GIGMYx0hrEZjBcSeSAxAmxrHIYBEIFxAHThQAo0wIhCAEIQrgCZ5/wCUmk1Vpy+1TUf5Z1H/AL17T0A47ylWVKlN8JTXtivyRnPxvjv/AE4Gjh+JeoQOfnj5cH1y4EcMTUbybZx5cVve3dOWTqR1sUP3DM2XjHa0jR87kc16q87gTRTxNVJar2kuIxHos5nGQnJ5s3xzd9Zztk8arqR4te0oYyUXoyh5iX9dBrpSXFP458zomEn2jeS36QYhWZWkWK6lxRWZbFLJDPU9f8lS/wCR/wAWp8tDyKosz2PyZwts+nfjOq/DzjXyZaeIV1DGscxoEZIY9B0hgjIYEawAjL5jhrERCG2EAdSEAjTAoIAgAuEAQBHI+UmmpYemn/5P9rOuOP8AKRUtSpLnKb9iX5mM70px/wBR5g452Sv+ug91Ix1ivC35mjsLB0Zzl56zlb0E/UStb1dG01xMF7JlGrCnOmqe4/TmpOUZrevvJcMsrIhMZfa67lZeo2aNSLSlF5PLufItUZ3M2tGMLqm3uyzzUla17ZySztyuW9m4edV2gruz9yzOTLHV6dWN67V8TWs3cGHcbbzzeiRm4ubTaZPs5726mlKEXeUd7dcr2y0eWvu10KY4MZ5FjcfFK7dk7pNRbTtr6VrPwMmWLTfov5HW9oMe6tKCh9FUgpR9CScXGatOLyTSeXA5VUd2m4bqbbu2+mlkXnx05/8AovO7yzKk1mTU6LQ2rCxrHUrOW7ENTmd/srtzTw9GjRp0XKMIxVScpbjc3nUcI2f1m7XfsOBktCTD0nKcYLWTUV3yaSKW9MTGX19ARkmk+DSa8VdAYFCyUeEUl7Fb5Cl/c2iZMawyBIDMuNuPkNAgBJiAxAN4QhAbqRCEaTENxtggCEJBECOG8pUv3K6TftcV8juWcJ5S1nRf3Zr2NP5onyfyrw/3HDTpKVuhPhcOlq3bld7ve1xGUmSt5HBc7t6kwitirznm+i6LkjpNg0nBScVmotc9VYxcDR9JtnQ4XE7kXbirGPl2fx66cTtag7t8ing3Z5am9tBbzfUxo01GaUtHo/zLY3cTyx1V1pMb5uPIt/suRBWp2J/Kt6Z1eJn4l5mhijNxDOjjc/Ijeh0PYHCKrjKV/wDt71VrnuL0f8zg/A5yemR6D5KcB6Vas1pGNOL6yblO38sDo0hbqPQpDJMkkxjNoI3wBIdLgMYAGNCBgDWBivmBgYboRWEAdU2JCEPaYiEhMASEJMFxAWzjPKRD0KL6zXuh+R2TOV8ocfoKb5VLfzRl/wDJnObxU4rrKPPIIu4emtWUFKxO8RZHmZTt60qSWLipJXe9ySbt1fIvvHQ3GrK/M5fGYtKV759NSpU2heVm3bjf3Gv8dl/rJ0uV9oR3n+kU8TN1GrcHqV8RTnJ+hFqPPJX62eZFCdSLziy849eI5ctvrrMJWtFIbiEnmY+Gx10SSxRi8dbnJEOOeWRk1GaGLmZki3FjqIcuW60th7Dr4qTjQgpONnJuSioqV0m2+56XPXuzGxf2TDxpb29K7nOWicnrbokkvC5yHkj9fE/hpfGoejS18Do05sr9I2MY5sjkxsAxkmFjWAJjGwtjWBgnqBsSA2AIQ24gDrWxCE2CYiAmG4Ag3AhACOf7dUHLBza+pKE/826/dJm+yHG4ZVac6ctKkJQfRSi1f3ip43VeHzkRVJt5K937PEmxVKUJyhLKUW4y707MruMuDt1/uc/wdsz2kwmFgnpvO+bfyRpzStwZSpxui9DAtr0c7/rlcxXTMembUazKNWr95GtUwtr3V5K/cu4ysXT52NTRZY3SjB3l6KtxfItVo2GUIcR+ImvYUc1mlbFMpyZYxEirJlMZ0nbt6D5IWt/E/hpf6qn5not9Tx7sFtxYau96LaqpQy1T3k01z4q3U9epVVKO9HNPQ0lSk+hG2x8mRNgRTGCbGyYAGxrYmxoGQGBguAG4gXAAdemKIhIEzgAuIAIhCAEIQLgennnlF2I4z/aaa9GWVXpPhNrqlbvXU4mMsz3WvRjOMozSlGStJPRp8GeT9ruzssLUurulN+hLrm9yX3rK/VLvJ54r8ef0yY1bZlhdoacFZp36IoUXmW3hoS9ZELJL265nlrpVxW34yvZMotylm1b4mlLCQjolf3+BXrStl8B9fTNyy+6qaFeu8xk8Sr5MilItjELls2oyu2KrUvkvaW9j7KqYirGlSXpS4vSK4yl0V/eU8T321OxWyJV66m19HRanJ8HL6kL+99EuZ3tba9TDuNkpU3JqUfrK+kovw0eXdqaOA2bTw1GNGnpFZt6zk/WlLqzF21HK3W/x/Mz7eivUdThsXCpBThLei9H8U1wa5DmzgNlbSnQleOcX68efVcn1O1wuMhVgpwd170+TXBm7NMxOxsmLeGOQjBsTY24HIATYECTBvAB3hDd8QB2QgBQJkwguEDhaiuJsCAxbAJgbAEVNqU6c6co1IqUGs0/c+9a31uizcztqVfRstRWtR4lt7ASw9Wai3KCd1LlfRStlfO3Upw2pNWzf6udZOsp/tCf1llf7klL25HPVtnwedrd2Rm3H7VxmX0q19qTvk+59eZRr4iUtWX3s6HNoMcDHlcJlhPBcc6yYJ34/EnWGk9cjapYPoSvD52Su3lkm23yS4ivN+NTi/WPQwEpSUYxcpSaiktW3kkj1/sv2fjg6OdnVnnUku7KKv9Vfm+IOxvZVYePnqyXnpLJa+bi+C+9zfWxrY+pkwl2nlfxn1Z3kYG3JXdlwRsynZOT4HP4p7zdyvHj3tLK9M3cNbZ0ZRe9B2eV+T71xKlOlmbWBo5F9bT3peo4tNelk+PFEt76O/P5FaklvyX3Yv2uf5Ejoru7jF4/xqZpGwNke5Lg79/5gdS2qa96MXGtTKU9jbjHNPRiuZaP3hDN0QbDtrCsC4kwYhzYBCAaEAgoldevGKzdve33LiBntjJzSzby5/1M+vtPhBW6vX2FF1JTkk3dyaSvortL5mvhS+TbpVFJNrS9tNba/EwtrVsmzbnZQtB5LLk8nx79TmtqyyZKt4vPdqT3ZyX2p5eOb91yOCuDbEk8TGP2Vd97093xJrWasQ5MnZxYoqmHFRw9szWVBEMcM5zUIJylJ2iub/ALXd+FjnmdvS/wAJ6jw9Bzkowi5SllFJXbfQ9C7MdlY0GqlZXq8Fwh1XN9fZzdXZWyo4fJPeqv158ucKd9Fpnq7cNF0ODqWW7Jtx1X2ovnH8tDr4+LrdcfLy76ibGTMfGaMv4y6dn3p8GuaM7GSsmVkQYeMq6R8X8kZ9SBZnK7vzBY6ccdJWq2Hg7m3ho2RVw9IqywlarJxrNQpp5Rg7xkuG87Jt9HZdGajNX8HVU6tRxaklGEbrNXTm2r+KL1iLC0IwjaCsie4yMaBYeNYtHKilST4ETotaS8HmWQCuMOX8V92f3feIsCM/54n8q632hBcViLRwgIEpAaDG4lU4uT7kubMGVaUm5Sd2/d0RLtutvT3OEcn38fyKtyuM6Tt7OlIiqzaV07PVPk+DHXIcS8jZba37S93zkNJXuuT4x7038OZn4x769FXvouPh1KWA2x5mpGDi5wqyUZR+E46Wks+9ZcjrcPs+nFXSu+e9k+5WWtrnNlhqr45PItp9nsRRqVKs470XJveTTsnonFO6tp4DKaTWTPZa+zFKLTtZrNNZd3E8s7U9namBqKaTdCbtF6qErN7j5aXX9Dn5eO3t1cPLPKSqWiu43ux9Kyq1rreW7ThzW9eUpW4erFJ/iOZpVbq51PY3FLdqUnqvpY89Ywn/ALLeJz8P99r838dOgw9NK9+Cb9hb2ZTut5+HcUJXk1BfxfkbmHjZJLgj0XnG4qipx3eK9V9eXc9DlNr1Wlbi8n0tqdglxON7RV1KvLdWS9F9ZL1n7fgaxm6zldRlSDBASJqVy6Kzholpohoxad7rdtpuq97673dwKHaHFSUFSpv6Sq91c4x+vLpqkurRoJ9nYrzk6jivQi1CMvtyXrtdNFc0CtgcMqdOMIqyirFgAI1jhjACkBhGtiBCBcQHt1gUwCOVQ4bUmopt8Fd+GYihtutu07fadvBZv5LxHPRfGAqjlJt/pvNkhBh1l3u5MkXSErYiRO2UsZUtFvkmwCx2a2ZCvOdWWbpy83BX0e6pTl74rwZ22Hw0Y/1KHZ7Awo0Yxp8VvSle7lOWcpPx4cDRaZC3taTUSXuZfbfAeewGIpxi5S3N6CSu3Om1OKiud4+81KUMyTdytbvMX8anTzLYPYmq4R8/JU757kfTnbk2rxXtZ2OD2JTox3acbX1f1nZp9/Dm+ljbo4W12/0uQJ5ix48Z43lyZZe1n4fApaFxKw9AZtNV2hifNU5VPsrLrJ5RXtsefzbb/Wp0fa3F5xpLh6cvG6j834o5wrhPtPO9hEnw8SFItYeJSMLSMfZkfPVp4h+qvQpfhX1l3tt91ifbVZ7qpQ9aq9xdI/Xl7Mr85Iu4aioRUVolY0EwrjQADrguADYA65HKQnIjlIAPnAkO+IA7YALgORY+5gdoq15KPKN/GX9kbzZy21qu9Vl3pexJG8PWcjILQexkRzZVM2RnbRoTq7tKHrTkv5U038DRYeztOUsW529CEN1P77zaXhuit1DnrrNnQ3YRi/qqxa3gboYogsnocfZ+Zap07IjwscveTTkGwhry4FYlqEMmAJsZJ8W7JZt8ktWCVVLiZHaLHONJxStv+jfprKy938Q53dFbqOWx+I85UlP7Tuui0S8EkvAgExWLxE6CLtJFalAbtOb3VTj61T0e6P15ezLvkjUBuAj5ypKs9PUp/hjrL+J3fdY0hlKCjFRWiVkPbGAuK4GwbwAWxjYXIFx6ASZBKRJUkVZyvl4AB86uYST9lXMAaDtoCEI41iOSxP7yX438WARvj+2cz4hYhFUzUbHZz9x/iz+KEIzn41j636Wg6QhEVWhT0XcvggyEIQVaupVmIQwrx1MXtdrS7p/GIhDx/pnLxzgkIR0JLNIr1f8Aqof+qf8AqiERoL4RCGDJAjqAQgT1ExCGENQrU/WX4vkxCCBqCEIA/9k="></div>
                        <h5 class="text-capitalize color-black mt-3 mb-1">محمد علي</h5>
                        <p class="color-pink blue text-capitalize">@lang('new.clients')</p>
                    </div>
                    <div class="testimonial-item  item text-center">
                        <div class="testimonial-text position-relative mb-4" style="background: gold;">
                            <p style="color: black;">Très bon vendeur. répondre à toutes mes questions et m'a aidé en cas de problème avec les chaînes ces dernières années. la deuxième fois que j'achète de nouveaux abonnements et une nouvelle boîte. recommander le vendeur. </p>
                            <span class="testimonial-date">April 27, 2018</span>
                            <span class="testimonial-arrow position-absolute" s ></span>
                        </div>
                        <div class="testimonial-photo"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ0PBZJo0m4-s7qf-iZRvnFqUHDrZ_TDIn6UKpPMfZO21SNJ3dg&usqp=CAU"></div>
                        <h5 class="text-capitalize color-black mt-3 mb-1">Antoine Naris</h5>
                        <p class="color-pink blue text-capitalize">@lang('new.clients')</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client ends -->
<style>
    .testimonial-date{ color:black;}
    .testimonial-text p { color:white;}
    </style>

<section class="number-section stats num-img-con parallax parallaxie"  style="background: black;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                <h2 class="number-heading text-center font-weight-600 img-clr" style="color: white">@lang('new.stati')</h2> 
            </div>

            <div class="row w-100 ml-auto mr-auto">
                <div class="col-md-3">
                    <div class="setting icon-hover-effect d-table">
                        <span class="number-icons d-table-cell"><i class="fa fa-briefcase briefcase-icon img-clr-con"></i></span>
                        <span class="digi-number font-weight-600 num-scrolling img-clr-con-1">12</span>
                        <p style="color:white;" class="digi-para">Servers</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="setting icon-hover-effect d-table">
                        <span class="number-icons d-table-cell"><i class="fa fa-clock-o clock-icon img-clr-con"></i></span>
                        <span class="digi-number font-weight-600 num-scrolling img-clr-con-1">2465</span>
                        <p style="color:white;" class="digi-para">@lang('new.work_h') </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="setting icon-hover-effect d-table">
                        <span class="number-icons d-table-cell"><i class="fa fa-star star-icon img-clr-con"></i></span>
                        <span class="digi-number font-weight-600 num-scrolling img-clr-con-1">612</span>
                        <p style="color:white;" class="digi-para">@lang('new.pos')</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="setting icon-hover-effect d-table">
                        <span class="number-icons d-table-cell"><i class="fa fa-heart heart-icon img-clr-con"></i></span>
                        <span class="digi-number font-weight-600 num-scrolling img-clr-con-1">735</span>
                        <p style="color:white;" class="digi-para">@lang('new.happy_client')</p>
                    </div>
                </div>

            </div>
        </div>
    </div><!--end container-->
</section>




<!-- CONTACT SECTION -->
<section id="contact" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <!-- SECTION TITLE -->
                <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                    <h2>Get in touch</h2>
                    <p>
                        We believe in the timeliness of customer service, and would like to do everything to satisfy our customers. If you have any problems, comments or suggestions, please contact our customer service representatives.

                    </p>
                </div>
            </div>

            <div class="col-md-7 col-sm-10">
                <!-- CONTACT FORM HERE -->
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <div style="display:none;" class="alert alert-danger" id="error_message" role="alert">  </div>
                    <form id="contact-form" action="#" method="get">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" name="ordernumber" id="ordernumber" placeholder="Order Number" >
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <select type="text" class="form-control" id="Subject" name="Subject" placeholder="Subject" required="">

                              <option value="subscibed-no-order">I subscibed, but I did recieved my order !</option>
                              <option value="subscibed-no-service">I subscibed, but service is not working !</option>
                              <option value="interssted-reselling">Im interssted in reselling plan</option>
                              <option value="need-informations">I want to subscribe but i need first some informations</option>
                              <option value="need-tria">Im interssted in your service but i need few hours trial test</option>
                              <option value="other">other</option>
                            </select>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6">
                            <button id="submit_button" type="button" class="form-control" name="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-md-5 col-sm-8">
                <!-- CONTACT INFO -->
                <div class="wow fadeInUp contact-info" data-wow-delay="0.4s">
                    <div class="section-title">
                        <h2>Contact Info</h2>
                        <p>
                            All subscription (accounts) will send to your email, please check carefully.
                            If you don't find anything, please check the junk mail!
                            Or send message to this email: contact.bobres@gmail.com, we will response to you within 24 hours!
                        </p>
                    </div>
<br>
                    <p><i class="fa fa-map-marker"></i> 13 Rue Paul Déroulède, 06000 Nice, FRANCE</p>
                    <p><i class="fa fa-comment"></i> <a href="contact.bobres@gmail.com">contact.bobres@gmail.com</a></p>
                    <p><i class="fa fa-phone"></i> <a href="/support">Click Here</a></p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /*---------------------------------------
  Contact section
-----------------------------------------*/

    .contact-info .fa {
        padding-right: 5px;
    }

    #contact .form-control {
        border: none;
        border-bottom: 2px solid #f0f0f0;
        border-radius: 0px;
        box-shadow: none;
        font-size: 18px;
        margin-top: 10px;
        margin-bottom: 10px;
        -webkit-transition: all ease-in-out 0.4s;
        transition: all ease-in-out 0.4s;
    }

    #contact .form-control:focus {
        border-bottom-color: #999999;
    }

    #contact input {
        height: 55px;
    }

    #contact button#submit {
        background: #2b2b2b;
        border: none;
        border-radius: 50px;
        color: #ffffff;
        height: 50px;
        margin-top: 24px;
    }

    #contact button#submit:hover {
        background: #7682cc;
        color: #ffffff;
    }


</style>
<!--end blog section-->
 

 <!--Model Product
@foreach($seelected_product as $product)
<div  class="modal fade " id="product_view{{ $product->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title">{{ $product->title }} - 
                    @if($product->band == 1)
                    @lang('new.Test_Trial')
                @else
                 {{ $product->band }} @lang('iptv.mounth')  
                @endif
            
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style="    top: -6px; left: -4px; ">&times;</span></button>
            </h3>
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
                            ({{ $product->notice }} 
                            @if (App::isLocale('ar'))
                            تعليقات
                            @else
                            reviews
                            @endif
                                )
                        </div>
                        <p>@lang('iptv.descripton_product').</p>
                        <h3 class="cost"><span style="color:green;" class="glyphicon glyphicon-eur"></span> <span style="color:green;">€ {{ $product->price_after }}</span> <small class="pre-cost"><span class="glyphicon glyphicon-eur"> €</span> {{ $product->price_before }}</small></h3>
                         
                        <div class="space-ten"></div>
                       
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                @if($product->band == 1)
                <a  href="#" style="width: 100%;"   data-dismiss="modal"  data-toggle="modal" data-target="#whatsapp_model" class="btn btn-warning  btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span> @lang('iptv.try_now')</a>
                @else
                    <a style="width: 100%;" href="https://www.bobres.com/{{ app()->getLocale() }}/payments/{{$product->id}}" class="btn btn-warning  btn-lg "><span class="glyphicon glyphicon-shopping-cart"></span> @lang('iptv.purchase_now')</a>
                @endif
              </div> 
        </div>
    </div>
</div>
@endforeach
-->


 
@endsection