<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            'id_penangkaran'=>'1',
            'nama_barang'=>'Lobster Air Tawar konsumsi',
            'jumlah_barang'=>'242', // ekor
            'berat'=>'11', //kg
            'harga'=>'180000',
            'deskripsi'=>'Lobster air tawar dengan ukuran siap konsumsi ( > 4inc )'
        ]);
        DB::table('barang')->insert([
            'id_penangkaran'=>'1',
            'nama_barang'=>'Lobster Air Tawar konsumsi',
            'jumlah_barang'=>'242', // ekor
            'berat'=>'11', //kg
            'harga'=>'180000',
            'deskripsi'=>'Lobster air tawar dengan ukuran siap konsumsi ( > 4inc )'
        ]);
        DB::table('barang')->insert([
            'id_penangkaran'=>'1',
            'nama_barang'=>'Lobster Air Tawar konsumsi',
            'jumlah_barang'=>'242', // ekor
            'berat'=>'11', //kg
            'harga'=>'180000',
            'deskripsi'=>'Lobster air tawar dengan ukuran siap konsumsi ( > 4inc )'
        ]);
        DB::table('barang')->insert([
            'id_penangkaran'=>'1',
            'nama_barang'=>'Lobster Air Tawar konsumsi',
            'jumlah_barang'=>'242', // ekor
            'berat'=>'11', //kg
            'harga'=>'180000',
            'deskripsi'=>'Lobster air tawar dengan ukuran siap konsumsi ( > 4inc )'
        ]);
            // $table->id();
            // $table->unsignedBigInteger('id_penangkaran');
            // $table->foreign('id_penangkaran')->references('id')->on('penangkaran');
            // $table->string('nama_barang',30);
            // $table->integer('jumlah_barang');
            // $table->integer('berat');
            // $table->integer('harga');
            // $table->text('deskripsi');
            // $table->timestamps();
    }
}
