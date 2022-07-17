<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Courses</title>
		<style>
			.button {
				  background-color: #4CAF50; /* Green */
				  border: none;
				  color: white;
				  padding: 16px 32px;
				  text-align: center;
				  text-decoration: none;
				  display: inline-block;
				  font-size: 16px;
				  margin: 4px 2px;
				  transition-duration: 0.4s;
				  cursor: pointer;
				}

				.button1 {
				  background-color: white; 
				  color: black; 
				  border: 2px solid #4CAF50;
				}

				.button1:hover {
				  background-color: #4CAF50;
				  color: white;
				}

				.button2 {
				  background-color: white; 
				  color: black; 
				  border: 2px solid #008CBA;
				}

				.button2:hover {
				  background-color: #008CBA;
				  color: white;
				}

				.button3 {
				  background-color: white; 
				  color: black; 
				  border: 2px solid #f44336;
				}

				.button3:hover {
				  background-color: #f44336;
				  color: white;
				}

				.button4 {
				  background-color: white;
				  color: black;
				  border: 2px solid #e7e7e7;
				}

				.button4:hover {background-color: #e7e7e7;}

				.button5 {
				  background-color: white;
				  color: black;
				  border: 2px solid #555555;
				}

				.button5:hover {
				  background-color: #555555;
				  color: white;
				}

		</style>
	</head>
	<body>
		@extends('layouts.coordinator_nav2')
        @section('content')
		<table class="table" >
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
					<th scope="col">Action</th>
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
					<td>
						<form action="{{url('/coordinator/course_remove/'. $c->course_id)}}" method="post">
			                {{csrf_field()}}
							<input type="submit" class="button button5" name="remove" value="Remove">
						</form>
					</td>
				</tr>
				@endforeach
				
			</tbody>
			<tr>
					<!-- <div class="container"> -->
    					@foreach ($course as $c)
       				 		{{ $c->name }}
   					 	@endforeach
					<!-- </div> -->
 
					{{ $course->links() }}
				</tr>	
		</table>
		@endsection
	</body>
</html>