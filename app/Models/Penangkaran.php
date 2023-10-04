<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penangkaran extends Model
{
    use HasFactory;
    protected $table = "penangkaran";
    protected $fillable = [
        'manager_id',
        'lokasi_penangkaran',
        'jumlah_karyawan',
    ];

    public function barang(){
        return $this->hasMany(barang::class);
    }

    // Function untuk manager_id
    public function manager(){
        return $this->hasOne(User::class, 'id', 'manager_id');
    }

    // public function pegawai(){
    //     return $this->hasMany(User::class)
    // }


}
