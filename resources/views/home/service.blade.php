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

    <section class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading mb-5">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Forex</span>
                            <img src="{{asset('home/img/serv/forex.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Agriculture</span>
                            <img src="{{asset('home/img/serv/agric.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Oil And Gas</span>
                            <img src="{{asset('home/img/serv/oil.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Real Estate</span>
                            <img src="{{asset('home/img/serv/estate.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Retirement and Insurance Services</span>
                            <img src="{{asset('home/img/serv/retire.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Gold</span>
                            <img src="{{asset('home/img/serv/gold.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start Service Details area -->
    <section class="service-details-area">
        <div class="container">
            <div class="row">


                <!--Start Service Details Content -->
                <div class="col-xl-12 col-lg-12 order-box-1">
                    <div class="service-details__content">
                        <div class="img-box-outer">
                            <div class="img-box1">
                                <img src="assets/images/services/service-details-1-img1.jpg" alt="" />
                            </div>
                            <div class="icon">
                                <span class="icon-creative"></span>
                            </div>
                        </div>

                        <div class="text-box1">
                            <h2>Consumer Product</h2>
                            <p>
                                Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta
                                sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s.
                            </p>
                            <p>
                                It has survived not only five centuries. Lorem Ipsum is simply dummy text of the new
                                design printng and type setting Ipsum take a look at our round. When an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting.
                            </p>
                        </div>

                        <div class="text-box2">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="text-box2-single" data-aos="fade-right" data-aos-easing="linear"
                                         data-aos-duration="1500">
                                        <p>Refresing to get such a touch. Duis aute irure dolor in oluptate.</p>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="text-box2-single" data-aos="fade-left" data-aos-easing="linear"
                                         data-aos-duration="1500">
                                        <p>Velit esse cillum eu fugiat pariatur. Duis aute irure dolor in in
                                            voluptate.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-box3">
                            <p>When an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting. Lorem Ipsum has been the ndustry standard dummy text ever
                                since the 1500s.</p>
                        </div>

                        <div class="text-box4">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="img-box">
                                        <img src="assets/images/services/service-details-1-img-2.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="content-box">
                                        <h2>Service Benefits</h2>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                        </p>

                                        <ul>
                                            <li>
                                                <span class="icon-check"></span> In id diam nec nisi
                                                congue tincidunt
                                            </li>
                                            <li>
                                                <span class="icon-check"></span> Pn malesuada purus a ligula
                                                dapibus
                                            </li>
                                            <li>
                                                <span class="icon-check"></span> Vestibulum tincidunt arcu vel
                                                nisl
                                            </li>
                                            <li>
                                                <span class="icon-check"></span> Sed tristique lorem non
                                                tesque
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="service-details-faq-content">
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer">
                                            <i class="icon-down-arrow"></i>
                                        </div>
                                        <h3>Interdum et malesuada fames ac ante ipsum</h3>
                                    </div>
                                    <div class="acc-content current">
                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                            ligula, vit commodo nisl Sed luctus venenatis pellentesque.</p>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="icon-down-arrow"></i>
                                        </div>
                                        <h3>Maecenas condimentum sollicitudin ligula.</h3>
                                    </div>
                                    <div class="acc-content">
                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                            ligula, vit commodo nisl Sed luctus venenatis pellentesque.</p>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="icon-down-arrow"></i>
                                        </div>
                                        <h3>Duis rhoncus orci ut metus rhoncus.</h3>
                                    </div>
                                    <div class="acc-content">
                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                            ligula, vit commodo nisl Sed luctus venenatis pellentesque.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!--End Service Details Content -->

            </div>
        </div>
    </section>
    <!--End Service Details area -->

@endsection
