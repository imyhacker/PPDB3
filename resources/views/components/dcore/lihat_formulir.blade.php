<div class="row">
    <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            Data Pendaftar
        </div>
    </div>
    <div class="col-md-12">
        <ul>
            <li>Kode Pendaftaran : {{$data->kode_pendaftaran}}</li>
            <li>Jurusan Yang Di Ambil : {{$data->jurusan}}</li>
            <li>Gelombang : {{$data->gelombang}}</li>
            <li>Asal Sekolah : {{$data->asal_sekolah}}</li>

        </ul>
    </div>

    <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            Data Siswa Pendaftar
        </div>
    </div>
    <div class="col-md-12">
        <ul>
           <li>Nama Siswa : {{$data->nama_lengkap}}</li>
           <li>Jenis Kelamin : {{$data->jenis_kelamin}}</li>
           <li>NISN : {{$data->nisn}}</li>
           <li>Tempat Lahir : {{$data->tempat_lahir}}</li>
           <li>Tanggal Lahir : {{$data->tanggal_lahir}}</li>
           <li>Berkebutuhan : {{$data->kebutuhan_khusus}}</li>

        </ul>
    </div>


    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            Data Keluarga
        </div>
    </div>
    <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            Data Ayah
        </div>
    </div>
    <div class="col-md-12">
        <ul>
           <li>Nomor KK : {{$data->no_kk}}</li>
           <li>Nama Ayah : {{$data->nama_ayah}}</li>
           <li>No KTP Ayah : {{$data->ktp_ayah}}</li>
           <li>Status Ayah : {{$data->status_ayah}}</li>
           <li>Pendidikan Ayah : {{$data->pendidikan_ayah}}</li>
           <li>Pekerjaan Ayah : {{$data->pekerjaan_ayah}}</li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            Data Ibu
        </div>
    </div>
    <div class="col-md-12">
        <ul>
           <li>Nama Ibu : {{$data->nama_ibu}}</li>
           <li>No KTP Ibu : {{$data->ktp_ibu}}</li>
           <li>Status Ibu : {{$data->status_ibu}}</li>
           <li>Pendidikan Ibu : {{$data->pendidikan_ibu}}</li>
           <li>Pekerjaan Ibu : {{$data->pekerjaan_ibu}}</li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            Data Wali
        </div>
    </div>
    <div class="col-md-12">
        <ul>
           <li>Nama Wali : {{$data->nama_wali}}</li>
           <li>No KTP Wali : {{$data->ktp_wali}}</li>
           <li>Status Wali : {{$data->status_wali}}</li>
           <li>Pendidikan Wali : {{$data->pendidikan_wali}}</li>
           <li>Pekerjaan Wali : {{$data->pekerjaan_wali}}</li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            Data Lokasi
        </div>
    </div>
    <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            Data Lokasi
        </div>
    </div>
    <div class="col-md-12">
        <ul>
           <li>Desa : {{$data->desa}}</li>
           <li>Kota : {{$data->kota}}</li>
           <li>Kode Pos : {{$data->kode_pos}}</li>
           <li>RT : {{$data->rt}}</li>
           <li>RW : {{$data->rw}}</li>
           <li>Alamat : {{$data->alamat}}</li>
        </ul>
    </div>
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            Data Kontak
        </div>
    </div>
    <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
            Data Kontak
        </div>
    </div>
    <div class="col-md-12">
        <ul>
           <li>Nomor WA / Telfon : {{$data->nomor_hp}}</li>
           <li>Email : {{$data->email}}</li>
           <li>Rekomendasi : <b>{{$data->kode_pos}}</b></li>
           <li>Nomor HP Rekomendasi : {{$data->no_rekomandasi}}</li>
           
        </ul>
    </div>
</div>