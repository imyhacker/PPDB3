<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Info;
use App\Models\User;
use App\Models\Kontak;
use App\Models\Slider;
use App\Models\Jurusan;
use App\Models\Setting;
use App\Models\Vyoutube;
use App\Models\Gelombang;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use App\Models\TentangSekolah;
use DB;

class ClientController extends Controller
{
    public function index()
    {
        // DATA
        $info = Info::orderBy('id', 'DESC')->limit(6)->get();
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();
        $slider = Slider::where('status_slider', 'on')->get();
        $counter = Gelombang::first();
        $set = Setting::first();
        $tentang = TentangSekolah::first();

        // HITUNG
        $pendaftar = Pendaftar::count();
        $jurusan = Jurusan::count();
        $cs = User::count();
        $ib = Info::orderBy('created_at', 'DESC')->count();
        $vid = Vyoutube::where('status', 'aktif')->limit(3)->get();
        $pbm = Pendaftar::whereDate('created_at', Carbon::now())->get()->count();
        $lk = Pendaftar::where('jenis_kelamin', 'L')->get()->count();
        $pr = Pendaftar::where('jenis_kelamin', 'P')->get()->count();

$g1 = Pendaftar::where('gelombang', 'Gelombang_1')->get()->count();
$g2 = Pendaftar::where('gelombang', 'Gelombang_2')->get()->count();
$g3 = Pendaftar::where('gelombang', 'Gelombang_3')->get()->count();
$g4 = Pendaftar::where('gelombang', 'Gelombang_4')->get()->count();
$g5 = Pendaftar::where('gelombang', 'Gelombang_5')->get()->count();
$g6 = Pendaftar::where('gelombang', 'Gelombang_6')->get()->count();

        return view('Client/index', compact(
            'info',
            'pendaftar',
            'jurusan',
            'cs',
            'slider',
            'counter',
            'ib',
            'vid',
            'set',
            'tentang',
            'pbm',
            'lk',
            'pr',
            'g1',
            'g2',
            'g3',
            'g4',
            'g5',
            'g6',
            
            

            // footer
            'if',
        ));
    }

    public function baca_info($slug_info)
    {
        $data = Info::where('slug_info', $slug_info)->first();
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();
        $set = Setting::first();
        $tentang = TentangSekolah::first();

        $tag = Tag::all();
        $terbaru = Info::latest()->limit(6)->get();
        $acak = Info::inRandomOrder()->limit(6)->get();
        return view('Client/baca_info', compact('data', 'tag', 'terbaru', 'acak','if','set',
        'tentang',));
    }
    public function selengkapnya()
    {
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();
        $set = Setting::first();
        $tentang = TentangSekolah::first();

        $data = Info::orderBy('id', 'DESC')->get();
        return view('Client/selengkapnya', compact('data','if','set',
        'tentang',));

    }
    public function kontak()
    {
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();
        $set = Setting::first();
        $tentang = TentangSekolah::first();
        

        return view('Client/kontak/kontak', compact('if','set',
        'tentang',));
    }
    public function kontak_send(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'kepada' => 'required',
            'pesan' => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);
        $data = Kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'kepada' => $request->kepada,
            'pesan' => $request->pesan,
            'status' => 'Belum Di Baca',
        ]);
       return redirect()->back()->with('sukses', 'Pesan Berhasil Di Kirimkan Silahkan Cek Email Apakah Sudah Mendapatkan Balasan.');
    }
    // DAFTAR


    public function daftar()
    {
        $gelombang = Gelombang::first();
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();
        $jurusan = Jurusan::all();
        $set = Setting::first();
        $tentang = TentangSekolah::first();
        $title = "Formulir Pendaftaran";
        $desk = "Ayo Daftarkan Segera Siswa / Siswi Anda, Dan Jangan Lupa Untuk Mengecek Datamu <a href='/cek'>Disini</a>";
        return view('Client/daftar/daftar', compact('gelombang', 'jurusan','if','set',
        'tentang', 'title', 'desk'));
    }
    public function cek()
    {
        $data = Pendaftar::orderBy('id', 'DESC')->get();
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();
        $wa = Setting::first();
        $set = Setting::first();
        $tentang = TentangSekolah::first();
        $title = "Cek Datamu Disini";
        $desk = "Tetap cek datamu disini, akan ada perubahan status pada siswa / siswi yang sudah mendaftar";
        return view('Client/cek/cek', compact('data','if', 'wa','set',
        'tentang','title', 'desk'));
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
        $set = Setting::first();
        $tentang = TentangSekolah::first();

        $if = Info::orderBy('id', 'DESC')->limit(2)->get();

        return view('Client/tentang/index', compact('data','if','set',
        'tentang',));
    }
    public function fasilitas_sekolah()
    {
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();
        $set = Setting::first();
        $tentang = TentangSekolah::first();

        return view('Client/fasilitas/fasilitas', compact('if','set',
        'tentang',));
    }
    public function informasi()
    {
        $info = Info::orderBy('id', 'DESC')->simplePaginate(12);
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();
        $set = Setting::first();
        $tentang = TentangSekolah::first();

        return view('Client/informasi/informasi', compact('info', 'if','set',
        'tentang',));
    }
    public function video()
    {
        $vid = Vyoutube::simplePaginate(4);
        $if = Info::orderBy('id', 'DESC')->limit(2)->get();
        $set = Setting::first();
        $tentang = TentangSekolah::first();

        return view('Client/video/video', compact('vid', 'if','set',
        'tentang',));
    }
}
