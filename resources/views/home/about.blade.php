@extends('home.base')
@section('content')

    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg" style="background-image: url({{asset('home/images/breadcrumb/breadcrumb-1.jpg')}});">
        </div>
        <div class="shape-box"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">

                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active">{{$pageName}}</li>
                            </ul>
                        </div>
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>{{$pageName}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

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
                <div class="col-xl-12 mt-5">
                    <div class="about-style1__content">
                        <div class="inner-content">

                            <div class="top-text">
                                <h3>Our mission</h3>
                                <p>
                                    At {{$siteName}}, our mission is to redefine the landscape of financial success through a harmonious fusion of traditional wisdom and cutting-edge innovation. Guided by unwavering principles of integrity, transparency, and client-centricity, we embark on a relentless pursuit to empower individuals on their journey to prosperity.
                                </p>
                                <p>
                                    We believe in democratizing access to diverse and lucrative investment opportunities, transcending the conventional boundaries of financial markets. Through astute market analysis, pioneering technologies, and a commitment to staying ahead of the curve, we aim to provide our clients with a roadmap to sustainable wealth creation.
                                </p>
                                <p>
                                    At the heart of our mission lies a dedication to fostering financial literacy and empowerment. We strive to be a beacon of education, equipping our clients with the knowledge and tools necessary to make informed decisions that align with their unique financial goals.
                                </p>
                                <p>
                                    {{$siteName}} is not merely an investment company; it is a catalyst for positive change in the financial landscape. We embrace the responsibility to contribute to a more resilient, inclusive, and sustainable global economy. By championing ethical practices, environmental stewardship, and social responsibility, we aspire to create a lasting impact that transcends generations.
                                </p>
                                <p.
                                    In essence, our mission is to be the trusted partner and guiding light for those who dare to dream of financial independence. {{$siteName}} is more than an investment platform; it is a gateway to a future where financial success is not just a destination but a transformative journey—one where innovation, integrity, and inclusivity converge for the benefit of all.
                                </p>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End About Style1 Area-->

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


@endsection
