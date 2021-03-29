<?php

namespace App\Http\Requests;

use App\Models\Sponsor;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSponsorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sponsor_create');
    }

    public function rules()
    {
        return [
            'subject'              => [
                'string',
                'nullable',
            ],
            'logo'                 => [
                'required',
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
            'signature'            => [
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
