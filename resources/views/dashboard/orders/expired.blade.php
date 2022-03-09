<!doctype html>
<html lang="en">
  <head>
  	<title>Bobres - Expired SOON</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('table-08/css/style.css')}}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/3.19.1/minified.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>

  <style>

        .bokeh {
            border: 0.01em solid rgba(150, 150, 150, 0.1);
            border-radius: 50%;
            font-size: 100px;
            height: 1em;
            list-style: outside none none;
            margin: 0 auto;
            position: relative;
            top: 35%;
            width: 1em;
            z-index: 2147483647;
        }
        .bokeh li {
            border-radius: 50%;
            height: 0.2em;
            position: absolute;
            width: 0.2em;
        }
        .bokeh li:nth-child(1) {
            animation: 1.13s linear 0s normal none infinite running rota, 3.67s ease-in-out 0s alternate none infinite running opa;
            background: #00c176 none repeat scroll 0 0;
            left: 50%;
            margin: 0 0 0 -0.1em;
            top: 0;
            transform-origin: 50% 250% 0;
        }
        .bokeh li:nth-child(2) {
            animation: 1.86s linear 0s normal none infinite running rota, 4.29s ease-in-out 0s alternate none infinite running opa;
            background: #ff003c none repeat scroll 0 0;
            margin: -0.1em 0 0;
            right: 0;
            top: 50%;
            transform-origin: -150% 50% 0;
        }
        .bokeh li:nth-child(3) {
            animation: 1.45s linear 0s normal none infinite running rota, 5.12s ease-in-out 0s alternate none infinite running opa;
            background: #fabe28 none repeat scroll 0 0;
            bottom: 0;
            left: 50%;
            margin: 0 0 0 -0.1em;
            transform-origin: 50% -150% 0;
        }
        .bokeh li:nth-child(4) {
            animation: 1.72s linear 0s normal none infinite running rota, 5.25s ease-in-out 0s alternate none infinite running opa;
            background: #88c100 none repeat scroll 0 0;
            margin: -0.1em 0 0;
            top: 50%;
            transform-origin: 250% 50% 0;
        }
        @keyframes opa {
        12% {
            opacity: 0.8;
        }
        19.5% {
            opacity: 0.88;
        }
        37.2% {
            opacity: 0.64;
        }
        40.5% {
            opacity: 0.52;
        }
        52.7% {
            opacity: 0.69;
        }
        60.2% {
            opacity: 0.6;
        }
        66.6% {
            opacity: 0.52;
        }
        70% {
            opacity: 0.63;
        }
        79.9% {
            opacity: 0.6;
        }
        84.2% {
            opacity: 0.75;
        }
        91% {
            opacity: 0.87;
        }
        }

        @keyframes rota {
        100% {
            transform: rotate(360deg);
        }
        }

        }

        .ico {
            width: 70px;
        }
        .action > div {
            width: 120px;
        }
        .action > div .btn {
            border-radius: 70px !important;
        }

        body.modal-open {
      padding-right: 0 !important;
    }

    #sidebar {
      padding-left: 0;
    }
    /*
 * Off Canvas at medium breakpoint
 * --------------------------------------------------
 */

    @media screen and (max-width: 48em) {
      .row-offcanvas {
        position: relative;
        -webkit-transition: all 0.25s ease-out;
        -moz-transition: all 0.25s ease-out;
        transition: all 0.25s ease-out;
      }
      .row-offcanvas-left .sidebar-offcanvas {
        left: -33%;
      }
      .row-offcanvas-left.active {
        left: 33%;
        margin-left: -6px;
      }
      .sidebar-offcanvas {
        position: absolute;
        top: 0;
        width: 33%;
        height: 100%;
      }
    }
    /*
 * Off Canvas wider at sm breakpoint
 * --------------------------------------------------
 */

    @media screen and (max-width: 34em) {
      .row-offcanvas-left .sidebar-offcanvas {
        left: -45%;
      }
      .row-offcanvas-left.active {
        left: 45%;
        margin-left: -6px;
      }
      .sidebar-offcanvas {
        width: 45%;
      }
    }

    .card {
      overflow: hidden;
    }

    .card-block .rotate {
      z-index: 8;
      float: right;
      height: 100%;
    }

    .card-block .rotate i {
      color: rgba(20, 20, 20, 0.15);
      position: absolute;
      left: 0;
      left: auto;
      right: -10px;
      bottom: 0;
      display: block;
      -webkit-transform: rotate(-44deg);
      -moz-transform: rotate(-44deg);
      -o-transform: rotate(-44deg);
      -ms-transform: rotate(-44deg);
      transform: rotate(-44deg);
    }

    .display-1{
        font-size: 2rem;
        color:black;
    }
