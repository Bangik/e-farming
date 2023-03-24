<?php

namespace App\Http\Controllers;

use App\Models\Lahan;
use App\Models\PenanamanPascaPanen;
use Illuminate\Http\Request;

class PenanamanPascaPanenController extends Controller
{
    public function index()
    {
        $penanaman_pasca_panens = PenanamanPascaPanen::all();
        return view('penanaman_pasca_panens.index', compact('penanaman_pasca_panens'));
    }

    public function create()
    {
        $lahans = Lahan::all();
        return view('penanaman_pasca_panens.create', compact('lahans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lahan_id' => 'required',
            'tanggal_tanam' => 'required',
            'tanggal_panen' => 'required',
        ]);

        PenanamanPascaPanen::create($request->all());

        return redirect()->route('penanaman-pasca-panen.index')
            ->with('success', 'Penanaman Pasca Panen berhasil ditambahkan');
    }

    public function show($penanaman_pasca_panen)
    {
        $penanaman_pasca_panen = PenanamanPascaPanen::find($penanaman_pasca_panen);
        return view('penanaman_pasca_panens.show', compact('penanaman_pasca_panen'));
    }

    public function edit($penanaman_pasca_panen)
    {
        $lahans = Lahan::all();
        $penanaman_pasca_panen = PenanamanPascaPanen::find($penanaman_pasca_panen);
        return view('penanaman_pasca_panens.edit', compact('penanaman_pasca_panen', 'lahans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'lahan_id' => 'required',
            'tanggal_tanam' => 'required',
            'tanggal_panen' => 'required',
        ]);

        PenanamanPascaPanen::find($id)->update($request->all());

        return redirect()->route('penanaman-pasca-panen.index')
            ->with('success', 'Penanaman Pasca Panen berhasil diupdate');
    }

    public function destroy($id)
    {
        PenanamanPascaPanen::find($id)->delete();

        return redirect()->route('penanaman-pasca-panen.index')
            ->with('success', 'Penanaman Pasca Panen berhasil dihapus');
    }
}
