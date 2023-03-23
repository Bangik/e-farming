<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPupuk extends Model
{
    use HasFactory;

    protected $table = 'jadwal_pupuk';

    protected $fillable = [
        'alat_bahan_id',
        'tanggal',
        'waktu',
    ];

    public function alat_bahan()
    {
        return $this->belongsTo(alat_bahan::class);
    }
}
