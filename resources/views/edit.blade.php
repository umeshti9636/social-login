<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
  <body>
  <nav class="nav justify-content-center alert alert-success">
      
  
      @guest

      <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
      </li>
<li class="nav-item">
          <a class="nav-link" href="{{ route('view') }}">View</a>
      </li>

      @else

      <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}">Logout</a>
      </li>

      @endguest


</nav>



	<div class="container h-100" style="padding-top: 100px;">
		<!-- <div class="d-flex justify-content-center h-100"> -->
			<div class="col-md-6 offset-md-3" style="border :solid 1px black;box-shadow:10px 15px 12px black;border-radius:10px;padding:30px">
			<div class="user_card">
			<h2 class="text-center PT-10">Update Details</h2>
      <hr><br>
					<form action="{{ $url }}" method="POST">
                    @csrf
						<div class="input-group">
							
							<input type="text" name="name" class="form-control input_user"  placeholder="username" value="{{$view->name}}">
                          
                            <span class="text-danger">
                           @error('name')
                            {{$message}}
                            @enderror
                            </span>
                          
                           
						</div>
            <br>
                        <div class="input-group col-mb-2">
							
							<input type="email" name="email" class="form-control input_pass" placeholder="Email" value="{{$view->email}}">
                            <span class="text-danger">
                           @error('email')
                            {{$message}}
                            @enderror
                            </span>
						</div>
					
                        
						
							<div class="d-flex justify-content-center mt-3 login_container">
                            <button class="btn btn-primary" type="submit">Update</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
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