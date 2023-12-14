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

    <!--Start Faq Page One-->
    <section class="faq-page-one">
        <div class="container">
            <div class="row">

                <div class="col-xl-6">
                    <div class="faq-style1-content">
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow-2"></i>
                                    </div>
                                    <h3>
                                        What is {{$siteName}}?
                                    </h3>
                                </div>
                                <div class="acc-content current">
                                    <p>{{$siteName}} our company provides a full investment service focused on the bitcoin and cryptocurrency market We are among the best platforms to invest and grow your bitcoin and other cryptocurrency</p>

                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow-2"></i>
                                    </div>
                                    <h3>
                                        How do I create my account?
                                    </h3>
                                </div>
                                <div class="acc-content">
                                    <p>Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button  and fill in all the required fields</p>

                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow-2"></i>
                                    </div>
                                    <h3>
                                        How do I make a deposit?
                                    </h3>
                                </div>
                                <div class="acc-content">
                                    <p>
                                        To deposit funds in your trading account is quick and simple. For your
                                        convenience you may choose one of the several available deposit methods.
                                        To make a successful deposit please follow the steps below:<br>
                                        <ul>
                                            <li>Login to your account Click on the New Investment button in the
                                                DASHBOARD section.<br>
                                            </li>

                                            <li>Choose the deposit option And fill the form including the amount and
                                                the package.
                                            </li>
                                            <li>
                                                You will receive the wallet address to make payment to on the next page.
                                                After payment, contact support.
                                            </li>
                                            <li>
                                                Once your deposit has been confirmed, the status of the investment will change
                                                to <span class="text-primary">Ongoing</span> which means that it has been confirmed
                                                and your investment started.
                                            </li>
                                        </ul>


                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="faq-style1-content faq-style1-content--margintop">
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow-2"></i>
                                    </div>
                                    <h3>
                                        How long does my deposit take before it can reflect on my {{$siteName}} account dashboard?
                                    </h3>
                                </div>
                                <div class="acc-content current">
                                    <p>Your deposit will be reflected immediately once it is confirmed on the blockchain network</p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow-2"></i>
                                    </div>
                                    <h3>
                                        How do I make a withdrawal?
                                    </h3>
                                </div>
                                <div class="acc-content">
                                    <p>To make a withdrawal request click the WITHDRAW button at the top center of your {{$siteName}} account dashboard and input the required details to withdraw</p>

                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow-2"></i>
                                    </div>
                                    <h3>
                                        How long does it take to process my withdrawal?
                                    </h3>
                                </div>
                                <div class="acc-content">
                                    <p>Once we receive your withdrawal request we process immediately and send to your bitcoin wallet</p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow-2"></i>
                                    </div>
                                    <h3>
                                        Can I have more than one account?
                                    </h3>
                                </div>
                                <div class="acc-content">
                                    <p>No you cannot have more than one account only investors on the vip plan are allowed to do so</p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow-2"></i>
                                    </div>
                                    <h3>
                                        Is this company properly registered?
                                    </h3>
                                </div>
                                <div class="acc-content">
                                    <p>Yes we are officially and properly registered with the united kingdom company house and registered with the name {{$siteName}} LTD</p>

                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer">
                                        <i class="flaticon-down-arrow-2"></i>
                                    </div>
                                    <h3>
                                        Can I have more than two accounts?
                                    </h3>
                                </div>
                                <div class="acc-content">
                                    <p>We do not allow multiple accounts except only for our investors on the VIP plan</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Faq Page One-->

@endsection
