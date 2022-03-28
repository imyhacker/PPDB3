<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Info;
use App\Models\User;
use App\Models\Slider;
use App\Models\Jurusan;
use App\Models\Gelombang;
use App\Models\Pendaftar;
use App\Models\Tag;
use App\Models\TentangSekolah;
use App\Models\Vyoutube;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        // DATA
        $info = Info::orderBy('id', 'DESC')->limit(6)->get();
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();
        $slider = Slider::where('status_slider', 'on')->get();
        $counter = Gelombang::first();

        // HITUNG
        $pendaftar = Pendaftar::count();
        $jurusan = Jurusan::count();
        $cs = User::count();
        $ib = Info::orderBy('created_at', 'DESC')->count();
        $vid = Vyoutube::where('status', 'aktif')->limit(4)->get();



        return view('Client/index', compact(
            'info',
            'pendaftar',
            'jurusan',
            'cs',
            'slider',
            'counter',
            'ib',
            'vid',

            // footer
            'if',
        ));
    }

    public function baca_info($slug_info)
    {
        $data = Info::where('slug_info', $slug_info)->first();
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();

        $tag = Tag::all();
        $terbaru = Info::latest()->limit(6)->get();
        $acak = Info::inRandomOrder()->limit(6)->get();
        return view('Client/baca_info', compact('data', 'tag', 'terbaru', 'acak','if'));
    }
    public function selengkapnya()
    {
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();

        $data = Info::orderBy('id', 'DESC')->get();
        return view('Client/selengkapnya', compact('data','if'));

    }

    // DAFTAR


    public function daftar()
    {
        $gelombang = Gelombang::first();
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();

        $jurusan = Jurusan::all();
        return view('Client/daftar/daftar', compact('gelombang', 'jurusan','if'));
    }
    public function cek()
    {
        $data = Pendaftar::orderBy('id', 'DESC')->get();
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();

        return view('Client/cek/cek', compact('data','if'));
    }
    public function download($kode_pendaftaran)
    {
        $data = Pendaftar::where('kode_pendaftaran', $kode_pendaftaran)->first();

        $pdf = PDF::loadView('Dashboard/pdf_depan', ['data' => $data]);
        $pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
        return $pdf->stream('itsolutionstuff.pdf');
    }
    public function tentang()
    {
        $data = TentangSekolah::first();
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();

        return view('Client/tentang/index', compact('data','if'));
    }
    public function fasilitas_sekolah()
    {
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();

        return view('Client/fasilitas/fasilitas', compact('if'));
    }
    public function informasi()
    {
        $info = Info::orderBy('id', 'DESC')->simplePaginate(12);
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();

        return view('Client/informasi/informasi', compact('info', 'if'));
    }
    public function video()
    {
        $vid = Vyoutube::simplePaginate(2);
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();

        return view('Client/video/video', compact('vid', 'if'));
    }
}
