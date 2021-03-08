<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEventListingRequest;
use App\Http\Requests\StoreEventListingRequest;
use App\Http\Requests\UpdateEventListingRequest;
use App\Models\EventCategory;
use App\Models\EventListing;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class EventListingController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('event_listing_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventListings = EventListing::with(['event_category', 'media'])->get();

        return view('admin.eventListings.index', compact('eventListings'));
    }

    public function create()
    {
        abort_if(Gate::denies('event_listing_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event_categories = EventCategory::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.eventListings.create', compact('event_categories'));
    }

    public function store(StoreEventListingRequest $request)
    {
        $eventListing = EventListing::create($request->validated());

        if ($request->input('photo', false)) {
            $eventListing->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $eventListing->id]);
        }

        return redirect()->route('admin.event-listings.index');
    }

    public function edit(EventListing $eventListing)
    {
        abort_if(Gate::denies('event_listing_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event_categories = EventCategory::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $eventListing->load('event_category');

        return view('admin.eventListings.edit', compact('event_categories', 'eventListing'));
    }

    public function update(UpdateEventListingRequest $request, EventListing $eventListing)
    {
        $eventListing->update($request->validated());

        if ($request->input('photo', false)) {
            if (!$eventListing->photo || $request->input('photo') !== $eventListing->photo->file_name) {
                if ($eventListing->photo) {
                    $eventListing->photo->delete();
                }

                $eventListing->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($eventListing->photo) {
            $eventListing->photo->delete();
        }

        return redirect()->route('admin.event-listings.index');
    }

    public function show(EventListing $eventListing)
    {
        abort_if(Gate::denies('event_listing_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventListing->load('event_category');

        return view('admin.eventListings.show', compact('eventListing'));
    }

    public function destroy(EventListing $eventListing)
    {
        abort_if(Gate::denies('event_listing_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventListing->delete();

        return back();
    }

    public function massDestroy(MassDestroyEventListingRequest $request)
    {
        EventListing::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('event_listing_create') && Gate::denies('event_listing_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new EventListing();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
