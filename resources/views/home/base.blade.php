

<!DOCTYPE html>
<html lang="zxx" class="js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="viewport" content="width=1024">
    <meta name="description" content="">
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
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{asset('home/css/vendor.bundlee222e222.css')}}?ver=142">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('home/css/stylee222e222.css')}}?ver=142">
    <link rel="stylesheet" href="{{asset('home/css/themee222e222.css')}}?ver=142" id="layoutstyle">

    <style type="text/css">
        .circlelarge {
            background-image: url({{asset('home/inc/circlelarge.png')}});
            width: 1729px;
            height: 1731px;
            position: absolute;
            left: -73%;
            top: -90%;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-duration: 10s;
            animation-name: circleMainRotate;
            z-index: -1;
            margin-left: 50px;
        }
        .circlelarge2 {
            background-image: url({{asset('home/inc/circlelarge.png')}});
            width: 1729px;
            height: 1731px;
            position: absolute;
            left: -60%;
            top: -100%;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-duration: 10s;
            animation-name: circleMainRotate;
            z-index: -1;
            margin-left: 50px;
        }
        #set_34{
            position: relative;
            left: 35%;
            width: 70%;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-duration: 10s;
            animation-name: circleMainRotate;
        }
        @keyframes circleMainRotate {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        /*blink*/
        .blickBl {
            background-image: url({{asset('home/inc/blink.png')}});
            position: absolute;
            width: 313px;
            height: 314px;
            left: 213px;
            top: 78px;
            z-index: 4;
            bottom: 85px;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-duration: 5s;
            animation-name: blinkk;
        }
        @keyframes blinkk {
            0% {
                -webkit-transform: scale(0.3);
                -moz-transform: scale(0.3);
                -o-transform: scale(0.3);
                transform: scale(0.3);
                opacity: 0;
            }
            20% {
                opacity: 1;
            }
            80% {
                -moz-transform: scale(.8);
                -o-transform: scale(.8);
                transform: scale(.8);
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        .invest_now{
            display: block;
            margin-top: 20px;
            text-align: center;
            font-size: 23px;
            border-radius: 7px;
            background: #244050;
            color: #fff;
        }
        a.invest_now:hover{color:#fff}
        .logo_disp{
            background-image: url({{asset('home/images/fav.png')}});
            width: 252px;
            height: 210px;
            background-position: center;
            background-repeat: no-repeat;
            position: absolute;
            left: 170px;
            top: -140px;
            z-index: -1;
        }
        .logo_disp::before {
            content: "";
            position: absolute;
            left: 21px;
            top: 0px;
            background-image: url({{asset('home/inc/settings.png')}});
            background-repeat: no-repeat;
            width: 208px;
            height: 209px;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-duration: 5s;
            animation-name: circleMainRotate;
            z-index: -2;
        }
        .logo_disp:after {
            content: "";
            background-image: url({{asset('home/inc/blink.png')}});
            position: absolute;
            width: 313px;
            height: 314px;
            left: 20px;
            bottom: -90px;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-duration: 5s;
            animation-name: blinkk;
        }
    </style>
</head>

<body class="theme-dark is-smooth-effect" data-spy="scroll" data-target="#mainnav" data-offset="80">

<!-- Header -->
<header class="site-header is-sticky">

    <!-- Place Particle Js -->
    <div id="particles-js" class="particles-container particles-js"></div>
    <div class="navbar navbar-expand-lg is-transparent" id="mainnav">
        <nav class="container">
            <a class="navbar-brand animated" data-animate="fadeInDown" data-delay=".65" href="{{url('/')}}">
                <img class="logo logo-dark" alt="logo" src="{{asset('home/images/'.$web->logo)}}">
                <img class="logo logo-light" alt="logo" src="{{asset('home/images/'.$web->logo)}}">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
					<span class="navbar-toggler-icon">
						<span class="ti ti-align-justify"></span>
					</span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarToggle">
                <ul class="navbar-nav animated" data-animate="fadeInDown" data-delay=".9">
                    <li class="nav-item"><a class="nav-link menu-link" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="{{url('about')}}">About us</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="{{url('plans')}}">Investment Services</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="{{url('faqs')}}">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="mailto:{{$web->email}}">Contact Us</a></li>
                </ul>
                <ul class="navbar-nav navbar-btns animated" data-animate="fadeInDown" data-delay="1.15">
                    <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="{{route('register')}}">Register</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="{{route('login')}}">Login</a></li>
                </ul>
            </div>
            <div style="margin-right:-75px;padding-left:40px;">
                <script type="text/javascript">
                    /* <![CDATA[ */
                    eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
                    /* ]]> */
                </script>
            </div>
        </nav>
    </div>
    <!-- End Navbar -->

    @yield('content')


<!-- Start Section -->
<div class="section section-pad section-bg-alt" id="partners">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div class="section-head">
                    <h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">ACCEPTED HERE
                        <span>ACCEPTED</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="partner-list">
            <div class="row text-center">
                <div class="col-sm">
                    <div class="single-partner animated" data-animate="fadeInUp" data-delay="0">
                        <img src="{{asset('home/inc/ethereum.jpg')}}" alt="partner">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="single-partner animated" data-animate="fadeInUp" data-delay=".2">
                        <img src="{{asset('home/inc/bitcoin.jpg')}}" alt="partner">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Start Section -->
<div class="section footer-scetion no-pt section-pad-sm section-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
					<span class="copyright-text animated" data-animate="fadeInUp" data-delay=".3">
						Copyright &copy; {{date('Y')}}, {{$siteName}}
                        <!-- <span>copyrights</span> -->
					</span>
            </div>
        </div>
    </div>
</div>
<!-- End Section -->

<!-- Preloader !remove please if you do not want -->
<div id="preloader">
    <div id="loader"></div>
    <div class="loader-section loader-top"></div>
    <div class="loader-section loader-bottom"></div>
</div>
<!-- Preloader End -->

<!-- JavaScript (include all script here) -->
<script src="{{asset('home/js/jquery.bundlee222e222.js')}}?ver=142"></script>
<script src="{{asset('home/js/scripte22212e4.js')}}?ver=14"></script>




<link rel="stylesheet" href="chat/css/crstyle5ed3.css')}}?v4">
<style type="text/css">
    .wcr-messages-content::-webkit-scrollbar {
        width: 7px;
        background-color: #fffdfd;
    }
    .wcr-messages-content::-webkit-scrollbar-thumb {
        background-color: #b1abab;
        border-radius: 5px;
    }

    .floatBTN {
        position: fixed;
        width: 50px;
        height: 50px;
        bottom: 27px;
        right: 25px;
        background-color: #0276cc;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #4d728e;
        z-index: 9;
    }

    .my-floatBTN {
        margin-top: 15px;
        /*font-size: 40px;*/
        font-size: 2.5em;
    }

    a.floatBTN:hover {
        color: #fff;
        font-size: 12px;
        margin-top: 5px;
    }

    a.floatBTN:hover i {
        margin-top: 9px;
    }
    img.my-floatBTN{
        width: 30px;
    }
    @media only screen and (max-device-width: 667px), screen and (max-width: 450px) {
        .my-floatBTN {
            margin-top: 27px;
        }
        img.my-floatBTN{
            width: 90px;
        }
        .floatBTN {
            width: 120px;
            height: 120px;
            border-radius: 65px;
            right: 80px;
            bottom: 60px;
        }
    }
</style>

<div class="bg"></div>
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

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '14e13ebd6fd78fe50777b91e50b00fcd7dfc44df';
        window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</body>
</html>
