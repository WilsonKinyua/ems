<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreVisaTemplateRequest;
use App\Http\Requests\UpdateVisaTemplateRequest;
use App\Http\Resources\Admin\VisaTemplateResource;
use App\Models\VisaTemplate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisaTemplateApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('visa_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VisaTemplateResource(VisaTemplate::with(['created_by'])->get());
    }

    public function store(StoreVisaTemplateRequest $request)
    {
        $visaTemplate = VisaTemplate::create($request->all());

        return (new VisaTemplateResource($visaTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(VisaTemplate $visaTemplate)
    {
        abort_if(Gate::denies('visa_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VisaTemplateResource($visaTemplate->load(['created_by']));
    }

    public function update(UpdateVisaTemplateRequest $request, VisaTemplate $visaTemplate)
    {
        $visaTemplate->update($request->all());

        return (new VisaTemplateResource($visaTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(VisaTemplate $visaTemplate)
    {
        abort_if(Gate::denies('visa_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visaTemplate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
