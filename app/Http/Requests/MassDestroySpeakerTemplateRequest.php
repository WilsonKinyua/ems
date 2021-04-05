<?php

namespace App\Http\Requests;

use App\Models\SpeakerTemplate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySpeakerTemplateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('speaker_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:speaker_templates,id',
        ];
    }
}
