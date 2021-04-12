<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 18,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 21,
                'title' => 'event_access',
            ],
            [
                'id'    => 22,
                'title' => 'event_category_create',
            ],
            [
                'id'    => 23,
                'title' => 'event_category_edit',
            ],
            [
                'id'    => 24,
                'title' => 'event_category_show',
            ],
            [
                'id'    => 25,
                'title' => 'event_category_delete',
            ],
            [
                'id'    => 26,
                'title' => 'event_category_access',
            ],
            [
                'id'    => 27,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 28,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 29,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 30,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 31,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 32,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 33,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 34,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 35,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 36,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 37,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 38,
                'title' => 'task_create',
            ],
            [
                'id'    => 39,
                'title' => 'task_edit',
            ],
            [
                'id'    => 40,
                'title' => 'task_show',
            ],
            [
                'id'    => 41,
                'title' => 'task_delete',
            ],
            [
                'id'    => 42,
                'title' => 'task_access',
            ],
            [
                'id'    => 43,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 44,
                'title' => 'event_listing_create',
            ],
            [
                'id'    => 45,
                'title' => 'event_listing_edit',
            ],
            [
                'id'    => 46,
                'title' => 'event_listing_show',
            ],
            [
                'id'    => 47,
                'title' => 'event_listing_delete',
            ],
            [
                'id'    => 48,
                'title' => 'event_listing_access',
            ],
            [
                'id'    => 49,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 50,
                'title' => 'delegate_create',
            ],
            [
                'id'    => 51,
                'title' => 'delegate_edit',
            ],
            [
                'id'    => 52,
                'title' => 'delegate_show',
            ],
            [
                'id'    => 53,
                'title' => 'delegate_delete',
            ],
            [
                'id'    => 54,
                'title' => 'delegate_access',
            ],
            [
                'id'    => 55,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 56,
                'title' => 'sponsor_template_create',
            ],
            [
                'id'    => 57,
                'title' => 'sponsor_template_edit',
            ],
            [
                'id'    => 58,
                'title' => 'sponsor_template_show',
            ],
            [
                'id'    => 59,
                'title' => 'sponsor_template_delete',
            ],
            [
                'id'    => 60,
                'title' => 'sponsor_template_access',
            ],
            [
                'id'    => 61,
                'title' => 'sponsor_management_access',
            ],
            [
                'id'    => 62,
                'title' => 'sponsor_create',
            ],
            [
                'id'    => 63,
                'title' => 'sponsor_edit',
            ],
            [
                'id'    => 64,
                'title' => 'sponsor_show',
            ],
            [
                'id'    => 65,
                'title' => 'sponsor_delete',
            ],
            [
                'id'    => 66,
                'title' => 'sponsor_access',
            ],
            [
                'id'    => 67,
                'title' => 'speaker_create',
            ],
            [
                'id'    => 68,
                'title' => 'speaker_edit',
            ],
            [
                'id'    => 69,
                'title' => 'speaker_show',
            ],
            [
                'id'    => 70,
                'title' => 'speaker_delete',
            ],
            [
                'id'    => 71,
                'title' => 'speaker_access',
            ],
            [
                'id'    => 72,
                'title' => 'exhibitor_create',
            ],
            [
                'id'    => 73,
                'title' => 'exhibitor_edit',
            ],
            [
                'id'    => 74,
                'title' => 'exhibitor_show',
            ],
            [
                'id'    => 75,
                'title' => 'exhibitor_delete',
            ],
            [
                'id'    => 76,
                'title' => 'exhibitor_access',
            ],
            [
                'id'    => 77,
                'title' => 'exhibitors_template_create',
            ],
            [
                'id'    => 78,
                'title' => 'exhibitors_template_edit',
            ],
            [
                'id'    => 79,
                'title' => 'exhibitors_template_show',
            ],
            [
                'id'    => 80,
                'title' => 'exhibitors_template_delete',
            ],
            [
                'id'    => 81,
                'title' => 'exhibitors_template_access',
            ],
            [
                'id'    => 82,
                'title' => 'media_management_access',
            ],
            [
                'id'    => 83,
                'title' => 'media_create',
            ],
            [
                'id'    => 84,
                'title' => 'media_edit',
            ],
            [
                'id'    => 85,
                'title' => 'media_show',
            ],
            [
                'id'    => 86,
                'title' => 'media_delete',
            ],
            [
                'id'    => 87,
                'title' => 'media_access',
            ],
            [
                'id'    => 88,
                'title' => 'media_template_create',
            ],
            [
                'id'    => 89,
                'title' => 'media_template_edit',
            ],
            [
                'id'    => 90,
                'title' => 'media_template_show',
            ],
            [
                'id'    => 91,
                'title' => 'media_template_delete',
            ],
            [
                'id'    => 92,
                'title' => 'media_template_access',
            ],
            [
                'id'    => 93,
                'title' => 'partners_management_access',
            ],
            [
                'id'    => 94,
                'title' => 'partner_create',
            ],
            [
                'id'    => 95,
                'title' => 'partner_edit',
            ],
            [
                'id'    => 96,
                'title' => 'partner_show',
            ],
            [
                'id'    => 97,
                'title' => 'partner_delete',
            ],
            [
                'id'    => 98,
                'title' => 'partner_access',
            ],
            [
                'id'    => 99,
                'title' => 'partners_template_create',
            ],
            [
                'id'    => 100,
                'title' => 'partners_template_edit',
            ],
            [
                'id'    => 101,
                'title' => 'partners_template_show',
            ],
            [
                'id'    => 102,
                'title' => 'partners_template_delete',
            ],
            [
                'id'    => 103,
                'title' => 'partners_template_access',
            ],
            [
                'id'    => 104,
                'title' => 'customs_management_access',
            ],
            [
                'id'    => 105,
                'title' => 'custom_create',
            ],
            [
                'id'    => 106,
                'title' => 'custom_edit',
            ],
            [
                'id'    => 107,
                'title' => 'custom_show',
            ],
            [
                'id'    => 108,
                'title' => 'custom_delete',
            ],
            [
                'id'    => 109,
                'title' => 'custom_access',
            ],
            [
                'id'    => 110,
                'title' => 'customs_template_create',
            ],
            [
                'id'    => 111,
                'title' => 'customs_template_edit',
            ],
            [
                'id'    => 112,
                'title' => 'customs_template_show',
            ],
            [
                'id'    => 113,
                'title' => 'customs_template_delete',
            ],
            [
                'id'    => 114,
                'title' => 'customs_template_access',
            ],
            [
                'id'    => 115,
                'title' => 'visa_management_access',
            ],
            [
                'id'    => 116,
                'title' => 'visa_create',
            ],
            [
                'id'    => 117,
                'title' => 'visa_edit',
            ],
            [
                'id'    => 118,
                'title' => 'visa_show',
            ],
            [
                'id'    => 119,
                'title' => 'visa_delete',
            ],
            [
                'id'    => 120,
                'title' => 'visa_access',
            ],
            [
                'id'    => 121,
                'title' => 'visa_template_create',
            ],
            [
                'id'    => 122,
                'title' => 'visa_template_edit',
            ],
            [
                'id'    => 123,
                'title' => 'visa_template_show',
            ],
            [
                'id'    => 124,
                'title' => 'visa_template_delete',
            ],
            [
                'id'    => 125,
                'title' => 'visa_template_access',
            ],
            [
                'id'    => 126,
                'title' => 'speaker_management_access',
            ],
            [
                'id'    => 127,
                'title' => 'speaker_template_create',
            ],
            [
                'id'    => 128,
                'title' => 'speaker_template_edit',
            ],
            [
                'id'    => 129,
                'title' => 'speaker_template_show',
            ],
            [
                'id'    => 130,
                'title' => 'speaker_template_delete',
            ],
            [
                'id'    => 131,
                'title' => 'speaker_template_access',
            ],
            [
                'id'    => 132,
                'title' => 'guest_of_honor_management_access',
            ],
            [
                'id'    => 133,
                'title' => 'guest_of_honor_create',
            ],
            [
                'id'    => 134,
                'title' => 'guest_of_honor_edit',
            ],
            [
                'id'    => 135,
                'title' => 'guest_of_honor_show',
            ],
            [
                'id'    => 136,
                'title' => 'guest_of_honor_delete',
            ],
            [
                'id'    => 137,
                'title' => 'guest_of_honor_access',
            ],
            [
                'id'    => 138,
                'title' => 'guest_of_honor_template_create',
            ],
            [
                'id'    => 139,
                'title' => 'guest_of_honor_template_edit',
            ],
            [
                'id'    => 140,
                'title' => 'guest_of_honor_template_show',
            ],
            [
                'id'    => 141,
                'title' => 'guest_of_honor_template_delete',
            ],
            [
                'id'    => 142,
                'title' => 'guest_of_honor_template_access',
            ],
            [
                'id'    => 143,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 144,
                'title' => 'exhibitors_management_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
