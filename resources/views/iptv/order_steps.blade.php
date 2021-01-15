
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="google-site-verification" content="TMke9839CMeHz5lagagBuWa3qE9OaV4GMwkHsfL5q14" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Bobres | @lang('order.title')</title> 
    <!-- Style Sheet -->

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    

</head>
<body >
 



<!--End Preloader-->

<!--Header Section-->
<style>
    .wizard {
margin: 20px auto;
background: #fff;
}

.wizard .nav-tabs {
position: relative;
margin: 40px auto;
margin-bottom: 0;
border-bottom-color: #e0e0e0;
}

.wizard > div.wizard-inner {
position: relative;
}

.connecting-line {
height: 2px;
background: #e0e0e0;
position: absolute;
width: 80%;
margin: 0 auto;
left: 0;
right: 0;
top: 50%;
z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
color: #555555;
cursor: default;
border: 0;
border-bottom-color: transparent;
}

span.round-tab {
width: 70px;
height: 70px;
line-height: 70px;
display: inline-block;
border-radius: 100px;
background: #fff;
border: 2px solid #e0e0e0;
z-index: 2;
position: absolute;
left: 0;
text-align: center;
font-size: 25px;
}
span.round-tab i{
color:#555555;
}
.wizard li.active span.round-tab {
background: #fff;
border: 2px solid #5bc0de;

}
.wizard li.active span.round-tab i{
color: #5bc0de;
}

span.round-tab:hover {
color: #333;
border: 2px solid #333;
}

.wizard .nav-tabs > li {
width: 25%;
}

.wizard li:after {
content: " ";
position: absolute;
left: 46%;
opacity: 0;
margin: 0 auto;
bottom: 0px;
border: 5px solid transparent;
border-bottom-color: #5bc0de;
transition: 0.1s ease-in-out;
}

.wizard li.active:after {
content: " ";
position: absolute;
left: 46%;
opacity: 1;
margin: 0 auto;
bottom: 0px;
border: 10px solid transparent;
border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
width: 70px;
height: 70px;
margin: 20px auto;
border-radius: 100%;
padding: 0;
}

.wizard .nav-tabs > li a:hover {
background: transparent;
}

.wizard .tab-pane {
position: relative;
padding-top: 50px;
}

.wizard h3 {
margin-top: 0;
}

@media( max-width : 585px ) {

.wizard {
width: 90%;
height: auto !important;
}

span.round-tab {
font-size: 16px;
width: 50px;
height: 50px;
line-height: 50px;
}

.wizard .nav-tabs > li a {
width: 50px;
height: 50px;
line-height: 50px;
}

.wizard li.active:after {
content: " ";
position: absolute;
left: 35%;
}
}
</style>



<div class="container">
    <h3>Please provide us your device informations.  </h3>
   
    <form action="{{ route('iptv.payments.success',$order->id) }}" method="get"  
        class="form">
    

        <div class="form-group">
            <label for="exampleInputEmail1">Order Number</label>
            <input type="number"  disabled class="form-control" id="inputPassword" placeholder="ID" value="{{ $order->id }}" name="id" required> 
          </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Your Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $order->email }}" required>
          <small id="emailHelp" class="form-text text-muted">You will get the activation code on this email</small>
        </div>
    

        <div class="form-group">
            <label for="exampleInputPassword1">Select your order </label><br>
            <input type="radio" class="form-check-input" name="optradio" value="1" required id="redio_m3u">  <b>M3u Link</b><br>
            <input type="radio" class="form-check-input" name="optradio" value="2"  required id="redio_mac_address"> <b>Portal (MAG device)</b><br>
            <input type="radio" class="form-check-input" name="optradio" value="3"  required id="redio_fuck">  <b>I don't know</b><br>
          </div>


          <div class="form-group"  style="display: none;" id="mac_address_input" >
            <label for="exampleInputEmail1">Mac Address <span style="color: red">*</span></label>
            <input type="text" class="form-control" id="inputPassword" placeholder="xx:xx:xx:xx:xx:xx"  name="mac_address"> 
          </div>
      
          <div style="display: none;" id="idont_know_div">
          
            
          <div class="form-group"  >
            <label class='control-label'>Select your device from the list or type the device name <span style="color: red">*</span></label>
            <select  class='form-control' id="type_select" name="type" require>
                <option disabled="disabled" selected="selected"   >@lang('iptv.choose_your_device')</option>
                @foreach($type as $index => $item)
                    <option value="{{$item['name']}}" id="type_{{$item['id']}}" >{{$item['name']}}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group"  style="display: block;" id="device_name_input" >
            <label for="exampleInputEmail1">Device Name <span style="color: red">*</span></label>
            <input type="text" class="form-control" id="input_name_device"  name="device_name" > 
          </div>

          <div class="form-group"  style="display: none;" id="input_mac_address_device_div" >
            <label for="exampleInputEmail1">Mac Address <span style="color: red">*</span></label>
            <input type="text" class="form-control" id="input_mac_address_device"  name="device_mac_address"  placeholder="xx:xx:xx:xx:xx:xx" > 
          </div>
        </div>
   
        <button type="submit" class="btn btn-success btn-block">Submit</button>
      </form>
 
</div>
         

    
 
<!--Footer End-->
 <!-- Latest compiled and minified JavaScript -->

 <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>

<script>
    $('#type_select').change(function (event) {

        let id = this.value; 
        var types = {!! json_encode($type) !!};

        /*
        let options = types.filter(e => {
            if (e.id == id) {
                return e.options;
            }
        });
        /=*/


        console.log(id);

        if(id == "MAG Device" || id == "Z Formuler" || id == "STB Application"){
            $('#input_mac_address_device_div').show()
            $('#device_name_input').hide()
        }else if(id == "Other Devices"){
            $('#device_name_input').show()
            $('#input_mac_address_device_div').hide()
        }else{ 
            $('#input_mac_address_device_div').hide()
            $('#device_name_input').hide()
        }

        /*
        $('#type_option').empty();
        if(options[0]){
            $('#type_option_form').show()
        }else{
            $('#type_option_form').hide()
        }
        options[0].options.map(e => {
            $('#type_option').append('<option value="' + e.name + '" >' + e.name + '</option>');
        })
        */


    });

    $('#redio_mac_address').click(function(event){
        $('#mac_address_input').show();
        $('#idont_know_div').hide();
    })
    $('#redio_m3u').click(function(event){
        $('#mac_address_input').hide();
        $('#idont_know_div').hide();
    })
    $('#redio_fuck').click(function(event){
        $('#mac_address_input').hide();
        $('#idont_know_div').show();
    })
</script>

</body>
</html>