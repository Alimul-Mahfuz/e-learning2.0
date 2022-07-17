<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Change Coordinator Password</title>
	</head>
	<body>
		@extends('layouts.coordinator_nav2')
		@section('content')

		@if(session()->has('success'))
		<strong class="text-success">{{session()->get('success')}}</strong>
		@endif

		@if(session()->has('error'))
		<strong class="text-danger">{{session()->get('error')}}</strong>
		@endif



		<form action="" method="post"  enctype="multipart/form-data">
						{{csrf_field()}}

			<div class="form-group row">
			<div class="col-sm-5">
				<label for="exampleInputPassword1" class="col-sm-2 col-form-label">Current Password</label>
				<input type="password" class="form-control" name="cpass" value="{{old("cpass")}}" id="exampleInputPassword1">
				@error('cpass')
                        <span class="text-danger">{{$message}}</span><br>
                     @enderror
			</div>
		</div>
			<div class="form-group row">
			<div class="col-sm-5">
				<label for="exampleInputPassword1" class="col-sm-2 col-form-label">New Password</label>
				<input type="password" class="form-control" name="npass" value="{{old("npass")}}" id="exampleInputPassword1">
				@error('npass')
                        <span class="text-danger">{{$message}}</span><br>
                     @enderror
			</div>
		</div>
			<div class="form-group row">
			<div class="col-sm-5">
				<label for="exampleInputPassword1" class="col-sm-2 col-form-label">Confirm Password</label>
				<input type="password" class="form-control" name="conpass" value="{{old("conpass")}}" id="exampleInputPassword1">
				@error('conpass')
                        <span class="text-danger">{{$message}}</span><br>
                     @enderror
			</div>
		</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		

		@endsection
	</body>
</html>