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
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">sl#</th>
					<th scope="col">Image</th>
					<th scope="col">Student Name</th>
					<th scope="col">Email</th>
					<!-- <th scope="col">Mobile no</th> -->
					<!-- <th scope="col">Date of birth</th> -->
					<th scope="col">Gender</th>
					<!-- <th scope="col">Degree</th> -->
					<th scope="col">Address</th>
					<th scope="col">Joined date</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($student as $t)
				<tr>
					<th scope="row">{{$loop->iteration}}</th>
					<!-- <td><img src="{{$t->profile_image}}" alt="{{$t->student_name}} Profile Image" height="100px" width="100px"></td> -->
					<td><img src="{{url('images/test_img.png')}}" alt="{{$t->student_name}} Profile Image" height="100px" width="100px"></td>
					<td>{{$t->student_name}}</td>
					<td>{{$t->email}}</td>
					<!-- <td>{{$t->phone}}</td> -->
					<!-- <td>{{$t->dob}}</td> -->
					<td>{{$t->gender}}</td>
					<!-- <td>{{$t->degree}}</td> -->
					<td>{{$t->address}}</td>
					<td>{{$t->created_at}}</td>

					<td>
						<form action="{{url('/coordinator/student_remove/'. $t->student_id)}}" method="post">
			                {{csrf_field()}}
							<input type="submit" class="button button5" name="remove" value="Remove">
						</form>
					</td>
				@endforeach
			</tbody>
		</table>
		@endsection
	</body>
</html>