<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
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
        return view('Dashboard/Tentang/index', compact('tag'));
    }
}
