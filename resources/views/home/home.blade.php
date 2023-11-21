@extends('home.base')
@section('content')
    @push('css')
        <style>
            .single-price {
                text-align: center;
                background: #262626;
                transition: .7s;
                margin-top: 20px;
            }
            .single-price h3 {
                font-size: 25px;
                color: #000;
                font-weight: 600;
                text-align: center;
                margin: 0;
                margin-top: -80px;
                font-family: poppins;
                color: #fff;
            }
            .single-price h4 {
                font-size: 48px;
                font-weight: 500;
                color: #fff;
            }
            .single-price h4 span.sup {
                vertical-align: text-top;
                font-size: 25px;
            }
            .deal-top {
                position: relative;
                background: #1F51FF;
                font-size: 12px;
                padding: 136px 24px 0;
            }
            .deal-top::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: -50px;
                width: 0;
                height: 0;
                border-top: 50px solid #1F51FF;
                border-left: 175px solid transparent;
                border-right: 183px solid transparent;
            }
            .deal-bottom {
                padding: 56px 16px 0;
            }
            .deal-bottom ul {
                margin: 0;
                padding: 0;
            }
            .deal-bottom  ul li {
                font-size: 16px;
                color: #fff;
                font-weight: 300;
                margin-top: 16px;
                border-top: 1px solid #E4E4E4;
                padding-top: 16px;
                list-style: none;
            }
            .btn-area a {
                display: inline-block;
                font-size: 18px;
                color: #fff;
                background: #1F51FF;
                padding: 8px 64px;
                margin-top: 32px;
                border-radius: 4px;
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }


            .single-price:hover {
                background: #1F51FF;
            }
            .single-price:hover .deal-top {
                background: #262626;
            }
            .single-price:hover .deal-top:after {
                border-top: 50px solid #262626;
            }
            .single-price:hover .btn-area a {
                background: #262626;
            }
            .link-area a
            {
                text-decoration:none;
                color:#fff;
                font-size:25px;
            }
        </style>
    @endpush
    <!-- Hero area starts-->
    <section class="hero-area">
        <div class="hero-slider">
            <div class="active-slider">
                <div class="single-slider-one hero-utility">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <div class="hero-text">
                                    <p> <i class="fas fa-angle-double-right"></i> Consultancy Solutions For your finances</p>
                                    <h1>
                                        International Private Equity Company
                                    </h1>
                                </div>

                                <div class="hero-cta d-flex align-items-center">
                                    <a href="{{route('register')}}" class="button header-cta">
                                        Start Membership
                                    </a>
                                    <a href="{{url('about')}}" class="link">About us</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="single-slider-two hero-utility">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <div class="hero-text">
                                    <p> <i class="fas fa-angle-double-right"></i> Trading & Investing</p>
                                    <h1>World-class trading and investing</h1>
                                </div>

                                <div class="hero-cta d-flex align-items-center">
                                    <a href="{{route('register')}}" class="button header-cta">
                                        Start Membership
                                    </a>
                                    <a href="{{url('about')}}" class="link">About us</a>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area ends -->

    <!-- About Area Starts -->
    <section class="about" style="margin-top: -8rem;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <div class="sub-heading">
                                <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                                <p>What we do</p>
                            </div>
                            <h2>We're building the world's most human financial company</h2>
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


                            <a href="{{url('about')}}" class="button header-cta about-btn">Learn More</a>
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
                        <h5>We’re Committed For Creating financial prudence.</h5>
                        <div class="quote-info">
                            <img src="{{asset('home/images/ceo.jpeg')}}" alt="man" class="rounded-circle"
                            style="width: 100px;">

                            <div class="meta-info">
                                <p>Joseph C</p>
                                <span>CEO</span>
                            </div>
                        </div>
                    </div>

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

    <!-- Portfolio area starts -->
    <div class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                            <p>Why Choose Us</p>
                        </div>
                        <h2>Here are why you should Choose us</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="ex-fea-list mb-60">
                        <div class="ex-fea-img mb-30">
                            <img src="https://aitrust24.com/home/img/icon/ex1.png" alt="">
                        </div>
                        <h3>Advanced AI Technology</h3>
                        <p>
                            {{$siteName}} harnesses advanced AI technology to analyze vast amounts of data, identify patterns, and make data-driven investment decisions with speed and precision. By leveraging cutting-edge technology, {{$siteName}} provides clients with a competitive edge and the potential for superior investment performance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ex-fea-list mb-60">
                        <div class="ex-fea-img mb-30">
                            <img src="https://aitrust24.com/home/img/icon/ex2.png" alt="">
                        </div>
                        <h3>Comprehensive Investment Services</h3>
                        <p>
                            {{$siteName}} offers a wide range of investment services, including asset management, stock trading,
                            cryptocurrency investments, and real estate. Clients can benefit from a holistic approach to
                            investment management, catering to their diverse financial goals and risk preferences.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ex-fea-list mb-60">
                        <div class="ex-fea-img mb-30">
                            <img src="https://aitrust24.com/home/img/icon/ex3.png" alt="">
                        </div>
                        <h3>Proactive Risk Management</h3>
                        <p>
                            {{$siteName}} prioritizes risk management to protect clients' investments. The company utilizes sophisticated risk assessment models, AI algorithms, and diversification strategies to identify and mitigate potential risks. By taking a proactive approach to risk management, {{$siteName}} aims to safeguard clients' capital and deliver stable and consistent investment returns.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ex-fea-list mb-60">
                        <div class="ex-fea-img mb-30">
                            <img src="https://aitrust24.com/home/img/icon/ex4.png" alt="">
                        </div>
                        <h3>Expert Team of Professionals</h3>
                        <p>
                            {{$siteName}} boasts a team of financial analysts, data scientists, AI specialists, and industry experts. This multidisciplinary team collaborates to provide clients with expert insights, market analysis, and personalized investment advice to optimize their portfolios.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ex-fea-list mb-60">
                        <div class="ex-fea-img mb-30">
                            <img src="https://aitrust24.com/home/img/icon/ex5.png" alt="">
                        </div>
                        <h3>Market Insights and Trend Identification</h3>
                        <p>
                            {{$siteName}}'s AI-driven market analysis capabilities enable the identification of lucrative investment opportunities and emerging market trends. By monitoring market trends, economic indicators, and historical data, {{$siteName}} provides valuable insights to clients, empowering them to make informed investment decisions and capitalize on market inefficiencies.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ex-fea-list mb-60">
                        <div class="ex-fea-img mb-30">
                            <img src="https://aitrust24.com/home/img/icon/ex6.png" alt="">
                        </div>
                        <h3>Client-Centric Approach</h3>
                        <p>
                            {{$siteName}} prioritizes the unique goals and aspirations of its clients. The company takes a client-centric approach, offering personalized investment solutions tailored to individual risk preferences and financial objectives. Regular communication, transparency, and proactive client service are key aspects of the company's approach.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Portfolio area ends -->

    <!-- About Area Starts -->
    <section class="pricing-area" style="margin-top: 3rem; margin-bottom: 5rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <div class="section-title text-center">
                            <h2>Investment Plans</h2>
                        </div>

                    </div>
                </div>
                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <div class="col-md-4 col-sm-6 col-xs-12 mx-auto">
                        <div class="single-price">
                            <div class="deal-top">
                                <h3>{{$package->name}}</h3>
                                <h4> {{$package->roi}} <sup>%</sup>
                                    <small>{{$option->getReturnType($package->returnType)}}</small>
                                </h4>
                            </div>
                            <div class="deal-bottom">
                                <ul class="deal-item">
                                    <li><b>Minimum Deposit:</b> ${{number_format($package->minAmount,2)}}</li>
                                    <li><b>Maximum Deposit:</b> @if($package->isUnlimited !=1)
                                            ${{number_format($package->maxAmount,2)}}
                                        @else
                                            Unlimited
                                        @endif</li>
                                    <li><b>Profit:</b> {{$package->numberOfReturns*$package->roi}}%</li>
                                    <li><b>Referral Bonus:</b> {{$package->referral}}%</li>
                                    <li><b>Duration:</b> {{$package->Duration}}</li>
                                </ul>
                                <div class="btn-area">
                                    <a href="{{route('register')}}">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <!-- Appointment area starts -->
    <div class="appointment">
        <div class="container">
            <div class="row align-items-center r-center">
                <div class="col-lg-6 r-mb">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/icon-white.png')}}" alt="caret">
                            <p>Get Started</p>
                        </div>
                        <h2>Become a member of the renowned group today!</h2>
                    </div>
                </div>

                <div class="col-lg-6 d-end">
                    <div class="button header-cta appointment-cta">
                        <a href="{{route('register')}}"><span>Make An Appointment <i class="fas fa-arrow-right"></i></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment area ends -->

    <!-- Testimonials starts -->
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 z-id-10">
                    <div class="row testimonial-slider">
                        <div class="testimonial-wrapper">
                            <i class="fas fa-quote-left"></i>
                            <p>“ {{$siteName}} has been instrumental in helping me achieve my financial goals. Their AI-driven
                                investment strategies have consistently delivered impressive returns. The team's expertise and personalized
                                approach make me feel confident in my investment decisions. I highly recommend {{$siteName}} to anyone
                                looking for a trustworthy investment partner.”</p>

                            <div class="client-info">
                                <img src="https://ui-avatars.com/api/?name=Adam R &rounded=true" alt="man">
                                <div class="client-name">
                                    <h5>Adam R</h5>
                                    <span>Investor</span>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-wrapper">
                            <i class="fas fa-quote-left"></i>
                            <p>“ I am thrilled with the results I've achieved through {{$siteName}}. Their advanced AI
                                technology and market analysis have allowed me to capitalize on emerging trends and
                                maximize my investment returns. The team's professionalism, regular updates, and transparent
                                communication have made my investment journey a smooth and profitable experience.”</p>

                            <div class="client-info">
                                <img src="https://ui-avatars.com/api/?name=Michael P &rounded=true" alt="man">
                                <div class="client-name">
                                    <h5>Michael P</h5>
                                    <span>Investor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                            <p>Testmonials</p>
                        </div>
                        <h2>What Clients are Saying about our services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials ends -->

    <!-- Video starts -->
    <div class="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 padding-right">
                    <a href="https://www.youtube.com/watch?v=JUmdVYQ-0Aw" class="pulse popup-hero" target="_blank">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Video ends -->


    <!-- Blog starts -->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <div class="sub-heading">
                            <img src="{{asset('home/images/section-title-icon.png')}}" alt="caret">
                            <p>Articles & News</p>
                        </div>
                        <h2>Latest & Greatest</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 r-mb">
                    <div class="blog-wrapper">
                        <rssapp-wall id="tUnw8WjWtYT1oJ3Z"></rssapp-wall>
                        <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Ends -->


@endsection
