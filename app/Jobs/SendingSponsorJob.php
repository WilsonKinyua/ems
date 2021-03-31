<?php

namespace App\Jobs;

use App\Mail\SendingSponsorEmails;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendingSponsorJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $details;
    protected $emails;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details,$emails)
    {
        $this->details = $details;
        $this->emails = $emails;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new SendingSponsorEmails($this->details);
        Mail::to($this->emails)->send($email);
    }
}
