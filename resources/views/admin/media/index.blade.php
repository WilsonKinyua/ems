@extends('layouts.admin')
@section('content')
@can('medium_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.media.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.medium.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Medium', 'route' => 'admin.media.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.medium.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Medium">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.medium.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.medium.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.medium.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.medium.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.medium.fields.postal_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.medium.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.medium.fields.country') }}
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
                                @can('medium_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.media.show', $medium->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('medium_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.media.edit', $medium->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('medium_delete')
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



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('medium_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.media.massDestroy') }}",
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
  let table = $('.datatable-Medium:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection