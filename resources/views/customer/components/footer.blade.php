<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                @lang('fashe.get_in_touch')
            </h4>

            <div>
                <p class="s-text7 w-size27">

                    @lang('fashe.get_in_touch_description')
                </p>

                <div class="flex-m p-t-30">

                    @foreach(\App\Store::first()->socialmedias as $social)
                        <a href="{{$social->address}}" class="fs-18 color1 p-r-20 fa fa-{{$social->type}}"></a>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                @lang('fashe.categories')
            </h4>

            @php
                $categories = [array('Man','#'),array('Women','#'),array('Dresses','#'),array('Sunglasses','#')];
            @endphp
            <ul>

                @foreach($categories as $categorie)
                <li class="p-b-9">
                    <a href="{{$categorie[1]}}" class="s-text7">
                        {{$categorie[0]}}
                    </a>
                </li>
                    @endforeach

            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                @lang('fashe.links')
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">

                        @lang('fashe.team')
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">

                        @lang('fashe.about')
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        @lang('fashe.contact')
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">

                        @lang('fashe.returns')
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                @lang('fashe.help')
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        @lang('fashe.track_order')
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        @lang('fashe.policy')
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        @lang('fashe.shipping')
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        @lang('fashe.faqs')
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                @lang('fashe.newsletter')
            </h4>

            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        @lang('fashe.subscribe')
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="{{asset('fashe/images/icons/paypal.png')}}" alt="IMG-PAYPAL">
        </a>

        <a href="#">
            <img class="h-size2" src="{{asset('fashe/images/icons/visa.png')}}" alt="IMG-VISA">
        </a>

        <a href="#">
            <img class="h-size2" src="{{asset('fashe/images/icons/mastercard.png')}}" alt="IMG-MASTERCARD">
        </a>

        <a href="#">
            <img class="h-size2" src="{{asset('fashe/images/icons/express.png')}}" alt="IMG-EXPRESS">
        </a>

        <a href="#">
            <img class="h-size2" src="{{asset('fashe/images/icons/discover.png')}}" alt="IMG-DISCOVER">
        </a>

        <div class="t-center s-text8 p-t-20">
            Copyright &copy; 2020-{{ now()->year }} {{ config('app.name', 'Laravel') }}  | @lang('fashe.template_made') <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://Recod.com" target="_blank">RECOD</a>
        </div>
    </div>
</footer>

