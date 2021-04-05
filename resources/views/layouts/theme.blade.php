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

    {{-- ckeditor --}}
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    {{-- toastr --}}
    <link rel="stylesheet" href="{{ asset('asset/plugins/toastr.min.css')}}">
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
                {{-- @if(session('message'))
                <div class="row mb-2">
                    <div class="col-lg-12">
                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                    </div>
                </div>
            @endif
            @if($errors->count() > 0)
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

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

    {{-- plugins --}}
    <script type="text/javascript" src="{{ asset('assets/scripts/main.js')}}"></script>

    {{-- notification --}}
    <script src="{{ asset('asset/plugins/toastr.min.js')}}"></script>
    @yield('scripts')
    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script> --}}
    {{-- <script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script> --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(function() {
  let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
  let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
  let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
  let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
  let printButtonTrans = '{{ trans('global.datatables.print') }}'
  let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'
  let selectAllButtonTrans = '{{ trans('global.select_all') }}'
  let selectNoneButtonTrans = '{{ trans('global.deselect_all') }}'

  let languages = {
    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
  };

  $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
      url: languages['{{ app()->getLocale() }}']
    },
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }, {
        orderable: false,
        searchable: false,
        targets: -1
    }],
    select: {
      style:    'multi+shift',
      selector: 'td:first-child'
    },
    order: [],
    scrollX: true,
    pageLength: 100,
    dom: 'lBfrtip<"actions">',
    buttons: [
      {
        extend: 'selectAll',
        className: 'btn-primary',
        text: selectAllButtonTrans,
        exportOptions: {
          columns: ':visible'
        },
        action: function(e, dt) {
          e.preventDefault()
          dt.rows().deselect();
          dt.rows({ search: 'applied' }).select();
        }
      },
      {
        extend: 'selectNone',
        className: 'btn-primary',
        text: selectNoneButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'copy',
        className: 'btn-default',
        text: copyButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'csv',
        className: 'btn-default',
        text: csvButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'excel',
        className: 'btn-default',
        text: excelButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'pdf',
        className: 'btn-default',
        text: pdfButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'print',
        className: 'btn-default',
        text: printButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'colvis',
        className: 'btn-default',
        text: colvisButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      }
    ]
  });

  $.fn.dataTable.ext.classes.sPageButton = '';
});

    </script>
    <script>
        $(document).ready(function () {
    $(".notifications-menu").on('click', function () {
        if (!$(this).hasClass('open')) {
            $('.notifications-menu .label-warning').hide();
            $.get('/admin/user-alerts/read');
        }
    });
});

        $('select').chosen({width: "300px"});
        $('.chosen-toggle').each(function(index) {
        console.log(index);
            $(this).on('click', function(){
            console.log($(this).parent().find('option').text());
                $(this).parent().find('option').prop('selected', $(this).hasClass('select')).parent().trigger('chosen:updated');
            });
        });

    </script>
</body>

</html>
@yield('modal')
