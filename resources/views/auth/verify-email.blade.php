@extends('layout')

@section('title', 'Verify Email')

@section('navigation')
@endsection

@section('content')
<div class="mt-5 row">
    <div class="m-auto col-md-4">
        <div class="mb-3 card border-primary" style="max-width: 20rem;">
        <div class="card-header card-title">Thanks for signing up!</div>
        <div class="card-body">
            @if (session("status") === "verification-link-sent")
            <div class="alert alert-success">A new verification link has been sent!</div>
            @else
            <p class="card-text">Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
            @endif
            <form class="text-center" action="{{ route('verification.send') }}" method="POST">
                @csrf
                <button class="btn btn-primary">Didn't receive an email?</button>
            </form>
            <form class="mt-2 text-center" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-sm btn-danger">Sign out</button>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection