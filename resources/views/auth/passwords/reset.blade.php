@extends('layouts.authentication')
@section('title', 'Set New Password')
@section('content')
<div class="card card-body">
    @if (session('status'))
    <div class="alert alert-soft-success d-flex" role="alert">
        <i class="material-icons mr-3">check_circle</i>
        <div class="text-body">{{ session('status') }}</div>
    </div>
    @endif
    <form method="POST" action="{{ route('password.update') }}" novalidate>
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group @error('email') was-validated @enderror">
            <label class="text-label" for="email_2">Email Address:</label>
            <div class="input-group input-group-merge">
                <input id="email_2" type="email" name="email" required="" class="form-control form-control-prepended" placeholder="john@doe.com" value="{{ $email ?? old('email') }}">
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
            <button class="btn btn-block btn-primary" type="submit">{{ __('Reset Password') }}</button>
        </div>
    </form>
</div>
@endsection
