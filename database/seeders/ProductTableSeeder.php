<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(array(
            0 => array(
                'name' => "350ml Bottle",
                'material_id' => 1,
                'cost' => 5,
                'vat_rate' => 5,
                'unit_id' => 1,
            ),
            1 => array(
                'name' => "550ml Bottle",
                'material_id' => 2,
                'cost' => 6,
                'vat_rate' => 5,
                'unit_id' => 1,
            ),
            2 => array(
                'name' => "20l Hod",
                'material_id' => 3,
                'cost' => 1,
                'vat_rate' => 5,
                'unit_id' => 2,
            )
        ));
    }
}
