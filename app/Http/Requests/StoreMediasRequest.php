<?php

namespace App\Http\Requests;

use App\Models\Medias;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMediasRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('media_create');
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
