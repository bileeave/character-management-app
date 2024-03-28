@extends('layout')

@section('title')

@section('navigation')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="px-5 py-2 container-fluid">
        <a class="navbar-brand" href="/">Character Ideas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor04">
            @guest
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-secondary" href="{{ route('login') }}">Sign in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" href="{{ route('register') }}">Create Account</a>
                </li>
            </ul>
            @endguest
        </div>
    </div>
</nav>
@endsection

@section('content')
<div class="py-5 bg-white">
    <div class="px-4 my-5 text-center">
        <h1 class="mt-4 display-5 fw-bold">Character Ideas</h1>
        <div class="mx-auto col-lg-6">
            <p class="mb-4 lead">Organize your character ideas.</p>
            <div class="gap-2 d-flex justify-content-sm-center">
                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">Let's go</a>
            </div>
        </div>
    </div>
</div>
@endsection