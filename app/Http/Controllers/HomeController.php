<?php

namespace App\Http\Controllers;
use File;
use App\Models\Tag;
use App\Models\Info;
use App\Models\User;
use App\Models\Finfo;
use App\Models\Slider;
use App\Models\Jurusan;
use App\Models\Vyoutube;
use App\Models\Gelombang;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use App\Models\Kontak;

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
        $g1 = Pendaftar::where('gelombang', 'Gelombang 1')->count();
        $g2 = Pendaftar::where('gelombang', 'Gelombang 2')->count();
        $g3 = Pendaftar::where('gelombang', 'Gelombang 3')->count();
        $g4 = Pendaftar::where('gelombang', 'Gelombang 4')->count();
        $g5 = Pendaftar::where('gelombang', 'Gelombang 5')->count();
        $g6 = Pendaftar::where('gelombang', 'Gelombang 6')->count();

        // Tampilin
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::first();
        $pendaftar = Pendaftar::orderBy('id', 'DESC')->get();
        $finfo = Finfo::orderBy('id', 'DESC')->get();
        $video = Vyoutube::orderBy('id', 'DESC')->get();
        $akun = User::all();
        $info = Info::orderBy('id', 'DESC')->get();
        $slider = Slider::orderBy('id', 'DESC')->get();
        $tag = Tag::orderBy('id', 'DESC')->get();
        $ebb = Kontak::where('status', 'Belum Di Baca')->count();
        $esb =  Kontak::where('status', 'Sudah Di Baca')->count();
        $esbl =  Kontak::where('status', 'Sudah Di Balas')->count();

        return view('Dashboard/index', compact(
            // COUNT
            'j',
            'g1',
            'g2',
            'g3',
            'g4',
            'g5',
            'g6',
            'ebb',
            'esb',
            'esbl',





            // TAMPILIN
            'jurusan',
            'gelombang',
            'pendaftar',
            'finfo',
            'video',
            'akun',
            'info',
            'slider',
            'tag'
        ));
    }

    public function download_file($id)
    {
        $data = Finfo::find($id);
        $file = $data->finfo;

        return response()->download(public_path('file/').$file);
    }
    public function hapus_file($id)
    {
        $data = Finfo::find($id)->delete();

        return redirect()->back()->with('sukses', 'Berhasil Menghapus Data Tersebut');
    }
    public function hapus_jurusan($id)
    {
        $data = Jurusan::find($id)->delete();
        return redirect()->back()->with('sukses', 'Berhasil Menghapus Data Jurusan');

    }
    public function hapus_video($id)
    {
        $data = Vyoutube::find($id)->delete();
        return redirect()->back()->with('sukses', 'Berhasil Menghapus Data Video');

    }
    public function aktifkan_video($id)
    {
        $data = Vyoutube::find($id)->update([
            'status' => 'aktif'
        ]);
        return redirect()->back()->with('sukses', 'Berhasil Mengaktifkan Video');

    }
    public function nonaktifkan_video($id)
    {
        $data = Vyoutube::find($id)->update([
            'status' => 'nonaktif'
        ]);
        return redirect()->back()->with('sukses', 'Berhasil Mengnonaktifkan Video');

    }
    public function hapus_akun($id)
    {
        $data = User::find($id)->delete();
        return redirect()->back()->with('sukses', 'Berhasil Menghapus Akun');
    }
    public function kontak()
    {
        $eb = Kontak::where('status', 'Belum Di Baca')->get();
        $es =  Kontak::where('status', 'Sudah Di Baca')->get();
        $esb =  Kontak::where('status', 'Sudah Di Balas')->get();
        return view('Dashboard/Kontak/index', compact('eb','es','esb'));
    }
    public function baca(Request $request, $id)
    {
        $data = Kontak::find($id)->update([
            'status' => 'Sudah Dibaca'
        ]);
        $d = Kontak::find($id)->first();
        return view('Dashboard/Kontak/baca', compact('d'));
    }
}
