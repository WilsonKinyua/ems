<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyVisaTemplateRequest;
use App\Http\Requests\StoreVisaTemplateRequest;
use App\Http\Requests\UpdateVisaTemplateRequest;
use App\Models\VisaTemplate;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class VisaTemplateController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('visa_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visaTemplates = VisaTemplate::with(['created_by'])->get();

        return view('admin.visaTemplates.index', compact('visaTemplates'));
    }

    public function create()
    {
        abort_if(Gate::denies('visa_template_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.visaTemplates.create');
    }

    public function store(StoreVisaTemplateRequest $request)
    {
        $visaTemplate = VisaTemplate::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $visaTemplate->id]);
        }

        return redirect()->route('admin.visa-templates.index');
    }

    public function edit(VisaTemplate $visaTemplate)
    {
        abort_if(Gate::denies('visa_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visaTemplate->load('created_by');

        return view('admin.visaTemplates.edit', compact('visaTemplate'));
    }

    public function update(UpdateVisaTemplateRequest $request, VisaTemplate $visaTemplate)
    {
        $visaTemplate->update($request->all());

        return redirect()->route('admin.visa-templates.index');
    }

    public function show(VisaTemplate $visaTemplate)
    {
        abort_if(Gate::denies('visa_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visaTemplate->load('created_by');

        return view('admin.visaTemplates.show', compact('visaTemplate'));
    }

    public function destroy(VisaTemplate $visaTemplate)
    {
        abort_if(Gate::denies('visa_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visaTemplate->delete();

        return back();
    }

    public function massDestroy(MassDestroyVisaTemplateRequest $request)
    {
        VisaTemplate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('visa_template_create') && Gate::denies('visa_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new VisaTemplate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
