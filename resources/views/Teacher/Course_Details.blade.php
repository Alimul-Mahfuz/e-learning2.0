<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher List</title>
</head>

<body>
    @include('layouts/teacher-nav')
    
    <div class="my-3 container">
    <table class="table caption-top">
  <caption>List of Students</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student ID</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Student Photo</th>
    </tr>
  </thead>
  @foreach($teachers as $t)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$t->teacher_name}}</a></td>
                <td>{{$t->teacher_id}}</td>
                <td>{{$t->dob}}</td>
                <td><img src="{{asset($t->profile_image)}}" ></td>
            </tr>
        @endforeach
    
   
</table>
<div class="row">
  {{$teachers->links()}}
</div>
    </div>

    <style>
      .w-5{
        display:none;
      }
    </style>



       

</body>

</html>