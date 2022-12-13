@extends('front.master')
@section('title')
    Home Page
@endsection
@section('body')
    <section>
        <div class="carousel slide" id="main-slider" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#main-slider" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#main-slider" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#main-slider" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/') }}front/images/slider/1.jpg" style="width: 100%; height: 450px" alt="Course Title">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/') }}front/images/slider/2.jpg" style="width: 100%; height: 450px" alt="Course Title">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/') }}front/images/slider/3.jpg" style="width: 100%; height: 450px" alt="Course Title">
                </div>
            </div>
            <div class="carousel-control">
                <button class="carousel-control-prev" type="button" data-bs-slide="prev" data-bs-target="#main-slider">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-slide="next" data-bs-target="#main-slider">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <h3 class="text-center">All Courses</h3>
            </div>
            <div class="row">
                <div class="col-md-3 mt-2">
                    <div class="card ">
                        <img src="{{ asset('/') }}front/images/courses/1.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Certified Training on Web Design & Development Using Laravel & Vue</h5>
                            <p class="mb-0">Date: 17 Dec - 18 Mar 2023</p>
                            <p class="mb-0">Hour: 250 Hour</p>
                        </div>
                        <div class="card-footer d-flex bg-transparent py-0 ">
                            <p class="mt-2">TK 250000</p>
                            <a class="btn btn-info ms-auto text-primary bg-transparent border-0">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2">
                    <div class="card ">
                        <img src="{{ asset('/') }}front/images/courses/1.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Certified Training on Web Design & Development Using Laravel & Vue</h5>
                            <p class="mb-0">Date: 17 Dec - 18 Mar 2023</p>
                            <p class="mb-0">Hour: 250 Hour</p>
                        </div>
                        <div class="card-footer d-flex bg-transparent py-0 ">
                            <p class="mt-2">TK 250000</p>
                            <a class="btn btn-info ms-auto text-primary bg-transparent border-0">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2">
                    <div class="card ">
                        <img src="{{ asset('/') }}front/images/courses/1.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Certified Training on Web Design & Development Using Laravel & Vue</h5>
                            <p class="mb-0">Date: 17 Dec - 18 Mar 2023</p>
                            <p class="mb-0">Hour: 250 Hour</p>
                        </div>
                        <div class="card-footer d-flex bg-transparent py-0 ">
                            <p class="mt-2">TK 250000</p>
                            <a class="btn btn-info ms-auto text-primary bg-transparent border-0">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2">
                    <div class="card ">
                        <img src="{{ asset('/') }}front/images/courses/1.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Certified Training on Web Design & Development Using Laravel & Vue</h5>
                            <p class="mb-0">Date: 17 Dec - 18 Mar 2023</p>
                            <p class="mb-0">Hour: 250 Hour</p>
                        </div>
                        <div class="card-footer d-flex bg-transparent py-0 ">
                            <p class="mt-2">TK 250000</p>
                            <a class="btn btn-info ms-auto text-primary bg-transparent border-0">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2">
                    <div class="card ">
                        <img src="{{ asset('/') }}front/images/courses/1.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Certified Training on Web Design & Development Using Laravel & Vue</h5>
                            <p class="mb-0">Date: 17 Dec - 18 Mar 2023</p>
                            <p class="mb-0">Hour: 250 Hour</p>
                        </div>
                        <div class="card-footer d-flex bg-transparent py-0 ">
                            <p class="mt-2">TK 250000</p>
                            <a class="btn btn-info ms-auto text-primary bg-transparent border-0">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
