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
        'jenis',
        'satuan',
        'stok',
        'harga'
    ];

    public static function insert($request){
        $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'jenis' => 'required',
            'satuan' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric'
        ]);
        
        // insert sql
        DB::table('alat_bahan')->insert([
            'kategori' => $request->kategori,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'satuan' => $request->satuan,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);
    }

    public function paket_tanam()
    {
        return $this->belongsToMany(PaketTanam::class, 'paket_tanam_alat', 'alat_bahan_id', 'paket_tanam_id');
    }

    public function obathama()
    {
        return $this->hasMany(obath::class, 'alat_bahan_id', 'id');
    }

    public function jadwal_pupuk()
    {
        return $this->hasMany(JadwalPupuk::class, 'alat_bahan_id', 'id');
    }

}
