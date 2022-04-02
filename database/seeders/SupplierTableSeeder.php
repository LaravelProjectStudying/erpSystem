<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert(array(
            0 => array(
                'name' => "Supplier 1",
                'address1' => "Supplier 1 Address",
                'phone' => "12345678"
            ),
            1 => array(
                'name' => "Supplier 2",
                'address1' => "Supplier 2 Address",
                'phone' => "23456789"
            )
        ));
    }
}
