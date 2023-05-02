<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class TypeCutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leave_masters')->insert([
            'leave_type' => 'Annual Leave',
            'day' => '7'
        ]);
        DB::table('leave_masters')->insert([
            'leave_type' => 'Sick leave',
            'day' => '10'
        ]);
        DB::table('leave_masters')->insert([
            'leave_type' => 'Give Birth To',
            'day' => '60'
        ]);
        DB::table('leave_masters')->insert([
            'leave_type' => 'haid',
            'day' => '7'
        ]);
    }
}
