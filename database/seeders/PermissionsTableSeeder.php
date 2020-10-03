<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'business-create', 'business-update', 'business-delete',
            'vendor-create', 'vendor-update', 'vendor-delete',
        ];

        foreach ($permissions as $key => $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }


    }
}
