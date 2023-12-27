@extends('layouts.guest')

@section('title', 'Login')

@section('content')

    <div class="bg-gradient2 min-vh-100 align-items-center d-flex justify-content-center pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="card bg-none" style="background: none;">
                        <div class="card-body  p-0">
                            <div class="row justify-content-center g-0">
                                <div class="col-md-5 shadow bg-white">
                                    <div class="p-xl-5 p-3">
                                        <div class="mx-auto mb-5">
                                            <a href="/" class="d-flex">
                                                <img src="assets/images/logo.png" class="align-self-center" alt="logo-img"
                                                    height="30" />
                                            </a>
                                        </div>

                                        <h6 class="h5 mb-0 mt-3">Welcome back!</h6>
                                        <p class="text-muted mt-1 mb-4">
                                            Enter your email address and password to access admin panel.
                                        </p>
                                        <!--form start-->
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email
                                                    <small>*</small></label>
                                                <input type="email" required class="form-control" id="exampleInputEmail1"
                                                    placeholder="Email" name="email" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="password">Password <small>*</small></label>
                                                <a href="account-forget-password.html"
                                                    class="float-end text-muted text-unline-dashed ms-1 fs-13">Forgot your
                                                    password?</a>
                                                <input type="password" required class="form-control" id="password" name="password"
                                                    placeholder="Enter your password" />
                                            </div>

                                            <div class="mb-3">
                                                <input type="checkbox" class="form-check-input" id="checkbox-signin" />
                                                <label class="form-check-label text-muted" for="checkbox-signin">Remember
                                                    me</label>
                                            </div>

                                            <div class="mb-0 text-center d-grid">
                                                <button class="btn btn-primary" type="submit">Log In</button>
                                            </div>
                                        </form>
                                        <!--/.form end-->
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Don't have an account? <a href="account-signup.html"
                                    class="text-primary fw-semibold ms-1">Sign Up</a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

@endsection
