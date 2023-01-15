<?php

namespace App\Http\Controllers;

use App\Models\alat_bahan;
use App\Models\PaketTanam;
use Illuminate\Http\Request;

class PaketTanamController extends Controller
{
    public function index()
    {
        $paket_tanams = PaketTanam::all();
        return view('paket_tanam.index', compact('paket_tanams'));
    }

    public function create()
    {
        $alat_bahans = alat_bahan::all();
        return view('paket_tanam.create', compact('alat_bahans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required',
        ]);

        $paket_tanam = new PaketTanam();
        $paket_tanam->nama_paket = $request->nama_paket;
        $paket_tanam->save();

        $paket_tanam->alat_bahan()->attach($request->alat_bahan);
        return redirect()->route('paket-tanam.index')
            ->with('success', 'Paket Tanam berhasil ditambahkan');
    }

    public function show($paket_tanam)
    {
        $paket_tanams = PaketTanam::find($paket_tanam)->toArray();
        $alat_bahans = PaketTanam::find($paket_tanam)->alat_bahan;
        return view('paket_tanam.show', compact('paket_tanams', 'alat_bahans'));
    }

    public function edit($paket_tanam)
    {
        $paket_tanam = PaketTanam::find($paket_tanam);
        $alat_bahans = alat_bahan::all();
        return view('paket_tanam.edit', compact('paket_tanam', 'alat_bahans'));
    }

    public function update(Request $request, $paket_tanam)
    {
        $request->validate([
            'nama_paket' => 'required',
        ]);

        $paket_tanam = PaketTanam::find($paket_tanam);
        $paket_tanam->nama_paket = $request->nama_paket;
        $paket_tanam->save();

        $paket_tanam->alat_bahan()->sync($request->alat_bahan);

        return redirect()->route('paket-tanam.index')
            ->with('success', 'Paket Tana berhasil diupdate');
    }

    public function destroy(PaketTanam $paket_tanam)
    {
        $paket_tanam->delete();

        return redirect()->route('paket-tanam.index')
            ->with('success', 'Paket Tanam berhasil dihapus');
    }
}
