@extends('home.base')
@section('content')
    @push('css')
        <style>
            body{margin-top:20px;}
            .price_plan_area {
                position: relative;
                z-index: 1;
            }

            .single_price_plan {
                position: relative;
                z-index: 1;
                border-radius: 0.5rem 0.5rem 0 0;
                -webkit-transition-duration: 500ms;
                transition-duration: 500ms;
                margin-bottom: 50px;
                background-color: #ffffff;
                padding: 3rem 4rem;
            }
            @media only screen and (min-width: 992px) and (max-width: 1199px) {
                .single_price_plan {
                    padding: 3rem;
                }
            }
            @media only screen and (max-width: 575px) {
                .single_price_plan {
                    padding: 3rem;
                }
            }
            .single_price_plan::after {
                position: absolute;
                content: "";
                background-image: url("https://bootdey.com/img/half-circle-pricing.png");
                background-repeat: repeat;
                width: 100%;
                height: 17px;
                bottom: -17px;
                z-index: 1;
                left: 0;
            }
            .single_price_plan .title {
                text-transform: capitalize;
                -webkit-transition-duration: 500ms;
                transition-duration: 500ms;
                margin-bottom: 2rem;
            }
            .single_price_plan .title span {
                color: #ffffff;
                padding: 0.2rem 0.6rem;
                font-size: 12px;
                text-transform: uppercase;
                background-color: #2ecc71;
                display: inline-block;
                margin-bottom: 0.5rem;
                border-radius: 0.25rem;
            }
            .single_price_plan .title h3 {
                font-size: 1.25rem;
            }
            .single_price_plan .title p {
                font-weight: 300;
                line-height: 1;
                font-size: 14px;
            }
            .single_price_plan .title .line {
                width: 80px;
                height: 4px;
                border-radius: 10px;
                background-color: #3f43fd;
            }
            .single_price_plan .price {
                margin-bottom: 1.5rem;
            }
            .single_price_plan .price h4 {
                position: relative;
                z-index: 1;
                font-size: 2.4rem;
                line-height: 1;
                margin-bottom: 0;
                color: #3f43fd;
                display: inline-block;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-color: transparent;
                background-image: -webkit-gradient(linear, left top, right top, from(#e24997), to(#2d2ed4));
                background-image: linear-gradient(90deg, #e24997, #2d2ed4);
            }
            .single_price_plan .description {
                position: relative;
                margin-bottom: 1.5rem;
            }
            .single_price_plan .description p {
                line-height: 16px;
                margin: 0;
                padding: 10px 0;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -ms-grid-row-align: center;
                align-items: center;
            }
            .single_price_plan .description p i {
                color: #2ecc71;
                margin-right: 0.5rem;
            }
            .single_price_plan .description p .lni-close {
                color: #e74c3c;
            }
            .single_price_plan.active,
            .single_price_plan:hover,
            .single_price_plan:focus {
                -webkit-box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
                box-shadow: 0 6px 50px 8px rgba(21, 131, 233, 0.15);
            }
            .single_price_plan .side-shape img {
                position: absolute;
                width: auto;
                top: 0;
                right: 0;
                z-index: -2;
            }

            .section-heading h3 {
                margin-bottom: 1rem;
                font-size: 3.125rem;
                letter-spacing: -1px;
            }

            .section-heading p {
                margin-bottom: 0;
                font-size: 1.25rem;
            }

            .section-heading .line {
                width: 120px;
                height: 5px;
                margin: 30px auto 0;
                border-radius: 6px;
                background: #2d2ed4;
                background: -webkit-gradient(linear, left top, right top, from(#e24997), to(#2d2ed4));
                background: linear-gradient(to right, #e24997, #2d2ed4);
            }
        </style>
    @endpush
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

    <section class="price_plan_area section_padding_130_80" id="pricing" style="margin-top: 5rem;">
        <div class="container">

            <div class="row justify-content-center">

                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <!-- Single Price Plan Area-->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                        <div class="single_price_plan active wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <!-- Side Shape-->
                            <div class="side-shape"><img src="https://bootdey.com/img/popular-pricing.png" alt=""></div>
                            <div class="title"><span>Popular</span>
                                <h3 class="text-dark">{{$package->name}}</h3>
                                <div class="line"></div>
                            </div>
                            <div class="price">
                                <h4>{{$package->roi}}% {{$option->getReturnType($package->returnType)}}</h4>
                            </div>
                            <div class="description">
                                <p><i class="lni lni-checkmark-circle"></i>
                                    Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                        ${{number_format($package->maxAmount,2)}}
                                    @else
                                        Unlimited
                                    @endif
                                </p>
                                <p><i class="lni lni-checkmark-circle"></i>Duration: {{$package->Duration}}</p>
                                <p><i class="lni lni-checkmark-circle"></i>Profit Return: {{$package->roi}}% {{$option->getReturnType($package->returnType)}}</p>
                                <p><i class="lni lni-checkmark-circle"></i>Referral Bonus: {{$package->referral}}%</p>
                            </div>
                            <div class="button"><a class="btn btn-warning" href="{{route('register')}}">Get Started</a></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
