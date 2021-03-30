@extends('layouts.admin')
@section('content')
@can('sponsor_template_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.sponsor-templates.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.sponsorTemplate.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.sponsorTemplate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-SponsorTemplate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.subject') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.ref') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.signature') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.company_organisation') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.phone_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.sponsorTemplate.fields.website_link') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sponsorTemplates as $key => $sponsorTemplate)
                        <tr data-entry-id="{{ $sponsorTemplate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $sponsorTemplate->id ?? '' }}
                            </td>
                            <td>
                                {{ $sponsorTemplate->subject ?? '' }}
                            </td>
                            <td>
                                {{ $sponsorTemplate->logo ?? '' }}
                            </td>
                            <td>
                                {{ $sponsorTemplate->date ?? '' }}
                            </td>
                            <td>
                                {{ $sponsorTemplate->ref ?? '' }}
                            </td>
                            <td>
                                {{ $sponsorTemplate->signature ?? '' }}
                            </td>
                            <td>
                                {{ $sponsorTemplate->name ?? '' }}
                            </td>
                            <td>
                                {{ $sponsorTemplate->company_organisation ?? '' }}
                            </td>
                            <td>
                                {{ $sponsorTemplate->phone_number ?? '' }}
                            </td>
                            <td>
                                {{ $sponsorTemplate->email ?? '' }}
                            </td>
                            <td>
                                {{ $sponsorTemplate->website_link ?? '' }}
                            </td>
                            <td>
                                @can('sponsor_template_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.sponsor-templates.show', $sponsorTemplate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('sponsor_template_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.sponsor-templates.edit', $sponsorTemplate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('sponsor_template_delete')
                                    <form action="{{ route('admin.sponsor-templates.destroy', $sponsorTemplate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('sponsor_template_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.sponsor-templates.massDestroy') }}",
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
  let table = $('.datatable-SponsorTemplate:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection