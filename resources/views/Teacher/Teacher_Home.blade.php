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

  <h1>Welcome {{session('username')}}</h1>
  <h1>{{session('account_id')}}</h1>
  <h1>{{session('email')}}</h1>

  <br>
  <br>



</body>

</html>