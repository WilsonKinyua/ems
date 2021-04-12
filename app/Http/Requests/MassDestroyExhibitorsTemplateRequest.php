<?php

namespace App\Http\Requests;

use App\Models\ExhibitorsTemplate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyExhibitorsTemplateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('exhibitors_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:exhibitors_templates,id',
        ];
    }
}
