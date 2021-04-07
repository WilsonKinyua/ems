<?php

namespace App\Http\Requests;

use App\Models\GuestOfHonor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyGuestOfHonorRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('guest_of_honor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:guest_of_honors,id',
        ];
    }
}
