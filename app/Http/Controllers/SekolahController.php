<?php

namespace App\Http\Controllers;

use App\Models\Info;
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
            'slug_info' => Str::slug($request->input('judul')),
        ]);
        return redirect()->back()->with('sukses',  'Info Baru Berhasil Di Tambahkan');
    }
}
