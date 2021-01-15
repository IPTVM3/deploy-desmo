@extends('customer.index')


@section('content_store')


    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
             style="background-image: url({{asset('fashe/images/heading-pages-02.jpg')}});">
        <h2 class="l-text2 t-center">
            Women
        </h2>
        <p class="m-text13 t-center">
            New Arrivals Women Collection 2018
        </p>
    </section>


    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <h4 class="m-text14 p-b-7">
                            @lang('fashe.categories')
                        </h4>

                        <ul class="p-b-54">
                            <li class="p-t-4">
                                <a href="{{ url('/products') }}" class="s-text13 active1">
                                    @lang('fashe.all')
                                </a>
                            </li>

                            @foreach($categories->take(10) as $categorie)
                                <li class="p-t-4">
                                    <a href="{{route('profile.customers.filter.categorie',$categorie->id)}}"
                                       class="s-text13">
                                        {{ $categorie->name }}
                                    </a>
                                </li>
                            @endforeach

                        </ul>

                        <!--  -->
                        <h4 class="m-text14 p-b-32">
                            @lang('fashe.search')
                        </h4>

                        <div class="search-product pos-relative bo4 of-hidden">
                            <form method="get" action="{{ route('profile.customers.search') }}">
                                {{ csrf_field() }}
                                <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search_product"
                                       placeholder="@lang('fashe.search_product')...">

                                <button type="submit" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                                    <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>


                    </div>
                </div>


                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->
                    <form method="get" action="{{ route('profile.customers.filter') }}" id="form_selector">
                        {{ csrf_field() }}
                        <div class="flex-sb-m flex-w p-b-35">
                            <div class="flex-w">
                                <div class="rs2-select2 m-r-10">
                                    <select class="input_store" name="sorting_normal" id="selector">
                                        <option value="default">@lang('fashe.default_sorting')</option>
                                        <option value="popularity">@lang('fashe.popularity')</option>
                                        <option value="1">@lang('site.price'): @lang('fashe.low_to_high') </option>
                                        <option value="2">@lang('site.price'): @lang('fashe.high_to_low') </option>
                                    </select>
                                </div>

                            </div>

                        </div>
                    </form>

                    <!-- Product -->
                    <div class="row">

                        @if($products->count() != 0)
                            @foreach($products as $product)
                                <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                            <img src="{{asset('img/'.$product->img1)}}" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">


                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        @lang('fashe.checkout')
                                                    </button>
                                                    <br>
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        @lang('fashe.add_to_card')
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">

                                            <a href="{{ url('products/'.$product->id) }}"
                                               class="block2-name dis-block s-text3 p-b-5">
                                                {{ $product['title'] }}
                                            </a>
                                            <p  >{{ $product->notice}} @lang('fashe.avis')
                                                - {{ $product->order}} @lang('fashe.cmd')  </p>
                                            <span class="block2-oldprice m-text7 p-r-5">
                                            ${{ $product['price_before'] }}
                                            </span>

                                            <span class="block2-newprice m-text8 p-r-5">
                                            ${{ $product['price_after'] }}
                                        </span>


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="row">
                                <div class="col-md-4 p-b-30">
                                    <div class="hov-img-zoom">
                                        <img src="https://i.skyrock.net/5534/70705534/pics/2806874663_1.png"
                                             alt="IMG-ABOUT">
                                    </div>
                                </div>
                                <div class="col-md-8 p-b-30">
                                    <h3 class="m-text26 p-t-15 p-b-16">
                                        @lang('fashe.sorry')
                                    </h3>
                                    <p class="p-b-28">
                                        @lang('fashe.no_products')
                                    </p>

                                </div>
                            </div>

                        @endif
                    </div>

                    <div class="float-right">
                        @include('dashboard.components.pagination', ['paginator' => $products])
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('header_script')

    <script>
        $('#selector').change(function () {
            $('#form_selector').submit();
        })
    </script>
@endsection