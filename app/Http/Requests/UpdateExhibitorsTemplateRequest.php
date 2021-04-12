<?php

namespace App\Http\Requests;

use App\Models\ExhibitorsTemplate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateExhibitorsTemplateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('exhibitors_template_edit');
    }

    public function rules()
    {
        return [
            'subject'              => [
                'string',
                'required',
            ],
            'logo'                 => [
                'string',
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
                'string',
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
                'string',
                'nullable',
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