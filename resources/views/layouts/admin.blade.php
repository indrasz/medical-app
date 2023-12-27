<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')

    <!-- title -->
    <title>Medical | Admin</title>

    @stack('before-style')

    @include('includes.style')

    @stack('after-style')

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg topnav-menu navbar-light shadow">
            <div class="container">
                <a class="navbar-brand me-lg-3 me-auto" href="{{ route('home') }}">
                    <img src="/assets/images/logo.png" height="30" class="d-inline-block align-top" alt="" />
                </a>

                <a href="#" class="navbar-toggler me-3" data-bs-toggle="collapse"
                    data-bs-target="#topnav-menu-content4" aria-controls="topnav-menu-content4" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </a>

                <div class="collapse navbar-collapse" id="topnav-menu-content4">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item pe-3">
                            <a class="nav-link active" href="{{ route('dashboard.dashboard') }}">
                                <div class="d-flex align-items-center">
                                    <span class="icon-xs me-1 flex-shrink-0">
                                        <?xml version="1.0" encoding="UTF-8"?>
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                            <title>Stockholm-icons / Layout / Layout-4-blocks</title>
                                            <desc>Created with Sketch.</desc>
                                            <g id="Stockholm-icons-/-Layout-/-Layout-4-blocks" stroke="none"
                                                stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <rect id="Rectangle-7" fill="#335EEA" x="4" y="4" width="7"
                                                    height="7" rx="1.5"></rect>
                                                <path
                                                    d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                    id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <div class="flex-grow-1">Dashboard</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard.category.index') }}">
                                <div class="d-flex align-items-center">
                                    <span class="icon-xs me-1 flex-shrink-0">
                                        <?xml version="1.0" encoding="UTF-8"?>
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                            <title>Stockholm-icons / Shopping / Settings</title>
                                            <desc>Created with Sketch.</desc>
                                            <g id="Stockholm-icons-/-Shopping-/-Settings" stroke="none"
                                                stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="Bound" opacity="0.200000003" x="0" y="0" width="24"
                                                    height="24"></rect>
                                                <path
                                                    d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z"
                                                    id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                                                <path
                                                    d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z"
                                                    id="Combined-Shape" fill="#335EEA"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <div class="flex-grow-1">Category</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item pe-3">
                            <a class="nav-link" href="{{ route('dashboard.hospital.index') }}">
                                <div class="d-flex align-items-center">
                                    <span class="icon-xs me-1 flex-shrink-0">
                                        <?xml version="1.0" encoding="UTF-8"?>
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                            <title>Stockholm-icons / Files / Group-folders</title>
                                            <desc>Created with Sketch.</desc>
                                            <g id="Stockholm-icons-/-Files-/-Group-folders" stroke="none"
                                                stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <path
                                                    d="M4.5,21 L21.5,21 C22.3284271,21 23,20.3284271 23,19.5 L23,8.5 C23,7.67157288 22.3284271,7 21.5,7 L11,7 L8.43933983,4.43933983 C8.15803526,4.15803526 7.77650439,4 7.37867966,4 L4.5,4 C3.67157288,4 3,4.67157288 3,5.5 L3,19.5 C3,20.3284271 3.67157288,21 4.5,21 Z"
                                                    id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                                                <path
                                                    d="M2.5,19 L19.5,19 C20.3284271,19 21,18.3284271 21,17.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L9,5 L6.43933983,2.43933983 C6.15803526,2.15803526 5.77650439,2 5.37867966,2 L2.5,2 C1.67157288,2 1,2.67157288 1,3.5 L1,17.5 C1,18.3284271 1.67157288,19 2.5,19 Z"
                                                    id="Combined-Shape-Copy" fill="#335EEA"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <div class="flex-grow-1">Hospital</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item pe-3">
                            <a class="nav-link" href="{{ route('dashboard.user.index') }}">
                                <div class="d-flex align-items-center">
                                    <span class="icon-xs me-1 flex-shrink-0">
                                        <?xml version="1.0" encoding="UTF-8"?>
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                            <title>Stockholm-icons / Text / Article</title>
                                            <desc>Created with Sketch.</desc>
                                            <g id="Stockholm-icons-/-Text-/-Article" stroke="none" stroke-width="1"
                                                fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24">
                                                </rect>
                                                <rect id="Rectangle-20" fill="#335EEA" x="4" y="5" width="16"
                                                    height="3" rx="1.5"></rect>
                                                <path
                                                    d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                                                    id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <div class="flex-grow-1">User</div>
                                </div>
                            </a>
                        </li>

                    </ul>

                    <ul class="navbar-nav align-items-center">

                        <!-- profile dropdown start -->
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
                                {{-- <a class="dropdown-item p-2" href="{{ route('dashboard.dashboard') }}">
                                    <i class="icon icon-xxs me-1 icon-dual" data-feather="user"></i>
                                    Dashboard
                                </a> --}}

                                <!-- item start -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="dropdown-item p-2" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="icon icon-xxs me-1 icon-dual" data-feather="unlock"></i>
                                        Sign Out
                                    </a>

                                </form>
                                <!-- item end -->
                            </div>
                        </li>
                        <!-- profile dropdown end -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    @stack('before-script')

    @include('includes.script')

    @stack('after-script')

</body>

</html>
