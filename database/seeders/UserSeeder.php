<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                        'id'=>'1',
                        'nama_user'=>'Ozzy',
                        'no_telp'=>'081213408596',
                        'alamat'=>'jl.tambak medokan ayu 6C/68',
                        'email'=>'bangojikk@gmail.com',
                        'password'=>Hash::make('password'),
                        'created_at'=>date('Y-m-d H:i:s')
                    ]);
    }
}
