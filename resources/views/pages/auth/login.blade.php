@extends('layouts.guest')

@section('title', 'Login')

@section('content')

    <div class="bg-gradient2 min-vh-100 align-items-center d-flex justify-content-center pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-md-5 shadow">
                                    <div class="p-xl-5 p-3">
                                        <div class="mx-auto mb-5">
                                            <a href="/" class="d-flex">
                                                <img src="assets/images/logo.png" class="align-self-center" alt="logo-img"
                                                    height="30" />
                                            </a>
                                        </div>

                                        <h6 class="h5 mb-0 mt-3">Welcome back!</h6>
                                        <p class="text-muted mt-1 mb-4">
                                            Enter your email address and password to access admin panel.
                                        </p>
                                        <!--form start-->
                                        {{-- <form action="#" class="authentication-form">

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email
                                                    <small>*</small></label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Email" name="email" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="password">Password <small>*</small></label>
                                                <a href="account-forget-password.html"
                                                    class="float-end text-muted text-unline-dashed ms-1 fs-13">Forgot your
                                                    password?</a>
                                                <input type="password" class="form-control" id="password" name="password"
                                                    placeholder="Enter your password" />
                                            </div>

                                            <div class="mb-3">
                                                <input type="checkbox" class="form-check-input" id="checkbox-signin" />
                                                <label class="form-check-label text-muted" for="checkbox-signin">Remember
                                                    me</label>
                                            </div>

                                            <div class="mb-0 text-center d-grid">
                                                <button class="btn btn-primary" type="submit">Log In</button>
                                            </div>
                                        </form> --}}

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email
                                                    <small>*</small></label>
                                                <input type="email" required class="form-control" id="exampleInputEmail1"
                                                    placeholder="Email" name="email" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="password">Password <small>*</small></label>
                                                <a href="account-forget-password.html"
                                                    class="float-end text-muted text-unline-dashed ms-1 fs-13">Forgot your
                                                    password?</a>
                                                <input type="password" required class="form-control" id="password" name="password"
                                                    placeholder="Enter your password" />
                                            </div>

                                            <div class="mb-3">
                                                <input type="checkbox" class="form-check-input" id="checkbox-signin" />
                                                <label class="form-check-label text-muted" for="checkbox-signin">Remember
                                                    me</label>
                                            </div>

                                            <div class="mb-0 text-center d-grid">
                                                <button class="btn btn-primary" type="submit">Log In</button>
                                            </div>
                                        </form>
                                        <!--/.form end-->
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1 d-none d-md-inline-block">
                                    <div class="position-relative mt-5 pt-5">
                                        <!--slider start-->
                                        <div class="slider">
                                            <div class="swiper-container" data-toggle="swiper"
                                                data-swiper='{"slidesPerView":1, "loop":true, "spaceBetween": 0, "autoplay": {"delay": 5000}, "breakpoints": {"576": {"slidesPerView": 1.2 }, "768": { "slidesPerView": 1 } }, "roundLengths":true, "pagination": {"el": ".swiper-pagination", "dynamicBullets": true}}'>

                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="swiper-slide-content">
                                                            <div class="row text-center">
                                                                <div class="col">
                                                                    <img src="./assets/images/hero/saas1.jpg" alt=""
                                                                        class="w-75" />
                                                                </div>
                                                            </div>
                                                            <div class="row text-center my-4 pb-5">
                                                                <div class="col">
                                                                    <h5 class="fw-medium fs-16">Manage your saas business
                                                                        with ease</h5>
                                                                    <p class="text-muted">Make your saas application stand
                                                                        out with high-quality landing page designed and
                                                                        developed by professional.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- swiper-slide End -->
                                                    <div class="swiper-slide">
                                                        <div class="swiper-slide-content">
                                                            <div class="row text-center">
                                                                <div class="col">
                                                                    <img src="./assets/images/hero/saas2.jpg"
                                                                        alt="" class="w-75" />
                                                                </div>
                                                            </div>
                                                            <div class="row text-center my-4 pb-5">
                                                                <div class="col">
                                                                    <h5 class="fw-medium fs-16">The best way to showcase
                                                                        your mobile app</h5>
                                                                    <p class="text-muted">Sed ut perspiciatis unde omnis
                                                                        iste natus error sit voluptatem accusantium.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- swiper-slide End -->
                                                    <div class="swiper-slide">
                                                        <div class="swiper-slide-content">
                                                            <div class="row text-center">
                                                                <div class="col">
                                                                    <img src="./assets/images/hero/saas3.jpg"
                                                                        alt="" class="w-75" />
                                                                </div>
                                                            </div>
                                                            <div class="row text-center my-4 pb-5">
                                                                <div class="col">
                                                                    <h5 class="fw-medium fs-16">Smart Solution that convert
                                                                        Lead to Customer</h5>
                                                                    <p class="text-muted">Sed ut perspiciatis unde omnis
                                                                        iste natus error sit voluptatem accusantium.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- swiper-slide End -->
                                                </div>
                                                <!-- swiper-wrapper End -->
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                        <!--slider end-->
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Don't have an account? <a href="account-signup.html"
                                    class="text-primary fw-semibold ms-1">Sign Up</a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

@endsection
