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
					<a class="navbar-brand active" href="{{route('coor_home')}}">Coordinator</a>
				</div>
				<ul class="nav navbar-nav">
					<li class=""><a href="{{route('coor_home')}}">Home</a></li>
					<li><a href="{{route('coor_profile')}}">{{session('coordinatorName')}}</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Course<span class="caret"></span></a>

					<ul class="dropdown-menu">
						<li><a href="{{route('activecourse')}}">Active Courses</a></li>
						<li><a href="{{route('newcourse')}}">Create New Course</a></li>
						<li><a href="#">About</a></li>
					</ul>
					</li>

					<li class=""><a href="{{route('teacher')}}">Teacher</a></li>
					<li class=""><a href="{{route('student')}}">Student</a></li>
				
			</ul>
			
			<form class="navbar-form navbar-right" action="/action_page.php">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" name="search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>

				<ul class="nav navbar-nav navbar-right">
				<!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
				<li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
	
	@yield('content')
</body>
</html>