<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
</head>
<body>
    @include('layouts.stdlogged-nav');
    <div class="container p-3">
        <form method="post" action="#">
            @csrf
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Enter OTP send to your email</label>
              <input type="password" name="otp" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">New Password</label>
              <input type="password" name="newpass" class="form-control" id="exampleInputPassword1">
            </div>
            @error('newpass')
            <span class="text-danger">{{$message}}</span><br>
                
            @enderror
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Repeat new Password</label>
              <input type="password" name="confnewpass" class="form-control" id="exampleInputPassword1">
              
            </div>
            @error('confnewpass')
            <span class="text-danger">{{$message}}</span><br>
                
            @enderror

            {{-- promot user for wrong old password entry --}}
            @if (session('chngfaild'))
            <div class="alert alert-danger">
              {{-- session flash comming form StudentAuthController --}}
                {{ session('chngfaild') }}
            </div>
            @endif
            <button type="submit" class="btn btn-primary">Change</button>
          </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>