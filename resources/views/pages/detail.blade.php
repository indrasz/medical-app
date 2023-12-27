@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- features start -->
    <section class="hero-4 pb-5 pt-8 pt-lg-6 pb-sm-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Detail</a></li>
                            <li class="breadcrumb-item active text-capitalize" aria-current="page">{{ $hospital->name }}
                            </li>
                        </ol>
                    </nav>

                    <div class="mt-4">
                        <a href="#">
                            <span
                                class="badge badge-soft-orange mb-1 text-capitalize">{{ $hospital->category->name }}</span>
                        </a>
                    </div>
                    <h1 class="hero-title mt-0">{{ $hospital->name }}</h1>
                </div>
            </div>

        </div>
    </section>

    <section class="position-relative pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <figure class="figur d-block" style="width: 100%">
                        <!-- image -->
                        <img src="{{ Storage::url($hospital->thumbnail) }}" alt="{{ $hospital->name }}"
                            style="max-height: 300px; width: 100%; object-fit: contain;" class="rounded" />

                    </figure>
                    <blockquote class="blockquote p-4 my-4 bg-light">
                        <p class="">
                            {{ $hospital->address }}
                        </p>
                    </blockquote>

                </div>


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
        .w-button-custom {
            width: auto;
        }

        .uploader {
            position: relative;
            overflow: hidden;
            width: 50%;
            min-height: 75px;
            background: #ffffff;

            border-radius: 10px;
            border: 2px dashed #e8e8e8;
        }

        @media (min-width:280px) and (max-width: 576px) {
            .w-button-custom {
                width: 100%;
            }

            .uploader {
                width: 100%;
            }
        }

        .uploader .image-uploader {
            width: 75px;
            max-height: 75px;
            object-fit: cover;
            object-position: center;
        }

        #filePhoto {
            position: absolute;
            border-radius: 15px;
            width: 105px;
            height: 75px;
            left: 0;
            z-index: 2;
            opacity: 0;
            cursor: pointer;
        }

        .uploader img {
            border-radius: 10px;
            object-position: center;
            object-fit: cover;
            width: 105px;
            height: 75px;
            border: none;
        }

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
            margin-top: 12px;
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
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAabNyMuVT8g7rBRF5fcb7ZjAV8ZYuXDls&callback=initAutocomplete&libraries=places&v=weekly"
        defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('pac-input');

            searchInput.addEventListener('keydown', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault();
                }
            });
        });

        function initAutocomplete() {

            const hospitalLatitude = parseFloat({{ $hospital->latitude }});
            const hospitalLongitude = parseFloat({{ $hospital->longitude }});

            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: hospitalLatitude,
                    lng: hospitalLongitude,
                },
                zoom: 12,
                mapTypeId: "roadmap",
            });

            let markers = [];

            const existingMarker = new google.maps.Marker({
                map,
                position: {
                    lat: hospitalLatitude,
                    lng: hospitalLongitude,
                },
                title: "Hospital Location",
            });

            markers.push(existingMarker);


            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input, {
                componentRestrictions: {
                    country: "ID"
                }
            });

            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });

            searchBox.addListener("places_changed", () => {
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];

                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                const bounds = new google.maps.LatLngBounds();

                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }

                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };

                    const newMarker = new google.maps.Marker({
                        map,
                        icon,
                        title: place.name,
                        position: place.geometry.location,
                    });

                    markers.push(newMarker);

                    if (place.geometry.viewport) {
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }

                    const selectedLocation = {
                        latitude: place.geometry.location.lat(),
                        longitude: place.geometry.location.lng()
                    };

                    document.getElementById("latitude").value = selectedLocation.latitude;
                    document.getElementById("longitude").value = selectedLocation.longitude;

                    bounds.extend(place.geometry.location);
                });

                map.fitBounds(bounds);
            });

            map.addListener("click", (event) => {
                const selectedLocation = {
                    latitude: event.latLng.lat(),
                    longitude: event.latLng.lng()
                };

                document.getElementById("latitude").value = selectedLocation.latitude;
                document.getElementById("longitude").value = selectedLocation.longitude;

                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];

                const newMarker = new google.maps.Marker({
                    map,
                    position: event.latLng,
                });

                markers.push(newMarker);
            });
        }

        window.initAutocomplete = initAutocomplete;
    </script>
@endpush
