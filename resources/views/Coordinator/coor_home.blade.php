<html>
	<head>
		<title>Welcome back {{session("coordinatorName")}}</title>
		<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
		<!------ Include the above in your HEAD tag ---------->

		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
		"> -->

		<style>
			.my-card
				{
					position:absolute;
					left:40%;
					top:-20px;
					border-radius:50%;
				}
		</style>
	</head>
	<body>
		@extends('layouts.coordinator_nav2')
		@section('content')
	<div class="jumbotron">
		<div class="row w-100">
				<div class="col-md-3">
					<div class="card border-info mx-sm-1 p-3">
						<!-- <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-car" aria-hidden="true"></span></div> -->
						<div class="text-info text-center mt-3"><h4>Teacher</h4></div>
						<div class="text-info text-center mt-2"><h1>{{$teacherCount}}</h1></div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card border-success mx-sm-1 p-3">
						<!-- <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div> -->
						<div class="text-success text-center mt-3"><h4>Student</h4></div>
						<div class="text-success text-center mt-2"><h1>{{$studentCount}}</h1></div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card border-danger mx-sm-1 p-3">
						<!-- <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div> -->
						<div class="text-danger text-center mt-3"><h4>Course</h4></div>
						<div class="text-danger text-center mt-2"><h1>{{$courseCount}}</h1></div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card border-warning mx-sm-1 p-3">
						<!-- <div class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div> -->
						<div class="text-warning text-center mt-3"><h4>User</h4></div>
						<div class="text-warning text-center mt-2"><h1>{{$accountCount}}</h1></div>
					</div>
				</div>
			</div>
		</div>



		<div class="bottom section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="copyright">
							<p>© <span>2022</span> <a href="#" class="transition">Bd-E-learning</a> All rights reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection
	</body>
</html>