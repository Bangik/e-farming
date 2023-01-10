<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketTanam extends Model
{
    use HasFactory;

    protected $table = 'paket_tanam';
    protected $fillable = ['nama_paket'];
}
