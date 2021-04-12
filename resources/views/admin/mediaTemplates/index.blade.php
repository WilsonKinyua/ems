@extends('layouts.admin')
@section('content')
@can('media_template_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.media-templates.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.mediaTemplate.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.mediaTemplate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-MediaTemplate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.subject') }}
                        </th>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.ref') }}
                        </th>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.signature') }}
                        </th>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.company_organisation') }}
                        </th>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.phone_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.mediaTemplate.fields.website_link') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mediaTemplates as $key => $mediaTemplate)
                        <tr data-entry-id="{{ $mediaTemplate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $mediaTemplate->id ?? '' }}
                            </td>
                            <td>
                                {{ $mediaTemplate->subject ?? '' }}
                            </td>
                            <td>
                                {{ $mediaTemplate->logo ?? '' }}
                            </td>
                            <td>
                                {{ $mediaTemplate->date ?? '' }}
                            </td>
                            <td>
                                {{ $mediaTemplate->ref ?? '' }}
                            </td>
                            <td>
                                {{ $mediaTemplate->signature ?? '' }}
                            </td>
                            <td>
                                {{ $mediaTemplate->name ?? '' }}
                            </td>
                            <td>
                                {{ $mediaTemplate->company_organisation ?? '' }}
                            </td>
                            <td>
                                {{ $mediaTemplate->phone_number ?? '' }}
                            </td>
                            <td>
                                {{ $mediaTemplate->email ?? '' }}
                            </td>
                            <td>
                                {{ $mediaTemplate->website_link ?? '' }}
                            </td>
                            <td>
                                @can('media_template_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.media-templates.show', $mediaTemplate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('media_template_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.media-templates.edit', $mediaTemplate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('media_template_delete')
                                    <form action="{{ route('admin.media-templates.destroy', $mediaTemplate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('media_template_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.media-templates.massDestroy') }}",
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
  let table = $('.datatable-MediaTemplate:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection