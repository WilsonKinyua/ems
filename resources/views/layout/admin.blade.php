<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="author" content="Developer">
	<meta name="keywords" content="">
    <meta name="description" content="@yield('description')">
   	<!-- Title -->
    <title>
        @yield("title")
    </title>
    <!-- Favicon -->
	<link rel="icon" href="{{ asset('asset/img/favicon.ico')}}" type="image/x-icon" />

    <link href="{{ asset('assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/js/loader.js')}}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
   <link href="{{ asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
   <!-- Select2 css -->
	<link href="{{ asset('asset/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
   <!--  END CUSTOM STYLE FILE  -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/custom_dt_multiple_tables.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- END PAGE LEVEL STYLES -->
    {{-- ckeditor --}}
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    {{-- toastr --}}
    <link rel="stylesheet" href="{{ asset('asset/plugins/toastr.min.css')}}">
    <!-- toastr -->
    <link href="{{ asset('plugins/notification/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
    {{-- datapicker --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    {{-- custom styles --}}
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    @yield('styles')
</head>

<body>

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

     <!--  BEGIN NAVBAR  -->
     @include('partials.navbar')
     <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

     <!--  BEGIN SIDEBAR  -->
     @include('partials.sidebar')
     <!--  END SIDEBAR  -->
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">

        @yield('content')

        {{-- <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="#">Wezaprosoft</a>, All
                    rights reserved.</p>
            </div>
        </div> --}}
    </div>
    <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{ asset('assets/js/dashboard/dash_2.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('assets/js/scrollspyNav.js')}}"></script>
    <script src="{{ asset('plugins/select2/select2.min.js')}}"></script>
    <script src="{{ asset('plugins/select2/custom-select2.js')}}"></script>
    <script src="{{ asset('plugins/highlight/highlight.pack.js')}}"></script>
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="{{ asset('plugins/table/datatable/datatables.js')}}"></script>
   	<!-- Select2 js-->
    <!-- toastr -->
    {{-- notification --}}
    <script src="{{ asset('asset/plugins/toastr.min.js')}}"></script>

    <script src="{{ asset('plugins/notification/snackbar/snackbar.min.js')}}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('assets/js/components/notification/custom-snackbar.js')}}"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->

    <script>
        // Get the Toast button
        var toastButton = document.getElementById("toast-btn");
        // Get the Toast element
        var toastElement = document.getElementsByClassName("toast")[0];

        toastButton.onclick = function() {
            $('.toast').toast('show');
        }
    </script>

	<script src="{{ asset('asset/plugins/select2/js/select2.min.js')}}"></script>
	<script src="{{ asset('asset/js/select2.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    {{-- date picker --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        flatpickr('#basicFlatpickr', {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "d-m-Y",
        });
    </script>
    @yield('scripts')
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
