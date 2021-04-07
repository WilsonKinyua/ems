<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreGuestOfHonorTemplateRequest;
use App\Http\Requests\UpdateGuestOfHonorTemplateRequest;
use App\Http\Resources\Admin\GuestOfHonorTemplateResource;
use App\Models\GuestOfHonorTemplate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestOfHonorTemplateApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('guest_of_honor_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new GuestOfHonorTemplateResource(GuestOfHonorTemplate::with(['created_by'])->get());
    }

    public function store(StoreGuestOfHonorTemplateRequest $request)
    {
        $guestOfHonorTemplate = GuestOfHonorTemplate::create($request->all());

        return (new GuestOfHonorTemplateResource($guestOfHonorTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(GuestOfHonorTemplate $guestOfHonorTemplate)
    {
        abort_if(Gate::denies('guest_of_honor_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new GuestOfHonorTemplateResource($guestOfHonorTemplate->load(['created_by']));
    }

    public function update(UpdateGuestOfHonorTemplateRequest $request, GuestOfHonorTemplate $guestOfHonorTemplate)
    {
        $guestOfHonorTemplate->update($request->all());

        return (new GuestOfHonorTemplateResource($guestOfHonorTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(GuestOfHonorTemplate $guestOfHonorTemplate)
    {
        abort_if(Gate::denies('guest_of_honor_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guestOfHonorTemplate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
