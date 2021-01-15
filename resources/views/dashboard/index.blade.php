<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ \App\Store::first()->name }}LTE | @yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--LOGO-->
    <link rel="icon" href="{{asset('img/'.\App\Store::first()->logo)}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('../../plugins/ionicons/css/ionicons.min.css') }}">
    <!-- flag-icon-css -->
    <link rel="stylesheet" href="{{ asset('../../plugins/flag-icon-css/css/flag-icon.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="{{ asset('dist/font/google_fonts.css') }}" rel="stylesheet">
    <!-- pace -->
    <link href="{{asset('../../plugins/pace-progress/themes/blue/pace-theme-flat-top.css')}}" rel="stylesheet"/>
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('../../plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Noty -->
    <link href="{{ asset('plugins/noty/noty.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/noty/noty.js') }}" type="text/javascript"></script>

    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('../../plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('../../plugins/summernote/summernote-bs4.css')}}">
    <!-- Links -->
        @yield('header_links')
    <!-- /.Links -->
    <style>
        #image_preview {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #image_preview:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image (Image Text) - Same Width as the Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content, #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>

</head>


<!-- Body ----------------------------------------------------------------------------------------------------------------------------->
<body class="hold-transition sidebar-mini sidebar-collapse ">

    <div class="snipper">
        <div id="se-pre-con"></div>
        <style>
            #se-pre-con {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url(http://smallenvelop.com/wp-content/uploads/2014/08/Preloader_3.gif) center no-repeat #fff;
            }
        </style>
    </div>

    <!-- wrapper -->
    <div class="wrapper">

        <!-- Session Flash -->
            @include('partials._session')
        <!-- /.Session Flash -->

        <!-- Navbar -->
            @include('dashboard.components._nav')
        <!-- /.navbar -->

        <!-- Main Sidebar -->
            @include('dashboard.components._aside')
        <!-- /.Main Sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
            <!--IMAGE PREVIEW-->
                <div id="myModal" class="modal">
                    <img class="modal-content" id="img01">
                </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
            @include('dashboard.components._footer')
        <!-- /.Footer -->

    </div>
    <!-- ./wrapper -->


    <!-- jQuery ----------------------------------------------------------------------------------------------------------------------------->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $('#M3U_').click(function(e) {
            var classx = e.target.className;
            console.log('#mag_form'+classx);
              $('#m3u_form'+classx).show();
              $('#mag_form'+classx).hide();
               
        });
        $('#MAG_').click(function(e) {
            var classx = e.target.className;
            console.log('#m3u_form'+classx);
            $('#m3u_form'+classx).hide();
            $('#mag_form'+classx).show();
              
         });

       
</script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('../../dist/js/demo.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('../../plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- Scripts -->
 <script src="{{asset('../../plugins/select2/js/select2.full.min.js')}}"></script>
 <!-- Bootstrap 4 -->
 <script src="{{asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script !src="">
        $.widget.bridge('uibutton', $.ui.button);
        //ON LOAD PAGE
        window.addEventListener('load', function () {
            var sniiper = document.getElementById('se-pre-con');
            sniiper.setAttribute("id", "");
        });

        //NOTY
        $('.action').click(function (e){
            var that = $(this);
            e.preventDefault();

            var n = new Noty({
                text: "@lang('site.confirm_action')",
                theme: "relax",
                type: "warning",
                killer: true,
                buttons: [
                    Noty.button("@lang('site.yes')", 'btn btn-success mr-2 float-right',()=>{
                        that.closest('form').submit();
                    }),
                    Noty.button("@lang('site.no')", 'btn btn-primary mr-2',()=>{
                        n.close();
                    })
                ]
            }).show();
        });

    </script>
    @yield('header_script')
    <!-- /.Scripts -->
    <script !src="">
        // Get the modal width:100%;max-width:300px
        var modal = document.getElementById("myModal");
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("image_preview");
        var view_btn = document.getElementById("view_btn");
        var input_image = document.getElementById("input_image");
        var modalImg = document.getElementById("img01");
        // When the user clicks on <span> (x), close the modal
        modal.onclick = function() {
            modal.style.display = "none";
            input_image.style.display = "block";
        }
        $("#input_image").change(function (e) {
            let input = e.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    modal.style.display = "block";
                    modalImg.src = event.target.result;
                    input_image.style.display = "none";
                }
                reader.readAsDataURL(input.files[0]);

            }
        });
    </script>


 <script>


     $(function () {
         //Initialize Select2 Elements
         $('.select2').select2()

         //Initialize Select2 Elements
         $('.select2bs4').select2({
             theme: 'bootstrap4'
         })

     });

     $(document).ready(function () {
         $("#state").select2({
             tags: true
         });

         $("#new-state").keypress(function (event) {
             var keycode = (event.keyCode ? event.keyCode : event.which);
             if (keycode == '13') {
                 var newStateVal = $("#new-state").val();
                 // Set the value, creating a new option if necessary
                 if ($("#state").find("option[value=" + newStateVal + "]").length) {
                     $("#state").val(newStateVal).trigger("change");
                 } else {
                     // Create the DOM option that is pre-selected by default
                     var newState = new Option(newStateVal, newStateVal, true, true);
                     // Append it to the select
                     $("#state").append(newState).trigger('change');
                 }
             }
         });
     });
 </script>
 
</body>
</html>