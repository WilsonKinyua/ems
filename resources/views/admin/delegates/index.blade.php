@extends('layouts.admin')
@section('content')
@can('delegate_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.delegates.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.delegate.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Delegate', 'route' => 'admin.delegates.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.delegate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Delegate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
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
                        <th>
                            {{ trans('cruds.delegate.fields.citizenship') }}
                        </th>
                        <th>
                            {{ trans('cruds.delegate.fields.type_of_attendee') }}
                        </th>
                        <th>
                            {{ trans('cruds.delegate.fields.payment_status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($delegates as $key => $delegate)
                        <tr data-entry-id="{{ $delegate->id }}">
                            <td>

                            </td>
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
                            <td>
                                {{ $delegate->citizenship ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->type_of_attendee ?? '' }}
                            </td>
                            <td>
                                {{ $delegate->payment_status ?? '' }}
                            </td>
                            <td>
                                @can('delegate_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.delegates.show', $delegate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('delegate_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.delegates.edit', $delegate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('delegate_delete')
                                    <form action="{{ route('admin.delegates.destroy', $delegate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('delegate_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.delegates.massDestroy') }}",
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
  let table = $('.datatable-Delegate:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection