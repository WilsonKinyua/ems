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
                    <li class="breadcrumb-item active" aria-current="page">Sponsor List</li>
                </ol>
            </div>
        </div>

        @can('speaker_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route('admin.speakers.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.speaker.title_singular') }}
                    </a>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                        {{ trans('global.app_csvImport') }}
                    </button>
                    @include('csvImport.modal', ['model' => 'Speaker', 'route' => 'admin.speakers.parseCsvImport'])
                </div>
            </div>
        @endcan

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Speaker">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.speaker.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.speaker.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.speaker.fields.phone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.speaker.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.speaker.fields.postal_address') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.speaker.fields.city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.speaker.fields.country') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($speakers as $key => $speaker)
                                    <tr data-entry-id="{{ $speaker->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $speaker->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $speaker->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $speaker->phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $speaker->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $speaker->postal_address ?? '' }}
                                        </td>
                                        <td>
                                            {{ $speaker->city ?? '' }}
                                        </td>
                                        <td>
                                            {{ $speaker->country ?? '' }}
                                        </td>
                                        <td>
                                            @can('speaker_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.speakers.show', $speaker->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('speaker_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.speakers.edit', $speaker->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('speaker_delete')
                                                <form action="{{ route('admin.speakers.destroy', $speaker->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('speaker_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.speakers.massDestroy') }}",
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
  let table = $('.datatable-Speaker:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
