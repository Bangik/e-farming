<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenanamanPascaPanen extends Model
{
    use HasFactory;

    protected $table = 'penanaman_pasca_panens';

    protected $fillable = [
        'lahan_id',
        'tanggal_tanam',
        'tanggal_panen',
    ];

    public function lahan()
    {
        return $this->belongsTo(Lahan::class);
    }
}
