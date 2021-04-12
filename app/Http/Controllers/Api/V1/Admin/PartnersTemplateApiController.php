<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StorePartnersTemplateRequest;
use App\Http\Requests\UpdatePartnersTemplateRequest;
use App\Http\Resources\Admin\PartnersTemplateResource;
use App\Models\PartnersTemplate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PartnersTemplateApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('partners_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PartnersTemplateResource(PartnersTemplate::with(['created_by'])->get());
    }

    public function store(StorePartnersTemplateRequest $request)
    {
        $partnersTemplate = PartnersTemplate::create($request->all());

        return (new PartnersTemplateResource($partnersTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(PartnersTemplate $partnersTemplate)
    {
        abort_if(Gate::denies('partners_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PartnersTemplateResource($partnersTemplate->load(['created_by']));
    }

    public function update(UpdatePartnersTemplateRequest $request, PartnersTemplate $partnersTemplate)
    {
        $partnersTemplate->update($request->all());

        return (new PartnersTemplateResource($partnersTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(PartnersTemplate $partnersTemplate)
    {
        abort_if(Gate::denies('partners_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partnersTemplate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
