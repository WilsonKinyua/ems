@extends('layouts.theme')

@section('title')
      Customs List - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Customs</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Customs List</li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->
        @can('custom_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('admin.customs.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.custom.title_singular') }}
                    </a>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                        {{ trans('global.app_csvImport') }}
                    </button>
                    @include('csvImport.modal', ['model' => 'Custom', 'route' => 'admin.customs.parseCsvImport'])
                    <a class="btn btn-success" href="{{ route('admin.customs-templates.create') }}">
                       Compose Mail
                    </a>
                </div>
            </div>
        @endcan
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Custom">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.custom.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.custom.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.custom.fields.phone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.custom.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.custom.fields.postal_address') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.custom.fields.city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.custom.fields.country') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customs as $key => $custom)
                                    <tr data-entry-id="{{ $custom->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $custom->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $custom->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $custom->phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $custom->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $custom->postal_address ?? '' }}
                                        </td>
                                        <td>
                                            {{ $custom->city ?? '' }}
                                        </td>
                                        <td>
                                            {{ $custom->country ?? '' }}
                                        </td>
                                        <td>
                                            @can('custom_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.customs.show', $custom->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('custom_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.customs.edit', $custom->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('custom_delete')
                                                <form action="{{ route('admin.customs.destroy', $custom->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('custom_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.customs.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Custom:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
