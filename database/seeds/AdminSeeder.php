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
            'employe_id' => 123321,
            'email' => 'admin@renos.id',
            'password' => Hash::make('Admin123'),
            'remember_token' => Str::random(32),
            'role' => 'admin'
        ]);
        DB::table('user_details')->insert([
            'name' => 'admin',
            'employe_id' => 123321,
            'tanggal_lahir' => Date('Y-m-d'),
            'kota' => 'Cirebon',
            'email' =>'admin@renos.id',
            'tanggal_bergabung' => Date('Y-m-d'),
            'gender' =>'laki-laki',
            'job_position'=>'Manager',
            'tempat_kelahiran' =>'Cirebon',
            'alamat_ktp'=>'Cirebon',
            'alamat_tinggal'=>'Cirebon',
            'no_hp'=>'085719127681',
            'organisasi_id'=>'1',
            'masa_kerja'=>'2023-2024',
            'bpjs'=>'223466',
            'npwp'=>'223466',
            'status'=>'menikah',
            'attachment' => 'qwerrt.jpg'
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'employe_id' => 2234444,
            'email' => 'user@renos.id',
            'password' => Hash::make('User1235'),
            'remember_token' => Str::random(32),
            'role' => 'user'
        ]);
        DB::table('user_details')->insert([
            'name' => 'User',
            'employe_id' => 2234444,
            'tanggal_lahir' => Date('Y-m-d'),
            'kota' => 'Jakarta',
            'tanggal_bergabung' => Date('Y-m-d'),
            'attachment' => 'Apawe.jpg',
            'email' => 'user@renos.id',
            'gender' =>'laki-laki',
            'job_position'=>'Manager IT',
            'tempat_kelahiran' =>'Jakarta',
            'alamat_ktp'=>'Jakarta',
            'alamat_tinggal'=>'Jakarta',
            'no_hp'=>'085719127682',
            'organisasi_id'=>'2',
            'masa_kerja'=>'2023-2025',
            'bpjs'=>'223444',
            'npwp'=>'223444',
            'status'=>'menikah',
        ]);
        DB::table('user_families')->insert([
            'employe_id'=>123321,
            'nama_lengkap_family'=>'jehyun',
            'tempat_kelahiran_family'=>'Cirebon',
            'tgl_lahir_family'=> Date('Y-m-d'),
            'alamat_ktp_family'=>'Cirebon',
            'alamat_tinggal_family'=>'Cirebon',
            'bpjs_family'=>'223466',
            'npwp_family'=>'223466',
            'gender_family'=>'perempuan',
            'attachment'=>'ktp.jpg'

        ]);
        DB::table('user_families')->insert([
            'employe_id'=>123321,
            'nama_lengkap_family'=>'rizki',
            'tempat_kelahiran_family'=>'Cirebon',
            'tgl_lahir_family'=> Date('Y-m-d'),
            'alamat_ktp_family'=>'Cirebon',
            'alamat_tinggal_family'=>'Cirebon',
            'bpjs_family'=>'223466',
            'npwp_family'=>'223466',
            'attachment'=>'ktp.jpg',
            'gender_family'=>'pria'
        ]);
        DB::table('user_families')->insert([
            'employe_id'=>2234444,
            'nama_lengkap_family'=>'jimin',
            'tempat_kelahiran_family'=>'Jakarta',
            'tgl_lahir_family'=> Date('Y-m-d'),
            'alamat_ktp_family'=>'Jakarta',
            'alamat_tinggal_family'=>'Jakarta',
            'bpjs_family'=>'223444',
            'npwp_family'=>'223444',
            'gender_family'=>'perempuan',
            'attachment'=>'ktp.jpg'

        ]);
        DB::table('user_families')->insert([
            'employe_id'=>2234444,
            'nama_lengkap_family'=>'raka',
            'tempat_kelahiran_family'=>'Jakarta',
            'tgl_lahir_family'=> Date('Y-m-d'),
            'alamat_ktp_family'=>'Jakarta',
            'alamat_tinggal_family'=>'Jakarta',
            'bpjs_family'=>'223444',
            'npwp_family'=>'223444',
            'attachment'=>'ktp.jpg',
            'gender_family'=>'pria'
        ]);
        DB::table('family_types')->insert([
            'employe_id'=>123321,
            'user_family_id'=>'1',
            'hubungan'=>'istri',
        ]);
        DB::table('family_types')->insert([
            'employe_id'=>123321,
            'user_family_id'=>'2',
            'hubungan'=>'anak',
        ]);
        DB::table('family_types')->insert([
            'employe_id'=>2234444,
            'user_family_id'=>'3',
            'hubungan'=>'istri',
        ]);
        DB::table('family_types')->insert([
            'employe_id'=>2234444,
            'user_family_id'=>'4',
            'hubungan'=>'anak',
        ]);

    }
}
