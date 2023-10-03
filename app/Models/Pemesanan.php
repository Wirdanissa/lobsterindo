<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = "pemesanan";
    protected $fillable = [
        'id_barang',
        'id_pembayaran',
        'id_user',
        'tgl_pemesanan',
        'tgl_pembayaran',
        'tgl_pengiriman',
        'jumlah_pemesanan',
        'total_pembayaran',
        'alamat_pengiriman',
        'deskripsi_pemesanan',
        'status_pembayaran',
        'status_pemesanan',
        'status_pengiriman',
        'no_pembayaran'
    ];

    public function barang(){
        return $this->hasOne(Barang::class, 'id', 'id_barang');
    }

    public function pembayaran(){
        return $this->hasOne(Pembayaran::class, 'id', 'id_pembayaran');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
