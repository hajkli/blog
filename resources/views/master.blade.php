<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<body>

	<header class="container">
		<div class="row">
			<div class="col-sm-12">
				<nav class="navbar navbar-default navbar-static-top">
					<div class="none">
						<div class="navbar-header">

							<!-- Collapsed Hamburger -->
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<!-- Branding Image -->
							<a class="navbar-brand" href="{{ url('/') }}">
								<small>Simple Laravel Blog</small>
							</a>
						</div>

						<div class="collapse navbar-collapse" id="app-navbar-collapse">
							<!-- Left Side Of Navbar -->
							<ul class="nav navbar-nav">
								@if(Auth::check() )
									<li><a href="user/{{Auth::id()}}">my posts</a></li>
									<li><a href="post/create/">add new</a></li>
								@endif
							</ul>

							<!-- Right Side Of Navbar -->
							<ul class="nav navbar-nav navbar-right right-fix">
								<!-- Authentication Links -->
								@guest
								<li><a href="{{ route('login') }}">Login</a></li>
								<li><a href="{{ route('register') }}">Register</a></li>
								@else

									<li>
										<a href="{{ route('logout') }}"
										   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
											Logout
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</li>
								@endguest
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>

	<main>
		<div class="container">
			@yield('content')
		</div>
	</main>

	<footer class="container">
	</footer>


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>