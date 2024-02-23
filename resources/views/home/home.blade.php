@extends('home.base')
@section('content')

    <!-- Banner/Slider -->
    <div id="header" class="banner align-items-center" style="position:relative;top:85px;min-height:unset;">
        <div class="container">
            <div class="circlelarge"></div>
            <div class="banner-content">
                <div class="row align-items-center mobile-center mt-5">
                    <div class="col-lg-6 col-md-12 order-lg-first">
                        <div class="header-txt">
                            <h1 class="animated" data-animate="fadeInUp" data-delay="1.2">WELCOME TO {{$siteName}}</h1>
                            <p class="lead animated" data-animate="fadeInUp" data-delay="1.65">We are a Swiss multinational commodity trading and mining company with headquarters in Basel, Switzerland, and its registered office in Saint Helier, Jersey.</p>
                            <ul class="btns animated" data-animate="fadeInUp" data-delay="1.75">
                                <li><a href="{{route('register')}}" class="btn">Register</a></li>
                                <li><a href="{{route('login')}}" class="btn btn-alt">Login</a></li>
                            </ul>
                        </div>
                    </div><!-- .col  -->
                    <div class="col-lg-6 col-md-12 order-first">
                        <div class="header-image animated" data-animate="fadeInRight" data-delay="1">
                            <img src="{{asset('home/inc/forex-trading.png')}}" alt="header" style="position:relative;left:-18%;top:-100px;">
                            <!-- <img class="header-image-icon left-icon" src="images/header-icon-a.png')}}" alt="header-icon">
                            <img class="header-image-icon right-icon" src="images/header-icon-b.png')}}" alt="header-icon"> -->
                        </div>
                    </div><!-- .col  -->
                </div><!-- .row  -->
            </div><!-- .banner-content  -->
        </div><!-- .container  -->
    </div>
    <!-- End Banner/Slider -->
    </header>
    <!-- End Header -->
    <!-- Start Section -->
    <div class="section section-pad section-bg-dark blog-section mt-5 pb-0" id="blogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 mb-5">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                            {
                                "symbols": [
                                {
                                    "proName": "BITSTAMP:BTCUSD",
                                    "title": "Bitcoin"
                                },
                                {
                                    "proName": "BITSTAMP:ETHUSD",
                                    "title": "Ethereum"
                                },
                                {
                                    "description": "Ripple",
                                    "proName": "CURRENCYCOM:XRPUSD"
                                },
                                {
                                    "description": "Litecoin",
                                    "proName": "COINBASE:LTCUSD"
                                },
                                {
                                    "description": "Cardano",
                                    "proName": "BINANCE:ADAUSDT"
                                },
                                {
                                    "description": "Binance",
                                    "proName": "BYBIT:BNBUSDT"
                                }
                            ],
                                "showSymbolLogo": true,
                                "colorTheme": "light",
                                "isTransparent": false,
                                "displayMode": "adaptive",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
                <div class="col">
                    <div class="section-head">
                        <h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">PLAN
                            <span>PLAN</span>
                        </h2>
                    </div>
                </div>
            </div><!-- .row -->
            <div class="blog-list">
                <div class="row justify-content-center">
                    @foreach($packages as $package)
                        @inject('option','App\Defaults\Custom')
                        <div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2">
                            <div class="blog-item animated" data-animate="fadeInUp" data-delay="0">
                                <div class="blog-photo" style="background:#08091b">
                                    <img src="{{asset('home/images/blog-thumb-b.jpg')}}" style="opacity:0.2;">
                                    <h5 class="blog-title text-center" style="position:absolute;top:90px;right:100px;">
                                        {{$package->name}} <br>{{$package->roi}}% {{$option->getReturnType($package->returnType)}}
                                    </h5>
                                </div>
                                <div class="blog-texts">
                                    <ul class="mt-3 text-center">
                                        <li>FOR {{$package->Duration}}</li>
                                        <li>${{number_format($package->minAmount,2)}} MINIMUM</li>
                                        <li>@if($package->isUnlimited !=1)
                                                ${{number_format($package->maxAmount,2)}}
                                            @else
                                                Unlimited
                                            @endif MAXIMUM</li>
                                        <li>Referral bonus : {{$package->referral}}%</li>
                                    </ul>
                                    <a href="{{route('register')}}" class="invest_now">INVEST NOW</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div><!-- .row -->
            </div><!-- .blog-list -->
        </div><!-- .container -->
    </div>
    <!-- Start Section -->




    <!-- Start Section -->
    <div class="section section-pad no-pb section-bg-alt" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 offset-md-1">
                    <!-- <div class="blickBl"></div> -->
                    <div class="res-m-btm animated" data-animate="fadeInUp" data-delay=".1">
                        <div class="logo_disp"></div>
                    </div>
                </div><!-- .col  -->
                <div class="col-md-6 order-md-first order-last">
                    <div class="text-block">
                        <h4 class="animated" data-animate="fadeInUp" data-delay="0">Quick Review</h4>
                        <p class="lead animated" data-animate="fadeInUp" data-delay=".1">Welcome to {{$siteName}}</p>
                        <p class="animated" data-animate="fadeInUp" data-delay=".2">Looking for highest returns on your Bitcoin investments? {{$siteName}} is an automatic online investment platform, part of {{$siteName}} – team of professional traders focusing mainly on Crypto Trading over multiple Exchanges and markets. Thanks to the extraordinary diversification of our investments, we are able to deliver steady income for our investors.</p>


                        <p class="animated" data-animate="fadeInUp" data-delay=".2">Headquarters in Basel, Switzerland and been operating and meeting the investment needs of our clients since in 2017, {{$siteName}} is already becoming the Switzerland's fastest growing Crypto Trading company. Our name is synonymous with effective and profitable Crypto Trading solutions where our investors need little to no trading experience at all. With {{$siteName}}, investors choose one of our four simple bitcoin investment plans, make a deposit and sit back while our experts go to work. They can withdraw their initial deposit any time and schedule withdrawals quickly and easily through our website. If you have been looking for an easy to use Bitcoin investment platform, choose {{$siteName}} now and let our professionals help you choose an investment plan that meets your needs today!</p>
                    </div>
                </div><!-- .col  -->
            </div><!-- .row  -->
        </div><!-- .conatiner  -->
    </div>
    <!-- Start Section -->


    <!-- Start Section -->
    <div class="section section-pad section-bg-btoa" id="apps">
        <div class="container">
            <div class="circlelarge2"></div>

            <div class="row text-center">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="section-head">
                        <div class="heading-animation">
                            <span class="line-1"></span><span class="line-2"></span>
                            <span class="line-3"></span><span class="line-4"></span>
                            <span class="line-5"></span><span class="line-6"></span>
                            <span class="line-7"></span><span class="line-8"></span>
                        </div>
                        <h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">AFFILIATE COMMISSION
                            <span>AFFILIATE</span>
                        </h2>
                        <p class="animated" data-animate="fadeInUp" data-delay=".1">START YOUR OWN AFFILIATE EMPIRE OR BECOME A REPRESENTATIVE.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="res-m-btm animated" data-animate="fadeInUp" data-delay=".1">
                        <img src="{{asset('home/images/graph-dark-c.png')}}" alt="graph">
                    </div>
                </div><!-- .col  -->

                <div class="col-md-5 offset-md-1">
                    <div class="text-block">
                        <p class="animated" data-animate="fadeInUp" data-delay="0">Our referral program will help you earn additional income. Share information about our investment offer with friends or colleagues and send them your unique referral link. You will receive 10% referral commission from all their investments. Members don’t need to have an active deposit to participate in the referral program.</p>
                        <p class="animated" data-animate="fadeInUp" data-delay=".1">If you are interested in {{$siteName}}.com regional representative program and wish to become our regional representative in your country, please click "Become a Representative" button and send us your username, name and surname, country you are from and contact (email). If we are interested in your offer, we will send you more instructions within few days. To be qualified for {{$siteName}}.com regional representative program you need to have an active deposit of more than Ƀ1.</p>

                        <ul class="btns">
                            <li class="animated" data-animate="fadeInUp" data-delay="0"><a href="register" class="btn btn-sm">GET STARTED</a></li>
                        </ul>
                    </div>
                </div><!-- .col  -->
            </div><!-- .row  -->

            <div class="row mt-5 text-center align-items-center">
                <div class="col-md-12">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_c6ca2"></div>
                        <script type="text/javascript" src="https:///s3.tradingview.com/tv.js')}}"></script>
                        <script type="text/javascript">
                            new TradingView.MediumWidget(
                                {
                                    "symbols": [
                                        [
                                            "Bitcoin",
                                            "BINANCE:BTCUSDT|12M"
                                        ]
                                    ],
                                    "chartOnly": false,
                                    "width": 1000,
                                    "height": 400,
                                    "locale": "en",
                                    "colorTheme": "dark",
                                    "gridLineColor": "rgba(255, 255, 0, 0)",
                                    "fontColor": "#787B86",
                                    "isTransparent": false,
                                    "autosize": false,
                                    "showVolume": true,
                                    "scalePosition": "no",
                                    "scaleMode": "Normal",
                                    "fontFamily": "-apple-system, BlinkMacSystemFont, SegoeUI, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                                    "noTimeScale": false,
                                    "valuesTracking": "1",
                                    "chartType": "area",
                                    "lineColor": "#2962ff",
                                    "topColor": "rgba(41, 98, 255, 0.3)",
                                    "bottomColor": "rgba(41, 98, 255, 0)",
                                    "container_id": "tradingview_c6ca2"
                                }
                            );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>

        </div><!-- .container  -->
    </div>
    <!-- Start Section -->

@endsection
