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
    <title>Register - {{ trans('panel.site_title') }}</title>

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
							<div class="col-lg-10 col-xl-11">
								<div class="card-group mb-0">
									<div class="card p-4">
										<div class="card-body">
											<div class="text-center title-style mb-1">
												<h1 class="mb-1">Register</h1>
												<hr>
												<p class="text-muted">Create New Account</p>
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
                                            <form method="POST" class="" action="{{ route('register') }}">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fe fe-user"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" id="exampleName" name="fname" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.user_fname') }}" value="{{ old('fname', null) }}">
                                                            @if($errors->has('name'))
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('name') }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fe fe-user"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" name="lname" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.user_lname') }}" value="{{ old('lname', null) }}">
                                                            @if($errors->has('name'))
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('name') }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fe fe-user"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" name="company" class="form-control" required autofocus placeholder="{{ trans('global.company') }}" value="{{ old('company', null) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fe fe-user"></i>
                                                                </div>
                                                            </div>
                                                            <input type="text" name="job_title" class="form-control" required autofocus placeholder="{{ trans('global.job_title') }}" value="{{ old('job_title', null) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fe fe-mail"></i>
                                                                </div>
                                                            </div>
                                                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                                                            @if($errors->has('email'))
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('email') }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fe fe-lock"></i>
                                                                </div>
                                                            </div>
                                                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                                                            @if($errors->has('password'))
                                                                <div class="invalid-feedback">
                                                                    {{ $errors->first('password') }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-lock"></i>
													</div>
												</div>
                                                <input type="password" name="password_confirmation" class="form-control" required placeholder="Confirm Password">
											</div>

											<div class="row">
												<div class="col-12">
													<button type="submit" class="btn  btn-primary btn-block px-4">Create
														New Account</button>
												</div>
											</div>
                                        </form>
											<div class="text-center pt-4">
												<div class="font-weight-normal fs-16">You Already have an account <a
														class="btn-link font-weight-normal" href="{{ route('login')}}">Login Here</a>
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
