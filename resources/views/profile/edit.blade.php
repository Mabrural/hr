@extends('layouts.main-guest')

@section('container')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">My Profile</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Profile
                    </li>
                </ol>
            </nav>
        </div>

        <div class="row">

            {{-- Profile Information --}}
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Profile Information</h4>
                        <p class="card-description">
                            Update your account profile information.
                        </p>

                        @if (session('status') === 'profile-updated')
                            <div class="alert alert-success">
                                Profile updated successfully.
                            </div>
                        @endif

                        <form method="post" action="{{ route('profile.update') }}">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', auth()->user()->name) }}" required>
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', auth()->user()->email) }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Update Profile
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            {{-- Change Password --}}
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Change Password</h4>
                        <p class="card-description">
                            Ensure your account is using a secure password.
                        </p>
                        
                        @if (session('status') === 'password-updated')
                            <div class="alert alert-success">
                                Password changed successfully.
                            </div>
                        @endif

                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label>Current Password</label>
                                <input type="password" name="current_password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Confirm New Password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-warning">
                                Change Password
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            {{-- Delete Account --}}
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card border-danger">
                    <div class="card-body">

                        <h4 class="card-title text-danger">
                            Delete Account
                        </h4>

                        <p class="text-muted">
                            Once your account is deleted, all of its resources and data will be permanently removed.
                        </p>

                        <form method="post" action="{{ route('profile.destroy') }}"
                            onsubmit="return confirm('Are you sure you want to permanently delete your account?')">

                            @csrf
                            @method('delete')

                            <div class="form-group">
                                <label>Current Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-danger">
                                Delete Account
                            </button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
