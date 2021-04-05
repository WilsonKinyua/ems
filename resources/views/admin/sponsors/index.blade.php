@extends('layouts.theme')
@section('title')
       Sponsor List - {{ trans('panel.site_title') }}
@endsection
@section('content')

<div class="container-fluid">
    <div class="inner-body">

        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-1">
                <h1 class="main-content-title tx-30">Sponsor</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"> Sponsor List</li>
                </ol>
            </div>
        </div>
        <!-- End Page Header -->
        @can('sponsor_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('admin.sponsors.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.sponsor.title_singular') }}
                    </a>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                        {{ trans('global.app_csvImport') }}
                    </button>
                    @include('csvImport.modal', ['model' => 'Sponsor', 'route' => 'admin.sponsors.parseCsvImport'])
                    <a class="btn btn-secondary" href="{{ route("admin.sponsor-templates.create") }}">
                        Compose Mail
                    </a>
                </div>
            </div>
        @endcan
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-3">
                    <div class="table-responsive">
                        <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.phone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.postal_address') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.sponsor.fields.country') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sponsors as $key => $sponsor)
                                    <tr data-entry-id="{{ $sponsor->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $sponsor->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $sponsor->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $sponsor->phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $sponsor->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $sponsor->postal_address ?? '' }}
                                        </td>
                                        <td>
                                            {{ $sponsor->city ?? '' }}
                                        </td>
                                        <td>
                                            {{ $sponsor->country ?? '' }}
                                        </td>
                                        <td>
                                            @can('sponsor_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.sponsors.show', $sponsor->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('sponsor_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.sponsors.edit', $sponsor->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('sponsor_delete')
                                                <form action="{{ route('admin.sponsors.destroy', $sponsor->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
{{-- @can('sponsor_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.sponsors.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.sponsor.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Sponsor', 'route' => 'admin.sponsors.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.sponsor.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Sponsor">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.sponsor.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsor.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsor.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsor.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsor.fields.postal_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsor.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsor.fields.country') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sponsors as $key => $sponsor)
                        <tr data-entry-id="{{ $sponsor->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $sponsor->id ?? '' }}
                            </td>
                            <td>
                                {{ $sponsor->name ?? '' }}
                            </td>
                            <td>
                                {{ $sponsor->phone ?? '' }}
                            </td>
                            <td>
                                {{ $sponsor->email ?? '' }}
                            </td>
                            <td>
                                {{ $sponsor->postal_address ?? '' }}
                            </td>
                            <td>
                                {{ $sponsor->city ?? '' }}
                            </td>
                            <td>
                                {{ $sponsor->country ?? '' }}
                            </td>
                            <td>
                                @can('sponsor_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.sponsors.show', $sponsor->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('sponsor_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.sponsors.edit', $sponsor->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('sponsor_delete')
                                    <form action="{{ route('admin.sponsors.destroy', $sponsor->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
</div> --}}



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('sponsor_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.sponsors.massDestroy') }}",
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
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Sponsor:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
