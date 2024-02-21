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
            <div class="row text-center"
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


@endsection
