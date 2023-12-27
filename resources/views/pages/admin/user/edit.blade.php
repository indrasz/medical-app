@extends('layouts.admin')

@section('title', 'Category')

@section('content')
    <!-- page-content start -->
    <section class="position-relative overflow-hidden py-3 px-3">
        <div class="container">
            <!-- recent projects start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-between mt-5">
                        <div class="col">
                            <h4 class="mb-3 mt-0 fs-16">Update data Hospital</h4>
                        </div>
                    </div>

                    <form action="{{ route('dashboard.user.update', [$user->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">User Name</label>
                                    <input type="text" disabled class="form-control" id="name"
                                        value="{{ $user->name ?? '' }}" placeholder="Enter name" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">email</label>
                                    <input type="text" disabled class="form-control" id="email"
                                        value="{{ $user->email ?? '' }}" placeholder="Enter Address" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Roles</label>
                                    <select class="form-select mb-2 me-sm-2 shadow-sm" style="border: 1px solid #F2F2F2;"
                                        aria-label="Default select example" name="roles" id="categorySelect">
                                        <option selected disabled value="{{ $user->roles ?? '' }}">
                                            {{ $user->roles }} </option>

                                        <option value="ADMIN">
                                            ADMIN</option>

                                        <option value="USER">
                                            USER </option>
                                    </select>

                                </div>
                            </div>

                            <div class="text-end mt-4">
                                <button type="submit" class="btn btn-primary ">Update Data</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- page-content end -->

@endsection

@push('after-style')
@endpush

@push('after-script')
@endpush
