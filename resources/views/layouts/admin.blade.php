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

    <header
        class="@@link-color fixed top-0 inset-x-0 flex items-center z-40 w-full bg-white transition-all py-3.5">
        <div class="container">
            <nav class="flex items-center">
                <!-- Navbar Brand Logo -->
                <a href="{{ route('home') }}">
                    <img src="/assets/images/logo-dark.png" class="h-8 logo-dark" alt="Logo Dark">
                    <img src="/assets/images/logo-light.png" class="h-8 logo-light" alt="Logo Light">
                </a>

                <!-- Nevigation Menu -->
                <div class="hidden lg:block mx-auto grow">
                    <ul id="navbar-navlist"
                        class="grow flex flex-col lg:flex-row lg:items-center lg:justify-center mt-4 lg:mt-0">
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-primary"
                                href="{{ route('dashboard.dashboard') }}">
                                <span class="shrink-0 me-2">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>Stockholm-icons / Layout / Layout-4-blocks</title>
                                        <desc>Created with Sketch.</desc>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                            <rect id="Rectangle-7" fill="currentColor" x="4" y="4" width="7"
                                                height="7" rx="1.5"></rect>
                                            <path
                                                d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="grow">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-gray-700 hover:text-primary transition-all"
                                href="{{ route('dashboard.category.index') }}">
                                <span class="shrink-0 me-2">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>Stockholm-icons / Files / Group-folders</title>
                                        <desc>Created with Sketch.</desc>
                                        <g id="Stockholm-icons-/-Files-/-Group-folders" stroke="none" stroke-width="1"
                                            fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M4.5,21 L21.5,21 C22.3284271,21 23,20.3284271 23,19.5 L23,8.5 C23,7.67157288 22.3284271,7 21.5,7 L11,7 L8.43933983,4.43933983 C8.15803526,4.15803526 7.77650439,4 7.37867966,4 L4.5,4 C3.67157288,4 3,4.67157288 3,5.5 L3,19.5 C3,20.3284271 3.67157288,21 4.5,21 Z"
                                                id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                            <path
                                                d="M2.5,19 L19.5,19 C20.3284271,19 21,18.3284271 21,17.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L9,5 L6.43933983,2.43933983 C6.15803526,2.15803526 5.77650439,2 5.37867966,2 L2.5,2 C1.67157288,2 1,2.67157288 1,3.5 L1,17.5 C1,18.3284271 1.67157288,19 2.5,19 Z"
                                                id="Combined-Shape-Copy" fill="currentColor"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="grow">Category</span>
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-gray-700 hover:text-primary transition-all"
                                href="{{ route('dashboard.hospital.index') }}">
                                <span class="shrink-0 me-2">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>Stockholm-icons / Text / Article</title>
                                        <desc>Created with Sketch.</desc>
                                        <g id="Stockholm-icons-/-Text-/-Article" stroke="none" stroke-width="1"
                                            fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                            <rect id="Rectangle-20" fill="currentColor" x="4" y="5" width="16"
                                                height="3" rx="1.5"></rect>
                                            <path
                                                d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                                                id="Combined-Shape" fill="currentColor" opacity="0.3"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="grow">Hospital</span>
                            </a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link flex items-center font-medium py-2 px-4 lg:py-0 text-gray-700 hover:text-primary transition-all"
                                href="{{ route('dashboard.user.index') }}">
                                <span class="shrink-0 me-2">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>Stockholm-icons / Media / Equalizer</title>
                                        <desc>Created with Sketch.</desc>
                                        <g id="Stockholm-icons-/-Media-/-Equalizer" stroke="none" stroke-width="1"
                                            fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                            <rect id="Rectangle-62-Copy" fill="currentColor" opacity="0.3" x="13"
                                                y="4" width="3" height="16" rx="1.5"></rect>
                                            <rect id="Rectangle-62-Copy-2" fill="currentColor" x="8" y="9"
                                                width="3" height="11" rx="1.5"></rect>
                                            <rect id="Rectangle-62-Copy-4" fill="currentColor" x="18" y="11"
                                                width="3" height="9" rx="1.5"></rect>
                                            <rect id="Rectangle-62-Copy-3" fill="currentColor" x="3" y="13"
                                                width="3" height="7" rx="1.5"></rect>
                                        </g>
                                    </svg>
                                </span>
                                <span class="grow">User</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="block grow ms-auto lg:shrink me-4 lg:me-0">
                    <ul class="navbar-nav flex gap-x-3 items-center justify-end lg:justify-center">
                        <!-- Inner Page Dropdown -->
                        <li class="nav-item">
                            <a href="javascript:void(0);"
                                class="nav-link after:absolute hover:after:-bottom-10 after:inset-0"
                                data-fc-target="innerPageDropdownMenu" data-fc-type="dropdown"
                                data-fc-placement="bottom">
                                <div class="flex items-center">
                                    <div class="shrink">
                                        <div class="h-8 w-8 me-2">
                                            <img src="/assets/images/avatars/img-8.jpg"
                                                class="avatar h-full w-full rounded-full me-2" alt="">
                                        </div>
                                    </div>
                                    <div class="hidden lg:block grow ms-1 leading-normal">
                                        <span class="block text-sm font-medium">Greeva N</span>
                                        <span class="block text-gray-400 text-xs">Admin</span>
                                    </div>
                                </div>
                            </a>

                            <div id="innerPageDropdownMenu"
                                class="hidden opacity-0 mt-4 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 w-48 space-y-1.5">

                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-slate-100 transition-all">
                                    <a class="nav-link !p-2" href="{{ route('dashboard.dashboard') }}">
                                        <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-settings icon icon-xxs me-1 icon-dual">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg>
                                        Dashboard
                                    </a>
                                </div>
                                <hr class="-mx-2 my-2">

                                <!-- Dropdown item -->
                                <div class="nav-item rounded hover:bg-slate-100 transition-all">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a class="nav-link !p-2" href="#">
                                            <svg class="h-4 w-4 me-2" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-unlock icon icon-xxs me-1 icon-dual">
                                                <rect x="3" y="11" width="18" height="11" rx="2"
                                                    ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                                            </svg>
                                            Sign Out
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
                <div class="lg:hidden flex items-center ms-auto px-2.5">
                    <button type="button" data-fc-target="mobileMenu" data-fc-type="offcanvas">
                        <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <!-- footer start -->
    <section class="bg-white py-6 relative">
        <div class="container">
            <div class="flex items-center flex-wrap">
                <div class="grow">
                    <div class="flex items-center gap-3">
                        <div class="inline-flex items-center"><a href="#">About <i
                                    class="fa-solid fa-minus text-sm"></i></a></div>
                        <div class="inline-flex items-center"><a href="#">Privacy <i
                                    class="fa-solid fa-minus text-sm"></i></a></div>
                        <div class="inline-flex items-center"><a href="#">Terms <i
                                    class="fa-solid fa-minus text-sm"></i></a></div>
                        <div class="inline-flex items-center"><a href="#">Developers <i
                                    class="fa-solid fa-minus text-sm"></i></a></div>
                        <div class="inline-flex items-center"><a href="#">Support <i
                                    class="fa-solid fa-minus text-sm"></i></a></div>
                    </div>
                </div>
                <div class="shrink md:text-end mt-4 lg:mt-0">
                    <p class="text-sm mb-0">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Prompt. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->

    @stack('before-script')

    @include('includes.script')

    @stack('after-script')

</body>

</html>
