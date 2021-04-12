<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPartnersTemplateRequest;
use App\Http\Requests\StorePartnersTemplateRequest;
use App\Http\Requests\UpdatePartnersTemplateRequest;
use App\Models\PartnersTemplate;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class PartnersTemplateController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('partners_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partnersTemplates = PartnersTemplate::with(['created_by'])->get();

        return view('admin.partnersTemplates.index', compact('partnersTemplates'));
    }

    public function create()
    {
        abort_if(Gate::denies('partners_template_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.partnersTemplates.create');
    }

    public function store(StorePartnersTemplateRequest $request)
    {
        $partnersTemplate = PartnersTemplate::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $partnersTemplate->id]);
        }

        return redirect()->route('admin.partners-templates.index');
    }

    public function edit(PartnersTemplate $partnersTemplate)
    {
        abort_if(Gate::denies('partners_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partnersTemplate->load('created_by');

        return view('admin.partnersTemplates.edit', compact('partnersTemplate'));
    }

    public function update(UpdatePartnersTemplateRequest $request, PartnersTemplate $partnersTemplate)
    {
        $partnersTemplate->update($request->all());

        return redirect()->route('admin.partners-templates.index');
    }

    public function show(PartnersTemplate $partnersTemplate)
    {
        abort_if(Gate::denies('partners_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partnersTemplate->load('created_by');

        return view('admin.partnersTemplates.show', compact('partnersTemplate'));
    }

    public function destroy(PartnersTemplate $partnersTemplate)
    {
        abort_if(Gate::denies('partners_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partnersTemplate->delete();

        return back();
    }

    public function massDestroy(MassDestroyPartnersTemplateRequest $request)
    {
        PartnersTemplate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('partners_template_create') && Gate::denies('partners_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new PartnersTemplate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
