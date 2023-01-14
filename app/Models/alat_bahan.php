<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class alat_bahan extends Model
{

    public static function insert($request){
        $request->validate([
            'kategori' => 'required',
            'bahan_alat' => 'required',
            'satuan' => 'required|numeric',
        ]);
        
        // insert sql
        DB::table('alat_bahan')->insert([
            'kategori' => $request->kategori,
            'bahan_alat' => $request->bahan_alat,
            'satuan' => $request->satuan
        ]);
    }

}
