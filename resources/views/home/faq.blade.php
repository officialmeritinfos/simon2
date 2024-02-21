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
    <div class="section section-pad no-pb section-bg-alt">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-lg-6 offset-md-2">
                    <div class="section-head">
                        <h2 class="section-title animated" data-animate="fadeInUp" data-delay="0">FAQ
                            <span>FAQS</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="tab-custom">
                        <div class="tab-content animated" data-animate="fadeInUp" data-delay=".1">
                            <div class="tab-pane fade show active" id="tab-1">
                                <div class="accordion" id="accordion-1">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-1">
                                                    What is Bitcoin?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-1-1" class="collapse" data-parent="#accordion-1">
                                            <div class="card-body">
                                                <p>Bitcoin is the first decentralised, open source cryptocurrency that runs on a global peer to peer network, without the need for middlemen and a centralised issuer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-2">
                                                    Why use cryptocurrency?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-1-2" class="collapse" data-parent="#accordion-1">
                                            <div class="card-body">
                                                <p>A cryptocurrency is a medium of exchange such as the USD, but is designed for the purpose of exchanging digital information. The benefit is that cryptocurrencies cannot be counterfeited.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-3">
                                                    How can i join the invest?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-1-3" class="collapse" data-parent="#accordion-1">
                                            <div class="card-body">
                                                <p>Our trade investment platform requires that user must have credited their online wallet account before participating in the trade-investment.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-4">
                                                    What is the minimum or maximum amount for trade-invest?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-1-4" class="collapse" data-parent="#accordion-1">
                                            <div class="card-body">
                                                <p>The minimum and maximum amount for trade-investment varies depending on our system's current assets.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-5">
                                                    Who can participate in the trade-investment?<span class="plus-minus"><span class="ti ti-angle-up"></span></span>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-1-5" class="collapse" data-parent="#accordion-1">
                                            <div class="card-body">
                                                <p>All users, from novice to experts. You need not have knowledge of trading to participate in our trade-investment program.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- End tab-content -->
                    </div><!-- End tab-custom -->
                </div><!-- End col -->
            </div><!-- End row -->
        </div><!-- End container -->
    </div>
    <!-- End Section -->


@endsection
