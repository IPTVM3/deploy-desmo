<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet"
          href="{{asset('css/bootstrap.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- flag-icon-css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
    <!-- Noty -->
    <link href="{{ asset('plugins/noty/noty.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/noty/noty.js') }}" type="text/javascript"></script>
    <style>
        /*custom font*/
        @import url(https://fonts.googleapis.com/css?family=Montserrat);

        /*basic reset*/
        * {
            margin: 0;
            padding: 0;
        }

        html {
            height: 100%;
            background: #e9ecef; /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #6441A5, #2a0845); /* Chrome 10-25, Safari 5.1-6 */
        }

        body {
            font-family: montserrat, arial, verdana;
            background: transparent;
        }

        /*form styles*/
        #msform {
            text-align: center;
            position: relative;
            margin-top: 30px;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
            box-sizing: border-box;
            width: 80%;
            margin: 0 10%;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        /*inputs*/
        #msform input, #msform textarea, #input_select {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 13px;
        }


        #msform input:focus, #msform textarea:focus, #input_select:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #2e42c1;
            outline-width: 0;
            transition: All 0.5s ease-in;
            -webkit-transition: All 0.5s ease-in;
            -moz-transition: All 0.5s ease-in;
            -o-transition: All 0.5s ease-in;
        }

        /*buttons*/
        #msform .action-button {
            width: 100px;
            background: #2e42c1;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 25px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover, #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #2e42c1;
        }

        #msform .action-button-previous {
            width: 100px;
            background: #C5C5F1;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 25px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button-previous:hover, #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
        }

        /*headings*/
        .fs-title {
            font-size: 18px;
            text-transform: uppercase;
            color: #2C3E50;
            margin-bottom: 10px;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .fs-subtitle {
            font-weight: normal;
            font-size: 13px;
            color: #666;
            margin-bottom: 20px;
        }

        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            /*CSS counters to number the steps*/
            counter-reset: step;
        }

        #progressbar li {
            list-style-type: none;
            color: black;
            text-transform: uppercase;
            font-size: 9px;
            width: 33.33%;
            float: left;
            position: relative;
            letter-spacing: 1px;
        }

        #progressbar li:before {
            content: counter(step);
            counter-increment: step;
            width: 24px;
            height: 24px;
            line-height: 26px;
            display: block;
            font-size: 12px;
            color: #333;
            background: white;
            border-radius: 25px;
            margin: 0 auto 10px auto;
        }

        /*progressbar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: white;
            position: absolute;
            left: -50%;
            top: 9px;
            z-index: -1; /*put it behind the numbers*/
        }

        #progressbar li:first-child:after {
            /*connector not needed before the first step*/
            content: none;
        }

        /*marking active/completed steps green*/
        /*The number of the step and the connector before it = green*/
        #progressbar li.active:before, #progressbar li.active:after {
            background: #2e42c1;
            color: white;
        }


        /* Not relevant to this form */
        .dme_link {
            margin-top: 30px;
            text-align: center;
        }

        .dme_link a {
            background: #FFF;
            font-weight: bold;
            color: #2e42c1;
            border: 0 none;
            border-radius: 25px;
            cursor: pointer;
            padding: 5px 25px;
            font-size: 12px;
        }

        .dme_link a:hover, .dme_link a:focus {
            background: #C5C5F1;
            text-decoration: none;
        }
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

<body>

<nav class="main-header navbar navbar-expand navbar-dark ">


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


        <!-- Language Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                @if(App::isLocale('en'))
                    <i class="flag-icon flag-icon-us"></i>
                @else
                    <i class="flag-icon flag-icon-{{App::getLocale()}}"></i>
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right p-0">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                       hreflang="{{ $localeCode }}" class="dropdown-item ">

                        @if($properties['native'] == 'English')
                            <i class="flag-icon flag-icon-us mr-2 "></i>
                        @else
                            <i class="flag-icon flag-icon-{{App::getLocale()}} mr-2 "></i>
                        @endif
                        {{ $properties['native'] }}
                    </a>
                @endforeach
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" style="color:black;" href="{{ url('/logout') }}">@lang('auth.logout') <i
                        class="fas fa-sign-out-alt"></i></a>

        </li>


    </ul>
</nav>

<!-------------------------------------------------------------------------------------->
@include('partials._session')
<div class="container">
    @include('partials._errors')
