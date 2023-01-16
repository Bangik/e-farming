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
        $lahan = Lahan::all();
        dd($lahan);
        return view('laporan_panen.create', compact('lahan'));
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
        return redirect()->route('laporan-panen.index')->with('success', 'Laporan Panen Berhasil Ditambahkan');
    }

    public function show(LaporanPanen $laporan_panen)
    {
        return view('laporan_panen.show', compact('laporan_panen'));
    }

    public function edit(LaporanPanen $laporan_panen)
    {
        $lahan = Lahan::all();
        return view('laporan_panen.edit', compact('laporan_panen', 'lahan'));
    }

    public function update(Request $request, LaporanPanen $laporan_panen)
    {
        $request->validate([
            'lahan_id' => 'required',
            'nama' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
        ]);

        $laporan_panen->update($request->all());
        return redirect()->route('laporan-panen.index')->with('success', 'Laporan Panen Berhasil Diubah');
    }

    public function destroy(LaporanPanen $laporan_panen)
    {
        $laporan_panen->delete();
        return redirect()->route('laporan-panen.index')->with('success', 'Laporan Panen Berhasil Dihapus');
    }
}
