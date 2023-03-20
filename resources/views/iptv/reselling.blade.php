@extends('iptv.main')


@section('content')

    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-top-default navbar-default center-logo navbar-fixed-top nav-padding20 nav-icon white-bg box-shadow" style="top: 4px !important;">
        <div class="container">
          

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
<!--End Header Section-->

<!--rev slider-->

<section id="home" class="p-0">
    <h2 class="d-none">hidden</h2>
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="banner-main" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-2" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slide-img2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="https://images.unsplash.com/photo-1561414927-6d86591d0c4f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- Overlay -->
                    <div class="gradient-bg1 bg-overlay opacity-8 z-index-1"></div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-92-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['-5','-5','-5','-5']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-77','-77','-77','-85']"
                         data-fontsize="['30','30','25','20']"
                         data-fontweight="['600','600','600','500']"
                         data-letterspacing="['4','0','0','2']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":240,"speed":900,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 5; white-space: nowrap; font-size: 30px; line-height: 35px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Raleway, sans-serif;">Creative Onepage </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption   tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','3']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','7','7','-34']"
                         data-fontsize="['80','70','60','40']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":950,"speed":2000,"sfxcolor":"#ffffff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 6; white-space: nowrap; font-size: 70px; line-height: 80px; font-weight: 600; color: gold; letter-spacing: 4px;font-family:Raleway, sans-serif;">Digital World</div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption   tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['1','1','0','4']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['83','83','83','12']"
                         data-fontsize="['18','18','16','14']"
                         data-width="500"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1670,"speed":900,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 7; min-width: 500px; max-width: 500px; white-space: normal; font-size: 18px; line-height: 22px; font-weight: 300; color: #ffffff; letter-spacing: 1px;font-family:Roboto;">Curabitur mollis bibendum luctus. Duis suscipit </div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption   tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['170','170','170','80']"
                         data-fontsize="['20','20','16','16']"
                         data-width="['601','530','601','450']"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":2300,"speed":900,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":900,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 9; letter-spacing: .5px"><a class="white clr-b hvr-shutter-out-horizontal-blk btn btn-large btn-rounded scroll" style="background-color: gold;" href="#about">Learn More</a></div>

                </li>
            </ul>
        </div>
    </div>

</section>
<!--rev slider end-->


<!--about section-->
 

<!--about section end-->

<!--Counter start-->
<section class="counter">
    <div class="container">
        <div class="row">
            <div class="col-md-5 wow fadeInLeft">
                <h3>Our many years of experience in numbers</h3>
                <span class="hr-line"></span>
                <p class="pt-3 pb-3">We show you our professional achievements in numbers, which show the acquired skills and trust of many clients.</p>
            </div>
            <div class="col-md-7 text-center wow fadeInRight">
                <div class="row">
                    <div class="col-md-4 icon-block">
                        <div class="icon">
                            <i class="fa fa-handshake-o blue"></i>
                        </div>
                        <div class="counters mt-4">
                            <h3><span class="count_nums" data-to="2500" data-speed="2500">2500</span><i class="fa fa-plus"></i></h3>
                        </div>
                        <p class="num-counts mb-4">Satisfied customers</p>
                    </div>
                    <div class="col-md-4 icon-block two">
                        <div class="icon">
                            <i class="fa fa-check-square-o green"></i>
                        </div>
                        <div class="counters mt-4">
                            <h3><span class="count_nums" data-to="9500" data-speed="2500">9500</span><i class="fa fa-plus"></i></h3>
                        </div>
                        <p class="num-counts mb-4">Completed consultations</p>
                    </div>
                    <div class="col-md-4 icon-block">
                        <div class="icon">
                            <i class="fa fa-television blue"></i>
                        </div>
                        <div class="counters mt-4">
                            <h3><span class="count_nums" data-to="6000" data-speed="2500">6000</span><i class="fa fa-plus"></i></h3>
                        </div>
                        <p class="num-counts">Carried out training</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counter end-->

<!--Parallax Section-->


<section class="parallex-section parallax parallaxie img-size" style="background-image: url(https://images.unsplash.com/photo-1551101674-b7fe1fe084ee?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80); background-size: cover; background-repeat: no-repeat; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="parallex-para text-center text-white pb-20">Lorem ipsum dolor sit amet, consectetur</p>
                <h2 class="parallex-heading text-center font-weight-bold text-white text-capitalize">Grow Your Business With Us</h2>
                <a class="transparent hvr-shutter-out-horizontal-blk btn btn-large btn-rounded btn btn-medium btn-transparent-white mt-20 mb-10" href="javascript:void(0);">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- end container-->
</section>

<!--End Parallax Section-->

<!--Team Section-->

<section id="team" class="#team-slider">
    <div class="container">
        <!--Heading-->
        <div class="row wow fadeIn">
            <div class="col-md-12 text-center">
                <div class="title d-inline-block">
                    <h5 class="mb-3 blue mb-20 text-capitalize">Heros Behind the Company</h5>
                    <h2 class="gradient-text1 mb-3 mb-20 text-capitalize">Our Business Team</h2>
                    <p class="margin-30 text-width">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>
                </div>
            </div>
        </div>

      
    </div>
