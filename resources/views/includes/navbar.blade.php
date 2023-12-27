<header>
    <nav class="navbar navbar-expand-lg topnav-menu navbar-light zindex-10">
        <div class="container">
            <a class="navbar-brand logo" href="/">
                <img src="/assets/images/logo.png" height="30" class="align-top logo-dark" alt="" />
                <img src="/assets/images/logo-light.png" height="30" class="align-top logo-light" alt="" />
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
                        <a class="nav-link" href="{{ route('search') }}">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
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
                                <a class="dropdown-item p-2" href="{{ route('dashboard.dashboard') }}">
                                    <i class="icon icon-xxs me-1 icon-dual" data-feather="user"></i>
                                    Dashboard
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

@push('after-style')
@endpush

@push('after-script')
@endpush
