<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Jurusan;
use App\Models\Pendaftar;
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
        // COUNT
        $j = Jurusan::count();
        $g1 = Gelombang::where('gelombang', 'Gelombang 1')->count();
        $g2 = Gelombang::where('gelombang', 'Gelombang 2')->count();
        $g3 = Gelombang::where('gelombang', 'Gelombang 3')->count();
        $g4 = Gelombang::where('gelombang', 'Gelombang 4')->count();
        $g5 = Gelombang::where('gelombang', 'Gelombang 5')->count();
        $g6 = Gelombang::where('gelombang', 'Gelombang 6')->count();

        // Tampilin
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::first();
        $pendaftar = Pendaftar::orderBy('id', 'DESC')->get();
        return view('Dashboard/index', compact(
            // COUNT
            'j',
            'g1',
            'g2',
            'g3',
            'g4',
            'g5',
            'g6',





            // TAMPILIN
            'jurusan',
            'gelombang',
            'pendaftar'
        ));
    }
}
