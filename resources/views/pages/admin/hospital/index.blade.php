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
                            <h4 class="mb-3 mt-0 fs-16">List Hospital</h4>
                        </div>

                        <div class="col text-end">
                            <a href="{{ route('dashboard.hospital.create') }}" class="btn btn-primary mb-3 mt-0 fs-16">Add New</a>
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Category</th>
                                <th scope="col" class="text-center">Address</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($hospitals as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td class="text-center">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->category->name }}</td>
                                    <td class="text-center">{{ $item->address }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('dashboard.hospital.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('dashboard.hospital.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
