<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Courses</title>
	</head>
	<body>
		@extends('layouts.coordinator_nav2')
        @section('content')
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">sl#</th>
					<th scope="col">Course Image</th>
					<th scope="col">Course Name</th>
					<th scope="col">Price</th>
					<th scope="col">Catagory</th>
					<th scope="col">Capacity</th>
					<th scope="col">Duration</th>
					<th scope="col">Course Created</th>
				</tr>
			</thead>
			<tbody>
				@foreach($course as $c)
				<tr>
					<th scope="row">{{$loop->iteration}}</th>
					<td><img src="{{asset($c->profile_image)}}" alt="{{$c->course_name}} Profile Image" height="100px" width="100px"></td>
					<td>{{$c->course_name}}</td>
					<td>{{$c->price}}</td>
					<td>{{$c->catagory}}</td>
					<td>{{$c->student_count}}</td>
					<td>{{$c->duration}}</td>
					<td>{{$c->created_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endsection
	</body>
</html>