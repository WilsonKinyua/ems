<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'sponsor'           => [
        'title'          => 'Sponsors',
        'title_singular' => 'Sponsor',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'postal_address'        => 'Postal Address',
            'postal_address_helper' => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'country'               => 'Country',
            'country_helper'        => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'created_by'            => 'Created By',
            'created_by_helper'     => ' ',
        ],
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'name'                      => 'Full Name',
            'fname'                      => 'First Name',
            'lname'                      => 'Last Name',
            'name_helper'               => ' ',
            'email'                     => 'Email',
            'email_helper'              => ' ',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => ' ',
            'password'                  => 'Password',
            'password_helper'           => ' ',
            'roles'                     => 'Roles',
            'roles_helper'              => ' ',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'verified'                  => 'Verified',
            'verified_helper'           => ' ',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => ' ',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => ' ',
            'job_title'                 => 'Job Title',
            'job_title'                 => 'Job Title',
            'company'                   => 'Company',
            'company_helper'            => ' ',
            'country'                   => 'Country',
            'country_helper'            => ' ',
        ],
    ],
    'userAlert'      => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'event'          => [
        'title'          => 'Events',
        'title_singular' => 'Event',
    ],
    'eventCategory'  => [
        'title'          => 'Event Category',
        'title_singular' => 'Event Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'taskManagement' => [
        'title'          => 'Task management',
        'title_singular' => 'Task management',
    ],
    'taskStatus'     => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'taskTag'        => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'task'           => [
        'title'          => 'Tasks',
        'title_singular' => 'Task',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'tag'                => 'Tags',
            'tag_helper'         => ' ',
            'attachment'         => 'Attachment',
            'attachment_helper'  => ' ',
            'due_date'           => 'Due date',
            'due_date_helper'    => ' ',
            'assigned_to'        => 'Assigned to',
            'assigned_to_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'tasksCalendar'  => [
        'title'          => 'Calendar',
        'title_singular' => 'Calendar',
    ],
    'eventListing'   => [
        'title'          => 'Event Listing',
        'title_singular' => 'Event Listing',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'event_name'               => 'Event Name',
            'event_name_helper'        => ' ',
            'event_description'        => 'Event Description',
            'event_description_helper' => ' ',
            'event_category'           => 'Event Category',
            'event_category_helper'    => ' ',
            'language'                 => 'Language',
            'language_helper'          => ' ',
            'photo'                    => 'Photo',
            'photo_helper'             => ' ',
            'event_start_date'         => 'Event Start Date',
            'event_start_date_helper'  => ' ',
            'event_end_date'           => 'Event End Date',
            'event_end_date_helper'    => ' ',
            'eventsponsors'            => 'Eventsponsors',
            'eventsponsors_helper'     => ' ',
            'location'                 => 'Location',
            'location_helper'          => ' ',
            'facebook_link'            => 'Facebook Link',
            'facebook_link_helper'     => ' ',
            'twitter_link'             => 'Twitter Link',
            'twitter_link_helper'      => ' ',
            'linkedin'                 => 'Linkedin',
            'linkedin_helper'          => ' ',
            'google_link'              => 'Google Link',
            'google_link_helper'       => ' ',
            'youtube_link'             => 'Youtube Link',
            'youtube_link_helper'      => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'delegate'       => [
        'title'          => 'Delegate',
        'title_singular' => 'Delegate',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'title'                   => 'Title',
            'title_helper'            => ' ',
            'firstname'               => 'Firstname',
            'firstname_helper'        => ' ',
            'lastname'                => 'Lastname',
            'lastname_helper'         => ' ',
            'secondname'              => 'Secondname',
            'secondname_helper'       => ' ',
            'email'                   => 'Email',
            'email_helper'            => ' ',
            'company'                 => 'Company',
            'company_helper'          => ' ',
            'citizenship'             => 'Citizenship',
            'citizenship_helper'      => ' ',
            'type_of_attendee'        => 'Type Of Attendee',
            'type_of_attendee_helper' => ' ',
            'payment_status'          => 'Payment Status',
            'payment_status_helper'   => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'created_by'              => 'Created By',
            'created_by_helper'       => ' ',
        ],
    ],
    'sponsorTemplate'   => [
        'title'          => 'Sponsor Template',
        'title_singular' => 'Sponsor Template',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'subject'                     => 'Subject',
            'subject_helper'              => ' ',
            'logo'                        => 'Logo',
            'logo_helper'                 => ' ',
            'date'                        => 'Date',
            'date_helper'                 => ' ',
            'address'                     => 'Address',
            'address_helper'              => ' ',
            'ref'                         => 'Ref(Title)',
            'ref_helper'                  => ' ',
            'body'                        => 'Email Body',
            'body_helper'                 => ' ',
            'signature'                   => 'Signature',
            'signature_helper'            => ' ',
            'name'                        => 'Name(Sender)',
            'name_helper'                 => ' ',
            'company_organisation'        => 'Company/Organisation',
            'company_organisation_helper' => ' ',
            'phone_number'                => 'Phone Number',
            'phone_number_helper'         => ' ',
            'email'                       => 'Email',
            'email_helper'                => ' ',
            'website_link'                => 'Website Link',
            'website_link_helper'         => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'created_by'                  => 'Created By',
            'created_by_helper'           => ' ',
        ],
    ],
    'sponsorManagement' => [
        'title'          => 'Sponsor Management',
        'title_singular' => 'Sponsor Management',
    ],
    'speaker'           => [
        'title'          => 'Speaker',
        'title_singular' => 'Speaker',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'postal_address'        => 'Postal Address',
            'postal_address_helper' => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'country'               => 'Country',
            'country_helper'        => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'created_by'            => 'Created By',
            'created_by_helper'     => ' ',
        ],
    ],
    'speakerManagement' => [
        'title'          => 'Speaker Management',
        'title_singular' => 'Speaker Management',
    ],
    'speakerTemplate'   => [
        'title'          => 'Speaker Template',
        'title_singular' => 'Speaker Template',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'subject'                     => 'Subject',
            'subject_helper'              => ' ',
            'logo'                        => 'Logo',
            'logo_helper'                 => ' ',
            'date'                        => 'Date',
            'date_helper'                 => ' ',
            'address'                     => 'Address',
            'address_helper'              => ' ',
            'ref'                         => 'Ref(Title)',
            'ref_helper'                  => ' ',
            'body'                        => 'Email Body',
            'body_helper'                 => ' ',
            'signature'                   => 'Signature',
            'signature_helper'            => ' ',
            'name'                        => 'Name(Sender)',
            'name_helper'                 => ' ',
            'company_organisation'        => 'Company/Organisation',
            'company_organisation_helper' => ' ',
            'phone_number'                => 'Phone Number',
            'phone_number_helper'         => ' ',
            'email'                       => 'Email',
            'email_helper'                => ' ',
            'website_link'                => 'Website Link',
            'website_link_helper'         => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'created_by'                  => 'Created By',
            'created_by_helper'           => ' ',
        ],
    ],
    'guestOfHonorManagement' => [
        'title'          => 'Guest Of Honor Management',
        'title_singular' => 'Guest Of Honor Management',
    ],
    'guestOfHonor'           => [
        'title'          => 'Guest Of Honor',
        'title_singular' => 'Guest Of Honor',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'postal_address'        => 'Postal Address',
            'postal_address_helper' => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'country'               => 'Country',
            'country_helper'        => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'created_by'            => 'Created By',
            'created_by_helper'     => ' ',
        ],
    ],
    'guestOfHonorTemplate'   => [
        'title'          => 'Guest Of Honor Template',
        'title_singular' => 'Guest Of Honor Template',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'subject'                     => 'Subject',
            'subject_helper'              => ' ',
            'logo'                        => 'Logo',
            'logo_helper'                 => ' ',
            'date'                        => 'Date',
            'date_helper'                 => ' ',
            'address'                     => 'Address',
            'address_helper'              => ' ',
            'ref'                         => 'Ref(Title)',
            'ref_helper'                  => ' ',
            'body'                        => 'Email Body',
            'body_helper'                 => ' ',
            'signature'                   => 'Signature',
            'signature_helper'            => ' ',
            'name'                        => 'Name(Sender)',
            'name_helper'                 => ' ',
            'company_organisation'        => 'Company/Organisation',
            'company_organisation_helper' => ' ',
            'phone_number'                => 'Phone Number',
            'phone_number_helper'         => ' ',
            'email'                       => 'Email',
            'email_helper'                => ' ',
            'website_link'                => 'Website Link',
            'website_link_helper'         => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'created_by'                  => 'Created By',
            'created_by_helper'           => ' ',
        ],
    ],
    'exhibitorsManagement'   => [
        'title'          => 'Exhibitors Management',
        'title_singular' => 'Exhibitors Management',
    ],
    'exhibitor'              => [
        'title'          => 'Exhibitors',
        'title_singular' => 'Exhibitor',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'postal_address'        => 'Postal Address',
            'postal_address_helper' => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'country'               => 'Country',
            'country_helper'        => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'created_by'            => 'Created By',
            'created_by_helper'     => ' ',
        ],
    ],
    'exhibitorsTemplate'     => [
        'title'          => 'Exhibitors Template',
        'title_singular' => 'Exhibitors Template',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'subject'                     => 'Subject',
            'subject_helper'              => ' ',
            'logo'                        => 'Logo',
            'logo_helper'                 => ' ',
            'date'                        => 'Date',
            'date_helper'                 => ' ',
            'address'                     => 'Address',
            'address_helper'              => ' ',
            'ref'                         => 'Ref(Title)',
            'ref_helper'                  => ' ',
            'body'                        => 'Email Body',
            'body_helper'                 => ' ',
            'signature'                   => 'Signature',
            'signature_helper'            => ' ',
            'name'                        => 'Name(Sender)',
            'name_helper'                 => ' ',
            'company_organisation'        => 'Company/Organisation',
            'company_organisation_helper' => ' ',
            'phone_number'                => 'Phone Number',
            'phone_number_helper'         => ' ',
            'email'                       => 'Email',
            'email_helper'                => ' ',
            'website_link'                => 'Website Link',
            'website_link_helper'         => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'created_by'                  => 'Created By',
            'created_by_helper'           => ' ',
        ],
    ],
    'mediaManagement'        => [
        'title'          => 'Media Management',
        'title_singular' => 'Media Management',
    ],
    'media'                 => [
        'title'          => 'Medias',
        'title_singular' => 'Media',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'postal_address'        => 'Postal Address',
            'postal_address_helper' => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'country'               => 'Country',
            'country_helper'        => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'created_by'            => 'Created By',
            'created_by_helper'     => ' ',
        ],
    ],
    'mediaTemplate'          => [
        'title'          => 'Media Template',
        'title_singular' => 'Media Template',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'subject'                     => 'Subject',
            'subject_helper'              => ' ',
            'logo'                        => 'Logo',
            'logo_helper'                 => ' ',
            'date'                        => 'Date',
            'date_helper'                 => ' ',
            'address'                     => 'Address',
            'address_helper'              => ' ',
            'ref'                         => 'Ref(Title)',
            'ref_helper'                  => ' ',
            'body'                        => 'Email Body',
            'body_helper'                 => ' ',
            'signature'                   => 'Signature',
            'signature_helper'            => ' ',
            'name'                        => 'Name(Sender)',
            'name_helper'                 => ' ',
            'company_organisation'        => 'Company/Organisation',
            'company_organisation_helper' => ' ',
            'phone_number'                => 'Phone Number',
            'phone_number_helper'         => ' ',
            'email'                       => 'Email',
            'email_helper'                => ' ',
            'website_link'                => 'Website Link',
            'website_link_helper'         => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'created_by'                  => 'Created By',
            'created_by_helper'           => ' ',
        ],
    ],
    'partnersManagement'     => [
        'title'          => 'Partners Management',
        'title_singular' => 'Partners Management',
    ],
    'partner'                => [
        'title'          => 'Partners',
        'title_singular' => 'Partner',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'postal_address'        => 'Postal Address',
            'postal_address_helper' => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'country'               => 'Country',
            'country_helper'        => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'created_by'            => 'Created By',
            'created_by_helper'     => ' ',
        ],
    ],
    'partnersTemplate'       => [
        'title'          => 'Partners Template',
        'title_singular' => 'Partners Template',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'subject'                     => 'Subject',
            'subject_helper'              => ' ',
            'logo'                        => 'Logo',
            'logo_helper'                 => ' ',
            'date'                        => 'Date',
            'date_helper'                 => ' ',
            'address'                     => 'Address',
            'address_helper'              => ' ',
            'ref'                         => 'Ref(Title)',
            'ref_helper'                  => ' ',
            'body'                        => 'Email Body',
            'body_helper'                 => ' ',
            'signature'                   => 'Signature',
            'signature_helper'            => ' ',
            'name'                        => 'Name(Sender)',
            'name_helper'                 => ' ',
            'company_organisation'        => 'Company/Organisation',
            'company_organisation_helper' => ' ',
            'phone_number'                => 'Phone Number',
            'phone_number_helper'         => ' ',
            'email'                       => 'Email',
            'email_helper'                => ' ',
            'website_link'                => 'Website Link',
            'website_link_helper'         => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'created_by'                  => 'Created By',
            'created_by_helper'           => ' ',
        ],
    ],
    'customsManagement'      => [
        'title'          => 'Customs Management',
        'title_singular' => 'Customs Management',
    ],
    'custom'                 => [
        'title'          => 'Customs',
        'title_singular' => 'Custom',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'postal_address'        => 'Postal Address',
            'postal_address_helper' => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'country'               => 'Country',
            'country_helper'        => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'created_by'            => 'Created By',
            'created_by_helper'     => ' ',
        ],
    ],
    'customsTemplate'        => [
        'title'          => 'Customs Template',
        'title_singular' => 'Customs Template',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'subject'                     => 'Subject',
            'subject_helper'              => ' ',
            'logo'                        => 'Logo',
            'logo_helper'                 => ' ',
            'date'                        => 'Date',
            'date_helper'                 => ' ',
            'address'                     => 'Address',
            'address_helper'              => ' ',
            'ref'                         => 'Ref(Title)',
            'ref_helper'                  => ' ',
            'body'                        => 'Email Body',
            'body_helper'                 => ' ',
            'signature'                   => 'Signature',
            'signature_helper'            => ' ',
            'name'                        => 'Name(Sender)',
            'name_helper'                 => ' ',
            'company_organisation'        => 'Company/Organisation',
            'company_organisation_helper' => ' ',
            'phone_number'                => 'Phone Number',
            'phone_number_helper'         => ' ',
            'email'                       => 'Email',
            'email_helper'                => ' ',
            'website_link'                => 'Website Link',
            'website_link_helper'         => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'created_by'                  => 'Created By',
            'created_by_helper'           => ' ',
        ],
    ],
    'visaManagement'         => [
        'title'          => 'Visa Management',
        'title_singular' => 'Visa Management',
    ],
    'visa'                   => [
        'title'          => 'Visa',
        'title_singular' => 'Visa',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'postal_address'        => 'Postal Address',
            'postal_address_helper' => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'country'               => 'Country',
            'country_helper'        => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'created_by'            => 'Created By',
            'created_by_helper'     => ' ',
        ],
    ],
    'visaTemplate'           => [
        'title'          => 'Visa Template',
        'title_singular' => 'Visa Template',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'subject'                     => 'Subject',
            'subject_helper'              => ' ',
            'logo'                        => 'Logo',
            'logo_helper'                 => ' ',
            'date'                        => 'Date',
            'date_helper'                 => ' ',
            'address'                     => 'Address',
            'address_helper'              => ' ',
            'ref'                         => 'Ref(Title)',
            'ref_helper'                  => ' ',
            'body'                        => 'Email Body',
            'body_helper'                 => ' ',
            'signature'                   => 'Signature',
            'signature_helper'            => ' ',
            'name'                        => 'Name(Sender)',
            'name_helper'                 => ' ',
            'company_organisation'        => 'Company/Organisation',
            'company_organisation_helper' => ' ',
            'phone_number'                => 'Phone Number',
            'phone_number_helper'         => ' ',
            'email'                       => 'Email',
            'email_helper'                => ' ',
            'website_link'                => 'Website Link',
            'website_link_helper'         => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'created_by'                  => 'Created By',
            'created_by_helper'           => ' ',
        ],
    ],
    'sentEmailMessage' => [
        'title'          => 'Sent Email Messages',
        'title_singular' => 'Sent Email Message',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'sent_to_name'         => 'Sent To Name',
            'sent_to_name_helper'  => ' ',
            'sent_to_email'        => 'Sent To Email',
            'sent_to_email_helper' => ' ',
            'subject'              => 'Subject',
            'subject_helper'       => ' ',
            'message'              => 'Message',
            'message_helper'       => ' ',
            'read'                 => 'Read',
            'read_helper'          => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'created_by'           => 'Created By',
            'created_by_helper'    => ' ',
            'token'                => 'Token',
            'token_helper'         => ' ',
        ],
    ],
];
