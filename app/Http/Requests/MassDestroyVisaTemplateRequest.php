<?php

namespace App\Http\Requests;

use App\Models\VisaTemplate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVisaTemplateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('visa_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:visa_templates,id',
        ];
    }
}
