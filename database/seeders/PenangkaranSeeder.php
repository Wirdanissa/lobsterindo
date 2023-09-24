<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PenangkaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penangkaran')->insert([
            'id_user'=>'1',
            'lokasi_penangkaran'=>'jl.tambak medokan ayu VIC/68',
            'jumlah_karyawan'=>'2',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
