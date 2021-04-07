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
                'title' => 'speaker_management_access',
            ],
            [
                'id'    => 73,
                'title' => 'speaker_template_create',
            ],
            [
                'id'    => 74,
                'title' => 'speaker_template_edit',
            ],
            [
                'id'    => 75,
                'title' => 'speaker_template_show',
            ],
            [
                'id'    => 76,
                'title' => 'speaker_template_delete',
            ],
            [
                'id'    => 77,
                'title' => 'speaker_template_access',
            ],
            [
                'id'    => 78,
                'title' => 'guest_of_honor_management_access',
            ],
            [
                'id'    => 79,
                'title' => 'guest_of_honor_create',
            ],
            [
                'id'    => 80,
                'title' => 'guest_of_honor_edit',
            ],
            [
                'id'    => 81,
                'title' => 'guest_of_honor_show',
            ],
            [
                'id'    => 82,
                'title' => 'guest_of_honor_delete',
            ],
            [
                'id'    => 83,
                'title' => 'guest_of_honor_access',
            ],
            [
                'id'    => 84,
                'title' => 'guest_of_honor_template_create',
            ],
            [
                'id'    => 85,
                'title' => 'guest_of_honor_template_edit',
            ],
            [
                'id'    => 86,
                'title' => 'guest_of_honor_template_show',
            ],
            [
                'id'    => 87,
                'title' => 'guest_of_honor_template_delete',
            ],
            [
                'id'    => 88,
                'title' => 'guest_of_honor_template_access',
            ],
            [
                'id'    => 89,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
