<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'user-manager',
                'display_name' => 'User Show',
                'description' => 'View users list'
            ],
        	[
        		'name' => 'role-manager',
        		'display_name' => 'Manage Role',
        		'description' => 'Create, Update, Delete a Role'
        	],
            [
                'name' => 'permission-manager',
                'display_name' => 'Manage Permission',
                'description' => 'Create, Update, Delete, View a Permission'
            ]
        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}
