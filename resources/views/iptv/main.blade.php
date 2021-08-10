
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="google-site-verification" content="TMke9839CMeHz5lagagBuWa3qE9OaV4GMwkHsfL5q14" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="verification" content="349278a8fd82d8e1efbdd2873f9295" />

    <title>Bobres | @lang('new.home')</title>
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('iptv_update/revolution/css/settings.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('iptv_update/revolution/css/navigation.css') }} ">
    <!-- Style Sheet -->

    @if (App::isLocale('ar')) 
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    @else
    <link rel="stylesheet" href="{{ asset('iptv_update/css/bootstrap.min.css') }} ">
    @endif


    <link rel="stylesheet" href="{{ asset('iptv_update/css/animate.csss') }} ">
    <link rel="stylesheet" href="{{ asset('iptv_update/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('iptv_update/css/cubeportfolio.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('iptv_update/css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('iptv_update/css/owl.theme.default.css') }} ">
    <link rel="stylesheet" href="{{ asset('iptv_update/css/jquery.fancybox.min.css') }} ">
    <link rel="icon" href="{{ asset('iptv_update/images/logo_light_up.png') }} ">
    <link rel="stylesheet" href="{{ asset('iptv_update/css/style _new.css') }} ">


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
<body data-spy="scroll" data-target=".navbar" data-offset="90">
<!--Preloader-->
<div class="loader" id="loader-fade">
    <div class="loading-wrapper">
        <div class="loading"></div>
    </div>
</div>



<!--End Preloader-->

<!--Header Section-->




    @yield('content')
 
    
<!--Footer Start-->
<section class="text-center dark-blue-background">
    <h2 class="d-none">hidden</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-social">
                    <ul class="list-unstyled text-white">
                        <li><a class="wow fadeInUp facebook-bg-hvr" href="https://www.facebook.com/Bobresshop/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li> 
                        <li><a class="wow fadeInUp instagram-bg-hvr" href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown mail-bg-hvr" href="mailto:contact.bobres@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <p class="company-about fadeIn grey-text text-capitalize">© 2020 Bobres. @lang('new.made_by') <a href="javascript:void(0);">Recod</a></p>
            </div>
        </div>
    </div>
</section>
<!--Footer End-->


<!-- Optional JavaScript -->
<script src="{{ asset('iptv_update/js/jquery-3.3.1.min.js') }}"></script>


@if (App::isLocale('ar'))
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js" integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>
@else
<script src="{{ asset('iptv_update/js/bootstrap.bundle.min.js') }}"></script>
@endif



<script src="{{ asset('iptv_update/js/parallaxie.min.js') }}"></script>
<!--Appear JS-->
<script src="{{ asset('iptv_update/js/jquery.appear.js') }}"></script>
<!--Jquery-countTo JS-->
<script src="{{ asset('iptv_update/js/jquery-countTo.js') }}"></script>
<!--Parallaxie JS-->
<script src="{{ asset('iptv_update/js/parallaxie.min.js') }}"></script>
<!--Fancy Box JS-->
<script src="{{ asset('iptv_update/js/jquery.fancybox.min.js') }}"></script>
<!--Cube Portfolio JS-->
<script src="{{ asset('iptv_update/js/jquery.cubeportfolio.min.js') }}"></script>
<!--owl carousel JS-->
<script src="{{ asset('iptv_update/js/owl.carousel.min.js') }}"></script>
<!--Wow JS-->
<script src="{{ asset('iptv_update/js/wow.min.js') }}"></script>

<!-- REVOLUTION JS FILES -->
<script src="{{ asset('iptv_update/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('iptv_update/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="{{ asset('iptv_update/revolution/js/extensions/revolution.extension.actions.min.js') }} "></script>
<script src="{{ asset('iptv_update/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('iptv_update/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('iptv_update/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('iptv_update/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('iptv_update/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('iptv_update/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('iptv_update/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script> 
<!-- map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCs4APPDpT3CRGCgk3Cmv9xBvEK5Lq3HGo"></script>
<script src="{{ asset('iptv_update/js/maps.min.js') }}"></script>
<!-- custom script -->
<script src="{{ asset('iptv_update/js/script.js') }} "></script>
<script>   
    window.addEventListener("DOMContentLoaded", function(){ 
        if( $( window ).width() < 850){
            setTimeout(function() {   
            ChangeSize()
            }, 
            4000);
        }
        
    });
    
    $( window ).resize(function() {
        if( $( window ).width() < 850){
            setTimeout(function() {   
            ChangeSize()
            }, 
            4000);
        }
    })
    
    function ChangeSize() {
      var cols = document.getElementById('price-slider').getElementsByClassName('owl-stage');
      for(i = 0; i < cols.length; i++) { 
        cols[i].style.transform = "";
        cols[i].style.transition = "";
        cols[i].style.width = "";
      }
    }
    </script>
<script type="text/javascript">
    $(document).ready(function() { 
         
        var isshow = localStorage.getItem('isshow');
        if (isshow== null) {
            localStorage.setItem('isshow', 1); 
            // Show popup here
            setTimeout(function () {
                $("#myModalemail").modal('show');
    }, 5000);
           
        }
        });
        
    </script>


<script>
    $(document).ready(function() {

        setPrice();


    $('#package').change(function() {
        setPrice();
    });
    $('#multidevice').change(function() {
        setPrice();
    });
    $('#periods').change(function() {
        setPrice();
    });


    function setPrice(){
        var itemPrice = parseFloat($('#package').val());
        var qty = $('#multidevice').val();
        var time = $('#periods').val();

        let priceStepOne = 0 ;
        priceStepOne = itemPrice + ((itemPrice*79.42/100) * ( qty-1));


        if(time == 6)   priceStepOne = priceStepOne * 80/100;
        else if(time == 3)   priceStepOne = priceStepOne * 70/100;

        var txt = time+" Months "+$( "#package option:selected" ).text()+" Service for "+qty+" devices";

        $('#pricevalue').text(priceStepOne.toFixed(2)+" euro");
        return [priceStepOne.toFixed(2),txt];
    }




        $('#pricevalue').on('click',function(){
            var price = setPrice()[0];
            var txt = setPrice()[1];
            document.location = "/payments/"+price+"/"+txt;
        });

    });
</script>

<!--Jquer
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
 
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

<script type="text/javascript">  
    $(function () {
            $('#WAButton').floatingWhatsApp({
                phone: '+33783806412', //WhatsApp Business phone number
                headerTitle: 'Chat with us on WhatsApp!', //Popup Title
                popupMessage: 'Hello, how can we help you?', //Popup Message
                showPopup: true, //Enables popup display
                buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
                //headerColor: 'crimson', //Custom header color
                //backgroundColor: 'crimson', //Custom background button color
                position: "right" //Position: left | right
 
            });
        });
 </script>  
 y-->
</body>
</html>