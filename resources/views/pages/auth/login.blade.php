@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <div class="min-h-screen flex items-center justify-center">
        <div class="container">
            <div>
                <div class=" rounded mb-6">
                    <div class="flex justify-center">
                        <div class="shadow-md p-12 rounded-s xl:col-span-5 md:col-span-6">
                            <div class="mb-12">
                                <a href="{{ route('home') }}">
                                    <img src="assets/images/logo-dark.png" alt="logo-img" class="h-8">
                                </a>
                            </div>
                            <h6 class="text-base/[1.6] font-semibold text-gray-600 mb-0 mt-4">Welcome back!</h6>
                            <p class="text-gray-500 text-sm/[1.6] mt-1 mb-6">Enter your email address and password to access
                                admin panel.</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium mb-1 text-gray-600">Email
                                        <small>*</small></label>
                                    <input type="email" id="email" name="email"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                        placeholder="Your Email">
                                </div>

                                <div class="mb-4">
                                    <a href="account-forget-password.html"
                                        class="float-right text-gray-500 text-xs border-b border-dashed pb-1 ms-1">Forgot
                                        your password?</a>
                                    <label for="password" class="block text-sm font-medium mb-1 text-gray-600">Password
                                        <small>*</small></label>
                                    <input type="password" id="password" name="password"
                                        class="py-2 px-4 leading-6 block w-full border-gray-300 rounded text-sm focus:border-gray-300 focus:ring-0"
                                        placeholder="Enter your password">
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="remember" type="checkbox"
                                        class="shrink-0 border-gray-400 rounded text-blue-600">
                                    <label for="remember" class="text-xs/none text-gray-700 font-medium ms-3">Remember
                                        me</label>
                                </div>

                                <div class="mb-0 text-center">
                                    <button
                                        class="w-full bg-primary text-white font-medium leading-6 text-center align-middle select-none py-2 px-4 text-base rounded-md transition-all hover:shadow-lg hover:shadow-primary/30"
                                        type="submit">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="w-full text-center">
                    <p class="text-gray-500 leading-6 text-base">Don't have an account? <a href="{{ route('register') }}"
                            class="text-primary font-semibold ms-1">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
