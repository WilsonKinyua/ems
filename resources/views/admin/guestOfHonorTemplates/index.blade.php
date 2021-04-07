@extends('layouts.admin')
@section('content')
@can('guest_of_honor_template_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.guest-of-honor-templates.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.guestOfHonorTemplate.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.guestOfHonorTemplate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-GuestOfHonorTemplate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.subject') }}
                        </th>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.ref') }}
                        </th>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.signature') }}
                        </th>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.company_organisation') }}
                        </th>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.phone_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.guestOfHonorTemplate.fields.website_link') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($guestOfHonorTemplates as $key => $guestOfHonorTemplate)
                        <tr data-entry-id="{{ $guestOfHonorTemplate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $guestOfHonorTemplate->id ?? '' }}
                            </td>
                            <td>
                                {{ $guestOfHonorTemplate->subject ?? '' }}
                            </td>
                            <td>
                                {{ $guestOfHonorTemplate->logo ?? '' }}
                            </td>
                            <td>
                                {{ $guestOfHonorTemplate->date ?? '' }}
                            </td>
                            <td>
                                {{ $guestOfHonorTemplate->ref ?? '' }}
                            </td>
                            <td>
                                {{ $guestOfHonorTemplate->signature ?? '' }}
                            </td>
                            <td>
                                {{ $guestOfHonorTemplate->name ?? '' }}
                            </td>
                            <td>
                                {{ $guestOfHonorTemplate->company_organisation ?? '' }}
                            </td>
                            <td>
                                {{ $guestOfHonorTemplate->phone_number ?? '' }}
                            </td>
                            <td>
                                {{ $guestOfHonorTemplate->email ?? '' }}
                            </td>
                            <td>
                                {{ $guestOfHonorTemplate->website_link ?? '' }}
                            </td>
                            <td>
                                @can('guest_of_honor_template_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.guest-of-honor-templates.show', $guestOfHonorTemplate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('guest_of_honor_template_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.guest-of-honor-templates.edit', $guestOfHonorTemplate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('guest_of_honor_template_delete')
                                    <form action="{{ route('admin.guest-of-honor-templates.destroy', $guestOfHonorTemplate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('guest_of_honor_template_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.guest-of-honor-templates.massDestroy') }}",
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
  let table = $('.datatable-GuestOfHonorTemplate:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection