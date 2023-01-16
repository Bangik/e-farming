<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
    use HasFactory;

    protected $table = 'lahan';

    protected $fillable = [
        'user_id',
        'paket_tanam_id',
        'nama',
        'status',
        'luas',
        'daerah',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function paket_tanam()
    {
        return $this->belongsTo(PaketTanam::class);
    }

    public function laporan_panen()
    {
        return $this->hasMany(LaporanPanen::class);
    }
}
