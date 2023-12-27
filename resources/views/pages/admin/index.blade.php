@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
    <!-- page-content start -->
    <section class="position-relative overflow-hidden bg-gradient2 py-3 px-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title">
                        <h3 class="mb-0">Hi {{ Auth::user()->name }}</h3>
                        <p class="mt-1 fw-medium">Welcome to Prompt!</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <!-- profile widget star -->
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex">
                                        <img src="./assets/images/avatars/img-8.jpg"
                                            class="img-fluid avatar-sm rounded-sm me-3" alt="..." />
                                        <div class="flex-grow-1">
                                            <h4 class="mb-1 mt-0 fs-16">{{ Auth::user()->name }}</h4>
                                            <p class="text-muted pb-0 fs-14">Web & Graphic Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto text-end">
                                    <div class="dropdown">
                                        <a class="btn-link text-muted dropdown-toggle arrow-none" href="#"
                                            role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                            <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                    data-feather="edit"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                    data-feather="refresh-cw"></i>Refresh</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#"><i
                                                    class="icon-xxs icon me-2" data-feather="trash-2"></i>Deactivate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-inline py-3 border-bottom">
                                <li class="list-inline-item mb-sm-0 mb-2 me-sm-2">
                                    <a href="#" class="text-muted fs-14"><i class="icon-xs icon me-1"
                                            data-feather="mail"></i>greeva@coderthemes.com</a>
                                </li>
                                <li class="list-inline-item mb-sm-0 mb-2">
                                    <a href="#" class="text-muted fs-14"><i class="icon-xxs icon me-2"
                                            data-feather="phone"></i>+00 123-456-789</a>
                                </li>
                            </ul>

                            <div class="row align-items-center pt-1">
                                <div class="col-md-6">
                                    <p class="float-end mb-0">85%</p>
                                    <h6 class="fw-medium my-0">Project Completion</h6>
                                    <div class="progress mt-3" style="height: 6px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-sm-0 mt-4">
                                    <p class="float-end mb-0">7.5</p>
                                    <h6 class="fw-medium my-0">Overall Rating</h6>
                                    <div class="progress mt-3" style="height: 6px;">
                                        <div class="progress-bar bg-orange" role="progressbar" style="width: 75%;"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profile widget end -->

                <!-- stats start -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm icon icon-with-bg icon-xs rounded-sm bg-soft-success me-3">
                                    <i class="icon-dual-success" data-feather="check-circle"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="mt-0 mb-0">21</h3>
                                    <p class="text-muted mb-0">Tasks Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div
                                    class="avatar-sm icon icon-with-bg icon-xs rounded-sm bg-soft-info me-3 flex-shrink-0">
                                    <i class="icon-dual-info" data-feather="edit-3"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="mt-0 mb-0">21</h3>
                                    <p class="text-muted mb-0">Tasks Inprogress</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- stats end -->

                <!-- revenue start -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4 class="mb-1 mt-0 fs-16">Revenue</h4>
                                </div>
                                <div class="col-auto text-end">
                                    <div class="dropdown">
                                        <a class="btn-link text-muted dropdown-toggle arrow-none" href="#"
                                            role="button" id="dropdownMenuLink-2" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="icon icon-xs" data-feather="more-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-2">
                                            <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                    data-feather="edit"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="icon-xxs icon me-2"
                                                    data-feather="refresh-cw"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="">$2,100.00</h1>
                            <p class="text-muted">Last Week</p>

                            <hr class="mb-1" />
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="me-3 flex-shrink-0">
                                            <i class="text-success" data-feather="trending-up"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="mt-0 mb-0">15%</h5>
                                            <p class="text-muted mb-0 fs-13">Prev Week</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center mt-2">
                                        <div class="me-3 flex-shrink-0">
                                            <i class="text-danger" data-feather="trending-down"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="mt-0 mb-0">10%</h5>
                                            <p class="text-muted mb-0 fs-13">Prev Month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- revenue end -->
            </div>

            <!-- recent projects start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-3 mt-0 fs-16">List User</h4>
                        </div>
                        <div class="col-auto text-end">
                            <a href="#" class="fw-semibold text-primary fs-13">View All <i class="ms-1 icon-xxs"
                                    data-feather="arrow-right"></i></a>
                        </div>
                    </div>

                    <!-- task start -->

                    @forelse ($users as $item)
                        <div class="row mb-2">
                            <div class="col">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="row align-items-center justify-content-sm-between">
                                            <div class="col-lg-3">
                                                <div class="form-check">
                                                    <label class="form-check-label text-capitalize" for="task1">
                                                        {{ $item->name }}
                                                    </label>
                                                </div> <!-- end checkbox -->
                                            </div> <!-- end col -->
                                            <div class="col-lg-3">
                                                <label class="form-check-label text-capitalize" for="task1">
                                                    {{ $item->email }}
                                                </label>
                                            </div>
                                            <div class="col-lg-3">
                                                <label class="form-check-label text-capitalize" for="task1">
                                                    {{ $item->roles }}
                                                </label>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul class="list-inline text-sm-end mb-0" id="tooltip-container2">
                                                    <li class="list-inline-item pe-3" id="tooltip-container2">
                                                        <span class="fs-13 fw-medium" data-bs-toggle="tooltip"
                                                            data-bs-container="#tooltip-container2"
                                                            data-bs-placement="bottom" title="10 Subtasks are completed">
                                                            <span class="icon icon-xxs text-normal">
                                                                <?xml version="1.0" encoding="UTF-8"?>
                                                                <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                                    <title>Stockholm-icons / Text / Bullet-list</title>
                                                                    <desc>Created with Sketch.</desc>
                                                                    <g id="Stockholm-icons-/-Text-/-Bullet-list"
                                                                        stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect id="bound" x="0" y="0" width="24"
                                                                            height="24"></rect>
                                                                        <path
                                                                            d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                                            id="Combined-Shape" fill="#335EEA"></path>
                                                                        <path
                                                                            d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                                            id="Combined-Shape" fill="#335EEA"
                                                                            opacity="0.3"></path>
                                                                    </g>
                                                                </svg>
                                                            </span>3/7
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item pe-3" id="tooltip-container4">
                                                        <span class="fs-13 fw-medium" data-bs-toggle="tooltip"
                                                            data-bs-container="#tooltip-container4"
                                                            data-bs-container="#tooltip-container2"
                                                            data-bs-placement="bottom" title="5 Comments">
                                                            <span class="icon icon-xxs text-normal">
                                                                <?xml version="1.0" encoding="UTF-8"?>
                                                                <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                                    <title>Stockholm-icons / Communication / Mail-opened
                                                                    </title>
                                                                    <desc>Created with Sketch.</desc>
                                                                    <g id="Stockholm-icons-/-Communication-/-Mail-opened"
                                                                        stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect id="bound" x="0" y="0" width="24"
                                                                            height="24"></rect>
                                                                        <path
                                                                            d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                                                            id="Combined-Shape" fill="#335EEA"
                                                                            opacity="0.3"></path>
                                                                        <path
                                                                            d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                                                            id="Combined-Shape" fill="#335EEA"></path>
                                                                    </g>
                                                                </svg>
                                                            </span>21
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="badge badge-soft-danger p-1">High</span>
                                                    </li>
                                                </ul>
                                            </div> <!-- end col -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                    <!-- task end -->

                </div>
            </div>
        </div>
    </section>
    <!-- page-content end -->

    <!-- footer start -->
    <section class="section py-4 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <ul class="list-inline list-with-separator mb-0">
                        <li class="list-inline-item me-0"><a href="#">About</a></li>
                        <li class="list-inline-item me-0"><a href="#">Privacy</a></li>
                        <li class="list-inline-item me-0"><a href="#">Terms</a></li>
                        <li class="list-inline-item me-0"><a href="#">Developers</a></li>
                        <li class="list-inline-item me-0"><a href="#">Support</a></li>
                    </ul>
                </div>
                <div class="col-md-auto text-md-end mt-2 mt-md-0">
                    <p class="fs-14 mb-0">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Prompt. All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->

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
