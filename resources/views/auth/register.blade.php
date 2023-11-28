<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('authen/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Sign up</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/bg.jpg);"></div>
		      	<h3 class="text-center mb-0">Register</h3>
		      	<p class="text-center">Sign up</p>
				<form class="login-form" method="POST" action="{{ route('register') }}">
                    @csrf

		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input class="form-control" placeholder="Name" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
		      		</div>

                    <div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input class="form-control" placeholder="Username" id="username" type="text" name="username" :value="old('username')" required autofocus autocomplete="username">
		      		</div>

                      <div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input class="form-control" placeholder="Email" id="email" type="text" name="email" :value="old('email')" required autofocus autocomplete="email">
		      		</div>

                      <div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input class="form-control" placeholder="Phone" id="phone" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone">
		      		</div>

	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input class="form-control" placeholder="Password" id="password"
                            type="password"
                            name="password"
                            required autocomplete="new-password">
	            </div>

                <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input class="form-control" placeholder="Confirm Password" id="password_confirmation"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password">
	            </div>

	            <div class="form-group">
	            	<button type="submit" class="btn form-control btn-primary rounded submit px-3">Sign up</button>
	            </div>
	          </form>
	          <div class="w-100 text-center mt-4 text">
	          	<p class="mb-0">You already have account?</p>
		          <a href="{{ route('login') }}" class="txt2 bo1">Login</a></p>
	          </div>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('authen/js/jquery.min.js')}}"></script>
  <script src="{{asset('authen/js/popper.js')}}"></script>
  <script src="{{asset('authen/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('authen/js/main.js')}}"></script>

	</body>
</html>

