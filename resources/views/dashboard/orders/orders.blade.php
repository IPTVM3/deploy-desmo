<!doctype html>
<html lang="en">
  <head>
  	<title>Bobres - Orders</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('table-08/css/style.css')}}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/3.19.1/minified.min.js"></script>
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
            <a class="nav-link" href="/dashboard/orders/expired">Expired SOON !</a>
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
 

                     <hr>

                      <div class="row mb-3">
                         <div class="col-xl-6 col-lg-12">
                           <div class="card card-inverse card-success">
                             <div class="card-block bg-success">
                               <div class="rotate">
                                 <i class="fa fa-user fa-5x"></i>
                               </div>
                               <h6 class="text-uppercase">Last Month</h6>
                               <h1 class="display-1" id="worker_last_month"></h1>
                             </div>
                           </div>
                         </div>
                         <div class="col-xl-6 col-lg-12">
                           <div class="card card-inverse card-danger">
                             <div class="card-block bg-danger">
                               <div class="rotate">
                                 <i class="fa fa-list fa-4x"></i>
                               </div>
                               <h6 class="text-uppercase">Current Month</h6>
                               <h1 class="display-1" id="worker_current_month"></h1>
                             </div>
                           </div>
                         </div>
                         </div>

 
                         <ul class="nav nav-pills mb-3 nav-fill" id="pills-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="pills-orders-tab" data-toggle="pill" href="#pills-orders" role="tab" aria-controls="pills-orders" aria-selected="true">All Orders</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-cases-tab" data-toggle="pill" href="#pills-cases" role="tab" aria-controls="pills-cases" aria-selected="false">Cases</a>
                          </li>
                          
                        </ul>

                        <br>

                        <div class="tab-content" id="pills-tabContent">
                        

                            <div class="tab-pane fade show active" id="pills-orders" role="tabpanel" aria-labelledby="pills-orders-tab">

                                  <div class="row">
                                    <div class="col-md-12">

                                      <div class="panel panel-default panel-table">
                                            <div class="panel-heading">
                                              <div class="row">
                                              
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
                                              <div class="table-wrap" id="tableoforders">
                                                <table class="table myaccordion table-hover" id="accordion">
                                                  <thead>
                                                    <tr>
                                                      <th>#EPPCSDD</th>
                                                    </tr>
                                                  </thead>

                                                  <tbody id="tbadyoforders">
                                                  </tbody>
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
                                              <div class="panel-footer" style="float:right;">
                                                <ul class="pagination">
                                                  <li class="page-item active"><a class="page-link" onclick="makeGetRequest(30)">30</a></li>
                                                  <li class="page-item "><a class="page-link"  onclick="makeGetRequest(50)">50</a></li>
                                                  <li class="page-item"><a class="page-link" onclick="makeGetRequest(100)">100</a></li>
                                                </ul>
                                                </div>
                                              
                                            
                                            
                                            </div>
                                      </div>

                                    </div>
                                  </div>
                            </div>

              
              
                            <div class="tab-pane fade" id="pills-cases" role="tabpanel" aria-labelledby="pills-cases-tab" >
              
                                   <div class="panel-body">
                                              <div class="table-wrap" id="tableofcases">
                                                <table class="table myaccordion table-hover" id="accordion">
                                                  <thead>
                                                    <tr>
                                                      <th>#EPPCSDD</th>
                                                    </tr>
                                                  </thead>

                                                  <tbody id="tbadyofcases">
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                             
                            </div>
   
                          </div>


		</div>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel"></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
      <div class="form-group">
          <input type="text" class="form-control" id="model-id" disabled="" >
      </div>
      <div class="form-group" style="display:none;" >
          <label for="recipient-name" class="col-form-label">SUPPORT</label>
          <input type="text" class="form-control" id="support" disabled="" value="{{ Auth::user()->name }}" >
      </div>

      <div class="form-group">
          <input type="email" class="form-control" id="model-email"  name="email" disabled="">
      </div>

        <div class="form-group" >
          <div id="orderdetails">

          </div>
      </div>

			<div class="card mt-3 tab-card">
        <div class="card-header tab-card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">M3U LINK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">PORTAL URL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">MORE</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
            <h5 class="card-title">M3U LINK</h5>
            <div class="form-group">
             <label for="message-text" class="col-form-label">URL </label>
             <input type="url" class="form-control" name="m3u" id="m3u">
           </div>
          </div>
          <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
            <h5 class="card-title">PORTAL DEVICE</h5>
            <div class="form-group">
              <label for="message-text" class="col-form-label">MAC Address</label>
              <input type="text" class="form-control" name="mac" id="mac">
            </div>
            <div class="form-group">
            <label for="message-text" class="col-form-label">Portal URl</label>
            <select class="form-control" id="portal" name="portal">
                <option value="http://mag.mytv-gold.com/c/">http://mag.mytv-gold.com/c/</option> 
                <option value="http://mag.crystalott.net/c/">http://mag.crystalott.net/c/</option>
                <option value="http://promaxhd.com:8080/c/">http://promaxhd.com:8080/c/</option>
                <option value="http://dream4ktv.info:2082/c">http://dream4ktv.info:2082/c</option>
                <option value="http://link4tv.info:2082/c">http://link4tv.info:2082/c</option>
                <option value="http://king365-tv.cf:2103/c/">http://king365-tv.cf:2103/c/</option>
            </select>
          </div>
          </div>
          <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
          <div class="list-group list-group-horizontal">
            <button type="button"  onclick="deleteOrder()" class="btn btn-danger btn-large">Delete Order</button>
            <button type="button" onclick="notifyCustomer()" class="btn btn-dark">Notify Customer</button>
            <button type="button"  onclick="orderCompleted()" class="btn btn-success">Order Completed</button>
          </div>



        </div>
      </div>
			</div>
			<div class="modal-footer">
      <button type="button" onclick="sendOrder()" class="btn btn-primary">Send Order</button>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</div>
		</div>
		</div>
	</div>


        <!-- Notification Model -->
        <div class="modal fade" id="notificationmodel" tabindex="-1" role="dialog" aria-labelledby="notificationmodelLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                 <div class="col-12">
                           <div class="card">
                               <div class="card-body d-flex justify-content-between">
                                   <div class="content d-flex align-items-center justify-content-between">
                                       <div class="ico">
                                           <img class="img-fluid" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSItNCAwIDUxMSA1MTEuOTk5NjQiIHdpZHRoPSI1MTJweCI+PHBhdGggZD0ibTQ1NS43MjI2NTYgMjgwLjQxNDA2MmMwIDEyMy41MDM5MDctMTAwLjEzMjgxMiAyMjMuNjI1LTIyMy42MzY3MTggMjIzLjYyNS0zMC4yOTY4NzYgMC01OS4xNzk2ODgtNi4wMjM0MzctODUuNTE5NTMyLTE2Ljk0NTMxMi03Mi4wMDM5MDYtMjkuODI0MjE5LTEyNS4wMzkwNjItOTYuMTc1NzgxLTEzNi4wMDM5MDYtMTc1Ljk0NTMxMi0xLjM5MDYyNS0xMC4wNDI5NjktMi4xMDE1NjItMjAuMzA4NTk0LTIuMTAxNTYyLTMwLjczNDM3NiAwLTEyMy41MTU2MjQgMTAwLjEyMTA5My0yMjMuNjM2NzE4IDIyMy42MjUtMjIzLjYzNjcxOCAxMjMuNTAzOTA2IDAgMjIzLjYzNjcxOCAxMDAuMTIxMDk0IDIyMy42MzY3MTggMjIzLjYzNjcxOHptMCAwIiBmaWxsPSIjOTM3ZGUyIi8+PHBhdGggZD0ibTIzMi4wODU5MzggNTYuNzc3MzQ0Yy0xMS44MjQyMTkgMC0yMy40Mjk2ODguOTI1NzgxLTM0Ljc1NzgxMyAyLjY5MTQwNiAxMDcgMTYuNjk5MjE5IDE4OC44ODI4MTMgMTA5LjI1MzkwNiAxODguODgyODEzIDIyMC45NDUzMTIgMCAxMTEuNjc1NzgyLTgxLjg3NSAyMDQuMjI2NTYzLTE4OC44NjMyODIgMjIwLjkyOTY4OCAxMS4zMjAzMTMgMS43NjU2MjUgMjIuOTE3OTY5IDIuNjk1MzEyIDM0LjczODI4MiAyLjY5NTMxMiAxMjMuNTAzOTA2IDAgMjIzLjYzNjcxOC0xMDAuMTIxMDkzIDIyMy42MzY3MTgtMjIzLjYyNSAwLTEyMy41MTU2MjQtMTAwLjEzMjgxMi0yMjMuNjM2NzE4LTIyMy42MzY3MTgtMjIzLjYzNjcxOHptMCAwIiBmaWxsPSIjNzU3MGQ2Ii8+PHBhdGggZD0ibTQ4My42NDA2MjUgMjYzLjg3ODkwNi0xMjcuNzAzMTI1IDg0LjU2MjVjLTkuMDk3NjU2IDYuMDI3MzQ0LTIwLjExNzE4OCA4LjQxNzk2OS0zMC44OTA2MjUgNi42OTUzMTMtMTAuNzk2ODc1LTEuNzE4NzUtMjEuODQzNzUuNjQwNjI1LTMwLjk2NDg0NCA2LjY3OTY4N2wtMTcuMDg5ODQzIDExLjMyNDIxOS05NS43MDcwMzItMTQxLjA3NDIxOSAyMy40ODA0NjktMTAxLjQ0MTQwNmMxLjgyODEyNS03Ljg5NDUzMSAyLjczMDQ2OS0xNS44OTg0MzggMi43MzA0NjktMjMuODcxMDk0IDAtMjAuNjI1LTYuMDMxMjUtNDAuOTg0Mzc1LTE3LjYwMTU2My01OC40NjA5MzctMi44NDM3NS00LjI5Njg3NS00LjIwMzEyNS05LjE2MDE1Ny00LjIwMzEyNS0xMy45NTcwMzEgMC04LjIwNzAzMiAzLjk4MDQ2OS0xNi4yNTM5MDcgMTEuMzM1OTM4LTIxLjEyNSA5LjkxNDA2Mi02LjU3MDMxMyAyMy4wNTQ2ODctNS4zNDc2NTcgMzEuNTg5ODQ0IDIuOTI5Njg3bDE1LjIxMDkzNyAxNC43MzQzNzVjMTcuMzk4NDM3IDE2Ljg3ODkwNiAzMC44MTY0MDYgMzcuNDI5Njg4IDM5LjI0NjA5NCA2MC4xNTYyNWw4LjI1IDIyLjIwNzAzMSA4NC45NDE0MDYtNTYuMTIxMDkzYzEzLjU2NjQwNi04Ljk4MDQ2OSAzMS45MjE4NzUtNS4wNTQ2ODggNDAuNTgyMDMxIDguODM5ODQzIDguMzU1NDY5IDEzLjM4NjcxOSA0LjA2NjQwNiAzMS4wNzQyMTktOS4wOTc2NTYgMzkuNzg5MDYzLS4xNjAxNTYuMTA1NDY4LS4xNjc5NjkuMjczNDM3LS4xMTcxODguNDAyMzQ0LjA3NDIxOS4xMzY3MTguMjM0Mzc2LjIzNDM3NC40MTQwNjMuMTYwMTU2IDMuMzU1NDY5LTEuMjk2ODc1IDYuODY3MTg3LTEuOTIxODc1IDEwLjM1MTU2My0xLjkyMTg3NSA1LjU1ODU5MyAwIDExLjA3MDMxMiAxLjYwMTU2MiAxNS43ODUxNTYgNC42NDg0MzcgMy4yNDYwOTQgMi4xMDE1NjMgNi4xMjEwOTQgNC44OTQ1MzIgOC4zOTQ1MzEgOC4zMjAzMTMgNC4zODI4MTMgNi42MjUgNS42OTE0MDYgMTQuMzk0NTMxIDQuMjU3ODEzIDIxLjYxMzI4MS0yLjI1MzkwNyAxMS4zNzg5MDYtMTAuNTE5NTMyIDE3LjIzODI4MS0xMi4xNDQ1MzIgMTguMzQzNzUtLjI3NzM0NC4xOTE0MDYtLjM1MTU2Mi41NzAzMTItLjE2MDE1Ni44NTkzNzUgMCAuMDExNzE5LjAxMTcxOS4wMTk1MzEuMDIzNDM4LjAxOTUzMS4xNzk2ODcuMjU3ODEzLjU1MDc4MS4zMzIwMzIuODE2NDA2LjE2MDE1NiAyLjMxMjUtLjU2MjUgNC42Njc5NjgtLjgyODEyNCA3LjAyNzM0NC0uODI4MTI0IDUuNzUgMCAxMS40NzI2NTYgMS42MzY3MTggMTYuMzM1OTM3IDQuNzM0Mzc0IDMuMjg5MDYzIDIuMTAxNTYzIDYuMTk5MjE5IDQuODgyODEzIDguNDQ5MjE5IDguMjg5MDYzIDguODMyMDMxIDEzLjMzMjAzMSA1LjE3OTY4NyAzMS4zMDQ2ODctOC4xNjQwNjMgNDAuMTM2NzE5LS4zMjgxMjUuMjIyNjU2LS42NTYyNS40NDUzMTItLjk4NDM3NS42NTYyNS0uMTkxNDA2LjE1MjM0NC0uMjQ2MDk0LjM5NDUzMS0uMTQ4NDM3LjU2NjQwNi4wMTk1MzEuMDM5MDYyLjA2MjUuMDgyMDMxLjEwNTQ2OS4xMDU0NjkuMTQ4NDM3LjExNzE4Ny4zODI4MTIuMTI1LjU3NDIxOC0uMDIzNDM4IDguMjg5MDYzLTIuODI0MjE5IDE3LjMxMjUtMS41MzkwNjIgMjQuNTc0MjE5IDMuMTY0MDYzIDMuMzQzNzUgMi4xNDQ1MzEgNi4zMDQ2ODcgNS4wMzEyNSA4LjY0ODQzNyA4LjU3ODEyNSA4LjgzMjAzMiAxMy4zNDc2NTYgNS4xODM1OTQgMzEuMzE2NDA2LTguMTQ4NDM3IDQwLjE0ODQzN3ptMCAwIiBmaWxsPSIjZmRkN2JkIi8+PHBhdGggZD0ibTI3OC4yMTQ4NDQgMzk5LjkxNDA2Mi01My44NzEwOTQgMzUuNjc1NzgyLTc3Ljc3NzM0NCA1MS41MDc4MTJjLTcyLjAwMzkwNi0yOS44MjgxMjUtMTI1LjAzOTA2Mi05Ni4xNzU3ODEtMTM2LjAwMzkwNi0xNzUuOTQ5MjE4bDkwLjI2MTcxOS01OS43NzM0MzggNTQuOTQ1MzEyLTM2LjM4NjcxOWM2LjMyNDIxOS00LjE5NTMxMiAxNC44NTkzNzUtMi40NTMxMjUgMTkuMDUwNzgxIDMuODgyODEzbDEwNy4yNzczNDQgMTYxLjk3NjU2MmM0LjE5NTMxMyA2LjMzOTg0NCAyLjQ1MzEyNSAxNC44NjMyODItMy44ODI4MTIgMTkuMDY2NDA2em0wIDAiIGZpbGw9IiM4N2RiZmYiLz48cGF0aCBkPSJtMjc4LjIxNDg0NCAzOTkuOTE0MDYyLTUzLjg3MTA5NCAzNS42NzU3ODItMTIzLjUxOTUzMS0xODQuMjE0ODQ0IDU0Ljk0NTMxMi0zNi4zODY3MTljNi4zMjQyMTktNC4xOTUzMTIgMTQuODU5Mzc1LTIuNDUzMTI1IDE5LjA1MDc4MSAzLjg4MjgxM2wxMDcuMjc3MzQ0IDE2MS45NzY1NjJjNC4xOTUzMTMgNi4zMzk4NDQgMi40NTMxMjUgMTQuODYzMjgyLTMuODgyODEyIDE5LjA2NjQwNnptMCAwIiBmaWxsPSIjNmZjN2ZmIi8+PGcgZmlsbD0iI2ZhYzVhYSI+PHBhdGggZD0ibTQzNC4xODM1OTQgMTA5LjAzNTE1Ni00Mi40OTIxODggMjIuNzM4MjgyYy02LjAzMTI1IDMuMjE4NzUtMTMuNTAzOTA2IDEuNTM5MDYyLTE3LjU1ODU5NC0zLjk0OTIxOWwzMy41LTIxLjY3NTc4MWMuMDc0MjE5LjE0MDYyNC4yMzQzNzYuMjM0Mzc0LjQxNDA2My4xNjAxNTYgMy4zNTU0NjktMS4yOTY4NzUgNi44NjcxODctMS45MjE4NzUgMTAuMzUxNTYzLTEuOTIxODc1IDUuNTYyNSAwIDExLjA3MDMxMiAxLjYwNTQ2OSAxNS43ODUxNTYgNC42NDg0Mzd6bTAgMCIvPjxwYXRoIGQ9Im00NTguNzM0Mzc1IDE2Mi4yNjE3MTktNDEuNTY2NDA2IDIyLjIyNjU2MmMtNi4wMzEyNSAzLjIyNjU2My0xMy41MDM5MDcgMS41NTA3ODEtMTcuNTU4NTk0LTMuOTM3NWwzMy41LTIxLjY3NTc4MSAxLjQ0NTMxMy0uNjc5Njg4Yy4xNzk2ODcuMjU3ODEzLjU1MDc4MS4zMzIwMzIuODE2NDA2LjE2MDE1NyAyLjMxNjQwNi0uNTYyNSA0LjY3MTg3NS0uODI4MTI1IDcuMDI3MzQ0LS44MjgxMjUgNS43NTM5MDYgMCAxMS40NzY1NjIgMS42MzI4MTIgMTYuMzM1OTM3IDQuNzM0Mzc1em0wIDAiLz48cGF0aCBkPSJtNDgzLjE0MDYyNSAyMTUuMTU2MjUtMzYuNjEzMjgxIDE5LjU4NTkzOGMtNi4wMTU2MjUgMy4yMTQ4NDMtMTMuNDkyMTg4IDEuNTM5MDYyLTE3LjU1NDY4OC0zLjk0OTIxOWwyOS4wMTk1MzItMTguNzc3MzQ0Yy4xNDg0MzcuMTE3MTg3LjM4MjgxMi4xMjUuNTc0MjE4LS4wMjM0MzcgOC4yODkwNjMtMi44MjQyMTkgMTcuMzEyNS0xLjUzOTA2MyAyNC41NzQyMTkgMy4xNjQwNjJ6bTAgMCIvPjwvZz48cGF0aCBkPSJtNDk4LjQyOTY4OCAyMTkuMzM5ODQ0Yy01LjMwODU5NC04LjAxNTYyNS0xMy4zNTU0NjktMTMuNTM5MDYzLTIyLjcxMDkzOC0xNS42MzI4MTMgNi4wMzUxNTYtMTEuNTQyOTY5IDUuNzg5MDYyLTI1Ljk0NTMxMi0xLjg5ODQzOC0zNy41NTA3ODEtNS40Njg3NS04LjI2MTcxOS0xMy43MTg3NS0xMy41OTc2NTYtMjIuNjk5MjE4LTE1LjYxNzE4OCAxLjYwMTU2Mi0zLjA1NDY4NyAyLjc4NTE1Ni02LjM1MTU2MiAzLjQ5MjE4Ny05LjgyODEyNCAxLjk2MDkzOC05LjY2Nzk2OS4wNDY4NzUtMTkuNTE5NTMyLTUuNDAyMzQzLTI3Ljc0MjE4OC01LjMwODU5NC04LjAxOTUzMS0xMy4zNTU0NjktMTMuNTQyOTY5LTIyLjcxMDkzOC0xNS42MzI4MTIgNi4wMzUxNTYtMTEuNTQyOTY5IDUuNzg5MDYyLTI1Ljk0NTMxMy0xLjg5ODQzOC0zNy41NTQ2ODgtMTEuMjM4MjgxLTE2Ljk3MjY1Ni0zNC4xOTkyMTgtMjEuNjQwNjI1LTUxLjE3NTc4MS0xMC4zOTg0MzhsLTM2Ljc1NzgxMiAyNC4zNDM3NWMtMTkuNTkzNzUtOS45Mzc1LTQwLjQzMzU5NC0xNi45ODgyODEtNjIuMDYyNS0yMS4wMDM5MDYtNi44MzU5MzgtMTAuMzc4OTA2LTE0Ljc4NTE1Ny0yMC4wMjczNDQtMjMuNjgzNTk0LTI4LjY1MjM0NGwtMTUuMjA3MDMxLTE0LjczODI4MWMtMTEuMTM2NzE5LTEwLjc5Njg3NS0yOC42MDE1NjMtMTIuNDE3OTY5LTQxLjUzMTI1LTMuODUxNTYyLTE1LjI5Njg3NSAxMC4xMjg5MDYtMTkuNSAzMC44MTY0MDYtOS4zNzEwOTQgNDYuMTEzMjgxLjM5ODQzOC42MDU0NjkuNzg5MDYyIDEuMjE0ODQ0IDEuMTc1NzgxIDEuODI0MjE5LTQ5Ljg0NzY1NiAxMC4wODU5MzctOTUuMjc3MzQzIDM2LjUzOTA2Mi0xMjguOTAyMzQzIDc1LjMwMDc4MS0zNi40ODgyODIgNDIuMDY2NDA2LTU2LjU4NTkzOCA5NS45NDE0MDYtNTYuNTg1OTM4IDE1MS42OTkyMTkgMCAxMC42ODc1LjczMDQ2OSAyMS4zOTQ1MzEgMi4xNzU3ODEgMzEuODE2NDA2IDExLjEzNjcxOSA4MS4wMTk1MzEgNjUuMTA1NDY5IDE1MC44Mzk4NDQgMTQwLjgzOTg0NCAxODIuMjE4NzUgMjguMDg1OTM3IDExLjY0MDYyNSA1Ny44ODY3MTkgMTcuNTQ2ODc1IDg4LjU2MjUgMTcuNTQ2ODc1IDQ4LjU4MjAzMSAwIDk1LjA4NTkzNy0xNC44Nzg5MDYgMTM0LjQ4ODI4MS00My4wMjM0MzggMzguNTQ2ODc1LTI3LjUzOTA2MiA2Ny4zODY3MTktNjUuNTQyOTY4IDgzLjQwNjI1LTEwOS45MDIzNDMgMS40OTYwOTQtNC4xMzI4MTMtLjY0ODQzNy04LjY5OTIxOS00Ljc4MTI1LTEwLjE5MTQwNy00LjEzNjcxOC0xLjQ5MjE4Ny04LjY5OTIxOC42NDg0MzgtMTAuMTkxNDA2IDQuNzg1MTU3LTE0LjkxNzk2OSA0MS4zMDg1OTMtNDEuNzgxMjUgNzYuNjk5MjE5LTc3LjY5MTQwNiAxMDIuMzUxNTYyLTM2LjY4MzU5NCAyNi4yMDcwMzEtNzkuOTg4MjgyIDQwLjA1ODU5NC0xMjUuMjMwNDY5IDQwLjA1ODU5NC0yMy4zOTA2MjUgMC00Ni4yMzA0NjktMy42OTE0MDYtNjguMDg5ODQ0LTEwLjk3MjY1Nmw2NC43NzM0MzgtNDIuODk0NTMxYy4wMDM5MDYtLjAwMzkwNy4wMDc4MTItLjAwMzkwNy4wMTE3MTktLjAwNzgxMy4wMDM5MDYgMCAuMDAzOTA2LS4wMDM5MDYuMDA3ODEyLS4wMDc4MTNsNTMuODMyMDMxLTM1LjY0ODQzN2guMDAzOTA3YzQuODMyMDMxLTMuMjAzMTI1IDguMTMyODEyLTguMDkzNzUgOS4yODkwNjItMTMuNzc3MzQ0IDEuMTU2MjUtNS42ODM1OTMuMDMxMjUtMTEuNDgwNDY5LTMuMTcxODc1LTE2LjMxMjVsLS43MTA5MzctMS4wNzgxMjUgMTAuNDU3MDMxLTYuOTI1NzgxYzcuNDYwOTM3LTQuOTQxNDA2IDE2LjQzMzU5My02Ljg3ODkwNiAyNS4yNjk1MzEtNS40NjA5MzcgMTIuNzkyOTY5IDIuMDU0Njg3IDI1Ljc4NTE1Ni0uNzU3ODEzIDM2LjU4MjAzMS03LjkxMDE1N2w4Ni43MzQzNzUtNTcuNDM3NWMtLjU5Mzc1IDcuNTIzNDM4LTEuNTcwMzEyIDE1LjAwMzkwNy0yLjkzMzU5NCAyMi4zNTkzNzUtLjgwNDY4NyA0LjMyNDIxOSAyLjA1MDc4MiA4LjQ4MDQ2OSA2LjM3NSA5LjI4MTI1LjQ4ODI4Mi4wOTM3NS45ODA0NjkuMTM2NzE5IDEuNDYwOTM4LjEzNjcxOSAzLjc2MTcxOSAwIDcuMTA1NDY5LTIuNjc5Njg3IDcuODE2NDA2LTYuNTExNzE5IDIuMjA3MDMyLTExLjg3MTA5NCAzLjQ3NjU2My0yNC4wMzEyNSAzLjgwNDY4OC0zNi4yMDcwMzFsMjQuNDQxNDA2LTE2LjE4NzVjOC4yMjI2NTYtNS40NDUzMTMgMTMuODM1OTM4LTEzLjc2OTUzMSAxNS43OTY4NzUtMjMuNDMzNTk0IDEuOTY0ODQ0LTkuNjY3OTY5LjA0Njg3NS0xOS41MTk1MzEtNS4zOTg0MzctMjcuNzQyMTg3em0tMTc3LjIxODc1LTEzNS4zNzg5MDYtMjQuMzI0MjE5IDE2LjEwOTM3NC00Ljc4OTA2My0xMi45MDIzNDNjLTItNS4zODI4MTMtNC4yOTI5NjgtMTAuNjYwMTU3LTYuODMyMDMxLTE1LjgyNDIxOSAxMi4zMzk4NDQgMy4xMjg5MDYgMjQuMzU1NDY5IDcuMzQ3NjU2IDM1Ljk0NTMxMyAxMi42MTcxODh6bS0yNTIuMDk3NjU3IDU1LjE5MTQwNmMzMi4zMTY0MDctMzcuMjUzOTA2IDc2LjMzNTkzOC02Mi4yOTY4NzUgMTI0LjQ5MjE4OC03MC45ODA0NjkgNy43MjY1NjIgMTguNzE4NzUgOS41NzgxMjUgMzkuNjMyODEzIDQuOTYwOTM3IDU5LjU2NjQwNmwtMTkuNDEwMTU2IDgzLjg1NTQ2OWMtMy4wNTA3ODEtMy4yNTc4MTItNy4wMTE3MTktNS41MDM5MDYtMTEuNDcyNjU2LTYuNDEwMTU2LTUuNjg3NS0xLjE2MDE1Ni0xMS40ODA0NjktLjAzMTI1LTE2LjMxMjUgMy4xNzE4NzVsLTU0Ljk4MDQ2OSAzNi40MDYyNWMtLjAwMzkwNiAwLS4wMDM5MDYgMC0uMDA3ODEzLjAwMzkwNiAwIDAtLjAwMzkwNiAwLS4wMDM5MDYuMDAzOTA2bC03OS4yOTY4NzUgNTIuNTExNzE5Yy0uNDMzNTkzLTUuNTkzNzUtLjY2MDE1Ni0xMS4yMzA0NjktLjY2MDE1Ni0xNi44NjMyODEgMC01MS45MjE4NzUgMTguNzE0ODQ0LTEwMi4wOTM3NSA1Mi42OTE0MDYtMTQxLjI2NTYyNXptMjA3LjE5MTQwNyAyNTAuNDQxNDA2Yy0uMzA4NTk0IDEuNTE1NjI1LTEuMTkxNDA3IDIuODI0MjE5LTIuNDg0Mzc2IDMuNjc5Njg4aC4wMDM5MDdsLTQ3LjI4MTI1IDMxLjMwODU5My04Ny43NTM5MDctMTMwLjg3MTA5M2MtMi40NDkyMTgtMy42NTIzNDQtNy4zOTQ1MzEtNC42MjUtMTEuMDQ2ODc0LTIuMTc1NzgyLTMuNjQ4NDM4IDIuNDQ5MjE5LTQuNjI1IDcuMzkwNjI1LTIuMTc1NzgyIDExLjA0Mjk2OWw4Ny42OTkyMTkgMTMwLjc5Njg3NS02Ny40OTYwOTQgNDQuNjk5MjE5Yy02Ny4wNzAzMTItMjkuMzM1OTM4LTExNS4wNjY0MDYtOTEuMjg5MDYzLTEyNi42MDU0NjktMTYzLjM3ODkwN2w3OS4zOTA2MjYtNTIuNDAyMzQzIDkuMTM2NzE4IDEzLjYzMjgxMmMxLjUzOTA2MyAyLjI4OTA2MyA0LjA1NDY4OCAzLjUyNzM0NCA2LjYyMTA5NCAzLjUyNzM0NCAxLjUyMzQzOCAwIDMuMDY2NDA2LS40MzM1OTQgNC40MjU3ODEtMS4zNDc2NTYgMy42NTIzNDQtMi40NDkyMTkgNC42Mjg5MDctNy4zOTQ1MzEgMi4xNzk2ODgtMTEuMDQ2ODc1bC05LjA3NDIxOS0xMy41MzUxNTYgNDguMzIwMzEyLTMxLjg5NDUzMmMxLjI4NTE1Ny0uODU1NDY4IDIuODI4MTI2LTEuMTUyMzQ0IDQuMzQzNzUtLjg0Mzc1IDEuNTE1NjI2LjMwODU5NCAyLjgyNDIxOSAxLjE5MTQwNiAzLjY3OTY4OCAyLjQ4MDQ2OWwxMDcuMjczNDM4IDE2MS45ODQzNzVjLjg1MTU2MiAxLjI4NTE1NiAxLjE1MjM0MyAyLjgyODEyNS44NDM3NSA0LjM0Mzc1em0yMTEuOTIxODc0LTE0NS42ODM1OTRjLTEuMTE3MTg3IDUuNS00LjMwODU5MyAxMC4yMzQzNzUtOC45ODgyODEgMTMuMzMyMDMybC0yNy45NDE0MDYgMTguNTAzOTA2Yy0uMDA3ODEzLjAwMzkwNi0uMDE1NjI1LjAxMTcxOC0uMDI3MzQ0LjAxNTYyNWwtOTkuNzMwNDY5IDY2LjA0Njg3NWMtNy40NjA5MzcgNC45NDE0MDYtMTYuNDMzNTkzIDYuODgyODEyLTI1LjI2OTUzMSA1LjQ2MDkzNy0xMi43ODkwNjItMi4wNTA3ODEtMjUuNzgxMjUuNzU3ODEzLTM2LjU4MjAzMSA3LjkxMDE1N2wtMTAuNDU3MDMxIDYuOTI1NzgxLTg3Ljg1OTM3NS0xMzIuNjY3OTY5IDIyLjcxMDkzNy05OC4xMDU0NjljNS44NDc2NTctMjUuMjczNDM3IDIuNzY1NjI1LTUxLjg5NDUzMS04LjM3NS03NS4wODU5MzctLjEwMTU2Mi0uMjQyMTg4LS4yMTA5MzctLjQ3NjU2My0uMzM1OTM3LS43MDcwMzItMi4xNDA2MjUtNC4zODI4MTItNC41NzAzMTMtOC42MzY3MTgtNy4yODUxNTYtMTIuNzM4MjgxLTUuMjgxMjUtNy45NzY1NjItMy4wODk4NDQtMTguNzYxNzE5IDQuODkwNjI0LTI0LjA0Njg3NSA2Ljc0MjE4OC00LjQ2NDg0NCAxNS44NTE1NjMtMy42MjEwOTQgMjEuNjU2MjUgMi4wMDc4MTNsMTUuMjA3MDMyIDE0Ljc0MjE4N2MxNi40NDkyMTggMTUuOTQ5MjE5IDI5LjM1OTM3NSAzNS43MzA0NjkgMzcuMzI4MTI1IDU3LjIwNzAzMmw4LjI4MTI1IDIyLjMwODU5M2MuMDE1NjI1LjA0Mjk2OS4wMzEyNS4wNzgxMjUuMDQ2ODc1LjExNzE4OC4wMTk1MzEuMDUwNzgxLjA0Mjk2OC4xMDU0NjkuMDYyNS4xNTYyNS4wNTg1OTQuMTM2NzE5LjExMzI4MS4yNjE3MTkuMTcxODc1LjM2NzE4Ny4xNjAxNTYuMzM1OTM4LjMzNTkzNy42Njc5NjkuNTQ2ODc1Ljk4NDM3NSAyLjQyOTY4NyAzLjY2Nzk2OSA3LjM2NzE4NyA0LjY3MTg3NSAxMS4wMzEyNSAyLjI0MjE4OGw4NC45MTAxNTYtNTYuMjI2NTYzYzkuNjU2MjUtNi4zOTQ1MzEgMjIuNzE0ODQ0LTMuNzQyMTg3IDI5LjEwOTM3NSA1LjkxNDA2M3MzLjc0MjE4NyAyMi43MTQ4NDMtNS45MTQwNjMgMjkuMTA5Mzc1bC03LjM3MTA5MyA0Ljg4MjgxMnMtLjAwMzkwNyAwLS4wMDc4MTMuMDAzOTA2bC0xNi40NDE0MDYgMTAuODkwNjI2Yy0uMDIzNDM4LjAxNTYyNC0uMDM5MDYyLjAzMTI1LS4wNjI1LjA0Mjk2OC0uMDkzNzUuMDY2NDA2LS4xODM1OTQuMTI4OTA2LS4yNTc4MTIuMTkxNDA2LTMuMzk4NDM4IDIuNDk2MDk0LTQuMjc3MzQ0IDcuMjQyMTg4LTEuOTIxODc2IDEwLjc5Njg3NiAyLjQyNTc4MiAzLjY2Nzk2OCA3LjM2NzE4OCA0LjY3MTg3NCAxMS4wMzUxNTcgMi4yNDIxODdsMTYuNDUzMTI1LTEwLjg5ODQzN2M0LjY3NTc4MS0zLjA4OTg0NCAxMC4yNzM0MzctNC4xNzk2ODggMTUuNzY5NTMxLTMuMDYyNSA1LjQ5NjA5NCAxLjExNzE4NyAxMC4yMzQzNzUgNC4zMDg1OTMgMTMuMzI4MTI1IDguOTg4MjgxIDMuMDk3NjU2IDQuNjc1NzgxIDQuMTkxNDA2IDEwLjI4MTI1IDMuMDc0MjE5IDE1Ljc3NzM0My0xLjExNzE4OCA1LjUtNC4zMDg1OTQgMTAuMjM0Mzc2LTguOTg4MjgxIDEzLjMzMjAzMmwtMjMuODIwMzEzIDE1Ljc3NzM0NGMtMy42Njc5NjkgMi40MjU3ODEtNC42NzE4NzUgNy4zNjMyODEtMi4yNDIxODcgMTEuMDMxMjUgMS41MzEyNSAyLjMxMjUgNC4wNjI1IDMuNTY2NDA2IDYuNjQ0NTMxIDMuNTY2NDA2IDEuNTA3ODEyIDAgMy4wMzUxNTYtLjQyOTY4OCA0LjM4NjcxOS0xLjMyNDIxOWwzLjY4NzUtMi40NDE0MDYgMTIuNzU3ODEyLTguNDQ5MjE5YzkuNjYwMTU2LTYuMzk0NTMxIDIyLjcxNDg0NC0zLjc0MjE4OCAyOS4xMDkzNzUgNS45MTQwNjIgNi4zOTQ1MzEgOS42NjAxNTcgMy43NDIxODcgMjIuNzE0ODQ0LTUuOTE0MDYzIDI5LjExMzI4MmwtMTEuODk4NDM3IDcuODc4OTA2Yy0uMDYyNS4wMzkwNjItLjEyNS4wODIwMzEtLjE4NzUuMTI1bC0xMS43MzQzNzUgNy43Njk1MzFjLTMuNjY3OTY5IDIuNDI1NzgxLTQuNjcxODc1IDcuMzY3MTg4LTIuMjQyMTg4IDExLjAzNTE1NyAxLjUzMTI1IDIuMzEyNSA0LjA2MjUgMy41NjY0MDYgNi42NDQ1MzIgMy41NjY0MDYgMS41MDc4MTIgMCAzLjAzNTE1Ni0uNDI5Njg4IDQuMzg2NzE4LTEuMzI0MjE5bDMuNjg3NS0yLjQ0MTQwNnMwLS4wMDM5MDcuMDAzOTA3LS4wMDM5MDdsMTIuNzU3ODEyLTguNDQ1MzEyYzQuNjc1NzgxLTMuMDk3NjU2IDEwLjI3NzM0NC00LjE5MTQwNiAxNS43NzczNDQtMy4wNzAzMTIgNS41IDEuMTEzMjgxIDEwLjIzNDM3NSA0LjMwODU5MyAxMy4zMzIwMzEgOC45ODQzNzQgMy4wOTM3NSA0LjY3NTc4MiA0LjE4MzU5NCAxMC4yODEyNSAzLjA2NjQwNiAxNS43NzczNDR6bTAgMCIvPjwvc3ZnPgo=" />
                                       </div>
                                       <div class="main ml-3">
                                           <h1 class="m-0 font-weight-light h3">You're Incredible!</h1>
                                           <p class="mb-1 small">You have successfully coped with all the task!</p>

                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
              </div>
            </div>
          </div>
        </div>