</div>
<!-------------------------------------------------------------------------------------->
<div class="container">
    <!-- MultiStep Form -->
    <div class="row" style="margin-top: 2%;">
        <div class="col-md-12 col-md-offset-12">
            <form id="msform" method="post" action="{{ route('store.valide_config_store') }}"
                  enctype="multipart/form-data">

            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">@lang('site.store_general_details')</li>
                    <li>@lang('site.store_social_adresse')</li>
                    <li>@lang('site.store_setup')</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">@lang('site.store_general_details')</h2>
                    <h3 class="fs-subtitle">@lang('site.store_general_details_description')</h3>
                    <input type="text" name='name' placeholder="@lang('auth.name')" autofocus required  value="{{ old('name') }}"/>
                    <input type="text" name='legal_name' placeholder="@lang('site.legal_name')" required  value="{{ old('legal_name') }}" />
                    <input type="text" name='email' placeholder="@lang('auth.email')" required  value="{{ old('email') }}" />
                    <input type="number" name='phone' placeholder="@lang('site.phone')" required  value="{{ old('phone') }}" />
                    <input type="number" name='fix' placeholder="@lang('site.fix')" required  value="{{ old('fix') }}" />
                    <textarea type="text" name='bio_desc' placeholder="@lang('site.bio')"> {{ old('bio_desc') }}</textarea>
                    <input class="file-input" type="file" name='logo' placeholder="@lang('site.logo')" id="input_image"  required/>
                    <input type="button" name="next" class="next action-button" value="@lang('site.next')"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">@lang('site.store_social_adresse')</h2>
                    <h3 class="fs-subtitle">@lang('site.store_social_adresse_description')</h3>

                    <div class="row">
                        <div class="input-group">
                            <div class="col-md-8">
                                <input type="text" name="address" placeholder="@lang('site.address')" required value="{{ old('address') }}"/>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="apartement" placeholder="@lang('site.apartement')" value="{{ old('apartement') }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-group">
                            <div class="col-md-4">
                                <input type="text" name="street" placeholder="@lang('site.street')" value="{{ old('street') }}"/>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="zip_code" placeholder="@lang('site.zip_code')" required value="{{ old('zip_code') }}"/>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="city" placeholder="@lang('site.city')" required value="{{ old('city') }}" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <select id="input_select" required name="country">
                                    <option value="Afganistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bonaire">Bonaire</option>
                                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Canary Islands">Canary Islands</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Channel Islands">Channel Islands</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Island">Cocos Island</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote DIvoire">Cote DIvoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curaco">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Ter">French Southern Ter</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Great Britain">Great Britain</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="India">India</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea North">Korea North</option>
                                    <option value="Korea Sout">Korea South</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Midway Islands">Midway Islands</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Nambia">Nambia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                    <option value="Nevis">Nevis</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau Island">Palau Island</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Phillipines">Philippines</option>
                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="St Barthelemy">St Barthelemy</option>
                                    <option value="St Eustatius">St Eustatius</option>
                                    <option value="St Helena">St Helena</option>
                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                    <option value="St Lucia">St Lucia</option>
                                    <option value="St Maarten">St Maarten</option>
                                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                    <option value="Saipan">Saipan</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Samoa American">Samoa American</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Tahiti">Tahiti</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="Uraguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State">Vatican City State</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                    <option value="Wake Island">Wake Island</option>
                                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center; margin-bottom: 23px">
                      <span style="font-size: 20px; background-color: white; padding: 0 10px;">
                        @lang('site.sociaux') <!--Padding is optional-->
                      </span>
                    </div>

                    @php
                        $social_profiles = [
                                                    'https://www.facebook.com/store_name/',
                                                    'https://www.instagram.com/store_name/',
                                                    'https://www.pinterest.fr/store_name/',
                                                    'https://www.twitter.com/store_name'
                                           ];
                    @endphp


                    <div class="row">
                        @foreach($social_profiles as $index => $item)
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="social[]" placeholder="{{ $item }}" value="{{ old('social['.$index.']') }}" />
                                </div>
                            </div>
                        @endforeach

                    </div>


                    <input type="button" name="previous" class="previous action-button-previous"
                           value="@lang('site.previous')"/>
                    <input type="button" name="next" class="next action-button" value="@lang('site.next')"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">@lang('site.store_setup')</h2>
                    <h3 class="fs-subtitle">@lang('site.store_setup_description')</h3>
                    <h3 class="fs-subtitle">(@lang('site.timezone') - @lang('site.currency') - @lang('site.unit_system')
                        )</h3>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <select id="input_select" required name="timezone">
                                    <option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">
                                        (GMT-07:00) Mountain Time (US & Canada)
                                    </option>
                                    <option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">
                                        (GMT+00:00) Casablanca, Monrovia, Reykjavik
                                    </option>
                                    <option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                        (GMT+01:00) Brussels, Copenhagen, Madrid, Paris
                                    </option>

                                    <option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">
                                        (GMT-12:00) International Date Line West
                                    </option>
                                    <option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">
                                        (GMT-11:00) Midway Island, Samoa
                                    </option>
                                    <option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">
                                        (GMT-10:00) Hawaii
                                    </option>
                                    <option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">
                                        (GMT-09:00) Alaska
                                    </option>
                                    <option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">
                                        (GMT-08:00) Pacific Time (US & Canada)
                                    </option>
                                    <option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">
                                        (GMT-08:00) Tijuana, Baja California
                                    </option>
                                    <option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">
                                        (GMT-07:00) Arizona
                                    </option>
                                    <option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">
                                        (GMT-07:00) Chihuahua, La Paz, Mazatlan
                                    </option>
                                    <option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">
                                        (GMT-06:00) Central America
                                    </option>
                                    <option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">
                                        (GMT-06:00) Central Time (US & Canada)
                                    </option>
                                    <option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">
                                        (GMT-06:00) Guadalajara, Mexico City, Monterrey
                                    </option>
                                    <option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">
                                        (GMT-06:00) Saskatchewan
                                    </option>
                                    <option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">
                                        (GMT-05:00) Bogota, Lima, Quito, Rio Branco
                                    </option>
                                    <option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">
                                        (GMT-05:00) Eastern Time (US & Canada)
                                    </option>
                                    <option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">
                                        (GMT-05:00) Indiana (East)
                                    </option>
                                    <option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">
                                        (GMT-04:00) Atlantic Time (Canada)
                                    </option>
                                    <option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">
                                        (GMT-04:00) Caracas, La Paz
                                    </option>
                                    <option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">
                                        (GMT-04:00) Manaus
                                    </option>
                                    <option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">
                                        (GMT-04:00) Santiago
                                    </option>
                                    <option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">
                                        (GMT-03:30) Newfoundland
                                    </option>
                                    <option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">
                                        (GMT-03:00) Brasilia
                                    </option>
                                    <option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">
                                        (GMT-03:00) Buenos Aires, Georgetown
                                    </option>
                                    <option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">
                                        (GMT-03:00) Greenland
                                    </option>
                                    <option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">
                                        (GMT-03:00) Montevideo
                                    </option>
                                    <option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">
                                        (GMT-02:00) Mid-Atlantic
                                    </option>
                                    <option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">
                                        (GMT-01:00) Cape Verde Is.
                                    </option>
                                    <option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">
                                        (GMT-01:00) Azores
                                    </option>
                                    <option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">
                                        (GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London
                                    </option>
                                    <option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                        (GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna
                                    </option>
                                    <option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                        (GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague
                                    </option>
                                    <option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                        (GMT+01:00) Brussels, Copenhagen, Madrid, Paris
                                    </option>
                                    <option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                        (GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb
                                    </option>
                                    <option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">
                                        (GMT+01:00) West Central Africa
                                    </option>
                                    <option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Amman
                                    </option>
                                    <option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Athens, Bucharest, Istanbul
                                    </option>
                                    <option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Beirut
                                    </option>
                                    <option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Cairo
                                    </option>
                                    <option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">
                                        (GMT+02:00) Harare, Pretoria
                                    </option>
                                    <option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius
                                    </option>
                                    <option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Jerusalem
                                    </option>
                                    <option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Minsk
                                    </option>
                                    <option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">
                                        (GMT+02:00) Windhoek
                                    </option>
                                    <option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">
                                        (GMT+03:00) Kuwait, Riyadh, Baghdad
                                    </option>
                                    <option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">
                                        (GMT+03:00) Moscow, St. Petersburg, Volgograd
                                    </option>
                                    <option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">
                                        (GMT+03:00) Nairobi
                                    </option>
                                    <option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">
                                        (GMT+03:00) Tbilisi
                                    </option>
                                    <option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">
                                        (GMT+03:30) Tehran
                                    </option>
                                    <option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">
                                        (GMT+04:00) Abu Dhabi, Muscat
                                    </option>
                                    <option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">
                                        (GMT+04:00) Baku
                                    </option>
                                    <option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">
                                        (GMT+04:00) Yerevan
                                    </option>
                                    <option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">
                                        (GMT+04:30) Kabul
                                    </option>
                                    <option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">
                                        (GMT+05:00) Yekaterinburg
                                    </option>
                                    <option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">
                                        (GMT+05:00) Islamabad, Karachi, Tashkent
                                    </option>
                                    <option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">
                                        (GMT+05:30) Sri Jayawardenapura
                                    </option>
                                    <option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">
                                        (GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi
                                    </option>
                                    <option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">
                                        (GMT+05:45) Kathmandu
                                    </option>
                                    <option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">
                                        (GMT+06:00) Almaty, Novosibirsk
                                    </option>
                                    <option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">
                                        (GMT+06:00) Astana, Dhaka
                                    </option>
                                    <option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">
                                        (GMT+06:30) Yangon (Rangoon)
                                    </option>
                                    <option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">
                                        (GMT+07:00) Bangkok, Hanoi, Jakarta
                                    </option>
                                    <option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">
                                        (GMT+07:00) Krasnoyarsk
                                    </option>
                                    <option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                        (GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi
                                    </option>
                                    <option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                        (GMT+08:00) Kuala Lumpur, Singapore
                                    </option>
                                    <option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                        (GMT+08:00) Irkutsk, Ulaan Bataar
                                    </option>
                                    <option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                        (GMT+08:00) Perth
                                    </option>
                                    <option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">
                                        (GMT+08:00) Taipei
                                    </option>
                                    <option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">
                                        (GMT+09:00) Osaka, Sapporo, Tokyo
                                    </option>
                                    <option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">
                                        (GMT+09:00) Seoul
                                    </option>
                                    <option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">
                                        (GMT+09:00) Yakutsk
                                    </option>
                                    <option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">
                                        (GMT+09:30) Adelaide
                                    </option>
                                    <option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">
                                        (GMT+09:30) Darwin
                                    </option>
                                    <option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">
                                        (GMT+10:00) Brisbane
                                    </option>
                                    <option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">
                                        (GMT+10:00) Canberra, Melbourne, Sydney
                                    </option>
                                    <option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">
                                        (GMT+10:00) Hobart
                                    </option>
                                    <option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">
                                        (GMT+10:00) Guam, Port Moresby
                                    </option>
                                    <option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">
                                        (GMT+10:00) Vladivostok
                                    </option>
                                    <option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">
                                        (GMT+11:00) Magadan, Solomon Is., New Caledonia
                                    </option>
                                    <option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">
                                        (GMT+12:00) Auckland, Wellington
                                    </option>
                                    <option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">
                                        (GMT+12:00) Fiji, Kamchatka, Marshall Is.
                                    </option>
                                    <option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">
                                        (GMT+13:00) Nuku'alofa
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="input_select" required name='currency'>
                                    <option value="USD" selected="selected">United States Dollars</option>
                                    <option value="EUR">Euro</option>
                                    <option value="GBP">United Kingdom Pounds</option>
                                    <option value="DZD">Algeria Dinars</option>
                                    <option value="ARP">Argentina Pesos</option>
                                    <option value="AUD">Australia Dollars</option>
                                    <option value="ATS">Austria Schillings</option>
                                    <option value="BSD">Bahamas Dollars</option>
                                    <option value="BBD">Barbados Dollars</option>
                                    <option value="BEF">Belgium Francs</option>
                                    <option value="BMD">Bermuda Dollars</option>
                                    <option value="BRR">Brazil Real</option>
                                    <option value="BGL">Bulgaria Lev</option>
                                    <option value="CAD">Canada Dollars</option>
                                    <option value="CLP">Chile Pesos</option>
                                    <option value="CNY">China Yuan Renmimbi</option>
                                    <option value="CYP">Cyprus Pounds</option>
                                    <option value="CSK">Czech Republic Koruna</option>
                                    <option value="DKK">Denmark Kroner</option>
                                    <option value="NLG">Dutch Guilders</option>
                                    <option value="XCD">Eastern Caribbean Dollars</option>
                                    <option value="EGP">Egypt Pounds</option>
                                    <option value="FJD">Fiji Dollars</option>
                                    <option value="FIM">Finland Markka</option>
                                    <option value="FRF">France Francs</option>
                                    <option value="DEM">Germany Deutsche Marks</option>
                                    <option value="XAU">Gold Ounces</option>
                                    <option value="GRD">Greece Drachmas</option>
                                    <option value="HKD">Hong Kong Dollars</option>
                                    <option value="HUF">Hungary Forint</option>
                                    <option value="ISK">Iceland Krona</option>
                                    <option value="INR">India Rupees</option>
                                    <option value="IDR">Indonesia Rupiah</option>
                                    <option value="IEP">Ireland Punt</option>
                                    <option value="ILS">Israel New Shekels</option>
                                    <option value="ITL">Italy Lira</option>
                                    <option value="JMD">Jamaica Dollars</option>
                                    <option value="JPY">Japan Yen</option>
                                    <option value="JOD">Jordan Dinar</option>
                                    <option value="KRW">Korea (South) Won</option>
                                    <option value="LBP">Lebanon Pounds</option>
                                    <option value="LUF">Luxembourg Francs</option>
                                    <option value="MYR">Malaysia Ringgit</option>
                                    <option value="MXP">Mexico Pesos</option>
                                    <option value="NLG">Netherlands Guilders</option>
                                    <option value="NZD">New Zealand Dollars</option>
                                    <option value="NOK">Norway Kroner</option>
                                    <option value="PKR">Pakistan Rupees</option>
                                    <option value="XPD">Palladium Ounces</option>
                                    <option value="PHP">Philippines Pesos</option>
                                    <option value="XPT">Platinum Ounces</option>
                                    <option value="PLZ">Poland Zloty</option>
                                    <option value="PTE">Portugal Escudo</option>
                                    <option value="ROL">Romania Leu</option>
                                    <option value="RUR">Russia Rubles</option>
                                    <option value="SAR">Saudi Arabia Riyal</option>
                                    <option value="XAG">Silver Ounces</option>
                                    <option value="SGD">Singapore Dollars</option>
                                    <option value="SKK">Slovakia Koruna</option>
                                    <option value="ZAR">South Africa Rand</option>
                                    <option value="KRW">South Korea Won</option>
                                    <option value="ESP">Spain Pesetas</option>
                                    <option value="XDR">Special Drawing Right (IMF)</option>
                                    <option value="SDD">Sudan Dinar</option>
                                    <option value="SEK">Sweden Krona</option>
                                    <option value="CHF">Switzerland Francs</option>
                                    <option value="TWD">Taiwan Dollars</option>
                                    <option value="THB">Thailand Baht</option>
                                    <option value="TTD">Trinidad and Tobago Dollars</option>
                                    <option value="TRL">Turkey Lira</option>
                                    <option value="VEB">Venezuela Bolivar</option>
                                    <option value="ZMK">Zambia Kwacha</option>
                                    <option value="EUR">Euro</option>
                                    <option value="XCD">Eastern Caribbean Dollars</option>
                                    <option value="XDR">Special Drawing Right (IMF)</option>
                                    <option value="XAG">Silver Ounces</option>
                                    <option value="XAU">Gold Ounces</option>
                                    <option value="XPD">Palladium Ounces</option>
                                    <option value="XPT">Platinum Ounces</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <select id="input_select" name='unit_system' required>
                                    <option value="metric">Metric US (kilogram - Meter)</option>
                                    <option value="imperial">Imperial EU (Pound - Yard)</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <input type="button" name="previous" class="previous action-button-previous"
                           value="@lang('site.previous')"/>
                    <input type="submit" name="submit" class="submit action-button" value="@lang('site.create')"/>
                </fieldset>
            </form>

            <!-- /.link to designify.me code snippets -->
        </div>
    </div>
    <!-- /.MultiStep Form -->
    <!--IMAGE PREVIEW-->
    <div id="myModal" class="modal">
        <img class="modal-content" id="img01">
    </div>
</div>
<!-------------------------------------------------------------------------------------->

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script !src="">

    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function () {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function () {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale(' + scale + ')', 'opacity': opacity});
            },
            duration: 800,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(document).ready(function () {
        setTimeout(function () {
            $('#error_div').hide();
        }, 5000);
    });

</script>
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
</body>
</html>