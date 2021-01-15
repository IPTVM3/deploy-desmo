@extends('dashboard.index')


@section('title')
    @lang('site.store')
@endsection



@section('header_links')
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('../../plugins/summernote/summernote-bs4.css')}}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{asset('../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">

    <style>

        #msform_general,
        #msform_format,
        #msform_social {
            display: none;
        }

        /*inputs*/
        #msform_general input, #msform_general textarea, #input_select,
        #msform_format input, #msform_format textarea,
        #msform_social input, #msform_social textarea {
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
    </style>
@endsection


@section('content')



    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a  href="{{url('dashboard/settings')}}" class="btn btn-default btn-sm" style=" border-style: none !important;background-color: #efefef" onclick="window.history.back()"><i class="fas fa-chevron-left"></i> @lang('site.setting')</a>
                    <h1>@lang('site.store')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">@lang('site.dashboard')</a></li>
                        <li class="breadcrumb-item"><a href="{{url('dashboard/settings')}}">@lang('site.setting')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('site.store')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        <!-- Default box -->
        <div class="card  card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">@lang('site.store_general_details') - @lang('site.store_policy') </h3>


                <div class="card-tools">
                    <button type="button" class="btn btn-warning" id="save_policy"   >
                       @lang('site.save')</button>

                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="col-md-12">
                            <form method="post" id="form_policy" action="{{ route('settings.store.editpolicy') }}"
                                  enctype="multipart/form-data">

                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <div class="card">

                                    <div class="card-header">
                                        <h3 class="card-title">
                                            @lang('site.refund_policy')
                                        </h3>
                                        <!-- tools box -->
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pad">
                                        <div class="mb-3">

                                                <textarea class="textarea" placeholder="Place some text here" name="refund_policy"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"> {{$store->policy->refund_policy }} </textarea>


                                        </div>

                                    </div>


                                </div>

                                <div class="card">

                                    <div class="card-header">
                                        <h3 class="card-title">
                                            @lang('site.privacy_policy')
                                        </h3>
                                        <!-- tools box -->
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pad">
                                        <div class="mb-3">

                                                <textarea class="textarea" placeholder="Place some text here" name="privacy_policy"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"> {{$store->policy->privacy_policy }} </textarea>


                                        </div>

                                    </div>


                                </div>

                                <div class="card">

                                    <div class="card-header">
                                        <h3 class="card-title">
                                            @lang('site.shipping_policy')
                                        </h3>
                                        <!-- tools box -->
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pad">
                                        <div class="mb-3">

                                                <textarea class="textarea" placeholder="Place some text here" name="shipping_policy"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"> {{$store->policy->shipping_policy }} </textarea>


                                        </div>

                                    </div>


                                </div>

                                <div class="card">

                                    <div class="card-header">
                                        <h3 class="card-title">
                                            @lang('site.terms_of_service')
                                        </h3>
                                        <!-- tools box -->
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pad">
                                        <div class="mb-3">

                                                <textarea class="textarea" placeholder="Place some text here" name="terms_of_service"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"> {{$store->policy->terms_of_service }} </textarea>


                                        </div>

                                    </div>


                                </div>

                                <div class="card">

                                    <div class="card-header">
                                        <h3 class="card-title">
                                            @lang('site.faq')
                                        </h3>
                                        <!-- tools box -->
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pad">
                                        <div class="mb-3">

                                                <textarea class="textarea" placeholder="Place some text here" name="faq"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"> {{$store->policy->faq }} </textarea>


                                        </div>

                                    </div>


                                </div>

                                <div class="card">

                                    <div class="card-header">
                                        <h3 class="card-title">
                                            @lang('site.team')
                                        </h3>
                                        <!-- tools box -->
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pad">
                                        <div class="mb-3">

                                                <textarea class="textarea" placeholder="Place some text here" name="team"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"> {{$store->policy->team }} </textarea>


                                        </div>

                                    </div>


                                </div>

                                <div class="card">

                                    <div class="card-header">
                                        <h3 class="card-title">
                                            @lang('site.about_us')
                                        </h3>
                                        <!-- tools box -->
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pad">
                                        <div class="mb-3">

                                                <textarea class="textarea" placeholder="Place some text here" name="about_us"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"> {{$store->policy->about_us }} </textarea>


                                        </div>

                                    </div>


                                </div>

                                <div class="card">

                                    <div class="card-header">
                                        <h3 class="card-title">
                                            @lang('site.contact_us')
                                        </h3>
                                        <!-- tools box -->
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                                    data-toggle="tooltip" title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pad">
                                        <div class="mb-3">

                                                <textarea class="textarea" placeholder="Place some text here" name="contact_us"
                                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"> {{$store->policy->contact_us }} </textarea>


                                        </div>

                                    </div>


                                </div>



                            </form>
                        </div>
                        <p class="text-sm mb-0">
                            @lang('site.store_policy_agreed')
                        </p>
                    </div>


                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <div class="text-center" >
                            <img class="profile-user-img img-fluid img-circle"  
                                 alt="User profile picture">
                        </div>
                        <h3 class="text-primary"><i class="fas fa-paint-brush"></i> {{ $store->name }}</h3>
                        <p class="text-muted">{{ $store->bio_desc }}</p>
                        <br>

                        <div class="text-muted">
                            <p class="text-sm"><b class="d-block">@lang('site.store_general_details') <i
                                            id="i-store-details" style="color: green;"
                                            class="fas fa-edit fa-lg"></i></b>
                            @lang('site.store_details_description')
                            <ul class="list-unstyled" id="p-store-details">

                                <li>


                                    @lang('site.legal_name') :

                                    <a href="" class="btn-link text-secondary">
                                        <b>{{ ucfirst($store->legal_name)  }}</b>
                                        <i class="fas fa-balance-scale"></i>

                                    </a>
                                </li>

                                <li>
                                    @lang('site.email') :
                                    <a href="" class="btn-link text-secondary">
                                        <b> {{ ucfirst($store->email)  }}</b>
                                        <i class="fas fa-envelope"></i>

                                    </a>
                                </li>

                                <li>
                                    @lang('site.address') :
                                    <a href="" class="btn-link text-secondary">
                                        <b>{{ strtoupper($store->fullAddress()) }} </b><i
                                                class="fas fa-address-book"></i>
                                        <br> <b>{{ ucfirst($store->city)  }}</b>,
                                        <b>{{ strtoupper($store->country)}}</b>

                                    </a>
                                </li>

                                <li>
                                    @lang('site.phone') :
                                    <a href="" class="btn-link text-secondary">
                                        <b>{{ ucfirst($store->phone)  }}</b>
                                        <i class="fas fa-mobile"></i>
                                    </a>
                                </li>

                                <li>
                                    @lang('site.fix') :
                                    <a href="" class="btn-link text-secondary">
                                        <b>{{ ucfirst($store->fix)  }}</b>
                                        <i class="fas fa-phone"></i>
                                    </a>
                                </li>

                            </ul>
                            <div id="msform_general">
                                <form method="POST" action="{{ route('settings.store.editgeneral') }}"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <input type="text" name='name' placeholder="@lang('auth.name')"
                                           value="{{$store->name}}" autofocus required/>
                                    <input type="text" name='legal_name' placeholder="@lang('site.legal_name')"
                                           value="{{$store->legal_name}}" required/>
                                    <input type="text" name='email' placeholder="@lang('auth.email')"
                                           value="{{$store->email}}" required/>
                                    <input type="number" name='phone' placeholder="@lang('site.phone')"
                                           value="{{$store->phone}}" required/>
                                    <input type="number" name='fix' placeholder="@lang('site.fix')"
                                           value="{{$store->fix}}" required/>
                                    <textarea type="text" name='bio_desc'
                                              placeholder="@lang('site.bio')">{{$store->bio_desc}}</textarea>

                                    <input class="file-input" type="file" name='logo' placeholder="@lang('site.logo')"   />


                                    <div class="row">
                                        <div class="input-group">
                                            <div class="col-md-8">
                                                <input type="text" name="address" placeholder="@lang('site.address')"
                                                       value="{{$store->address}}" required/>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="apartement"
                                                       placeholder="@lang('site.apartement')"
                                                       value="{{$store->apartement}}"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-group">
                                            <div class="col-md-4">
                                                <input type="text" name="street" placeholder="@lang('site.street')"
                                                       value="{{$store->street}}"/>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="zip_code" placeholder="@lang('site.zip_code')"
                                                       required value="{{$store->zip_code}}"/>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="city" placeholder="@lang('site.city')" required
                                                       value="{{$store->city}}"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <select id="input_select" value="{{$store->country}}" required
                                                        name="country">
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
                                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter
                                                    </option>
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
                                                    <option value="Central African Republic">Central African Republic
                                                    </option>
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
                                                    <option value="Republic of Montenegro">Republic of Montenegro
                                                    </option>
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
                                                    <option value="St Vincent & Grenadines">St Vincent & Grenadines
                                                    </option>
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
                                                    <option value="United States of America">United States of America
                                                    </option>
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input type="submit" class="btn btn-info" value="@lang('site.edit')">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input type="button" class="btn btn-warning" id="cancel_general"
                                                       value="@lang('site.cancel')">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </p>
                            <p class="text-sm"><b class="d-block">@lang('site.format_standard') <i style="color: green;"
                                                                                                   id="i-format-standard"
                                                                                                   class="fas fa-edit fa-lg"></i></b>
                            @lang('site.format_standard_description')

                            <ul class="list-unstyled" id="p-format-standard">
                                <li>
                                    @lang('site.timezone') :
                                    <a href="" class="btn-link text-secondary">
                                        <b>{{ $store->timezone }}</b>
                                        <i class="fas fa-calendar-times"></i>
                                    </a>
                                </li>
                                <li>
                                    @lang('site.currency') :
                                    <a href="" class="btn-link text-secondary">
                                        <b>{{ $store->currency }}</b>
                                        <i class="fas fa-dollar-sign"></i>
                                    </a>
                                </li>
                                <li>
                                    @lang('site.unit_system') :
                                    <a href="" class="btn-link text-secondary">
                                        @if($store->unit_system == "EUR")
                                            <b>EUR - (Kilogram - Meter)</b>
                                        @else
                                            <b>US - (Pound - Yard)</b>
                                        @endif
                                    </a>
                                    <i class="fas fa-universal-access"></i>
                                </li>

                            </ul>

                            <div id="msform_format">

                                <form method="POST" action="{{ route('settings.store.editformat') }}">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
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

                                        <option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0"
                                                value="-12">(GMT-12:00) International Date Line West
                                        </option>
                                        <option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0"
                                                value="-11">(GMT-11:00) Midway Island, Samoa
                                        </option>
                                        <option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0"
                                                value="-10">(GMT-10:00) Hawaii
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
                                        <option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0"
                                                value="-6">(GMT-06:00) Central America
                                        </option>
                                        <option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1"
                                                value="-6">(GMT-06:00) Central Time (US & Canada)
                                        </option>
                                        <option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1"
                                                value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey
                                        </option>
                                        <option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0"
                                                value="-6">(GMT-06:00) Saskatchewan
                                        </option>
                                        <option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0"
                                                value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco
                                        </option>
                                        <option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1"
                                                value="-5">(GMT-05:00) Eastern Time (US & Canada)
                                        </option>
                                        <option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1"
                                                value="-5">(GMT-05:00) Indiana (East)
                                        </option>
                                        <option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1"
                                                value="-4">(GMT-04:00) Atlantic Time (Canada)
                                        </option>
                                        <option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0"
                                                value="-4">(GMT-04:00) Caracas, La Paz
                                        </option>
                                        <option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0"
                                                value="-4">(GMT-04:00) Manaus
                                        </option>
                                        <option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1"
                                                value="-4">(GMT-04:00) Santiago
                                        </option>
                                        <option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1"
                                                value="-3.5">(GMT-03:30) Newfoundland
                                        </option>
                                        <option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1"
                                                value="-3">(GMT-03:00) Brasilia
                                        </option>
                                        <option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0"
                                                value="-3">(GMT-03:00) Buenos Aires, Georgetown
                                        </option>
                                        <option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1"
                                                value="-3">(GMT-03:00) Greenland
                                        </option>
                                        <option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1"
                                                value="-3">(GMT-03:00) Montevideo
                                        </option>
                                        <option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1"
                                                value="-2">(GMT-02:00) Mid-Atlantic
                                        </option>
                                        <option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0"
                                                value="-1">(GMT-01:00) Cape Verde Is.
                                        </option>
                                        <option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1"
                                                value="-1">(GMT-01:00) Azores
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
                                        <option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1"
                                                value="3.5">(GMT+03:30) Tehran
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
                                        <option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0"
                                                value="4.5">(GMT+04:30) Kabul
                                        </option>
                                        <option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">
                                            (GMT+05:00) Yekaterinburg
                                        </option>
                                        <option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">
                                            (GMT+05:00) Islamabad, Karachi, Tashkent
                                        </option>
                                        <option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0"
                                                value="5.5">(GMT+05:30) Sri Jayawardenapura
                                        </option>
                                        <option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0"
                                                value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi
                                        </option>
                                        <option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0"
                                                value="5.75">(GMT+05:45) Kathmandu
                                        </option>
                                        <option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">
                                            (GMT+06:00) Almaty, Novosibirsk
                                        </option>
                                        <option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">
                                            (GMT+06:00) Astana, Dhaka
                                        </option>
                                        <option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0"
                                                value="6.5">(GMT+06:30) Yangon (Rangoon)
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
                                        <option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0"
                                                value="9.5">(GMT+09:30) Adelaide
                                        </option>
                                        <option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0"
                                                value="9.5">(GMT+09:30) Darwin
                                        </option>
                                        <option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0"
                                                value="10">(GMT+10:00) Brisbane
                                        </option>
                                        <option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1"
                                                value="10">(GMT+10:00) Canberra, Melbourne, Sydney
                                        </option>
                                        <option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1"
                                                value="10">(GMT+10:00) Hobart
                                        </option>
                                        <option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0"
                                                value="10">(GMT+10:00) Guam, Port Moresby
                                        </option>
                                        <option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1"
                                                value="10">(GMT+10:00) Vladivostok
                                        </option>
                                        <option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1"
                                                value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia
                                        </option>
                                        <option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1"
                                                value="12">(GMT+12:00) Auckland, Wellington
                                        </option>
                                        <option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0"
                                                value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.
                                        </option>
                                        <option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0"
                                                value="13">(GMT+13:00) Nuku'alofa
                                        </option>
                                    </select>
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
                                    <select id="input_select" name='unit_system' required>
                                        <option value="AZ9biz-p-nI_M77P-pXWJr_hwnBgs_Fud3sy3oji2he7KKCZDQOU029SuTPGbNwTkmbt7xORsmRrlvaP">PAYPAL AISSAM</option> 
                                        <option value="AbS2vbSL9rKbJXruUK2xWgb4yN4Qb7ULNLeJzC2ELWsEfB49xUn92nvQJEnm1giIZFZJY4vAMDkWe6Rf">PAYPAL CHAKIB</option>
                                        <option value="ibzan">PAYPAL MON POTE</option>
                                        <option value="ikochan">PAYPAL TWAFIK</option>
                                    </select>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input type="submit" class="btn btn-info" value="@lang('site.edit')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input type="button" class="btn btn-warning" id="cancel_format"
                                                       value="@lang('site.cancel')">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>


                            </p>

                            <p class="text-sm"><b class="d-block">@lang('site.social_profiles') <i style="color: green;"
                                                                                                   id="i-social-profiles"
                                                                                                   class="fas fa-edit fa-lg"></i>
                                </b>
                            @lang('site.social_description')

                            <ul class="list-unstyled" id="p-social-profiles">

                                @foreach($store->socialmedias as $index => $link)
                                    <li>
                                        {{ ucfirst($link->type) }} :
                                        <a href="{{ $link->address }}" class="btn-link text-secondary " target="_blank">
                                            <b> {{ $link->address }}</b>
                                            <i class="fab fa-{{ $link->type }}"></i>
                                        </a>
                                    </li>
                                @endforeach


                            </ul>

                            <div id="msform_social">
                                <form method="POST" action="{{ route('settings.store.editprofile') }}">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}


                                    @foreach($store->socialmedias as $index => $link)
                                        <input type="text" name="social[]" placeholder="{{ $link->type }}"
                                               value="{{ $link->address }}"/>
                                    @endforeach


                                    @for ($i = 0; $i < 4 - count($store->socialmedias) ; $i++)
                                        <input type="text" name="social[]"
                                               placeholder="@lang('site.if_u_want_to_add')"/>
                                    @endfor

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input type="submit" class="btn btn-info" value="@lang('site.edit')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <input type="button" class="btn btn-warning" id="cancel_social"
                                                       value="@lang('site.cancel')">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>

