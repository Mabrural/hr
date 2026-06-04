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

                        <h4>Forgot Password?</h4>

                        <h6 class="font-weight-light mb-4">
                            Enter your email address and we'll send you a password reset link.
                        </h6>

                        {{-- Success Message --}}
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- Validation Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <input
                                    type="email"
                                    class="form-control form-control-lg"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Email Address"
                                    required
                                    autofocus>
                            </div>

                            <div class="mt-3 d-grid">
                                <button
                                    type="submit"
                                    class="btn btn-primary btn-lg font-weight-medium auth-form-btn w-100">
                                    SEND RESET LINK
                                </button>
                            </div>

                            <div class="text-center mt-4">
                                <a href="{{ route('login') }}"
                                   class="text-primary">
                                    Back to Login
                                </a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection