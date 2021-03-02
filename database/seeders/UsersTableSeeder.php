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
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-03-01 17:33:10',
                'verification_token' => '',
                'company'            => '',
            ],
        ];

        User::insert($users);
    }
}
