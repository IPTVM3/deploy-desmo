<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                @foreach(\App\Store::first()->socialmedias as $social)
                    <a href="{{$social->address}}" class="topbar-social-item fa fa-{{$social->type}}"></a>
                @endforeach
            </div>

            <span class="topbar-child1">
					@lang('fashe.header_offer')
				</span>

            <div class="topbar-child2">
					<span class="topbar-email">
						{{ \App\Store::first()->email }}
					</span>

                <div class="topbar-language rs1-select2">
                    <select class="selection-1" name="time">
                        <option>@lang('fashe.language')</option>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <option href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                    hreflang="{{ $localeCode }}" class="dropdown-item ">

                                @if($properties['native'] == 'English')
                                    <i class="flag-icon flag-icon-us mr-2 "></i>
                                @else
                                    <i class="flag-icon flag-icon-{{App::getLocale()}} mr-2 "></i>
                                @endif
                                {{ ucfirst($properties['native'])}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="wrap_header">
            <!-- Logo -->
            <a href="index.html" class="logo">
                <img src="{{asset('fashe/images/icons/logo.png')}}" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        @php
                            $header_links = [array(__('fashe.home'),'/'),
                                             array(__('fashe.shop'),'/products'),
                                             array(__('fashe.sale'),'/sale'),
                                             array(__('fashe.features'),'/features'),
                                             array(__('fashe.about'),'/about'),
                                             array(__('fashe.team'),'/team'),
                                             array(__('fashe.contact'),'/contact'),
                                             ];
                        @endphp


                        @foreach($header_links as $link)
                            <li>
                                <a href="{{ url($link[1]) }}">{{ $link[0] }}</a>
                            </li>
                        @endforeach


                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">

                @if(auth()->check())
                    <a  class="header-wrapicon1 dis-block">
                        {{ auth()->user()->first_name .' '.auth()->user()->last_name }}
                        <img src="{{asset('fashe/images/icons/icon-header-01.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    </a>
                @else
                   <a href="{{ url('login') }}" class="header-wrapicon1 dis-block">
                        <img src="{{asset('fashe/images/icons/icon-header-01.png')}}" class="header-icon1 " alt="ICON">
                    </a>
                @endif

                <span class="linedivide1"></span>

                <div class="header-wrapicon2">
                    <img src="{{asset('fashe/images/icons/icon-header-02.png')}}"
                         class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span>

                @php
                    $cards_items = [array('White Shirt With Pleat Detail Back',19.00,1,'fashe/images/item-cart-01.jpg')]
                @endphp


                <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">

                            @foreach($cards_items as $card)

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{asset($card[3])}}" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            {{$card[0]}}
                                        </a>

                                        <span class="header-cart-item-info">
											{{$card[2]}} x $ {{$card[1]}}
										</span>
                                    </div>
                                </li>


                            @endforeach


                        </ul>

                        <div class="header-cart-total">
                            @lang('fashe.total'): $75.00
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    @lang('fashe.view_card')
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    @lang('fashe.checkout')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="index.html" class="logo-mobile">
            <img src="{{asset('fashe/images/icons/logo.png')}}" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="{{asset('fashe/images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide2"></span>

                <div class="header-wrapicon2">
                    <img src="{{asset('fashe/images/icons/icon-header-02.png')}}"
                         class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">

                            @foreach($cards_items as $card)

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{asset($card[3])}}" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            {{$card[0]}}
                                        </a>

                                        <span class="header-cart-item-info">
											{{$card[2]}} x $ {{$card[1]}}
										</span>
                                    </div>
                                </li>
                            @endforeach


                        </ul>

                        <div class="header-cart-total">
                            Total: $75.00
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    @lang('fashe.view_card')
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    @lang('fashe.checkout')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu">
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							@lang('fashe.header_offer')
						</span>
                </li>

                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
							<span class="topbar-email">
								{{ \App\Store::first()->email  }}
							</span>

                        <div class="topbar-language rs1-select2">
                            <select class="selection-1" name="time">
                                <option>@lang('fashe.language')</option>
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <option href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                            hreflang="{{ $localeCode }}" class="dropdown-item ">

                                        @if($properties['native'] == 'English')
                                            <i class="flag-icon flag-icon-us mr-2 "></i>
                                        @else
                                            <i class="flag-icon flag-icon-{{App::getLocale()}} mr-2 "></i>
                                        @endif
                                        {{ ucfirst($properties['native'])}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </li>

                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        @foreach(\App\Store::first()->socialmedias as $social)
                            <a href="{{$social->address}}" class="topbar-social-item fa fa-{{$social->type}}"></a>
                        @endforeach

                    </div>
                </li>

                @foreach($header_links as $link)
                    <li class="item-menu-mobile">
                        <a href="{{ url($link[1]) }}">{{ $link[0] }}</a>
                    </li>
                @endforeach


            </ul>
        </nav>
    </div>
</header>