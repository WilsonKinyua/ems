<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreExhibitorsTemplateRequest;
use App\Http\Requests\UpdateExhibitorsTemplateRequest;
use App\Http\Resources\Admin\ExhibitorsTemplateResource;
use App\Models\ExhibitorsTemplate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExhibitorsTemplateApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('exhibitors_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ExhibitorsTemplateResource(ExhibitorsTemplate::with(['created_by'])->get());
    }

    public function store(StoreExhibitorsTemplateRequest $request)
    {
        $exhibitorsTemplate = ExhibitorsTemplate::create($request->all());

        return (new ExhibitorsTemplateResource($exhibitorsTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ExhibitorsTemplate $exhibitorsTemplate)
    {
        abort_if(Gate::denies('exhibitors_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ExhibitorsTemplateResource($exhibitorsTemplate->load(['created_by']));
    }

    public function update(UpdateExhibitorsTemplateRequest $request, ExhibitorsTemplate $exhibitorsTemplate)
    {
        $exhibitorsTemplate->update($request->all());

        return (new ExhibitorsTemplateResource($exhibitorsTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ExhibitorsTemplate $exhibitorsTemplate)
    {
        abort_if(Gate::denies('exhibitors_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitorsTemplate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
