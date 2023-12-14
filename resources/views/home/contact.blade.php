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
    <!--Start Google Map Style2 Area-->
    <section class="google-map-area">
        <div class="auto-container">
            <div class="contact-page-map-outer">
                <!--Map Canvas-->
                <div class="map-canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2384.9484203494403!2d-6.4237551!3d53.290459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48677489d3daaaab%3A0x90405a4cfde09bac!2sUnit%20%2370%2C%203015%20Lake%20Dr%2C%20Citywest%2C%20G5%2C%20Co.%20Dublin%2C%20D24%20DKP4%2C%20Ireland!5e0!3m2!1sen!2sus!4v1702519878742!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="contact-info-box">
                    <div class="left-box">
                        @if(!empty($web->phone))
                            <h2><a href="tel:{{$web->phone}}">{{$web->phone}}</a></h2>
                        @endif
                        <h3><a href="mailto:{{$web->email}}">{{$web->email}}</a></h3>
                    </div>
                    <div class="middle-box">
                        <p>{!! $web->address !!}</p>
                    </div>
                    <div class="right-box">
                        <div class="thm-social-link1">
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
        </div>
    </section>


@endsection
