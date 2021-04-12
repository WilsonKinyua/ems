<?php

namespace App\Http\Requests;

use App\Models\MediaTemplate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMediaTemplateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('media_template_create');
    }

    public function rules()
    {
        return [
            'subject'              => [
                'string',
                'required',
            ],
            // 'logo'                 => [
            //     'file',
            //     'required',
            // ],
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
            // 'signature'            => [
            //     'file',
            //     'required',
            // ],
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
