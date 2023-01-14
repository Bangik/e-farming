<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alat_bahan;
use Illuminate\Support\Facades\DB;

class Alat_BahanController extends Controller
{
    public function index()
    {
        $konten = DB::table('alat_bahan')->get();
        return view('alat_bahan.index',['konten' => $konten]);
    }

    public function create()
    {
        return view('alat_bahan.create');
    }

    public function store(Request $request)
    {
        alat_bahan::insert($request);

        return redirect()->route('alatb.index')
            ->with('success', 'Tersimpan!');
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }

    public function select()
    {
        
    }
}
