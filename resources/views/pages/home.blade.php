@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- features start -->
    <section class="position-relative overflow-hidden py-4 pb-lg-7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <span class="badge rounded-pill badge-soft-primary px-2 py-1">Features</span>
                    <h1 class="display-5 fw-medium">Better Management. Better Performance</h1>
                    <p class="text-muted mx-auto">
                        Start working with <span class="text-primary fw-bold">Prompt</span> to manage your workforce better
                    </p>
                </div>
            </div>

            <div class="row pt-5 align-items-center features-3">
                <div class="col-lg-6">
                    <div class="img-content position-relative">
                        <div class="img-up mb-lg-0 mb-6">
                            <img src="./assets/images/hero/saas1.jpg" alt="app img" class="img-fluid d-block rounded"
                                data-aos="fade-right" data-aos-duration="200" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="accordion" id="features-list" data-aos="fade-up" data-aos-duration="300">
                        <div class="d-flex border-bottom pb-4">
                            <span
                                class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3 flex-shrink-0">
                                <?xml version="1.0" encoding="UTF-8"?>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                    <title>Stockholm-icons / Communication / Group</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Stockholm-icons-/-Communication-/-Group" stroke="none" stroke-width="1"
                                        fill="none" fill-rule="evenodd">
                                        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                        <path
                                            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                            id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                                        <path
                                            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                            id="Combined-Shape" fill="#335EEA"></path>
                                    </g>
                                </svg>
                            </span>

                            <div class="flex-grow-1">
                                <a href="#" class="text-dark h4" data-bs-toggle="collapse"
                                    data-bs-target="#feature1ex" role="button" aria-expanded="false"
                                    aria-controls="feature1ex">Improve Employee
                                    Experience
                                </a>

                                <div class="collapse show" id="feature1ex" data-bs-parent="#features-list">
                                    <p class="text-muted mt-1 mb-4">
                                        Before we dive into why companies must invest in employee experience (EX), it’s
                                        important to understand what this concept entails.
                                    </p>
                                    <a href="#" class="h6 text-primary">Learn more
                                        <i class="ms-1 icon-xxs" data-feather="arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex border-bottom py-4 text-align-start">
                            <span
                                class="bg-soft-success avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-success me-3 flex-shrink-0">
                                <?xml version="1.0" encoding="UTF-8"?>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                    <title>Stockholm-icons / Communication / Add-user</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Stockholm-icons-/-Communication-/-Add-user" stroke="none" stroke-width="1"
                                        fill="none" fill-rule="evenodd">
                                        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                        <path
                                            d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                            id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                                        <path
                                            d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                            id="Mask-Copy" fill="#335EEA"></path>
                                    </g>
                                </svg>
                            </span>
                            <div class="flex-grow-1">
                                <a href="#" class="text-dark h4" data-bs-toggle="collapse"
                                    data-bs-target="#feature2ex" role="button" aria-expanded="false"
                                    aria-controls="feature2ex">Hiring &amp;
                                    Onboarding
                                </a>

                                <div class="collapse" id="feature2ex" data-bs-parent="#features-list">
                                    <p class="text-muted mt-1 mb-4">
                                        Post your job, interview candidates and make offers, all on Prompt. Start hiring
                                        today.
                                    </p>
                                    <a href="#" class="h6 text-primary">Learn more
                                        <i class="ms-1 icon-xxs" data-feather="arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex pt-4 text-align-start">
                            <span
                                class="bg-soft-orange avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-orange me-3 flex-shrink-0">
                                <?xml version="1.0" encoding="UTF-8"?>
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                    <title>Stockholm-icons / Shopping / Chart-bar#3</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Stockholm-icons-/-Shopping-/-Chart-bar#3" stroke="none" stroke-width="1"
                                        fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                        <rect id="Rectangle-62-Copy" fill="#335EEA" opacity="0.3" x="7" y="4"
                                            width="3" height="13" rx="1.5"></rect>
                                        <rect id="Rectangle-62-Copy-2" fill="#335EEA" opacity="0.3" x="12" y="9"
                                            width="3" height="8" rx="1.5"></rect>
                                        <path
                                            d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                            id="Path-95" fill="#335EEA"></path>
                                        <rect id="Rectangle-62-Copy-4" fill="#335EEA" opacity="0.3" x="17" y="11"
                                            width="3" height="6" rx="1.5"></rect>
                                    </g>
                                </svg>
                            </span>
                            <div class="flex-grow-1">
                                <a href="#" class="text-dark h4" data-bs-toggle="collapse"
                                    data-bs-target="#feature3ex" role="button" aria-expanded="false"
                                    aria-controls="feature3ex">People Data &amp;
                                    Analytics
                                </a>

                                <div class="collapse" id="feature3ex" data-bs-parent="#features-list">
                                    <p class="text-muted mt-1 mb-4">
                                        Finding committed employees is one of public and private organizations’ top
                                        priorities.
                                    </p>
                                    <a href="#" class="h6 text-primary">Learn more
                                        <i class="ms-1 icon-xxs" data-feather="arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative overflow-hidden py-7 features-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="mb-5 mb-lg-0" data-aos="fade-up" data-aos-duration="200">
                        <span
                            class="bg-soft-primary avatar avatar-sm rounded-lg icon icon-with-bg icon-xs text-primary me-3">
                            <?xml version="1.0" encoding="UTF-8"?>
                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                <title>Stockholm-icons / Shopping / MC</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Stockholm-icons-/-Shopping-/-MC" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                    <path
                                        d="M10.8226874,8.36941377 L12.7324324,9.82298668 C13.4112512,8.93113547 14.4592942,8.4 15.6,8.4 C17.5882251,8.4 19.2,10.0117749 19.2,12 C19.2,13.9882251 17.5882251,15.6 15.6,15.6 C14.5814697,15.6 13.6363389,15.1780547 12.9574041,14.4447676 L11.1963369,16.075302 C12.2923051,17.2590082 13.8596186,18 15.6,18 C18.9137085,18 21.6,15.3137085 21.6,12 C21.6,8.6862915 18.9137085,6 15.6,6 C13.6507856,6 11.9186648,6.9294879 10.8226874,8.36941377 Z"
                                        id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                                    <path
                                        d="M8.4,18 C5.0862915,18 2.4,15.3137085 2.4,12 C2.4,8.6862915 5.0862915,6 8.4,6 C11.7137085,6 14.4,8.6862915 14.4,12 C14.4,15.3137085 11.7137085,18 8.4,18 Z"
                                        id="Oval-14-Copy" fill="#335EEA"></path>
                                </g>
                            </svg>
                        </span>
                        <h1 class="text-dark pt-3">Smart Payroll. Paying your people couldn't be easier</h1>
                        <p class="text-muted my-4">You can modify your pages with drag-dropping , can import demos with
                            just ” One Click” and can modify theme setting easy-to-use options panel.</p>
                        <a href="#" class="h6 text-primary pt-3">Learn more <i class="ms-1 icon-xxs"
                                data-feather="arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-1">
                    <div class="img-content2 position-relative">
                        <div class="img-up">
                            <img src="./assets/images/hero/saas2.jpg" alt="app img" class="img-fluid d-block rounded"
                                data-aos="fade-left" data-aos-duration="300" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- features end -->

@endsection

@push('after-style')
@endpush

@push('after-script')
    {{-- <script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                document.getElementById('latitude').value = latitude;
                document.getElementById('longitude').value = longitude;

                document.getElementById('serviceLatitude').value = latitude;
                document.getElementById('serviceLongitude').value = longitude;

            }, function(error) {
                console.error('Error getting location:', error);
            });
        } else {
            console.error('Geolocation is not supported by this browser.');
        }
    </script> --}}
@endpush
