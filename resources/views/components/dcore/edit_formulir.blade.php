<form action="{{route('update', $data->kode_pendaftaran)}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <h2><i><u>Data Pendaftaran</u></i></h2>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jurusan Diambil *</label>
                <select class="form-control @error('jurusan') is-invalid @enderror" name="jurusan">
                    <option disabled selected value>== PILIH JURUSAN ==</option>
                    @foreach($jurusan as $jr)

                    <option value="{{$jr->jurusan}}" @if($data->jurusan == $jr->jurusan) selected @endif>{{$jr->jurusan}}</option>
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
                <input type="text" class="form-control  @error('asal_sekolah') is-invalid @enderror" name="asal_sekolah"
                    placeholder="Nama Asal Sekolah SMP / MTsN" value="{{$data->asal_sekolah}}">
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
                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap"
                    placeholder="Nama Lengkap" value="{{$data->nama_lengkap}}">
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
                <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                    <option disabled selected value>== PILIH GENDER ==</option>

                    <option value="L" @if($data->jenis_kelamin == 'L') selected @endif>Laki - Laki</option>
                    <option value="P"  @if($data->jenis_kelamin == 'P') selected @endif>Perempuan</option>

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
                <input type="number" class="form-control" name="nisn" placeholder="Nomor Induk Siswa Nasional (NISN)" value="{{$data->nisn}}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Tempat Lahir *</label>
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir"
                    placeholder="Kota / Kabupaten" value="{{$data->tempat_lahir}}">
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
                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                    name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{$data->tanggal_lahir}}">
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
                <input type="number" class="form-control @error('no_kk') is-invalid @enderror" name="no_kk"
                    placeholder="32121**********" value="{{$data->no_kk}}">
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
                <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                    <option disabled selected value>== PILIH AGAMA ==</option>

                    <option value="Islam" @if($data->agama == 'Islam') selected @endif>Islam</option>
                    <option value="Kristen" @if($data->agama == 'Kristen') selected @endif>Kristen</option>
                    <option value="Protestan" @if($data->agama == 'Protestan') selected @endif>Protestan</option>
                    <option value="Hindu" @if($data->agama == 'Hindu') selected @endif>Hindu</option>
                    <option value="Budha" @if($data->agama == 'Budha') selected @endif>Budha</option>
                    <option value="Other" @if($data->agama == 'Other') selected @endif>Yang Lainnya</option>


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
                <select class="form-control" name="kebutuhan_khusus">

                    <option disabled selected value>== SILAHKAN PILIH ==</option>

                    <option value="Tidak" selected="" @if($data->kebutuhan_khusus == 'Tidak') selected @endif>Tidak</option>
                    <option value="Netra" @if($data->kebutuhan_khusus == 'Netra') selected @endif>Netra</option>
                    <option value="Rungu" @if($data->kebutuhan_khusus == 'Rungu') selected @endif>Rungu</option>
                    <option value="Grahita Ringan" @if($data->kebutuhan_khusus == 'Grahita Ringan') selected @endif>Grahita Ringan</option>
                    <option value="Grahita Sedang" @if($data->kebutuhan_khusus == 'Grahita Sedang') selected @endif>Grahita Sedang</option>
                    <option value="Daksa Ringan" @if($data->kebutuhan_khusus == 'Daksa Ringan') selected @endif>Daksa Ringan</option>
                    <option value="Daksa Sedang" @if($data->kebutuhan_khusus == 'Daksa Sedang') selected @endif>Daksa Sedang</option>
                    <option value="Laras" @if($data->kebutuhan_khusus == 'Laras') selected @endif>Laras</option>
                    <option value="Wicara" @if($data->kebutuhan_khusus == 'Wicara') selected @endif>Wicara</option>
                    <option value="Tuna Ganda" @if($data->kebutuhan_khusus == 'Tuna Ganda') selected @endif>Tuna Ganda</option>
                    <option value="Hiper Aktif" @if($data->kebutuhan_khusus == 'Hiper Aktif') selected @endif>Hiper Aktif</option>
                    <option value="Cerdas Istimewa" @if($data->kebutuhan_khusus == 'Cerdas Istimewa') selected @endif>Cerdas Istimewa</option>
                    <option value="Bakat Istimewa" @if($data->kebutuhan_khusus == 'Bakat Istimewa') selected @endif>Bakat Istimewa</option>
                    <option value="Kesulitan Belajar" @if($data->kebutuhan_khusus == 'Kesulitan Belajar') selected @endif>Kesulitan Belajar</option>
                    <option value="Narkoba" @if($data->kebutuhan_khusus == 'Narkoba') selected @endif>Narkoba</option>
                    <option value="Indigo" @if($data->kebutuhan_khusus == 'Indigo') selected @endif>Indigo</option>
                    <option value="Down Sindrome" @if($data->kebutuhan_khusus == 'Down Sindrome') selected @endif>Down Sindrome</option>
                    <option value="Autis" @if($data->kebutuhan_khusus == 'Autis') selected @endif>Autis</option>


                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label>Alamat Siswa *</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" name="alamat"
                    placeholder="Alamat Lengkap Siswa">{{$data->alamat}}</textarea>
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
                <input type="text" class="form-control" name="rt" placeholder="RT" value="{{$data->rt}}">
            </div>
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label>RW</label>
                <input type="text" class="form-control" name="rw" placeholder="RW" value="{{$data->rw}}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Kelurahan / Desa</label>
                <input type="text" class="form-control" name="desa" placeholder="Kelurahan / Desa" value="{{$data->desa}}">
            </div>
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label>Kabupaten / Kota</label>
                <input type="text" class="form-control" name="kota" placeholder="Kabupaten / Kota" value="{{$data->kota}}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Kode POS</label>
                <input type="text" class="form-control" name="kode_pos" placeholder="Kode Pos" value="{{$data->kode_post}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Tempat Tinggal *</label>

                <select class="form-control @error('tempat_tinggal') is-invalid @enderror" name="tempat_tinggal">

                    <option disabled selected value>== PILIH TEMPAT TINGGAL ==</option>

                    <option value="Bersama Orang Tua" @if($data->tempat_tinggal == 'Bersama Orang Tua') selected @endif>Bersama Orang Tua</option>
                    <option value="Bersama Wali" @if($data->tempat_tinggal == 'Bersama Wali') selected @endif>Bersama Wali</option>
                    <option value="Pesantren" @if($data->tempat_tinggal == 'Pesantren') selected @endif>Pesantren</option>
                    <option value="Kos "@if($data->tempat_tinggal == 'Kos') selected @endif>Kos</option>
                    <option value="Asrama" @if($data->tempat_tinggal == 'Asrama') selected @endif>Asrama</option>
                    <option value="Panti Asuhan" @if($data->tempat_tinggal == 'Panti Asuhan') selected @endif>Panti Asuhan</option>
                    <option value="Lainnya" @if($data->tempat_tinggal == 'Lainnya') selected @endif>Lainnya</option>

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
                <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah"
                    placeholder="Nama Ayah Kandung" value="{{$data->nama_ayah}}">
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
                <input type="text" class="form-control" name="ktp_ayah" placeholder="Nomor KTP" value="{{$data->ktp_ayah}}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Status Ayah *</label>
                <select class="form-control @error('status_ayah') is-invalid @enderror" name="status_ayah">

                    <option value="" selected="">== STATUS AYAH ==</option>

                    <option value="Masih Ada" @if($data->status_ayah == 'Masih Ada') selected @endif>Masih Ada</option>
                    <option value="Almarhum" @if($data->status_ayah == 'Almarhum') selected @endif>Tidak Ada</option>

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
                <select class="form-control" name="pendidikan_ayah">

                    <option value="" selected="">== PILIH PENDIDIKAN ==</option>

                    <option value="Tidak Sekolah" @if($data->pendidikan_ayah == 'Tidak Sekolah') selected @endif>Tidak Sekolah</option>
                    <option value="Putus SD" @if($data->pendidikan_ayah == 'Putus SD') selected @endif>Putus SD</option>
                    <option value="SD Sederajat" @if($data->pendidikan_ayah == 'SD Sederajat') selected @endif>SD Sederajat</option>
                    <option value="SMP Sederajat" @if($data->pendidikan_ayah == 'SMP Sederajat') selected @endif>SMP Sederajat</option>
                    <option value="SMA Sederajat" @if($data->pendidikan_ayah == 'SMA Sederajat') selected @endif>SMA Sederajat</option>
                    <option value="D1" @if($data->pendidikan_ayah == 'D1') selected @endif>D1</option>
                    <option value="D2" @if($data->pendidikan_ayah == 'D2') selected @endif>D2</option>
                    <option value="D3" @if($data->pendidikan_ayah == 'D3') selected @endif>D3</option>
                    <option value="D4/S1" @if($data->pendidikan_ayah == 'D4/S1') selected @endif>D4/S1</option>
                    <option value="S2" @if($data->pendidikan_ayah == 'S2') selected @endif>S2</option>
                    <option value="S3" @if($data->pendidikan_ayah == 'S3') selected @endif>S3</option>

                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Pekerjaan Ayah</label>
                <select class="form-control" name="pekerjaan_ayah">

                    <option value="" selected="">== PILIH PEKERJAAN ==</option>

                    <option value="Tidak Bekerja" @if($data->pekerjaan_ayah == 'Tidak Bekerja') selected @endif>Tidak Bekerja</option>
                    <option value="Nelayan" @if($data->pekerjaan_ayah == 'Nelayan') selected @endif>Nelayan</option>
                    <option value="Petani" @if($data->pekerjaan_ayah == 'Petani') selected @endif>Petani</option>
                    <option value="Peternak" @if($data->pekerjaan_ayah == 'Peternak') selected @endif>Peternak</option>
                    <option value="Guru" @if($data->pekerjaan_ayah == 'Guru') selected @endif>Guru</option>
                    <option value="PNS/TNI/POLRI" @if($data->pekerjaan_ayah == 'PNS/TNI/POLRI') selected @endif>PNS/TNI/POLRI</option>
                    <option value="Karyawan Swasta" @if($data->pekerjaan_ayah == 'Karyawan Swasta') selected @endif>Karyawan Swasta</option>
                    <option value="Pedagang Kecil" @if($data->pekerjaan_ayah == 'Pedagang Kecil') selected @endif>Pedagang Kecil</option>
                    <option value="Pedagang Besar" @if($data->pekerjaan_ayah == 'Pedagang Besar') selected @endif>Pedagang Besar</option>
                    <option value="Wiraswasta" @if($data->pekerjaan_ayah == 'Wiraswasta') selected @endif>Wiraswasta</option>
                    <option value="Wirausaha" @if($data->pekerjaan_ayah == 'Wirausaha') selected @endif>Wirausaha</option>
                    <option value="Buruh" @if($data->pekerjaan_ayah == 'Buruh') selected @endif>Buruh</option>
                    <option value="Pensiunan" @if($data->pekerjaan_ayah == 'Pensiunan') selected @endif>Pensiunan</option>
                    <option value="Meninggal Dunia" @if($data->pekerjaan_ayah == 'Meninggal Dunia') selected @endif>Meninggal Dunia</option>
                    <option value="Lain-lain" @if($data->pekerjaan_ayah == 'Lain-lain') selected @endif>Lain-lain</option>

                </select>
            </div>
        </div>


        <div class="col-md-12 mt-3">
            <h2><i><u>Data Ibu Kandung</u></i></h2>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Nama Ibu *</label>
                <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu"
                    placeholder="Nama Ibu Kandung" value="{{$data->nama_ibu}}">
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
                <input type="text" class="form-control" name="ktp_ibu" placeholder="Nomor KTP" value="{{$data->ktp_ibu}}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Status Ibu *</label>
                <select class="form-control @error('status_ibu') is-invalid @enderror" name="status_ibu">

                    <option value="" selected="">== STATUS AYAH ==</option>

                    <option value="Masih Ada" @if($data->status_ibu == 'Masih Ada') selected @endif>Masih Ada</option>
                    <option value="Almarhum" @if($data->status_ibu == 'Almarhum') selected @endif>Tidak Ada</option>

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
                <select class="form-control" name="pendidikan_ibu">

                    <option value="" selected="">== PILIH PENDIDIKAN ==</option>

                    <option value="Tidak Sekolah" @if($data->pendidikan_ibu == 'Tidak Sekolah') selected @endif>Tidak Sekolah</option>
                    <option value="Putus SD" @if($data->pendidikan_ibu == 'Putus SD') selected @endif>Putus SD</option>
                    <option value="SD Sederajat" @if($data->pendidikan_ibu == 'SD Sederajat') selected @endif>SD Sederajat</option>
                    <option value="SMP Sederajat" @if($data->pendidikan_ibu == 'SMP Sederajat') selected @endif>SMP Sederajat</option>
                    <option value="SMA Sederajat" @if($data->pendidikan_ibu == 'SMA Sederajat') selected @endif>SMA Sederajat</option>
                    <option value="D1" @if($data->pendidikan_ibu == 'D1') selected @endif>D1</option>
                    <option value="D2" @if($data->pendidikan_ibu == 'D2') selected @endif>D2</option>
                    <option value="D3" @if($data->pendidikan_ibu == 'D3') selected @endif>D3</option>
                    <option value="D4/S1" @if($data->pendidikan_ibu == 'D4/S1') selected @endif>D4/S1</option>
                    <option value="S2" @if($data->pendidikan_ibu == 'S2') selected @endif>S2</option>
                    <option value="S3" @if($data->pendidikan_ibu == 'S3') selected @endif>S3</option>

                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Pekerjaan Ibu</label>
                <select class="form-control" name="pekerjaan_ibu">

                    <option value="" selected="">== PILIH PEKERJAAN ==</option>

                    <option value="Tidak Bekerja" @if($data->pekerjaan_ibu == 'Tidak Bekerja') selected @endif>Tidak Bekerja</option>
                    <option value="Nelayan" @if($data->pekerjaan_ibu == 'Nelayan') selected @endif>Nelayan</option>
                    <option value="Petani" @if($data->pekerjaan_ibu == 'Petani') selected @endif>Petani</option>
                    <option value="Peternak" @if($data->pekerjaan_ibu == 'Peternak') selected @endif>Peternak</option>
                    <option value="Guru" @if($data->pekerjaan_ibu == 'Guru') selected @endif>Guru</option>
                    <option value="PNS/TNI/POLRI" @if($data->pekerjaan_ibu == 'PNS/TNI/POLRI') selected @endif>PNS/TNI/POLRI</option>
                    <option value="Karyawan Swasta" @if($data->pekerjaan_ibu == 'Karyawan Swasta') selected @endif>Karyawan Swasta</option>
                    <option value="Pedagang Kecil" @if($data->pekerjaan_ibu == 'Pedagang Kecil') selected @endif>Pedagang Kecil</option>
                    <option value="Pedagang Besar" @if($data->pekerjaan_ibu == 'Pedagang Besar') selected @endif>Pedagang Besar</option>
                    <option value="Wiraswasta" @if($data->pekerjaan_ibu == 'Wiraswasta') selected @endif>Wiraswasta</option>
                    <option value="Wirausaha" @if($data->pekerjaan_ibu == 'Wirausaha') selected @endif>Wirausaha</option>
                    <option value="Buruh" @if($data->pekerjaan_ibu == 'Buruh') selected @endif>Buruh</option>
                    <option value="Pensiunan" @if($data->pekerjaan_ibu == 'Pensiunan') selected @endif>Pensiunan</option>
                    <option value="Meninggal Dunia" @if($data->pekerjaan_ibu == 'Meninggal Dunia') selected @endif>Meninggal Dunia</option>
                    <option value="Lain-lain" @if($data->pekerjaan_ibu == 'Lain-lain') selected @endif>Lain-lain</option>

                </select>
            </div>
        </div>


   


        <div class="col-md-12 mt-3">
            <h2><i><u>Data Wali</u></i></h2>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Nama Wali</label>
                <input type="text" class="form-control" name="nama_wali" placeholder="Nama Wali" value="{{$data->nama_wali}}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label>Nomor KTP Wali</label>
                <input type="text" class="form-control" name="ktp_wali" placeholder="Nomor KTP Wali" value="{{$data->ktp_wali}}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Pendidikan Wali</label>
                <select class="form-control" name="pendidikan_wali">


                    <option value="" selected="">== PILIH PENDIDIKAN ==</option>

                    <option value="Tidak Sekolah" @if($data->pendidikan_wali == 'Tidak Sekolah') selected @endif>Tidak Sekolah</option>
                    <option value="Putus SD" @if($data->pendidikan_wali == 'Putus SD') selected @endif>Putus SD</option>
                    <option value="SD Sederajat" @if($data->pendidikan_wali == 'SD Sederajat') selected @endif>SD Sederajat</option>
                    <option value="SMP Sederajat" @if($data->pendidikan_wali == 'SMP Sederajat') selected @endif>SMP Sederajat</option>
                    <option value="SMA Sederajat" @if($data->pendidikan_wali == 'SMA Sederajat') selected @endif>SMA Sederajat</option>
                    <option value="D1" @if($data->pendidikan_wali == 'D1') selected @endif>D1</option>
                    <option value="D2" @if($data->pendidikan_wali == 'D2') selected @endif>D2</option>
                    <option value="D3" @if($data->pendidikan_wali == 'D3') selected @endif>D3</option>
                    <option value="D4/S1" @if($data->pendidikan_wali == 'D4/S1') selected @endif>D4/S1</option>
                    <option value="S2" @if($data->pendidikan_wali == 'S2') selected @endif>S2</option>
                    <option value="S3" @if($data->pendidikan_wali == 'S3') selected @endif>S3</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Pekerjaan Wali</label>
                <select class="form-control" name="pekerjaan_wali">
                    <option value="" selected="">== PILIH PEKERJAAN ==</option>

                    <option value="Tidak Bekerja" @if($data->pekerjaan_wali == 'Tidak Bekerja') selected @endif>Tidak Bekerja</option>
                    <option value="Nelayan" @if($data->pekerjaan_wali == 'Nelayan') selected @endif>Nelayan</option>
                    <option value="Petani" @if($data->pekerjaan_wali == 'Petani') selected @endif>Petani</option>
                    <option value="Peternak" @if($data->pekerjaan_wali == 'Peternak') selected @endif>Peternak</option>
                    <option value="Guru" @if($data->pekerjaan_wali == 'Guru') selected @endif>Guru</option>
                    <option value="PNS/TNI/POLRI" @if($data->pekerjaan_wali == 'PNS/TNI/POLRI') selected @endif>PNS/TNI/POLRI</option>
                    <option value="Karyawan Swasta" @if($data->pekerjaan_wali == 'Karyawan Swasta') selected @endif>Karyawan Swasta</option>
                    <option value="Pedagang Kecil" @if($data->pekerjaan_wali == 'Pedagang Kecil') selected @endif>Pedagang Kecil</option>
                    <option value="Pedagang Besar" @if($data->pekerjaan_wali == 'Pedagang Besar') selected @endif>Pedagang Besar</option>
                    <option value="Wiraswasta" @if($data->pekerjaan_wali == 'Wiraswasta') selected @endif>Wiraswasta</option>
                    <option value="Wirausaha" @if($data->pekerjaan_wali == 'Wirausaha') selected @endif>Wirausaha</option>
                    <option value="Buruh" @if($data->pekerjaan_wali == 'Buruh') selected @endif>Buruh</option>
                    <option value="Pensiunan" @if($data->pekerjaan_wali == 'Pensiunan') selected @endif>Pensiunan</option>
                    <option value="Meninggal Dunia" @if($data->pekerjaan_wali == 'Meninggal Dunia') selected @endif>Meninggal Dunia</option>
                    <option value="Lain-lain" @if($data->pekerjaan_wali == 'Lain-lain') selected @endif>Lain-lain</option>
                </select>
            </div>
        </div>


        <div class="col-md-12 mt-3">
            <h2><i><u>Data Kontak</u></i></h2>
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label>Nomor Whatsapp *</label>
                <input type="number" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp"
                    placeholder="Nomor WA Aktif / Seluler" value="{{$data->nomor_hp}}">
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
                <input type="email" class="form-control" name="email" placeholder="Email Aktif" value="{{$data->email}}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Rekomendasi</label>
                <input type="text" class="form-control" name="rekomendasi"
                    placeholder="Rekomendasi Masuk Ke Sekolah Ini" value="{{$data->rekomendasi}}">
            </div>
        </div>


        <div class="col-md-6">
            <div class="form-group">
                <label>Kontak Rekomendasi</label>
                <input type="text" class="form-control" name="no_rekomendasi"
                    placeholder="Nomor WA / Seluler Rekomendasi" value="{{$data->no_rekomendasi}}">
            </div>
        </div>



        <div class="col-md-12">
            <div class="form-group">


                <input type="submit" class="btn btn-success btn-block" value="Update Data Formulir">
            </div>
        </div>














    </div>
</form>
