<?php

namespace App\Http\Controllers\Admin\Emails;

use App\Http\Controllers\Controller;
use App\Jobs\EmailJob;
use App\Models\Visa;
use App\Models\VisaTemplate;
use Illuminate\Http\Request;

class VisaSendingEmailsController extends Controller
{

    public function store(Request $request) {

        // template details
        $template_details = VisaTemplate::findOrFail($request->id);

        // emails id from input form
        $id = $request->emails;

        foreach ($id as $key => $value) {

            $guest = Visa::find($value); //find user details

            $emails = $guest->email;

            $details = [
                "subject" => $template_details->subject,
                "logo" => $template_details->logo,
                "date" => $template_details->date,
                "address" => $template_details->address,
                "ref" => $template_details->ref,
                "signature" => $template_details->signature,
                "name" => $template_details->name,
                "company_organisation" => $template_details->company_organisation,
                "body" => $template_details->body,
                "phone_number" => $template_details->phone_number,
                "email" => $template_details->email,
                "website_link" => $template_details->website_link,
            ];

            // dd($emails);
             $dispath = EmailJob::dispatch($details,$emails);
            //  dd(EmailJob::dispatch($details,$emails));
         }

         return redirect()->route('admin.visas.index')->with('success', 'Email sent successfully');

    }
}

