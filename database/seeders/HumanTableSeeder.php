<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HumanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('humans')->insert(array(
            0 => array(
                'name' => "Admin",
                'job' => "admin",
                'start_date' => "2016-10-1",
                'birth' => "1980-1-1",
                'gender' => "male",
                'address1' => "Admin address",
                'phone' => "090000000",
                'idnum' => "123456789"
            ),
            1 => array(
                'name' => "Business",
                'job' => "business",
                'start_date' => "2016-10-1",
                'birth' => "1980-2-2",
                'gender' => "female",
                'address1' => "Business address",
                'phone' => "090000001",
                'idnum' => "123456780"
            )
        ));
    }
}
