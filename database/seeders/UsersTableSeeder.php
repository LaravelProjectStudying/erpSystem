<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            0 => array(
                'name' => "Admin",
                'username' => "admin",
                'email' => "admin@email.com",
                'password' => bcrypt('123456'),
                'role_id' => 1,
                'is_active' => 1
            ),
            1 => array(
                'name' => "Business",
                'username' => "business",
                'email' => "business@email.com",
                'password' => bcrypt('123456'),
                'role_id' => 3,
                'is_active' => 1
            ),
            2 => array(
                'name' => "Employee",
                'username' => "employee",
                'email' => "employee@email.com",
                'password' => bcrypt('123456'),
                'role_id' => 4,
                'is_active' => 1
            ),
            3 => array(
                'name' => "Inventory Manager",
                'username' => "manager",
                'email' => "manager@email.com",
                'password' => bcrypt('123456'),
                'role_id' => 2,
                'is_active' => 1
            )
        ));
    }
}
