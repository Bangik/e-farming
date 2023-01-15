<?php

namespace App\Http\Controllers;

use App\Models\alat_bahan;
use App\Models\Lahan;
use App\Models\PaketTanam;
use App\Models\User;
use Illuminate\Http\Request;

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

        return view('home', compact('petani', 'paket_tanams', 'lahans', 'obathama', 'bahanalat', 'stoks'));
    }
}
