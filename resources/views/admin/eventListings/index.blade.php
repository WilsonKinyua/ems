@extends('layouts.admin')
@section('content')
@can('event_listing_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.event-listings.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.eventListing.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.eventListing.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-EventListing">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.event_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.event_category') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.language') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.photo') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.event_start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.event_end_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.eventsponsors') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.location') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.facebook_link') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.twitter_link') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.linkedin') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.google_link') }}
                        </th>
                        <th>
                            {{ trans('cruds.eventListing.fields.youtube_link') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($eventListings as $key => $eventListing)
                        <tr data-entry-id="{{ $eventListing->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $eventListing->id ?? '' }}
                            </td>
                            <td>
                                {{ $eventListing->event_name ?? '' }}
                            </td>
                            <td>
                                {{ $eventListing->event_category->title ?? '' }}
                            </td>
                            <td>
                                {{ $eventListing->language ?? '' }}
                            </td>
                            <td>
                                @if($eventListing->photo)
                                    <a href="{{ $eventListing->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $eventListing->photo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $eventListing->event_start_date ?? '' }}
                            </td>
                            <td>
                                {{ $eventListing->event_end_date ?? '' }}
                            </td>
                            <td>
                                {{ $eventListing->eventsponsors ?? '' }}
                            </td>
                            <td>
                                {{ $eventListing->location ?? '' }}
                            </td>
                            <td>
                                {{ $eventListing->facebook_link ?? '' }}
                            </td>
                            <td>
                                {{ $eventListing->twitter_link ?? '' }}
                            </td>
                            <td>
                                {{ $eventListing->linkedin ?? '' }}
                            </td>
                            <td>
                                {{ $eventListing->google_link ?? '' }}
                            </td>
                            <td>
                                {{ $eventListing->youtube_link ?? '' }}
                            </td>
                            <td>
                                @can('event_listing_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.event-listings.show', $eventListing->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('event_listing_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.event-listings.edit', $eventListing->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('event_listing_delete')
                                    <form action="{{ route('admin.event-listings.destroy', $eventListing->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('event_listing_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.event-listings.massDestroy') }}",
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
  let table = $('.datatable-EventListing:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection