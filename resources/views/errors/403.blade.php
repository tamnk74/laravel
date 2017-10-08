<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>{{config('app.name')}} @yield('title')</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/AdminLTE.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/skins/_all-skins.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body class="skin-blue sidebar-mini">
		<section class="content">
			<div class="error-page">
				<h2 class="headline text-yellow"> 403</h2>

				<div class="error-content">
					<h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

					<p>
						We could not find the page you were looking for.
						Meanwhile, you may <a href="{{ Auth::user()->hasRole(config('auth.backend'))? route('dashboard') : route('home')  }}">return to dashboard</a> or try using the search form.
					</p>

					<form class="search-form">
						<div class="input-group">
							<input type="text" name="search" class="form-control" placeholder="Search">

							<div class="input-group-btn">
								<button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
								</button>
							</div>
						</div>
						<!-- /.input-group -->
					</form>
				</div>
				<!-- /.error-content -->
			</div>
		</section>
</body>
</html>