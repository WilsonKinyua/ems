@extends('layout.admin')

@section('title')
      Delegates List - {{ trans('panel.site_title') }}
@endsection

@section('styles')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/custom_dt_multiple_tables.css')}}">
    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('content')


<div class="layout-px-spacing">

    <div class="row layout-top-spacing" id="cancel-row">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <table class="multi-table table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            {{-- <th width="10">

                            </th> --}}
                            <th>
                                {{ trans('cruds.delegate.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.title') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.firstname') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.lastname') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.secondname') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.email') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.company') }}
                            </th>
                            {{-- <th>
                                {{ trans('cruds.delegate.fields.citizenship') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.type_of_attendee') }}
                            </th>
                            <th>
                                {{ trans('cruds.delegate.fields.payment_status') }}
                            </th> --}}
                            <th class="text-center dt-no-sorting">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($delegates as $key => $delegate)
                        <tr data-entry-id="{{ $delegate->id }}">
                            {{-- <td>

                            </td> --}}
                            <td>
                                {{ $delegate->id ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->title ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->firstname ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->lastname ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->secondname ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->email ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->company ?? '' }}
                            </td>
                            {{-- <td>
                                {{ $delegate->citizenship ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->type_of_attendee ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->payment_status ?? '' }}
                            </td> --}}
                            <td>
                                @can('delegate_show')
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.delegates.show', $delegate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('delegate_edit')
                                    <a class="btn btn-sm btn-info" href="{{ route('admin.delegates.edit', $delegate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('delegate_delete')
                                    <form action="{{ route('admin.delegates.destroy', $delegate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Salary</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>

    </div>

</div>

@endsection


@section('scripts')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('plugins/table/datatable/datatables.js')}}"></script>
<script>
    $(document).ready(function () {
        $('table.multi-table').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function () {
                $('.t-dot').tooltip({ template: '<div class="tooltip status" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' })
                $('.dataTables_wrapper table').removeClass('table-striped');
            }
        });
    });
</script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    @if (session()->has('success'))
        toastr.success("{{session()->get('success')}}");
    @endif

    @if (session()->has('danger'))
        toastr.warning("{{session()->get('danger')}}");
    @endif

    @if (session()->has('error'))
        toastr.error("{{session()->get('error')}}");
    @endif
</script>
@endsection
