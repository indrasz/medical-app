<header>
    <nav class="navbar navbar-expand-lg topnav-menu navbar-light zindex-10">
        <div class="container">
            <a class="navbar-brand logo" href="/">
                <img src="./assets/images/logo.png" height="30" class="align-top logo-dark" alt="" />
                <img src="./assets/images/logo-light.png" height="30" class="align-top logo-light" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#topnav-menu-content" aria-controls="topnav-menu-content" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav align-items-lg-center d-flex me-auto">

                </ul>


                <ul class="navbar-nav align-items-lg-center ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Map</a>
                    </li>

                    @if (Auth::user())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle py-0" href="#" id="user" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="../../assets/images/avatars/img-8.jpg"
                                            class="avatar avatar-xs rounded-circle me-2" alt="" />
                                    </div>
                                    <div class="flex-grow-1 ms-1 lh-base">
                                        <span
                                            class="fw-semibold fs-13 d-block line-height-normal text-capitalize">{{ Auth::user()->name }}</span>
                                        {{-- <span class="text-muted fs-13">Admin</span> --}}
                                    </div>
                                </div>
                            </a>

                            <div class="dropdown-menu p-2" aria-labelledby="user">
                                <!-- item start -->
                                <a class="dropdown-item p-2" href="#">
                                    <i class="icon icon-xxs me-1 icon-dual" data-feather="user"></i>
                                    Profile
                                </a>
                                <!-- item end -->

                                <!-- item start -->
                                <a class="dropdown-item p-2" href="#">
                                    <i class="icon icon-xxs me-1 icon-dual" data-feather="settings"></i>
                                    Settings
                                </a>
                                <!-- item end -->

                                <!-- item start -->
                                <a class="dropdown-item p-2" href="#">
                                    <i class="icon icon-xxs me-1 icon-dual" data-feather="aperture"></i>
                                    Support
                                </a>
                                <!-- item end -->

                                <div class="dropdown-divider"></div>

                                <!-- item start -->


                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="dropdown-item p-2" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="icon icon-xxs me-1 icon-dual" data-feather="unlock"></i>
                                        Sign Out
                                    </a>

                                </form>
                                <!-- item end -->
                            </div>
                        </li>
                    @else
                        <li class="nav-item ms-2">
                            <a class="btn btn-outline-primary btn-sm" href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item ms-2">
                            <a class="btn btn-primary btn-sm" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif

                </ul>

            </div>
        </div>
    </nav>

</header>

<section class="position-relative hero-11 py-1 pt-7 pb-sm-6">
    <div class="container hero-content">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="hero-title">The best way to <span
                        class="highlight highlight-success d-inline-block">showcase</span> your saas</h1>

                <p class="fs-17 text-muted pt-0">
                    Make your saas application stand out with high-quality landing page designed and developed by
                    professional
                </p>

                <div class="mt-4 mt-sm-5 pt-0 d-flex align-items-center justify-content-center">
                    <div class="row g-2 text-start">
                        <div class="col-sm-5">
                            <label class="visually-hidden" for="name">Name</label>
                            <input type="text" class="form-control mb-2 me-sm-2 shadow-sm" name="name"
                                id="name" placeholder="Your Name">
                        </div>
                        <div class="col-sm-5">
                            <label class="visually-hidden" for="email">Email</label>
                            <input type="email" class="form-control mb-2 me-sm-2 shadow-sm" name="email"
                                id="email" placeholder="Your Email">
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary mb-2 text-nowrap">Sign Up</button>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-2 justify-content-center">
                    <div class="me-4"><i data-feather="check-circle"
                            class="icon icon-dual-success icon-xs me-1"></i>Free 14-day Demo</div>
                    <div class="me-4"><i data-feather="check-circle"
                            class="icon icon-dual-success icon-xs me-1"></i>No credit card needed</div>
                    <div><i data-feather="check-circle" class="icon icon-dual-success icon-xs me-1"></i>No Setup</div>
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>

    <div class="feature-container position-relative overflow-hidden mt-5 mb-4">
        <div class="container">
            <div class="row align-items-center justify-content-center zindex-1 slider-container">
                <div class="col-10 text-center zindex-1">
                    <div class="card rounded-lg shadow" data-aos="fade-up" data-aos-duration="2000">
                        <div class="card-body slider-container-body">
                            <!-- Swiper -->
                            <div class="slider">
                                <div class="swiper-container" data-toggle="swiper"
                                    data-swiper='{"slidesPerView":1, "loop":true, "spaceBetween": 0, "autoplay": {"delay": 5000}, "breakpoints": {"576": {"slidesPerView": 1.2 }, "768": { "slidesPerView": 1 } }, "roundLengths":true}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="swiper-slide-content">
                                                <div
                                                    class="video-overlay d-flex align-items-center justify-content-center">
                                                    <a href="#" class="btn-play success"></a>
                                                </div>
                                                <img src="./assets/images/hero/saas1.jpg" alt=""
                                                    class="img-fluid rounded-lg" />
                                            </div>
                                        </div>
                                        <!-- swiper-slide End -->

                                        <div class="swiper-slide">
                                            <div class="swiper-slide-content">
                                                <div
                                                    class="video-overlay d-flex align-items-center justify-content-center">
                                                    <a href="#" class="btn-play success"></a>
                                                </div>
                                                <img src="./assets/images/hero/saas2.jpg" alt=""
                                                    class="img-fluid rounded-lg" />
                                            </div>
                                        </div>
                                        <!-- swiper-slide End -->

                                        <div class="swiper-slide">
                                            <div class="swiper-slide-content">
                                                <div
                                                    class="video-overlay d-flex align-items-center justify-content-center">
                                                    <a href="#" class="btn-play success"></a>
                                                </div>
                                                <img src="./assets/images/hero/saas3.jpg" alt=""
                                                    class="img-fluid rounded-lg" />
                                            </div>
                                        </div>
                                        <!-- swiper-slide End -->
                                    </div>
                                    <!-- swiper-wrapper End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('after-style')
@endpush

@push('after-script')
@endpush
