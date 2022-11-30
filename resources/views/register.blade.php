<!doctype html>
<html lang="en">

<head>
  <title>RajmoonClasses-SignUp</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="resources/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(205,70,129,1) 45%, rgba(0,212,255,1) 100%);">





  <div class="container h-100" style="padding-top: 100px;">
    <!-- <div class="d-flex justify-content-center h-100"> -->
    <div class="col-md-6 offset-md-3" style="background:white;border :solid 1px black;box-shadow:10px 15px 12px black;border-radius:10px;padding:30px">
      <div class="user_card">
        <h2 class=" text-center PT-10">Registration</h2>
        <br /> <br />
        <form action="{{ route('sample.validation_register') }}" method="POST">
          @csrf
          <div class=" col-md-12">

            <input type="text" name="name" class="form-control " placeholder="username">
            <span class="text-danger  text-center">
              @error('name')
              {{$message}}
              @enderror
            </span>


          </div> <br />
          <div class=" col-md-12">

            <input type="email" name="email" class="form-control " placeholder="Email">
            <span class="text-danger  text-center">
              @error('email')
              {{$message}}
              @enderror
            </span>
          </div> <br />
          <div class=" col-md-12">

            <input type="password" name="password" class="form-control " placeholder="password">
            <span class="text-danger  text-center">
              @error('password')
              {{$message}}
              @enderror
            </span>
          </div>


          <div class="d-flex justify-content-center mt-3 login_container">
            <button class="btn btn-primary" type="submit">SignUp</button>
          </div>
        </form>
      </div>

      <div class="mt-4">
        <div class="d-flex justify-content-center links">
          Don't have an account? <a href="{{route('login')}}" class="ml-2">SignIn</a>
        </div>
        <div class="d-flex justify-content-center links">
          <a href="#">Forgot your password?</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>