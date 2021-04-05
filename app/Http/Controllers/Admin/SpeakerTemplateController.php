<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySpeakerTemplateRequest;
use App\Http\Requests\StoreSpeakerTemplateRequest;
use App\Http\Requests\UpdateSpeakerTemplateRequest;
use App\Models\SpeakerTemplate;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SpeakerTemplateController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('speaker_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speakerTemplates = SpeakerTemplate::with(['created_by'])->get();

        return view('admin.speakerTemplates.index', compact('speakerTemplates'));
    }

    public function create()
    {
        abort_if(Gate::denies('speaker_template_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.speakerTemplates.create');
    }

    public function store(StoreSpeakerTemplateRequest $request)
    {
        $speakerTemplate = SpeakerTemplate::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $speakerTemplate->id]);
        }

        return redirect()->route('admin.speaker-templates.index');
    }

    public function edit(SpeakerTemplate $speakerTemplate)
    {
        abort_if(Gate::denies('speaker_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speakerTemplate->load('created_by');

        return view('admin.speakerTemplates.edit', compact('speakerTemplate'));
    }

    public function update(UpdateSpeakerTemplateRequest $request, SpeakerTemplate $speakerTemplate)
    {
        $speakerTemplate->update($request->all());

        return redirect()->route('admin.speaker-templates.index');
    }

    public function show(SpeakerTemplate $speakerTemplate)
    {
        abort_if(Gate::denies('speaker_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speakerTemplate->load('created_by');

        return view('admin.speakerTemplates.show', compact('speakerTemplate'));
    }

    public function destroy(SpeakerTemplate $speakerTemplate)
    {
        abort_if(Gate::denies('speaker_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speakerTemplate->delete();

        return back();
    }

    public function massDestroy(MassDestroySpeakerTemplateRequest $request)
    {
        SpeakerTemplate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('speaker_template_create') && Gate::denies('speaker_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new SpeakerTemplate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
