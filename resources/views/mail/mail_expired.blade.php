


@if ($local == 'ES')

Hola, este es el equipo de IPTV de Lordly. <br>
Estamos muy contentos de que haya elegido nuestra empresa <br>
Su suscripción actual a IPTV: <br> <br>
 NÚMERO DE PEDIDO: <b> {{$id}} </b> <br>
 CORREO ELECTRÓNICO: <b> {{$email}} </b> <br>
 SUSCRITO EN: <b> {{$created_at}} </b> <br>
 EXPIRÓ EL: <b> {{$expired_at}} </b> <br>
 MONTO PAGADO: <b> {{$importe_pagado}} </b> <br> <br>

 Está a punto de caducar después de <b>  {{$days_left}} </b> días <br>
Si está interesado en <b> ampliar </b> el servicio, aquí están todas las ofertas que ofrecemos: <br> <br>

Servicio premium de 1 año por 59 € (UN DISPOSITIVO): <a href = "https://www.re-cod.com/en/lordly/payments?price=59.98&txt=L22R-{{$id}} Extender a 1 año Servicio Premium&clientid={{$client_id}} "> Pago LINK </a> <br>
Servicio premium de 2 años por 99 € (DOS DISPOSITIVOS): <a href = "https://www.re-cod.com/en/lordly/payments?price=99.98&txt=L22R-{{$id}} Extender a 1 año Servicio Premium (DOS DISPOSITIVOS)&clientid={{$client_id}} "> Payment LINK </a> <br>
Servicio premium de 6 meses por 48 €: <a href = "https://www.re-cod.com/en/lordly/payments?price=48.99&txt=L22R-{{$id}} Extienda a servicio premium de 6 meses&clientid={{$client_id}} "> Pago LINK </a> <br>
3 meses de servicio premium por 39 €: <a href = "https://www.re-cod.com/en/lordly/payments?price=39.97&txt=L22R-{{$id}} extender a 3 meses de servicio premium&clientid={{$client_id}} "> Pago LINK </a> <br>
<br> <br>
¡O puede visitar nuestro sitio web para obtener todas las actualizaciones! <br>
<br> Www.lordly-iptv <br>
<br> <br>
Si tiene algún problema o pregunta, puede contactarnos, estaremos encantados de ayudarle: <br>
<br>
Cuentas de Whatsapp: <a href="https://www.lordly-iptv/en/support"> Aquí </a> <br>
Correo electrónico: iptv21m3u@gmail.com <br>
saludos <br>

@elseif ($local == 'DE') 

Hallo, das ist das IPTVM3U-Team.<br>
Wir freuen uns sehr, dass Sie sich für unser Unternehmen entschieden haben<br>
Ihr aktuelles IPTV-Abonnement:<br><br>
 BESTELLNUMMER : <b>{{$id}}</b> <br>
 E-MAIL : <b>{{$email}}</b> <br>
 ABONNIERT BEI : <b>{{$created_at}}</b> <br>
 ABGELAUFEN AM: <b>{{$expired_at}}</b> <br>
 BEZAHLTER BETRAG: <b>{{$paid_amount}}</b> <br><br>

 Läuft nach <b>+{{ $days_left }}</b> Tagen ab<br>
Wenn Sie daran interessiert sind, den Service <b>zu erweitern</b> , finden Sie hier alle Angebote, die wir anbieten: <br><br>

1 Jahr Premium-Service für 59€ (EIN GERÄT): <a href="https://www.re-cod.com/en/lordly/payments?price=59.98&txt=L22R-{{$id}} Auf 1 Jahr verlängern Premium Service&clientid={{$client_id}}">Zahlungs-LINK </a><br>
2 Jahre Premium-Service für 99€ (ZWEI GERÄTE): <a href="https://www.re-cod.com/en/lordly/payments?price=99.98&txt=L22R-{{$id}} Auf 1 Jahr verlängern Premium-Dienst (ZWEI GERÄTE)&clientid={{$client_id}}">Zahlungs-LINK </a><br>
6 Monate Premium Service für 48€: <a href="https://www.re-cod.com/en/lordly/payments?price=48.99&txt=L22R-{{$id}} Verlängerung auf 6 Monate Premium Service&clientid={{$client_id}}">Zahlungs-LINK </a><br>
3 Monate Premium-Service für 39€: <a href="https://www.re-cod.com/en/lordly/payments?price=39.97&txt=L22R-{{$id}} Verlängerung auf 3 Monate Premium-Service&clientid={{$client_id}}">Zahlungs-LINK </a><br>
<br><br>
Oder besuchen Sie unsere Website, um alle neuen Updates zu erhalten! <br>
<br>Www.lordly-iptv<br>
<br><br>
Bei Problemen oder Fragen können Sie uns kontaktieren, wir unterstützen Sie sehr gerne:<br>
<br>
WhatsApp-Konten: <a href="https://www.lordly-iptv/en/support">Hier</a><br>
E-Mail: iptv21m3u@gmail.com<br>
Grüße<br>

@else 

Hello, This Is The IPTVM3U Team.<br>
We are very happy that you choosed our company<br>
Your current IPTV subscription:<br><br>
 ORDER NUMBER : <b>{{$id}}</b> <br>
 EMAIL : <b>{{$email}}</b> <br>
 SUBSCRIBED AT : <b>{{$created_at}}</b> <br>
 EXPIRED AT: <b>{{$expired_at}}</b> <br>
 PAID AMOUNT: <b>{{$paid_amount}}</b> <br><br>

 Is about to expire after <b>+{{ $days_left }}</b> days<br>
If You Are Interested about <b>Extending</b> the service , here is all the offers that we provide : <br><br>

1 Year Premium Service For 59€ (ONE DEVICE): <a href="https://www.re-cod.com/en/lordly/payments?price=59.98&txt=L22R-{{$id}} Extend To 1 Year Premium Service&clientid={{$client_id}}">Payment LINK </a><br>
2 Year Premium Service For 99€ (TWO DEVICES): <a href="https://www.re-cod.com/en/lordly/payments?price=99.98&txt=L22R-{{$id}} Extend To 1 Year Premium Service (TWO DEVICES)&clientid={{$client_id}}">Payment LINK </a><br>
6 Months Premium Service For 48€: <a href="https://www.re-cod.com/en/lordly/payments?price=48.99&txt=L22R-{{$id}} Extend To 6 Months Premium Service&clientid={{$client_id}}">Payment LINK </a><br>
3 Months Premium Service For 39€: <a href="https://www.re-cod.com/en/lordly/payments?price=39.97&txt=L22R-{{$id}} Extend To 3 Months Premium Service&clientid={{$client_id}}">Payment LINK </a><br>
<br><br>
Or you can visit our website to get all the new updates ! <br>
<br>Www.lordly-iptv<br>
<br><br>
If You Have Any Problems Or Questions , you can Contact Us , we will be very happy to support you :<br>
<br>
Whatsapp Accounts :  <a href="https://www.lordly-iptv/en/support">Here</a><br>
Email :  iptv21m3u@gmail.com<br>
regards<br>


@endif

 
