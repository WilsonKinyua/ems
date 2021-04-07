<?php

namespace App\Http\Requests;

use App\Models\GuestOfHonor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateGuestOfHonorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('guest_of_honor_edit');
    }

    public function rules()
    {
        return [
            'name'           => [
                'string',
                'required',
            ],
            'phone'          => [
                'string',
                'required',
            ],
            'email'          => [
                'required',
            ],
            'postal_address' => [
                'string',
                'nullable',
            ],
            'city'           => [
                'string',
                'nullable',
            ],
            'country'        => [
                'string',
                'required',
            ],
        ];
    }
}
