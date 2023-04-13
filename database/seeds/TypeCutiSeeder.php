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
            'leave_type' => 'cuti',
            'day' => '7'
        ]);
        DB::table('leave_masters')->insert([
            'leave_type' => 'sakit',
            'day' => '10'
        ]);
        DB::table('leave_masters')->insert([
            'leave_type' => 'melahirkan',
            'day' => '60'
        ]);
        DB::table('leave_masters')->insert([
            'leave_type' => 'haid',
            'day' => '7'
        ]);
    }
}
