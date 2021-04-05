@extends('layouts.admin')
@section('content')
@can('speaker_template_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.speaker-templates.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.speakerTemplate.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.speakerTemplate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-SpeakerTemplate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.subject') }}
                        </th>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.ref') }}
                        </th>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.signature') }}
                        </th>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.company_organisation') }}
                        </th>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.phone_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.speakerTemplate.fields.website_link') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($speakerTemplates as $key => $speakerTemplate)
                        <tr data-entry-id="{{ $speakerTemplate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $speakerTemplate->id ?? '' }}
                            </td>
                            <td>
                                {{ $speakerTemplate->subject ?? '' }}
                            </td>
                            <td>
                                {{ $speakerTemplate->logo ?? '' }}
                            </td>
                            <td>
                                {{ $speakerTemplate->date ?? '' }}
                            </td>
                            <td>
                                {{ $speakerTemplate->ref ?? '' }}
                            </td>
                            <td>
                                {{ $speakerTemplate->signature ?? '' }}
                            </td>
                            <td>
                                {{ $speakerTemplate->name ?? '' }}
                            </td>
                            <td>
                                {{ $speakerTemplate->company_organisation ?? '' }}
                            </td>
                            <td>
                                {{ $speakerTemplate->phone_number ?? '' }}
                            </td>
                            <td>
                                {{ $speakerTemplate->email ?? '' }}
                            </td>
                            <td>
                                {{ $speakerTemplate->website_link ?? '' }}
                            </td>
                            <td>
                                @can('speaker_template_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.speaker-templates.show', $speakerTemplate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('speaker_template_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.speaker-templates.edit', $speakerTemplate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('speaker_template_delete')
                                    <form action="{{ route('admin.speaker-templates.destroy', $speakerTemplate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('speaker_template_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.speaker-templates.massDestroy') }}",
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
  let table = $('.datatable-SpeakerTemplate:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection