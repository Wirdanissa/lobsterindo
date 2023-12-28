<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = "karyawan";
    protected $fillable = ['penangkaran_id', 'user_id', 'created_at', 'updated_at'];

    public function penangkaran()
    {
        return $this->hasOne(penangkaran::class, 'id', 'penangkaran_id');
    }
    public function user()
    {
        return $this->hasOne(penangkaran::class, 'id', 'user_id');
    }
}
