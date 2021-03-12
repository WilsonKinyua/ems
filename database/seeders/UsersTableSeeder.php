<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'first_name'         => 'John',
                'last_name'          => 'Doe',
                "company"            => "Weza Development",
                "job_title"         => "CEO WezaDevelopement",
                'email'              => 'admin@admin.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-03-07 02:10:35',
                'verification_token' => '',
                'company'            => '',
            ],
        ];

        User::insert($users);
    }
}
