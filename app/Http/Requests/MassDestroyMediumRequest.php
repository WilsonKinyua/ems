<?php

namespace App\Http\Requests;

use App\Models\Medium;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMediumRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('medium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:media,id',
        ];
    }
}
