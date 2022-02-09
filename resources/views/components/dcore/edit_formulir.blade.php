<form action="{{route('daftar')}}" method="POST">
    @csrf
<div class="row">

    <div class="col-md-12">
        <h2><i><u>Data Gelombang</u></i></h2>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Gelombang *</label>
            <input type="text" 
            name="gelombang"
            class="form-control" disabled
            value="{{$gelombang->gelombang ?? 'Tidak Ada Data Gelombang Saat Ini'}}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Status Gelombang</label>
            <input type="text" value="<?php if($gelombang->status == 0 )
            { echo 'Di Tutup'; 
            }else{ 
                echo 'Di Buka'; 
                }
                 ?>" class="form-control" disabled>
        </div>
    </div>

    <div class="col-md-12 mt-4">
        <h2><i><u>Data Pendaftaran</u></i></h2>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jurusan Diambil *</label>
            <select class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif
                
                >
                <option disabled selected value>== PILIH JURUSAN ==</option>
                @foreach($jurusan as $jr)

                <option @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                    disabled
                    @else
                    value="{{$jr->jurusan}}"
                    @endif
                    >{{$jr->jurusan}}</option>
                @endforeach
            </select>
            @error('jurusan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Asal Sekolah *</label>
            <input type="text" class="form-control  @error('asal_sekolah') is-invalid @enderror" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="asal_sekolah"
            @endif"
            placeholder="Nama Asal Sekolah SMP / MTsN">
            @error('asal_sekolah')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>



    <div class="col-md-12 mt-4">
        <h2><i><u>Data Pribadi</u></i></h2>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Nama Lengkap *</label>
            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="nama_lengkap"
            @endif
            placeholder="Nama Lengkap">
            @error('nama_lengkap')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin *</label>
            <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif>
                <option disabled selected value>== PILIH GENDER ==</option>
                @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                @else
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option> 
                @endif

            </select>
            @error('jenis_kelamin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label>NISN</label>
            <input type="number" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="nisn"
            @endif
            placeholder="Nomor Induk Siswa Nasional (NISN)">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Tempat Lahir *</label>
            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="tempat_lahir"
            @endif
            placeholder="Kota / Kabupaten">
            @error('tempat_lahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Tanggal Lahir *</label>
            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="tanggal_lahir"
            @endif
            placeholder="Tanggal Lahir">
            @error('tanggal_lahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <label>Nomor KK *</label>
            <input type="number" class="form-control @error('no_kk') is-invalid @enderror" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="no_kk"
            @endif
            placeholder="32121**********">
            @error('no_kk')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Agama *</label>
            <select class="form-control @error('agama') is-invalid @enderror" name="agama" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif>
                <option disabled selected value>== PILIH AGAMA ==</option>

                @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                @else
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Protestan">Protestan</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Other">Yang Lainnya</option>
                @endif

            </select>
            @error('agama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Siswa Berkebutuhan Khusus</label>
            <select class="form-control" name="kebutuhan_khusus" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif>
                @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                <option disabled selected value>== SILAHKAN PILIH ==</option>
                @else
                <option value="Tidak" selected="">Tidak</option>
                <option value="Netra">Netra</option>
                <option value="Rungu">Rungu</option>
                <option value="Grahita Ringan">Grahita Ringan</option>
                <option value="Grahita Sedang">Grahita Sedang</option>
                <option value="Daksa Ringan">Daksa Ringan</option>
                <option value="Daksa Sedang">Daksa Sedang</option>
                <option value="Laras">Laras</option>
                <option value="Wicara">Wicara</option>
                <option value="Tuna Ganda">Tuna Ganda</option>
                <option value="Hiper Aktif">Hiper Aktif</option>
                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                <option value="Bakat Istimewa">Bakat Istimewa</option>
                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                <option value="Narkoba">Narkoba</option>
                <option value="Indigo">Indigo</option>
                <option value="Down Sindrome">Down Sindrome</option>
                <option value="Autis">Autis</option>
                @endif

            </select>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label>Alamat Siswa *</label>
            <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="alamat"
            @endif            
            placeholder="Alamat Lengkap Siswa"></textarea>
            @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>RT</label>
            <input type="text" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="rt"
            @endif
            placeholder="RT">
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label>RW</label>
            <input type="text" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="rw"
            @endif
            placeholder="RW">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Kelurahan / Desa</label>
            <input type="text" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="desa"
            @endif
            placeholder="Kelurahan / Desa">
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label>Kabupaten / Kota</label>
            <input type="text" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="kota"
            @endif
            placeholder="Kabupaten / Kota">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Kode POS</label>
            <input type="text" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="kode_pos"
            @endif
            placeholder="Kode Pos">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Tempat Tinggal *</label>

            <select class="form-control @error('tempat_tinggal') is-invalid @enderror" name="tempat_tinggal" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif>
                @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                <option disabled selected value>== PILIH TEMPAT TINGGAL ==</option>
                @else
                <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                <option value="Bersama Wali">Bersama Wali</option>
                <option value="Pesantren">Pesantren</option>
                <option value="Kos">Kos</option>
                <option value="Asrama">Asrama</option>
                <option value="Panti Asuhan">Panti Asuhan</option>
                <option value="Lainnya">Lainnya</option>
                @endif
            </select>
            @error('tempat_tinggal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>


    <div class="col-md-12 mt-3">
        <h2><i><u>Data Ayah Kandung</u></i></h2>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Nama Ayah *</label>
            <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="nama_ayah"
            @endif
            placeholder="Nama Ayah Kandung">
            @error('nama_ayah')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Nomor KTP Ayah</label>
            <input type="text" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="ktp_ayah"
            @endif
            placeholder="Nomor KTP">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Status Ayah *</label>
            <select class="form-control @error('status_ayah') is-invalid @enderror" name="status_ayah" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif>
                @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                <option value="" selected="">== STATUS AYAH ==</option>
                @else
                <option value="Masih Ada">Masih Ada</option>
                <option value="Almarhum">Tidak Ada</option>
                @endif
            </select>
            @error('status_ayah')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Pendidikan Ayah</label>
            <select class="form-control" name="pendidikan_ayah" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif>

                @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                <option value="" selected="">== PILIH PENDIDIKAN ==</option>
                @else
                <option value="Tidak Sekolah">Tidak Sekolah</option>
                <option value="Putus SD">Putus SD</option>
                <option value="SD Sederajat">SD Sederajat</option>
                <option value="SMP Sederajat">SMP Sederajat</option>
                <option value="SMA Sederajat">SMA Sederajat</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4/S1">D4/S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                @endif
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Pekerjaan Ayah</label>
            <select class="form-control" name="pekerjaan_ayah" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif>
                @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                <option value="" selected="">== PILIH PEKERJAAN ==</option>
                @else
                <option value="Tidak Bekerja">Tidak Bekerja</option>
                <option value="Nelayan">Nelayan</option>
                <option value="Petani">Petani</option>
                <option value="Peternak">Peternak</option>
                <option value="Guru">Guru</option>
                <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                <option value="Karyawan Swasta">Karyawan Swasta</option>
                <option value="Pedagang Kecil">Pedagang Kecil</option>
                <option value="Pedagang Besar">Pedagang Besar</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Wirausaha">Wirausaha</option>
                <option value="Buruh">Buruh</option>
                <option value="Pensiunan">Pensiunan</option>
                <option value="Meninggal Dunia">Meninggal Dunia</option>
                <option value="Lain-lain">Lain-lain</option>
                @endif
            </select>
        </div>
    </div>



    <div class="col-md-12 mt-3">
        <h2><i><u>Data Ibu Kandung</u></i></h2>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Nama Ibu *</label>
            <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="nama_ibu"
            @endif
            placeholder="Nama Ibu Kandung">
            @error('nama_ibu')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Nomor KTP Ibu</label>
            <input type="text" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="ktp_ibu"
            @endif
            placeholder="Nomor KTP">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Status Ibu *</label>
            <select class="form-control @error('status_ibu') is-invalid @enderror" name="status_ibu" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif>
                @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                <option value="" selected="">== STATUS IBU ==</option>
                @else
                <option value="Masih Ada">Masih Ada</option>
                <option value="Almarhum">Tidak Ada</option>
                @endif
            </select>
            @error('status_ibu')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Pendidikan Ibu</label>
            <select class="form-control" name="pendidikan_ibu" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif>

                @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                <option value="" selected="">== PILIH PENDIDIKAN ==</option>
                @else
                <option value="Tidak Sekolah">Tidak Sekolah</option>
                <option value="Putus SD">Putus SD</option>
                <option value="SD Sederajat">SD Sederajat</option>
                <option value="SMP Sederajat">SMP Sederajat</option>
                <option value="SMA Sederajat">SMA Sederajat</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4/S1">D4/S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                @endif
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Pekerjaan Ibu</label>
            <select class="form-control" name="pekerjaan_ibu" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif>
                @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                <option value="" selected="">== PILIH PEKERJAAN ==</option>
                @else
                <option value="Tidak Bekerja">Tidak Bekerja</option>
                <option value="Nelayan">Nelayan</option>
                <option value="Petani">Petani</option>
                <option value="Peternak">Peternak</option>
                <option value="Guru">Guru</option>
                <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                <option value="Karyawan Swasta">Karyawan Swasta</option>
                <option value="Pedagang Kecil">Pedagang Kecil</option>
                <option value="Pedagang Besar">Pedagang Besar</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Wirausaha">Wirausaha</option>
                <option value="Buruh">Buruh</option>
                <option value="Pensiunan">Pensiunan</option>
                <option value="Meninggal Dunia">Meninggal Dunia</option>
                <option value="Lain-lain">Lain-lain</option>
                @endif
            </select>
        </div>
    </div>



    <div class="col-md-12 mt-3">
        <h2><i><u>Data Wali</u></i></h2>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Nama Wali</label>
            <input type="text" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="nama_wali"
            @endif
            placeholder="Nama Wali">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Nomor KTP Wali</label>
            <input type="text" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="ktp_wali"
            @endif
            placeholder="Nomor KTP Wali">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Pendidikan Wali</label>
            <select class="form-control" name="pendidikan_wali" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif>

                @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                <option value="" selected="">== PILIH PENDIDIKAN ==</option>
                @else
                <option value="Tidak Sekolah">Tidak Sekolah</option>
                <option value="Putus SD">Putus SD</option>
                <option value="SD Sederajat">SD Sederajat</option>
                <option value="SMP Sederajat">SMP Sederajat</option>
                <option value="SMA Sederajat">SMA Sederajat</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4/S1">D4/S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                @endif
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Pekerjaan Wali</label>
            <select class="form-control" name="pekerjaan_wali" @if($gelombang->status == 0 ||
                is_null($gelombang->gelombang))
                disabled
                @endif>
                @if($gelombang->status == 0 || is_null($gelombang->gelombang))
                <option value="" selected="">== PILIH PEKERJAAN ==</option>
                @else
                <option value="Tidak Bekerja">Tidak Bekerja</option>
                <option value="Nelayan">Nelayan</option>
                <option value="Petani">Petani</option>
                <option value="Peternak">Peternak</option>
                <option value="Guru">Guru</option>
                <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                <option value="Karyawan Swasta">Karyawan Swasta</option>
                <option value="Pedagang Kecil">Pedagang Kecil</option>
                <option value="Pedagang Besar">Pedagang Besar</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Wirausaha">Wirausaha</option>
                <option value="Buruh">Buruh</option>
                <option value="Pensiunan">Pensiunan</option>
                <option value="Meninggal Dunia">Meninggal Dunia</option>
                <option value="Lain-lain">Lain-lain</option>
                @endif
            </select>
        </div>
    </div>


    <div class="col-md-12 mt-3">
        <h2><i><u>Data Kontak</u></i></h2>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label>Nomor Whatsapp *</label>
            <input type="number" class="form-control @error('nomor_hp') is-invalid @enderror" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="nomor_hp"
            @endif
            placeholder="Nomor WA Aktif / Seluler">
            @error('nomor_hp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Email Aktif</label>
            <input type="email" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="email"
            @endif
            placeholder="Email Aktif">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>Rekomendasi</label>
            <input type="text" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="rekomendasi"
            @endif
            placeholder="Rekomendasi Masuk Ke Sekolah Ini">
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label>Kontak Rekomendasi</label>
            <input type="text" class="form-control" @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            disabled
            @else
            name="no_rekomendasi"
            @endif
            placeholder="Nomor WA / Seluler Rekomendasi">
        </div>
    </div>



    <div class="col-md-12">
        <div class="form-group">

            @if($gelombang->status == 0 || is_null($gelombang->gelombang))
            <input type="button" class="btn btn-outline-danger btn-block disabled" value="Pendaftaran Belum Di Buka..."
                disabled>
            @else
            <input type="submit" class="btn btn-outline-success btn-block" value="Kirim Data Formulir">
            @endif
        </div>
    </div>














</div>
</form>