<?php

namespace App\Http\Controllers;

use App\Models\Lahan;
use App\Models\User;
use Illuminate\Http\Request;

class LahanController extends Controller
{
    public function index()
    {
        $lahans = Lahan::all();
        return view('lahan.index', compact('lahans'));
    }

    public function create()
    {
        $users = User::all();
        return view('lahan.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'luas' => 'required',
            'daerah' => 'required',
        ]);

        Lahan::create($request->all());

        return redirect()->route('lahan.index')
            ->with('success', 'Lahan berhasil ditambahkan');
    }

    public function show($lahan)
    {
        $lahan = Lahan::find($lahan)->toArray();
        return view('lahan.show', compact('lahan'));
    }

    public function edit($lahan)
    {
        $users = User::all();
        $lahan = Lahan::find($lahan);
        return view('lahan.edit', compact('lahan', 'users'));
    }

    public function update(Request $request, Lahan $lahan)
    {
        $request->validate([
            'user_id' => 'required',
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