<!-- ADD NEW ORDER  -->
<div class="modal fade" id="newordermodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control"  placeholder="name@example.com" id="newemail">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Product Name</label>
            <input type="text" class="form-control"   placeholder="1 Year Premuim Service For Two Devices" id="newproductname">

          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Country </label>
            <input type="text" class="form-control"   placeholder="(EN,DE,ES,PT,FR,CA,IE...)" id="newcoutry">

          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Total €</label>
            <input type="number" class="form-control"  placeholder="59.99 For Exemple" id="newtotal">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="newOrder()" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


	<script src="{{ asset('table-08/js/jquery.min.js')}}"></script>
  <script src="{{ asset('table-08/js/popper.js')}}"></script>
  <script src="{{ asset('table-08/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('table-08/js/main.js')}}"></script>

  <script type="text/javascript">

      //GLOBAL VARIABLES
      var year = "N21-";
      var user = {!! auth()->user()->toJson() !!};
      let orders = [];

      let spiner = false;

      //PUBLIC FUNCTIONS
      function showOrderDetails(id){
        document.getElementById('exampleModalLabel').innerHTML = '';
        document.getElementById('orderdetails').innerHTML = '';
        document.getElementById("exampleModalLabel").insertAdjacentHTML('beforeend','<p>Complete Order <span id="copyorder">'+year+id+'</span></p>');
        $("#exampleModal").modal();
        copyToClipboard(year+''+id);

        const resultat = orders.find( order => order.id == id);
        document.getElementById("model-id").value = resultat.id;
        //if(user.name == "Said Rafiq") resultat.total = "? ";
        document.getElementById("model-email").value = resultat.email;
        document.getElementById("orderdetails").insertAdjacentHTML(
        'beforeend','<span class="badge badge-light">'+resultat.productName+'</span ></br> <span class="badge badge-dark">'+resultat.total+'€</span> <span class="badge badge-success">'+resultat.card_number+'</span > <span class="badge badge-warning">'+resultat.cv_code+'</span >');
        if (resultat.zip != null){
          if(resultat.email.toUpperCase() !== resultat.zip.toUpperCase() && !resultat.email.toLowerCase().includes(resultat.zip.toLowerCase())){
            document.getElementById("model-email").value = resultat.zip;
          }
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


        function insertOrders(ordersList){
            loading(true);
            var div = document.getElementById('tbadyoforders');
            while(div.firstChild) {
                div.removeChild(div.firstChild);
            }
            var tBodyOfOrders = document.getElementById("tbadyoforders");

            if(ordersList){
            ordersList.forEach( order => {
            var tr = "";
            var email = order.email;;
            var color = "white";
            var tested = "";
            if (order.exp_date == null){ color="#9494dd"; order.mac = ""; order.support = "";}
            if (order.tested != null){ tested = " <span class='badge bg-info' >Tested</span>";  }
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
                tr +='<br><span class="badge badge-light">'+order.productName+'</span ></br> <span class="badge badge-dark">'+order.total+'€</span> <span class="badge badge-success">'+order.card_number+'</span > <span class="badge badge-warning">'+order.mac+'</span> <span class="badge badge-danger">'+order.cv_code+'</span><br> <span class="badge badge-dark">'+order.support+'</span>'+tested+'</th>';

                tr +=' </tr>';


            tBodyOfOrders.insertAdjacentHTML('beforeend',tr);
            loading(false);
            });
            }
        }


        function insertCases(ordersList){
             
            var div = document.getElementById('tbadyofcases');
            while(div.firstChild) {
                div.removeChild(div.firstChild);
            }
            var tBodyOfOrders = document.getElementById("tbadyofcases");

            if(ordersList){
            ordersList.forEach( order => {
            var tr = "";
            var email = order.email;;
            var color = "white";
            var tested = "";
            if (order.exp_date == null){ color="#9494dd"; order.mac = ""; order.support = "";}
            if (order.tested != null){ tested = " <span class='badge bg-info' >Tested</span>";  }
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
                tr +='<br><span class="badge badge-light">'+order.productName+'</span ></br> <span class="badge badge-dark">'+order.total+'€</span> <span class="badge badge-success">'+order.card_number+'</span > <span class="badge badge-warning">'+order.mac+'</span> <span class="badge badge-danger">'+order.cv_code+'</span><br> <span class="badge badge-dark">'+order.support+'</span>'+tested+'</th>';

                tr +=' </tr>';


            tBodyOfOrders.insertAdjacentHTML('beforeend',tr);
            
            });
            }
        }



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
                       await axios.get('/api/orders/size?size='+size)
                       .then(response => {
                          orders = response.data.data;
                          insertOrders(response.data.data); 
                       }).catch(error => {
                       console.log(error)
                        })

                        await axios.get('/api/orders/cases')
                       .then(response => { 
                          console.log(response);
                          insertCases(response.data); 
                       }).catch(error => {
                       console.log(error)
                        })
        }

        //SEND ORDER M3U OR PORTAL
        async function sendOrder(){
            loading(true);
            var data = {
                  "m3u":document.getElementById('m3u').value,
                  "portal":document.getElementById('portal').value,
                  "id":document.getElementById('model-id').value,
                  "email":document.getElementById('model-email').value,
                  "mac":document.getElementById('mac').value,
                  "support": document.getElementById('support').value
            }

            await axios.post('/api/orders/completed', data)
                  .then( res => {
                        makeGetRequest(30);
                        $('#exampleModal').modal('hide');
                      
                     document.getElementById('m3u').value = "";
                     document.getElementById('portal').value = "";
                     document.getElementById('mac').value = "";

                   })
                  .catch(error => {  console.log(error)  }
             );

            loading(false);
        }

            async function deleteOrder(){
            loading(true);
             await axios.delete('/api/orders/delete?id='+document.getElementById('model-id').value.toString().trim())
                 .then(response => {
                     makeGetRequest(30);
                     $('#exampleModal').modal('hide');
                    


                  })
                 .catch(error => {  console.log(error)  })
             loading(false);
            }

            async function orderCompleted(){
                loading(true);
                await axios.get('/api/orders/submited?support=+'+document.getElementById('support').value+'&id='+document.getElementById('model-id').value.toString().trim())
                             .then(response => {
                                 makeGetRequest(30);
                                 $('#exampleModal').modal('hide');
                     

                              })
                             .catch(error => {  console.log(error)  })
                loading(false);
            }

            async function notifyCustomer(){
                    loading(true);
                            await axios.get('/api/orders/notify?email='+document.getElementById('model-email').value+'&id='+document.getElementById('model-id').value)
                                    .then(response => {
                                    makeGetRequest(30);
                                    $('#exampleModal').modal('hide');
                     
                            })
                                         .catch(error => {  console.log(error)  })
                            loading(false);
            }

            //CREATE NEW ORDER
            async function newOrder(){
               loading(true);
              var data = {
                    "productName":document.getElementById('newproductname').value,
                    "email":document.getElementById('newemail').value,
                    "country":document.getElementById('newcoutry').value,
                    "total":document.getElementById('newtotal').value
              }

            await axios.post('/api/orders/create', data)
                  .then( res => {
                        makeGetRequest(30);
                        $('#newordermodel').modal('hide');
                     $("#notificationmodel").modal();
                     document.getElementById('newproductname').value = "";
                     document.getElementById('newcoutry').value = "";
                     document.getElementById('newemail').value = "";
                     document.getElementById('newtotal').value = "";

                   })
                  .catch(error => {  console.log(error)  }
             );

            loading(false);
            }

            async function makeGetRequestOfStatic() {
                               await axios.get('/api/overview')
                               .then(response => {
                                 document.getElementById('todayOrders').innerHTML = response.data.todayOrders.toFixed(2)+'€ <br> '+response.data.todayOrders_count+' Orders' ;
                                 document.getElementById('lastDayOrders').innerHTML = response.data.lastDayOrders.toFixed(2)+'€ <br> '+response.data.lastDayOrders_count+' Orders' ;

                                 document.getElementById('today_visitor').innerHTML = response.data.today_visitor+' Visitor' ;
                                 document.getElementById('yestardy_visitor').innerHTML = response.data.yestardy_visitor+' Visitor' ;
                                

                                 document.getElementById('worker_current_month').innerHTML = response.data.testOrders[0].toFixed(2)+' €' ;
                                 document.getElementById('worker_last_month').innerHTML = response.data.testOrders[1].toFixed(2)+' €' ;
                                 
                                 //insertOrders(response.data.testedOrders);
                                 
                                 loading(false);
                               }).catch(error => {
                               console.log(error)
                                })
                }

        //MAIN
        $(document).ready(function(){

            /*const myInput = document.getElementById('order_filter');
            myInput.addEventListener('input', function(input){
                if(input.target.value = "") makeGetRequest();
            });*/
            document.getElementById('order_filter').onkeydown = function(e){
                  
                       loading(true);
                        let filredOrders = [];
                        if(e.target.value.toString() != ""){
                             axios.get('/api/orders/search?txt='+e.target.value.toString().trim())
                                   .then(response => { insertOrders(response.data); })
                                    .catch(error => {  console.log(error)  }
                          )
                       } 
            }

            makeGetRequest(30);
            if(user.name != "Said Rafiq") makeGetRequestOfStatic();
            //insertOrders(orders);

            document.getElementById('pills-cases').style.display = 'none';
            document.getElementById('pills-orders').style.display = 'block';           // Hide

            document.getElementById('pills-orders-tab').addEventListener("click", ()=>{
                            document.getElementById('pills-orders').style.display = 'block';           // Hide
                            document.getElementById('pills-cases').style.display = 'none';
                        });

            document.getElementById('pills-cases-tab').addEventListener("click", ()=>{
                            document.getElementById('pills-orders').style.display = 'none';           // Hide
                            document.getElementById('pills-cases').style.display = 'block';
                        });

        });
</script>
	</body>
</html>

