<?php

namespace App\Http\Requests;

use App\Models\CustomsTemplate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCustomsTemplateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('customs_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:customs_templates,id',
        ];
    }
}
