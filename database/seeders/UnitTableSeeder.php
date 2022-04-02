<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert(array(
            0 => array(
                'name' => "pack",
                'equi' => 24,
            ),
            1 => array(
                'name' => "hod",
                'equi' => 1,
            ),
            2 => array(
                'name' => "lot",
                'equi' => 40,
            )
        ));
    }
}
