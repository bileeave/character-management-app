@extends('layout')

@section('title', 'Reset Password')

@section('content')
<div class="row">
    <div class="m-auto col-md-4">
        <div class="shadow-sm">
            <h3 class="p-4 border-bottom">Reset password</h3>
            <div class="px-4 pt-3">
                <p>Thank you for confirming. You may now change your password.</p>
                <form action="{{ route('password.store') }}" method="POST">
                @csrf
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="mt-3 mb-2 form-floating has-danger">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $request->email) }}" required readonly="" />
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2 form-floating has-danger">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="New password" name="password" required autofocus autocomplete="new-password" />
                    <label for="floatingPassword">New password</label>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating has-danger">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingConfirmPassword" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password" />
                    <label for="floatingConfirmPassword">Confirm password</label>
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>  
                    @enderror
                </div>
                <div class="pb-4 d-grid">
                    <button type="submit" class="btn btn-block btn-primary">Change my password</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection