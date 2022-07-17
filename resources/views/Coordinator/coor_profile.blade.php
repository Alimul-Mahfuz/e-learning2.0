<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{session('coordinatorName')}} | Profile</title>
        <style>
        body {
        background: rgb(99, 39, 120)
        }
        .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
        }
        .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
        }
        .profile-button:hover {
        background: #682773
        }
        .profile-button:focus {
        background: #682773;
        box-shadow: none
        }
        .profile-button:active {
        background: #682773;
        box-shadow: none
        }
        .back:hover {
        color: #682773;
        cursor: pointer
        }
        .labels {
        font-size: 11px
        }
        .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
        }
        </style>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        @extends('layouts.coordinator_nav2')
        @section('content')
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset($coordinator->profile_image)}}"><br><span class="font-weight-bold">{{$coordinator->coor_name}}</span><br><span class="text-black-50">{{$coordinator->email}}</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control"value="{{$coordinator->coor_name}}"></div>
                            <!-- <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div> -->
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control"value="{{$coordinator->email}}"></div>
                            <div class="col-md-12"><label class="labels">Mobile no</label><input type="text" class="form-control"value="{{$coordinator->phone}}"></div>
                            <div class="col-md-12"><label class="labels">Date of birth</label><input type="text" class="form-control" value="{{$coordinator->dob}}"></div>
                            <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" value="{{$coordinator->gender}}"></div>
                            <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control"value="{{$coordinator->address}}"></div>
                            <!-- <div class="col-md-12"><label class="labels">Picture</label><input type="text" class="form-control" value="{{asset($coordinator->profile_image)}}"></div> -->
                            <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="enter password" value="{{$account->password}}"></div>
                            <!-- <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div> -->
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Account Creation Date</label><input type="text" class="form-control"value="{{$coordinator->created_at}}"></div>
                            <!-- <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div> -->
                        </div>
                        <br>
                        <!-- <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Changes</button></div> -->
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                        <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                        <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>