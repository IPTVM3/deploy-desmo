<!doctype html>
<html lang="en">
  <head>
  	<title>Bobres - Messages</title>
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
</style>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">




			<div class="row">
				<div class="col-md-12">

        <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-4">
                    <h3 class="panel-title">ALL Messages</h3>
                  </div>
                  <div class="col col-xs-8 text-right">

                  <div class="input-group">
                     <div class="input-group-append btn-group-sm">
                   <button onclick="sort('subscibed-no-order')" class="btn btn-primary">Subscibed/no-order</button>
                   <button onclick="sort('subscibed-no-service')" class="btn btn-primary">Subscibed/no-service</button>
                   <button onclick="sort('interssted-reselling')" class="btn btn-primary">Interssted/reselling</button>
                   <button onclick="sort('need-tria')" class="btn btn-primary">Need/trial</button>
                   <button onclick="sort('other')" class="btn btn-primary">Other</button>
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
                        <th>#Email</th>
                        <th>Subject & Message</th>
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
	</section>



<!-- SHOW MESSAGE MODEL  -->
<div class="modal fade" id="newordermodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message Model</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control"  placeholder="name@example.com" id="newemail" disabled>
            <input type="text" class="form-control"  placeholder="name@example.com" id="idmessage" disabled style="display:none;">
            <input type="text" class="form-control"  placeholder="name@example.com" id="subject" disabled style="display:none;">
            <input type="text" class="form-control"  placeholder="name@example.com" id="oldmessage" disabled style="display:none;">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Answer</label>
            <textarea type="text" class="form-control"  id="answer"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="sendEmail()" class="btn btn-primary">Send Email</button>
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


        function insertOrders(ordersList){
            loading(true);
            var div = document.getElementById('tbadyoforders');
            while(div.firstChild) {
                div.removeChild(div.firstChild);
            }
            var tBodyOfOrders = document.getElementById("tbadyoforders");

            if(ordersList){
            ordersList.forEach( order => {
            if(order.subject != null) {
            var tr = "";
            var color = "white";
            if(!order.viewed) color="#9494dd"

                tr += '<tr id="'+order.id+'" onclick="showMessageModel('+order.id+')"     style="background-color:'+color+' !important;"  >';
                tr +='<th scope="row" ><span class="badge badge-danger" >'+order.by+'</span><br><span class="badge badge-success" >'+order.ordernumber+'</span><br><span class="badge badge-info">'+order.created_at+' ('+fromNow(order.created_at)+')</span></th>';
                tr +='<td><span class="badge badge-dark">'+order.subject+'</span > <br> <span class="badge badge-light">'+order.body+'</span ></td>';


                tr +=' </tr>';


            tBodyOfOrders.insertAdjacentHTML('beforeend',tr);
            }
            loading(false);
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
                       await axios.get('/api/messages/size?size='+size)
                       .then(response => {
                          orders = response.data.data;
                          insertOrders(response.data.data);
                          console.log(orders);
                       }).catch(error => {
                       console.log(error)
                        })
        }



            async function deleteOrder(){
            loading(true);
             await axios.delete('/api/orders/delete?id='+document.getElementById('model-id').value.toString().trim())
                 .then(response => {
                     makeGetRequest(30);
                     $('#exampleModal').modal('hide');
                     $("#notificationmodel").modal();
                     setTimeout(function(){ $('#notificationmodel').modal('hide');  }, 1500);


                  })
                 .catch(error => {  console.log(error)  });
             loading(false);
            }

            async function showMessageModel(id){

                     await axios.get('/api/messages/getone?id='+id.toString().trim())
                                 .then(response => {


                            document.getElementById("idmessage").value = id;
                            document.getElementById("subject").value = response.data.subject;
                            document.getElementById("newemail").value =  response.data.by;
                            document.getElementById("oldmessage").value =  response.data.body;
                            $("#newordermodel").modal();

                                  })
                                 .catch(error => {  console.log(error)  })

           }

        async function sort(type){
            loading(true);
            let messages = [];

          await axios.get('/api/messages')
                      .then(response => {
                                  response.data.forEach( msg => {

                                        if(msg.subject == type) messages.push(msg);

                                  })
                                  console.log(messages);
                                 insertOrders(messages);

                      }).catch(error => {
                               console.log(error)
                      })
            loading(false);

        }

        function sendEmail(){

         var data = {
             'id' : document.getElementById("idmessage").value ,
             'subject' : document.getElementById("subject").value ,
             'email' : document.getElementById("newemail").value ,
             'oldmessage' : document.getElementById("oldmessage").value,
             'newmessage' : document.getElementById("answer").value
             }
                            loading(true);


                             return fetch('/api/messages/send', {
                                 method: 'post',
                                 headers: {
                                     'content-type': 'application/json',
                                     "X-Requested-With": "XMLHttpRequest",
                                 },
                                 body: JSON.stringify(data)
                             })
                                 .then(function(response){
                                     console.log(response);
$('#newordermodel').modal('hide');            makeGetRequest(30);

                                 })
                                 .catch(function(error) {
                                     console.log(error);
                                 });

                                        loading(false);



                            document.getElementById("subject").value = "";
                            document.getElementById("newemail").value =  "";
                            document.getElementById("oldmessage").value =  "";
                            document.getElementById("answer").value =  "";
        }
        //MAIN
        $(document).ready(function(){




            makeGetRequest(30);
            //insertOrders(orders);

        });
</script>
	</body>
</html>

