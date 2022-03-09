<!doctype html>
<html lang="en">
  <head>
  	<title>Bobres - Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('table-08/css/style.css')}}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/3.19.1/minified.min.js"></script>
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
   <style>


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


</style>
	</head>
	<body>


    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="float:left !important;">
 
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
            <a class="nav-link" href="/dashboard/orders/expired">Expired SOON !</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/allmessages">Messages</a>
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

              <div class="panel-body" >


        <div class="row mb-3">
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-success">
              <div class="card-block bg-success">
                <div class="rotate">
                  <i class="fa fa-user fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Today</h6>
                <h1 class="display-1" id="todayOrders"></h1>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-danger">
              <div class="card-block bg-danger">
                <div class="rotate">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <h6 class="text-uppercase">Yestrday</h6>
                <h1 class="display-1" id="lastDayOrders"></h1>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-info">
              <div class="card-block bg-info">
                <div class="rotate">
                  <i class="fa fa-twitter fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Today</h6>
                <h1 class="display-1" id="today_visitor"></h1>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-warning">
              <div class="card-block bg-warning">
                <div class="rotate">
                  <i class="fa fa-share fa-5x"></i>
                </div>
                <h6 class="text-uppercase">Yestrday</h6>
                <h1 class="display-1"  id="yestardy_visitor"></h1>
              </div>
            </div>
          </div>
        </div>

              </div>
                  <div id="loading">
                     <ul class="bokeh">
                      <li></li>
                      <li></li>
                       <li></li>
                      </ul>
                   </div>
        <!--/row-->
        <div id="tableoforders"></div>

            <div id="chars_dev">
        <div class="row">
            <div class="col-7">
            <div class="form-group ">
                <label for="exampleFormControlSelect2">Recieved Amount For Each Day Group By Countries</label>

                <div class="input-group input-daterange">
                    <input type="text" class="form-control" value="2022-01-01"  id="selectamount_recieved_by_countrys_datestart">
                    <div class="input-group-addon">to</div>
                    <input type="text" class="form-control" value="2022-01-15"  id="selectamount_recieved_by_countrys_dateend">
                    <button   class="btn btn-success" onclick="getRecievedAmountByCountry()" >Check</button>
                </div>
            </div>
          <canvas id="pie-chart-api-byday" width="800" height="450"></canvas>
            </div>

            <div class="col-5">
                <canvas id="pie-chart" width="500" height="450"></canvas>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-5">
             <canvas id="bar-chart" width="500" height="450"></canvas>

          </div>
          <div class="col-7">
              <canvas id="doughnut-chart" width="800" height="450"></canvas>

          </div>
        </div>

            </div>
        <!--/row-->



              <div class="panel-footer" style="float:right;">

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
      let orders = [];

      let spiner = false;



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
              document.getElementById('chars_dev').style.display = 'none';
          }else{
            document.getElementById('loading').style.display = 'none';
              document.getElementById('tableoforders').style.display = 'block';
              document.getElementById('chars_dev').style.display = 'block';
          }
        }

        async function makeGetRequest() {
                       await axios.get('/api/overview')
                       .then(response => {
                         getBarCharts(response.data.orders);
                         getPieCharts(response.data.country);
                           getRecievedAmountByCountry();
                         getBarVerticalCharts(response.data.typeorders);
                         document.getElementById('todayOrders').innerHTML = response.data.todayOrders.toFixed(2)+'€ <br> '+response.data.todayOrders_count+' Orders' ;
                         document.getElementById('lastDayOrders').innerHTML = response.data.lastDayOrders.toFixed(2)+'€ <br> '+response.data.lastDayOrders_count+' Orders' ;

                         document.getElementById('today_visitor').innerHTML = response.data.today_visitor+' Visitor' ;
                         document.getElementById('yestardy_visitor').innerHTML = response.data.yestardy_visitor+' Visitor' ;
                        loading(false);
                       }).catch(error => {
                       console.log(error)
                        })
        }

        function getBarVerticalCharts(typeorders){
                     let labels = [];
                     let counts = [];
                     typeorders.forEach( e=>{

                        labels.push(e.total+' €');
                        counts.push(e.numberoforders);


                     })

            new Chart(document.getElementById("doughnut-chart"), {
                type: 'doughnut',
                data: {
                  labels: labels,
                  datasets: [
                    {
                      label: "Total Amount (€)",
                      backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e85cd", "#8e5ea7","#3cbc9f","#e8crb9","#c45950"],
                       data: counts
                    }
                  ]
                },
                options: {
                  title: {
                    display: true,
                    text: 'Group Orders By Price Of Item'
                  }
                }
            });

        }

        function getPieCharts(country){
            let labels = [];
             let counts = [];
             country.forEach( e=>{

                labels.push(e.card_number);
                counts.push(e.totalamount);


             })

        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
              labels: labels,
              datasets: [{
                label: "Total Amount",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e85cd", "#8e5ea7","#3cbc9f","#e8crb9","#c45950"],
                data: counts
              }]
            },
            options: {
              title: {
                display: true,
                text: 'Top 10 Countries Of This Month'
              }
            }
        });

        }


        async function getRecievedAmountByCountry(){

             var dataStart = $('#selectamount_recieved_by_countrys_datestart').val();
             var dateEnd= $('#selectamount_recieved_by_countrys_dateend').val();
            loading(true);
            await axios.get('/api/overview/getTopCountriesRecievedAmountByDay/'+dataStart+'/'+dateEnd)
                .then(response => {
                    let country = response.data.country_BY_TODAY;
                    let labels = [];
                    let counts = [];
                    country.forEach( e=>{

                        labels.push(e.card_number);
                        counts.push(e.totalamount);


                    })

                    new Chart(document.getElementById("pie-chart-api-byday"), {
                        type: 'pie',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: "Total Amount",
                                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e85cd", "#8e5ea7","#3cbc9f","#e8crb9","#c45950"],
                                data: counts
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                text: 'Top 10 Countries BETWEEN '+dataStart+' AND '+dateEnd
                            }
                        }
                    });
                    loading(false);
                }).catch(error => {
                    console.log(error)
                })




        }



        function getBarCharts(orders){
             let labels = [];
             let amounts = [];
             orders.forEach( e=>{

                labels.push(e.months);
                amounts.push(e.sums.toFixed(1));


             })

            // Bar chart
            new Chart(document.getElementById("bar-chart"), {
            type: 'bar',
            data: {
              labels: labels,
               datasets: [
                {
                  label: "Amount (€)",
                  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2"],
                  data: amounts
                }
              ]
            },
            options: {
              legend: { display: false },
              title: {
                display: true,
                text: 'Total Amount By Months'
              }
            }
        });
        }



        //MAIN
        $(document).ready(function(){

            document.getElementById('chars_dev').style.display = 'none';
            makeGetRequest();
            //insertOrders(orders);


        });
</script>
	</body>
</html>

