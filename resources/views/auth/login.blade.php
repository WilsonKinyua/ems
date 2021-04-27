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
    <!-- Title -->
    <title>Sign In to your account - {{ trans('panel.site_title') }}</title>

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
											<div class="text-center title-style mb-6">
												<h1 class="mb-2">Login</h1>
												<hr>
												<p class="text-muted">Sign In to your account</p>
                                                @if(session('message'))
                                                    <div class="alert alert-info" role="alert">
                                                        {{ session('message') }}
                                                    </div>
                                                @endif
											</div>
											{{-- <div class="btn-list d-flex">
												<a href="#"
													class="btn btn-google btn-block"><i
														class="fa fa-google fa-1x mr-2"></i> Google</a>
												<a href="#" class="btn btn-twitter"><i
														class="fa fa-twitter fa-1x"></i></a>
												<a href="#" class="btn btn-facebook"><i
														class="fa fa-facebook fa-1x"></i></a>
											</div> --}}
											{{-- <hr class="divider my-6"> --}}
                                            <form method="POST" action="{{ route('login') }}" class="">
                                                @csrf
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-user"></i>
													</div>
												</div>
                                                <input id="email" name="email" type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                                                @if($errors->has('email'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                @endif
											</div>
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-lock"></i>
													</div>
												</div>
                                                <input id="password" name="password" type="password" class="form-control rounded-11{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                                                @if($errors->has('password'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('password') }}
                                                    </div>
                                                @endif
											</div>
                                            <div class="form-group">
												<label class="custom-control custom-checkbox">
													<input class="custom-control-input" name="remember" type="checkbox" id="remember"/>
													<span class="custom-control-label">Remember me</span>
												</label>
											</div>
											<div class="row">
												<div class="col-12">
													<button type="submit"
														class="btn  btn-primary btn-block px-4">Login</button>
												</div>
												<div class="col-12 text-center">
													<a href="{{ route('password.request') }}"
														class="btn btn-link box-shadow-0 px-0">Forgot password?</a>
												</div>
											</div>
                                            </form>
											<div class="text-center pt-4">
												<div class="font-weight-normal fs-16">You Don't have an account <a
														class="btn-link font-weight-normal" href="{{ route('register')}}">Register Here</a>
												</div>
											</div>
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
