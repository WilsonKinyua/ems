@extends('layout.admin')

@section('title')
      Media List - {{ trans('panel.site_title') }}
@endsection

@section('content')


<div class="layout-px-spacing">

    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
             <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-1">
                    <h1 class="main-content-title tx-30">Media List</h1>
                </div>
            </div>
        </div>
    </div>
    @can('media_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success btn-lg" href="{{ route('admin.media.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.media.title_singular') }}
                </a>
                <button class="btn btn-warning btn-lg" data-toggle="modal" data-target="#csvImportModal">
                    {{ trans('global.app_csvImport') }}
                </button>
                @include('csvImport.modal', ['model' => 'Medias', 'route' => 'admin.media.parseCsvImport'])
                <a class="btn btn-success btn-lg" href="{{ route('admin.media-templates.create') }}">
                    Create {{ trans('cruds.mediaTemplate.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="widget-content widget-content-area br-6">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="multi-table table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="10">

                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.id') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.name') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.phone') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.email') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.postal_address') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.city') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.media.fields.country') }}
                                            </th>
                                            <th>
                                                &nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($media as $key => $medium)
                                            <tr data-entry-id="{{ $medium->id }}">
                                                <td>

                                                </td>
                                                <td>
                                                    {{ $medium->id ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $medium->name ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $medium->phone ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $medium->email ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $medium->postal_address ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $medium->city ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $medium->country ?? '' }}
                                                </td>
                                                <td>
                                                    @can('media_show')
                                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.media.show', $medium->id) }}">
                                                            {{ trans('global.view') }}
                                                        </a>
                                                    @endcan

                                                    @can('media_edit')
                                                        <a class="btn btn-xs btn-info" href="{{ route('admin.media.edit', $medium->id) }}">
                                                            {{ trans('global.edit') }}
                                                        </a>
                                                    @endcan

                                                    @can('media_delete')
                                                        <form action="{{ route('admin.media.destroy', $medium->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                        </form>
                                                    @endcan

                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@parent
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
