<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCustomsTemplateRequest;
use App\Http\Requests\StoreCustomsTemplateRequest;
use App\Http\Requests\UpdateCustomsTemplateRequest;
use App\Models\CustomsTemplate;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CustomsTemplateController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('customs_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customsTemplates = CustomsTemplate::with(['created_by'])->get();

        return view('admin.customsTemplates.index', compact('customsTemplates'));
    }

    public function create()
    {
        abort_if(Gate::denies('customs_template_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.customsTemplates.create');
    }

    public function store(StoreCustomsTemplateRequest $request)
    {
        $customsTemplate = CustomsTemplate::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $customsTemplate->id]);
        }

        return redirect()->route('admin.customs-templates.index');
    }

    public function edit(CustomsTemplate $customsTemplate)
    {
        abort_if(Gate::denies('customs_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customsTemplate->load('created_by');

        return view('admin.customsTemplates.edit', compact('customsTemplate'));
    }

    public function update(UpdateCustomsTemplateRequest $request, CustomsTemplate $customsTemplate)
    {
        $customsTemplate->update($request->all());

        return redirect()->route('admin.customs-templates.index');
    }

    public function show(CustomsTemplate $customsTemplate)
    {
        abort_if(Gate::denies('customs_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customsTemplate->load('created_by');

        return view('admin.customsTemplates.show', compact('customsTemplate'));
    }

    public function destroy(CustomsTemplate $customsTemplate)
    {
        abort_if(Gate::denies('customs_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customsTemplate->delete();

        return back();
    }

    public function massDestroy(MassDestroyCustomsTemplateRequest $request)
    {
        CustomsTemplate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('customs_template_create') && Gate::denies('customs_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CustomsTemplate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
