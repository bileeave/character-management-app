@extends('layout')

@section('title', 'Security Verification')

@section('content')
@guest
<div class="row">
    <div class="m-auto col-md-4">
        <div class="shadow-sm">
            <div class="px-4 pt-3">
                <p>This is a secure area of the application. Please confirm your password before continuing.</p>
                <form action="{{ route('password.confirm') }}" method="POST">
                @csrf
                <div class="mb-2 form-floating has-danger">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required autofocus autocomplete="current-password" />
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pb-4 d-grid">
                    <button type="submit" class="btn btn-block btn-primary">I'm legit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endguest
@endsection