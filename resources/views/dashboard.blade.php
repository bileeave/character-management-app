@extends('layout')

@section('title', 'Dashboard')

@section('content')
@auth
<h4 class="mt-2 text-center">Welcome, {{ Auth::user()->name }}!</h4>
<div class="mt-5 row justify-content-center">
    <div class="col-md-4">
        <div class="mb-4 card">
        <div class="text-center text-white card-header bg-primary">
            Characters & Categories
        </div>
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-around">
            <h3 class="h1">1900</h3>
            <ul class="pl-5 list-unstyled">
                <li>1300 categories</li>
                <li>1900 characters</li>
            </ul>
            </div>
        </div>
        </div>
    </div>
</div>
@endauth
@endsection