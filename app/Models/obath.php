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
        'nama_obat',
        'jenis_obat',
        'tanggal',
        'waktu',
    ];

    public static function insert($request){
        $request->validate([
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
        ]);
        
        // insert sql
        DB::table('jadwal_obat_hama')->insert([
            'nama_obat' => $request->nama_obat,
            'jenis_obat' => $request->jenis_obat,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ]);
    }


}
