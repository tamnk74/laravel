<?php

use Illuminate\Database\Seeder;
use App\Models\User;

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
        		'name' => 'admin',
        		'email' => 'admin@gmail.com',
        		'password' => bcrypt('123456')
        	],
        	[
        		'name' => 'guest',
        		'email' => 'guest@gmail.com',
        		'password' => bcrypt('123456')
        	]
        ];

        foreach ($users as $key => $value) {
        	User::create($value);
        }
    }
}
