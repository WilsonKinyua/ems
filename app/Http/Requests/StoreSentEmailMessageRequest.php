<?php

namespace App\Http\Requests;

use App\Models\SentEmailMessage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSentEmailMessageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sent_email_message_create');
    }

    public function rules()
    {
        return [
            'sent_to_name' => [
                'string',
                'required',
            ],
            'sent_to_email' => [
                'required',
            ],
            'subject' => [
                'string',
                'required',
            ],
            'message' => [
                'required',
            ],
            'read' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
