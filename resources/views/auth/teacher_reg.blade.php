<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .teacherregistration {
            font-size: 2rem;
            color: gold;
            margin-top: 5px;
            padding: 10px;
            height: 5rem;
            background: #000428;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #004e92, #000428);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #004e92, #000428);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
    </style>
    <title>Teacher Registration Form</title>
</head>

<body>
    @include('layouts/public-nav')
    <div class="container my-5">
        <div class="teacherregistration">
            Teacher Registration Form
        </div>
        <br>

        <div class="container">
            <form action="" method="post">
                {{csrf_field()}}
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="fname">First name</label>
                        <input type="text" value="{{old('fname')}}" name="fname" class="form-control" placeholder="First name" aria-label="First name">
                        @error('fname')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="text" value="{{old('lname')}}" name="lname" class="form-control" placeholder="Last name" aria-label="Last name">
                        @error('lname')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" value="{{old('email')}}" name="email" class="form-control" id="inputEmail4" placeholder="....@gmail.com">
                        @error('email')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label for="inputPhone" class="form-label">Phone</label>
                        <input type="text" value="{{old('phone')}}" name="phone" class="form-control" id="inputPhone" placeholder="+880">
                        @error('phone')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label for="inputdate" class="form-label">Date of Birth</label>
                        <input type="date" value="{{old('dob')}}" name="dob" class="form-control" id="inputdate">
                        @error('dob')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label for="inputgender" class="form-label">Gender</label>
                        <select id="inputgender" name="gender" class="form-control">
                            <option selected>Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        @error('gender')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label for="inputdegree" class="form-label">Degree</label>
                        <select id="inputdegree" value="{{old('degree')}}" name="degree" class="form-control">
                            <option selected>Choose...</option>
                            <option>Ph.D</option>
                            <option>MSc</option>
                            <option>BSc</option>
                            <option>MBA</option>
                            <option>BBA</option>
                        </select>
                        @error('degree')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" value="{{old('address')}}" name="address" class="form-control" id="inputAddress" placeholder="House No:xx, Road No:xx">
                        @error('address')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" value="{{old('city')}}" name="city" class="form-control" id="inputCity">
                        @error('city')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <br>
                        <label for="inputState" class="form-label">Division</label>
                        <select id="inputState" value="{{old('division')}}" name="division" class="form-control">
                            <option selected>Choose...</option>
                            <option>Dhaka</option>
                            <option>Khulna</option>
                            <option>Barisal</option>
                            <option>Chittagong</option>
                            <option>Mymensingh</option>
                            <option>Rajshahi</option>
                            <option>Sylhet</option>
                            <option>Rangpur</option>
                        </select>
                        @error('division')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <br>
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" value="{{old('zip')}}" name="zip" class="form-control" id="inputZip">
                        @error('zip')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" value="{{old('password')}}" name="password" class="form-control" id="inputPassword4" placeholder="password">
                        @error('password')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label for="inputconfirmPassword4" class="form-label">Confirm Password</label>
                        <input type="password" value="{{old('con_password')}}" name="con_password" class="form-control" id="inputconfirmPassword4" placeholder="confirm password">
                        @error('con_password')
                        <span class="text-danger">{{$message}}</span><br>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <br>
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>