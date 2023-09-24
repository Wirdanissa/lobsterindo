<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('karyawan')->insert([
            'id_penangkaran'=>'1',
            'id_user'=>'1'
        ]);
        
        DB::table('karyawan')->insert([
            'id_penangkaran'=>'1',
            'id_user'=>'2'
        ]);
            // $table->unsignedBigInteger('id_penangkaran');
            // $table->foreign('id_penangkaran')->references('id')->on('penangkaran');
            // $table->unsignedBigInteger('id_user');
            // $table->foreign('id_user')->references('id')->on('users');
    }
}
