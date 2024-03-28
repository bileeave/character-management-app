@extends('layout')

@section('title', 'Create Account')

@section('navigation')
@endsection

@section('content')
@guest
<div class="mt-5 row">
    <div class="m-auto col-md-4">
        <div class="shadow-sm">
            <div class="p-3 ms-2 d-flex">
                <a href="{{ url()->previous() }}">
                  <i class="fs-3 bi bi-arrow-left"></i>
                </a>
                <h4 class="mt-2 card-title ms-4">Create account</h4>
            </div>
            <div class="px-4 pt-3">
                <form action="{{ route('register') }}" method="POST">  
                @csrf
                <div class="mb-4">
                    <div class="mb-2 form-floating has-danger">
                        <input type="text" class="form-control @error("name") is-invalid @enderror" id="floatingName" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                        <label for="floatingName">Name</label>
                        @error('name')
                           <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2 form-floating has-danger">
                        <input type="email" class="form-control @error("email") is-invalid @enderror" id="floatingEmail" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="username" />
                        <label for="floatingEmail">Email</label>
                        @error('email')
                           <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2 form-floating has-danger">
                        <input type="password" class="form-control @error("password") is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required autocomplete="new-password" />
                        <label for="floatingPassword">Password</label>
                        @error('password')
                           <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating has-danger">
                        <input type="password" class="form-control @error("password_confirmation") is-invalid @enderror" id="floatingConfirmPassword" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password" />
                        <label for="floatingConfirmPassword">Confirm password</label>
                        @error('password_confirmation')
                           <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-block btn-primary">Proceed</button>
                    <div class="py-4 text-center text-muted">
                        Already have an account?
                        <a href="{{ route('login') }}" class="font-weight-bold text-decoration-none">Sign in</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endguest
@endsection