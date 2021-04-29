<?php

namespace App\Http\Controllers\Admin\Emails;

use App\Http\Controllers\Controller;
use App\Jobs\SendingManyEmailsJob;
use App\Models\SentEmailMessage;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class SpeakerSendingEmails extends Controller
{

    // public function store(Request $request) {

    //     // template details
    //     $template_details = SpeakerTemplate::findOrFail($request->id);

    //     // emails id from input form
    //     $id = $request->emails;

    //     foreach ($id as $key => $value) {

    //         $sponsor = Speaker::find($value); //find user details

    //         $emails = $sponsor->email;

    //         $details = [
    //             "subject" => $template_details->subject,
    //             "logo" => $template_details->logo,
    //             "date" => $template_details->date,
    //             "address" => $template_details->address,
    //             "ref" => $template_details->ref,
    //             "signature" => $template_details->signature,
    //             "name" => $template_details->name,
    //             "company_organisation" => $template_details->company_organisation,
    //             "body" => $template_details->body,
    //             "phone_number" => $template_details->phone_number,
    //             "email" => $template_details->email,
    //             "website_link" => $template_details->website_link,
    //         ];

    //         // dd($emails);
    //          $dispath = EmailJob::dispatch($details,$emails);
    //         //  dd(EmailJob::dispatch($details,$emails));
    //      }

    //      return redirect()->route('admin.speakers.index')->with('success', 'Email sent successfully');

    // }

    public function store(Request $request) {

        $id = $request->emails;

        foreach ($id as $key => $value) {

           $user = Speaker::find($value); //find user details

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

        return redirect()->route('admin.speakers.index')->with('success', 'Email sent successfully');
    }
}
