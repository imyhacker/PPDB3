<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Jurusan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function tjurusan(Request $request)
    {
        $input = $request->input('jurusan');
        $cek = Jurusan::where('jurusan', $input)->first();
        if($cek){
            return redirect()->back()->with('gagal', 'Data Sudah Ada');
        }else{
            $data = Jurusan::create([
                'jurusan' => $input,
                'slug_jurusan' => Str::slug($input)
            ]);
            return redirect()->back()->with('sukses', 'Data Berhasil Di Input');
        }
    }

    public function tgelombang(Request $request)
    {
        $data1 = $request->input('gelombang');
        $data2 = $request->input('status');

        $cek = Gelombang::first();
        if($cek == null){
            $insert = Gelombang::create([
                'gelombang' => $data1,
                'status'    => $data2,
                'slug_gelombang' => Str::slug($data1, '_')
            ]);
            return redirect()->back()->with('sukses', 'Data Berhasil Di Update');

        }else{
            $insert = Gelombang::first()->update([
                'gelombang' => $data1,
                'status'    => $data2,
                'slug_gelombang'  => Str::slug($data1, '_'),
            ]);
            return redirect()->back()->with('sukses', 'Data Berhasil Di Update');

        }
    }

    // PENDAFTAR

    public function pendaftar()
    {
        $gelombang = Gelombang::first();
        $jurusan = Jurusan::all();
        return view('Dashboard/Pendaftar/index', compact('gelombang', 'jurusan'));
    }

    public function daftar(Request $request)
    {
        $request->validate([
            'jurusan' => 'required',
            'asal_sekolah' => 'required',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'no_kk' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'nama_ayah' => 'required',
            'status_ayah' => 'required',
            'nama_ibu' => 'required',
            'status_ibu' => 'required',
            'no_hp' => 'required',
        ]);
    }
}
