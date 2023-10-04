<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pemesanan')->insert([
            'id_barang' => '2',
            'id_pembayaran' => '1',
            'id_user' =>3,
            'tgl_pemesanan'=> date('Y-m-d H:i:s'),
            'tgl_pembayaran' => date('Y-m-d H:i:s'),
            'tgl_pengiriman'=> date('Y-m-d H:i:s'),
            'jumlah_pemesanan' => '10',
            'total_pembayaran' => '1800000',
            'alamat_pengiriman' => 'Jl.IR Soekarno 203',
            // 'deskripsi_pemesanan' => '-',
            'status_pembayaran' => true,
            'status_pemesanan' => true,
            'status_pengiriman'=> false,
            'no_pembayaran' => '78642'
        ]);
        DB::table('pemesanan')->insert([
            'id_barang' => '4',
            'id_pembayaran' => '1',
            'id_user' =>2,
            'tgl_pemesanan'=> date('Y-m-d H:i:s'),
            'tgl_pembayaran' => date('Y-m-d H:i:s'),
            'tgl_pengiriman'=> date('Y-m-d H:i:s'),
            'jumlah_pemesanan' => '10',
            'total_pembayaran' => '1800000',
            'alamat_pengiriman' => 'Jl.IR Soekarno 203',
            // 'deskripsi_pemesanan' => '-',
            'status_pembayaran' => true,
            'status_pemesanan' => true,
            'status_pengiriman'=> false,
            'no_pembayaran' => '78642'
        ]);
    }
}
