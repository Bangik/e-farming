<?php

namespace App\Http\Controllers;

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
        return view('paket_tanam.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required',
        ]);

        PaketTanam::create($request->all());

        return redirect()->route('paket-tanam.index')
            ->with('success', 'Paket Tanam berhasil ditambahkan');
    }

    public function show($paket_tanam)
    {
        $paket_tanam = PaketTanam::find($paket_tanam)->toArray();
        return view('paket_tanam.show', compact('paket_tanam'));
    }

    public function edit($paket_tanam)
    {
        $paket_tanam = PaketTanam::find($paket_tanam);
        return view('paket_tanam.edit', compact('paket_tanam'));
    }

    public function update(Request $request, PaketTanam $paket_tanam)
    {
        $request->validate([
            'nama_paket' => 'required',
        ]);

        $paket_tanam->update($request->all());

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
