<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Change Password</title>
</head>

<body>
    @include('layouts/teacher-nav')

    <br>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{_('Change Your Password')}}
                    </div>

                    <div class="card-body">

                        @if(session()->has('success'))
                        <strong class="text-success">{{session()->get('success')}}</strong>
                        @endif

                        @if(session()->has('error'))
                        <strong class="text-danger">{{session()->get('error')}}</strong>
                        @endif

                        <form method="post" action="{{route('teacherUpdatepassword')}}">
                            @csrf
                            <div>
                                <label>Current Password</label>
                                <input type="password" name="current_password" class="form-control" placeholder="Current Password" required value="{{old('current_password')}}" id="current_password">

                            </div>
                            <br>

                            <div>
                                <label>New Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="New Password" required id="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <br>

                            <div>
                                <label>Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required id="password_confirmation">
                            </div>

                            <div>
                                <input type="checkbox" onclick="myFunction()">Show Password
                            </div>

                            <br>

                            <button type="submit" class="btn btn-primary">Chnage Password</button>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("current_password");
            var y = document.getElementById("password");
            var z = document.getElementById("password_confirmation");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
            if (z.type === "password") {
                z.type = "text";
            } else {
                z.type = "password";
            }
        }
    </script>
</body>

</html>