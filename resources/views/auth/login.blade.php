<!doctype html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login to Your Account - {{ trans('panel.site_title') }}</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('asset/img/favicon.ico')}}" type="image/x-icon" />

		<!-- Bootstrap css-->
        <link href="{{ asset('asset/css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Icons css-->
        <link href="{{ asset('asset/css/icons.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
            crossorigin="anonymous" />

        <!-- Style css-->
        <link href="{{ asset('asset/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('asset/css/dark-boxed.css')}}" rel="stylesheet">
        <link href="{{ asset('asset/css/boxed.css')}}" rel="stylesheet">
        <link href="{{ asset('asset/css/skins.css')}}" rel="stylesheet">
        <link href="{{ asset('asset/css/dark-style.css')}}" rel="stylesheet">

        <!-- Color css-->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('asset/css/colors/color.css')}}">

        <!-- Select2 css -->
        <link href="{{ asset('asset/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

        <!-- Internal DataTables css-->
        <link href="{{ asset('asset/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('asset/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('asset/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />

        <!-- Sidemenu css-->
        <link href="{{ asset('asset/css/sidemenu/sidemenu.css')}}" rel="stylesheet">

        <!-- Switcher css-->
        <link href="{{ asset('asset/switcher/switcher.css')}}" rel="stylesheet">
        <link href="{{ asset('asset/switcher/demo.cs')}}s" rel="stylesheet">

	</head>

	<body class="horizontalmenu">


		<!-- Loader -->
		<div id="global-loader">
            <img src="{{ asset('asset/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages  justify-content-center text-center sign-2">
				<div class="col-md-12 col-xl-6">
					<div class="sign1">
						<div class="card">
							<div class="">
								<div class="card-body mt-2 mb-2 p-5">
									{{-- <img src="" class="header-brand-img text-left mb-5 desktop-logo" alt="logo">
									<img src="" class="header-brand-img desktop-logo text-left mb-5 theme-logo" alt="logo"> --}}
                                    <h1>Event MS</h1>
									<div class="clearfix"></div>
                                    @if(session('message'))
                                        <div class="alert alert-info" role="alert">
                                            {{ session('message') }}
                                        </div>
                                    @endif

									<form method="POST" action="{{ route('login') }}" class="">
                                            @csrf
										<h5 class="text-left mb-2">Sign In</h5>
										<p class="mb-4 text-muted tx-13 ml-0 text-left">Signin to Continue in our website</p>
										<div class="form-group text-left">
											<label class="">Email Address</label>
											{{-- <input class="form-control rounded-11" placeholder="Users email" type="text"> --}}
                                            <input id="email" name="email" type="text" class="form-control rounded-11{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                                            @if($errors->has('email'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif
										</div>
										<div class="form-group text-left">
											<label class="">Password</label>
                                            <input id="password" name="password" type="password" class="form-control rounded-11{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                                                @if($errors->has('password'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('password') }}
                                                    </div>
                                                @endif
										</div>
										<div class="row">
											<div class="col-6">
												<div class="form-group mb-0 text-left">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input"  name="remember" type="checkbox" id="remember" style="vertical-align: middle;">
														<span class="custom-control-label">Remember me</span>
													</label>
												</div>
											</div>
											<div class="col-6 text-right mt-1">
												<a href="{{ route('password.request') }}" class="text-dark">Forgot password?</a>
											</div>
											<div class="col-12 mt-3">
												<button type="submit" class="btn btn-primary rounded-11 btn-block">SIGN IN</button>
											</div>
										</div>
										<div class="text-center tx-15 text-muted mt-3">You Don't have an Account <a class="btn-link font-weight-normal text-primary" href="{{ route('register')}}">Sign Up</a></div>
									</form>
									<hr class="divider mt-4">
									<div class="coming-form d-flex justify-content-center mt-4">
										<div class="coming-form1 mr-4">
											<a href="#">
												<i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></i>
											</a>
										</div>
										<div class="coming-form1 mr-4">
											<a href="#">
												<i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></i>
											</a>
										</div>
										<div class="coming-form1">
											<a href="#">
												<i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

	<!-- Jquery js-->
	<script src="{{ asset('asset/plugins/jquery/jquery.min.js')}}"></script>

	<!-- Bootstrap js-->
	<script src="{{ asset('asset/plugins/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{ asset('asset/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

	<!-- Internal Chart.Bundle js-->
	<script src="{{ asset('asset/plugins/chart.js/Chart.bundle.min.js')}}"></script>

	<!-- Peity js-->
	<script src="{{ asset('asset/plugins/peity/jquery.peity.min.js')}}"></script>

	<!--Internal Apexchart js-->
	<script src="{{ asset('asset/js/apexcharts.js')}}"></script>

	<!-- Internal Data Table js -->
	<script src="{{ asset('asset/plugins/datatable/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('asset/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{ asset('asset/js/table-data.js')}}"></script>
	<script src="{{ asset('asset/plugins/datatable/dataTables.responsive.min.js')}}"></script>
	<script src="{{ asset('asset/plugins/datatable/fileexport/dataTables.buttons.min.js')}}"></script>
	<script src="{{ asset('asset/plugins/datatable/fileexport/buttons.bootstrap4.min.js')}}"></script>

	<!-- Perfect-scrollbar js -->
	<script src="{{ asset('asset/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

	<!-- Select2 js-->
	<script src="{{ asset('asset/plugins/select2/js/select2.min.js')}}"></script>
	<script src="{{ asset('asset/js/select2.js')}}"></script>

	<!-- Sidemenu js -->
	<script src="{{ asset('asset/plugins/sidemenu/sidemenu.js')}}"></script>

	<!-- Sidebar js -->
	<script src="{{ asset('asset/plugins/sidebar/sidebar.js')}}"></script>

	<!-- INTERNAL INDEX js -->
	<script src="{{ asset('asset/js/index.js')}}"></script>

	<!-- Sticky js -->
	<script src="{{ asset('asset/js/sticky.js')}}"></script>

	<!-- Custom js -->
	<script src="{{ asset('asset/js/custom.js')}}"></script>

	<!-- Switcher js -->
	<script src="{{ asset('asset/switcher/js/switcher.js')}}"></script>

    {{-- plugins --}}
    <script type="text/javascript" src="{{ asset('assets/scripts/main.js')}}"></script>
	</body>

</html>
