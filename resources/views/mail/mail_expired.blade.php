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
  <a href="#." title="Logo" class="logo scroll"><img style="width: 100px;" src="https://www.bobres.com/iptv_update/images/logo_dark_up.png" class="logo-dark" alt="logo">
    
  </a>
  <br>   <br> 

  @if ($local == 'ES')  

  Hola, este es el equipo de Bobres. <br>
  Estamos muy contentos de que elija nuestra empresa <br>
  ¡Su suscripción Iptv está a punto de caducar o ya caducó! <br>
  Si está interesado en ampliar el servicio, aquí están todas las ofertas que ofrecemos: <br> <br>
  
  Oferta especial: <br>
  Prima de 1 año para 2 dispositivos: <br>
  https://www.bobres.com/en/payments/181 <br>
  <br><br>
  Un dispositivo: <br> 
  12 meses: bobres.com/en/payments/11 <br>
  6 meses: bobres.com/en/payments/31 <br>
  3 meses: bobres.com/en/payments/51 <br>
  1 mes: bobres.com/en/payments/161 <br>
  <br> <br>
  ¡O puede visitar nuestro sitio web para obtener todas las nuevas actualizaciones! <br>
  <br>
  Www.bobres.com <br>
  <br> <br>
  
  Si tiene algún problema o pregunta, puede contactarnos, estaremos encantados de ayudarle: <br>
  <br>
  Cuentas de Whatsapp: <br> +33 7 53 13 32 55 / +33 7 51 36 48 57 <br> <br>
  
  Correo electrónico: Bobres.contact@gmail.com <br>
  saludos <br>
  
@elseif ($local == 'DE') 

Hallo, das ist das Bobres-Team. <br>
Wir freuen uns sehr, dass Sie sich für unser Unternehmen entschieden haben
Ihr Iptv-Abonnement läuft bald ab oder ist bereits abgelaufen! <br>
Wenn Sie an einer Erweiterung des Dienstes interessiert sind, finden Sie hier alle Angebote, die wir anbieten: <br> <br>

Sonderangebot: <br>
1 Jahr Prämie für 2 Geräte: <br>
https://www.bobres.com/de/payments/181 <br>
<br><br>
Ein Gerät: <br>  
12 Monate: bobres.com/de/payments/11 <br>
6 Monate: bobres.com/de/payments/31 <br>
3 Monate: bobres.com/de/payments/51 <br>
1 Monat: bobres.com/de/payments/161 <br>
<br> <br>
Oder besuchen Sie unsere Website, um alle neuen Updates zu erhalten! <br>
<br>
Www.bobres.com <br>
<br> <br>

Wenn Sie Probleme oder Fragen haben, können Sie uns kontaktieren. Wir unterstützen Sie gerne: <br>
<br>
WhatsApp-Konten: <br> +33 7 53 13 32 55 / +33 7 51 36 48 57 <br> <br>

E-Mail: Bobres.contact@gmail.com <br>
Grüße <br>
 
@else 

Hello, This Is The Bobres Team.<br>
We are very happy that you choosed our company<br>
Your Iptv Subscription Is About To expire or it is already expired !<br>
If You Are Interested about Extending the service , here is all the offers that we provide : <br><br>

Special offer : <br>
1 year premium for 2 devices : <br>
https://www.bobres.com/en/payments/181<br>
<br><br>
One device  :<br>
12 months : bobres.com/en/payments/11<br>
6 months  : bobres.com/en/payments/31<br>
3 months  : bobres.com/en/payments/51<br>
1 months : bobres.com/en/payments/161<br>
<br><br>
Or you can visit our website to get all the new updates ! <br>
<br>
Www.bobres.com<br>
<br><br>

If You Have Any Problems Or Questions , you can Contact Us , we will be very happy to support you :<br>
<br>
Whatsapp Accounts :  <br> +33 7 53 13 32 55  / +33 7 51 36 48 57<br><br>

Email :     Bobres.contact@gmail.com<br>
regards<br>

@endif

 

</body>
</html>