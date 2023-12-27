@extends('layouts.admin')

@section('title', 'Category')

@section('content')
    <!-- page-content start -->
    <section class="position-relative overflow-hidden py-3 px-3">
        <div class="container mt-4">
            <!-- recent projects start -->
            <div class="row">
                <div class="col-lg-12 ">

                    <form action="{{ route('dashboard.category.store') }}" method="POST">
                        @csrf
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category Name</label>
                                    <input type="text" required class="form-control" id="category" name="name"
                                        placeholder="Enter category" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <button class="btn btn-primary mt-2" type="submit">Add Category</button>
                            </div>
                        </div>
                    </form>


                    <div class="row mt-5">
                        <div class="col">
                            <h4 class="mb-3 mt-0 fs-16">List Category</h4>
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td class="text-center">{{ $item->name }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('dashboard.category.destroy', $item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
    <!-- page-content end -->

@endsection
