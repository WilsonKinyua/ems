<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyExhibitorsTemplateRequest;
use App\Http\Requests\StoreExhibitorsTemplateRequest;
use App\Http\Requests\UpdateExhibitorsTemplateRequest;
use App\Models\Exhibitor;
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
        $exhibitorsTemplate = ExhibitorsTemplate::create($data);
        return redirect()->route("admin.exhibitors-templates.preview", $exhibitorsTemplate->id)
                                    ->with('success', 'Template created successfully');

    }

    public function edit(ExhibitorsTemplate $exhibitorsTemplate)
    {
        abort_if(Gate::denies('exhibitors_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exhibitorsTemplate->load('created_by');

        return view('admin.exhibitorsTemplates.edit', compact('exhibitorsTemplate'));
    }

    public function update(UpdateExhibitorsTemplateRequest $request, ExhibitorsTemplate $exhibitorsTemplate)
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

        $exhibitorsTemplate->update($data);

        return redirect()->route("admin.exhibitors-templates.preview", $exhibitorsTemplate->id)
        ->with('success', 'Template updated successfully');

        // return redirect()->route('admin.exhibitors-templates.index');
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

    public function preview($id) {

        $template = ExhibitorsTemplate::findOrFail($id);
        $exhibitors = Exhibitor::all();
        return view('admin.exhibitorsTemplates.preview',compact('template','exhibitors'));

    }

    public function getPage($id) {
        $template = ExhibitorsTemplate::findOrFail($id);
        $exhibitors = Exhibitor::all();
        return view('admin.exhibitorsTemplates.send',compact('template','exhibitors'));
    }
}
