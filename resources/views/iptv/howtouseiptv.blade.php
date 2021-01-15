@extends('iptv.main')


@section('content')
 
 
    

<header>
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-top-default bg-transparent navbar-default navbar-fixed-top nav-padding20 nav-icon black-bg">
        <div class="container">
            <a href="{{ route('home') }}" title="Logo" class="logo scroll"><img src="{{  asset('iptv_update/images/logo_dark.png') }}" class="logo-dark" alt="logo">
                <img src="{{  asset('iptv_update/images/logo_light.png') }}" alt="logo" class="logo-light default">
            </a>

            <div class="side-nav-btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
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
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
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
                <p class="whitecolor text-capitalize">&copy; 2019 Bobres. Made With Love by ReCoD</p>
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
                <h2 class="text-white mb-2 text-capitalize">Our Blog</h2>
                <p>We offer the most complete corporate services in the country</p>
                <div class="page_nav">
                    <span>You are here:</span> <a href="{{ route('home') }}">Home</a> <span><i class="fa fa-angle-double-right"></i> Blog</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header-->




<section id="blog" class="padding-top">
    <div class="container">
        <h2 class="d-none text-capitalize">Our Blog</h2>
        <div class="row">

            <div class="col-lg-12 wow fadeIn animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeIn;">
                <article class="blog_item heading_space">
                    <div class="image-blog bottom25">
                        <img src="{{ $blog->image }}" alt="{{ $blog->image_key }}">
                    </div>
                    <h3 class="darkcolor font-light2 top-40 h-padding align-left text-11 mb-20"> <a class="a-color-2 text-capitalize" href="#">
                        @if (App::isLocale('es')) 
                        {{  $blog->title_es }}
                        @else()
                        {{  $blog->title_en }}
                        @endif
                    </a></h3>
                    <ul class="commment top15 bottom15 align-left text-11 pb-20">
                        <li><a href="#."><i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}}</a></li> 
                    </ul>

                   
                   @if($blog->body_en != '')
                    
                        @if (App::isLocale('es')) 
                       {!! $blog->body_es !!}
                        @else()
                        {!! $blog->body_en !!}
                        @endif
                   
                    @endif
 
 
                
                  
           
                </article>
                <div class="post-shareit share-center text-11 mb-20">
                    <strong class="d-inline-block align-middle mb-2">Share:</strong>
                    <ul class="social_icon mb-0 whitebg d-inline-block align-middle ml-1">
                        <li><a class="facebook-bg-hvr" href="#."><i class="fa fa-facebook"></i></a></li>
                        <li><a class="google-bg-hvr" href="#."><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="twitter-bg-hvr" href="#."><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>


                <article>
                    <h3 class="heading darkcolor font-light2 bottom25 com-3 text-11 roboto">Comments<span class="divider-left"></span></h3>
                  
                    <h3 class="heading darkcolor font-light2 mb-20 leave-size text-11 text-capitalize">Leave a Reply<span class="divider-left"></span></h3>
                    <form class="findus wow fadeInUp" data-wow-delay="400ms" style="visibility: hidden; animation-delay: 400ms; animation-name: none;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-20">
                                    <input type="text" class="form-control para-color" placeholder="Name" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control para-color" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Comment"></textarea>
                                <div class="text-1 text-11">
                                    <button type="submit" class="custom-btn blue hvr-shutter-out-horizontal-blk btn btn-large btn btn-medium btn-rounded blue-background mb-30 text-capitalize">post your comment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </article>
              
            </div>

<!--
            <div class="col-lg-4">
                <aside class="sidebar padding-bottom">
                    <div class="widget heading_space wow fadeIn animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                        <h4 class="text-capitalize darkcolor bottom20 align-left text-11">search</h4>
                        <form class="widget_search mb-20">
                            <div class="input-group">
                                <input type="search" class="form-control padding-5" placeholder="Search..." required="">
                                <button type="submit" class="input-group-addon"><i class="fa fa-search"></i> </button>
                            </div>
                        </form>
                    </div>
                    <div class="widget heading_space wow fadeIn animated" data-wow-delay="350ms" style="visibility: visible; animation-delay: 350ms; animation-name: fadeIn;">
                        <h4 class="text-capitalize darkcolor bottom20 align-left text-11">Recent Post</h4>
                        @foreach ($blogger as  $blog)
                        <div class="single_post d-table bottom15">
                            <a href="#." class="post"><img  src="{{  $blog->image }}"  alt="{{  $blog->image_key }}"></a>
                            <div class="text-1">
                                <a class="a-recent text-capitalize" href="{{ route('blog',$blog->id) }}">
                                    @if (App::isLocale('es')) 
                                    {{  $blog->title_es }}
                                    @else()
                                    {{  $blog->title_en }}
                                    @endif
                                </a>
                                <span class="para-color">{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}}</span>
                            </div>
                        </div>
                        @endforeach
                     
                    </div>
                    <div class="widget heading_space wow fadeIn animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeIn;">
                        <h4 class="text-capitalize darkcolor bottom20 align-left text-11">Top Tags</h4>
                        <ul class="webtags text-11">
                            <li><a href="#IPTV">IPTV</a></li> 
                            <li><a href="#live_iptv">Movies & Tv Shows</a></li>
                            <li><a href="#Netflix">Netflix</a></li>
                            <li><a href="#IPTV_service">IPTV Service</a></li>
                            <li><a href="#iptv_usa_canada">IPTV US & Canada</a></li>
                            <li><a href="#IPTV_smarters_pro">Iptv Smarters pro</a></li>
                            <li><a href="#android_box_subscription">Android box subscription</a></li>
                            <li><a href="#best_iptv">Best Iptv Provides</a></li>
                            <li><a href="#iptv_subscription">IPTV Subscription</a></li>
                            <li><a href="#Android_Box_Abonnement"">Android Box Abonnement"</a></li>
                        </ul>
                    </div>
                     
                </aside>
            </div>
        -->
        </div>
    </div>
</section>

@endsection