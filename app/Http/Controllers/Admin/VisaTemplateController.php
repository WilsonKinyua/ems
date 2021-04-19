<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyVisaTemplateRequest;
use App\Http\Requests\StoreVisaTemplateRequest;
use App\Http\Requests\UpdateVisaTemplateRequest;
use App\Models\Visa;
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


    $visaTemplate = VisaTemplate::create($data);

    return redirect()->route("admin.visa-templates.preview", $visaTemplate->id)
                            ->with('success', 'Template created successfully');

        // $visaTemplate = VisaTemplate::create($request->all());

        // if ($media = $request->input('ck-media', false)) {
        //     Media::whereIn('id', $media)->update(['model_id' => $visaTemplate->id]);
        // }

        // return redirect()->route('admin.visa-templates.index');
    }

    public function edit(VisaTemplate $visaTemplate)
    {
        abort_if(Gate::denies('visa_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visaTemplate->load('created_by');

        return view('admin.visaTemplates.edit', compact('visaTemplate'));
    }

    public function update(UpdateVisaTemplateRequest $request, VisaTemplate $visaTemplate)
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


        $visaTemplate->update($data);

        return redirect()->route("admin.visa-templates.preview", $visaTemplate->id)
                                ->with('success', 'Template created successfully');

        // $visaTemplate->update($request->all());

        // return redirect()->route('admin.visa-templates.index');
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

    // preview mail before send
    public function preview($id) {

        $template = VisaTemplate::findOrFail($id);
        $visas = Visa::all();
        return view('admin.visaTemplates.preview',compact('template','visas'));

    }

    public function getPage($id) {
        $template = VisaTemplate::findOrFail($id);
        $visas = Visa::all();
        return view('admin.visaTemplates.send',compact('template','visas'));
    }
}
