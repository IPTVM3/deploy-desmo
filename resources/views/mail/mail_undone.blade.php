

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--LOGO-->
  <link rel="icon" href="{{asset('img/'.\App\Store::first()->logo)}}">
  <link rel="stylesheet" href="{{ asset('iptv_update/css/bootstrap.min.css') }} ">
  <title>IPTVM3U System</title>
</head>
<body>
  
  
<div class="container text-center"> 
    <a href="#." title="Logo" class="logo scroll"><img style="width: 100px;" src="https://www.iptvm3u.frm/iptv_update/images/logo_dark_up.png" class="logo-dark" alt="logo">
    
    </a>
  <br><br><br>
  
@if ($local == 'ES') 

Estimado cliente, este es el equipo de IPTVM3U<br>
Recibimos su pago por la suscripción a iptv, necesitamos que complete este formulario para que podamos generarle la suscripción a iptv.<br>
<br>
<a href="{{route('iptv.orders.steps',$order)}}">haga clic aquí para completar el formulario</a><br>
Atentamente<br>
Equipo de IPTVM3U


@elseif ($local == 'DE')  
 
Sehr geehrter Kunde, dies ist das IPTVM3U-Team.<br>
Wir haben Ihre Zahlung für das IPTV-Abonnement erhalten. Sie müssen dieses Formular ausfüllen, damit wir Ihnen das IPTV-Abonnement erstellen können.<br>
<br>
<a href="{{route('iptv.orders.steps',$order)}}">Klicken Sie hier, um das Formular auszufüllen</a><br>
Freundliche Grüße<br>
IPTVM3U Team<br>

@else 
 
dear customer , this is the IPTVM3U team.<br>
We got your payment for the iptv subscription ,  we need you to complete this form  so we can generate you the iptv subscription.<br>
<br>
<a href="{{route('iptv.orders.steps',$order)}}">click here to complete the form </a><br>
Best regards <br>
IPTVM3U team <br>
 

@endif



</body>
</html>