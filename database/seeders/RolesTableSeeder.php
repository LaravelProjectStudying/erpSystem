<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')->insert(array(
            0 => array(
                'name' => "admin",
            ),
            1 => array(
                'name' => "manager",
            ),
            2 => array(
                'name' => "business",
            ),
            3 => array(
                'name' => "employee",
            ),
            4 => array(
                'name' => "unknown",
            )
        ));
    }
}
