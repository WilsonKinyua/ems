<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyExhibitorsTemplateRequest;
use App\Http\Requests\StoreExhibitorsTemplateRequest;
use App\Http\Requests\UpdateExhibitorsTemplateRequest;
use App\Models\ExhibitorsTemplate;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ExhibitorsTemplateController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('exhibitors_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitorsTemplates = ExhibitorsTemplate::with(['created_by'])->get();

        return view('admin.exhibitorsTemplates.index', compact('exhibitorsTemplates'));
    }

    public function create()
    {
        abort_if(Gate::denies('exhibitors_template_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.exhibitorsTemplates.create');
    }

    public function store(StoreExhibitorsTemplateRequest $request)
    {
        $exhibitorsTemplate = ExhibitorsTemplate::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $exhibitorsTemplate->id]);
        }

        return redirect()->route('admin.exhibitors-templates.index');
    }

    public function edit(ExhibitorsTemplate $exhibitorsTemplate)
    {
        abort_if(Gate::denies('exhibitors_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitorsTemplate->load('created_by');

        return view('admin.exhibitorsTemplates.edit', compact('exhibitorsTemplate'));
    }

    public function update(UpdateExhibitorsTemplateRequest $request, ExhibitorsTemplate $exhibitorsTemplate)
    {
        $exhibitorsTemplate->update($request->all());

        return redirect()->route('admin.exhibitors-templates.index');
    }

    public function show(ExhibitorsTemplate $exhibitorsTemplate)
    {
        abort_if(Gate::denies('exhibitors_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitorsTemplate->load('created_by');

        return view('admin.exhibitorsTemplates.show', compact('exhibitorsTemplate'));
    }

    public function destroy(ExhibitorsTemplate $exhibitorsTemplate)
    {
        abort_if(Gate::denies('exhibitors_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitorsTemplate->delete();

        return back();
    }

    public function massDestroy(MassDestroyExhibitorsTemplateRequest $request)
    {
        ExhibitorsTemplate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('exhibitors_template_create') && Gate::denies('exhibitors_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ExhibitorsTemplate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
