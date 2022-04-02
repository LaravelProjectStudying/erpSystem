<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeaveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leaves')->insert(array(
            0 => array(
                'human_id' => 1,
                'annual_leave' => 12,
                'avai_annual_leave' => 12,
                'unpaid_leave' => 0,                
            ),
            1 => array(
                'human_id' => 2,
                'annual_leave' => 12,
                'avai_annual_leave' => 12,
                'unpaid_leave' => 0, 
            ),
            2 => array(
                'human_id' => 3,
                'annual_leave' => 12,
                'avai_annual_leave' => 12,
                'unpaid_leave' => 0, 
            ),
            3 => array(
                'human_id' => 4,
                'annual_leave' => 12,
                'avai_annual_leave' => 12,
                'unpaid_leave' => 0, 
            )
        ));
    }
}
