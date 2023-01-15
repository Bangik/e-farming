<?php

namespace App\Http\Controllers;

use App\Models\alat_bahan;
use Illuminate\Http\Request;
use App\Models\obath;
use Illuminate\Support\Facades\DB;

class ObathController extends Controller
{

    public function index()
    {
        $konten = obath::all();
        return view('obath.index',['konten' => $konten]);
    }

    public function create()
    {
        $obats = alat_bahan::where('kategori', 'obat')->get();
        return view('obath.create', compact('obats'));
    }

    public function store(Request $request)
    {
        obath::insert($request);

        return redirect()->route('obath.index')
            ->with('success', 'Tersimpan!');
    }

    public function update(Request $request, $id)
    {
        $update = DB::table('jadwal_obat_hama')->where('id', $id)->update(
            ['alat_bahan_id' => $request->alat_bahan_id, 'jenis_obat' => $request->jenis, 'tanggal' => $request->tgl, 'waktu' => $request->waktu]
            );
        
        return redirect()->route('obath.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function show($obath)
    {
        $obathama = obath::find($obath);

        return view('obath.show', compact('obathama'));
    }

    public function edit($alatb)
    {
        $obats = alat_bahan::where('kategori', 'obat')->get();
        $konten = DB::table('jadwal_obat_hama')->where('id', $alatb)->get()->toArray();
        $id = $konten[0]->id;
        $alat_bahan_id = $konten[0]->alat_bahan_id;
        $jenis_obat = $konten[0]->jenis_obat;
        $tanggal = $konten[0]->tanggal;
        $waktu = $konten[0]->waktu;

        return view('obath.edit', ['id' => $id, 'alat_bahan_id' => $alat_bahan_id, 'jenis' => $jenis_obat, 'tgl' => $tanggal, 'waktu' => $waktu, 'obats' => $obats ]);
    }

    public function destroy($alatb)
    {
        DB::table('jadwal_obat_hama')->where('id', $alatb)->delete();
        
        return redirect()->route('obath.index')
            ->with('success', 'Data berhasil dihapus');
    }

}


