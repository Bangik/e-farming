<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class obath extends Model
{
    use HasFactory;

    protected $table = 'jadwal_obat_hama';

    protected $fillable = [
        'alat_bahan_id',
        'jenis_obat',
        'tanggal',
        'waktu',
    ];

    public static function insert($request){
        $request->validate([
            'alat_bahan_id' => 'required',
            'jenis_obat' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
        ]);
        
        // insert sql
        DB::table('jadwal_obat_hama')->insert([
            'alat_bahan_id' => $request->alat_bahan_id,
            'jenis_obat' => $request->jenis_obat,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ]);
    }

    public function alatbahan(){
        return $this->belongsTo(alat_bahan::class, 'alat_bahan_id', 'id');
    }


}
