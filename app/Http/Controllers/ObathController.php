<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obath;
use Illuminate\Support\Facades\DB;

class ObathController extends Controller
{

    public function index()
    {
        $konten = DB::table('jadwal_obat_hama')->get();
        return view('obath.index',['konten' => $konten]);
    }

    public function create()
    {
        return view('obath.create');
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
            ['nama_obat' => $request->nama_obat, 'jenis_obat' => $request->jenis, 'tanggal' => $request->tgl, 'waktu' => $request->waktu]
            );
        
        return redirect()->route('obath.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function show($alatb)
    {
        $konten = DB::table('jadwal_obat_hama')->where('id', $alatb)->get()->toArray();
        $id = $konten[0]->id;
        $nama_obat = $konten[0]->nama_obat;
        $jenis_obat = $konten[0]->jenis_obat;
        $tanggal = $konten[0]->tanggal;
        $waktu = $konten[0]->waktu;

        return view('obath.show',['id' => $id, 'namao' => $nama_obat, 'jenis' => $jenis_obat, 'tgl' => $tanggal, 'waktu' => $waktu ]);
    }

    public function edit($alatb)
    {
        $konten = DB::table('jadwal_obat_hama')->where('id', $alatb)->get()->toArray();
        $id = $konten[0]->id;
        $nama_obat = $konten[0]->nama_obat;
        $jenis_obat = $konten[0]->jenis_obat;
        $tanggal = $konten[0]->tanggal;
        $waktu = $konten[0]->waktu;

        return view('obath.edit', ['id' => $id, 'namao' => $nama_obat, 'jenis' => $jenis_obat, 'tgl' => $tanggal, 'waktu' => $waktu ]);
    }

    public function destroy($alatb)
    {
        DB::table('jadwal_obat_hama')->where('id', $alatb)->delete();
        
        return redirect()->route('obath.index')
            ->with('success', 'Data berhasil dihapus');
    }

}


