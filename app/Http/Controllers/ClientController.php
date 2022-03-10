<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\User;
use App\Models\Slider;
use App\Models\Jurusan;
use App\Models\Gelombang;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        // DATA
        $info = Info::orderBy('id', 'DESC')->limit(4)->get();
        $slider = Slider::where('status_slider', 'on')->get();
        $counter = Gelombang::first();

        // HITUNG
        $pendaftar = Pendaftar::count();
        $jurusan = Jurusan::count();
        $cs = User::count();




        return view('Client/index', compact(
            'info',
            'pendaftar',
            'jurusan',
            'cs',
            'slider',
            'counter'
        ));
    }

    public function baca_info($slug_info)
    {
        $data = Info::where('slug_info', $slug_info)->first();
        return view('Client/baca_info', compact('data'));
    }
    public function selengkapnya()
    {
        $data = Info::orderBy('id', 'DESC')->get();
        return view('Client/selengkapnya', compact('data'));

    }

    // DAFTAR


    public function daftar()
    {
        $gelombang = Gelombang::first();
        $jurusan = Jurusan::all();
        return view('Client/daftar/daftar', compact('gelombang', 'jurusan'));
    }
}
