<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="author" content="Developer">
	<meta name="keywords" content="">
    <meta name="description" content="@yield('description')">

	<!-- Favicon -->
	<link rel="icon" href="{{ asset('asset/img/favicon.ico')}}" type="image/x-icon" />

	<!-- Title -->
    <title>
        @yield("title")
    </title>

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
    @yield('styles')
</head>

<body class="main-body leftmenu">

        <!-- Loader -->
        <div id="global-loader">
            <img src="{{ asset('asset/img/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- End Loader -->

        <!-- Page -->
        <div class="page">

        <!-- Sidemenu -->
            @include('partials.sidemenu')
        <!-- End Sidemenu -->

        <!-- Main Header-->
            @include('partials.header')
        <!-- End Main Header-->

        <!-- Mobile-header -->
            @include('partials.mobile-header')
        <!-- Mobile-header closed -->
        <div class="main-content side-content pt-0">


                @yield('content')


        </div>
        <!-- Main Footer-->
        <div class="main-footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span>Copyright © 2021 <a href="#">{{ trans('panel.site_title') }}</a>.</span>
                    </div>
                </div>
            </div>
        </div>
        <!--End Footer-->

		<!-- Sidebar -->
		{{-- <div class="sidebar sidebar-right sidebar-animate">
			<div class="sidebar-icon">
				<a href="#" class="text-right float-right text-dark fs-20" data-toggle="sidebar-right"
					data-target=".sidebar-right"><i class="fe fe-x"></i></a>
			</div>
			<div class="sidebar-body">
				<h5>Todo</h5>
				<div class="d-flex p-3">
					<label class="ckbox"><input checked type="checkbox"><span>Hangout With friends</span></label>
					<span class="ml-auto">
						<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top">
					<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
					<span class="ml-auto">
						<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top">
					<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
					<span class="ml-auto">
						<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top">
					<label class="ckbox"><input checked type="checkbox"><span>System Updated</span></label>
					<span class="ml-auto">
						<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top">
					<label class="ckbox"><input type="checkbox"><span>Do something more</span></label>
					<span class="ml-auto">
						<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top">
					<label class="ckbox"><input type="checkbox"><span>System Updated</span></label>
					<span class="ml-auto">
						<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top">
					<label class="ckbox"><input type="checkbox"><span>Find an Idea</span></label>
					<span class="ml-auto">
						<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Delete"></i>
					</span>
				</div>
				<div class="d-flex p-3 border-top mb-0">
					<label class="ckbox"><input type="checkbox"><span>Project review</span></label>
					<span class="ml-auto">
						<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Edit"></i>
						<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top"
							data-original-title="Delete"></i>
					</span>
				</div>
				<h5>Overview</h5>
				<div class="p-4">
					<div class="main-traffic-detail-item">
						<div>
							<span>Founder &amp; CEO</span> <span>24</span>
						</div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20"
								class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
						</div><!-- progress -->
					</div>
					<div class="main-traffic-detail-item">
						<div>
							<span>UX Designer</span> <span>1</span>
						</div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15"
								class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
						</div><!-- progress -->
					</div>
					<div class="main-traffic-detail-item">
						<div>
							<span>Recruitment</span> <span>87</span>
						</div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45"
								class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
						</div><!-- progress -->
					</div>
					<div class="main-traffic-detail-item">
						<div>
							<span>Software Engineer</span> <span>32</span>
						</div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25"
								class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
						</div><!-- progress -->
					</div>
					<div class="main-traffic-detail-item">
						<div>
							<span>Project Manager</span> <span>32</span>
						</div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25"
								class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
						</div><!-- progress -->
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End Sidebar -->

    </div>
    	<!-- Back-to-top -->
	<a href="#top" id="back-to-top"><i class="fa fa-arrow-up"></i></a>

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


</body>

</html>
