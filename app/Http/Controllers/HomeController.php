<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Jurusan;
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


        // Tampilin
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::first();
        return view('Dashboard/index', compact(
            // COUNT
            'j',





            // TAMPILIN
            'jurusan',
            'gelombang'
        ));
    }
}
