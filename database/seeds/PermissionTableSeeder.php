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
                'name' => 'user-list',
                'display_name' => 'User Show',
                'description' => 'View users list'
            ],
            [
                'name' => 'user-show',
                'display_name' => 'User Show',
                'description' => 'View account'
            ],
            [
                'name' => 'user-update',
                'display_name' => 'User Update',
                'description' => 'Update users'
            ],
            [
                'name' => 'user-create',
                'display_name' => 'User Create',
                'description' => 'Create users'
            ],
            [
                'name' => 'user-delete',
                'display_name' => 'User Delete',
                'description' => 'Delete users'
            ],
        	[
        		'name' => 'role-list',
        		'display_name' => 'Display Role Listing',
        		'description' => 'See only Listing Of Role'
        	],
        	[
        		'name' => 'role-manage',
        		'display_name' => 'Manage Role',
        		'description' => 'Create, Update, Delete a Role'
        	],
            [
                'name' => 'permission-manage',
                'display_name' => 'Manage Permission',
                'description' => 'Create, Update, Delete, View a Permission'
            ]
        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}
