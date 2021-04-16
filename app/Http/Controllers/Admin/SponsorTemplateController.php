<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySponsorTemplateRequest;
use App\Http\Requests\StoreSponsorTemplateRequest;
use App\Http\Requests\UpdateSponsorTemplateRequest;
use App\Models\Sponsor;
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

        // move and create the image
        if($filelogo = $request->file("logo")) {

            $logo_name = time() . $filelogo->getClientOriginalName();
            $logo_name = $filelogo->move("uploads/sponsors/img/logos", $logo_name);

        }

        if($signaturefile = $request->file("signature")) {

            $signature_name = time() . $signaturefile->getClientOriginalName();
            $signature_name = $signaturefile->move("uploads/sponsors/img/signature", $signature_name);

        }

        // form request data array
        $data = [
            "subject" => $request->subject,
            "logo" => $logo_name,
            "date" => $request->date,
            "address" => $request->address,
            "ref" => $request->ref,
            "signature" => $signature_name,
            "name" => $request->name,
            "company_organisation" => $request->company_organisation,
            "body" => $request->body,
            "phone_number" => $request->phone_number,
            "email" => $request->email,
            "website_link" => $request->website_link,
            'created_by_id' => \Auth::user()->id
        ];


        $sponsorTemplate = SponsorTemplate::create($data);

        return redirect()->route("admin.compose.preview", $sponsorTemplate->id)
                                ->with('success', 'Template created successfully');

    }

    public function edit(SponsorTemplate $sponsorTemplate)
    {
        abort_if(Gate::denies('sponsor_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sponsorTemplate->load('created_by');

        return view('admin.sponsorTemplates.edit', compact('sponsorTemplate'));
    }

    public function update(UpdateSponsorTemplateRequest $request, SponsorTemplate $sponsorTemplate)
    {
          // move and create the image
          if($filelogo = $request->file("logo")) {

            $logo_name = time() . $filelogo->getClientOriginalName();
            $logo_name = $filelogo->move("uploads/sponsors/img/logos", $logo_name);

        }

        if($signaturefile = $request->file("signature")) {

            $signature_name = time() . $signaturefile->getClientOriginalName();
            $signature_name = $signaturefile->move("uploads/sponsors/img/signature", $signature_name);

        }

        // form request data array
        $data = [
            "subject" => $request->subject,
            "logo" => $logo_name,
            "date" => $request->date,
            "address" => $request->address,
            "ref" => $request->ref,
            "signature" => $signature_name,
            "name" => $request->name,
            "company_organisation" => $request->company_organisation,
            "body" => $request->body,
            "phone_number" => $request->phone_number,
            "email" => $request->email,
            "website_link" => $request->website_link,
            'created_by_id' => \Auth::user()->id
        ];


        $sponsorTemplate->update($data);

        // return redirect()->route('admin.sponsor-templates.index');
        return redirect()->route("admin.compose.preview", $sponsorTemplate->id)
                                ->with('success', 'Template updated successfully');
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

    // preview mail before send
    public function preview($id) {

       $template = SponsorTemplate::findOrFail($id);
       $sponsors = Sponsor::all();
       return view('admin.sponsorTemplates.preview',compact('template','sponsors'));

    }

    public function getPage($id) {

        $template = SponsorTemplate::findOrFail($id);
        $sponsors = Sponsor::all();
        return view('admin.sponsorTemplates.send',compact('template','sponsors'));

    }

}
