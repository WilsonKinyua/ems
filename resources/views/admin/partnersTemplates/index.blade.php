@extends('layouts.admin')
@section('content')
@can('partners_template_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.partners-templates.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.partnersTemplate.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.partnersTemplate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-PartnersTemplate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.subject') }}
                        </th>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.ref') }}
                        </th>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.signature') }}
                        </th>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.company_organisation') }}
                        </th>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.phone_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.partnersTemplate.fields.website_link') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($partnersTemplates as $key => $partnersTemplate)
                        <tr data-entry-id="{{ $partnersTemplate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $partnersTemplate->id ?? '' }}
                            </td>
                            <td>
                                {{ $partnersTemplate->subject ?? '' }}
                            </td>
                            <td>
                                {{ $partnersTemplate->logo ?? '' }}
                            </td>
                            <td>
                                {{ $partnersTemplate->date ?? '' }}
                            </td>
                            <td>
                                {{ $partnersTemplate->ref ?? '' }}
                            </td>
                            <td>
                                {{ $partnersTemplate->signature ?? '' }}
                            </td>
                            <td>
                                {{ $partnersTemplate->name ?? '' }}
                            </td>
                            <td>
                                {{ $partnersTemplate->company_organisation ?? '' }}
                            </td>
                            <td>
                                {{ $partnersTemplate->phone_number ?? '' }}
                            </td>
                            <td>
                                {{ $partnersTemplate->email ?? '' }}
                            </td>
                            <td>
                                {{ $partnersTemplate->website_link ?? '' }}
                            </td>
                            <td>
                                @can('partners_template_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.partners-templates.show', $partnersTemplate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('partners_template_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.partners-templates.edit', $partnersTemplate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('partners_template_delete')
                                    <form action="{{ route('admin.partners-templates.destroy', $partnersTemplate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('partners_template_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.partners-templates.massDestroy') }}",
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
  let table = $('.datatable-PartnersTemplate:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection