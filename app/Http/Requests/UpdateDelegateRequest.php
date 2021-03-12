<?php

namespace App\Http\Requests;

use App\Models\Delegate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDelegateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('delegate_edit');
    }

    public function rules()
    {
        return [
            'title'            => [
                'string',
                'nullable',
            ],
            'firstname'        => [
                'string',
                'required',
            ],
            'lastname'         => [
                'string',
                'required',
            ],
            'secondname'       => [
                'string',
                'required',
            ],
            'email'            => [
                'required',
            ],
            'company'          => [
                'string',
                'nullable',
            ],
            'citizenship'      => [
                'string',
                'nullable',
            ],
            'type_of_attendee' => [
                'string',
                'nullable',
            ],
            'payment_status'   => [
                'string',
                'nullable',
            ],
        ];
    }
}
