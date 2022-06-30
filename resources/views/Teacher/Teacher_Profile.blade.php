<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        .teacherregistration {
            font-size: 2rem;
            color: gold;
            margin-top: 5px;
            padding: 5px;
            height: 10rem;
            background: #000428;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #004e92, #000428);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #004e92, #000428);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
    </style>
</head>

<body>

    @include('layouts/teacher-nav')

    <div class="container my-5 ">
        <div class="teacherregistration">
            <br>
            <h1>{{session('username')}} Profile</h1>
        </div>
        <br>
    </div>


    <div class="row">
        <div class="col-md-2 mx-6 container">
            <img class="d-block border img-fluid rounded-circle img-fluid" src="{{asset($data->profile_image)}}" alt="img">
            <br>
            <form action="{{route('teacherProfile')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="profile_image">
                <br>
                <br>
                <input class="btn btn-primary mx-5" type="submit" value="Upload Profile">
            </form>
        </div>
        <div class="col-md-6 container">
            <ul class="list-group col-md-8 ">
                <li class="list-group-item">Name: {{$data->teacher_name}}</li>
                <li class="list-group-item">Email: {{$data->email}}</li>
                <li class="list-group-item">Phone: {{$data->phone}}</li>
                <li class="list-group-item">Date of Birth: {{$data->dob}}</li>
                <li class="list-group-item">Gender: {{$data->gender}}</li>
                <li class="list-group-item">Address: {{$data->address}}</li>

            </ul>
        </div>
    </div>
</body>

</html>