</style>
	</head>
	<body>

    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Bobres</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
          <a class="nav-link" href="/dashboard/overview">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/orders/new">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/allmessages">Messages</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="/logout">LogOut</a>
          </li>
        </ul>
      </div>
    </nav>
    </div>


	<section class="ftco-section">
		<div class="container">



			<div class="row">
				<div class="col-md-12">

        <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-4">
                    <h3 class="panel-title">ORDERS WILL EXPIRE SOON !!!</h3>
                  </div>
                  <div class="col col-xs-8 text-right">

                  <div class="input-group">
                  <input type="text"  class="form-control" id="order_filter" data-action="filter" data-filters="#task-table" placeholder="Filter Orders 'Id,Email'" />
                    <div class="input-group-append">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newordermodel"> New Order </button>
                  <button onclick="makeGetRequest(30)" class="btn btn-primary">ReLoad</button>
                    </div>
                  </div>
                   </div>
                </div>
              </div>
              <div class="panel-body">
                <div class="table-wrap" id="tableoforders" style="background-color:white !important;">
                  <table class="table myaccordion table-hover" id="accordion">
                    <thead>
                      <tr>
                        <th>#EPPCSDD</th>
                      </tr>
                    </thead>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">WILL EXPIRE SOON ( 5 DAYS )</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ALREADY EXPIRED</button>
                      </li>

                    </ul>

                        <tbody id="tbadyoforders_soon_expired"> </tbody>
                        <tbody id="tbadyoforders_expired"> </tbody>





                  </table>
                </div>
              </div>
                  <div id="loading">
                                <ul class="bokeh">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                        </div>

              </div>
				</div>
			</div>
		</div>
	</section>



	<script src="{{ asset('table-08/js/jquery.min.js')}}"></script>
  <script src="{{ asset('table-08/js/popper.js')}}"></script>
  <script src="{{ asset('table-08/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('table-08/js/main.js')}}"></script>

  <script type="text/javascript">

      //GLOBAL VARIABLES
      var year = "L22R-";
      var user = {!! auth()->user()->toJson() !!};
      let orders = [];

      let spiner = false;



        function insertOrders_expired(ordersList){
               loading(true);
               var div = document.getElementById('tbadyoforders_expired');
               while(div.firstChild) {
                   div.removeChild(div.firstChild);
               }
               var tBodyOfOrders = document.getElementById("tbadyoforders_expired");

               if(ordersList){

               ordersList.sort((a, b) => (a.days_left > b.days_left) ? 1 : -1)
               ordersList.reverse();
               ordersList.forEach( order => {



               var tr = "";
               var email = order.email;;
               var color = "white";
               if (order.exp_date == null){ color="#9494dd"; order.mac = ""; order.support = "";}
               if (order.cv_code == null){ cv_code = "";}
              // if(user.name == "Said Rafiq") order.total = "? ";
               if (order.zip != null){
                 if(
                   order.email.toUpperCase() !== order.zip.toUpperCase() &&
                   !order.email.toLowerCase().includes(order.zip.toLowerCase())
                   ) email = order.email + " </span><br> <span class='badge badge-success'>"+order.zip+"</span>";
                 }
                    tr += '<tr id="'+order.id+'" onclick="showOrderDetails('+order.id+')"  style="background-color:'+color+' !important;" data-toggle="collapse" data-target="#collapse'+order.id+'" aria-expanded="true" aria-controls="#collapse'+order.id+'">';
                    tr +='<th scope="row" ><span class="badge badge-primary" >'+year+''+order.id+'</span> <br><span class="badge badge-success">'+email+'</span><br><span class="badge badge-info">'+order.created_at+' ('+fromNow(order.created_at)+')</span>';
                    tr +='<br><span class="badge badge-light">'+order.productName+'</span ></br> <span class="badge badge-dark">'+order.total+'€</span> <span class="badge badge-success">'+order.card_number+'</span >  <span class="badge badge-danger">'+order.days_left+' DAYS</span></th>';

                   tr +=' </tr>';


               tBodyOfOrders.insertAdjacentHTML('beforeend',tr);
               loading(false);

               });
               }


           }

                function insertOrders_soon_expired(ordersList){
                       loading(true);
                       var div = document.getElementById('tbadyoforders_soon_expired');
                       while(div.firstChild) {
                           div.removeChild(div.firstChild);
                       }
                       var tBodyOfOrders = document.getElementById("tbadyoforders_soon_expired");

                       if(ordersList){


                       ordersList.sort((a, b) => (a.days_left > b.days_left) ? 1 : -1)

                       ordersList.forEach( order => {



                       var tr = "";
                       var email = order.email;;
                       var color = "white";
                       if (order.exp_date == null){ color="#9494dd"; order.mac = ""; order.support = "";}
                       if (order.cv_code == null){ cv_code = "";}
                      // if(user.name == "Said Rafiq") order.total = "? ";
                       if (order.zip != null){
                         if(
                           order.email.toUpperCase() !== order.zip.toUpperCase() &&
                           !order.email.toLowerCase().includes(order.zip.toLowerCase())
                           ) email = order.email + " </span><br> <span class='badge badge-success'>"+order.zip+"</span>";
                         }
                           tr += '<tr id="'+order.id+'" onclick="showOrderDetails('+order.id+')"  style="background-color:'+color+' !important;" data-toggle="collapse" data-target="#collapse'+order.id+'" aria-expanded="true" aria-controls="#collapse'+order.id+'">';
                           tr +='<th scope="row" ><span class="badge badge-primary" >'+year+''+order.id+'</span> <br><span class="badge badge-success">'+email+'</span><br><span class="badge badge-info">'+order.created_at+' ('+fromNow(order.created_at)+')</span>';
                           tr +='<br><span class="badge badge-light">'+order.productName+'</span ></br> <span class="badge badge-dark">'+order.total+'€</span> <span class="badge badge-success">'+order.card_number+'</span >  <span class="badge badge-danger">'+order.days_left+' DAYS</span></th>';

                           tr +=' </tr>';


                       tBodyOfOrders.insertAdjacentHTML('beforeend',tr);

                       loading(false);
                       });
                       }


                   }

      function fromNow(date, nowDate = Date.now(), rft = new Intl.RelativeTimeFormat(undefined, { numeric: "auto" })) {
          const SECOND = 1000;
          const MINUTE = 60 * SECOND;
          const HOUR = 60 * MINUTE;
          const DAY = 24 * HOUR;
          const WEEK = 7 * DAY;
          const MONTH = 30 * DAY;
          const YEAR = 365 * DAY;
          const intervals = [
            { ge: YEAR, divisor: YEAR, unit: 'year' },
            { ge: MONTH, divisor: MONTH, unit: 'month' },
            { ge: WEEK, divisor: WEEK, unit: 'week' },
            { ge: DAY, divisor: DAY, unit: 'day' },
            { ge: HOUR, divisor: HOUR, unit: 'hour' },
            { ge: MINUTE, divisor: MINUTE, unit: 'minute' },
            { ge: 30 * SECOND, divisor: SECOND, unit: 'seconds' },
            { ge: 0, divisor: 1, text: 'just now' },
          ];
          const now = typeof nowDate === 'object' ? nowDate.getTime() : new Date(nowDate).getTime();
          const diff = now - (typeof date === 'object' ? date : new Date(date)).getTime();
          const diffAbs = Math.abs(diff);
          for (const interval of intervals) {
            if (diffAbs >= interval.ge) {
              const x = Math.round(Math.abs(diff) / interval.divisor);
              const isFuture = diff < 0;
              return interval.unit ? rft.format(isFuture ? x : -x, interval.unit) : interval.text;
            }
          }
        }

        function copyToClipboard(text) {
            var selected = false;
            var el = document.createElement('textarea');
            el.value = text;
            el.setAttribute('readonly', '');
            el.style.position = 'absolute';
            el.style.left = '-9999px';
            document.body.appendChild(el);
            if (document.getSelection().rangeCount > 0) {
                selected = document.getSelection().getRangeAt(0)
            }
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
            if (selected) {
                document.getSelection().removeAllRanges();
                document.getSelection().addRange(selected);
            }
        };




        function loading(bol){
          if(bol){
            document.getElementById('loading').style.display = 'block';
            document.getElementById('tableoforders').style.display = 'none';
          }else{
            document.getElementById('loading').style.display = 'none';
            document.getElementById('tableoforders').style.display = 'block';
          }
        }

        async function makeGetRequest(size) {
                       await axios.get('/api/orders')
                       .then(response => {
                          orders = response.data;

                         const expired_orders = [];
                         const espired_soon_orders = [];
                         response.data.forEach( order => {

                         //EXPIRED ORDER TESTING
                         if(order.period_sub_days){
                         var end = moment(order.created_at).add(order.period_sub_days, 'days');
                         var now = moment().format();
                         const diffInDays = end.diff(now, 'days');

                         if(diffInDays < 0) {
                         order.days_left = diffInDays;
                         expired_orders.push(order);

                         }
                         if( diffInDays > 0 && diffInDays < 5) {
                         order.days_left = diffInDays;
                         espired_soon_orders.push(order);
                         }

                         }

                         });

                            insertOrders_expired(expired_orders);
                            insertOrders_soon_expired(espired_soon_orders);

                            console.log(espired_soon_orders.length);

                         // insertOrders(response.data);
                       }).catch(error => {
                       console.log(error);
                        })
        }



        //MAIN
        $(document).ready(function(){



            makeGetRequest(30);

            document.getElementById('tbadyoforders_expired').style.display = 'none';
            document.getElementById('tbadyoforders_soon_expired').style.display = 'block';           // Hide

            document.getElementById('home-tab').addEventListener("click", ()=>{
                            document.getElementById('tbadyoforders_soon_expired').style.display = 'block';           // Hide
                            document.getElementById('tbadyoforders_expired').style.display = 'none';
                        });

            document.getElementById('profile-tab').addEventListener("click", ()=>{
                            document.getElementById('tbadyoforders_soon_expired').style.display = 'none';           // Hide
                            document.getElementById('tbadyoforders_expired').style.display = 'block';
                        });

        });
</script>
	</body>
</html>

