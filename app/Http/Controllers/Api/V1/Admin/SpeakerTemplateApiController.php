<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreSpeakerTemplateRequest;
use App\Http\Requests\UpdateSpeakerTemplateRequest;
use App\Http\Resources\Admin\SpeakerTemplateResource;
use App\Models\SpeakerTemplate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SpeakerTemplateApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('speaker_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SpeakerTemplateResource(SpeakerTemplate::with(['created_by'])->get());
    }

    public function store(StoreSpeakerTemplateRequest $request)
    {
        $speakerTemplate = SpeakerTemplate::create($request->all());

        return (new SpeakerTemplateResource($speakerTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(SpeakerTemplate $speakerTemplate)
    {
        abort_if(Gate::denies('speaker_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SpeakerTemplateResource($speakerTemplate->load(['created_by']));
    }

    public function update(UpdateSpeakerTemplateRequest $request, SpeakerTemplate $speakerTemplate)
    {
        $speakerTemplate->update($request->all());

        return (new SpeakerTemplateResource($speakerTemplate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(SpeakerTemplate $speakerTemplate)
    {
        abort_if(Gate::denies('speaker_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speakerTemplate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
