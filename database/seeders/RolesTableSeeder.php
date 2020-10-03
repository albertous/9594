<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin', 'user', 'carrier', 'supplier', 'vendor'
        ];

        foreach ($roles as $name) {
            Role::create([
                'name' => $name
            ]);
        }
    }
}
