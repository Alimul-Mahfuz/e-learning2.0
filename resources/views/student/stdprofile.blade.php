<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile {{session('username')}}</title>
</head>
<body>
    @include('layouts.stdlogged-nav');
    <div class="container my-3">
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        <div class="d-flex justify-content-between align-items-center">
            <div class="col-8">
                <h2 class="py-2">Profile Info</h2>
                 <ul class="list-group">
                    @if (isset($data))
                    <li class="list-group-item">Name: {{$data->student_name}}</li>
                    <li class="list-group-item">Email: {{$data->email}}</li>
                    <li class="list-group-item">Phone: {{$data->phone}}</li>
                    <li class="list-group-item">Address: {{$data->address}}</li> 
                    <li class="list-group-item"><a href="{{route('chngpass')}}"><button type="button" class="btn btn-danger">Change Password</button></a></li> 
                    @endif
                  
                    
                  </ul>
            </div>
            <div class="col-4 align-self-end">
                <img src="https://picsum.photos/200" class="img-thumbnail" alt="no-image">
                <a class="d-block" href="#">Change Picture</a>
                
            </div>
           
        </div>
        
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>