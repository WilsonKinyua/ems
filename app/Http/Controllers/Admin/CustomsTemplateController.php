<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCustomsTemplateRequest;
use App\Http\Requests\StoreCustomsTemplateRequest;
use App\Http\Requests\UpdateCustomsTemplateRequest;
use App\Models\Custom;
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

        $customsTemplate = CustomsTemplate::create($data);

        // if ($media = $request->input('ck-media', false)) {
        //     Media::whereIn('id', $media)->update(['model_id' => $customsTemplate->id]);
        // }
        return redirect()->route("admin.customs-templates.preview", $customsTemplate->id)
                                    ->with('success', 'Template created successfully');

        // return redirect()->route('admin.customs-templates.index');
    }

    public function edit(CustomsTemplate $customsTemplate)
    {
        abort_if(Gate::denies('customs_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customsTemplate->load('created_by');

        return view('admin.customsTemplates.edit', compact('customsTemplate'));
    }

    public function update(UpdateCustomsTemplateRequest $request, CustomsTemplate $customsTemplate)
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

        $customsTemplate->update($data);

        return redirect()->route("admin.customs-templates.preview", $customsTemplate->id)
                                    ->with('success', 'Template updated successfully');

        // return redirect()->route('admin.customs-templates.index');
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

    public function preview($id) {

        $template = CustomsTemplate::findOrFail($id);
        $customs = Custom::all();
        return view('admin.customsTemplates.preview',compact('template','customs'));

    }

    public function getPage($id) {
        $template = CustomsTemplate::findOrFail($id);
        $customs = Custom::all();
        return view('admin.customsTemplates.send',compact('template','customs'));
    }
}
