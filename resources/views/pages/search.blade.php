@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- features start -->
    <section class="position-relative overflow-hidden py-4 pb-lg-7 mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <h1 class="display-5 fw-medium">Better Management. Better Performance</h1>
                    <p class="text-muted mx-auto">
                        Start working with <span class="text-primary fw-bold">Prompt</span> to manage your workforce better
                    </p>
                </div>
            </div>
            <div class="row mt-5">

                @forelse ($hospitals as $item)
                    {{-- <div class="col-lg-6 col-xl-4">
                        <div class="card shadow-lg rounded" data-aos="fade-up" data-aos-duration="600">
                            <img src="{{ Storage::url($item->thumbnail) }}" alt="" class="card-img-top"
                                height="250" />
                            <div class="card-body">
                                <div class="">
                                    <h4 class="mt-0"><a href="#"
                                            class="text-primary text-capitalize">{{ $item->name }}</a></h4>
                                    <p class="text-muted mb-2">
                                        {{ $item->address }}
                                    </p>
                                </div>
                                <div class="pt-3">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <p class="mb-0">
                                                <i data-feather="user" class="icon icon-dual icon-xs me-1"></i>
                                                <a href="{{ route('detail', $item->slug) }}"
                                                    class="fs-13 align-middle text-muted">Detail</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-lg-4">
                        <div>
                            <img src="{{ Storage::url($item->thumbnail) }}" alt="{{ $item->name }}" class="shadow rounded"
                                height="250" style="max-height: 250px; min-width: 250px;" />

                            <div class="mt-3">
                                <a href="#">
                                    <span
                                        class="badge badge-soft-primary mb-1 text-capitalize">{{ $item->category->name }}</span>
                                </a>
                            </div>

                            <h4 class="fw-semibold mt-3">
                                <a class="" href="{{ route('detail', $item->slug) }}">
                                    {{ $item->name }}
                                </a>
                            </h4>

                            <p class="text-muted text-truncate">
                                {{ $item->description }}
                                <a href="{{ route('detail', $item->slug) }}" class="text-primary">read more</a>
                            </p>
                        </div>
                    </div>


                @empty
                @endforelse

                {{ $hospitals->links() }}


                <div class="col-12">
                    <div class="mb-3 mt-5">
                        <div style="height: 300px">
                            <div id="map" class="rounded"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- features end -->

@endsection

@push('after-style')
    <style>
        #map {
            height: 100%;
        }

        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            font-family: Roboto;
            padding: 0;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 400px;
        }

        #pac-input:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }

        #target {
            width: 345px;
        }
    </style>
@endpush

@push('after-script')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAabNyMuVT8g7rBRF5fcb7ZjAV8ZYuXDls&callback=displayBusinessMarkers&libraries=places&v=weekly"
        defer></script>
    <script>
        // function initAutocomplete() {
        //     // Initialize the map
        //     const map = new google.maps.Map(document.getElementById('map'), {
        //         center: {
        //             lat: -34.397,
        //             lng: 150.644
        //         }, // Default center (you can set it to your desired default location)
        //         zoom: 8, // Default zoom level
        //     });

        //     // Hospitals data from the server
        //     const hospitals = {!! json_encode($hospitals) !!};

        //     console.log(hospitals);

        //     // Loop through each hospital and add a marker to the map
        //     hospitals.data.forEach(hospital => {
        //         const marker = new google.maps.Marker({
        //             position: {
        //                 lat: parseFloat(hospital.latitude),
        //                 lng: parseFloat(hospital.longitude)
        //             },
        //             map: map,
        //             title: hospital.name,
        //         });

        //         // You can customize the marker icon if needed
        //         // marker.setIcon('path/to/custom-marker-icon.png');
        //     });
        // }

        function displayBusinessMarkers(businessData) {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -2.5489,
                    lng: 118.0149,
                },
                zoom: 5,
                mapTypeId: "roadmap",
            });

            const markers = [];

            businessData.data.forEach((business) => {

                const hospitalLatitude = parseFloat(business.latitude);
                const hospitalLongitude = parseFloat(business.longitude);

                const marker = new google.maps.Marker({
                    position: {
                        lat: hospitalLatitude,
                        lng: hospitalLongitude,
                    },
                    map,
                    title: business.name,
                });

                markers.push(marker);

                const infowindow = new google.maps.InfoWindow({
                    content: `<h6>${business.name}</h6>`,
                });

                marker.addListener("click", () => {
                    infowindow.open(map, marker);
                });
            });

            const bounds = new google.maps.LatLngBounds();
            markers.forEach((marker) => {
                bounds.extend(marker.getPosition());
            });
            map.fitBounds(bounds);
        }

        document.addEventListener("DOMContentLoaded", () => {
            const businessData = {!! isset($hospitals) ? json_encode($hospitals) : 'null' !!};
            console.log(businessData);
            if (businessData) {
                displayBusinessMarkers(businessData);
            }
        });
    </script>
@endpush
