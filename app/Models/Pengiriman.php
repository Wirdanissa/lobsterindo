<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = "pengiriman";

    protected $fillable = [
        'foto_nota',
        'foto_timbangan',
        'note',
        'timbangan',
        'total_harga',
        'created_at',
        'updated_at',
        'ongkir',
        'id_kurir'
    ];
}
