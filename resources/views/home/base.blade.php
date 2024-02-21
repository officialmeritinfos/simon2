<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('home/fonts/sayinistic-fonts/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('home/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/custom-animate.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/imp.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/rtl.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/swiper.min.css')}}">

    <!-- Module css -->
    <link rel="stylesheet" href="{{asset('home/css/module-css/header-section.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/module-css/banner-section.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/module-css/about-section.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/module-css/blog-section.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/module-css/fact-counter-section.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/module-css/faq-section.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/module-css/contact-page.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/module-css/breadcrumb-section.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/module-css/team-section.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/module-css/partner-section.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/module-css/testimonial-section.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/module-css/services-section.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/module-css/footer-section.css')}}">

    <link href="{{asset('home/css/color/theme-color.css')}}" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">
    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="THE LEADING AGRO, REAL ESTATE, GOLD MINING and STOCK MARKET project company"/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js')}}"></script>
    <script src="{{asset('home/js/html5shiv.js')}}"></script>
    <![endif]-->
    @stack('css')
</head>


<body>

@inject('injected','App\Defaults\Custom')
<div class="boxed_wrapper ltr">

    <!-- preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        @php
                            $letters = str_split($siteName);
                        @endphp
                        @foreach($letters as $letter)
                            <span data-text-preloader="{{$letter}}" class="letters-loading">
                                {{$letter}}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- Main header-->
    <header class="main-header header-style-one">

        <!--Start Header-->
        <div class="header">
            <div class="auto-container">
                <div class="outer-box">

                    <!--Start Header Left-->
                    <div class="header-left">
                        <div class="main-logo-box">
                            <a href="{{url('/')}}">
                                <img src="{{asset('home/images/'.$web->logo)}}" alt="Awesome Logo" title="" style="width: 150px;">
                            </a>
                        </div>


                        <div class="nav-outer style1 clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <div class="inner">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <!-- Main Menu -->
                            <nav class="main-menu style1 navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li>
                                            <a href="{{url('/')}}">
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('about')}}">
                                                <span>About</span>
                                            </a>
                                        </li>

                                        <li class="dropdown"><a href="#"><span>Services</span></a>
                                            <ul>
                                                @foreach($injected->getServices() as $service)
                                                    <li><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#"><span>Pages</span></a>
                                            <ul>
                                                <li><a href="{{url('plans')}}">Plans</a></li>
                                                <li><a href="{{url('faqs')}}">Frequently Asked Questions</a></li>
                                                <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
                                                <li><a href="{{url('privacy')}}">Privacy policy</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#"><span>Account</span></a>
                                            <ul>
                                                <li><a href="{{route('register')}}">Register</a></li>
                                                <li><a href="{{route('login')}}">Login</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('contact')}}"><span>Contact</span></a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>


                    </div>
                    <!--End Header Left-->

                    <!--Start Header Right-->
                    <div class="header-right">
                        @if(!empty($web->phone))
                            <div class="phone-number-box1">
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="phone">
                                    <a href="tel:{{$web->phone}}">{{$web->phone}}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!--End Header Right-->

                </div>
            </div>
        </div>
        <!--End header-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="{{url('/')}}" class="img-responsive">
                            <img src="{{asset('home/images/'.$web->logo)}}" alt="" title="" style="width: 100px;">
                        </a>
                    </div>
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Sticky Header-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{url('/')}}">
                        <img src="{{asset('home/images/'.$web->logo)}}"
                                                                alt="" title="" style="width: 100px;"></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
{{--                <!--Social Links-->--}}
{{--                <div class="social-links">--}}
{{--                    <ul class="clearfix">--}}
{{--                        <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>--}}
{{--                        <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>--}}
{{--                        <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>--}}
{{--                        <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>--}}
{{--                        <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </nav>
        </div>
        <!-- End Mobile Menu -->
    </header>

        @yield('content')
    <!--Start Slogan Style2 Area-->
    <section class="slogan-style2-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slogan-style2-content">
                        <div class="title">
                            <h2>We’re Delivering the Best<br> Customer Experience</h2>
                        </div>
                        <div class="button-box">
                            <a class="btn-one" href="{{route('register')}}"><span class="txt">Join Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Slogan Style2 Area-->


    <div class="bottom-parallax">
        <!--Start footer area -->
        <footer class="footer-area">
            <!--Start Footer-->
            <div class="footer">
                <div class="container">
                    <div class="row text-right-rtl">

                        <!--Start single footer widget-->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-footer-widget single-footer-widget--company-info marbtm50">
                                <div class="our-company-info">
                                    <div class="text-box">
                                        <p>{!! $web->address !!}</p>
                                    </div>
                                    @if(!empty($web->phone))
                                        <h2><a href="tel:{{$web->phone}}">{{$web->phone}}</a></h2>
                                    @endif
                                    <h3><a href="mailto:{{$web->email}}">{{$web->email}}</a></h3>
                                    <div class="footer-social-link">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-facebook-circular-logo"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-pinterest"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->

                        <!--Start single footer widget-->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-footer-widget single-footer-widget--link-box marbtm50">
                                <div class="title">
                                    <h3>Explore</h3>
                                </div>
                                <div class="footer-widget-links">
                                    <ul>
                                        <li><a href="{{url('about')}}">About us</a></li>
                                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                                        <li><a href="{{url('plans')}}">Plans</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->

                        <!--Start single footer widget-->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-footer-widget single-footer-widget--link-box marbtm50">
                                <div class="title">
                                    <h3>Services</h3>
                                </div>
                                <div class="footer-widget-links">
                                    <ul>
                                        @foreach($injected->getServices() as $service)
                                            <li><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->


                    </div>
                </div>
            </div>
            <!--End Footer-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="bottom-inner">
                        <div class="footer-logo-style1">
                            <a href="{{url('/')}}">
                                <img src="{{asset('home/images/'.$web->logo)}}" alt="Awesome Logo" title="" style="width: 150px;">
                            </a>
                        </div>
                        <div class="copyright">
                            <p>Copyright &copy; 2010 - {{date('Y')}} <a href="{{url('/')}}">{{$siteName}}</a> All Rights Reserved.</p>
                        </div>

                    </div>
                </div>
            </div>

        </footer>
        <!--End footer area-->
    </div>


    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="flaticon-up-arrow"></span>
    </button>


</div>



<script src="{{asset('home/js/jquery.js')}}"></script>
<script src="{{asset('home/js/aos.js')}}"></script>
<script src="{{asset('home/js/appear.js')}}"></script>
<script src="{{asset('home/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('home/js/isotope.js')}}"></script>
<script src="{{asset('home/js/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('home/js/jquery.countTo.js')}}"></script>
<script src="{{asset('home/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('home/js/jquery.event.move.js')}}"></script>
<script src="{{asset('home/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('home/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('home/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('home/js/jquery.paroller.min.js')}}"></script>
<script src="{{asset('home/js/jquery-sidebar-content.js')}}"></script>
<script src="{{asset('home/js/knob.js')}}"></script>
<script src="{{asset('home/js/map-script.js')}}"></script>
<script src="{{asset('home/js/owl.js')}}"></script>
<script src="{{asset('home/js/pagenav.js')}}"></script>
<script src="{{asset('home/js/scrollbar.js')}}"></script>
<script src="{{asset('home/js/swiper.min.js')}}"></script>
<script src="{{asset('home/js/tilt.jquery.js')}}"></script>
<script src="{{asset('home/js/TweenMax.min.js')}}"></script>
<script src="{{asset('home/js/validation.js')}}"></script>
<script src="{{asset('home/js/wow.js')}}"></script>
<script src="{{asset('home/js/jquery-1color-switcher.min.js')}}"></script>
<script src="{{asset('home/js/parallax.min.js')}}"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM&amp;callback=initMap">
</script>
<!-- thm custom script -->
<script src="{{asset('home/js/custom.js')}}"></script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
@stack('js')
</body>
</html>
