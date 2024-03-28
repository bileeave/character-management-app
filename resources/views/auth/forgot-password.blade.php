@extends('layout')

@section('title', 'Forgot Password')

@section('content')
<div class="row">
    <div class="m-auto col-md-4">
        <div class="shadow-sm">
            <h3 class="p-4 border-bottom">Forgot password</h3>
            <div class="px-4 pt-3">
                @if ($message = session("status"))
                    <div class="alert alert-success">{{ $message }}</div>
                @else
                    <p>Let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                @endif
                <form action="{{ route('password.email') }}" method="POST">  
                @csrf
                <div class="mb-4">
                    <div class="mb-2 form-floating has-danger">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" />
                        <label for="floatingInput">Email</label>
                        @error('email')
                           <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="pb-4 d-grid">
                    <button type="submit" class="btn btn-block btn-primary">Request password reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection