<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySponsorTemplateRequest;
use App\Http\Requests\StoreSponsorTemplateRequest;
use App\Http\Requests\UpdateSponsorTemplateRequest;
use App\Models\SponsorTemplate;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SponsorTemplateController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('sponsor_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sponsorTemplates = SponsorTemplate::with(['created_by'])->get();

        return view('admin.sponsorTemplates.index', compact('sponsorTemplates'));
    }

    public function create()
    {
        abort_if(Gate::denies('sponsor_template_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sponsorTemplates.create');
    }

    public function store(StoreSponsorTemplateRequest $request)
    {
        $sponsorTemplate = SponsorTemplate::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $sponsorTemplate->id]);
        }

        return redirect()->route('admin.sponsor-templates.index');
    }

    public function edit(SponsorTemplate $sponsorTemplate)
    {
        abort_if(Gate::denies('sponsor_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sponsorTemplate->load('created_by');

        return view('admin.sponsorTemplates.edit', compact('sponsorTemplate'));
    }

    public function update(UpdateSponsorTemplateRequest $request, SponsorTemplate $sponsorTemplate)
    {
        $sponsorTemplate->update($request->all());

        return redirect()->route('admin.sponsor-templates.index');
    }

    public function show(SponsorTemplate $sponsorTemplate)
    {
        abort_if(Gate::denies('sponsor_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sponsorTemplate->load('created_by');

        return view('admin.sponsorTemplates.show', compact('sponsorTemplate'));
    }

    public function destroy(SponsorTemplate $sponsorTemplate)
    {
        abort_if(Gate::denies('sponsor_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sponsorTemplate->delete();

        return back();
    }

    public function massDestroy(MassDestroySponsorTemplateRequest $request)
    {
        SponsorTemplate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('sponsor_template_create') && Gate::denies('sponsor_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new SponsorTemplate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
