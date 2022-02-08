<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Jurusan;
use App\Models\Pendaftar;
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
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_tinggal' => 'required',
            'no_kk' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'nama_ayah' => 'required',
            'status_ayah' => 'required',
            'nama_ibu' => 'required',
            'status_ibu' => 'required',
            'nomor_hp' => 'required',
            'g-recaptcha-response' => 'recaptcha',

        ]);
        $data = Pendaftar::create([
            'gelombang' => $request->input('gelombang'),
            'jurusan' => $request->input('jurusan'),
            'asal_sekolah' => $request->input('asal_sekolah'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'nisn'  => $request->input('nisn'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'tempat_tinggal' => $request->input('tempat_tinggal'),
            'no_kk' => $request->input('no_kk'),
            'agama' => $request->input('agama'),
            'kebutuhan_khusus' => $request->input('kebutuhan_khusus'),
            'alamat' => $request->input('alamat'),
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),
            'desa' => $request->input('desa'),
            'kota' => $request->input('kota'),
            'kode_pos' => $request->input('kode_pos'),

            'nama_ayah' => $request->input('nama_ayah'),
            'ktp_ayah' => $request->input('ktp_ayah'),
            'status_ayah' => $request->input('status_ayah'),
            'pendidikan_ayah' => $request->input('pendidikan_ayah'),
            'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
            

            'nama_ibu' => $request->input('nama_ibu'),
            'ktp_ibu' => $request->input('ktp_ibu'),
            'status_ibu' => $request->input('status_ibu'),
            'pendidikan_ibu' => $request->input('pendidikan_ibu'),
            'pekerjaan_ibu' => $request->input('pekerjaan_ibu'),
            

            'nama_wali' => $request->input('nama_ibu'),
            'ktp_wali' => $request->input('ktp_ibu'),
            'pendidikan_wali' => $request->input('pendidikan_wali'),
            'pekerjaan_wali' => $request->input('pekerjaan_wali'),

            'nomor_hp' => $request->input('nomor_hp'),
            'email' => $request->input('email'),
            'rekomendasi' => $request->input('nomor_hp'),
            'no_rekomendasi' => $request->input('no_rekomendasi'),

        ]);
        dd($data);

    }
}
