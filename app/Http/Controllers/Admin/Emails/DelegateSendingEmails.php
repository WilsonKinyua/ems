<?php

namespace App\Http\Controllers\Admin\Emails;

use App\Http\Controllers\Controller;
use App\Jobs\SendingManyEmailsJob;
use App\Models\Delegate;
use App\Models\DelegateMessage;
use Illuminate\Http\Request;

class DelegateSendingEmails extends Controller
{
    // sending many emails using job dispatch

    public function store(Request $request) {
        $id = $request->emails;

        foreach ($id as $key => $value) {

           $user = Delegate::find($value); //find user details

           $details=[
            "email" => $user->email,
            "name"  => $user->firstname,
            "subject" => $request->subject,
            "body" => $request->body
            ];

            DelegateMessage::create([
                "subject" => $request->subject,
                "body" => $request->body
            ]);

            SendingManyEmailsJob::dispatch($details);

        }
        return redirect()->back()->with('message', 'Email sent successfully');
    }

}
