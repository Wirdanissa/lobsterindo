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
                        // 'id'=>'2',
                        'nama_user'=>'Ozzy',
                        'no_telp'=>'081213408596',
                        'alamat'=>'jl.tambak medokan ayu 6C/68',
                        'email'=>'bangojikk@gmail.com',
                        'password'=>Hash::make('password'),
                        'created_at'=>date('Y-m-d H:i:s'),
                        // 'email_verified_at'=> NULL,
                        // 'remember_token' => NULL,
                        // 'updated_at'=>date('Y-m-d H:i:s')
                    ]);
                    DB::table('users')->insert([
                        // 'id'=>'2',
                        'nama_user'=>'Alwan',
                        'no_telp'=>'082231923585',
                        'alamat'=>'jl.tambak medokan ayu 6C/68',
                        'email'=>'dani.annur.master@gmail.com',
                        'password'=>Hash::make('password'),
                        'created_at'=>date('Y-m-d H:i:s'),
                        // 'email_verified_at'=> NULL,
                        // 'remember_token' => NULL,
                        // 'updated_at'=>date('Y-m-d H:i:s')
                    ]);
                    DB::table('users')->insert([
                        // 'id'=>'2',
                        'nama_user'=>'Naufal',
                        'no_telp'=>'081213408596',
                        'alamat'=>'jl.tambak medokan ayu 6C/68',
                        'email'=>Str::random(10).'@gmail.com',
                        'password'=>Hash::make('password'),
                        'created_at'=>date('Y-m-d H:i:s'),
                        // 'email_verified_at'=> NULL,
                        // 'remember_token' => NULL,
                        // 'updated_at'=>date('Y-m-d H:i:s')
                    ]);
    }
}
