<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class alat_bahan extends Model
{
    use HasFactory;

    protected $table = 'alat_bahan';

    protected $fillable = [
        'kategori',
        'nama',
        'satuan',
        'stok',
        'harga'
    ];

    public static function insert($request){
        $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'satuan' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric'
        ]);
        
        // insert sql
        DB::table('alat_bahan')->insert([
            'kategori' => $request->kategori,
            'nama' => $request->nama,
            'satuan' => $request->satuan,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);
    }

}
