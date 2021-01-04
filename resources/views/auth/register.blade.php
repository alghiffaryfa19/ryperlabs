@extends('layouts.authentication')
@section('title', 'Register Account')
@section('content')
<div class="card card-body">
    <div class="alert alert-soft-info d-flex" role="alert">
        <i class="material-icons mr-3">info</i>
        <div class="text-body">Please register an account correctly to be able to access the RyperLab service.</div>
    </div>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf
        <div class="form-group @error('email') was-validated @enderror">
            <label class="text-label" for="email_2">Email Address:</label>
            <div class="input-group input-group-merge">
                <input id="email_2" type="email" name="email" required="" class="form-control form-control-prepended" placeholder="john@doe.com" value="{{ old('email') }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                <div class="valid-feedback text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group @error('username') was-validated @enderror">
            <label class="text-label" for="username_2">Username:</label>
            <div class="input-group input-group-merge">
                <input id="username_2" type="text" name="username" required="" class="form-control form-control-prepended" placeholder="user23" value="{{ old('username') }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="far fa-user"></span>
                    </div>
                </div>
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                <div class="valid-feedback text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group @error('name') was-validated @enderror">
            <label class="text-label" for="full_name_2">Full Name:</label>
            <div class="input-group input-group-merge">
                <input id="full_name_2" type="text" name="name" required="" class="form-control form-control-prepended" placeholder="Ervian Akbarsyah" value="{{ old('name') }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fas fa-user-tag"></span>
                    </div>
                </div>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                <div class="valid-feedback text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group @error('identity_number') was-validated @enderror">
            <label class="text-label" for="identity_number_2">Identity number (NIM):</label>
            <div class="input-group input-group-merge">
                <input id="identity_number_2" type="number" name="identity_number" required="" class="form-control form-control-prepended" placeholder="172410101075" value="{{ old('identity_number') }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fas fa-id-card"></span>
                    </div>
                </div>
                @error('identity_number')
                <div class="invalid-feedback">{{ $message }}</div>
                <div class="valid-feedback text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group @error('password') was-validated @enderror">
            <label class="text-label" for="password_2">Password:</label>
            <div class="input-group input-group-merge">
                <input id="password_2" type="password" name="password" required="" class="form-control form-control-prepended" placeholder="Enter your password">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fa fa-key"></span>
                    </div>
                </div>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="text-label" for="password_3">Password Confirmation:</label>
            <div class="input-group input-group-merge">
                <input id="password_3" type="password" name="password_confirmation" required="" class="form-control form-control-prepended" placeholder="Enter your password confirmation">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fa fa-key"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group mb-1">
            <button class="btn btn-block btn-primary" type="submit">Register</button>
        </div>
        <div class="form-group text-center mb-0">
            Had account ? <a class="text-underline" href="{{ route('login') }}">Login</a>
        </div>
    </form>
</div>
@endsection
