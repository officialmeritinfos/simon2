@extends('home.base')
@section('content')

    <!-- Banner/Slider -->
    <div id="header" class="banner align-items-center section-bg-dark" style="position:relative;top:85px;min-height:unset;">
        <div class="container">
            <div class="circlelarge"></div>
            <div class="banner-content">
                <div class="row align-items-center mobile-center mt-5">
                    <div class="col-lg-6 col-md-12 order-lg-first">
                        <div class="header-txt">
                            <h1 class="animated" data-animate="fadeInUp" data-delay="1.2">{{$pageName}}</h1>
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
                <div class="col">

                </div>
            </div><!-- .row -->
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
                        <p class="lead animated" data-animate="fadeInUp" data-delay=".1">Welcome to {{$siteName}}</p>
                        <p class="animated" data-animate="fadeInUp" data-delay=".2">Headquarters in Basel, Switzerland and been operating and meeting the investment needs of our clients since in 2017, {{$siteName}} is already becoming the Switzerland’s fastest growing bitcoin trading company. Our name is synonymous with effective and profitable bitcoin trading solutions where our investors need little to no trading experience at all. With {{$siteName}}, investors choose one of our four simple bitcoin investment plans, make a deposit and sit back while our experts go to work. They can withdraw their initial deposit any time and schedule withdrawals quickly and easily through our website. If you have been looking for an easy to use bitcoin investment platform, choose {{$siteName}} now and let our professionals help you choose an investment plan that meets your needs today!.</p>
                    </div>
                </div><!-- .col  -->
            </div><!-- .row  -->
        </div><!-- .conatiner  -->
    </div>
    <!-- Start Section -->


    <!-- Start Section -->
    <div class="section section-pad section-bg-btoa pb-2" id="apps">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="section-head">
                        <h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">WHO WE ARE
                            <span>{{$siteName}}</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="res-m-btm animated" data-animate="fadeInUp" data-delay=".1">
                        <img src="{{asset('home/inc//n1.png')}}" alt="graph">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="text-block">
                        <p class="animated" data-animate="fadeInUp" data-delay="0">{{$siteName}} is made up of a young team of financial experts who are focused on creating profitable bitcoin investment solutions. From the board of directors, coder and day traders, to our night traders and support staff, we have many years of experience in the financial market and specialise in bitcoin trading.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section -->

    <div class="section section-pad section-bg-btoa section-bg-dark pb-2">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="section-head">
                        <h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">HOW WE TRADE
                            <span>{{$siteName}}</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-md-6">
                    <div class="text-block">
                        <p class="animated" data-animate="fadeInUp" data-delay="0">As a result of its innovative structure, Bitcoin is extremely volatile, making it an excellent currency to add to your portfolio. Our bitcoin trading professionals constantly watch the markets and trade when bitcoin prices are low. Once we have achieved our set goals or when the market prices rise, we begin to sell off the bitcoins at a much higher rate.</p>
                    </div>
                </div>
                <div class="col-md-4 offset-2">
                    <div class="res-m-btm animated" data-animate="fadeInUp" data-delay=".1">
                        <img src="{{asset('home/inc//n2.png')}}" alt="graph">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-pad section-bg-btoa section-bg-dark pb-2">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="section-head mb-0">
                        <h2 class="section-title animated mb-0" data-animate="fadeInUp" data-delay="0">ADVANTAGES OF TRADING BITCOINS WITH US
                            <span>{{$siteName}}</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="res-m-btm animated" data-animate="fadeInUp" data-delay=".1">
                        <img src="{{asset('home/inc//n3.png')}}" alt="graph">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-block">
                        <p class="animated" data-animate="fadeInUp" data-delay="0">
                        <ul>
                            <li>Guaranteed profit</li>
                            <li>No risk of loosing capital</li>
                            <li>High Leverage</li>
                            <li>No International Boundaries</li>
                            <li>No Commissions</li>
                            <li>No Cost of Trading</li>
                            <li>Low Initial Deposit</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
