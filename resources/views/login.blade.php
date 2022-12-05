<!doctype html>
<html lang="en">

<head>
	<title>login</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(205,70,129,1) 45%, rgba(0,212,255,1) 100%);">


	<div class="container h-100" style="padding-top: 100px;">


		<div class="col-md-6 offset-md-3" style="background:white;border :solid 1px black;box-shadow:10px 15px 12px black;border-radius:10px;padding:30px">
			<div class="user_card">
				<h2 class="text-center PT-10">Login</h2>
				<span class="text-danger  text-center">
					<form action="validate_login" method="post">
						@if($message = Session::get('error'))

						<div class="col-md-12 alert alert-danger test-center text-center">
							{{ $message }}
						</div>

						@endif
						@csrf
						<div class="form-group col-md-12">
							<input type="email" name="email" class="form-control" require placeholder="Email" />
							@if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
							@endif
						</div>
						<div class="form-group col-md-12">
							<input type="password" name="password" class="form-control" require placeholder="Password" />
							@if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
							@endif
						</div>
						<div class="d-grid mx-auto">
							<button class="btn btn-primary" type="submit">Login</button>
						</div>
						<p>OR</p>
						<div class="d-grid mx-auto">
							<a href="{{route('google-auth')}}" class=" btn btn-info"><i class="fa fa-google"></i>Login with Google</a>
							<a href="{{url('github')}}" class=" btn btn-danger"><i class="fa fa-google"></i>Login with Git</a>
							<a href="{{url('facebook')}}" class=" btn btn-primary"><i class="fa fa-facebook"></i>Login with Facebook</a>
						</div>
						<div class="d-grid mx-auto">

						</div>



			</div>

			<div class="mt-4">
				<div class="d-flex justify-content-center links">
					Don't have an account? <a href="{{('/register')}}" class="ml-2">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center links">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
			</form>
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