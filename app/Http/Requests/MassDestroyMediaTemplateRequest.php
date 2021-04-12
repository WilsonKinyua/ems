<?php

namespace App\Http\Requests;

use App\Models\MediaTemplate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMediaTemplateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('media_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:media_templates,id',
        ];
    }
}
