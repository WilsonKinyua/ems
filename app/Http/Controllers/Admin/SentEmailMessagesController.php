<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySentEmailMessageRequest;
use App\Http\Requests\StoreSentEmailMessageRequest;
use App\Http\Requests\UpdateSentEmailMessageRequest;
use App\Models\SentEmailMessage;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SentEmailMessagesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('sent_email_message_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sentEmailMessages = SentEmailMessage::with(['created_by'])->get();

        return view('admin.sentEmailMessages.index', compact('sentEmailMessages'));
    }

    public function create()
    {
        abort_if(Gate::denies('sent_email_message_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sentEmailMessages.create');
    }

    public function store(StoreSentEmailMessageRequest $request)
    {
        $sentEmailMessage = SentEmailMessage::create($request->all());

        return redirect()->route('admin.sent-email-messages.index');
    }

    public function edit(SentEmailMessage $sentEmailMessage)
    {
        abort_if(Gate::denies('sent_email_message_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sentEmailMessage->load('created_by');

        return view('admin.sentEmailMessages.edit', compact('sentEmailMessage'));
    }

    public function update(UpdateSentEmailMessageRequest $request, SentEmailMessage $sentEmailMessage)
    {
        $sentEmailMessage->update($request->all());

        return redirect()->route('admin.sent-email-messages.index');
    }

    public function show(SentEmailMessage $sentEmailMessage)
    {
        abort_if(Gate::denies('sent_email_message_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sentEmailMessage->load('created_by');

        return view('admin.sentEmailMessages.show', compact('sentEmailMessage'));
    }

    public function destroy(SentEmailMessage $sentEmailMessage)
    {
        abort_if(Gate::denies('sent_email_message_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sentEmailMessage->delete();

        return back();
    }

    public function massDestroy(MassDestroySentEmailMessageRequest $request)
    {
        SentEmailMessage::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
