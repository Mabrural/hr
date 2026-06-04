@extends('layouts.main-guest')

@section('container')
    <div class="container-scroller d-flex">
        <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                            <div class="brand-logo text-center">
                                <h2 class="fw-bold mb-0">HR Management</h2>
                                <small class="text-muted mt-1">PT Global Petro Pasifik</small>
                            </div>

                            <h6 class="font-weight-light">Sign in to continue.</h6>

                            {{-- Session Status --}}
                            @if (session('status'))
                                <div class="alert alert-success mt-3">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{-- Validation Errors --}}
                            @if ($errors->any())
                                <div class="alert alert-danger mt-3">
                                    <ul class="mb-0 ps-3">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" name="email"
                                        value="{{ old('email') }}" placeholder="Email Address" required autofocus>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        placeholder="Password" required>
                                </div>

                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" name="remember" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>

                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="auth-link text-black">
                                            Forgot password?
                                        </a>
                                    @endif
                                </div>

                                <div class="mt-3 d-grid">
                                    <button type="submit"
                                        class="btn btn-primary btn-lg font-weight-medium auth-form-btn w-100">
                                        SIGN IN
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