@endsection

@section('header_script')
    <!-- Summernote -->
    <script src="{{asset('../../plugins/summernote/summernote-bs4.min.js')}}"></script>

    <!-- Summernote -->
    <script src="{{asset('../../plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
       $(function () {
           $('.textarea').summernote()
       })
       var p_social_profiles = document.getElementById('p-social-profiles');
       var i_social_profiles = document.getElementById('i-social-profiles');
       var msform_social = document.getElementById('msform_social');
       var cancel_social = document.getElementById('cancel_social');

       var p_format_standard = document.getElementById('p-format-standard');
       var i_format_standard = document.getElementById('i-format-standard');
       var msform_format = document.getElementById('msform_format');
       var cancel_format = document.getElementById('cancel_format');

       var p_store_details = document.getElementById('p-store-details');
       var i_store_details = document.getElementById('i-store-details');
       var msform_general = document.getElementById('msform_general');
       var cancel_general = document.getElementById('cancel_general');

       i_store_details.addEventListener('click', (e) => {
           p_store_details.setAttribute('style', 'display: none;')
           msform_general.setAttribute('style', 'display: block;')
       })

       i_format_standard.addEventListener('click', (e) => {
           p_format_standard.setAttribute('style', 'display: none;')
           msform_format.setAttribute('style', 'display: block;')
       })

       i_social_profiles.addEventListener('click', (e) => {
           p_social_profiles.setAttribute('style', 'display: none;')
           msform_social.setAttribute('style', 'display: block;')
       })

       cancel_social.addEventListener('click', (e) => {
           p_social_profiles.setAttribute('style', 'display:block ;')
           msform_social.setAttribute('style', 'display: none;')
       })

       cancel_format.addEventListener('click', (e) => {

           p_format_standard.setAttribute('style', 'display:block ;')
           msform_format.setAttribute('style', 'display: none;')
       })

       cancel_general.addEventListener('click', (e) => {
           p_store_details.setAttribute('style', 'display:block ;')
           msform_general.setAttribute('style', 'display: none;')

       })


       var save_policy = document.getElementById('save_policy');
       var form_policy =  document.getElementById('form_policy');

       save_policy.addEventListener('click',(e)=>{
           form_policy.submit();
       })

   </script>
@endsection
