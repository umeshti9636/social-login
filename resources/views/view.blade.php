<?php

//use Illuminate\Contracts\Session\Session;

//  if(Session::has('user')){
//   echo 'hii';
//   }
?>

<!doctype html>
<html lang="en">

<head>
  <title>Registeration List</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="resources/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>
  <nav class="nav justify-content-center alert alert-success">



    <li class="nav-item">
      <a class="nav-link" href="{{ ('/') }}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ ('/home') }}">lodingpage</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">{{Auth::user()->email}}</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}">Logout</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('view') }}">View</a>
    </li>





  </nav>



  <div class="container h-100" style="padding-top: 100px;">

    <form accept="" class="row">
      <div class="form-group col-md-8">

        <input type="search" name="search" id="" class="form-control" placeholder="Search by name and email..." value="{{$search}}">
        <!-- <small id="helpId" class="text-muted">Help text</small> -->
      </div>
      <div class="form-group col-md-4"><button class="btn btn-primary">Search</button>&nbsp;<a href="{{url('/view')}}"><button class="btn btn-info" type="button">Reset</button></a></div>
    </form>
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>


        </tr>
      </thead>
      <tbody>
        @foreach ($view as $data)
        <tr>

          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td><a href="{{ route('edit',['id' => $data->id]) }}" class="btn btn-primary">Edit</a>
            <a href="{{(route('delete',['id' => $data->id])) }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>