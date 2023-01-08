<?php

namespace App\Http\Controllers;

use App\Models\Lahan;
use Illuminate\Http\Request;

class LahanController extends Controller
{
    public function index()
    {
        $lahan = Lahan::all();
        return view('lahan.index', compact('lahan'));
    }

    public function create()
    {
        return view('lahan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'status' => 'required',
            'luas' => 'required',
            'daerah' => 'required',
        ]);

        Lahan::create($request->all());

        return redirect()->route('lahan.index')
            ->with('success', 'Lahan berhasil ditambahkan');
    }

    public function show(Lahan $lahan)
    {
        return view('lahan.show', compact('lahan'));
    }

    public function edit(Lahan $lahan)
    {
        return view('lahan.edit', compact('lahan'));
    }

    public function update(Request $request, Lahan $lahan)
    {
        $request->validate([
            'nama' => 'required',
            'status' => 'required',
            'luas' => 'required',
            'daerah' => 'required',
        ]);

        $lahan->update($request->all());

        return redirect()->route('lahan.index')
            ->with('success', 'Lahan berhasil diupdate');
    }

    public function destroy(Lahan $lahan)
    {
        $lahan->delete();

        return redirect()->route('lahan.index')
            ->with('success', 'Lahan berhasil dihapus');
    }
}
