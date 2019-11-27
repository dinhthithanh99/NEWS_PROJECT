<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<form action="{{url('admindangnhap')}}" method="POST" role="form">
						<legend>Login</legend>
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" placeholder="Email">
							
							@if($errors->has('email'))
								<p style="color: red;">{{$errors->first('email')}}</p>
							@endif
						</div>
						<div class="form-group">
							<label for="">Password</label>
							<input type="password" name="password" class="form-control" id="password" placeholder="password">

							@if($errors->has('password'))
								<p style="color: red;">{{$errors->first('password')}}</p>
							@endif
						</div>
						{{csrf_field()}}
						<button type="submit" class="btn btn-primary">Đăng Nhập</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>