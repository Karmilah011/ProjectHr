<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'no_karyawan' => '123321',
            'email' => 'admin@renos.id',
            'password' => Hash::make('Admin123'),
            'remember_token' => Str::random(32),
            'role' => 'admin'
        ]);
        DB::table('user_details')->insert([
            'name' => 'admin',
            'employe_id' => '123321',
            'tanggal_lahir' => Date('Y-m-d'),
            'kota' => 'Cirebon',
            'email' =>'admin@renos.id',
            'tanggal_bergabung' => Date('Y-m-d'),
            'gender' =>'laki-laki',
            'job_id'=>'Manager',
            'tempat_kelahiran' =>'Cirebon',
            'alamat_ktp'=>'Cirebon',
            'alamat_tinggal'=>'Cirebon',
            'no_hp'=>'085719127681',
            'organisasi_id'=>'1',
            'masa_kerja'=>'2023-2024',
            'status'=>'menikah',
            'attachment' => 'qwerrt.jpg'
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'no_karyawan' => '2234444',
            'email' => 'user@renos.id',
            'password' => Hash::make('User1235'),
            'remember_token' => Str::random(32),
            'role' => 'user'
        ]);
        DB::table('user_details')->insert([
            'name' => 'User',
            'employe_id' => '2234444',
            'tanggal_lahir' => Date('Y-m-d'),
            'kota' => 'Jakarta',
            'tanggal_bergabung' => Date('Y-m-d'),
            'attachment' => 'Apawe.jpg',
            'email' => 'user@renos.id',
            'gender' =>'laki-laki',
            'job_id'=>'Manager IT',
            'tempat_kelahiran' =>'Jakarta',
            'alamat_ktp'=>'Jakarta',
            'alamat_tinggal'=>'Jakarta',
            'no_hp'=>'085719127682',
            'organisasi_id'=>'2',
            'masa_kerja'=>'2023-2025',
            'status'=>'menikah',
        ]);

    }
}
