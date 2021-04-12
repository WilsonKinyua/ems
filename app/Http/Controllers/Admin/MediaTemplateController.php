<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMediaTemplateRequest;
use App\Http\Requests\StoreMediaTemplateRequest;
use App\Http\Requests\UpdateMediaTemplateRequest;
use App\Models\MediaTemplate;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MediaTemplateController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('media_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mediaTemplates = MediaTemplate::with(['created_by'])->get();

        return view('admin.mediaTemplates.index', compact('mediaTemplates'));
    }

    public function create()
    {
        abort_if(Gate::denies('media_template_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mediaTemplates.create');
    }

    public function store(StoreMediaTemplateRequest $request)
    {
        $mediaTemplate = MediaTemplate::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $mediaTemplate->id]);
        }

        return redirect()->route('admin.media-templates.index');
    }

    public function edit(MediaTemplate $mediaTemplate)
    {
        abort_if(Gate::denies('media_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mediaTemplate->load('created_by');

        return view('admin.mediaTemplates.edit', compact('mediaTemplate'));
    }

    public function update(UpdateMediaTemplateRequest $request, MediaTemplate $mediaTemplate)
    {
        $mediaTemplate->update($request->all());

        return redirect()->route('admin.media-templates.index');
    }

    public function show(MediaTemplate $mediaTemplate)
    {
        abort_if(Gate::denies('media_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mediaTemplate->load('created_by');

        return view('admin.mediaTemplates.show', compact('mediaTemplate'));
    }

    public function destroy(MediaTemplate $mediaTemplate)
    {
        abort_if(Gate::denies('media_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mediaTemplate->delete();

        return back();
    }

    public function massDestroy(MassDestroyMediaTemplateRequest $request)
    {
        MediaTemplate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('media_template_create') && Gate::denies('media_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new MediaTemplate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
