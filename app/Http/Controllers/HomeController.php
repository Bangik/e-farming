<?php

namespace App\Http\Controllers;

use App\Models\alat_bahan;
use App\Models\Lahan;
use App\Models\LaporanPanen;
use App\Models\PaketTanam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $petani = User::where('role', 'petani')->count();
        $paket_tanams = PaketTanam::take(5)->get();
        $lahans = Lahan::take(5)->get();
        $obathama = alat_bahan::where('kategori', 'Obat')->count();
        $bahanalat = alat_bahan::where('kategori', '!=', 'Obat')->count();
        $stoks = alat_bahan::where('stok', '<=', 10)->get();
        $panen = LaporanPanen::count();
        $laporan_bulanan = LaporanPanen::selectRaw('MONTH(created_at) as bulan, YEAR(created_at) as tahun, COUNT(*) as jumlah')
            ->groupBy('bulan', 'tahun')
            ->orderBy('tahun', 'asc')
            ->orderBy('bulan', 'asc')
            ->get();
        foreach ($laporan_bulanan as $laporan) {
            $laporan->bulan = date('F', mktime(0, 0, 0, $laporan->bulan, 10)) . " " . $laporan->tahun;
        }
        return view('home', compact('petani', 'paket_tanams', 'lahans', 'obathama', 'bahanalat', 'stoks', 'panen', 'laporan_bulanan'));
    }

    public function change_password()
    {
        return view('auth.password');
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required|min:8',
            'password' => 'required|confirmed|min:8',
        ]);

        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return redirect()->back()->with('error', 'Password lama tidak sesuai');
        }

        $user = User::find(auth()->user()->id);
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('home')->with('success', 'Password berhasil diubah');
    }
}
