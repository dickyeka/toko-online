<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Voceria-Login</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="<?= asset('css/font-awesome.min.css')?>">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="<?= asset('css/bootstrap.min.css')?>">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="<?= asset('css/style.css')?>">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	
	<div class="login-page bk-img" style="background-image: url(<?= asset('img/login-bg.jpg')?>);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">

						<h1 class="text-center text-bold text-light mt-4x">Sign in</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
							<?php  if ($input->get('error')) : ?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Gagal!</strong> login
								</div>
							<?php endif; ?>
							<form action="<?= url('admin/auth/store_login')?>" method="POST" role="form" class="mt">

									<label for="" class="text-uppercase text-sm">Your Username or Email</label>
									<input type="text" placeholder="email" name="email" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="password" name="password" class="form-control mb">

									<button class="btn btn-primary btn-block" type="submit">LOGIN</button>

								</form>
							</div>
						</div>
						<div class="text-center text-light">
							<a href="#" class="text-light">Forgot password?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>