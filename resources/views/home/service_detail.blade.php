@extends('home.base')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{asset('home/serv/'.$service->photo)}})">
        </div>
        <div class="page-header-bg-2" style="background-image: url({{asset('home/serv/'.$service->photo)}})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>{{$pageName}}</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#">{{$pageName}}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->



    <!--Services Details Start-->
    <section class="services-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="services-details__right">
                        <h3 class="services-details__title">{{$service->title}}</h3>
                        <p class="services-details__text-1">{{$service->short}}</p>
                        <div class="services-details__img">
                            <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                        </div>
                        <h3 class="services-details__title-2">Digital Brand Strategy</h3>
                        <p class="services-details__text-3">
                            {!! str_replace('MYSITE',$siteName,$service->content) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services Details End-->


@endsection
