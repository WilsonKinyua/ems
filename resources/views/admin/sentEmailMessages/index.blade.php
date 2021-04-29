@extends('layouts.admin')
@section('content')
@can('sent_email_message_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.sent-email-messages.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.sentEmailMessage.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.sentEmailMessage.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-SentEmailMessage">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.sent_to_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.sent_to_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.subject') }}
                        </th>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.message') }}
                        </th>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.token') }}
                        </th>
                        <th>
                            {{ trans('cruds.sentEmailMessage.fields.read') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sentEmailMessages as $key => $sentEmailMessage)
                        <tr data-entry-id="{{ $sentEmailMessage->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $sentEmailMessage->id ?? '' }}
                            </td>
                            <td>
                                {{ $sentEmailMessage->sent_to_name ?? '' }}
                            </td>
                            <td>
                                {{ $sentEmailMessage->sent_to_email ?? '' }}
                            </td>
                            <td>
                                {{ $sentEmailMessage->subject ?? '' }}
                            </td>
                            <td>
                                {{ $sentEmailMessage->message ?? '' }}
                            </td>
                            <td>
                                {{ $sentEmailMessage->token ?? '' }}
                            </td>
                            <td>
                                {{ $sentEmailMessage->read ?? '' }}
                            </td>
                            <td>
                                @can('sent_email_message_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.sent-email-messages.show', $sentEmailMessage->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('sent_email_message_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.sent-email-messages.edit', $sentEmailMessage->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('sent_email_message_delete')
                                    <form action="{{ route('admin.sent-email-messages.destroy', $sentEmailMessage->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('sent_email_message_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.sent-email-messages.massDestroy') }}",
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
  let table = $('.datatable-SentEmailMessage:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection