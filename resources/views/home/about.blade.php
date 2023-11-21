@extends('home.base')
@section('content')

    <!-- Hero area starts-->
    <section class="hero-area ">
        <div class="hero-banner">
            <div class="inner-hero">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="hero-text">
                                <h2>{{$pageName}}</h2>
                                <span><a href="{{url('/')}}" class="home">Home</a> | <a href="#" class="disabled">{{$pageName}}</a></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area ends -->

    <!-- About Area Starts -->
    <section class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <div class="sub-heading">
                                <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                                <p>Who we are</p>
                            </div>
                            <h2>Building Financial Stability</h2>
                        </div>

                        <div class="text-content">
                            <p>
                                We started by providing smart, simple investing, without the high fees and account minimums
                                associated with traditional investment management. We invest your money in a globally
                                diversified portfolio of low-cost index funds, and our cutting-edge technology helps you
                                earn the best possible return, while optimizing your tax bill. This means we do things like
                                automatic rebalancing, dividend reinvesting, and tax loss harvesting — services that were
                                only available to the ultra rich until now or that most people found too time-consuming
                                and tedious to do on their own.
                            </p>
                            <p>
                                Our expert financial advisors are always available when you need them. They can help plan
                                your financial milestones and answer questions you might have about potential risks or
                                what sort of investment accounts you should have.
                            </p>

                            <div class="progress-wrapper">
                                <div class="progress-one">
                                    <div class="progress-bar" data-percent="75" data-duration="1000"></div>
                                    <h5>Asset Management</h5>
                                </div>

                                <div class="progress-two">
                                    <div class="progress-bar" data-percent="95" data-duration="1000"></div>
                                    <h5>Financial Investment</h5>
                                </div>
                            </div>

                            <p>
                                Investing is just one part of your financial picture. So, we've introduced more ways to
                                reach your goals and manage your money. High interest savings. Commission-free trading.
                                And features — like automatically investing your spare change — that make it easier to
                                save for your future. That's because we believe that everyone should have access to the
                                tools they need to make smart financial choices.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 r-margin-top">

                    <div class="about-img">
                        <img src="{{asset('home/images/about-image.png')}}" alt="team">
                        <img src="{{asset('home/images/abt-overlay.png')}}" alt="overlay" class="overlay">
                    </div>

                    <div class="experience">
                        <span>15</span>
                        <p>Years of experience</p>
                    </div>

                    <div class="quote">
                        <h5>We’re Committed For Creating Change.</h5>
                        <div class="quote-info">
                            <img src="{{asset('home/images/small-image.png')}}" alt="man">

                            <div class="meta-info">
                                <p>Joseph Colman</p>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top: 8rem;">
                    <p>{{$siteName}} is an automatic online investment platform established by a team of professional traders focusing mainly
                        on crypto currency trading over multiple exchanges and market. Adding value to the team of like minded
                        businessmen specialist in Bitcoin mining. Our company has been growing fast by expanding trade industry
                        and mining techniques and rolling more elite traders and Miners respectively. {{$siteName}} is helping to educate,
                        provide service for, secure, protect and ultimately profit from this emerging industry.
                        Anyone all over the world can join {{$siteName}} and began earning passive income by taking advantage of
                        our expertise in Bitcoin mining and crypto currency trading.
                    </p>
                    <p>
                        Recently, our company made a successful attempt the international technology market with an
                        offer of profitable investments in financial investments. Our main aim is to provide safe and
                        secured returns to our investors with effective and profitable trading and mining solutions
                        where investors need little or no experience at all about the same. Our investors can choose
                        one of three lucrative yet simple investment plan with {{$siteName}}. If you want to join us, to earn
                        over a period of long time then all you need to do is to register on our website, make deposit
                        and sit back and relax while our experts work for you. We are expanding our features by providing
                        you instant deposit and withdrawals. Use the possibilities of the company and earn on daily basis.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- About area ends -->

    <!-- Offer area starts -->
    <section class="offer" style="margin-top: -8rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <div class="sub-heading">
                            <p>OUR PURPOSE</p>
                        </div>
                        <h2>Our common Purpose is Creating opportunities to rise.</h2>
                    </div>
                </div>

                <div class="col-md-6 row justify-content-center">
                    <div class="col-lg-6 r-mb">
                        <div class="offer-wrapper">
                            <iconify-icon icon="fluent-mdl2:design"></iconify-icon>
                            <h5>Explore With Us</h5>
                            <p>
                                Seize the opportunity to grow your capital in the stock market by copying the trades of top
                                preforming traders in our investment programme
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 r-mb">
                        <div class="offer-wrapper">
                            <iconify-icon icon="fluent:archive-settings-24-regular"></iconify-icon>
                            <h5>Investment Management</h5>
                            <p>
                                We deliver active stock investment strategies across public and private markets and custom
                                solutions to institutional and individual investors.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="offer-wrapper">
                            <iconify-icon icon="carbon:application-web"></iconify-icon>
                            <h5>High Frequency Trading</h5>
                            <p>
                                Global institutions, leading hedge funds and industry innovators turn to Century21 company's
                                trading advice and market-making services.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 margin-top">
                        <div class="offer-wrapper">
                            <iconify-icon icon="ant-design:radar-chart-outlined"></iconify-icon>
                            <h5>Wealth Management</h5>
                            <p>
                                We help people, businesses and institutions build, preserve and manage wealth so they can
                                pursue their financial goals.
                            </p>
                        </div>
                    </div>


                </div>
            </div>
    </section>
    <!-- Offer area ends -->

    <!-- Counter starts -->
    <section class="counter" style="margin-top: -12rem;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 r-mb">
                    <div class="counter-img">
                        <img src="{{asset('home/images/counter-img.png')}}" alt="men">
                        <img class="overlay" src="{{asset('home/images/counter-overlay.png')}}" alt="overlay">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                            <p>Our achievements</p>
                        </div>
                        <h2>Building a sustainable finance for you</h2>
                    </div>

                    <div class="text-content">
                        <p>Humans lie, data don't. All independently audited and verified.</p>

                        <div class="counter-wrapper">
                            <div class="single-counter">
                                <h2>50k+</h2>
                                <p>Investors</p>
                            </div>

                            <div class="single-counter pt-28">
                                <img src="{{asset('home/images/counter-arrow.png')}}" alt="arrow">
                                <h2>500M+</h2>
                                <p>Total funds invested</p>
                            </div>

                            <div class="single-counter pt-28">
                                <h2>300M+</h2>
                                <p>profit funds paid out</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter ends -->

    <!-- Choose start -->
    <section class="choose">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 r-mb">
                    <div class="choose-content">
                        <div class="section-title">
                            <div class="sub-heading">
                                <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                                <p>Why choose us</p>
                            </div>
                            <h2>We Are Different From Others</h2>
                        </div>

                        <div class="text-content">
                            <p class="first-child"></p>

                            <div class="list-wrapper">
                                <div class="list-content">
                                    <i class="fas fa-check"></i>
                                    <p>We use the latest technology to protect your information and financial transactions.</p>
                                </div>

                                <div class="list-content">
                                    <i class="fas fa-check"></i>
                                    <p>From strategy to analysis, our tools help you keep track of your finances with ease.</p>
                                </div>

                                <div class="list-content">
                                    <i class="fas fa-check"></i>
                                    <p>We also participate in asset protection programs to further secure your funds.</p>
                                </div>

                                <div class="list-content">
                                    <i class="fas fa-check"></i>
                                    <p>We are providing investors access to investments previously available to the top 1%.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="counter-img">
                        <img src="{{asset('home/images/choose-img.png')}}" alt="women">
                        <img class="overlay" src="{{asset('home/images/counter-overlay.png')}}" alt="overlay">
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- Choose ends -->

@endsection
