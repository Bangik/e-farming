<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketTanam extends Model
{
    use HasFactory;

    protected $table = 'paket_tanam';
    protected $fillable = ['nama_paket'];

    public function lahan()
    {
        return $this->hasMany(Lahan::class);
    }

    public function alat_bahan()
    {
        return $this->belongsToMany(alat_bahan::class, 'paket_tanam_alat', 'paket_tanam_id', 'alat_bahan_id');
    }
}
