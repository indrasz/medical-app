@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
    <!-- page-content start -->
    <div class="bg-slate-100  mt-[77px]  py-3 px-3" style="min-height: 800px;">
        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex">
                    <div class="w-full">
                        <h3 class="text-xl text-gray-800 mt-2">Hi {{  Auth::user()->name  }}</h3>
                        <p class="mt-1 font-medium mb-4">Welcome to Prompt!</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-2">
                    <!-- profile widget star -->
                    <div class="lg:col-span-5 col-span-12">
                        <div class="bg-white rounded">
                            <div class="p-6">
                                <div class="flex">
                                    <div class="grow">
                                        <div class="flex">
                                            <img src="assets/images/avatars/img-8.jpg"
                                                class="img-fluid w-12 h-12 rounded me-3" alt="...">
                                            <div class="grow">
                                                <h4 class="tetx-lg text-gray-800 mb-1 mt-0 font-semibold">{{  Auth::user()->name  }}</h4>
                                                <p class="text-gray-400 pb-0 text-sm mb-4 font-medium">{{ Auth::user()->roles  }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shrink text-end">
                                        <button class="text-gray-800" data-fc-target="dropdown-target"
                                            data-fc-type="dropdown" data-fc-placement="bottom-end" type="button">
                                            <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal icon icon-xs">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </button>

                                        <div id="dropdown-target"
                                            class="hidden bg-white  shadow rounded py-2 px-1.5 min-w-[10rem]">
                                            <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded"
                                                href="javascript:void(0)">
                                                <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit icon-xxs icon me-2">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                    </path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                    </path>
                                                </svg>
                                                <span class="">Share</span>
                                            </a>
                                            <a class="flex items-center py-1.5 px-5 text-base text-gray-500 hover:bg-slate-100 hover:text-slate-700 rounded"
                                                href="javascript:void(0)">
                                                <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-refresh-cw icon-xxs icon me-2">
                                                    <polyline points="23 4 23 10 17 10"></polyline>
                                                    <polyline points="1 20 1 14 7 14"></polyline>
                                                    <path
                                                        d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15">
                                                    </path>
                                                </svg>
                                                <span class="">Refresh</span>
                                            </a>

                                            <hr class="my-2">

                                            <a class="flex items-center py-1.5 px-5 text-base text-red-500 hover:bg-slate-100 rounded"
                                                href="javascript:void(0)">
                                                <svg class="h-4 w-4 me-2.5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash-2 icon-xxs icon me-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10" y2="17">
                                                    </line>
                                                    <line x1="14" y1="11" x2="14" y2="17">
                                                    </line>
                                                </svg>
                                                <span class="">Deactivate</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex gap-4 flex-wrap py-4 border-b">
                                    <div class="mb-2">
                                        <a href="#" class="flex gap-0.5 text-gray-400 text-sm"><svg class="h-5 w-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-mail icon-xs icon me-1">
                                                <path
                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>{{  Auth::user()->email  }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- profile widget end -->

                </div><!-- end grid -->
            </div>
        </section>

        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex items-center justify-between my-6">
                    <div class="">
                        <h4 class="text-base text-gray-800">User Active</h4>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('dashboard.user.index') }}" class="font-semibold text-primary text-sm">View All <svg class="h-5 w-5 inline"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-arrow-right ms-1 icon-xxs">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg></a>
                    </div>
                </div><!-- end title -->

                <div class="flex flex-col gap-y-2 w-full mb-4">

                    @forelse ($users as $item)
                        <div class="bg-white">
                            <div class="p-6">
                                <div class="flex flex-wrap lg:flex-nowrap items-center sm:justify-between gap-y-2">
                                    <div class="w-1/2">
                                        <div class="flex items-center gap-2">
                                            <label class="text-sm font-semibold text-gray-700" for="task1">
                                                {{ $item->name }}
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="lg:w-1/3">
                                        <label class="text-sm font-semibold text-gray-700" for="task1">
                                                {{ $item->email }}
                                            </label>
                                    </div>
                                    <div class="lg:w-1/3">
                                        <label class="text-sm font-semibold text-gray-700" for="task1">
                                                {{ $item->roles }}
                                            </label>
                                    </div>
                                    <div class="lg:w-1/3">
                                        <div class="flex items-center justify-end gap-6">
                                            <div class="">
                                                <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                                    <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24"
                                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                        <title>Stockholm-icons / Text / Bullet-list</title>
                                                        <desc>Created with Sketch.</desc>
                                                        <g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none"
                                                            stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect id="bound" x="0" y="0" width="24"
                                                                height="24">
                                                            </rect>
                                                            <path
                                                                d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                                id="Combined-Shape" fill="currentColor"></path>
                                                            <path
                                                                d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                                id="Combined-Shape" fill="currentColor" opacity="0.3">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    <span class="text-sm text-gray-800 font-medium">3/7</span>
                                                </div>
                                                <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50"
                                                    role="tooltip">
                                                    10 Subtasks are completed
                                                    <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"
                                                        data-fc-arrow></div>
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="inline-flex items-center gap-2" data-fc-type="tooltip">
                                                    <svg class="h-5 w-5 text-gray-800 inline" viewBox="0 0 24 24"
                                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"><!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                        <title>Stockholm-icons / Text / Bullet-list</title>
                                                        <desc>Created with Sketch.</desc>
                                                        <g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none"
                                                            stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect id="bound" x="0" y="0" width="24"
                                                                height="24">
                                                            </rect>
                                                            <path
                                                                d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                                id="Combined-Shape" fill="currentColor"></path>
                                                            <path
                                                                d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                                id="Combined-Shape" fill="currentColor" opacity="0.3">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    <span class="text-sm text-gray-800 font-medium">21</span>
                                                </div>
                                                <div class="bg-gray-800 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50"
                                                    role="tooltip">
                                                    5 Comments
                                                    <div class="bg-gray-800 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]"
                                                        data-fc-arrow></div>
                                                </div>
                                            </div>

                                            <span
                                                class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-md text-xs font-semibold bg-red-500/10 text-red-500">High</span>
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
    </div>
    <!-- page-content end -->


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
