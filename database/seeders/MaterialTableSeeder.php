<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert(array(
            0 => array(
                'name' => "350ml Bottle",
                'cost' => 1.1,
                'unit_id' => 3,
            ),
            1 => array(
                'name' => "550ml Bottle",
                'cost' => 1.5,
                'unit_id' => 3,
            ),
            2 => array(
                'name' => "20l Hod",
                'cost' => 0.2,
                'unit_id' => 2,
            )
        ));
    }
}
