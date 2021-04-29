<?php

namespace App\Http\Requests;

use App\Models\SentEmailMessage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySentEmailMessageRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('sent_email_message_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:sent_email_messages,id',
        ];
    }
}
