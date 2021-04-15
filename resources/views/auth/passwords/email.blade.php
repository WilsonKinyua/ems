


<!DOCTYPE html>
<html lang="en" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<!-- Meta data -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta content="" name="description">
	<meta content="Wezaprosoft" name="author">
	<meta name="keywords" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Forgot Password< - {{ trans('panel.site_title') }}</title>

	<!--Favicon -->
    <link rel="icon" href="{{ asset('asset/img/favicon.ico')}}" type="image/x-icon" />

	<!--Bootstrap css -->
	<link href="{{ asset('login_assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Style css -->
	<link href="{{ asset('login_assets/css/style.css')}}" rel="stylesheet" />
	<link href="{{ asset('login_assets/css/dark.css')}}" rel="stylesheet" />
	<link href="{{ asset('login_assets/css/skin-modes.css')}}" rel="stylesheet" />

	<!-- Animate css -->
	<link href="{{ asset('login_assets/css/animated.css')}}" rel="stylesheet" />

	<!---Icons css-->
	<link href="{{ asset('login_assets/css/icons.css')}}" rel="stylesheet" />

	<!-- Color Skin css -->
	<link id="theme" href="{{ asset('login_assets/colors/color1.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="h-100vh page-style1">

    <div class="page">
		<div class="page-single">
			<div class="p-5">
				<div class="row">
					<div class="col mx-auto">
						<div class="row justify-content-center">
							<div class="col-lg-9 col-xl-8">
								<div class="card-group mb-0">
									<div class="card p-4">
										<div class="card-body">
											<h1 class="mb-2">Forgot Password</h1>
											<p class="text-muted">Forgot Password Page</p>
                                            <form method="POST" action="{{ route('password.email') }}">
                                                @csrf
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-mail"></i>
													</div>
												</div>
												<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autocomplete="email" autofocus placeholder="Enter {{ trans('global.login_email') }}" value="{{ old('email') }}">
                                                @if($errors->has('email'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                @endif
											</div>
											<div class="row">
												<div class="col-12">
													<button type="submit" class="btn btn-primary btn-block px-4"><i
															class="fe fe-send"></i> Send</button>
												</div>
											</div>
                                            </form>
										</div>
									</div>
									<div class="card text-white bg-primary py-5 d-md-down-none page-content mt-0">
										<div class="text-center justify-content-center page-single-content">
											<div class="box">
												<div></div>
												<div></div>
												<div></div>
												<div></div>
												<div></div>
												<div></div>
											</div>
											<img src="{{ asset('login_assets/images/png/login.png')}}" alt="img">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Jquery js-->
<script src="{{ asset('login_assets/js/jquery-3.5.1.min.js')}}"></script>

<!-- Bootstrap4 js-->
<script src="{{ asset('login_assets/plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{ asset('login_assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!--Othercharts js-->
<script src="{{ asset('login_assets/plugins/othercharts/jquery.sparkline.min.js')}}"></script>

<!-- Circle-progress js-->
<script src="{{ asset('login_assets/js/circle-progress.min.js')}}"></script>

<!-- Jquery-rating js-->
<script src="{{ asset('login_assets/plugins/rating/jquery.rating-stars.js')}}"></script>
<!-- Custom js-->
<script src="{{ asset('login_assets/js/custom.js')}}"></script>
</body>


</html>
