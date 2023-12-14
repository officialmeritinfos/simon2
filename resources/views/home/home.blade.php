@extends('home.base')
@section('content')


    <!-- Start Main Slider -->
    <section class="main-slider style1">
        <div class="slider-box">
            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url({{asset('home/images/agro5.jpg')}})">
                    </div>
                    <div class="shape-box"></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>
                                    Sow, Grow<span class="dotted"></span><br>
                                    Harvest<span class="dotted"></span><br>
                                    Prosperity<span class="dotted"></span>
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="{{route('register')}}">
                                        <span class="txt">
                                            Get Started<i class="icon-refresh arrow"></i>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url({{asset('home/images/realsave.jpg')}})">
                    </div>
                    <div class="shape-box"></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>
                                    Unlocking Opportunities<span class="dotted"></span><br>
                                    In<span class="dotted"></span><br>
                                    Real Estate<span class="dotted"></span>
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="{{route('register')}}">
                                        <span class="txt">
                                            Get Started<i class="icon-refresh arrow"></i>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url({{asset('home/images/gold.jpg')}})">
                    </div>
                    <div class="shape-box"></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>
                                    Shine in  <span class="dotted"></span><br>
                                    Precious<span class="dotted"></span><br>
                                    Investments<span class="dotted"></span>
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="{{route('register')}}">
                                        <span class="txt">
                                            Get Started<i class="icon-refresh arrow"></i>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer" style="background-image:url({{asset('home/images/stock4.jpg')}})">
                    </div>
                    <div class="shape-box"></div>
                    <div class="auto-container">
                        <div class="content">
                            <div class="big-title">
                                <h2>
                                    Unleashing  <span class="dotted"></span><br>
                                    the Power<span class="dotted"></span><br>
                                    of Technology in Stock<span class="dotted"></span>
                                </h2>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="{{route('register')}}">
                                        <span class="txt">
                                            Get Started<i class="icon-refresh arrow"></i>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!--Start Service Style1 Area-->
    <section class="service-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="service-style1__title">
                        <div class="sec-title sec-title--style2">
                            <div class="sub-title">
                                <div class="border-box"></div>
                                <h3>What we do</h3>
                            </div>
                            <h2>Services We’re<br> Offering</h2>
                        </div>
                        <div class="inner-text">
                            <p>We are utilizing a super AI-model based strategy to ensure that you have the best returns possible.</p>
                        </div>

                        <div class="video-holder-box">
                            <div class="video-gallery-style1">
                                <div class="video-gallery-style1__bg"
                                     style="background-image: url({{asset('home/images/resources/video-gallery-style1-bg.jpg')}});">
                                </div>
                                <div class="icon wow zoomIn animated" data-wow-delay="300ms"
                                     data-wow-duration="1500ms">
                                    <a class="video-popup" title="Video Gallery"
                                       href="https://www.youtube.com/watch?v=p25gICT63ek">
                                        <span class="fa fa-play"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="service-style1__content">
                        <div class="row justify-content-center">
                            @foreach($services as $service)
                                <!--Start Single Service Style1-->
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="single-service-style1">
                                        <div class="shape-box"></div>
                                        <div class="icon-holder">
                                            <span class="icon-report"></span>
                                        </div>
                                        <div class="title-holder">
                                            <h3>
                                                <a href="{{route('service.details',['id'=>$service->id])}}">
                                                    {{$service->title}}
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service Style1-->
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Service Style1 Area-->

    <!--Start About Style1 Area-->
    <section class="about-style1-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>About Us</h3>
                </div>
                <h2>We’re Providing the<br> Best Solution by Experts</h2>
            </div>
            <div class="row text-right-rtl">

                <div class="col-xl-6">
                    <div class="about-style1__image clearfix">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                        <div class="inner">
                            <img src="{{asset('home/images/about/about-style1__image-1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-style1__content">
                        <div class="inner-content">

                            <div class="top-text">
                                <h3>Your Gateway to financial freedom</h3>
                                <p>
                                    Welcome to {{$siteName}}, your all-in-one destination for navigating the world of investments.
                                    Specializing in Agriculture, stocks,
                                    retirement planning, gold, medical cannabis, and oil and gas,
                                    {{$siteName}} is your gateway to a diverse range of lucrative opportunities.
                                </p>
                            </div>

                            <ul>
                                <li>
                                    <span class="icon-check"></span>
                                    Automated Returns
                                </li>
                                <li>
                                    <span class="icon-check"></span>
                                    Audited by experts
                                </li>
                                <li>
                                    <span class="icon-check"></span>
                                    Agriculture and Real Estate dominated
                                </li>
                                <li>
                                    <span class="icon-check"></span>
                                    AI-driven strategies
                                </li>
                            </ul>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="progress-block">
                                        <div class="inner-box">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#20bad1"
                                                       data-bgColor="#eff7f8" data-width="100" data-height="100"
                                                       data-linecap="normal" value="90">
                                                <div class="inner-text count-box">
                                                        <span class="count-text" data-stop="90"
                                                              data-speed="2000"></span>%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="outer-text">
                                            <h3>Clients<br> Satisfied</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="progress-block">
                                        <div class="inner-box">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#20bad1"
                                                       data-bgColor="#eff7f8" data-width="100" data-height="100"
                                                       data-linecap="normal" value="50">
                                                <div class="inner-text count-box">
                                                        <span class="count-text" data-stop="50"
                                                              data-speed="2000"></span>M+
                                                </div>
                                            </div>
                                        </div>
                                        <div class="outer-text">
                                            <h3>Payouts<br> Made</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Style1 Area-->

    <!--Start Slogan Style3 Area-->
    <section class="slogan-style3-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slogan-style3__content" data-aos="slide-up" data-aos-easing="linear"
                         data-aos-duration="500">
                        <h3> Your path to prosperity begins here, where we navigate the markets of today and tomorrow, turning opportunities into triumphs.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Slogan Style3 Area-->

    <!--Start working process Area-->
    <section class="working-process-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>our work process</h3>
                </div>
                <h2>How We Work</h2>
            </div>
            <div class="row">

                <!--Start working process Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process__single wow fadeInRight" data-wow-delay="100ms"
                         data-wow-duration="1500ms">
                        <div class="working-process__single-inner">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('home/images/resources/working-process-img1.jpg')}}" alt="" />
                                </div>
                                <div class="counting"></div>
                            </div>

                            <div class="content-box text-center">
                                <h3><a href="#">SIGN UP</a></h3>
                                <p>
                                    Register a free account and start your first step to yieldind daily income from our Agro, Real estate, gold mine and stock market projects.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End working process Single-->

                <!--Start working process Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process__single wow fadeInRight" data-wow-delay="300ms"
                         data-wow-duration="1500ms">
                        <div class="working-process__single-inner">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('home/images/deposit.png')}}" alt="" />
                                </div>
                                <div class="counting"></div>
                            </div>

                            <div class="content-box text-center">
                                <h3><a href="#">FUND YOUR REGISTERED ACCOUNT</a></h3>
                                <p>Fund your registered account by paying into the company's account to enable you buy a share and earn in any of our projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End working process Single-->
                <!--Start working process Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process__single wow fadeInRight" data-wow-delay="500ms"
                         data-wow-duration="1500ms">
                        <div class="working-process__single-inner">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('home/images/resources/working-process-img3.jpg')}}" alt="" />
                                </div>
                                <div class="counting"></div>
                            </div>

                            <div class="content-box text-center">
                                <h3><a href="#">ENROLL IN A PACKAGE</a></h3>
                                <p>
                                    select a suitable level percentage share, which ranges from level 1-3 in any of our
                                    AGRO, REAL ESTATE, STOCK MARKET or GOLD MINE projects and invest to start earning.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End working process Single-->
                <!--Start working process Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="working-process__single wow fadeInRight" data-wow-delay="700ms"
                         data-wow-duration="1500ms">
                        <div class="working-process__single-inner">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{asset('home/images/withdraw.jpg')}}" alt="" />
                                </div>
                                <div class="counting"></div>
                            </div>

                            <div class="content-box text-center">
                                <h3><a href="#">WITHDRAWAL</a></h3>
                                <p>After a successful investment, profit can be withdrawn once the investment duration is
                                    completed. On the 7th day, your earnings will automatically stop. You can as well decide to reinvest.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End working process Single-->

            </div>
        </div>
    </section>
    <!--End working process Area-->


    <!--Start Case Stories Area-->
    <section class="case-stories-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>our recent work</h3>
                </div>
                <h2>Our Projects</h2>
            </div>
            <div class="row">
                <!--Start Case Stories Single-->
                <div class="col-xl-6 col-lg-6">
                    <div class="case-stories__single">
                        <div class="img-box">
                            <img src="{{asset('home/images/ricefarm.jpg')}}" alt="">
                        </div>
                        <div class="content-box">
                            <div class="top-text">
                                <h2>Growing Food <br>Sufficiency <br> through Rice</h2>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Case Stories Single-->
                <!--Start Case Stories Single-->
                <div class="col-xl-6 col-lg-6">
                    <div class="case-stories__single">
                        <div class="img-box">
                            <img src="{{asset('home/images/realestate.jpg')}}" alt="">
                        </div>
                        <div class="content-box">
                            <div class="top-text">
                                <h2>Antique <br>Realtor <br> New York</h2>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Case Stories Single-->
                <!--Start Case Stories Single-->
                <div class="col-xl-6 col-lg-6">
                    <div class="case-stories__single">
                        <div class="img-box">
                            <img src="{{asset('home/images/realestatedc.jpg')}}" alt="">
                        </div>
                        <div class="content-box">
                            <div class="top-text">
                                <h2>Realtor <br>Service <br> Washington DC</h2>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Case Stories Single-->
                <!--Start Case Stories Single-->
                <div class="col-xl-6 col-lg-6">
                    <div class="case-stories__single">
                        <div class="img-box">
                            <img src="{{asset('home/images/yam.jpeg')}}" alt="">
                        </div>
                        <div class="content-box">
                            <div class="top-text">
                                <h2>Mechanized <br>Yam <br> production</h2>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Case Stories Single-->
                <!--Start Case Stories Single-->
                <div class="col-xl-6 col-lg-6">
                    <div class="case-stories__single">
                        <div class="img-box">
                            <img src="{{asset('home/images/goldmining.jpg')}}" alt="">
                        </div>
                        <div class="content-box">
                            <div class="top-text">
                                <h2>Gold <br>Mining
                                    <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Case Stories Single-->
                <!--Start Case Stories Single-->
                <div class="col-xl-6 col-lg-6">
                    <div class="case-stories__single">
                        <div class="img-box">
                            <img src="{{asset('home/images/stocktrade.jpg')}}" alt="">
                        </div>
                        <div class="content-box">
                            <div class="top-text">
                                <h2>Stock <br>Trading
                                    <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Case Stories Single-->


            </div>
        </div>
    </section>
    <!--End Case Stories Area-->

    <!--Start slogan area-->
    <section class="slogan-area">
        <div class="slogan-area__bg"
             style="background-image: url({{asset('home/images/parallax-background/slogan-area-bg.jpg')}});"></div>
        <div class="shape wow slideInRight" data-wow-delay="1400ms" data-wow-duration="5500ms"
             style="background-image: url({{asset('home/images/shape/shape-1.png')}});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slogan-text-box">
                        <h2 class="paroller">REFERRAL <span
                                style="background-image: url({{asset('home/images/shape/zig-zag.png')}});"><br/></span><br></h2>
                        <p class="text-white" style="margin-top: 4rem;">
                            In {{$siteName}} it is much more profitable to invest together. Why? Because by inviting friends via your
                            referral link 5% commission on every new level of the investor who registered directly from your referral link.
                            The affiliate program has 1 level of commission. Meaning you can only earn from your direct referrals.
                        </p>
                        <div class="slogan-btn-box">
                            <a class="btn-one" href="{{route('register')}}">
                                <span class="txt">Get Started</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End slogan area-->

    <!--Start Testimonial Style1 Area-->
    <section class="testimonial-style1-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="border-box"></div>
                    <h3>our testimonials</h3>
                </div>
                <h2>What They Say?</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-style1-content">
                        <div class="theme_carousel testimonial-carousel owl-theme owl-carousel" data-options='{
                                    "loop": true,
                                    "margin": 30,
                                    "autoheight":true,
                                    "lazyload":true,
                                    "nav": false,
                                    "dots": false,
                                    "autoplay": true,
                                    "autoplayTimeout": 5000,
                                    "smartSpeed": 500,
                                    "navText": ["<span class=\"left icon-next\"></span>",
                                    "<span class=\"right icon-next\"></span>"],
                                    "responsive":{
                                    "0" :{ "items": "1" },
                                    "600" :{ "items" : "1" },
                                    "768" :{ "items" : "1" },
                                    "992":{ "items" : "2" },
                                    "1200":{ "items" : "2" }
                                }
                            }'>

                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="text">
                                    <p>
                                        {{$siteName}} transformed my approach to real estate investing. Their insightful
                                        strategies opened doors to hidden gems in the market, and their commitment to
                                        innovation reassured me that I'm on the right path to financial success.
                                    </p>
                                </div>
                                <div class="bottom-box">
                                    <div class="client-name">
                                        <h3>Christine Rose</h3>
                                        <span>Customer</span>
                                    </div>
                                    <div class="client-img">
                                        <div class="inner">
                                            <img src="https://ui-avatars.com/api/?name=Christine+Rose&size=100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->

                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="text">
                                    <p>
                                        Investing in gold was always a mystery to me until I found {{$siteName}}. Their expertise
                                        demystified the precious metal market, and now I confidently navigate the golden
                                        opportunities they present. Trust them to turn your investments into shining success stories.
                                    </p>
                                </div>
                                <div class="bottom-box">
                                    <div class="client-name">
                                        <h3>Mike Hardson</h3>
                                        <span>Customer</span>
                                    </div>
                                    <div class="client-img">
                                        <div class="inner">
                                            <img src="https://ui-avatars.com/api/?name=Mike+Hardson&size=100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->

                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="text">
                                    <p>
                                        {{$siteName}}'s dedication to sustainable agriculture investments aligns perfectly with
                                        my values. Their guidance goes beyond profits; it's about fostering a greener
                                        future while reaping the rewards. Joining hands with {{$siteName}} means investing in
                                        a world that thrives, both financially and environmentally.
                                    </p>
                                </div>
                                <div class="bottom-box">
                                    <div class="client-name">
                                        <h3>Samuel F.</h3>
                                        <span>Customer</span>
                                    </div>
                                    <div class="client-img">
                                        <div class="inner">
                                            <img src="https://ui-avatars.com/api/?name=Samuel+F&size=100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->
                            <div class="single-testimonial-style1">
                                <div class="text">
                                    <p>
                                        In the fast-paced world of stocks, {{$siteName}} stands out with its AI-driven approach.
                                        The accuracy and foresight their technology provides give me a significant edge in
                                        the market. With {{$siteName}}, I feel confident, informed, and ready to seize every
                                        opportunity the stock market throws my way.
                                    </p>
                                </div>
                                <div class="bottom-box">
                                    <div class="client-name">
                                        <h3>Mike Hardson</h3>
                                        <span>Customer</span>
                                    </div>
                                    <div class="client-img">
                                        <div class="inner">
                                            <img src="https://ui-avatars.com/api/?name=Emily+G&size=100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial Style1-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Style1 Area-->

    <!--Start Partner Area-->
    <section class="partner-area">
        <div class="container">
            <div class="brand-content">
                <div class="inner">
                    <ul class="partner-box partner-carousel owl-carousel owl-theme owl-dot-style1 rtl-carousel">
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"><img src="{{asset('home/images/micropep.jpg')}}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"><img src="{{asset('home/images/atmonia.png')}}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"><img src="{{asset('home/images/tillo.png')}}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <li class="single-partner-logo-box">
                            <a href="#"><img src="{{asset('home/images/weedout.png')}}" alt="Awesome Image"></a>
                        </li>
                        <!--End Single Partner Logo Box-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Partner Area-->



@endsection
