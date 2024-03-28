@extends('layout')

@section('title', 'Sign In')

@section('navigation')
@endsection

@section('content')
@guest
<div class="mt-5 row">
    <div class="m-auto col-md-4">
        <div class="shadow-sm">
            <div class="p-3 ms-2 d-flex">
                <a href="/">
                  <i class="fs-3 bi bi-arrow-left"></i>
                </a>
                <h4 class="mt-2 card-title ms-4">Sign in</h4>
            </div>
            <div class="px-4 pt-3">
                <form action="{{ route('login') }}" method="POST">  
                @csrf
                <div class="mb-4">
                    <div class="mb-2 form-floating has-danger">
                        <input type="email" class="form-control @error("email") is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                        <label for="floatingInput">Email</label>
                        @error('email')
                           <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating has-danger">
                        <input type="password" class="form-control @error("password") is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required autocomplete="current-password" />
                        <label for="floatingPassword">Password</label>
                        @error('password')
                           <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="rounded custom-control-input" id="rememberMe" name="remember" />
                        <label class="custom-control-label text-black-50" for="rememberMe">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot password?</a>
                    @endif
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-block btn-primary">Let's go!</button>
                    <div class="py-4 text-center text-muted">
                        New here?
                        <a href="{{ route('register') }}" class="font-weight-bold text-decoration-none">Create an account</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endguest
@endsection