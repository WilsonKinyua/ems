<?php

namespace App\Http\Requests;

use App\Models\Sponsor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSponsorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sponsor_edit');
    }

    public function rules()
    {
        return [
            'subject'              => [
                'string',
                'nullable',
            ],
            'date'                 => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'address'              => [
                'required',
            ],
            'ref'                  => [
                'string',
                'required',
            ],
            'body'                 => [
                'required',
            ],
            'name'                 => [
                'string',
                'required',
            ],
            'company_organisation' => [
                'string',
                'required',
            ],
            'phone_number'         => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'email'                => [
                'required',
            ],
            'website_link'         => [
                'string',
                'required',
            ],
        ];
    }
}
