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
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'kategori' => 'required',
            'satuan' => 'required',
            'stok' => 'required',
            'harga' => 'required'
        ]);
        
        alat_bahan::find($id)->update($request->all());
        
        return redirect()->route('alatb.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function show($alatb)
    {
        $konten = DB::table('alat_bahan')->where('id', $alatb)->get()->toArray();
        // dd($konten[0]);
        $id = $konten[0]->id;
        $bahan_alat = $konten[0]->nama;
        $kategori = $konten[0]->kategori;
        $jenis = $konten[0]->jenis;
        $satuan = $konten[0]->satuan;
        $stok = $konten[0]->stok;
        $harga = $konten[0]->harga;
        return view('alat_bahan.show',['id' => $id, 'ba' => $bahan_alat, 'kategori' => $kategori, 'satuan' => $satuan, 'stok' => $stok, 'harga' => $harga, 'jenis' => $jenis]);
    }

    public function edit($alatb)
    {
        $konten = DB::table('alat_bahan')->where('id', $alatb)->get()->toArray();
        $id = $konten[0]->id;
        $bahan_alat = $konten[0]->nama;
        $kategori = $konten[0]->kategori;
        $jenis = $konten[0]->jenis;
        $satuan = $konten[0]->satuan;
        $stok = $konten[0]->stok;
        $harga = $konten[0]->harga;
        return view('alat_bahan.edit', ['id' => $id, 'ba' => $bahan_alat, 'kategori' => $kategori, 'satuan' => $satuan, 'stok' => $stok, 'harga' => $harga, 'jenis' => $jenis]);
    }

    public function destroy($alatb)
    {
        DB::table('alat_bahan')->where('id', $alatb)->delete();
        
        return redirect()->route('alatb.index')
            ->with('success', 'Data berhasil dihapus');
    }

}
