<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{route('coor_home')}}">Coordinator</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="{{route('coor_home')}}">Home</a></li>
					<li><a href="{{route('coor_profile')}}">Coordinator Profile</a></li>
					<li><a href="{{route('logout')}}">Log out</a></li>
					<li><a href="{{route('logout')}}">Log out</a></li>
					<li><a href="{{route('logout')}}">Log out</a></li>
					<li><a href="{{route('logout')}}">Log out</a></li>
				</ul>
				<form class="navbar-form navbar-left" action="/action_page.php">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" name="search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</nav>
		@yield('content')
		<!-- <div class="container">
				<h3>Navbar Forms</h3>
				<p>Use the .navbar-form class to vertically align form elements (same padding as links) inside the navbar.</p>
		</div> -->
	</body>
</html>