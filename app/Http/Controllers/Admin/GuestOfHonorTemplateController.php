<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyGuestOfHonorTemplateRequest;
use App\Http\Requests\StoreGuestOfHonorTemplateRequest;
use App\Http\Requests\UpdateGuestOfHonorTemplateRequest;
use App\Models\GuestOfHonor;
use App\Models\GuestOfHonorTemplate;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class GuestOfHonorTemplateController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('guest_of_honor_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guestOfHonorTemplates = GuestOfHonorTemplate::with(['created_by'])->get();

        return view('admin.guestOfHonorTemplates.index', compact('guestOfHonorTemplates'));
    }

    public function create()
    {
        abort_if(Gate::denies('guest_of_honor_template_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.guestOfHonorTemplates.create');
    }

    public function store(StoreGuestOfHonorTemplateRequest $request)
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


        $GuestOfHonorTemplate = GuestOfHonorTemplate::create($data);

        return redirect()->route("admin.guestofhonor.preview", $GuestOfHonorTemplate->id)
                                ->with('success', 'Template created successfully');


    }

    public function edit(GuestOfHonorTemplate $guestOfHonorTemplate)
    {
        abort_if(Gate::denies('guest_of_honor_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guestOfHonorTemplate->load('created_by');

        return view('admin.guestOfHonorTemplates.edit', compact('guestOfHonorTemplate'));
    }

    public function update(UpdateGuestOfHonorTemplateRequest $request, GuestOfHonorTemplate $guestOfHonorTemplate)
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
        $guestOfHonorTemplate->update($data);

        // return redirect()->route('admin.guest-of-honor-templates.index')->with('success');
        return redirect()->route("admin.guestofhonor.preview", $guestOfHonorTemplate->id)
                                ->with('success', 'Template updated successfully');
    }

    public function show(GuestOfHonorTemplate $guestOfHonorTemplate)
    {
        abort_if(Gate::denies('guest_of_honor_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guestOfHonorTemplate->load('created_by');

        return view('admin.guestOfHonorTemplates.show', compact('guestOfHonorTemplate'));
    }

    public function destroy(GuestOfHonorTemplate $guestOfHonorTemplate)
    {
        abort_if(Gate::denies('guest_of_honor_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $guestOfHonorTemplate->delete();

        return back();
    }

    public function massDestroy(MassDestroyGuestOfHonorTemplateRequest $request)
    {
        GuestOfHonorTemplate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('guest_of_honor_template_create') && Gate::denies('guest_of_honor_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new GuestOfHonorTemplate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

    public function preview($id) {

        $template = GuestOfHonorTemplate::findOrFail($id);
        $guests = GuestOfHonor::all();
        return view('admin.guestOfHonorTemplates.preview',compact('template','guests'));

    }

    public function getPage($id) {

        $template = GuestOfHonorTemplate::findOrFail($id);
        $guests = GuestOfHonor::all();
        return view('admin.guestOfHonorTemplates.send',compact('template','guests'));

    }
}
