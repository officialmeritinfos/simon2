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
    <section class="pricing-area" style="margin-top: 3rem;">
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

@endsection
