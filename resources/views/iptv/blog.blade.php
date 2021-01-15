@extends('iptv.main')


@section('content')
 
 
    

<header>
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-top-default bg-transparent navbar-default navbar-fixed-top nav-padding20 nav-icon black-bg">
        <div class="container">
            <a   onclick="window.location.href= '{{ route('home') }}';" title="Logo" class="logo scroll"><img src="{{  asset('iptv_update/images/logo_dark.png') }}" class="logo-dark" alt="logo">
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





<!--BLOG SECTION-->
<section id="blog" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 sm-mb-2r">

                @foreach ($blogger as  $blog)
                    
                <article class="blog-item heading_space wow fadeIn animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-5 col-sm-12 heading_space">
                            <div class="image blog-img mb-0"><img   src="{{  $blog->image }}"  alt="{{  $blog->image_key }}" class="border_radius"></div>
                        </div>
                        <div class="col-md-7 col-sm-12 heading_space">
                            <h3 class="darkcolor font-light2 bottom10 align-left text-11 mb-20"> <a class="a-color-2 text-capitalize"  href="{{ route('blog',$blog->id) }}">
                                @if (App::isLocale('es')) 
                                {{  $blog->title_es }}
                                @else()
                                {{  $blog->title_en }}
                                @endif
                            </a></h3>
                            <ul class="commment align-left text-11 pb-20">
                                <li><a href="#."><i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}}
                                </a></li>
                                <li><a href="#."><i class="fa fa-comments-o"></i> {{ rand(10,100) }}</a></li> 
                            </ul>
                            
                            <p class="top15 para-color align-left center-text mb-30">

                                @if (App::isLocale('es'))  {{ str_limit( $blog->desc_es, $limit = 50, $end = '...') }}
                                @else() {{ str_limit( $blog->desc_en, $limit = 100, $end = '...') }}
                                @endif
                               
                              

                                .</p>
                            <div class="text-1 text-11">
                                <a class="custom-btn green hvr-shutter-out-horizontal-blk btn btn-large btn btn-medium btn-rounded green-background mb-0 wow fadeInUp text-capitalize animated" data-wow-delay="500" href="{{ route('blog',$blog->id) }}" style="visibility: visible; animation-name: fadeInUp;">Read More</a>
                            </div>
                        </div>
                    </div>
                </article>
                 
                @endforeach
           

                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    @include('dashboard.components.pagination', ['paginator' => $blogger])
                </div>
            </div>
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
        </div>
    </div>
</section>
<!--BLOG SECTION-->

@endsection