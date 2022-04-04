<?php

namespace App\Http\Controllers;

use App\Models\Finfo;
use App\Models\Jurusan;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Gelombang;
use App\Models\Pendaftar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Alaouy\Youtube\Facades\Youtube;
use App\Models\Slider;
use App\Models\Tag;
use App\Models\Vyoutube;

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
                'batas_waktu' => $request->input('batas_waktu'),
                'slug_gelombang' => Str::slug($data1, '_')
            ]);
            return redirect()->back()->with('sukses', 'Data Berhasil Di Update');

        }else{
            $insert = Gelombang::first()->update([
                'gelombang' => $data1,
                'status'    => $data2,
                'batas_waktu' => $request->input('batas_waktu'),
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
        $tag = Tag::all();
        return view('Dashboard/Pendaftar/index', compact('gelombang', 'jurusan', 'tag'));
    }

    public function daftar(Request $request)
    {
        $gelombang = Gelombang::first();
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
            'kode_pendaftaran' => Str::random(5),
            'status_diterima' => 0,
            'gelombang' => $gelombang->gelombang,
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
            'rekomendasi' => $request->input('rekomendasi'),
            'no_rekomendasi' => $request->input('no_rekomendasi'),

        ]);
        return redirect()->back()->with('sukses', 'Data Berhasil Di Kirim');
    }
    public function terima($kode_pendaftaran)
    {
        $data = Pendaftar::where('kode_pendaftaran', $kode_pendaftaran)->update([
            'status_diterima' => 1    
        ]);
        return redirect()->back()->with('sukses', 'Siswa Berhasil Di Terima');

    }
    public function ditolak($kode_pendaftaran)
    {
        $data = Pendaftar::where('kode_pendaftaran', $kode_pendaftaran)->update([
            'status_diterima' => 2   
        ]);
        return redirect()->back()->with('sukses', 'Siswa Berhasil Di Tolak');

    }
    public function edit($kode_pendaftaran)
    {
        $data = Pendaftar::where('kode_pendaftaran', $kode_pendaftaran)->first();
        // Tampilin
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::first();
        $tag = Tag::all();
        return view('Dashboard/Pendaftar/edit', compact('data', 'jurusan', 'gelombang', 'tag'));
    }
    public function update(Request $request, $kode_pendaftaran)
    {
        $data = Pendaftar::where('kode_pendaftaran', $kode_pendaftaran)->first()->update($request->all());
        return redirect()->back()->with('sukses', 'Data Pendaftar Berhasil Di Edit');
    }
    public function lihat($kode_pendaftaran)
    {
        $data = Pendaftar::where('kode_pendaftaran', $kode_pendaftaran)->first();
        $tag = Tag::all();
        return view('Dashboard/Pendaftar/lihat', compact('data', 'tag'));
    }
    public function stream($kode_pendaftaran)
    {
        
        $data = Pendaftar::where('kode_pendaftaran', $kode_pendaftaran)->first();

        $pdf = PDF::loadView('Dashboard/pdf', ['data' => $data]);
        $pdf->setPaper(array(0,0,609.4488,935.433), 'potrait');
        return $pdf->stream('itsolutionstuff.pdf');
    }






    // UPLOAD FILE INFORMASI
    public function tfinfo(Request $request)
    {
        // finfo jinfo
        $judul = $request->input('jinfo');
        $file = $request->file('finfo');

        $request->validate([
            'jinfo' => 'required',
            'finfo' => 'required|mimes:png,jpg,jpeg,pdf,fpdf,xls,xlsx,doc,docx,ppt,pptx'
        ]);
        $path = public_path('file');
        $name = date('Y_m_d_').$file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
        $file->move($path, $name);

        $data = Finfo::create([
            'jinfo' => $judul,
            'finfo' => $name,
        ]);
        return redirect()->back()->with('sukses', 'File Berhasil Di Upload');
    }




    // UPLOAD YOUTUBE
    public function tvideo(Request $request)
    {
        $data = $request->all();
        $video = Youtube::getVideoInfo($data);
        // TITLE = SNIPPET->TITLE
        // CHANNEL = channelTitle
        // VIDEO = thumbnails->standard->url
        // ID = efRkwGhZycQ
      // dd($video);
        $datapost = Vyoutube::create([
            'judul' => $video[0]->snippet->title,
            'channel' => $video[0]->snippet->channelTitle,
            'video' => $video[0]->snippet->thumbnails->standard->url,
            'id_video' => $video[0]->id,
        ]);
        return redirect()->back()->with('sukses', 'Data Video Berhasil Di Upload');
    }
    public function upload_slider(Request $request)
    {
        $request->validate([
            'gambar_slider' => 'required|mimes:png,jpg,jpeg'
        ]);

          $gambar = $request->file('gambar_slider');
        
          $path = public_path('gambar_slider');
          $name = date('Y_m_d_').'.'.$gambar->getClientOriginalExtension();
          $gambar->move($path, $name);
    
          $data = Slider::create([
                'gambar_slider' => $name,
                'status_slider' => $request->input('status_slider'),
                'judul_slider' => $request->input('judul_slider'),
                'isi_slider' => $request->input('isi_slider'),
          ]);
          return redirect()->back()->with('sukses', 'Slider Berhasil Di Upload');
    }
    public function aktifkan_slider($id)
    {
        $data = Slider::find($id)->update([
            'status_slider' => 'on'
        ]);
        return redirect()->back()->with('sukses', 'Berhasil Update Status Slider Aktif');
    }
    public function nonaktifkan_slider($id)
    {
        $data = Slider::find($id)->update([
            'status_slider' => null
        ]);
        return redirect()->back()->with('sukses', 'Berhasil Update Status Slider Nonaktif');
    }
    public function cetak()
    {
        $tag = Tag::all();
        $data = Pendaftar::where('status_diterima', 1)->get();
        return view('Dashboard/Area/cetak', compact('tag', 'data'));
    }
}
