
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .reghere {
    font-size: 1.8rem;
    color: white;
    margin-top: 5px;
    padding: 10px;
    height: 10rem;
    background: #000046;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #1CB5E0, #000046);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #1CB5E0, #000046); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
     /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

    </style>
    <title>Registration | Thanks for choosing us</title>
</head>
<body>
    @include('layouts/public-nav')
    <div class="container my-5">
        <div class="reghere">
            Register Here
        </div>
        <div class="flexcontainer">
            <form>
                <div class="form-row my-3">
                <div class="form-group col-md-6">
                    <label for="inputfname">First name</label>
                    <input type="text" class="form-control" id="" placeholder="First name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputlname">Last Name</label>
                    <input type="text" class="form-control" id="" placeholder="Last name">
                </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputfPassword4">Confirm Password</label>
                    <input type="password" class="form-control" id="inputfPassword4" placeholder="Confirm Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Division</label>
                    <select id="inputState" class="form-control">
                      <option selected>Choose...</option>
                      <option>Dhaka</option>
                      <option>Chattagram</option>
                      <option>Khulna</option>
                      <option>Barisal</option>
                      <option>Maymanshingh</option>
                      <option>Rangpur</option>
                      <option>Syllhet</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
              </form>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>