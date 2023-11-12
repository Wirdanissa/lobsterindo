<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $fillable = ['nama_barang', 'id_penangkaran', 'jumlah_barang', 'berat', 'harga', 'deskripsi', 'image'];

    public function penangkaran()
    {
        return $this->hasOne(penangkaran::class, 'id', 'id_penangkaran');
    }

}


