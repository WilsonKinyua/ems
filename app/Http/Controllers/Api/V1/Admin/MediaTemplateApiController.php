<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreMediaTemplateRequest;
use App\Http\Requests\UpdateMediaTemplateRequest;
use App\Http\Resources\Admin\MediaTemplateResource;
use App\Models\MediaTemplate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MediaTemplateApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('media_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MediaTemplateResource(MediaTemplate::with(['created_by'])->get());
    }

    public function store(StoreMediaTemplateRequest $request)
    {
        $mediaTemplate = MediaTemplate::create($request->all());

        return (new MediaTemplateResource($mediaTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(MediaTemplate $mediaTemplate)
    {
        abort_if(Gate::denies('media_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MediaTemplateResource($mediaTemplate->load(['created_by']));
    }

    public function update(UpdateMediaTemplateRequest $request, MediaTemplate $mediaTemplate)
    {
        $mediaTemplate->update($request->all());

        return (new MediaTemplateResource($mediaTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(MediaTemplate $mediaTemplate)
    {
        abort_if(Gate::denies('media_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mediaTemplate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
