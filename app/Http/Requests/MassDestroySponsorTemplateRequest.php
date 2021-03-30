<?php

namespace App\Http\Requests;

use App\Models\SponsorTemplate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySponsorTemplateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('sponsor_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:sponsor_templates,id',
        ];
    }
}
