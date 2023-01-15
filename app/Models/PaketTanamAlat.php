<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketTanamAlat extends Model
{
    use HasFactory;

    protected $table = 'paket_tanam_alat';

    protected $fillable = [
        'paket_tanam_id',
        'alat_bahan_id',
    ];
}
