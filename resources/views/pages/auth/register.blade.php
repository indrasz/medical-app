@extends('layouts.guest')

@section('title', 'Register')

@section('content')

    {{-- <div class="bg-gradient2 min-vh-100 align-items-center d-flex justify-content-center pt-2 pt-sm-5 pb-4 pb-sm-5">
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

                                        <h6 class="h5 mb-0 mt-3">Create Your Account</h6>
                                        <p class="text-muted mt-1 mb-4">Don't have an account? Create your account, it takes
                                            less than a minute.</p>

                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleName" class="form-label">Your Name
                                                    <small>*</small></label>
                                                <input type="text" class="form-control" id="exampleName"
                                                    aria-describedby="exampleName" placeholder="Your Name" name="name" />
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email
                                                    <small>*</small></label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Email" name="email" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Password <small>*</small></label>
                                                <input type="password" class="form-control" id="password" name="password"
                                                    placeholder="Enter your password" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Confirm Password <small>*</small></label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" placeholder="Enter your password" />
                                            </div>

                                            <div class="mb-0 text-center d-grid">
                                                <button class="btn btn-primary" type="submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1 d-none d-md-inline-block">
                                    <div class="position-relative mt-5 pt-5">
                                        <div class="slider">
                                            <div class="swiper-container" data-toggle="swiper"
                                                data-swiper='{"slidesPerView":1, "loop":true, "spaceBetween": 0, "autoplay": {"delay": 5000}, "breakpoints": {"576": {"slidesPerView": 1.2 }, "768": { "slidesPerView": 1 } }, "roundLengths":true, "pagination": {"el": ".swiper-pagination", "dynamicBullets": true}}'>

                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="swiper-slide-content">
                                                            <div class="row text-center">
                                                                <div class="col">
                                                                    <img src="./assets/images/hero/saas1.jpg"
                                                                        alt="" class="w-75" />
                                                                </div>
                                                            </div>
                                                            <div class="row text-center my-4 pb-5">
                                                                <div class="col">
                                                                    <h5 class="fw-medium fs-16">Manage your saas business
                                                                        with ease</h5>
                                                                    <p class="text-muted">Make your saas application
                                                                        stand out with high-quality landing page
                                                                        designed and developed by
                                                                        professional.</p>
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
                                                                    <p class="text-muted">
                                                                        Sed ut perspiciatis unde omnis iste natus error sit
                                                                        voluptatem accusantium.
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
                                                                    <p class="text-muted">
                                                                        Sed ut perspiciatis unde omnis iste natus error sit
                                                                        voluptatem accusantium.
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
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Already have an account? <a href="account-login.html"
                                    class="text-primary fw-semibold ms-1">Log In</a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div> --}}

    <div class="min-h-screen flex items-center justify-center">
        <div class="container">
            <div>
                <div class=" rounded mb-6">
                    <div class="flex justify-center">
                        <div class="shadow-md p-12 rounded-s xl:col-span-5 md:col-span-6">
                            <div class="mb-12">
                                <a href="{{ route('home') }}">
                                    <img src="assets/images/logo-dark.png" alt="logo-img" class="h-8">
                                </a>
                            </div>
                            <h6 class="text-base/[1.6] font-semibold text-gray-600 mb-0 mt-4">Create Your Account</h6>
                            <p class="text-gray-500 text-sm/[1.6] mt-1 mb-6">Don't have an account? Create your account, it
                                takes less than a minute.</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="block text-sm font-medium mb-1 text-gray-600">Name
                                        <small>*</small></label>
                                    <input type="text" id="name" name="name"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                        placeholder="Your Name">
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium mb-1 text-gray-600">Email
                                        <small>*</small></label>
                                    <input type="email" id="email" name="email"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                        placeholder="Your Email">
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="block text-sm font-medium mb-1 text-gray-600">Password
                                        <small>*</small></label>
                                    <input type="password" id="password" name="password"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                        placeholder="Enter your password">
                                </div>

                                <div class="mb-4">
                                    <label for="password_confirmation"
                                        class="block text-sm font-medium mb-1 text-gray-600">Confirm Password
                                        <small>*</small></label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                        placeholder="Enter your confirm password">
                                </div>



                                <div class="flex items-center mb-4">
                                    <input id="remember" type="checkbox"
                                        class="shrink-0 border-gray-400 rounded text-blue-600">
                                    <label for="remember" class="text-xs/none text-gray-700 font-medium ms-3">Remember
                                        me</label>
                                </div>

                                <div class="mb-0 text-center">
                                    <button
                                        class="w-full bg-primary text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-primary/30"
                                        type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="w-full text-center">
                    <p class="text-gray-500 leading-6 text-base">Already have an account? <a href="{{ route('login') }}"
                            class="text-primary font-semibold ms-1">Log In</a></p>
                </div>
            </div>
        </div>
    </div>


@endsection
