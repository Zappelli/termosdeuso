<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
	<link href="{{ asset('css/import.css') }}" rel="stylesheet">
	@toastr_css

	@yield('head')

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<script type='text/javascript' src="//use.fontawesome.com/b70afb10f4.js"></script>
	


    <!-- Scripts -->
    <script type='text/javascript'>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
	<header class="header">
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container-fluid">
				<div class='row'>
					<span class='col-md-2'>
						<a class="navbar-brand">Termos de Uso</a>
					</span>
					<form class="col-md-5">
						<div class='form-inline'>
							<input type="search" name="s" placeholder="Buscar" class="form-control input-search">
							<button type="submit" class="btn btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
					</form>
					<div class="user-infor pull-right col-md-2">
						<ul class="nav navbar-nav">
							<!-- Authentication Links -->
							@if (Auth::guest())
								<li><a href="{{ route('login') }}">Login</a></li>
							@else
								<li class="dropdown">

									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
										<span class="icon">
											<i class="fa fa-user-circle-o" aria-hidden="true"></i>
										</span>
										<span class="user-name">{{ Auth::user()->name }} <i class="caret"></i></span>
									</a>

									<ul class="dropdown-menu" role="menu">
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
									</ul>
								</li>
							@endif
						</ul>
						<!-- Single button -->
					</div>
				</div>
			</div>
		</nav>
	</header>
	<div class='container'>
		@yield('content')
	</div>

	<!-- Scripts -->
    
	<script type='text/javascript' src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	@toastr_js
	<script type="text/javascript" src="/js/app.js" charset="utf-8"></script>
	<script type="text/javascript" src="/js/common.js" charset="utf-8"></script>
	@yield('scripts')
</body>
</html>
