<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Info;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TentangSekolah;
use Illuminate\Support\Facades\Hash;

class SekolahController extends Controller
{
    public function takun(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);
        $data = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        return redirect()->back()->with('sukses',  'Akun Baru Berhasil Di Tambahkan');
    }
    public function tinfo(Request $request)
    {
        $data = Info::create([
            'judul' => $request->input('judul'),
            'isi'   => $request->input('isi'),
            'tag'  => $request->input('tag'),
            'slug_info' => Str::slug($request->input('judul')),
        ]);
        return redirect()->back()->with('sukses',  'Info Baru Berhasil Di Tambahkan');
    }
    public function edit_info($id)
    {
        $data = Info::find($id);
        $tag = Tag::orderBy('id', 'DESC')->get();
        return view('Dashboard/edit_info', compact('data', 'tag'));
    }
    public function update_info(Request $request, $id)
    {
        $data = Info::find($id)->update([
            'judul' => $request->input('judul'),
            'isi'   => $request->input('isi'),
            'tag'  => $request->input('tag'),

        ]); 
        return redirect()->route('home')->with('sukses',  'Info '.$request->input('judul').' Berhasil Di Update');

    }
    public function hapus_info($id)
    {
        $data = Info::find($id)->delete();
        return redirect()->back()->with('sukses',  'Informasi Tersebut Berhasil Di Hapus');
    }

    public function ttag(Request $request)
    {
        $request->validate([
            'tag' => 'required|unique:tag'
        ]);
        $data = Tag::create([
            'tag' => $request->input('tag'),
            'slug_tag' => Str::slug($request->input('tag')),
        ]);
        return redirect()->back()->with('sukses',  'Tag Baru Berhasil Di Tambahkan');
    }
    public function tentang_sekolah()
    {
        $tag = Tag::orderBy('id', 'DESC')->get();
        $tentang = TentangSekolah::first();
        return view('Dashboard/Tentang/index', compact('tag', 'tentang'));
    }
    public function kirim_tentang(Request $request)
    {
        $data = TentangSekolah::first();
        if($data == TRUE){
            $data = TentangSekolah::find(1)->update([
                'tentang_sekolah' => $request->input('tentang_sekolah'),
            ]);
            return redirect()->back()->with('sukses',  'Tentang Sekolah Berhasil Di Update');
        }
        if($data == FALSE){
            $data = TentangSekolah::create([
                'tentang_sekolah' => $request->input('tentang_sekolah'),
            ]);
            return redirect()->back()->with('sukses',  'Tentang Sekolah Berhasil Di Update');
        }
    }
    public function setting()
    {
        $tag = Tag::orderBy('id', 'DESC')->get();
        $tentang = TentangSekolah::first();
        $data = Setting::first();
        return view('Dashboard/Setting/index', compact('tag', 'tentang', 'data'));
    }
    public function update_hari(Request $request)
    {
        if(is_null(Setting::first())){
            Setting::create([
                'hari_buka' => null,
                'hari_tutup' => null,
                'jam_buka' => null,
                'jam_tutup' => null,
                'hari_tutup' => null,
                'telpon_sekolah' => null,
                'email_sekolah' => null,
                'facebook' => null,
                'instagram' => null,
                'youtube' => null,
                'whatsapp' => null
            ]);
        }
        $data = Setting::first()->update([
            'hari_buka' => $request->input('hari_buka'),
            'hari_tutup' => $request->input('hari_tutup')
        ]);
        return redirect()->back()->with('sukses',  'Setting Hari Sekolah Berhasil Di Update');
    }
    public function update_jam(Request $request)
    {
        if(is_null(Setting::first())){
            Setting::create([
                'hari_buka' => null,
                'hari_tutup' => null,
                'jam_buka' => null,
                'jam_tutup' => null,
                'hari_tutup' => null,
                'telpon_sekolah' => null,
                'email_sekolah' => null,
                'facebook' => null,
                'instagram' => null,
                'youtube' => null,
                'whatsapp' => null
            ]);
        }
        $data = Setting::first()->update([
            'jam_buka' => $request->input('jam_buka'),
            'jam_tutup' => $request->input('jam_tutup')
        ]);
        return redirect()->back()->with('sukses',  'Setting Jam Sekolah Berhasil Di Update');
    }
    public function update_telpon(Request $request)
    {
        if(is_null(Setting::first())){
            Setting::create([
                'hari_buka' => null,
                'hari_tutup' => null,
                'jam_buka' => null,
                'jam_tutup' => null,
                'hari_tutup' => null,
                'telpon_sekolah' => null,
                'email_sekolah' => null,
                'facebook' => null,
                'instagram' => null,
                'youtube' => null,
                'whatsapp' => null
            ]);
        }
        $data = Setting::first()->update([
            'telpon_sekolah' => $request->input('telpon_sekolah'),
        ]);
        return redirect()->back()->with('sukses',  'Setting Telpon Sekolah Berhasil Di Update');
    }
    public function update_email(Request $request)
    {
        if(is_null(Setting::first())){
            Setting::create([
                'hari_buka' => null,
                'hari_tutup' => null,
                'jam_buka' => null,
                'jam_tutup' => null,
                'hari_tutup' => null,
                'telpon_sekolah' => null,
                'email_sekolah' => null,
                'facebook' => null,
                'instagram' => null,
                'youtube' => null,
                'whatsapp' => null
            ]);
        }
        $data = Setting::first()->update([
            'email_sekolah' => $request->input('email_sekolah'),
        ]);
        return redirect()->back()->with('sukses',  'Setting Email Sekolah Berhasil Di Update');
    }
    public function update_facebook(Request $request)
    {
        if(is_null(Setting::first())){
            Setting::create([
                'hari_buka' => null,
                'hari_tutup' => null,
                'jam_buka' => null,
                'jam_tutup' => null,
                'hari_tutup' => null,
                'telpon_sekolah' => null,
                'email_sekolah' => null,
                'facebook' => null,
                'instagram' => null,
                'youtube' => null,
                'whatsapp' => null
            ]);
        }
        $data = Setting::first()->update([
            'facebook' => $request->input('facebook'),
        ]);
        return redirect()->back()->with('sukses',  'Setting facebook Sekolah Berhasil Di Update');
    }
    public function update_instagram(Request $request)
    {
        if(is_null(Setting::first())){
            Setting::create([
                'hari_buka' => null,
                'hari_tutup' => null,
                'jam_buka' => null,
                'jam_tutup' => null,
                'hari_tutup' => null,
                'telpon_sekolah' => null,
                'email_sekolah' => null,
                'facebook' => null,
                'instagram' => null,
                'youtube' => null,
                'whatsapp' => null
            ]);
        }
        $data = Setting::first()->update([
            'instagram' => $request->input('facebook'),
        ]);
        return redirect()->back()->with('sukses',  'Setting instagram Sekolah Berhasil Di Update');
    }
        public function update_youtube(Request $request)
    {
        if(is_null(Setting::first())){
            Setting::create([
                'hari_buka' => 0,
                'hari_tutup' => 0,
                'jam_buka' => 0,
                'jam_tutup' => 0,
                'hari_tutup' => 0,
                'telpon_sekolah' => 0,
                'email_sekolah' => 0,
                'facebook' => 0,
                'instagram' => 0,
                'youtube' => 0,
                'whatsapp' => 0

            ]);
        }
        $data = Setting::first()->update([
            'youtube' => $request->input('youtube'),
        ]);
        return redirect()->back()->with('sukses',  'Setting youtube Sekolah Berhasil Di Update');
    }
    public function update_whatsapp(Request $request)
    {
        if(is_null(Setting::first())){
            Setting::create([
                'hari_buka' => 0,
                'hari_tutup' => 0,
                'jam_buka' => 0,
                'jam_tutup' => 0,
                'hari_tutup' => 0,
                'telpon_sekolah' => 0,
                'email_sekolah' => 0,
                'facebook' => 0,
                'instagram' => 0,
                'youtube' => 0,
                'whatsapp' => 0
            ]);
        }
        $data = Setting::first()->update([
            'whatsapp' => $request->input('whatsapp'),
        ]);
        return redirect()->back()->with('sukses',  'Setting Grup WhatsApp Sekolah Berhasil Di Update');
    }
}
