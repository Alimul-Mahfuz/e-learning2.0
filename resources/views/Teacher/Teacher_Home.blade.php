<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body>
  @include('layouts/teacher-nav')

  <!-- <h1>Welcome {{session('username')}}</h1>
  <h1>{{session('account_id')}}</h1>
  <h1>{{session('email')}}</h1> -->


  <div class="row my-5">
    <div class="col-sm-3">
      <div class="card mx-4" style="width: 18rem;">
        <img src="{{ asset('images/AI.jpg') }}" class="card-img-top" alt="Card image cap">

        <div class="card-body">
          <h5 class="card-title">Artificial Intelligence</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

    </div>
    <div class="col-sm-3">
      <div class="card mx-4" style="width: 18rem;">
        <img src="{{ asset('images/CN.webp') }}" class="card-img-top" alt="Card image cap">

        <div class="card-body">
          <h5 class="card-title">Computer Network</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card mx-4" style="width: 18rem;">
        <img src="{{ asset('images/WT.webp') }}" class="card-img-top" alt="Card image cap">

        <div class="card-body">
          <h5 class="card-title">Web Technology</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card mx-4" style="width: 18rem;">
        <img src="{{ asset('images/Python.webp') }}" class="card-img-top" alt="Card image cap">

        <div class="card-body">
          <h5 class="card-title">Programming in Python</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

  </div>

  

  <div class="row my-5">
    <div class="col-sm-3">
      <div class="card mx-4" style="width: 18rem;">
        <img src="{{ asset('images/Java.png') }}" class="card-img-top" alt="Card image cap">

        <div class="card-body">
          <h5 class="card-title">Programming in Java</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

    </div>
    <div class="col-sm-3">
      <div class="card mx-4" style="width: 18rem;">
        <img src="{{ asset('images/WD.jpg') }}" class="card-img-top" alt="Card image cap">

        <div class="card-body">
          <h5 class="card-title">Web Development</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card mx-4" style="width: 18rem;">
        <img src="{{ asset('images/CSh.jfif') }}" class="card-img-top" alt="Card image cap">
        

        <div class="card-body">
          <h5 class="card-title">Programming in C#</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="card mx-4" style="width: 18rem;">
        <img src="{{ asset('images/NS.png') }}" class="card-img-top" alt="Card image cap">

        <div class="card-body">
          <h5 class="card-title">Network Security</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

  </div>





</body>

</html>