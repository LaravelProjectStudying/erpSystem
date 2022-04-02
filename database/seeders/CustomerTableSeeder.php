<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert(array(
            0 => array(
                'name' => "Adam Q. Hinton",
                'tax_num' => "123456",
                'address1' => "123 Street",
                'phone' => "07888888"
            ),
            1 => array(
                'name' => "John Jr. Smith",
                'tax_num' => "123",
                'address1' => "456 Street",
                'phone' => "0792233233"
            )
        ));
    }
}
