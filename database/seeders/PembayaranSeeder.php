<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('metode_pembayaran')->insert([
            'nama_pembayaran'=>'BCA',
            'code_bank'=>'902836672892'
        ]);
            // $table->id();
            // $table->string('nama_pembayaran',30);
            // $table->string('code_bank',12);
            // $table->timestamps();
    }
}
