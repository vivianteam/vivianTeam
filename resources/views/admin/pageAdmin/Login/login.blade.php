<html lang="en">
<head>
	<title>Vivian ecommerce</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css')}}">
</head>
<body class="">
	<div class="login-page">
		<div class="row">
			<div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
				<img src="{{ asset('image/img/flat-avatar.png')}}" class="user-avatar" />
				<h1>Vivian Shop</h1>
				<div class="col-sm-3">
	            </div>
				<form method="post" action="{{route('login')}}">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-content">
						<div class="form-group">
							<input type="text" class="form-control input-underline input-lg" name="txt_Email" placeholder=Email>
						</div>

						<div class="form-group">
							<input type="password" class="form-control input-underline input-lg" name="txt_Password" placeholder=Password>
						</div>
					</div>
					<input type="submit" class="btn btn-white btn-outline btn-lg btn-rounded progress-login"  value="Log in">
					&nbsp;
				</form>
			</div>
		</div>
	</div>
</body>
</html>