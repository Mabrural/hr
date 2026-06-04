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

                        <h4>Reset Password</h4>

                        <h6 class="font-weight-light mb-4">
                            Create a new password for your account.
                        </h6>

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

                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf

                            {{-- Token --}}
                            <input
                                type="hidden"
                                name="token"
                                value="{{ $request->route('token') }}">

                            {{-- Email --}}
                            <div class="form-group">
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control form-control-lg"
                                    value="{{ old('email', $request->email) }}"
                                    placeholder="Email Address"
                                    required
                                    readonly>
                            </div>

                            {{-- New Password --}}
                            <div class="form-group">
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control form-control-lg"
                                    placeholder="New Password"
                                    required>
                            </div>

                            {{-- Confirm Password --}}
                            <div class="form-group">
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control form-control-lg"
                                    placeholder="Confirm New Password"
                                    required>
                            </div>

                            <div class="mt-3 d-grid">
                                <button
                                    type="submit"
                                    class="btn btn-primary btn-lg font-weight-medium auth-form-btn w-100">
                                    RESET PASSWORD
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