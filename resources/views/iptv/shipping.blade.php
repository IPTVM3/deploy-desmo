@extends('iptv.main')


@section('content')
 
 
    

<header>
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-top-default bg-transparent navbar-default navbar-fixed-top nav-padding20 nav-icon black-bg">
        <div class="container">
            <a href="#." title="Logo" class="logo scroll"><img src="images/logo.png" class="logo-dark" alt="logo">
                <img src="images/logo.png" alt="logo" class="logo-light default">
            </a>

            <div class="side-nav-btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="bizwa">
                <ul class="navbar-nav ml-auto nav-color">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#home">Home</a>
                    </li> 
                </ul>
            </div>

            <div class="md-pl-0 pl-3 d-none d-lg-inline-block header-social">
                <a class="facebook-hover-effect" href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="twitter-hover-effect" href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="instagram-hover-effect" href="javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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
                        <a class="nav-link" href="index.html#home">Home</a>
                    </li> 
                </ul>
            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li><a href="#." class="facebook-text-hvr"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="twitter-text-hvr"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="linkedin-text-hvr"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="google-text-hvr"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                </ul>
                <p class="whitecolor text-capitalize">&copy; 2019 Bizwa. Made With Love by Themesindustry</p>
            </div>
        </div>
    </div>
    <!-- End side menu -->

</header>

<!--End Header Section-->

<!--Page Header-->
<section class="page_header padding-top pb-0" style="background-image: url({{  asset('iptv_update/images/b1.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content center-text mt-30">
                <h2 class="text-white mb-2 text-capitalize">Shipping</h2>
                <p>We offer the most complete corporate services in the country</p>
                <div class="page_nav">
                    <span>You are here:</span> <a href="index.html">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header-->
<style>
 
</style>

<!--BLOG SECTION-->
<section id="blog" class="padding-top">
    <div class="container">
        <div class="row">
           
        </div>
    </div>
</section>
<!--BLOG SECTION-->

@endsection