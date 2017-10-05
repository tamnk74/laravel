<?php

use Illuminate\Database\Seeder;
use App\Models\PermissionRole;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'role_id' => '1',
                'permission_id' => '1'
            ],
            [
                'role_id' => '1',
                'permission_id' => '2'
            ],
            [
                'role_id' => '1',
                'permission_id' => '3'
            ]
        ];

        foreach ($roles as $key => $role) {
        	PermissionRole::create($role);
        }
    }
}
