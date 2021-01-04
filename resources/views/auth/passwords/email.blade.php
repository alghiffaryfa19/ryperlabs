@extends('layouts.authentication')
@section('title', 'Reset Password')
@section('content')
<div class="card card-body">
    @if (session('status'))
    <div class="alert alert-soft-success d-flex" role="alert">
        <i class="material-icons mr-3">check_circle</i>
        <div class="text-body">{{ session('status') }}</div>
    </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}" novalidate>
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
        <div class="form-group mb-1">
            <button class="btn btn-block btn-primary" type="submit">{{ __('Send Password Reset Link') }}</button>
        </div>
    </form>
</div>
@endsection
