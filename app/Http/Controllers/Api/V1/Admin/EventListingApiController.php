<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreEventListingRequest;
use App\Http\Requests\UpdateEventListingRequest;
use App\Http\Resources\Admin\EventListingResource;
use App\Models\EventListing;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventListingApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('event_listing_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EventListingResource(EventListing::with(['event_category'])->get());
    }

    public function store(StoreEventListingRequest $request)
    {
        $eventListing = EventListing::create($request->all());

        if ($request->input('photo', false)) {
            $eventListing->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        return (new EventListingResource($eventListing))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EventListing $eventListing)
    {
        abort_if(Gate::denies('event_listing_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EventListingResource($eventListing->load(['event_category']));
    }

    public function update(UpdateEventListingRequest $request, EventListing $eventListing)
    {
        $eventListing->update($request->all());

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

        return (new EventListingResource($eventListing))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EventListing $eventListing)
    {
        abort_if(Gate::denies('event_listing_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $eventListing->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
