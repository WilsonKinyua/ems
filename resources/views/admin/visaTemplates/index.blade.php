@extends('layouts.admin')
@section('content')
@can('visa_template_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.visa-templates.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.visaTemplate.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.visaTemplate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-VisaTemplate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.subject') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.ref') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.signature') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.company_organisation') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.phone_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.visaTemplate.fields.website_link') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($visaTemplates as $key => $visaTemplate)
                        <tr data-entry-id="{{ $visaTemplate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $visaTemplate->id ?? '' }}
                            </td>
                            <td>
                                {{ $visaTemplate->subject ?? '' }}
                            </td>
                            <td>
                                {{ $visaTemplate->logo ?? '' }}
                            </td>
                            <td>
                                {{ $visaTemplate->date ?? '' }}
                            </td>
                            <td>
                                {{ $visaTemplate->ref ?? '' }}
                            </td>
                            <td>
                                {{ $visaTemplate->signature ?? '' }}
                            </td>
                            <td>
                                {{ $visaTemplate->name ?? '' }}
                            </td>
                            <td>
                                {{ $visaTemplate->company_organisation ?? '' }}
                            </td>
                            <td>
                                {{ $visaTemplate->phone_number ?? '' }}
                            </td>
                            <td>
                                {{ $visaTemplate->email ?? '' }}
                            </td>
                            <td>
                                {{ $visaTemplate->website_link ?? '' }}
                            </td>
                            <td>
                                @can('visa_template_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.visa-templates.show', $visaTemplate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('visa_template_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.visa-templates.edit', $visaTemplate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('visa_template_delete')
                                    <form action="{{ route('admin.visa-templates.destroy', $visaTemplate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('visa_template_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.visa-templates.massDestroy') }}",
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
  let table = $('.datatable-VisaTemplate:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection