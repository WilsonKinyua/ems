<?php

namespace App\Http\Requests;

use App\Models\GuestOfHonorTemplate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyGuestOfHonorTemplateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('guest_of_honor_template_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:guest_of_honor_templates,id',
        ];
    }
}
