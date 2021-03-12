<?php

namespace App\Http\Requests;

use App\Models\EventListing;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEventListingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('event_listing_edit');
    }

    public function rules()
    {
        return [
            'event_name'        => [
                'string',
                'required',
            ],
            'event_description' => [
                'required',
            ],
            'event_category_id' => [
                'required',
                'integer',
            ],
            'language'          => [
                'string',
                'required',
            ],
            'event_start_date'  => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'event_end_date'    => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'eventsponsors'     => [
                'string',
                'nullable',
            ],
            'location'          => [
                'string',
                'required',
            ],
            'facebook_link'     => [
                'string',
                'nullable',
            ],
            'twitter_link'      => [
                'string',
                'nullable',
            ],
            'linkedin'          => [
                'string',
                'nullable',
            ],
            'google_link'       => [
                'string',
                'nullable',
            ],
            'youtube_link'      => [
                'string',
                'nullable',
            ],
        ];
    }
}
