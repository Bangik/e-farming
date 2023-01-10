<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alat_bahan;
use App\Models\User;

class Alat_BahanController extends Controller
{
    public function index()
    {
        return view('alat_bahan.index');
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

    public function update()
    {
        
    }

    public function delete()
    {
        
    }

    public function select()
    {
        
    }
}
