
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>login | Welcome back</title>
</head>
<body>
    @include('layouts/public-nav')
    <div class="container my-5">
        <div class="loginhere">
            Login Here
        </div>
        <div class="flexcontainer">
            <form class="my-5" method="post" action="#">
              @csrf
                <div class="form-group my-3">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control logstyle" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}" placeholder="Enter email">
                  @error('email')
                  <span class="text-danger">{{$message}}</span><br>
                      
                  @enderror
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group my-3">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" value="{{old('pass')}}" name='pass' class="form-control logstyle" id="exampleInputPassword1" placeholder="Password">
                  @error('pass')
                  <span class="text-danger">{{$message}}</span>
                      
                  @enderror
                  <div>
                    @if (session('Faild'))
                    <span class="text-danger">{{ session('Faild') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" name="btn-login" class="btn btn-primary my-3">Login</button>

                <div class="noaccount">
                    Don't have an account yet?
                    <a href="{{route('stdreg')}}">Register Here</a>
                </div>

                <br>
                <div class="noaccount">
                    Want to be a teacher?
                    <a href="{{route('teacherRegistration')}}">Teacher Register Here</a>
                </div>

                <br>
                <div class="noaccount">
                    Don't have an account yet?
                    <a href="{{route('fill_register')}}">Coordinator Register Here</a>
                </div>
              </form>
        </div>
    </div>


    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>