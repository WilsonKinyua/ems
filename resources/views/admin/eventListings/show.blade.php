@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.eventListing.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.event-listings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.id') }}
                        </th>
                        <td>
                            {{ $eventListing->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.event_name') }}
                        </th>
                        <td>
                            {{ $eventListing->event_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.event_description') }}
                        </th>
                        <td>
                            {!! $eventListing->event_description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.event_category') }}
                        </th>
                        <td>
                            {{ $eventListing->event_category->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.language') }}
                        </th>
                        <td>
                            {{ $eventListing->language }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.photo') }}
                        </th>
                        <td>
                            @if($eventListing->photo)
                                <a href="{{ $eventListing->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $eventListing->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.event_start_date') }}
                        </th>
                        <td>
                            {{ $eventListing->event_start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.event_end_date') }}
                        </th>
                        <td>
                            {{ $eventListing->event_end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.eventsponsors') }}
                        </th>
                        <td>
                            {{ $eventListing->eventsponsors }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.location') }}
                        </th>
                        <td>
                            {{ $eventListing->location }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.facebook_link') }}
                        </th>
                        <td>
                            {{ $eventListing->facebook_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.twitter_link') }}
                        </th>
                        <td>
                            {{ $eventListing->twitter_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.linkedin') }}
                        </th>
                        <td>
                            {{ $eventListing->linkedin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.google_link') }}
                        </th>
                        <td>
                            {{ $eventListing->google_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.eventListing.fields.youtube_link') }}
                        </th>
                        <td>
                            {{ $eventListing->youtube_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.event-listings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection