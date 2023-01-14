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

    public function update(Request $request, $id)
    {
        // dd($request->kategori);
        $update = DB::table('alat_bahan')->where('id_bahan_alat', $id)->update(
            ['bahan_alat' => $request->nama, 'kategori' => $request->kategori,'satuan' => $request->satuan]
            );
        
        return redirect()->route('alatb.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function show($alatb)
    {
        $konten = DB::table('alat_bahan')->where('id_bahan_alat', $alatb)->get()->toArray();
        // dd($konten[0]);
        $id = $konten[0]->id_bahan_alat;
        $bahan_alat = $konten[0]->bahan_alat;
        $kategori = $konten[0]->kategori;
        $satuan = $konten[0]->satuan;
        return view('alat_bahan.show',['id' => $id, 'ba' => $bahan_alat, 'kategori' => $kategori, 'satuan' => $satuan]);
    }

    public function edit($alatb)
    {
        $konten = DB::table('alat_bahan')->where('id_bahan_alat', $alatb)->get()->toArray();
        $id = $konten[0]->id_bahan_alat;
        $bahan_alat = $konten[0]->bahan_alat;
        $kategori = $konten[0]->kategori;
        $satuan = $konten[0]->satuan;
        return view('alat_bahan.edit', ['id' => $id, 'ba' => $bahan_alat, 'kategori' => $kategori, 'satuan' => $satuan]);
    }

    public function destroy($alatb)
    {
        DB::table('alat_bahan')->where('id_bahan_alat', $alatb)->delete();
        
        return redirect()->route('alatb.index')
            ->with('success', 'Data berhasil dihapus');
    }

}
