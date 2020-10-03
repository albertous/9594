<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'Alberto',
                'last_name' => 'Yohana',
                'email' => 'albertoyohana95@gmail.com',
                'password' => Hash::make('12345678'),
                'phone_number' => '2557434455435',
                'date_of_birth' => '01/01/1991',
                'role' => 'admin'
            ],
        ];
        

        foreach ($users as $key => $user) {
            User::create([
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'phone_number' => $user['phone_number'],
                'date_of_birth' => $user['date_of_birth'],
                'email_verified_at' => now()
            ])->assignRole($user['role']);
        }
    }
}
