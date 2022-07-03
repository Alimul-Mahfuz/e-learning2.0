<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lunch Couse</title>
	</head>
	<body>
		@extends('layouts.coordinator_nav2')
		@section('content')
		<form action="" method="post"  enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Course Name</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="coursename" id="coursename" placeholder="Enter course name">
					@error('coursename')
                        <span class="text-danger">{{$message}}</span><br>
                     @enderror
				</div>
			</div>
			<!-- COurse pic  -->
			<div class="form-group row">
				<label   class="col-sm-2 col-form-label">Images</label>
				<div class="col-sm-5">
                        <input type="file" value="{{old('pro_pic')}}" name="course_pro_pic" class="form-control" id="course_pro_pic" placeholder="Set a Course Bannner">
                        @error('pro_pic')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="courseprice" id="courseprice" placeholder="Course cost in tk/-">
					@error('courseprice')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Catagory</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="catagory" id="catagory" placeholder="Catagory">
					@error('catagory')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
				</div>
			</div>
			<fieldset class="form-group">
				<div class="row">
					<legend class="col-form-label col-sm-2 pt-0">Capacity</legend>
					<div class="col-sm-5">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="capacity" id="capacity1" value="20" checked>
							<label class="form-check-label" for="gridRadios1">
								20
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="capacity" id="capacity2" value="25">
							<label class="form-check-label" for="gridRadios2">
								25
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="capacity" id="capacity3" value="30">
							<label class="form-check-label" for="gridRadios1">
								30
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="capacity" id="capacity4" value="40">
							<label class="form-check-label" for="gridRadios2">
								40
							</label>
						</div>
					<!-- 	<div class="form-check disabled">
							<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
							<label class="form-check-label" for="gridRadios3">
								Third disabled radio
							</label>
						</div>

 -->					
 						@error('capacity')
                        	<span class="text-danger">{{$message}}</span><br>
                        @enderror
					</div>
				</div>
			</fieldset>

			<fieldset class="form-group">
				<div class="row">
					<legend class="col-form-label col-sm-2 pt-0">Duration</legend>
					<div class="col-sm-5">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="duration" id="duration1" value="7Days" checked>
							<label class="form-check-label" for="gridRadios1">
								7Days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="duration" id="duration2" value="14Days">
							<label class="form-check-label" for="gridRadios2">
								14Days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="duration" id="duration1" value="30Days">
							<label class="form-check-label" for="gridRadios1">
								30Days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="duration" id="duration2" value="60Days">
							<label class="form-check-label" for="gridRadios2">
								60Days
							</label>
						</div>
					<!-- 	<div class="form-check disabled">
							<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
							<label class="form-check-label" for="gridRadios3">
								Third disabled radio
							</label>
						</div>
 -->					</div>
				</div>
			</fieldset>

		<!-- 	<div class="form-group row">
				<div class="col-sm-2">Checkbox</div>
				<div class="col-sm-10">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck1">
						<label class="form-check-label" for="gridCheck1">
							Example checkbox
						</label>
					</div>
				</div>
			</div> -->
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" name="submit" class="btn btn-primary">Create</button>
				</div>
			</div>
		</form>

		@endsection
	</body>
</html>