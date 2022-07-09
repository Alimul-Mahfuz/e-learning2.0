<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile {{ session('username') }}</title>
</head>

<body>
    @include('layouts.stdlogged-nav')
    <div class="container my-3">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="container-fluid">


        <!-- Modal Change Details -->
        <div class="modal fade" id="chngdet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- Change details form --}}
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                    placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Address">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>

                    </div>
                </div>
            </div>
        </div>
        <!--end of change details-->

        {{-- Change password --}}
        <div class="modal fade" id="chngpass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- Change password main form --}}
                        <form method="post" onsubmit="return validateForm()">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Password</label>
                                <input name="oldpass" type="password" id="oldpassinp" class="old-pass form-control"
                                    aria-describedby="emailHelp" placeholder="Old Password">
                                <span class="text text-danger" id="oldpasserr"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">New Password</label>
                                <input name="newpass" type="password" class="new-pass form-control" id="newpassinp"
                                    placeholder="Password">
                                <span class="text text-danger" id="newpasserr"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm New Password</label>
                                <input name="cnfpass" type="password" class="cnf-pass form-control" id="cnfpassinp"
                                    placeholder="Password">
                                <span class="text text-danger" id="cnfpasserr"></span>
                            </div>
                            <i class="bi bi-exclamation-circle-fill"></i>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="Submit" id="change-pass" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" onclick="chnginpclr()"
                            id="change-pass-btn-close" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--End of modal-->





        <div class="d-flex">
            <div class="col-lg-2 my-5">
                <div style="background-color: rgb(255, 255, 255); border-radius:10px;"
                    class="nav flex-column p-3 nav-pills" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                        role="tab" aria-controls="v-pills-home" aria-selected="true">Enrolled Course</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                        role="tab" aria-controls="v-pills-profile" aria-selected="false">Available Courses</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                        role="tab" aria-controls="v-pills-messages" aria-selected="false">Send Mail</a>
                    <a class="nav-link active" id="v-pills-settings-tab"
                        href="{{ route('stdprofile') }}">Profile</a>
                </div>
            </div>
            <div class="col-lg-9 my-5">
                <span id="notify" class="alert alert-success col-12"></span>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="col-9">
                        <h2 class="py-2">Profile Info</h2>
                        <ul class="list-group">
                            @if (isset($data))
                                <li class="list-group-item">Name: {{ $data->student_name }}</li>
                                <li class="list-group-item">Email: {{ $data->email }}</li>
                                <li class="list-group-item">Phone: {{ $data->phone }}</li>
                                <li class="list-group-item">Address: {{ $data->address }}</li>
                                <li class="list-group-item">
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#chngpass">
                                        Change Password
                                    </button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#chngdet">
                                        Edit Details
                                    </button>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-3 align-self-end">
                        <img src="https://picsum.photos/200" class="img-thumbnail" alt="no-image">
                        <a class="d-block" href="#">Change Picture</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        document.getElementById('notify').style.display = 'none';

        function chnginpclr() {
            var oldpass = document.getElementById('oldpassinp').value='';
            var newpass = document.getElementById('newpassinp').value='';
            var cnfpass = document.getElementById('cnfpassinp').value='';
            

        }

        $(document).ready(function() {
            $('#change-pass').click(function(e) {
                e.preventDefault();
                var data = {
                    'oldpass': $('.old-pass').val(),
                    'newpass': $('.new-pass').val(),
                    'cnfpass': $('.cnf-pass').val(),
                }

                function validateForm() {
                    var oldpass = document.getElementById('oldpassinp').value;
                    var newpass = document.getElementById('newpassinp').value;
                    var cnfpass = document.getElementById('cnfpassinp').value;
                    var err = false;
                    if (oldpass == '') {
                        document.getElementById('oldpasserr').innerHTML = "This feld cannot be empty";
                        err = true;
                    }
                    if (oldpass != '') {
                        document.getElementById('oldpasserr').innerHTML = "";
                        err = false;
                    }

                    if (newpass == '') {
                        document.getElementById('newpasserr').innerHTML = "This field cannot be empty";
                        err = false;
                    }
                    if (newpass != '') {
                        document.getElementById('newpasserr').innerHTML = "";
                        err = true;
                    }
                    if (cnfpass == '') {
                        document.getElementById('cnfpasserr').innerHTML = "This field cannot be empty";
                        err = false;
                    }
                    if (cnfpass != '') {
                        document.getElementById('cnfpasserr').innerHTML = "";
                        err = true;
                    }
                    if (cnfpass != newpass) {
                        document.getElementById('cnfpasserr').innerHTML =
                            "This cannot be different from new password";
                        err = true;
                    }
                    if (cnfpass == newpass) {
                        document.getElementById('cnfpasserr').innerHTML = "";
                        err = false;
                    }
                    if (err) {
                        return true;
                    } else {
                        return false;
                    }
                }
                validateForm();
                // console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/student/passwordchange",
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        // console.log(response);
                        if (response.status == 400) {
                            if (response.msg != '') {
                                $('#oldpasserr').text(response.msg);
                            }

                        }
                        if (response.status == 200) {
                            $('#chngpass').modal('hide');
                            $('#chngpass').find('input').val('');
                            // $('#chngpass').find('span').text('');
                            if (response.msg != '') {
                                $('#notify').addClass('d-block');
                                $('#notify').show();
                                $('#notify').text(response.msg);
                            }


                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
