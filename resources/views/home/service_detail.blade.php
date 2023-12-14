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

    <!--Start Service Details area -->
    <section class="service-details-area">
        <div class="container">
            <div class="row">


                <!--Start Service Details Content -->
                <div class="col-xl-12 col-lg-12 order-box-1">
                    <div class="service-details__content">
                        <div class="img-box-outer">
                            <div class="img-box1">
                                <img src="{{asset('home/serv/'.$service->photo)}}" alt="" />
                            </div>
                            <div class="icon">
                                <span class="icon-creative"></span>
                            </div>
                        </div>

                        <div class="text-box1">
                            <h2>{{$service->title}}</h2>
                            <p>
                                {!! str_replace('MYSITE',$siteName,$service->content) !!}
                            </p>
                        </div>
                    </div>
                </div>
                <!--End Service Details Content -->

            </div>
        </div>
    </section>
    <!--End Service Details area -->

@endsection
