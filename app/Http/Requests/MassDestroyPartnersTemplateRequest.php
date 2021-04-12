<?php

namespace App\Http\Requests;

use App\Models\PartnersTemplate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPartnersTemplateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('partners_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:partners_templates,id',
        ];
    }
}
