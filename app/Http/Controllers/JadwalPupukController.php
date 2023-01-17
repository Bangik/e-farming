<?php

namespace App\Http\Controllers;

use App\Models\alat_bahan;
use App\Models\JadwalPupuk;
use Illuminate\Http\Request;

class JadwalPupukController extends Controller
{
    public function index()
    {
        $jadwal_pupuks = JadwalPupuk::all();
        return view('jadwal_pupuk.index', compact('jadwal_pupuks'));
    }

    public function create()
    {
        $alat_bahans = alat_bahan::all();
        return view('jadwal_pupuk.create', compact('alat_bahans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'alat_bahan_id' => 'required',
            'total' => 'required|numeric',
            'tanggal' => 'required',
            'status' => 'required'
        ]);

        JadwalPupuk::create($request->all());
        return redirect()->route('jadwal-pupuk.index')->with('status', 'Data berhasil ditambahkan!');
    }

    public function show($jadwal_pupuk)
    {
        $jadwal_pupuk = JadwalPupuk::find($jadwal_pupuk);
        return view('jadwal_pupuk.show', compact('jadwal_pupuk'));
    }

    public function edit(JadwalPupuk $jadwal_pupuk)
    {
        $alat_bahans = alat_bahan::all();
        return view('jadwal_pupuk.edit', compact('jadwal_pupuk', 'alat_bahans'));
    }

    public function update(Request $request, $jadwal_pupuk)
    {
        $request->validate([
            'alat_bahan_id' => 'required',
            'total' => 'required|numeric',
            'tanggal' => 'required',
            'status' => 'required'
        ]);

        JadwalPupuk::where('id', $jadwal_pupuk)
            ->update([
                'alat_bahan_id' => $request->alat_bahan_id,
                'total' => $request->total,
                'tanggal' => $request->tanggal,
                'status' => $request->status
            ]);
        return redirect()->route('jadwal-pupuk.index')->with('status', 'Data berhasil diubah!');
    }

    public function destroy($jadwal_pupuk)
    {
        JadwalPupuk::destroy($jadwal_pupuk);
        return redirect()->route('jadwal-pupuk.index')->with('status', 'Data berhasil dihapus!');
    }
}
