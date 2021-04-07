<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySpeakerTemplateRequest;
use App\Http\Requests\StoreSpeakerTemplateRequest;
use App\Http\Requests\UpdateSpeakerTemplateRequest;
use App\Models\Speaker;
use App\Models\SpeakerTemplate;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SpeakerTemplateController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('speaker_template_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speakerTemplates = SpeakerTemplate::with(['created_by'])->get();

        return view('admin.speakerTemplates.index', compact('speakerTemplates'));
    }

    public function create()
    {
        abort_if(Gate::denies('speaker_template_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.speakerTemplates.create');
    }

    public function store(StoreSpeakerTemplateRequest $request)
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


        // print_r(json_encode($data));
        $sponsorTemplate = SpeakerTemplate::create($data);


        return redirect()->route("admin.speaker.preview", $sponsorTemplate->id)
                                ->with('success', 'Template created successfully');

    }

    public function edit(SpeakerTemplate $speakerTemplate)
    {
        abort_if(Gate::denies('speaker_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speakerTemplate->load('created_by');

        return view('admin.speakerTemplates.edit', compact('speakerTemplate'));
    }

    public function update(UpdateSpeakerTemplateRequest $request, SpeakerTemplate $speakerTemplate)
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


        $speakerTemplate->update($data);

        // return redirect()->route('admin.sponsor-templates.index');
        return redirect()->route("admin.speaker.preview", $speakerTemplate->id)
                                ->with('success', 'Template updated successfully');
    }

    public function show(SpeakerTemplate $speakerTemplate)
    {
        abort_if(Gate::denies('speaker_template_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speakerTemplate->load('created_by');

        return view('admin.speakerTemplates.show', compact('speakerTemplate'));
    }

    public function destroy(SpeakerTemplate $speakerTemplate)
    {
        abort_if(Gate::denies('speaker_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speakerTemplate->delete();

        return back();
    }

    public function massDestroy(MassDestroySpeakerTemplateRequest $request)
    {
        SpeakerTemplate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('speaker_template_create') && Gate::denies('speaker_template_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new SpeakerTemplate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

    public function preview($id) {

        $template = SpeakerTemplate::findOrFail($id);
        $speakers = Speaker::all();
        return view('admin.speakerTemplates.preview',compact('template','speakers'));

    }
}
