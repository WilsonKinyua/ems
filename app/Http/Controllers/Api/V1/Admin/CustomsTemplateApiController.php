<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreCustomsTemplateRequest;
use App\Http\Requests\UpdateCustomsTemplateRequest;
use App\Http\Resources\Admin\CustomsTemplateResource;
use App\Models\CustomsTemplate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomsTemplateApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('customs_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CustomsTemplateResource(CustomsTemplate::with(['created_by'])->get());
    }

    public function store(StoreCustomsTemplateRequest $request)
    {
        $customsTemplate = CustomsTemplate::create($request->all());

        return (new CustomsTemplateResource($customsTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CustomsTemplate $customsTemplate)
    {
        abort_if(Gate::denies('customs_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CustomsTemplateResource($customsTemplate->load(['created_by']));
    }

    public function update(UpdateCustomsTemplateRequest $request, CustomsTemplate $customsTemplate)
    {
        $customsTemplate->update($request->all());

        return (new CustomsTemplateResource($customsTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CustomsTemplate $customsTemplate)
    {
        abort_if(Gate::denies('customs_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customsTemplate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
