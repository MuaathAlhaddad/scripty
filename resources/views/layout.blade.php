<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
		<link href="{{asset('default.css')}}" rel="stylesheet" type="text/css" media="all" />
		<link href="{{asset('fonts.css')}}" rel="stylesheet" type="text/css" media="all" />
	</head>

	<body>
		<div id="header-wrapper">
			<div id="header" class="container">
				<div id="logo">
					<h1><a href="#">Scripty</a></h1>
				</div>
				<div id="menu">
					<ul>
						<li class="active"><a href="#" accesskey="1" title="">Homepage</a></li>
						<li><a href="#" accesskey="2" title="">Our Clients</a></li>
						<li><a href="#" accesskey="3" title="">About Us</a></li>
						<li><a href="#" accesskey="4" title="">Careers</a></li>
						<li><a href="#" accesskey="5" title="">Contact Us</a></li>
						@if (Route::has('login'))
							<div class="top-right links">
								@auth
									<a href="{{ url('/home') }}">Home</a>
								@else
									<a href="{{ route('login') }}">Login</a>

									@if (Route::has('register'))
										<a href="{{ route('register') }}">Register</a>
									@endif
								@endauth
							</div>
						@endif
					</ul>
				</div>
			</div>
			<div id="banner" class="container">
				@yield('header')
			</div>
		</div>
		<div id="content">
			@yield('content')
		</div>
	</body>

	<footer>
		<div id="copyright" class="container">
			<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
		</div>
	</footer>

</html>

