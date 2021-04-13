@extends('layouts.theme')

@section('title')
    Create Visa - {{ trans('panel.site_title') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Visa</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
        </div>
        @can('visa_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('admin.visas.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.visa.title_singular') }}
                    </a>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                        {{ trans('global.app_csvImport') }}
                    </button>
                    @include('csvImport.modal', ['model' => 'Visa', 'route' => 'admin.visas.parseCsvImport'])
                    <a class="btn btn-success" href="{{ route('admin.visa-templates.create') }}">
                        Compose Email
                    </a>
                </div>
            </div>
        @endcan
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Visa">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.visa.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.visa.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.visa.fields.phone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.visa.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.visa.fields.postal_address') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.visa.fields.city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.visa.fields.country') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($visas as $key => $visa)
                                    <tr data-entry-id="{{ $visa->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $visa->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $visa->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $visa->phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $visa->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $visa->postal_address ?? '' }}
                                        </td>
                                        <td>
                                            {{ $visa->city ?? '' }}
                                        </td>
                                        <td>
                                            {{ $visa->country ?? '' }}
                                        </td>
                                        <td>
                                            @can('visa_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.visas.show', $visa->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('visa_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.visas.edit', $visa->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('visa_delete')
                                                <form action="{{ route('admin.visas.destroy', $visa->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('visa_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.visas.massDestroy') }}",
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
  let table = $('.datatable-Visa:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
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