</section>

<!--End Team Section-->

<!--video section-->

<section class="video-section parallax parallaxie " style="background-image: url(https://images.unsplash.com/photo-1551101674-b7fe1fe084ee?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80); background-size: cover; background-repeat: no-repeat; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="video-para text-center pb-20">Lorem ipsum dolor sit amet, consectetur.</p>
                <h2 class="video-heading text-center font-weight-bold text-capitalize">Watch Our Success Story</h2>
                <a data-fancybox="" href="https://www.youtube.com/watch?v=7e90gBu4pas" class="transparent hvr-shutter-out-horizontal-blk btn btn-large btn btn-medium btn-rounded btn-transparent-white mt-20"><span class="play-btn"><i class="fa fa-play"></i></span>Play Video</a>
            </div>
        </div>
    </div><!--end container-->
</section>

<!--end video section-->


 



<!--Pricing Start-->
<section id="price" class="bg-light">
    <div class="container">
        <!--Heading-->
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn">
                <div class="title d-inline-block">
                    <h5 class="mb-3 blue mb-20">Most economical pricing</h5>
                    <h2 class="gradient-text1 mb-3 mb-20 text-capitalize">Flexible Pricing</h2>
                    <p class="margin-30 text-width">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>
                </div>
            </div>
        </div>

        <!--Team-->
        <div class="row">
            <div id="price-slider" class="owl-carousel owl-item wow fadeInUp">
                <!--price item-->
                <div class="price-item item text-left">
                    <h4 class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4 blue">Basic</h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign">$</span>29</h3>
                            <span class="month">MONTH</span>
                        </div>
                        <p class="price-text no-margin">It has survived not only five centu but also the leap electronic.</p>
                    </div>
                    <ul class="packages">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Full access</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>Unlimited Bandwidth</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>Powerful Admin Panel</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>Email Accounts</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>8 Free Forks Every Months</li>
                    </ul>
                    <a href="javascript:void(0);" class="custom-btn d-blue white-blue hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 dark-blue-background">Get Started Now</a>
                </div>
                <!--price item-->
                <div class="price-item text-left">
                    <h4 class="alt-font d-inline-block font-weight-500 mb-4">Popular</h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign">$</span>49</h3>
                            <span class="month">MONTH</span>
                        </div>
                        <p class="price-text no-margin">It has survived not only five centu but also the leap electronic.</p>
                    </div>
                    <ul class="packages">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Full access</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>Unlimited Bandwidth</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>Powerful Admin Panel</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>Email Accounts</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>8 Free Forks Every Months</li>
                    </ul>
                    <a href="javascript:void(0);" class="custom-btn blue-white hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 blue-background">Get Started Now</a>
                </div>
                <!--price item-->
                <div class="price-item text-left">
                    <h4 class="alt-font gradient-text1 d-inline-block font-weight-500 mb-4 blue">Advance</h4>
                    <div class="price-tag d-flex align-items-center">
                        <div class="price alt-font text-dark-gray">
                            <h3 class="currency"><span class="sign">$</span>99</h3>
                            <span class="month">MONTH</span>
                        </div>
                        <p class="price-text no-margin">It has survived not only five centu but also the leap electronic.</p>
                    </div>
                    <ul class="packages">
                        <li><i class="fa fa-check" aria-hidden="true"></i>Full access</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>Unlimited Bandwidth</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>Powerful Admin Panel</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>Email Accounts</li>
                        <li><i class="fa fa-check text-capitalize" aria-hidden="true"></i>8 Free Forks Every Months</li>
                    </ul>
                    <a href="javascript:void(0);" class="custom-btn grrenn-white hvr-shutter-out-horizontal-blk btn btn-large btn-gradient btn-rounded w-100 green-background">Get Started Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Pricing End Start-->

<!--blog section-->
 
<!--end blog section-->



<section class="blog-section" id="contact" style="background:white;">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="address-box wow fadeInUp" data-wow-delay="300">
                        <h2 class="text-capitalize">@lang('new.bob_office'), Paris </h2>
                        <p class="pt-3 pb-3">14 Rue Léone Gennevilliers, Paris ,France</p>
                        <p>@lang('new.office_tele')  : +33 7 456 412 35                        </p>
                      <!--  <p>Whatsapp : <a href="https://wa.me/+33753133255" style="color:green">@lang('new.just_click')</a></p>-->
                        <p>@lang('new.email') : contact.bobres@gmail.com</p> 
                        <br>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp">
                    <!--Location Map here-->
    
                    <div  class="bg-light-gray ">
                        <img   src="{{ asset('iptv_update/images/map.JPG') }} "/>
                    </div>
    
                    <!-- ends map -->
                    
                </div>
    
    
            </div>
        </div>
        </div>
    </div><!--end container-->
</section>

<!--end blog section-->
@endsection