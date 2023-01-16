<?php

namespace App\Http\Controllers;

use App\Models\Lahan;
use App\Models\LaporanPanen;
use Illuminate\Http\Request;

class LaporanPanenController extends Controller
{
    public function index()
    {
        $laporan_panens = LaporanPanen::all();
        return view('laporan_panen.index', compact('laporan_panens'));
    }

    public function create()
    {
        $lahans = Lahan::all();
        return view('laporan_panen.create', compact('lahans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lahan_id' => 'required',
            'nama' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
        ]);

        LaporanPanen::create($request->all());
        return redirect()->route('laporan.index')->with('success', 'Laporan Panen Berhasil Ditambahkan');
    }

    public function show($laporan)
    {
        $laporan = LaporanPanen::find($laporan);
        return view('laporan_panen.show', compact('laporan'));
    }

    public function edit($laporan)
    {
        $lahans = Lahan::all();
        $laporan = LaporanPanen::find($laporan);
        return view('laporan_panen.edit', compact('laporan', 'lahans'));
    }

    public function update(Request $request, $laporan)
    {
        $request->validate([
            'lahan_id' => 'required',
            'nama' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
        ]);

        LaporanPanen::find($laporan)->update($request->all());
        return redirect()->route('laporan.index')->with('success', 'Laporan Panen Berhasil Diubah');
    }

    public function destroy($laporan)
    {
        LaporanPanen::find($laporan)->delete();
        return redirect()->route('laporan.index')->with('success', 'Laporan Panen Berhasil Dihapus');
    }
}
