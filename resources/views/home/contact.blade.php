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

    <section class="contact-us-section py-5">
        <div class="container contact">
            <div class="col-12 pb-3 message-box d-none">
                <div class="alert alert-danger"></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Ready to get started?</h4>
                        <form method="get" action="#" class="contact-us-form">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="Enter Name *" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" required="required" placeholder="Enter Email *" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" required="required" placeholder="Enter Subject" class="form-control" name="subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea required="required" placeholder="Message *" class="form-control" name="msg" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" title="Submit Your Message!" name="send" class="btn secondary-solid-btn">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2>Looking for a Profitable Investment Plan?</h2>
                        <p class="lead">Search no! Click on the button below to get started.</p>

                        <a href="{{route('register')}}" class="btn outline-btn align-items-center">Get Your Solution <span class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">

                        <h5>Our Headquarters</h5>
                        <address>
                            {{$web->address}}                       </address>
                        <br>
                        @if(!empty($web->phone))
                            <span>Phone: {{$web->phone}}</span> <br>
                        @endif
                        <span>Email: <a href="mailto:{{$web->email}}" class="link-color">{{$web->email}}</a></span>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-promo py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-mobile icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Call Us</h5>
                                <p class="text-muted mb-0">
                                    {{$web->phone}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-location-pin icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Visit Us</h5>
                                <p class="text-muted mb-0">
                                    {{$web->address}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-email icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Mail Us</h5>
                                <p class="text-muted mb-0">
                                    {{$web->email}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-headphone-alt icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Live Chat</h5>
                                <p class="text-muted mb-0">Chat with Us 24/7</p></div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">--}}
{{--                        <div class="card-body py-5">--}}
{{--                            <div class="pb-2">--}}
{{--                                <a href="https://wa.me/message/YQ6PSP3N3IZPK1">--}}
{{--                                    <img style="width: 30px; height: 30px"--}}
{{--                                         src="{{asset('home/img/whatsapp.png')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div><h5 class="mb-0">WhatsApp</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">--}}
{{--                        <div class="card-body py-5">--}}
{{--                            <div class="pb-2">--}}
{{--                                <a href="">--}}
{{--                                    <img style="width: 30px; height: 30px" src="{{asset('home/img/telegram.png')}}" alt=""><a>--}}
{{--                            </div>--}}
{{--                            <div><a href=""><h5 class="mb-0">Telegram</h5><a>--}}
{{--                                        <p class="text-muted mb-0">Join Our Telegram Group</p></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>


@endsection
