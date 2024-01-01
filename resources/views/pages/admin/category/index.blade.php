@extends('layouts.admin')

@section('title', 'Category')

@section('content')
    <!-- page-content start -->
    <div class="bg-slate-100 h-full mt-[77px]  py-3 px-3" style="min-height: 900px;">
        <section class="relative overflow-hidden">
            <div class="container">
                <div class="flex">
                    <div class="w-full">
                        <h3 class="text-xl text-gray-800 mt-2">Category</h3>
                        <p class="mt-1 font-medium mb-4">Category Page</p>
                    </div>
                </div>

                <div class="flex mt-2">
                    <div class="w-full">
                        <div class="bg-white rounded">
                            <div class="p-6">
                                <div class="grid lg:grid-cols-4 gap-6" data-fc-type="tab">
                                    <!-- menu start -->
                                    <div class="col-span-1">
                                        <nav aria-label="Tabs"
                                            class="flex flex-row lg:flex-col gap-2 w-auto lg:w-full bg-slate-100 p-1.5 rounded-md lg:justify-start"
                                            role="tablist">
                                            <button
                                                class="fc-tab-active:bg-white fc-tab-active:text-primary text-start py-2 px-4 rounded bg-transparent transition-all active"
                                                data-fc-target="#account" type="button">
                                                List category
                                            </button>
                                            <button
                                                class="fc-tab-active:bg-white fc-tab-active:text-primary text-start py-2 px-4 rounded bg-transparent transition-all"
                                                data-fc-target="#password" type="button">
                                                Create new category
                                            </button>
                                        </nav>
                                    </div>
                                    <!-- menu end -->
                                    <div class="lg:col-span-3 transition-all px-4 h-full">
                                        <div id="account" class="min-h-[650px]">
                                            <h4 class="text-base text-gray-800">List Category</h4>

                                            <div class="mx-auto mt-5">

                                                <div class="flex flex-col">
                                                    <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                                        <div class="inline-block min-w-full align-middle">
                                                            <div class="overflow-hidden ">
                                                                <table
                                                                    class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                                                    <thead class="bg-gray-100 dark:bg-gray-700">
                                                                        <tr>
                                                                            <th scope="col"
                                                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                                                Category Name
                                                                            </th>
                                                                            <th scope="col" class="p-4">
                                                                                <span class="sr-only">Delete</span>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody
                                                                        class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                                                        @forelse ($categories as $item)
                                                                            <tr
                                                                                class="hover:bg-gray-100 dark:hover:bg-gray-700">


                                                                                <td
                                                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                                    {{ $item->name }}</td>
                                                                                <td
                                                                                    class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">

                                                                                    <form
                                                                                        action="{{ route('dashboard.category.destroy', $item->id) }}"
                                                                                        method="POST" class="d-inline">
                                                                                        @csrf
                                                                                        @method('DELETE')

                                                                                        <button
                                                                                            class="text-red-600 dark:text-red-500 hover:underline"
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
                                                </div>

                                            </div><!-- end tab -->
                                        </div>

                                        <div id="password" class="hidden min-h-[650px]">
                                            <h4 class="text-base text-gray-800">Create Category</h4>

                                            <form action="{{ route('dashboard.category.store') }}" method="POST"
                                                class="mt-5">
                                                @csrf
                                                <div class="mb-4">
                                                    <label for="category"
                                                        class="block text-sm font-semibold mb-1 text-gray-600">Category
                                                        Name<small>*</small></label>
                                                    <input type="text" required
                                                        class="py-2 px-4 leading-6 block w-full text-gray-700 border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                                        id="category" name="name" placeholder="Enter name category">
                                                </div>

                                                <hr class="my-6">

                                                <!-- save start -->
                                                <div class="row mt-3">
                                                    <div class="col-lg-12">
                                                        <button type="submit"
                                                            class="inline-flex items-center justify-center py-3 px-4 rounded-lg text-sm font-semibold transition-all hover:shadow-lg bg-primary text-white hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40">Submit</button>
                                                    </div>
                                                </div>
                                                <!-- save end -->
                                            </form>
                                        </div><!-- end tab -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <!-- page-content end -->

@endsection
