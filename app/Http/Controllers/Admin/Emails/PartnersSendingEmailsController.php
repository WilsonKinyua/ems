<?php

namespace App\Http\Controllers\Admin\Emails;

use App\Http\Controllers\Controller;
use App\Jobs\SendingManyEmailsJob;
use App\Models\Partner;
use Illuminate\Support\Str;
use App\Models\SentEmailMessage;
use Illuminate\Http\Request;

class PartnersSendingEmailsController extends Controller
{

    public function store(Request $request) {

        $id = $request->emails;

        foreach ($id as $key => $value) {

        $user = Partner::find($value); //find user details

        $details=[
            "email" => $user->email,
            "name"  => $user->name,
            "subject" => $request->subject,
            "body" => $request->body
            ];

            // create the sent emails
            SentEmailMessage::create([
                "sent_to_name" => $user->name,
                "sent_to_email" => $user->email,
                "subject" => $request->subject,
                "message" => $request->body,
                "token" => Str::random(20),
                "created_by_id" => \Auth::user()->id
            ]);
            // dispatch jobs
            SendingManyEmailsJob::dispatch($details);
        }

        return redirect()->route('admin.partners.index')->with('success', 'Email sent successfully');

    }
}

