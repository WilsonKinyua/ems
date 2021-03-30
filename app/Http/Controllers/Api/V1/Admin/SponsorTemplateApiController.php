<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreSponsorTemplateRequest;
use App\Http\Requests\UpdateSponsorTemplateRequest;
use App\Http\Resources\Admin\SponsorTemplateResource;
use App\Models\SponsorTemplate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SponsorTemplateApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('sponsor_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SponsorTemplateResource(SponsorTemplate::with(['created_by'])->get());
    }

    public function store(StoreSponsorTemplateRequest $request)
    {
        $sponsorTemplate = SponsorTemplate::create($request->all());

        return (new SponsorTemplateResource($sponsorTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(SponsorTemplate $sponsorTemplate)
    {
        abort_if(Gate::denies('sponsor_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SponsorTemplateResource($sponsorTemplate->load(['created_by']));
    }

    public function update(UpdateSponsorTemplateRequest $request, SponsorTemplate $sponsorTemplate)
    {
        $sponsorTemplate->update($request->all());

        return (new SponsorTemplateResource($sponsorTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(SponsorTemplate $sponsorTemplate)
    {
        abort_if(Gate::denies('sponsor_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sponsorTemplate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
