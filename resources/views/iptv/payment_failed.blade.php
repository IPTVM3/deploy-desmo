<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oops! Payment failed<</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<style>
    .error {
  max-width: 350px;
  margin: 0 auto;
  background-color: #fff;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
  padding: 30px 0;
  text-align: center;
  margin-top:100px;
}
.error * {
  box-sizing: border-box;
}
.div-bg {
    padding: 20px 0px;
    margin-top: -30px;
    background-color:#e85a5a;
}


.error__circle {
    width: 80px;
    height: 80px;
    background-color: #fff;
    border-radius: 50%;
    text-align: center;
    line-height: 90px;
    margin: 0 auto;
    font-size: 36px;
    font-family: fantasy;
    color: #da1f1f;
}
.error__text {
    font-family: Arial;
    padding: 19px 15px;
}
.error__text--lg {
  padding: 8px 0;
  font-size: 24px;
  color: #ffffff;
}
.error__text--sm {
  color: #717171;
  font-size: 18px;
}
.error__btn {
  display: block;
  width: 80%;
  margin: 0 auto;
  height: 45px;
  line-height: 45px;
  border: none;
  background-color: #2772ef;
  text-align: center;
  color: #fff;
  text-decoration: none;
  font-family: Arial;
  margin-top: 25px;
}
.error__btn:hover {
  background-color: #2b60b9;
}
.error2{
color:#fff;
}


</style>
<div class="error">
<div class="div-bg">
  <div class="error__circle">!</div>
   <div class="error__text error__text--lg">oops! Payment failed</div>
   <div class="error2">Your Payment Could Not Processed</div>
  </div>
 
  <div class="error__text error__text--sm">please choose another payment method to complete payment process</div>
  <a class="error__btn" href="#"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Try Again</a>
</div>
</body>
</html>