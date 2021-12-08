<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--LOGO-->
  <link rel="icon" href="{{asset('img/'.\App\Store::first()->logo)}}">
  <link rel="stylesheet" href="{{ asset('iptv_update/css/bootstrap.min.css') }} ">
  <title>Bobres System</title>
</head>
<body>
  
  
<div class="container text-center">
  <a href="#." title="Logo" class="logo scroll"><img src="{{  asset('iptv_update/images/logo_dark.png') }}" class="logo-dark" alt="logo">
    
  </a>
  <br><br><br>
  <b>Hey dear customer , thank you for choosing us , we are very happy to make you our client starting from now !</b><br> 
  <b>Here is all the informations that you may need</b><br> 
<br><br>
 
* Email : <strong>{{ $email }}</strong><br>
* Order Id: <strong>{{ $order }}</strong><br>
* Amount : <strong>{{ $price }}</strong><br><br>

</div>
<strong>Now We Need Some Informations From You To Generate Your Subscription, So Please Tell Us What You Have After Reading The Text Below. </strong>
<br><br>
<strong>1) Which Device You Use ?<br><br>
  a- If You Have One Of those (Android Box, Amazon Fire Stick Or Any Android Device ) , It's Better To Install "IPTV SMARTERS PRO" Applications.<br><br>
  b- If You Have Any Apple Device Please Install "GSE IPTV" Applications.<br><br>
  c- If You Have Any Mag Device Please Add This Portal Url http://line.hi-ott.net:80/c/ To Your Mag Device, And Tell Us What Is The Mac Address Of Your Device ?<br><br>
  e- If You Have an Smart Tv With 'SMART IPTV' Application, Just Give Us The Mac Address ? </strong>
  <br><br>
  <hr> 

*** IF YOU HAVE ANY PROBLEM PLEASE CONTACT US ON WHATSAPP ***  <br>
https://www.bobres.co/en/support <br>

</body>
</html>