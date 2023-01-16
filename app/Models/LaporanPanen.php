<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPanen extends Model
{
    use HasFactory;

    protected $table = 'laporan_panen';

    protected $fillable = [
        'lahan_id',
        'nama',
        'jumlah',
        'satuan',
        'harga',
    ];

    public function lahan()
    {
        return $this->belongsTo(Lahan::class);
    }
}
