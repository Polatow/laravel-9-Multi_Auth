<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersData = [
            [
               'name'   =>'Admin',
               'email'  =>'admin@gmail.com',
               'role' => 'admin',
               'password' => Hash::make('12345')
            ],
            [
               'name'       => 'User',
               'email'      => 'user@gmail.com',
               'role'   => 'user',
               'password'   => Hash::make('12345')
            ],
        ];

        foreach ($usersData as $key => $val) {
            User::create($val);
        }

    }
}
