

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--LOGO-->
  <link rel="icon" href="{{asset('img/'.\App\Store::first()->logo)}}">
  <link rel="stylesheet" href="{{ asset('iptv_update/css/bootstrap.min.css') }} ">
  <title>{{config('app.name')}} System</title>
</head>
<body>
  
  
<div class="container text-center"> 

 Question: <br>
 {{ $question }}
<br><br>

 Answer: <br>
 {{ $answer }}

 <br><br>
 <br>


 WHATSAPP: www.iptvm3u.fr/en/contact

</body>
</html>