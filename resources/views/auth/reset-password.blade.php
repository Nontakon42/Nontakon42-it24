<!doctype html>
<html lang="en">
  <head>
  	<title>Reset Password</title>
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
					<h2 class="heading-section">Reset Password </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/bg.jpg);"></div>
		      	<h3 class="text-center mb-0">Reset Password </h3>
				<form class="login-form" method="POST" action="{{ route('password.store') }}">
                    @csrf

					<input type="hidden" name="token" value="{{ $request->route('token') }}">
				
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input class="form-control" placeholder="Username" 
						  id="email" type="email" name="email" :value="{{ $request->email')}}" required autofocus autocomplete="username">
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input class="form-control" placeholder="Password" id="password"
                            type="password"
                            name="password"
                            required autocomplete="current-password">
				<div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input class="form-control" placeholder="Confirm Password" id="password_confirmation"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password">
	            </div>
	            </div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn form-control btn-primary rounded submit px-3">Login</button>
	            </div>
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

