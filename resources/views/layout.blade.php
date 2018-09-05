<!DOCTYPE html>
<meta charset="utf-8">
  <title>Filartiga - Cárdenas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('home') }}">Constructora Filartiga-Cárdenas</a>
			</div>
	
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					@if (auth()->check())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ auth()->user()->name }}<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/logout">Cerrar Sesión</a></li>
							</ul>	
						</li>
					@endif
				
					@if (auth()->guest())
						<a href="/login"></a>
					@endif
					</ul>
			</div>
		</div>
	</nav>
	<br>

@yield('contenido')
