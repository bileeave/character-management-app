<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Character Ideas')</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	@stack('styles')
</head>
<body>
	@section('navigation')
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="px-5 py-2 container-fluid">
			<a class="navbar-brand" href="/">Character Ideas</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarColor04">
				@auth
				<ul class="navbar-nav me-auto">
					<li class="nav-item">
						<a class="nav-link active" href="{{ route('dashboard') }}">Dashboard
							@if ( route('dashboard') )
							<span class="visually-hidden">(current)</span>
							@endif
						</a>
					</li>
				</ul>
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Characters</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Categories</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="navbarDropdownMenuLink" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="bi bi-gear"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Account</a>
							<form action="{{ route("logout") }}" method="POST">
								@csrf
								<button class="dropdown-item">Sign out</button>
							</form>
						</div>
					</li>
				</ul>
				@endauth
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
	@show
	<main class="py-5">
		<div class="container">
			@yield('content')
		</div>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	@stack('scripts')
</body>
</html>